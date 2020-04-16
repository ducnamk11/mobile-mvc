<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <base href="{{asset('public/layout/frontend')}}/">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="@yield('css')" rel="stylesheet">
    <script src="@yield('js')"></script>
    <script type="text/javascript">
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function () {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
</head>
<body>
<!-- header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                <h1>
                    <a href="{{asset('/')}}"><h1 style="color: white">Mobile SHop</h1></a>
                    <nav>
                        <a id="pull" class="btn btn-danger" href="#">
                            <i class="fa fa-bars"></i>
                        </a>
                    </nav>
                </h1>
            </div>
            <div id="search" class="col-md-7 col-sm-12 col-xs-12">
                <form action="{{asset('search/')}}" method="get" role="search" class="navbar-form">
                    <input type="text" name="result" placeholder="Nhập từ khóa ...">
                    <input type="submit" name="submit">
                </form>
            </div>
            <div id="cart" class="col-md-2 col-sm-12 col-xs-12">
                <a class="display" href="{{asset('cart/show')}}">Giỏ hàng</a>
                <a href="{{asset('cart/show')}}">{{Cart::getTotalQuantity()}}</a>
            </div>
        </div>
    </div>
</header>
<section id="body">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="col-md-3">
                <nav id="menu">
                    <ul>
                        <li class="menu-item">danh mục sản phẩm</li>
                        @foreach($category as $cate)
                            <li class="menu-item"><a
                                    href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}"
                                    title="">{{$cate->cate_name}}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <div id="banner-l" class="text-center">
                    <div class="banner-l-item">
                        <a href="{{route(HOME)}}"><img src="img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-l-item">
                        <a href="{{route(HOME)}}"><img src="img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-l-item">
                        <a href="{{route(HOME)}}"><img src="img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-l-item">
                        <a href="{{route(HOME)}}"><img src="img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-l-item">
                        <a href="{{route(HOME)}}"><img src="img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-l-item">
                        <a href="{{route(HOME)}}"><img src="img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-l-item">
                        <a href="{{route(HOME)}}"><img src="img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
                    </div>
                </div>
            </div>

            <div id="main" class="col-md-9">
                <div id="slider">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/home/slide-1.png" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                                <img src="img/home/slide-2.png" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                                <img src="img/home/slide-3.png" alt="New York">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <div id="banner-t" class="text-center">
                    <div class="row">
                        <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                            <a href="{{route(HOME)}}"><img src="{{asset('storage/app/avatar/banner-t-1.png')}}" alt=""
                                                           class="img-thumbnail"></a>
                        </div>
                        <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                            <a href="{{route(HOME)}}"><img src="img/home/banner-t-1.png" alt=""
                                                           class="img-thumbnail"></a>
                        </div>
                    </div>
                </div>
                @yield('main')
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div id="footer-t">
        <div class="container">
            <div class="row">
                <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">
                    <a href="{{route(HOME)}}"><h1 style="color: white">Mobile SHop</h1></a>
                </div>
                <div id="about" class="col-md-3 col-sm-12 col-xs-12">
                    <h3>About us</h3>
                    <p class="text-justify"> Examples might be simplified to improve reading and basic understanding.
                        You agree to have read and accepted our terms of use, cookie and privacy policy. Copyright
                        1999-2020 by Refsnes Data. All Rights Reserved.</p>
                </div>
                <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                    <h3>Hotline</h3>
                    <p>Phone Sale: (+84) 0988 550 553</p>
                    <p>Email: sirtuanhoang@gmail.com</p>
                </div>
                <div id="contact" class="col-md-3 col-sm-12 col-xs-12">
                    <h3>Contact Us</h3>
                    <p>Address 1: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
                    <p>Address 2: Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
                </div>
            </div>
        </div>
        <div id="footer-b">
            <div class="container">
                <div class="row">
                    <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <p>Học viện Công nghệ Vietpro - www.vietpro.edu.vn</p>
                    </div>
                    <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <p>© 2017 Vietpro Academy. All Rights Reserved</p>
                    </div>
                </div>
            </div>
            <div id="scroll">
                <a href="#"><img src="img/home/scroll.png"></a>
            </div>
        </div>
    </div>
</footer>
<!-- endfooter -->
</body>
</html>
