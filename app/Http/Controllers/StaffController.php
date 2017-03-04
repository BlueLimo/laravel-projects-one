<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Task;
use App\Mail\TestMail;
use Mail;

class StaffController extends Controller
{
    //
    public function index()
    {
        return view('create');
    }

    //adding the staff
    public function addStaff(Request $request)
    {

        //adding staff
        Staff::create(['firstname'=>$request->input('firstname'), 'secondname'=>$request->input('secondname'), 'email'=>$request->input('email'), 'staffno'=>$request->input('staffno'), 'contact'=>$request->input('contact')]);
        return Redirect('/home');
    }
    public function deleteStaff($id)
    {
        try
        {
            Staff::findOrFail($id)->forceDelete();
        }
        catch (Exception $e)
        {
            dd("The user you are trying to delete does not exist");
        }
        return Redirect('/home');
    }
    public function getUpdateStaff($id)
    {
       return view('update', ['staffdet' => Staff::find($id)]);
    }
    public function updateStaff(Request $request)
    {
        $id = $request -> input('id');
//        $fname = $request -> input('firstname');
//        $sname = $request -> input('secondname');
//        $sno = $request -> input('staffno');
//        $cont = $request -> input('contact');
        Staff::where('id', $id)->update(['firstname'=>$request->input('firstname'), 'secondname'=>$request->input('secondname'), 'staffno'=>$request->input('staffno'), 'email'=>$request->input('email'), 'contact'=>$request->input('contact')]);
        return Redirect('/home');
    }

    public function viewStaffDetails($id)
    {
        $staffdet = Staff::with('task')->find($id);

        //return to the assign task view
        return view('/staffdetails', ['staffdet' => $staffdet]);
    }

    public function assignTask($id)
    {
        return view('assigntask', ['staffdet' => Staff::find($id)]);
    }

    public function assignStaffTask(Request $request)
    {
        $input = $request->all();
        //save the staff task
        Task::create($input);

        $email = $request ->input('email');
//        $staffno = $request ->input('staffno');
//        $sid = $request->input('id');
//
//        $title = $request ->input('title');
        $content = $request->input('description');

        Mail::to($email)->send(new TestMail($content));

        return redirect('/home');


    }

}
