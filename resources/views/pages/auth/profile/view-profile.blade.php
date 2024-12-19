@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('main content')
<!-- MAIN CONTENT -->
<div class="main-content">
    <section class="login singup">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="box">
                    <div class="box-header d-flex justify-content-between">
                        <a href="{{url('/home')}}">
                            <img src="./images/logo.png" alt="">
                        </a>
                        <div class="action-reg">
                            <h4 class="fs-30">View Profile</h4>
                        </div>
                    </div>
                    <div class="line mb-5"></div>
                    <div class="align-item-center">
                        <div class="auth-content my-auto">
                            <form class=" pt-2" action="{{url('/profile')}}" method="GET" enctype="multipart/form-data">
                                @csrf
                                @include('layouts.error')
                                <div class="mb-3">
                                    <label class="form-label mb-14">User Name</label>
                                    <input type="text" value="{{$user->name}}" readonly name="name" class="form-control" id="username" placeholder="Your Name">
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="useremail" class="form-label mb-14">E-Mail</label>
                                    <input type="email" value="{{$user->email}}" readonly name="email" class="form-control" id="useremail" placeholder="Your Email">
                                </div>
                                <div class="mb-3 mt-24">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-14">Password</label>
                                        </div>
                                    </div>

                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" value="{{'password'}}" readonly name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                       <!-- <button class="btn shadow-none ms-0" type="button" id="password-addon"><i class="far fa-eye-slash"></i></button>-->
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                I agree to the <a href="#" class="text-primary"> Terms of services</a> & <a href="#" class="text-primary"> Privacy policy</a>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3 mt-29">
                                    <a href="{{url('edit-profile')}}" class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500">Edit Profile</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END MAIN CONTENT -->
@endsection
