@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
        <div class="main-content project">
            <div class="row">
                <div class="col-9 col-xl-7 col-md-8 col-sm-12">
                    <div class="box card-box">
                        <div class="icon-box bg-color-6 d-block">

                            <div class="content text-center color-6">
                                <h5 class="title-box fs-17 font-w500">Total Project</h5>
                                <div class="themesflat-counter fs-18 font-wb">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">1225 +</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box bg-color-7 d-block">

                            <div class="content text-center color-7">
                                <h5 class="title-box fs-17 font-w500">Pending Project</h5>
                                <div class="themesflat-counter fs-18 font-wb">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">75 +</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box bg-color-8 d-block">

                            <div class="content text-center color-8">
                                <h5 class="title-box fs-17 font-w500">On Going project</h5>
                                <div class="themesflat-counter fs-18 font-wb">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">1225 +</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box bg-color-9 d-block">

                            <div class="content text-center color-9">
                                <h5 class="title-box fs-17 font-w500">Complete Project</h5>
                                <div class="themesflat-counter fs-18 font-wb">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">2536 +</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-xl-5 col-md-4 col-sm-12">
                    <div class="box h-100 d-flex align-items-center">
                        <a class="create d-flex bg-primary justify-content-center" href="new-project.html">
                            <div class="icon color-white pt-4 pr-8">
                                <i class='bx bx-plus-circle'></i>
                            </div>
                            <div class="content">
                                <h5 class="color-white">Create New Project</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="box-header pt-0 pl-0 ms-0 mb-4 mt-4 border-bottom-0 responsive-header">
                        <h4 class="box-title fs-22">Recent Project Update</h4>
                        <div class="card-options">
                            <div class="btn-list d-flex">
                                <a href="#" class="btn text-primary border-primary d-flex align-items-center mr-5"><i class='bx bx-plus-circle mr-5' ></i>Add Project</a>
                                <a href="#" class="btn btn-light d-flex align-items-center mr-5"><i class="fas fa-eye mr-5"></i>View All</a>
                                <a href="#" class="btn btn-light me-0 dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false"> Latest <i class="feather feather-chevron-down"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                    <li><a href="#">Monthly</a></li>
                                    <li><a href="#">Yearly</a></li>
                                    <li><a href="#">Weekly</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">Adobe XD</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">Designing Department</p>
                                                <span class="fs-13  mt-2 text-muted">There are many variations of passages</span>
                                            </div>
                                            <img src="./images/icon/experience.png" alt="img" class="img-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex mb-3 mb-md-0">
                                            <div class="mr-10">
                                                <div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#3C21F7"><canvas width="40" height="40"></canvas>
                                                    <div class="chart-circle-value">75%</div>
                                                </div>
                                            </div>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>

                                        </div>
                                        <div class="ms-auto mt-3 mt-sm-0">
                                            <div class="d-flex">
                                                <div class="task-btn bg-danger-1 text-danger btn-link fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Project Priority">High</div> <a class="btn btn-outline-light  text-muted pd-0 fs-34" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                                <ul class="dropdown-menu " role="menu">
                                                    <li><a href="#"><i class="far fa-eye"></i>View</a></li>
                                                    <li><a href="#"><i class='bx bx-plus-circle' ></i>Add</a></li>
                                                    <li><a href="#"><i class='bx bx-trash' ></i>Remove</a></li>
                                                    <li><a href="#"><i class='bx bx-cog' ></i>More</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">HTML</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">HTML Coding Department</p>
                                                <span class="fs-13  mt-2 text-muted">There are many variations of passages</span>
                                            </div>
                                            <img src="./images/icon/html.png" alt="img" class="img-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex mb-3 mb-md-0">
                                            <div class="mr-10">
                                                <div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#3C21F7"><canvas width="40" height="40"></canvas>
                                                    <div class="chart-circle-value">75%</div>
                                                </div>
                                            </div>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>

                                        </div>
                                        <div class="ms-auto mt-3 mt-sm-0">
                                            <div class="d-flex">
                                                <div class="task-btn bg-success-1 text-success-1 fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Project Priority">Low</div> <a class="btn btn-outline-light  text-muted pd-0 fs-34" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                                <ul class="dropdown-menu " role="menu">
                                                    <li><a href="#"><i class="far fa-eye"></i>View</a></li>
                                                    <li><a href="#"><i class='bx bx-plus-circle' ></i>Add</a></li>
                                                    <li><a href="#"><i class='bx bx-trash' ></i>Remove</a></li>
                                                    <li><a href="#"><i class='bx bx-cog' ></i>More</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">Digital Marketing</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">Marketing Department</p>
                                                <span class="fs-13  mt-2 text-muted">There are many variations of passages</span>
                                            </div>
                                            <img src="./images/icon/marketing.png" alt="img" class="img-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex mb-3 mb-md-0">
                                            <div class="mr-10">
                                                <div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#3C21F7"><canvas width="40" height="40"></canvas>
                                                    <div class="chart-circle-value">75%</div>
                                                </div>
                                            </div>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>

                                        </div>
                                        <div class="ms-auto mt-3 mt-sm-0">
                                            <div class="d-flex">
                                                <div class="task-btn bg-yellow-1 text-yellow-1 fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Project Priority">Medium</div> <a class="btn btn-outline-light  text-muted pd-0 fs-34" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                                <ul class="dropdown-menu " role="menu">
                                                    <li><a href="#"><i class="far fa-eye"></i>View</a></li>
                                                    <li><a href="#"><i class='bx bx-plus-circle' ></i>Add</a></li>
                                                    <li><a href="#"><i class='bx bx-trash' ></i>Remove</a></li>
                                                    <li><a href="#"><i class='bx bx-cog' ></i>More</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-xl-6 col-md-6 col-sm-12">
                            <div class="box left-dot">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12 mb-10">
                                            <div class="mt-0 text-start"> <a href="project-details.html" class="box-title mb-0 mt-1 mb-3 font-w600 fs-18">Angular</a>
                                                <p class="fs-14 font-w500 text-muted mb-6">Angular Department</p>
                                                <span class="fs-13  mt-2 text-muted">There are many variations of passages</span>
                                            </div>
                                            <img src="./images/icon/angular.png" alt="img" class="img-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex mb-3 mb-md-0">
                                            <div class="mr-10">
                                                <div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#3C21F7"><canvas width="40" height="40"></canvas>
                                                    <div class="chart-circle-value">75%</div>
                                                </div>
                                            </div>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>

                                        </div>
                                        <div class="ms-auto mt-3 mt-sm-0">
                                            <div class="d-flex">
                                                <div class="task-btn bg-danger-1 text-danger fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Project Priority">High</div> <a class="btn btn-outline-light  text-muted pd-0 fs-34" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                                <ul class="dropdown-menu " role="menu">
                                                    <li><a href="#"><i class="far fa-eye"></i>View</a></li>
                                                    <li><a href="#"><i class='bx bx-plus-circle' ></i>Add</a></li>
                                                    <li><a href="#"><i class='bx bx-trash' ></i>Remove</a></li>
                                                    <li><a href="#"><i class='bx bx-cog' ></i>More</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-12">
                    <!-- CUSTOMERS CHART -->
                    <div class="box f-height">
                        <div class="box-header d-flex justify-content-between">
                            <h3 class="mt-9 fs-22">Project Statistics</h3>
                            <ul class="card-list mb-0">
                                <li class="custom-label"><span></span>Complete</li>
                                <li class="custom-label"><span></span>Doing</li>
                            </ul>
                        </div>
                        <div class="box-body pt-20">
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                    <!-- END CUSTOMERS CHART -->
                </div>
                <div class="col-6 col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="me-auto">
                                <h4 class="card-title fs-22">Employee Category</h4>
                                <p class="fs-14 mt-4">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="box-body pt-0">
                            <div class="row">
                                <div class="col-6 col-xl-12 col-md-6 col-sm-12 w-sm-100 mb-0">
                                    <ul class="box-list mt-25 pr-60">
                                        <li><span class="bg-blue square"></span>Web Design<span>25%</span></li>
                                        <li><span class="bg-success square"></span>UX/UI Design<span>18%</span></li>
                                        <li><span class="bg-warning square"></span>Graphics Design<span>17%</span></li>
                                        <li><span class="bg-blue square"></span>Motion Design<span>12.50%</span></li>
                                        <li><span class="bg-success square"></span>Brand Identity<span>12.50%</span></li>
                                        <li><span class="bg-warning square"></span>Others<span>12.50%</span></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-xl-12 col-md-6 col-sm-12 w-sm-100 mb-0">
                                    <!-- <canvas id="doughnut-chart" width="240" height="240"></canvas> -->
                                    <div class="canvas-container">
                                        <canvas id="chartjs-4" class="chartjs" width="100" height="100"></canvas>
                                        <div class="chart-data">
                                            <div data-percent="25" data-color="#3C21F7" data-label="Web Design"></div>
                                            <div data-percent="18" data-color="#00BC8B" data-label="UX/UI Design"></div>
                                            <div data-percent="17" data-color="#FFB800" data-label="Graphics Design"></div>
                                            <div data-percent="12.5" data-color="#00ECCC" data-label="Motion Design"></div>
                                            <div data-percent="12.5" data-color="#EF7F5A" data-label="Brand Identity"></div>
                                            <div data-percent="12.5" data-color="#5D45FB" data-label="Others"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="box">
                        <div class="box-header  pt-0 align-items-start">
                            <div class="me-auto">
                                <h4 class="card-title mb-0 fs-22">Recent Activity</h4>
                                <p class="mt-6 fs-14 mb-14">September 4, 2021</p>
                            </div>
                            <div class="card-options pr-3">
                                <div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle fs-12" data-bs-toggle="dropdown" aria-expanded="false"> Select Date <i class="feather feather-chevron-down"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu" style="">
                                        <li><a href="#">Monthly</a></li>
                                        <li><a href="#">Yearly</a></li>
                                        <li><a href="#">Weekly</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pb-0">
                            <ul class="message mb-2">
                                <li class="dlab-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="./images/avatar/message-01.png" class="rounded-circle user_img" alt="" />
                                        </div>
                                        <div class="user_info">
                                            <a class="fs-15 font-w500 mt-5 mb-5" href="message.html">Lucinda Massey</a>
                                            <p class="fs-13 mb-0">2 Hour ago</p>
                                        </div>
                                    </div>
                                    <div class="card-options me-0 d-flex align-items-center">
                                        <a href="#" class="text-primary fs-14">Add New Task</a>
                                    </div>
                                </li>
                                <li class="dlab-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont border-pink">
                                            <img src="./images/avatar/message-02.png" class="rounded-circle user_img" alt="" />
                                        </div>
                                        <div class="user_info">
                                            <a class="fs-15 font-w500 mt-5 mb-5" href="message.html">Ryan Nolan</a>
                                            <p class="fs-13 mb-0">25 Min ago</p>
                                        </div>
                                    </div>
                                    <div class="card-options me-0 d-flex align-items-center">
                                        <a href="#" class="text-success fs-14">Review Completed</a>
                                    </div>
                                </li>
                                <li class="dlab-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont border-green">
                                            <img src="./images/avatar/message-03.png" class="rounded-circle user_img" alt="" />
                                        </div>
                                        <div class="user_info">
                                            <a class="fs-15 font-w500 mt-5 mb-5" href="message.html">Lucinda Massey</a>
                                            <p class="fs-13 mb-0">2 Hour ago</p>
                                        </div>
                                    </div>
                                    <div class="card-options me-0 d-flex align-items-center">
                                        <a href="#" class="text-completed fs-14">Task Completed</a>
                                    </div>
                                </li>

                                <li class="dlab-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont border-pink">
                                            <img src="./images/avatar/message-02.png" class="rounded-circle user_img" alt="" />
                                        </div>
                                        <div class="user_info">
                                            <a class="fs-15 font-w500 mt-5 mb-5" href="message.html">Ryan Nolan</a>
                                            <p class="fs-13 mb-0">25 Min ago</p>
                                        </div>
                                    </div>
                                    <div class="card-options me-0 d-flex align-items-center">
                                        <a href="#" class="text-success fs-14">Review Completed</a>
                                    </div>
                                </li>
                                <li class="dlab-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="./images/avatar/message-01.png" class="rounded-circle user_img" alt="" />
                                        </div>
                                        <div class="user_info">
                                            <a class="fs-15 font-w500 mt-5 mb-5" href="message.html">Lucinda Massey</a>
                                            <p class="fs-13 mb-0">2 Hour ago</p>
                                        </div>
                                    </div>
                                    <div class="card-options me-0 d-flex align-items-center">
                                        <a href="#" class="text-primary fs-14">Add New Task</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="box">
                        <div class="box-header  pt-0">
                            <div class="me-auto">
                                <h4 class="card-title mb-0 fs-22">In Progress Project</h4>

                            </div>
                            <div class="card-options pr-3">
                                <div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle fs-12" data-bs-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu" style="">
                                        <li><a href="#">Monthly</a></li>
                                        <li><a href="#">Yearly</a></li>
                                        <li><a href="#">Weekly</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pb-0">
                            <div class="project-progress-content mt-21 mb-26">
                                <div class="list-group-item d-sm-flex  align-items-center border-0 pd-0">
                                    <div class="d-flex w-10">
                                        <div class="task-img bg-primary-transparent"> <img src="./images/icon/html-2.png" alt="img" class=""> </div>

                                    </div>
                                    <div class="w-90 mt-4 mt-md-0 pl-13">
                                        <p class="fs-16 font-w500 ms-auto mb-13">Software Architecture Design</p>
                                        <div class="progress progress-sm w-100">
                                            <div class="progress-bar bg-green-1 w-90"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-17">
                                            <div class="deadline fs-14 font-w500 me-auto d-flex align-items-center"><i class='bx bxs-time-five fs-20 mr-9'></i>Deadline : in 3 days</div>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-progress-content mt-0 mb-26">
                                <div class="list-group-item d-sm-flex  align-items-center border-0 pd-0">
                                    <div class="d-flex w-10">
                                        <div class="task-img bg-primary-transparent"> <img src="./images/icon/html-2.png" alt="img" class=""> </div>

                                    </div>
                                    <div class="w-90 mt-4 mt-md-0 pl-13">
                                        <p class="fs-16 font-w500 ms-auto mb-13">Web Development</p>
                                        <div class="progress progress-sm w-100">
                                            <div class="progress-bar bg-primary-1 w-90"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-17">
                                            <div class="deadline fs-14 font-w500 me-auto d-flex align-items-center"><i class='bx bxs-time-five fs-20 mr-9'></i>Deadline : in 3 days</div>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-progress-content mt-0">
                                <div class="list-group-item d-sm-flex  align-items-center border-0 pd-0">
                                    <div class="d-flex w-10">
                                        <div class="task-img bg-primary-transparent"> <img src="./images/icon/html-2.png" alt="img" class=""> </div>

                                    </div>
                                    <div class="w-90 mt-4 mt-md-0 pl-13">
                                        <p class="fs-16 font-w500 ms-auto mb-13">Mobile App Development</p>
                                        <div class="progress progress-sm w-100">
                                            <div class="progress-bar bg-danger w-90"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-17">
                                            <div class="deadline fs-14 font-w500 me-auto d-flex align-items-center"><i class='bx bxs-time-five fs-20 mr-9'></i>Deadline : in 3 days</div>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-12">
                    <div class="box ">
                        <div class="box-header  pt-0">
                            <div class="me-auto">
                                <h4 class="card-title mb-0 fs-22">Recent Activity</h4>

                            </div>
                            <div class="card-options pr-3">
                                <div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle fs-14" data-bs-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu" style="">
                                        <li><a href="#">Monthly</a></li>
                                        <li><a href="#">Yearly</a></li>
                                        <li><a href="#">Weekly</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pb-0 table-responsive activity mt-18">
                            <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer mw-100" id="task-profile" role="grid">
                                <thead>
                                    <tr class="top">
                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 222.312px;">Project</th>
                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 84.8281px;">Team</th>
                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Start</th>
                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Deadline</th>
                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Progress</th>
                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 110.719px;">Work Status</th>
                                        <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>
                                            <a href="#" class="d-flex "> <span>Design Updated</span> </a>
                                        </td>
                                        <td>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </td>
                                        <td>12-02-2021</td>
                                        <td>16-06-2021</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary w-30"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">On hold</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>
                                            <a href="#" class="d-flex "> <span>Website Develop</span> </a>
                                        </td>
                                        <td>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </td>
                                        <td>01-01-2021</td>
                                        <td>22-04-2021</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-yellow w-50"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex"> <span class="badge badge-danger">Dealy</span>
                                                <div class="mt-1 ms-1"> <span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dealy by 99 days"></span> </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">

                                        <td>
                                            <a href="#" class="d-flex "><span>Digital Marketing</span> </a>
                                        </td>
                                        <td>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </td>
                                        <td>11-04-2021</td>
                                        <td>16-06-2021</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary w-100"></div>
                                            </div>
                                        </td>
                                        <td> <span class="badge badge-success">Complete</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">

                                        <td>
                                            <a href="#" class="d-flex "><span>Ad Analysis</span> </a>
                                        </td>
                                        <td>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </td>
                                        <td>11-03-2021</td>
                                        <td>19-05-2021</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary w-80"></div>
                                            </div>
                                        </td>
                                        <td> <span class="badge badge-success">Complete</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">

                                        <td>
                                            <a href="#" class="d-flex "><span>Design update</span> </a>
                                        </td>
                                        <td>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </td>
                                        <td>05-02-2021</td>
                                        <td>21-04-2021</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary w-70"></div>
                                            </div>
                                        </td>
                                        <td> <span class="badge badge-success">Complete</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">

                                        <td>
                                            <a href="#" class="d-flex "><span>Design update</span> </a>
                                        </td>
                                        <td>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </td>
                                        <td>21-01-2021</td>
                                        <td>15-03-2021</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary w-40"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex"> <span class="badge badge-success">Complete</span>
                                                <div class="mt-1 ms-1"> <span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dealy by 30 days"></span> </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">

                                        <td>
                                            <a href="#" class="d-flex "><span>Design update</span> </a>
                                        </td>
                                        <td>
                                            <ul class="user-list mb-0">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                            </ul>
                                        </td>
                                        <td>23-01-2021</td>
                                        <td>25-02-2021</td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-yellow w-40"></div>
                                            </div>
                                        </td>
                                        <td> <span class="badge badge-success">Complete</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-12">
                    <div class="box">
                        <div class="box-header  pt-0">
                            <div class="me-auto">
                                <h4 class="card-title mb-0 fs-22">Calendar</h4>
                            </div>
                            <div class="card-options pr-3">
                                <div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu" style="">
                                        <li><a href="#">Monthly</a></li>
                                        <li><a href="#">Yearly</a></li>
                                        <li><a href="#">Weekly</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pb-0">
                            <div class="custom-calendar"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="add_project" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Project</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input class="form-control" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Client</label>
                                            <select class="select">
                                                <option>Client 1</option>
                                                <option>Client 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control " type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control " type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Rate</label>
                                            <input placeholder="$50" class="form-control" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <select class="select">
                                                <option>Hourly</option>
                                                <option selected>Fixed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Priority</label>
                                            <select class="select">
                                                <option selected>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload Files</label>
                                    <input class="form-control" type="file">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal custom-modal fade" id="delete_project" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Card</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6 mb-0">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6 mb-0">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edit_card_modal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Card</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Image Card</label>
                                    <input class="form-control" type="file">
                                </div>
                                <div class="form-group">
                                    <label>Card Name</label>
                                    <input type="text" class="form-control" value="Food Website hero area">
                                </div>
                                <div class="form-group">
                                    <label>Due Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control " type="date" value="">
                                    </div>
                                </div>
                                <div class="submit-section text-center">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="add_card_modal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Card</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Image Card</label>
                                    <input class="form-control" type="file">
                                </div>
                                <div class="form-group">
                                    <label>Card Name</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Due Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control " type="date" value="">
                                    </div>
                                </div>
                                <div class="submit-section text-center">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END MAIN CONTENT -->
@endsection
