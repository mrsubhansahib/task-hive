@include('layouts.header')
<!-- MAIN CONTENT -->
  <div class="main-content">
    <section class="login">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="box">
                    <div class="box-body">
                        <div class="main-title">
                            <h2>Sign in</h2>
                        </div>
                        <div class="auth-content my-auto">
                            <form class="mt-5 pt-2" action="{{url('/login')}}" method="POST">
                                @csrf
                                @include('layouts.error')
                                <div class="mb-24">
                                    <label class="form-label mb-14">E-Mail</label>
                                    <input type="email" name="email" class="form-control" id="username" placeholder="Your Email">
                                </div>
                                <div class="mb-16">
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
                                <div class="row mb-29">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label fs-14" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Sign in</button>
                                </div>
                            </form>

                            <div class="mt-37 text-center">
                                <p class="text-muted mb-0 fs-14">Don't have an account ? <a href="{{url('/register')}}" class="text-primary fw-semibold">  Create Account </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END MAIN CONTENT -->

