<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employee(){

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
             'name'=>'required',
             'address'=>'required',
             'designation'=>'required',
             'phone_number'=>'required',
         ]);
        try{
            Employee::create([
            'name'=>$request->name,
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

    public function employeedelete($id){
        Employee::find($id)->delete();
        return redirect()->back()->with('success','Employee Delete.');
    }
}
