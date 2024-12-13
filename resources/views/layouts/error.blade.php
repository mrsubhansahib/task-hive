<!-- error message -->
@if(session('error'))
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
 @//endif-->
