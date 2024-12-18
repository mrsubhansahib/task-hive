@extends('layouts.master')
@section('title')
   Dashboard
@endsection
@section('main content')
<!-- MAIN CONTENT -->
    <div class="main-content dashboard">
        <div class="row">
            <div class="col-12">
                <div class="box card-box">
                    <div class="icon-box bg-color-1">
                        <div class="icon bg-icon-1">
                            <i class="bx bxs-bell bx-tada bx-tada"></i>
                        </div>
                        <div class="content">
                            <h5 class="title-box">Notification</h5>
                            <p class="color-1 mb-0 pt-4">5 Unread notification</p>
                        </div>
                    </div>
                    <div class="icon-box bg-color-2">
                        <div class="icon bg-icon-2">
                            <i class='bx bxs-message-rounded'></i>
                        </div>
                        <div class="content click-c">
                            <h5 class="title-box">Message</h5>
                            <p class="color-2 mb-0 pt-4">5 Unread notification</p>
                        </div>
                        <div class="notification-list card">
                            <div class="top box-header">
                                <h5>Notification</h5>

                            </div>
                            <div class="pd-1r">
                                <div class="divider"></div>
                            </div>

                            <div class="box-body">
                                <ul class="list">
                                    <li class="d-flex no-seen">
                                        <div class="img-mess"><img class="mr-14" src="images/avatar/avt-1.png" alt="avt"></div>
                                        <div class="info">
                                            <a href="#" class="font-w600 mb-0 color-primary">Elizabeth Holland</a>
                                            <p class="pb-0 mb-0 line-h14 mt-6">Proin ac quam et lectus vestibulum</p>
                                        </div>
                                    </li>

                                    <li class="d-flex">
                                        <div class="img-mess"><img class="mr-14" src="images/avatar/avt-1.png" alt="avt"></div>
                                        <div class="info">
                                            <a href="#" class="font-w600 mb-0 color-primary">Elizabeth Holland</a>
                                            <p class="pb-0 mb-0 line-h14 mt-6">Proin ac quam et lectus vestibulum</p>
                                        </div>
                                    </li>

                                </ul>
                                <div class="btn-view">
                                    <a class="font-w600 h5" href="message.html">View All</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="icon-box bg-color-3">
                        <a class="create d-flex" href="calendar.html">
                            <div class="icon bg-icon-3">
                                <i class="bx bx-calendar"></i>
                            </div>
                            <div class="content">
                                <h5 class="title-box">Calendar</h5>
                                <p class="color-3 mb-0 pt-4">5 Unread notification</p>
                            </div>
                        </a>
                    </div>
                    <div class="icon-box bg-color-4">
                        <a class="create d-flex" href="#" data-toggle="modal" data-target="#add_project">
                            <div class="icon bg-white">
                                <i class="bx bx-plus"></i>
                            </div>
                            <div class="content d-flex align-items-center">
                                <h5 class="color-white">Create New Project</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-6 col-md-6 col-sm-12 mb-0">
                <div class="row">
                    <div class="col-12">
                        <!-- CUSTOMERS CHART -->
                        <div class="box f-height">
                            <div class="box-header d-flex justify-content-between mb-wrap">
                                <h3 class="mt-9 ml-5">Project Statistics</h3>
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
                    <div class="col-6 col-xl-12 col-sm-12">
                        <div class="box">
                            <div class="box-body d-flex pb-0">
                                <div class="me-auto">
                                    <h5 class="box-title">Total Clients</h5>
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-0 font-wb fs-30 mt-23">78</h4>
                                        <div class="text-primary transaction-caret">
                                            <i class="bx bxs-up-arrow"></i>
                                            <p class="mb-0 text-primary fs-18 font-w400 mt-14 ml-7">+0.5%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" donut-chart-sale">
                                    <span class="donut-1" data-peity='{ "fill": ["#3C21F7", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>7/9</span>
                                    <small class="">76%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-12 col-sm-12">
                        <div class="box">
                            <div class="box-body d-flex pb-0">
                                <div class="me-auto">
                                    <h5 class="box-title mb-36">Total Task Done</h5>
                                    <div class="progress skill-progress mb-10" style="height:10px;">
                                        <div class="progress-bar bg-primary progress-animated" style="width: 78%; height:10px;" role="progressbar">
                                            <span class="sr-only">78% Complete</span>
                                        </div>
                                    </div>
                                    <p class="fs-16 mb-0 mt-2"><span class="text-primary">87 </span>left from target</p>
                                </div>
                                <h4 class="numb font-wb fs-30">34</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-12 col-sm-12">
                        <div class="box">
                            <div class="box-body d-flex pb-0">
                                <div class="me-auto">
                                    <h4 class="numb fs-30 font-wb">565</h4>
                                    <h5 class="card-title fs-18 font-w400">Total Clients</h5>
                                    <p class="fs-14 mb-0 mt-11"><span class="text-primary">-3% </span>than last month</p>
                                </div>
                                <div id="total-revenue-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-12 col-sm-12">
                        <div class="box">
                            <div class="box-body d-flex pb-0">
                                <div class="me-auto">
                                    <h4 class="numb fs-30">565</h4>
                                    <h5 class="card-title fs-18 font-w400">New Projects</h5>
                                    <p class="fs-14 mb-0 mt-11"><span class="text-primary">+0.5% </span>than last month</p>
                                </div>
                                <div id="total-revenue-chart-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box f-height">
                            <div class="box-header d-flex justify-content-between">
                                <h3 class="mt-9 ml-5">Project Statistics</h3>

                            </div>
                            <div class="box-body pt-20">
                                <div id="chartBar3" class="bar-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-sm-12 mb-0">
                <div class="row">
                    <div class="col-12">
                        <div class="box box-manage">
                            <div class="box-body d-flex pd-7 pb-0">
                                <div class="me-auto w-55">
                                    <h5 class="card-title text-white fs-30 font-w500 mt-4">Manage your project in one touch</h5>
                                    <p class="mb-0 text-o7 fs-18 font-w500 pb-11">Etiam facilisis ligula nec velit posuere egestas. Nunc dictum</p>
                                </div>
                                <div class="btn-now">
                                    <a class="h6 font-w500" href="#"><span>Try For Free Now</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 col-xl-12 col-md-12 col-sm-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="me-auto">
                                    <h6 class="card-title font-w400 mb-20">Current Balance</h6>
                                    <div class="count-number d-flex">
                                        <span class="h4 font-w900">$</span>
                                        <h4 class="count font-w900 pl-5">25,456.44</h4>
                                    </div>
                                    <p class="fs-18 mb-0 mt-6"><span class="text-primary pr-7">+3.2</span>than last week</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="chartBar2" class="bar-chart "></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-12 col-md-12 col-sm-12">
                        <div class="box">
                            <div class="box-body center">
                                <div class="w-100"><span class="donut-2 w-100" data-peity='{ "fill": ["#9B8DFF", "#E4EAF8"]}'>228,134</span>
                                </div>
                                <h5 class="fs-20 mb-0 mt-20 font-w500 color-text mt-28">On Progress<span class="text-primary font-w600 pl-8">50% </span></h5>
                                <h5 class="fs-22 mt-18 mb-10 font-wb">Workload Dashboard For CMS Website</h5>
                                <p class="fs-18 mt-18">Praesent eu dolor eu orci vehicula euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title mb-22">Daily Task</h4>
                            </div>
                            <div class="box-body">
                                <div class="content-item mb-wrap">
                                    <div class="left">
                                        <h5 class="font-w500">10:00</h5>
                                    </div>
                                    <div class="right bg-orange">
                                        <div class="content-box w-100">
                                            <h5 class="font-wb text-white fs-20">iOs Dev team meeting</h5>
                                            <h6 class="font-w400 text-w07">10:00 - 11:00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-item mb-wrap mb-32">
                                    <div class="left">
                                        <h5 class="font-w500">11:00</h5>
                                    </div>
                                    <div class="right d-flex pd-0">
                                        <div class="content-box bg-yellow">
                                            <h5 class="font-wb text-white fs-20">Design meeting</h5>
                                            <h6 class="font-w400 text-w07">11:00 - 11:30</h6>
                                        </div>
                                        <div class="content-box bg-blue">
                                            <h5 class="font-wb text-white fs-20">SEO meeting</h5>
                                            <h6 class="font-w400 text-w07">11:30 12:00</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-item mb-0 mb-wrap">
                                    <div class="left">
                                        <h5 class="font-w500">12:00</h5>
                                    </div>
                                    <div class="right bg-light">
                                        <div class="content-box w-100">
                                            <h5 class="font-w500">Lunch Break</h5>
                                            <h6 class="font-w400 mt-10">12:00 - 1:00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <div class="me-auto">
                            <h4 class="card-title mb-6">Project Statistics</h4>
                            <p class="mb-0 fs-14 mt-9 ">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="box-body pt-20">
                        <div class="themesflat-carousel-box data-effect has-bullets bullet-circle bullet24 clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="true">
                            <div class="owl-carousel owl-theme">
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-green">G</h5>
                                            <a href="project-details.html" class="h5 t-title">Gold App</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400 fs-16">Task Done:23/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 52%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-yellow">G</h5>
                                            <a class="h5 t-title" href="project-details.html">Landing Page</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400">Task Done:30/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 67%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="./images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="./images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-blue">G</h5>
                                            <a class="h5 t-title" href="project-details.html">App Landing UI</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400">Task Done:35/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-orange">G</h5>
                                            <a class="h5 t-title" href="project-details.html">Blog Template UI</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400">Task Done:23/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 52%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-green">G</h5>
                                            <a class="h5 t-title" href="project-details.html">Brand logo design</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400">Task Done:30/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 68%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-yellow">G</h5>
                                            <a class="h5 t-title" href="project-details.html">Gold App</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400">Task Done:30/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 67%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-blue">G</h5>
                                            <a class="h5 t-title" href="project-details.html">New Landing Design</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400">Task Done:35/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-carousel">
                                    <div class="card-top">
                                        <div class="sm-f-wrap d-flex">
                                            <h5 class="icon-gold text-white bg-orange">G</h5>
                                            <a class="h5 t-title" href="project-details.html">Skote Dashboard UI</a>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-center">
                                        <h6 class="font-w400">Task Done:23/45</h6>
                                        <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                            <div class="progress-bar bg-primary progress-animated" style="width: 52%; height:7px;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="sm-f-wrap d-flex justify-content-between">
                                            <ul class="user-list">
                                                <li><img src="images/avatar/user-1.png" alt="user"></li>
                                                <li><img src="images/avatar/user-2.png" alt="user"></li>
                                                <li><img src="images/avatar/user-3.png" alt="user"></li>
                                                <li><img src="images/avatar/user-4.png" alt="user"></li>
                                                <li><img src="images/avatar/user-5.png" alt="user"></li>
                                            </ul>
                                            <ul class="tf-icon-list">
                                                <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.owl-carousel -->
                        </div>
                        <!-- /.themesflat-carousel -->
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <div class="me-auto">
                            <h4 class="card-title">Project Category</h4>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="box-body pt-0">
                        <div class="row">
                            <div class="col-6 col-xl-12 w-sm-100 mb-0">
                                <ul class="box-list mt-26 pr-67">
                                    <li><span class="bg-blue square"></span>Web Design<span>25%</span></li>
                                    <li><span class="bg-success square"></span>UX/UI Design<span>18%</span></li>
                                    <li><span class="bg-warning square"></span>Graphics Design<span>17%</span></li>
                                    <li><span class="bg-blue square"></span>Motion Design<span>12.50%</span></li>
                                    <li><span class="bg-success square"></span>Brand Identity<span>12.50%</span></li>
                                    <li><span class="bg-warning square"></span>Others<span>12.50%</span></li>
                                </ul>
                            </div>
                            <div class="col-6 col-xl-12 w-sm-100 mb-0">
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
            <div class="col-6 col-sm-12">
                <div class="box">
                    <div class="box-header pt-0">
                        <div class="me-auto">
                            <h4 class="card-title mb-0">Message</h4>
                        </div>
                    </div>
                    <div class="box-body pb-0 pt-39">
                        <ul class="message mb-2">
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/message-01.png" class="rounded-circle user_img" alt="" />
                                    </div>
                                    <div class="user_info">
                                        <a class="h6" href="message.html">Richard Coleman</a>
                                        <p class="fs-14 mb-0">Hi Jackma! How are you?</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont border-pink">
                                        <img src="./images/avatar/message-02.png" class="rounded-circle user_img" alt="" />
                                    </div>
                                    <div class="user_info">
                                        <a class="h6" href="message.html">Jessica Elliot</a>
                                        <p class="fs-14 mb-0">Do you need like the Color, typography and spacing? </p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont border-green">
                                        <img src="./images/avatar/message-03.png" class="rounded-circle user_img" alt="" />
                                    </div>
                                    <div class="user_info">
                                        <a class="h6" href="message.html">Steve Ford</a>
                                        <p class="fs-14 mb-0">Can I your budget?</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont border-blue">
                                        <img src="./images/avatar/message-04.png" class="rounded-circle user_img" alt="" />
                                    </div>
                                    <div class="user_info">
                                        <a class="h6" href="message.html">Mary Ann Lucas</a>
                                        <p class="fs-14 mb-0">Looks Good. Please go forward!</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div id="add_project" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input class="form-control" value="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
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
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control " type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control" type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 mb-0">
                                    <div class="form-group">
                                        <label>Rate</label>
                                        <input placeholder="$50" class="form-control" value="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-0">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <select class="select">
                                            <option>Hourly</option>
                                            <option selected>Fixed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
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
                            <h3>Delete Project</h3>
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

        <div class="modal custom-modal fade" id="edit_project" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h5 class="modal-title">Edit Project</h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input class="form-control" value="Gold App" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Client</label>
                                        <select class="select">
                                            <option>Client 1</option>
                                            <option>Client 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- END MAIN CONTENT -->

@endsection

