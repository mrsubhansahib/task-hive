@extends('layouts.master')
@section('title')
    Workspace
@endsection
@section('main content')
    <div class="main-content">
        <div class="col-12">
            <div class="box">
                <div class="box-body d-flex align-items-start ms-4">
                    <img class="rounded" src="./images/workspace/default.img.jpg" width="80" alt="Profile Image">
                    <div class="ms-4 mt-5">
                        <h5 class="d-flex align-items-center mb-1 mt-5">{{ $workspace->title ?? 'Your Workspace' }}
                            <a href="{{url('/edit-workspace')}}">
                                <img src="./images/icon/edit.png" class="ms-3" alt="Edit Icon" width="20">
                            </a>
                        </h5>
                        <h7 class="d-flex align-items-center mb-0 mt-5">{{ ucfirst($workspace->visibility ?? 'Private') }}</h7>
                    </div>
                </div>
                <div class="box-footer ms-4 mt-5">
                    <h7>{{ $workspace->description ?? 'This is your workspace.' }}</h7>
                </div>
            </div>
        </div>
    </div>


@endsection
