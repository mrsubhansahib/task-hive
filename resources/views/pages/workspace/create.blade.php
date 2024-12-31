@extends('layouts.master')
@section('title')
    Workspace
@endsection
@section('main content')
    <div class="main-content">
        <div class="col-12">
            <div class="box">
                <form action="{{ url('/workspace') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="box-body d-flex align-items-start ms-4">
                    <img class="rounded" src="./images/workspace/default.img.jpg" width="80" alt="Profile Image">
                    <div class="ms-4 mt-5">
                        <h5 class="d-flex align-items-center mb-1 mt-5">{{ $workspace->title ?? 'Your Workspace' }}
                            <a href="{{url('/edit-workspace')}}">
                                <img src="./images/icon/edit.png" class="ms-3" alt="Edit Icon" width="20">
                            </a>
                        </h5>
                        <h7 class="d-flex align-items-center mb-0 mt-5"><img src="./images/icon/lock.png" class="ms-2 me-2" alt="Edit Icon" width="18">{{ ucfirst($workspace->visibility ?? 'Private') }}</h7>
                    </div>
                </div>
                <div class="box-footer ms-4 mt-5">
                    <h7>{{ $workspace->description ?? 'This is your workspace.' }}</h7>
                </div>
                </form>
            </div>
        </div>
    </div>


@endsection
