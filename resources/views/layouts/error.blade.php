<!-- error message -->
@if(session('success'))
    <div class="text-success"> {{session('success')}} </div>
@elseif(session('error'))
    <div class="text-danger"> {{session('error')}} </div>
@endif

<!-- Display validation error -->
@if(($errors->any))
    <div class="text-danger">
        @foreach($errors->all() as $error)
           <li> {{$error}} </li>
        @endforeach
    </div>
@endif

<!-- @//error('email')
    <span class="text-danger"> {//{$message}} </span>
 @//enderror-->

<!--@//if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{//{session('success')}}
        <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@//endif-->
