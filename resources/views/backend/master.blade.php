<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Mobile shop</title>
    <base href="{{asset('public/layout/backend')}}/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="js/lumino.glyphs.js"></script>
    <link href="@yield('css')" rel="stylesheet">
    <script src="@yield('js')"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{asset('admin/home')}}"> Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg>
                        {{Auth::user()->email}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{asset('logout')}}">
                                <svg class="glyph stroked cancel">
                                    <use xlink:href=""></use>
                                </svg>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li role="presentation" class="divider"></li>
        <li class="4"><a href="{{asset('admin/home')}}">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Trang chủ</a></li>

        <li class="3"><a href="{{asset('admin/user')}}">
                <svg class="glyph stroked male user ">
                    <use xlink:href="#stroked-male-user"/>
                </svg>
                User
            </a>
        </li>
        <li class="3"><a href="{{asset('admin/category')}}">
                <svg class="glyph stroked open folder">
                    <use xlink:href="#stroked-open-folder"/>
                </svg>
                Danh mục</a>
        </li>
        <li class="3"><a href="{{asset('admin/product')}}">
                <svg class="glyph stroked calendar">
                    <use xlink:href="#stroked-calendar"></use>
                </svg>
                Sản phẩm
            </a>
        </li>
        <li class="3"><a href="{{asset('/')}}">
                <svg class="glyph translucent home"><use xlink:href="#translucent-home"/></svg>
                Website
            </a>
        </li>
        <li role="presentation" class="divider"></li>
    </ul>

</div>

@yield('main')

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/myscript.js"></script>
@yield('myscript')
</body>

</html>

