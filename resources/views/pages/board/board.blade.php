@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
    <div class="main-content board">
        <div class="row">
            <div class="col-12">
                <div class="box card-box">
                    <div class="icon-box bg-color-4">
                        <a class="create d-flex" href="{{ url('/edit-board') }}" data-target="#add_project">
                            <div class="icon bg-white">
                                <i class="bx bx-plus"></i>
                            </div>
                            <div class="content d-flex align-items-center">
                                <h5 class="color-white">Create New Board</h5>
                            </div>
                        </a>
                    </div>
                    <div class="icon-box bg-color-4">
                        {{-- @foreach ($boards as $board)
                            <div class="board-box" onclick="window.location='{{ route('board.show', $board->id) }}'">
                                <h3>{{ $board->title }}</h3>
                                <p>{{ $board->description }}</p>
                                <p>Visibility: {{ $board->visibility }}</p>
                            </div>
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
