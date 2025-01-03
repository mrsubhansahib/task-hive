@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
        <div class="main-content project">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Project ID</label> <input class="form-control" placeholder="2569852"> </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Project Title</label> <input class="form-control" placeholder="Software Development"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Department:</label> <select name="attendance" class="form-control custom-select select2 select2-hidden-accessible" data-placeholder="Select Department" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-22-9i9m"><option label="Select Department" data-select2-id="select2-data-24-ktnv"></option> <option value="1">Designing Department</option> <option value="2">Development Department</option> <option value="3">Marketing Department</option> <option value="4">Human Resource Department</option> <option value="5">Managers Department</option> <option value="6">Application Department</option> <option value="7">Support Department</option> <option value="8">IT Department</option> <option value="9">Technical Department</option> <option value="10">Accounts Department</option> </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-23-72at" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-attendance-92-container" aria-controls="select2-attendance-92-container"><span class="select2-selection__rendered" id="select2-attendance-92-container" role="textbox" aria-readonly="true" title="Select Department"></span>
                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Project Priority:</label> <select name="attendance" class="form-control custom-select select2 select2-hidden-accessible" data-placeholder="Select Priority" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-30-l6ni"><option label="Select Priority" data-select2-id="select2-data-32-qodq"></option> <option value="1">High</option> <option value="2">Medium</option> <option value="3">Low</option> </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-31-dlj3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-attendance-wo-container" aria-controls="select2-attendance-wo-container"><span class="select2-selection__rendered" id="select2-attendance-wo-container" role="textbox" aria-readonly="true" title="Select Priority"></span>
                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Client:</label> <select name="attendance" class="form-control custom-select select2 select2-hidden-accessible" data-placeholder="Select Client" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-38-9jkg"><option label="Select Client" data-select2-id="select2-data-40-q3xu"></option> <option value="1">Client 01</option> <option value="2">Client 02</option> <option value="3">Client 03</option> </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-39-684b" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-attendance-8z-container" aria-controls="select2-attendance-8z-container"><span class="select2-selection__rendered" id="select2-attendance-8z-container" role="textbox" aria-readonly="true" title="Enter Client"></span>
                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Price ( $ )</label> <input class="form-control" placeholder="Enter Price"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group "> <label class="form-label">Assign Team:</label> <select name="attendance" class="form-control custom-select select2 select2-hidden-accessible" data-placeholder="Select Client" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-38-9jkg"><option label="Select Team" data-select2-id="select2-data-40-q3xu"></option> <option value="1">Team 01</option> <option value="2">Team 02</option> <option value="3">Team 03</option> </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-39-684b" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-attendance-8z-container" aria-controls="select2-attendance-8z-container"><span class="select2-selection__rendered" id="select2-attendance-9z-container" role="textbox" aria-readonly="true" title="Enter Client"></span>
                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Form:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class='bx bx-calendar'></i> </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text"> </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">To:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class='bx bx-calendar'></i> </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text"> </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-24"> <label class="form-label">Description:</label>
                                <textarea class="form-control" name="text" cols="30" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group"> <label class="form-label">Attachment:</label>
                                        <div class="input-group file-browser"> <input type="text" class="form-control border-end-0 browse-file" placeholder="choose" readonly=""> <label class="input-group-append mb-0"> <span class="btn ripple btn-light"> Browse <input type="file" class="file-browserinput" style="display: none;" multiple=""> </span> </label>                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="custom-controls-stacked d-lg-flex align-items-center">
                                        <label class="form-label mt-1 fs-18 font-w500 color-primary">Work Status :</label>
                                        <label class="custom-control custom-radio success me-4">
                                            <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                                            <span class="custom-control-label">Completed</span>
                                        </label>
                                        <label class="custom-control custom-radio success me-4">
                                            <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                            <span class="custom-control-label">Pending</span>
                                        </label>
                                        <label class="custom-control custom-radio success me-4">
                                            <input type="radio" class="custom-control-input" name="example-radios1" value="option3">
                                            <span class="custom-control-label">On Progress</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gr-btn mt-15"> <a href="#" class="btn btn-danger btn-lg mr-15 fs-16">CLOSE</a> <a href="#" class="btn btn-primary btn-lg fs-16" onclick="not1()">SUBMIT</a> </div>
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
