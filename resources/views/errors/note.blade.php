@if(Session::has('error'))
    <p class="alert alert-danger">{{Session::get('error')}}<button type="button" class="close" data-dismiss="alert" aria-lable="Close"><span aria-hidden="true">x</span></button>  </p>
@endif
@foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}} </p>
@endforeach

@if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-lable="Close"><span aria-hidden="true">x</span></button>
    </p>
@endif

@if(Session::has('added'))
    <p class="alert alert-success">{{Session::get('added')}}
        <button type="button" class="close" data-dismiss="alert" aria-lable="Close"><span aria-hidden="true">x</span></button>
    </p>
@endif
@if(Session::has('edited'))
    <p class="alert alert-success">{{Session::get('edited')}}
        <button type="button" class="close" data-dismiss="alert" aria-lable="Close"><span aria-hidden="true">x</span></button>
    </p>
@endif
