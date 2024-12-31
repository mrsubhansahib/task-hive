@extends('layouts.master')
@section('main content')
<div class="main-content">
    <div class="col-12">
        @include('layouts.error')
        <div class="box">
            <form class="mt-6 pt-2" action="{{url('/edit-workspace')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label class="form-label mb-14">Title</label>
                    <input type="text" value="{{ old('title' , $workspace->title ?? '')}}" name="title" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="mb-3 mt-24">
                    <label for="description" class="form-label mb-14">Description</label>
                    <input type="description" value="{{ old('description', $workspace->description ?? '') }}" name="description" class="form-control" id="description" placeholder="Description">
                </div>
                <div class="mb-3 mt-24">
                    <label for="visibility" class="form-label mb-14">Visibility</label>
                    <select name="visibility" class="form-control" id="visibility" required>
                        <option value= "public"{{ (old('visibility', $workspace->visibility ?? '') === 'public') ? 'selected' : '' }}><img src="./images/icon/group.png" class="ms-2 me-2" alt="Edit Icon" width="15">Public</option>
                        <option value="private"{{ (old('visibility', $workspace->visibility ?? '') === 'private') ? 'selected' : '' }}><img src="./images/icon/lock.png" class="ms-2 me-2" alt="Edit Icon" width="22">Private</option>
                    </select>
                </div>
                <div class="mb-3 mt-29">
                    <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
