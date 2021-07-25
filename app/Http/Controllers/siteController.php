<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function home(){
        return view('newSite.home');
    }
    public function about(){
        return view('newSite.about');
    }
    public function services(){
        return view('newSite.services');
    }
    public function portfolio(){
        return view('newSite.portfolio');
    }
    public function team(){
        return view('newSite.team');
    }
    public function contact(){
        return view('newSite.contact');
    }
    public function portfolioDetails(){
        return view('newSite.portfolio-details');
    }
    public function contactSubmit(Request $request){
        $request->validate([
            'name'=>'required|min:2|max:15',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
    }

}
