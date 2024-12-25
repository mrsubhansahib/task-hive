@extends('layouts.master')
@section('title')
    Edit Profile
@endsection
@section('main content')
<!-- MAIN CONTENT -->
<div class="main-content">
    <section class="login singup">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-6">
                <div class="box">
                    <div class="box-header d-flex justify-content-between align-items-center">
                        <a href="{{url('/home')}}">
                            <img src="./images/logo.png" alt="">
                        </a>
                        <div class="action-reg">
                            <h4 class="fs-30">Edit Profile</h4>
                        </div>
                    </div>
                    <div class="line mb-5"></div>
                    <div class="align-item-center">
                        <div class="auth-content my-auto">
                            <form class=" pt-2" action="{{url('edit-profile')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('layouts.error')
                                <div class="mb-3">
                                    <label class="form-label mb-14">Name</label>
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="username" class="form-label mb-14">User Name</label>
                                    <input type="text" name="username" value="{{$user->username}}" class="form-control" id="username" placeholder="Your User Name">
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="useremail" class="form-label mb-14">E-Mail</label>
                                    <input type="email" value="{{$user->email}}" name="email" class="form-control" id="useremail" placeholder="Your Email">
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="jobtitle" class="form-label mb-14">Job Title</label>
                                    <input type="text" name="job_title" value="{{$user->job_title}}" class="form-control" id="jobtitle" placeholder="Your Job">
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="role" class="form-label mb-14">Role</label>
                                    <select class="form-control selectric">
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-24">
                                    <lable for="inputImage" class="form-label mb-14">Image</lable>
                                    <input type="file" class="form-control mt-14" name="image" id="inputUserImage" autocomplete="image">
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
                                    <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Update Profile</button>
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
