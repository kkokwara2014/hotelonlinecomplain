<?php

namespace App\Http\Controllers;

use App\Complain;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        
        return view('welcome');
    }

    public function makecomplain(){
        return view('complain');
    }

    public function savecomplain(Request $request){

        $this->validate($request,[

        ]);

        // Complain::created($request->all());

        // return back();

        $complain=new Complain;

        $complain->stafffriendliness=$request->stafffriendliness;
        $complain->efficiency=$request->efficiency;
        $complain->securenviron=$request->securenviron;
        $complain->cleanliness=$request->cleanliness;
        $complain->comfortable=$request->comfortable;
        $complain->amenities=$request->amenities;
        $complain->workingcondition=$request->workingcondition;
        $complain->roomservice=$request->roomservice;
        $complain->restaurant=$request->restaurant;
        $complain->bar=$request->bar;
        $complain->foodquality=$request->foodquality;
        $complain->telephone=$request->telephone;
        $complain->laundry=$request->laundry;
        $complain->internet=$request->internet;
        $complain->meetingroom=$request->meetingroom;
        $complain->fullname=$request->fullname;
        $complain->email=$request->email;
        $complain->phone=$request->phone;
        $complain->comment=$request->comment;
        $complain->visitagain=$request->visitagain;
        $complain->tellafriend=$request->tellafriend;
        $complain->rateus=$request->rateus;

        $complain->save();

        return redirect()->route('makecomplain')->with('success','You complain has been sent successfully! Thank you.');

       
    }
}
