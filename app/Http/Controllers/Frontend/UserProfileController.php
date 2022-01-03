<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userprofile()
    {
        // $employees = Employee::all();
        return view('website.layouts.userprofile.userprofile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function employeestore(Request $request)
    // {
    //     try{
    //         Employee::create([
    //         'name'=>$request->name,
    //         'address'=>$request->address,
    //         'designation'=>$request->designation,
    //         'phone_number'=>$request->phone_number,
            
    //       ]);

    //       return redirect()->route('employeeprofile')->with('success', 'Profile updated!');
    //      }
    //      catch(Throwable $throw)
    //      {
    //       return redirect()->back()->with('error', 'Profile updated!');
    //      }
    
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userprofileupdate(Request $request,$id){
        // dd($request->want_to_be_a_food_seeker);
        $userprofile = User::find($id);
        // dd($userprofile);
        
        try{
            $userprofile->update([
                'role'=>$request->want_to_be_a_food_seeker
                
            ]);

          return redirect()->route('userprofile')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
             dd("error");
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
