@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
        <div class="main-content">
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
                <div class="col-12">
                    <div class="box project">
                        <div class="box-header">
                            <h4 class="box-title">Here will be full project name</h4>
                            <div class="box-right d-flex">
                                <a class="btn" href="project-details.html">Project Details</a>
                                <div class="icon-ratting">
                                    <i class='bx bxs-star'></i>
                                </div>
                                <div class="dropdown ml-14">
                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded fs-22'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                        <a class="dropdown-item" href="#"><i class="bx bx-edit mr-5"></i>Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="box-body d-flex justify-content-between pb-0">
                            <div class="team-name">
                                <a href="#" class="team">
                                    <div class="icon"><i class="fas fa-tags"></i></div>
                                    <h5>Team Name</h5>
                                </a>
                            </div>
                            <div class="action">
                                <a href="#" class="comment">32 Comments</a>
                                <a href="#" class="edit">Edit</a>
                                <a href="#" class="invite"><i class="fas fa-user-plus mr-5"></i>Invite People</a>
                                <a href="#" class="add">New<i class="fas fa-caret-down pl-12"></i></a>
                            </div>
                            <ul class="user-list s2">
                                <li><img src="images/avatar/team-1.png" alt="user"></li>
                                <li><img src="images/avatar/team-2.png" alt="user"></li>
                                <li><img src="images/avatar/team-3.png" alt="user"></li>
                                <li><img src="images/avatar/team-4.png" alt="user"></li>
                                <li><img src="images/avatar/team-5.png" alt="user"></li>
                                <li class="total"><span>+4</span></li>
                            </ul>
                        </div>
                        <div class="divider"></div>
                        <div class="box-body content">
                            <h4 class="title">Project Description</h4>
                            <p class="fs-18 font-w400 font-main mt-27 mb-29">Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Praesent sollicitudin felis vel mi facilisis posuere. Nulla ultrices facilisis justo, non varius nisl semper vel. Interdum et malesuada fames ac ante ipsum primis
                                in faucibus. Phasellus at ante mattis, condimentum velit et, dignissim nunc. Integer quis tincidunt purus. Duis dignissim mauris vel elit commodo.</p>
                            <ul>
                                <li>
                                    <p class="fs-18 font-w600 color-primary mb-23"><span class="pr-19">1.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </li>
                                <li>
                                    <p class="fs-18 font-w600 color-primary mb-23"><span class="pr-15">2.</span>Fusce vitae ligula iaculis, sollicitudin sem at, venenatis turpis.</p>
                                </li>
                                <li>
                                    <p class="fs-18 font-w600 color-primary mb-23"><span class="pr-25">.</span>Maecenas pharetra mi sit amet dolor rhoncus, quis placerat elit cursus.</p>
                                </li>
                                <li>
                                    <p class="fs-18 font-w600 color-primary mb-23"><span class="pr-15">3.</span>Nullam eleifend nisi nec diam varius, vitae malesuada ex eleifend.</p>
                                </li>
                                <li>
                                    <p class="fs-18 font-w600 color-primary mb-23"><span class="pr-25">.</span>Integer convallis nisi quis vestibulum semper.</p>
                                </li>
                            </ul>
                            <h6 class="mt-30">Proin rutrum ipsum quis sem faucibus, in elementum mi dignissim.</h6>
                            <p class="mt-32 fs-18">Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo elit, pharetra bibendum justo quis, cursus consectetur erat. Sed nec posuere turpis. Maecenas nec bibendum purus. Nulla fringilla, lorem iaculis iaculis fermentum,
                                ligula nibh mollis ipsum, et scelerisque risus ante eu sem. Phasellus ac sagittis nisi. Suspendisse potenti. Nunc volutpat dui ipsum. Suspendisse potenti.</p>
                            <ul class="list-img">
                                <li>
                                    <div class="img-dv"><img src="images/product/project-01.jpg" alt=""></div>

                                </li>
                                <li>
                                    <div class="img-dv"><img src="images/product/project-02.jpg" alt=""></div>

                                </li>
                                <li>
                                    <div class="img-dv"><img src="images/product/project-03.jpg" alt=""></div>

                                </li>
                                <li>
                                    <div class="img-dv">
                                        <img src="images/product/project-04.jpg" alt="">
                                        <div class="overlay-1"></div>
                                        <a href="#" class="more">
                                            <h5 class="text-white">+ More 5 files</h5>
                                        </a>

                                    </div>


                                </li>
                            </ul>

                            <div class="form-chat">
                                <form action="#" method="get" accept-charset="utf-8">
                                    <div class="message-form-chat">
                                        <!-- /.pin -->
                                        <span class="message-text">
                                            <textarea name="message" placeholder="Type comment here" required="required"></textarea>
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
                                        <!-- <div class="icon-mobile">
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

                            <div class="project-description mt-10">
                                <h4>Project Description</h4>
                                <div class="comment-box">
                                    <div class="comment d-flex">
                                        <div class="left d-flex">
                                            <div class="comment-pic">
                                                <img src="images/avatar/cmt-01.png" alt="">
                                            </div>
                                            <div class="comment-body">
                                                <div class="name">
                                                    <h5 class="font-w600 fs-18">Elizabeth Holland</h5>
                                                    <p class="text mb-0 fs-18">Duis pretium gravida enim, vel maximus ligula fermentum a. Sed rhoncus eget ex id egestas. Nam nec nisl placerat, tempus erat a, condimentum metus.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="group-action mt-10">
                                                <a href="#" class="like active"><i class="fas fa-thumbs-up"></i>34 Like</a>
                                                <a href="#" class="reply"><i class="fas fa-reply-all"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="comment d-flex">
                                        <div class="left d-flex">
                                            <div class="comment-pic">
                                                <img src="images/avatar/cmt-02.png" alt="">
                                            </div>
                                            <div class="comment-body">
                                                <div class="name">
                                                    <h5 class="font-w600 fs-18">Mike Palmer</h5>
                                                    <p class="text mb-0 fs-18">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo, quis tempor ligula. Quisque quis pharetra felis. Ut quis consequat orci, at consequat felis. Suspendisse auctor laoreet placerat.
                                                        Nam et risus non lacus dignissim lacinia sit amet nec eros.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="group-action mt-10">
                                                <a href="#" class="like"><i class="fas fa-thumbs-up"></i>34 Like</a>
                                                <a href="#" class="reply"><i class="fas fa-reply-all"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="comment rep d-flex">
                                        <div class="left d-flex">
                                            <div class="comment-pic">
                                                <img src="images/avatar/cmt-03.png" alt="">
                                            </div>
                                            <div class="comment-body">
                                                <div class="name">
                                                    <h5 class="font-w600 fs-18">Beatrice Collins</h5>
                                                    <p class="text mb-0 fs-18">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo, quis tempor ligula. Quisque quis pharetra felis. Ut quis consequat orci.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="group-action mt-10">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="comment rep d-flex">
                                        <div class="left d-flex">
                                            <div class="comment-pic">
                                                <img src="images/avatar/cmt-04.png" alt="">
                                            </div>
                                            <div class="comment-body">
                                                <div class="name">
                                                    <h5 class="font-w600 fs-18">Roger Meyer</h5>
                                                    <p class="text mb-0 fs-18">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo, quis tempor ligula. Quisque quis pharetra felis. Ut quis consequat orci.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="group-action mt-10">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider mb-0"></div>
                                </div>
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
        </div>
    <!-- END MAIN CONTENT -->
@endsection
