@extends('layouts.master')
@section('title')
    Password
@endsection
@section('main content')
<!-- MAIN CONTENT -->
<div class="main-content">
    <section class="login singup">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="box">
                    <div class="box-header d-flex justify-content-between">
                        <a href="{{url('/home')}}">
                            <img src="./images/logo.png" alt="">
                        </a>
                        <div class="action-reg">
                            <h4 class="fs-30">Change Password</h4>
                        </div>
                    </div>
                    <div class="line mb-5"></div>
                    <div class="align-item-center">
                        <div class="auth-content my-auto">
                            <form class=" pt-2" action="{{url('/change-password')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="current_password" class="form-label mb-14">Current Password</label>
                                    <input type="password"  name="current_password" class="form-control" id="current_password" placeholder="Current Password">
                                    @error('current_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="new_password" class="form-label mb-14">New Password</label>
                                    <input type="password"  name="new_password" class="form-control" id="new_password" placeholder="New Password">
                                    @error('new_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="new_password_confirmation" class="form-label mb-14">Confirm Password</label>
                                    <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="password-addon">
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
                                    <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Change Password</button>
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
