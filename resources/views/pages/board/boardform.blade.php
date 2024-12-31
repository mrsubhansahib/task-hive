@include('layouts.master')
<!-- MAIN CONTENT -->
<div class="main-content">
    <section class="login">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="box">
                    <div class="box-body">
                        <div class="main-title">
                            <h2>Create Board</h2>
                        </div>
                        <div class="auth-content my-auto">
                            <form class="mt-5 pt-2" action="{{ url('/made-board') }}" method="POST">
                                @csrf
                                @include('layouts.error')
                                <div class="mb-24">
                                    <label class="form-label mb-14">Board Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                                </div>
                                <div class="mb-24">
                                    <label class="form-label mb-14">Board Description</label>
                                    <input type="text" name="description" class="form-control" placeholder="Enter description">
                                </div>
                                <div class="mb-16">
                                    <label for="visibility" class="select-label">Select Visibility:</label>
                                    <select id="visibility" class="custom-select">
                                      <option value="public">Public</option>
                                      <option value="private">Private</option>
                                    </select>
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
                            <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                                type="submit">Create</button>
                        </div>
                        </form>

                        <div class="mt-37 text-center">
                            <p class="text-muted mb-0 fs-14">Don't have an account ? <a href="{{ url('/register') }}"
                                    class="text-primary fw-semibold"> Create Account </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<!-- END MAIN CONTENT -->
