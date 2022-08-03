<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembersProfile;

class AdminController extends Controller
{
    public function index()
    {
        if(auth()->user()){
            if(auth()->user()->is_admin==1){
                return view('layouts.dashboard');    
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }

    public function dashboard()
    {
        if(auth()->user()){
            if(auth()->user()->is_admin==1){
                return view('admin.dashboard');    
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }
    public function profile()
    {
        if(auth()->user()){
            if(auth()->user()->is_admin==1){
                return view('admin.profile');    
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }

     //linear search
     public function search(Request $request)
     {
         $membersProfile = MembersProfile::where('fullname',$request->fullname)->get();
         
         if(auth()->user()){
             if(auth()->user()->is_admin==1){
                return view('admin.memberdetails',compact('membersProfile'));        
             }
             else{
                 return redirect('/home');
             }
         } 
         else{
             return redirect('/home');
         }
 
     }

}

