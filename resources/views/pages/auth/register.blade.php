@include('layouts.header')
<!-- MAIN CONTENT -->
<div class="main-content">
    <section class="login singup">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-md-6">
                <div class="box">
                    <div class="box-body">
                        <div class="main-title">
                            <h2>Registration</h2>
                        </div>
                        <div class="auth-content my-auto">

                            <form class="mt-6 pt-2" action="{{url('/register')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('layouts.error')
                                <div class="mb-3">
                                    <label class="form-label mb-14">User Name</label>
                                    <input type="text" name="name" class="form-control" id="username" placeholder="Your Name">
                                </div>
                                <div class="mb-3 mt-24">
                                    <label for="useremail" class="form-label mb-14">E-Mail</label>
                                    <input type="email" name="email" class="form-control" id="useremail" placeholder="Your Email">
                                </div>
                                <div class="mb-3 mt-24">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-14">Password</label>
                                        </div>
                                    </div>

                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn shadow-none ms-0" type="button" id="password-addon"><i class="far fa-eye-slash"></i></button>
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
                                    <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Create Account</button>
                                </div>
                            </form>


                            <div class="mt-59 text-center">
                                <p class="text-muted mb-0 fs-14">Already have an account ? <a href="{{'/login'}}" class="text-primary fw-semibold">  Sign in </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END MAIN CONTENT -->
