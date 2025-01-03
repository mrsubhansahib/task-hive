@extends('layouts.master')
<
@section('main content')
    <!-- MAIN CONTENT -->
       <div class="main-content message">
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
            <div class="col-4 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-info-messager">
                                <div class="box-body pd-0 d-flex align-items-start">
                                    <div class="left w-90">
                                        <div class="message-pic big">
                                            <img src="./images/avatar/avt-mess.png" alt="">
                                            <div class="pulse-css"></div>
                                        </div>
                                        <div class="content">
                                            <div class="username">
                                                <h5 class="fs-24">Randy Riley</h5>
                                            </div>
                                            <div class="text">
                                                <p class="pb-5 mt-9 mb-0">Lead UX/UI Designer</p>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" value="checkbox" name="check" checked>
                                                <span class="ml-10">Active</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="dropdown ml-14">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-cog color-text"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-0">
                        <div class="box box-message">
                            <div class="input-group search-area">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="bx bx-search"></i></a></span>
                                <input type="text" class="form-control" placeholder="Search">

                            </div>
                            <div class="box-header">
                                <h4 class="card-title">Recent Message</h4>
                                <div class="dropdown ml-14">
                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="message-list">
                                    <li class="waves-effect waves-teal active">
                                        <div class="left d-flex">
                                            <div class="avatar">
                                                <img src="./images/avatar/message-2.png" alt="">
                                                <div class="pulse-css-1"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <div class="name h6">
                                                        Elizabeth Holland
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Hi, Did you check the file?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.left -->

                                        <div class="clearfix"></div>
                                    </li>
                                    <!-- /li.waves-effect -->
                                    <li class="waves-effect waves-teal">
                                        <div class="left d-flex">
                                            <div class="avatar">
                                                <img src="./images/avatar/message-3.png" alt="">
                                                <div class="pulse-css-1"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <div class="name h6">
                                                        Bobby Mendez
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Hi, When we will start the meeting?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.left -->
                                        <div class="clearfix"></div>
                                    </li>
                                    <!-- /li.waves-effect -->
                                    <li class="waves-effect waves-teal">
                                        <div class="left d-flex">
                                            <div class="avatar">
                                                <img src="./images/avatar/message-4.png" alt="">
                                                <div class="pulse-css-1"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <div class="name h6">
                                                        Andreea Wade
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Please let me check it.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.left -->
                                        <div class="clearfix"></div>
                                    </li>
                                    <!-- /li.waves-effect -->
                                    <li class="waves-effect waves-teal">
                                        <div class="left d-flex">
                                            <div class="avatar">
                                                <img src="./images/avatar/message-5.png" alt="">
                                                <div class="pulse-css-1"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <div class="name h6">
                                                        Tom Schneider
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>What's new about the new project?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.left -->

                                        <div class="clearfix"></div>
                                    </li>
                                    <!-- /li.waves-effect -->
                                    <li class="waves-effect waves-teal">
                                        <div class="left d-flex">
                                            <div class="avatar">
                                                <img src="./images/avatar/message-6.png" alt="">
                                                <div class="pulse-css-1"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <div class="name h6">
                                                        Bobby Mendez
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>I will check it tonight</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.left -->
                                        <div class="clearfix"></div>
                                    </li>
                                    <!-- /li.waves-effect -->
                                    <li class="waves-effect waves-teal">
                                        <div class="left d-flex">
                                            <div class="avatar">
                                                <img src="./images/avatar/message-7.png" alt="">
                                                <div class="pulse-css-1"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <div class="name h6">
                                                        Andreea Wade
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Looks great. Let's finished it.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.left -->
                                        <div class="clearfix"></div>
                                    </li>
                                    <!-- /li.waves-effect -->
                                </ul>
                                <!-- /.message-list scroll -->
                            </div>
                            <!-- /.box-content -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 col-md-12">
                <div class="box message-info">
                    <div class="box-info-messager">
                        <div class="message-pic">
                            <img src="./images/avatar/message-1.png" alt="">
                            <div class="pulse-css"></div>
                        </div>
                        <div class="content">
                            <div class="username">
                                <h5 class="fs-18">Elizabeth Holland</h5>
                            </div>
                            <div class="text">
                                <p class="fs-14">Hi, Did you check the file?</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-info-messager -->
                    <div class="divider"></div>

                    <div class="message-box">
                        <div class="message-in">
                            <div class="message-pic">
                                <img src="./images/avatar/message-1.png" alt="">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus, ornare non ante sed, ultricies fringilla massa. Ut congue, elit non tempus elementum, sem risus tincidunt diam.</p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:39 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.message-in -->
                        <div class="clearfix"></div>
                        <div class="message-out">
                            <div class="message-pic">
                                <img src="./images/profile/profile.png" alt="">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>Cras eu elit congue, placerat dui ut, tincidunt nisl. </p>
                                    <p>Duis mauris augue, efficitur eu arcu sit amet, posuere dignissim neque. Aenean enim sem, pharetra et magna sit amet, luctus</p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:45 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.message-out -->
                        <div class="clearfix"></div>
                        <div class="message-in">
                            <div class="message-pic">
                                <img src="./images/avatar/message-1.png" alt="">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus, ornare non ante sed.</p>
                                    <p>Proin ac quam et lectus vestibulum </p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:52 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="message-in">
                            <div class="message-pic">
                                <img src="./images/avatar/message-1.png" alt="">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus, ornare non ante sed.</p>
                                    <p>Proin ac quam et lectus vestibulum </p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:52 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="form-chat">
                        <form action="#" method="get" accept-charset="utf-8">
                            <div class="message-form-chat">
                                <!-- /.pin -->
                                <span class="message-text">
                                    <textarea name="message" placeholder="Type your message..." required="required"></textarea>
                                </span>
                                <!-- /.message-text -->
                                <span class="camera">
                                    <a href="#" title="">
                                        <i class="fas fa-smile"></i>
                                    </a>
                                </span>
                                <!-- /.camera -->
                                <span class="icon-message">
                                    <a href="#" title="">
                                        <i class="fas fa-paperclip"></i>
                                    </a>
                                </span>
                                <!-- /.icon-right -->
                                <!--<div class="icon-mobile">
                                    <ul>
                                        <li>
                                            <a href="#" title=""><i class="fas fa-smile"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title=""><i class="fas fa-paperclip"></i></a>
                                        </li>
                                    </ul>
                                </div> -->

                                <!-- /.icon-right -->
                                <span class="btn-send">
                                    <button class="waves-effect mt-3" type="submit">Send <i class="fas fa-paper-plane"></i></button>

                                </span>
                                <!-- /.btn-send -->

                            </div>
                            <!-- /.message-form-chat -->
                            <div class="clearfix"></div>
                        </form>
                        <!-- /form -->
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
       </div>
    <!-- END MAIN CONTENT -->

@endsection



