@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
        <div class="main-content client">
            <div class="row">
                <div class="col-12">
                    <div class="box card-box">
                        <div class="icon-box bg-color-1">
                            <div class="icon bg-icon-1">
                                <i class="bx bxs-bell bx-tada"></i>
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
                                            <div class="img-mess"><img class="mr-14" src="./images/avatar/avt-1.png" alt="avt"></div>
                                            <div class="info">
                                                <a href="#" class="font-w600 mb-0 color-primary">Elizabeth Holland</a>
                                                <p class="pb-0 mb-0 line-h14 mt-6">Proin ac quam et lectus vestibulum</p>
                                            </div>
                                        </li>

                                        <li class="d-flex">
                                            <div class="img-mess"><img class="mr-14" src="./images/avatar/avt-1.png" alt="avt"></div>
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
                <div class="col-12">
                    <div class="box">
                        <div class="box-body d-flex justify-content-between pt-0 pb-0">
                            <div class="search-form d-flex">
                                <input type="text" placeholder="Client Name" class="form-control">
                                <select class="form-control" id="inputState">
                                    <option selected>Select Company Name</option>
                                    <option>Company 1 </option>
                                    <option>Company 2</option>
                                </select>
                                <button type="submit" class="search d-flex"><i class="fas fa-search"></i>Search</button>
                            </div>
                            <div class="list-action">
                                <a class="list" href="#" onclick="liststyle()"><i class='bx bx-menu' ></i></a>
                                <a href="#" class="list-board active" onclick="listboard()"><i class='bx bxs-dashboard' ></i></a>
                                <a href="#" class="add" data-toggle="modal" data-target="#add_client">Add Client<i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/1.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Tom Schneider</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/2.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Emma Carrol</h5></a>
                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/3.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Kyle Baker</h5></a>
                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/4.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html">
                                <h5 class="mt-17">Kathryn Pearson</h5>
                            </a>
                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/5.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Danielle Meyer</h5></a>
                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/6.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Roy Carpenter</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/7.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Andreea Wade</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/8.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Tom Schneider</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/9.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Brandon Collins</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/10.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href="client-details.html"><h5 class="mt-17">Kathy Andrews</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/11.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href=""><h5 class="mt-17">Bobby Mendez</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">

                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="img-box">
                                <img src="./images/client/12.png" alt="">
                                <div class="pulse-css"></div>
                            </div>
                            <a href=""><h5 class="mt-17">Doris Sanders</h5></a>

                            <p class="fs-14 font-w400 font-main">Founder at <span class="text-clo-primary font-w500 pl-4">Company Name</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class='bx bxs-phone'></i>(589)505-4521</li>
                                <li class="fs-14"><i class='bx bxs-envelope'></i>tom.name@mail.com</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between">
                                <a class="bg-btn-pri color-white" href="message.html">Message</a>
                                <a class="bg-btn-sec color-main" href="user-profile.html">View Profile</a>
                            </div>
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
            <div id="add_client" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Client</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Upload Avata</label>
                                    <input class="form-control" type="file">
                                </div>
                                <div class="form-group">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Client Company</label>
                                    <select class="form-control select">
                                    <option>Company Name</option>
                                    <option>Company Name</option>
                                    <option>Company Name</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Client Phone</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Client Email</label>
                                    <input type="text" class="form-control" value="">
                                </div>

                                <div class="submit-section text-center">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal custom-modal fade" id="delete_client" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Client</h3>
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
            <div id="edit_client" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Client</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control" value="Tom Schneider">
                                </div>
                                <div class="form-group">
                                    <label>Client Company</label>
                                    <select class="form-control select">
                                    <option>Company Name</option>
                                    <option>Company Name</option>
                                    <option>Company Name</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Client Phone</label>
                                    <input type="text" class="form-control" value="(589)505-4521">
                                </div>
                                <div class="form-group">
                                    <label>Client Email</label>
                                    <input type="text" class="form-control" value="tom.name@mail.com">
                                </div>
                                <div class="form-group">
                                    <label>Upload Files</label>
                                    <input class="form-control" type="file">
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
