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
        
        $request->validate([
             'name'=>'required',
             'address'=>'required',
             'employee'=>'required',
             'phone_number'=>'required',
         ]);
        try{
            Employee::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'employee'=>$request->employee,
            'phone_number'=>$request->phone_number,
          ]);

          return redirect()->route('employee')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    
    }
}
