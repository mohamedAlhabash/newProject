<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
       $data= $request->except('_token');
        $request->validate([
            'name'=>'required|min:2|max:15',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        Mail::to('admin@admin.com')->send(new contactMail($data));
        return redirect()->route('site.contact');
    }

}
