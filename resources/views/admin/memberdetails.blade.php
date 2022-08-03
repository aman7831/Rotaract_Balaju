@extends('layouts.dashboard')

    @section('content')
   
        <div class="page-wrapper">
       
            
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        @foreach($membersProfile as $MembersProfile)
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="img/Aman.png" class="rounded-circle" width="50" />
                                    <h4 class="card-title mt-2">{{ $MembersProfile->fullname }}</h4>
                                    <h6 class="card-subtitle">{{ $MembersProfile->position }}</h6>
                                    <h6 class="card-subtitle">Rota-Year {{ $MembersProfile->rotayear }}</h6>
                                    <h6 class="card-subtitle">{{ $MembersProfile->clubname }}</h6>
                                    <h6 class="card-subtitle">{{ $MembersProfile->zone }}</h6>
            
                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">RI ID </span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <h6 class="card-subtitle">{{ $MembersProfile->riid }}</h6>
                                            </a></div>
                                    </div>

                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">Member ID </span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <h6 class="card-subtitle">{{ $MembersProfile->memberid }}</h6>
                                            </a></div>
                                    </div>

                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">Phone </span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <h6 class="card-subtitle">{{ $MembersProfile->phone }}</h6>
                                            </a></div>
                                    </div>

                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">Email Id</span>
                                            </a></div>
                                        <div class="col-4">
                                                <h6 class="card-subtitle">{{ $MembersProfile->email }}</h6>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="MembersProfile/{{$MembersProfile->id}}/edit" class="link">
                                            <button class="btn btn-success mx-auto mx-md-0 text-white">Edit</button>
                                            </a></div>
                                        <div class="col-4">
                                        <a href="/MembersProfile/{{$MembersProfile->id}}" class="link">
                                        <button class="btn btn-success mx-auto mx-md-0 text-white">Delete</button>
                                            </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                        @endforeach

                    </div>  
                </div>
            </div>
            
        </div>


@endsection