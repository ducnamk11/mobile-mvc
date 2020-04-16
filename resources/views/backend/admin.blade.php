@extends('backend.master')
@section('title','admin')
@section('main')
@stop
<br><br>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div id="navbar" class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <a href="{{ route(USER_ADD) }}" class="btn btn-primary">Thêm người dùng</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            @include('errors.note')
            <table class="table table-striped">
                <tr id="tbl-first-row">
                    <td width="5%">#</td>
                    <td width="20%">Fullname</td>
                    <td width="15%">Username</td>
                    <td width="25%">Email</td>
                    <td width="10%">Level</td>
                    @can('edit-profile')
                        <td width="5%">Edit</td>
                        <td width="5%">Delete</td>
                    @endcan
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>@if($user->level==1) <strong style="color: red">Admin</strong>  @else User @endif</td>
                        @can('edit-profile')
                            <td><a href="{{ route(USER_EDIT, ['id' => $user->id]) }}">Edit</a></td>
                            <td><a onclick="return confirm('Bạn có chắc xoá người dùng này không?')"
                                   href="{{ route(USER_DELETE, ['id' => $user->id]) }}">Delete</a></td>
                        @endcan

                    </tr>
                @endforeach
            </table>
            <div aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a aria-label="Previous" href="#">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
