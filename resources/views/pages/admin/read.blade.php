@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
        <div class="main-content client project">
            @include('layouts.error')
            <div class="row">
                <div class="col-8 col-xl-12">
                    <div class="box pd-0">
                        <div class="tab-menu-heading hremp-tabs p-0 ">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs w-100 d-flex justify-content-between">
                                    <li><a href="#tab5" class="active" data-bs-toggle="tab">User</a></li>
                                    <li><a href="#tab6" data-bs-toggle="tab">Workspace</a></li>
                                    <li><a href="#tab7" data-bs-toggle="tab">User Workspace</a></li>
                                    <li><a href="#tab8" data-bs-toggle="tab">Board</a></li>
                                    <li><a href="#tab9" data-bs-toggle="tab">Tab</a></li>
                                    <li><a href="#tab10" data-bs-toggle="tab">Card</a></li>
                                    <li><a href="#tab11" data-bs-toggle="tab">Label</a></li>
                                    <li><a href="#tab12" data-bs-toggle="tab">Checklist</a></li>
                                    <li><a href="#tab13" data-bs-toggle="tab">Checklist Task</a></li>
                                    <li><a href="#tab14" data-bs-toggle="tab">Notification</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                            <div class="tab-content">
                                <div class="tab-pane" id="tab6">
                                    <div class="box-body pl-15 pr-15 pb-20 table-responsive activity mt-10">
                                        <a href={{url('/user-form')}}></a>
                                        <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer mw-100" id="task-profile" role="grid">
                                            <thead>
                                                <tr class="top">
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 222.312px;">Id</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 222.312px;">Name</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 84.8281px;">User Name</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">E-mail</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Job Title</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Image</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 110.719px;">Role</th>
                                                    <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user )
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->job_title}}</td>
                                                    <td><img src="{{ asset('image/'.$user->image) }}" alt="Profile Image" width="50"></td>
                                                    <td>{{$user->role}}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-dots-horizontal-rounded'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="{{url('/user-update' , $user->id)}}" class="dropdown-item "><i class="bx bx-edit mr-5"></i>Edit</a>
                                                                <a href="{{url('/user-destroy' , $user->id)}}" class="dropdown-item " data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7">
                                    <div class="box-body">
                                        <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer" id="task-profile-1" role="grid">
                                            <thead>
                                                <tr class="top">
                                                    <th class="border-bottom-0 text-center sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile-1" rowspan="1" colspan="1" style="width: 26.6562px;">No</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile-1" rowspan="1" colspan="1" style="width: 222.312px;">Task</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile-1" rowspan="1" colspan="1" style="width: 84.8281px;">Priority</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile-1" rowspan="1" colspan="1" style="width: 87.9844px;">Start Date</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile-1" rowspan="1" colspan="1" style="width: 87.9844px;">Deadline</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile-1" rowspan="1" colspan="1" style="width: 71.875px;">Progress</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile-1" rowspan="1" colspan="1" style="width: 110.719px;">Work Status</th>
                                                    <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="text-center">1</td>
                                                    <td>
                                                        <a href="#" class="d-flex "> <span>Design Updated</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-danger-light">High</span></td>
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
                                                    <td class="text-center">2</td>
                                                    <td>
                                                        <a href="#" class="d-flex "> <span>Website Develop</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-success-light">Low</span></td>
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
                                                    <td class="text-center">3</td>
                                                    <td>
                                                        <a href="#" class="d-flex "><span>Digital Marketing</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-warning-light">Medium</span></td>
                                                    <td>11-04-2021</td>
                                                    <td>16-06-2021</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary w-100"></div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="badge badge-success">Completed</span> </td>
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
                                                    <td class="text-center">4</td>
                                                    <td>
                                                        <a href="#" class="d-flex "><span>Ad Analysis</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                    <td>11-03-2021</td>
                                                    <td>19-05-2021</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary w-80"></div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="badge badge-primary">On Progress</span> </td>
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
                                                    <td class="text-center">5</td>
                                                    <td>
                                                        <a href="#" class="d-flex "><span>Design update</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                    <td>05-02-2021</td>
                                                    <td>21-04-2021</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary w-70"></div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="badge badge-primary">On Progress</span> </td>
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
                                                    <td class="text-center">6</td>
                                                    <td>
                                                        <a href="#" class="d-flex "><span>Design update</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                    <td>21-01-2021</td>
                                                    <td>15-03-2021</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary w-40"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex"> <span class="badge badge-danger">Dealy</span>
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
                                                    <td class="text-center">7</td>
                                                    <td>
                                                        <a href="#" class="d-flex "><span>Design update</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                    <td>23-01-2021</td>
                                                    <td>25-02-2021</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-yellow w-40"></div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="badge badge-primary">On Progress</span> </td>
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
                                                    <td class="text-center">8</td>
                                                    <td>
                                                        <a href="#" class="d-flex "><span>Design update</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                    <td>13-03-2021</td>
                                                    <td>05-05-2021</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary w-100"></div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="badge badge-success">Completed</span> </td>
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
                                                    <td class="text-center">9</td>
                                                    <td>
                                                        <a href="#" class="d-flex "> <span>Design update</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-success-light">Low</span></td>
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
                                                    <td class="text-center">10</td>
                                                    <td>
                                                        <a href="#" class="d-flex "><span>Design update</span> </a>
                                                    </td>
                                                    <td><span class="badge badge-warning-light">Medium</span></td>
                                                    <td>11-04-2021</td>
                                                    <td>16-06-2021</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary w-100"></div>
                                                        </div>
                                                    </td>
                                                    <td> <span class="badge badge-success">Completed</span> </td>
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
                                <div class="tab-pane" id="tab8">
                                    <div class="box-body">
                                        <div class="table-responsive"> <a href="#" class="btn btn-primary btn-tableview">Add Invoice</a>
                                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="invoice-tables">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">InvoiceID</th>
                                                        <th class="border-bottom-0">Amount</th>
                                                        <th class="border-bottom-0">Invoice Date</th>
                                                        <th class="border-bottom-0">Due Date</th>
                                                        <th class="border-bottom-0">Payment</th>
                                                        <th class="border-bottom-0">Status</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> <a href="#">#INV-0478</a> </td>
                                                        <td>$345.00</td>
                                                        <td>12-01-2021</td>
                                                        <td>14-02-2021</td>
                                                        <td> <span class="">$345.000</span> </td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-1245</a> </td>
                                                        <td>$834.00</td>
                                                        <td>12-01-2021</td>
                                                        <td>14-02-2021</td>
                                                        <td> <span class="">$834.000</span> </td>
                                                        <td><span class="badge badge-danger-light">UnPaid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-5280</a> </td>
                                                        <td>$16,753.00</td>
                                                        <td>21-01-2021</td>
                                                        <td>15-01-2021</td>
                                                        <td> <span class="">$16,753.000</span> </td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-2876</a> </td>
                                                        <td>$297.00</td>
                                                        <td>05-02-2021</td>
                                                        <td>21-02-2021</td>
                                                        <td> <span class="">$297.000</span> </td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-1986</a> </td>
                                                        <td>$12,897.00</td>
                                                        <td>01-01-2021</td>
                                                        <td>24-02-2021</td>
                                                        <td> <span class="">$12,897.00</span> </td>
                                                        <td><span class="badge badge-danger-light">UnPaid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-2689</a> </td>
                                                        <td>$29,652.00</td>
                                                        <td>01-01-2021</td>
                                                        <td>04-02-2021</td>
                                                        <td> <span class="">$29,652.00</span> </td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-0298</a> </td>
                                                        <td>$67,298.00</td>
                                                        <td>02-02-2021</td>
                                                        <td>24-02-2021</td>
                                                        <td> <span class="">$67,298.00</span> </td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-0298</a> </td>
                                                        <td>$87,287.00</td>
                                                        <td>12-01-2021</td>
                                                        <td>21-02-2021</td>
                                                        <td> <span class="">$87,287.00</span> </td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-7618</a> </td>
                                                        <td>$29,674.00</td>
                                                        <td>04-02-2021</td>
                                                        <td>14-03-2021</td>
                                                        <td> <span class="">$29,674.00</span> </td>
                                                        <td><span class="badge badge-danger-light">UnPaid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#INV-0287</a> </td>
                                                        <td>$25,186.00</td>
                                                        <td>02-01-2021</td>
                                                        <td>12-02-2021</td>
                                                        <td> <span class="">$25,186.00</span> </td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                <div class="tab-pane" id="tab9">
                                    <div class="box-body">
                                        <div class="table-responsive"> <a href="#" class="btn btn-primary btn-tableview">Add Payment</a>
                                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="payment-tables">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">PaymentID</th>
                                                        <th class="border-bottom-0">($)Amount</th>
                                                        <th class="border-bottom-0">Payment Type</th>
                                                        <th class="border-bottom-0">Due Date</th>
                                                        <th class="border-bottom-0">Status</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> <a href="#">#PAY-0478</a> </td>
                                                        <td><span class="font-weight-semibold">$345.00</span></td>
                                                        <td>Cash</td>
                                                        <td>12-01-2021</td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-0329</a> </td>
                                                        <td><span class="font-weight-semibold">$897.00</span></td>
                                                        <td>Card</td>
                                                        <td>16-02-2021</td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-0298</a> </td>
                                                        <td><span class="font-weight-semibold">$298.00</span></td>
                                                        <td>Cash</td>
                                                        <td>05-03-2021</td>
                                                        <td><span class="badge badge-danger-light">UnPaid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-0560</a> </td>
                                                        <td><span class="font-weight-semibold">$839.00</span></td>
                                                        <td>Online Payment</td>
                                                        <td>12-04-2021</td>
                                                        <td><span class="badge badge-danger-light">UnPaid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-0927</a> </td>
                                                        <td><span class="font-weight-semibold">$9,238.00</span></td>
                                                        <td>Cash</td>
                                                        <td>05-02-2021</td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-2091</a> </td>
                                                        <td><span class="font-weight-semibold">$11,342.00</span></td>
                                                        <td>Online Payment</td>
                                                        <td>12-03-2021</td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-1342</a> </td>
                                                        <td><span class="font-weight-semibold">$82,341.00</span></td>
                                                        <td>Cash</td>
                                                        <td>13-02-2021</td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-1387</a> </td>
                                                        <td><span class="font-weight-semibold">$9,238.00</span></td>
                                                        <td>Card</td>
                                                        <td>12-02-2021</td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-3298</a> </td>
                                                        <td><span class="font-weight-semibold">$12,765.00</span></td>
                                                        <td>Cash</td>
                                                        <td>25-03-2021</td>
                                                        <td><span class="badge badge-danger-light">UnPaid</span></td>
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
                                                    <tr>
                                                        <td> <a href="#">#PAY-2125</a> </td>
                                                        <td><span class="font-weight-semibold">$35,250.00</span></td>
                                                        <td>Online Payment</td>
                                                        <td>16-03-2021</td>
                                                        <td><span class="badge badge-success-light">Paid</span></td>
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
                                <div class="tab-pane" id="tab10">
                                    <div class="box-body">
                                        <div class="table-responsive"> <a href="#" class="btn btn-primary btn-tableview">Upload Files</a>
                                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="files-tables">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0 text-center w-5">No</th>
                                                        <th class="border-bottom-0">File Name</th>
                                                        <th class="border-bottom-0">Upload By</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td> <a href="#" class="font-weight-semibold fs-14 mt-5">document.pdf<span class="text-muted ms-2">(23 KB)</span></a>
                                                            <div class="clearfix"></div> <small class="text-muted">2 hours ago</small> </td>
                                                        <td>Client</td>
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
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td> <a href="#" class="font-weight-semibold fs-14 mt-5">image.jpg<span class="text-muted ms-2">(2.67 KB)</span></a>
                                                            <div class="clearfix"></div> <small class="text-muted">1 day ago</small> </td>
                                                        <td>Admin</td>
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
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td> <a href="#" class="font-weight-semibold fs-14 mt-5">file.zip<span class="text-muted ms-2">(798.16MB)</span></a>
                                                            <div class="clearfix"></div> <small class="text-muted">2 days ago</small> </td>
                                                        <td>Admin</td>
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
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td> <a href="#" class="font-weight-semibold fs-14 mt-5">Project<span class="text-muted ms-2">(578.6MB)</span></a>
                                                            <div class="clearfix"></div> <small class="text-muted">1 day ago</small> </td>
                                                        <td>Team Lead</td>
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
                                                    <tr>
                                                        <td class="text-center">6</td>
                                                        <td> <a href="#" class="font-weight-semibold fs-14 mt-5">text.doc<span class="text-muted ms-2">(5.6MB)</span></a>
                                                            <div class="clearfix"></div> <small class="text-muted">3 days ago</small> </td>
                                                        <td>Team</td>
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
                                                    <tr>
                                                        <td class="text-center">7</td>
                                                        <td> <a href="#" class="font-weight-semibold fs-14 mt-5">custom.js<span class="text-muted ms-2">(15 KB)</span></a>
                                                            <div class="clearfix"></div> <small class="text-muted">1 week ago</small> </td>
                                                        <td>Team Lead</td>
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
                                <div class="tab-pane" id="tab11">
                                    <div class="box-body"> <a href="#" class="btn btn-primary btn-tableview">Add Ticket</a>
                                        <div class="table-responsive">
                                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="ticket-tables">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">TicketID</th>
                                                        <th class="border-bottom-0">Title</th>
                                                        <th class="border-bottom-0">Category</th>
                                                        <th class="border-bottom-0">Assigned To</th>
                                                        <th class="border-bottom-0">Status</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#Ticket-01</td>
                                                        <td> <a href="#">Sed ut perspiciatis unde omnis iste natus</a> </td>
                                                        <td>Support</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/1.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Faith Harris</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-primary">New</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-02</td>
                                                        <td> <a href="#">Sed ut perspiciatis unde omnis iste natus</a> </td>
                                                        <td>Services</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/2.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Austin Bell</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-success">Closed</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-03</td>
                                                        <td> <a href="#">Sed ut perspiciatis unde omnis iste natus</a> </td>
                                                        <td>Customization</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/3.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Maria Bower</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-orange">Open</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-04</td>
                                                        <td> <a href="#">Excepteur sint occaecat cupidatat</a> </td>
                                                        <td>Support</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/4.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Peter Hill</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-success">Closed</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-05</td>
                                                        <td> <a href="#">Et harum quidem rerum facilis</a> </td>
                                                        <td>Services</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/5.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Victoria Lyman</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-success">Closed</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-06</td>
                                                        <td> <a href="#">Ut aut reiciendis voluptatibus</a> </td>
                                                        <td>Customization</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/6.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Adam Quinn</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-success">Closed</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-07</td>
                                                        <td> <a href="#">Maiores alias consequatur aut</a> </td>
                                                        <td>Support</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/7.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Melanie Coleman</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-primary">New</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-08</td>
                                                        <td> <a href="#">Quis autem vel eum iure</a> </td>
                                                        <td>Support</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/8.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Melanie Coleman</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-orange">Open</span></td>
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
                                                    <tr>
                                                        <td>#Ticket-09</td>
                                                        <td> <a href="#">Quis autem vel eum iure</a> </td>
                                                        <td>Support</td>
                                                        <td>
                                                            <div class="d-flex"> <span class="avatar avatar brround me-3" style="background-image: url(./images/client/9.png)"></span>
                                                                <div class="me-3 mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-1 fs-14">Melanie Coleman</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-orange">Open</span></td>
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
                                <div class="tab-pane" id="tab12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12 mb-20">
                                                    <div class="form-group"> <label class="form-label">Title</label> <input class="form-control" placeholder="text"> </div>
                                                </div>
                                                <div class="form-group mb-20"> <label class="form-label">Description:</label>
                                                    <textarea class="form-control" name="text" cols="30" rows="10"></textarea>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="gr-btn"> <a href="#" class="btn btn-primary btn-lg" onclick="not1()">Submit</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END MAIN CONTENT -->
@endsection
