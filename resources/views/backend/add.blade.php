@extends('backend.master')
@section('title','admin')
@section('main')
@stop
<br><br>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div id="navbar" class="row">
    	<div class="col-sm-6">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                    <a href="{{ route(USER_LIST) }}" class="btn btn-primary">danh sách</a>

                    <a href="{{ route(USER_ADD) }}" class="btn btn-danger navbar-right">Logout</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
{{--        	<div class="alert alert-danger">User exist!</div>--}}
            @include('errors.note')
        	<form method="post">
            	<div class="form-group">
                	<label>Fullname</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Fullname" required />
                </div>
                <div class="form-group">
                	<label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required />
                </div>
                <div class="form-group">
                	<label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>
                <div class="form-group">
                	<label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" required />
                </div>
                <div class="form-group">
                	<label>Level</label>
                    <select name="level" class="form-control">
                    	<option value="1">Admin</option>
                         <option value="3" selected="selected">User</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" />
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>

</body>
</html>
