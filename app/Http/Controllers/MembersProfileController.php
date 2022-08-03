<?php

namespace App\Http\Controllers;

use App\Models\MembersProfile;
use Illuminate\Http\Request;

class MembersProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membersProfile = MembersProfile::get()->all();
                return view('admin.memberdetails',compact('membersProfile'));    
      
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
    public function store(Request $request)
    {
        $a= new MembersProfile();
        $a->fullname = $request->fullname;
        $a->email = $request->email;
        $a->phone = $request->phone;
        $a->clubname = $request->clubname;
        $a->zone = $request->zone;
        $a->position = $request->position;
        $a->rotayear = $request->rotayear;
        $a->riid = $request->riid;
        $a->memberid = $request->memberid;
        
        $a->save();
        return redirect('/memberdetails');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembersProfile  $membersProfile
     * @return \Illuminate\Http\Response
     */
    public function show(MembersProfile $membersProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembersProfile  $membersProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(MembersProfile $membersProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembersProfile  $membersProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembersProfile $membersProfile)
    {
        $a=MembersProfile::where('id',$id)->first();
        $a->fullname = $request->fullname;
        $a->email = $request->email;
        $a->phone = $request->phone;
        $a->clubname = $request->clubname;
        $a->zone = $request->zone;
        $a->position = $request->position;
        $a->rotayear = $request->rotayear;
        $a->riid = $request->riid;
        $a->memberid = $request->memberid;
        $a->save();
        return redirect('/memberdetails');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembersProfile  $membersProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembersProfile $membersProfile)
    {
        $membersProfile = MembersProfile::find($id)->first()->delete();
        return redirect('/memberdetails');
    }
}
