@extends('layouts.dashboard')

@section('content')
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="img/Aman.png" class="rounded-circle" width="50" />
                                    <h4 class="card-title mt-2">Aman Bhandari</h4>
                                    <h6 class="card-subtitle">Professional Development Director</h6>
                                    <h6 class="card-subtitle">Rota-Year 2022/23</h6>
                                    <h6 class="card-subtitle">RAC BALAJU</h6>
                                    <h6 class="card-subtitle">Zone X</h6>
            
                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">RI ID </span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <h6 class="card-subtitle">11257156</h6>
                                            </a></div>
                                    </div>

                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">Member ID </span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <h6 class="card-subtitle">RTR 16648</h6>
                                            </a></div>
                                    </div>

                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">Phone </span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <h6 class="card-subtitle">9861437372</h6>
                                            </a></div>
                                    </div>

                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <span class="value-digit">Email Id</span>
                                            </a></div>
                                        <div class="col-4">
                                                <h6 class="card-subtitle">amanbhandari188@gmail.com</h6>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="row text-center justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                            <button class="btn btn-success mx-auto mx-md-0 text-white">Edit</button>
                                            </a></div>
                                        <div class="col-4">
                                        <button class="btn btn-success mx-auto mx-md-0 text-white">Delete</button>
                                            </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>  

                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">

                                <form class="form-horizontal form-material mx-2" action="/memberdetails" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fullname" placeholder=""
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email"  placeholder=""
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phone"  placeholder=""
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Club Name</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="clubname"  value="RAC Balaju"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Zone</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="zone"  value="Zone X"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Position in Club</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="position"  value=""
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">BOD OR NOT</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="position"  value="BOD/ Not BOD"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Rota year</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="rotayear"  placeholder=""
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">RI ID</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="riid"  placeholder=""
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Member ID</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="memberid"  placeholder=""
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Image</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="memberid"  placeholder=""
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Save
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>  
    
@endsection