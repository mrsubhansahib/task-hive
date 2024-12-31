<!-- alert message -->
@if(session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success :</strong> {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif(session('error'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning :</strong> {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif


<!-- Display validation error -->
@if(($errors->any))
    <div class="text-danger">
        @foreach($errors->all() as $error)
           <li> {{$error}} </li>
        @endforeach
    </div>
@endif


<!-- error message -->
<!--@//if(session('success'))
    <div class="text-success"> {//{session('success')}} </div>
@//elseif(session('error'))
    <div class="text-danger"> {//{session('error')}} </div>
@//endif-->
