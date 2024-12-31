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
                                    <select name="job_title" required class="form-control" id="visibility">
                                        <option value="Manger" {{ $user->job_title == 'Manager' ? 'selected' : '' }}>Manager</option>
                                        <option value="Project Manager" {{ $user->job_title == 'Project Manager' ? 'selected' : '' }}>Project Manager</option>
                                        <option value="SEO" {{ $user->job_title == 'SEO' ? 'selected' : '' }}>SEO</option>
                                        <option value="IT Skills" {{ $user->job_title == 'IT Skills' ? 'selected' : '' }}>IT Skills</option>
                                        <option value="Word Press" {{ $user->job_title == 'Word Press' ? 'selected' : '' }}>Word Press</option>
                                        <option value="Video Editing" {{ $user->job_title == 'Video Editing' ? 'selected' : '' }}>Video Editing</option>
                                        <option value="Graphic Design" {{ $user->job_title == 'Graphic Design' ? 'selected' : '' }}>Graphic Design</option>
                                        <option value="Web Development" {{ $user->job_title == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                        <option value="Digital Marketing" {{ $user->job_title == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                        <option value="Spoken English IELTS" {{ $user->job_title == 'Spoken English IELTS' ? 'selected' : '' }}>Spoken English IELTS</option>
                                        <option value="Mern Stack Development" {{ $user->job_title == 'Mern Stack Development' ? 'selected' : '' }}>Mern Stack Development</option>
                                        <option value="Social Media Marketing" {{ $user->job_title == 'Social Media Marketing' ? 'selected' : '' }}>Social Media Marketing</option>
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
