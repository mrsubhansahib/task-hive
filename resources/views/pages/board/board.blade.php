@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
        <div class="main-content board">
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
                                <li><img src="./images/avatar/team-1.png" alt="user"></li>
                                <li><img src="./images/avatar/team-2.png" alt="user"></li>
                                <li><img src="./images/avatar/team-3.png" alt="user"></li>
                                <li><img src="./images/avatar/team-4.png" alt="user"></li>
                                <li><img src="./images/avatar/team-5.png" alt="user"></li>
                                <li class="total"><span>+4</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="kanban-board card mb-0 pd-0">
                        <div class="box-body pd-0">
                            <div class="kanban-cont">
                                <div class="kanban-list kanban-list-to-do">
                                    <div class="kanban-header">
                                        <h6 class="card-title">To-Do List</h6>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="panel">
                                            <div class="kanban-box item-box">
                                                <div class="dropdown edit">
                                                    <a href="#" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_card_modal"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <img src="./images/to-do-list/project-1.png" alt="">
                                                </div>
                                                <div class="content-box">
                                                    <h6 class="title fs-16">Food Website hero area</h6>
                                                    <div class="progress skill-progress mt-15 mb-15" style="height:7px;">
                                                        <div class="progress-bar progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                                            <span class="sr-only">78% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="link"><a href="#"><i class="fas fa-paperclip"></i></a></div>
                                                        <div class="time">
                                                            <p class="font-main mb-0"><i class="far fa-clock"></i>Due in 5 days</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-add-card">
                                        <a class="dropdown-item font-w500 fs-16" href="#" data-toggle="modal" data-target="#add_card_modal"><i class="fas fa-plus mr-14"></i>Add a card</a>
                                    </div>
                                </div>
                                <div class="kanban-list kanban-progress">
                                    <div class="kanban-header">
                                        <h6 class="card-title">In Progress</h6>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="panel">
                                            <div class="kanban-box item-box">
                                                <div class="dropdown edit">
                                                    <a href="#" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_card_modal"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <img src="./images/to-do-list/project-2.png" alt="">
                                                </div>
                                                <div class="content-box">
                                                    <h6 class="title fs-16">Food Website hero area</h6>
                                                    <div class="progress skill-progress mt-15 mb-15" style="height:7px;">
                                                        <div class="progress-bar progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                                            <span class="sr-only">78% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="link"><a href="#"><i class="fas fa-paperclip"></i></a></div>
                                                        <div class="time">
                                                            <p class="font-main mb-0"><i class="far fa-clock"></i>Due in 5 days</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="kanban-box item-box">
                                                <div class="dropdown edit">
                                                    <a href="#" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_card_modal"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <img src="./images/to-do-list/project-3.png" alt="">
                                                </div>
                                                <div class="content-box">
                                                    <h6 class="title fs-16">Food Website hero area</h6>
                                                    <div class="progress skill-progress mt-15 mb-15" style="height:7px;">
                                                        <div class="progress-bar progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                                            <span class="sr-only">78% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="link"><a href="#"><i class="fas fa-paperclip"></i></a></div>
                                                        <div class="time">
                                                            <p class="font-main mb-0"><i class="far fa-clock"></i>Due in 5 days</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-add-card">
                                        <a class="dropdown-item font-w500 fs-16" href="#" data-toggle="modal" data-target="#add_card_modal"><i class="fas fa-plus mr-14"></i>Add a card</a>
                                    </div>
                                </div>
                                <div class="kanban-list kanban-review">
                                    <div class="kanban-header">
                                        <h6 class="card-title">In Review</h6>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="panel">
                                            <div class="kanban-box item-box">
                                                <div class="dropdown edit">
                                                    <a href="#" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_card_modal"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <img src="./images/to-do-list/project-4.png" alt="">
                                                </div>
                                                <div class="content-box">
                                                    <h6 class="title fs-16">Food Website hero area</h6>
                                                    <div class="progress skill-progress mt-15 mb-15" style="height:7px;">
                                                        <div class="progress-bar progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                                            <span class="sr-only">78% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="link"><a href="#"><i class="fas fa-paperclip"></i></a></div>
                                                        <div class="time">
                                                            <p class="font-main mb-0"><i class="far fa-clock"></i>Due in 5 days</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-add-card">
                                        <a class="dropdown-item font-w500 fs-16" href="#" data-toggle="modal" data-target="#add_card_modal"><i class="fas fa-plus mr-14"></i>Add a card</a>
                                    </div>
                                </div>
                                <div class="kanban-list kanban-approved">
                                    <div class="kanban-header">
                                        <h6 class="card-title">Approved</h6>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="panel">
                                            <div class="kanban-box item-box">
                                                <div class="dropdown edit">
                                                    <a href="#" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_card_modal"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <img src="./images/to-do-list/project-4.png" alt="">
                                                </div>
                                                <div class="content-box">
                                                    <h6 class="title fs-16">Food Website hero area</h6>
                                                    <div class="progress skill-progress mt-15 mb-15" style="height:7px;">
                                                        <div class="progress-bar progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                                            <span class="sr-only">78% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="link"><a href="#"><i class="fas fa-paperclip"></i></a></div>
                                                        <div class="time">
                                                            <p class="font-main mb-0"><i class="far fa-clock"></i>Due in 5 days</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-add-card">
                                        <a class="dropdown-item font-w500 fs-16" href="#" data-toggle="modal" data-target="#add_card_modal"><i class="fas fa-plus mr-14"></i>Add a card</a>
                                    </div>
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
