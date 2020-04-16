@extends('backend.master')
@section('title','Cập nhật người dùng')
@section('main')
@stop

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                 </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
            @include('errors.note')
            <form method="post">
            	<div class="form-group">
                 	<label>Fullname</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="{{$users->fullname}}" required />
                </div>
                <div class="form-group">
                	<label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{$users->username}}" required />
                </div>
                <div class="form-group">
                	<label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{$users->password}}" required />
                </div>
                <div class="form-group">
                	<label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email"  value="{{$users->email}}@gmail.com" required />
                </div>
                <div class="form-group">
                	<label>Level</label>
                    <select name="level" class="form-control">
                    	<option value="1" @if($users->level==1){ selected }@endif>Admin</option>
                         <option value="2" @if($users->level==2){ selected }@endif>User</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary" />
                <a href="{{asset('admin/user')}}"> Quay lại </a>
            {{csrf_field()}}
            </form>
        </div>
    </div>
</div>

</body>
</html>
