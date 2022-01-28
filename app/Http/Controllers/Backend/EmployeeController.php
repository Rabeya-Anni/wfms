<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Employee;


class EmployeeController extends Controller
{
    public function employee(Request $request){

        $search = $request->query('search');
        if($search){
        $employees = Employee::where('username', 'LIKE', '%' .$search. '%')
        ->orWhere('email', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layout.employee.employee',compact('employees'));
        }

        $employees = Employee::all();
        return view('admin.layout.employee.employee',compact('employees'));
    }

    public function employeeform()
    { 
        return view('admin.layout.employee.employeeform');//,compact('items'));
    }

    public function employeestore(Request $request)
    {

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalextension();
            $file->storeAs('/uploads',$filename);
        }
        
        $request->validate([
             'username'=>'required',
             'email'=>'required',
             'address'=>'required',
             'designation'=>'required',
             'phone_number'=>'required',
         ]);
        try{
            Employee::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'address'=>$request->address,
            'designation'=>$request->designation,
            'phone_number'=>$request->phone_number,
            'image'=>$filename,
          ]);

          return redirect()->route('employee')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    
    }
    public function employeeview($id){
        $employee = Employee::find($id);
        return view('admin.layout.employee.employeeview',compact('employee'));
    }

    public function employeeedit($id){
        $employee = Employee::find($id);
        return view('admin.layout.employee.employeeedit',compact('employee'));
    }

    public function employeeupdate(Request $request,$id){
        $employee = Employee::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalextension();
            $file->storeAs('/uploads',$filename);
        }
        try{
            $employee->update([
                'username'=>$request->username,
                'email'=>$request->email,
                'address'=>$request->address,
                'designation'=>$request->designation,
                'phone_number'=>$request->phone_number,
                'image'=>$filename,
            ]);

          return redirect()->route('employee')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }

    public function employeedelete($id){
        Employee::find($id)->delete();
        return redirect()->back()->with('success','Employee Delete.');
    }
}
