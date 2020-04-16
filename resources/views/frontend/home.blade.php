@extends('frontend.master')
@section('title','Trang chủ')
@section('css','css/home.css')
@section('main')
<div id="wrap-inner">
    <div class="products">
        <h3>sản phẩm nổi bật</h3>
        <div class="product-list row">
            @foreach($featured as $item)
                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                    <a href="#"><img height="150px"
                                     src="{{asset('storage/app/avatar/'.$item->prod_img)}}"
                                     class="img-thumbnail"></a>
                    <p><a href="#">{{$item->prod_name}}</a></p>
                    <p class="price">{{number_format($item->prod_price).' VNĐ'}}</p>
                    <div class="marsk">
                        <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="products">
        <h3>sản phẩm mới</h3>
        <div class="product-list row">
            @foreach($new as $item)
                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                    <a href="#"><img src="{{asset('storage/app/avatar/'.$item->prod_img)}}"
                                     class="img-thumbnail"></a>
                    <p><a href="#">{{$item->prod_name}}</a></p>
                    <p class="price">{{number_format($item->prod_price).' VNĐ'}}</p>
                    <div class="marsk">
                         <a href="{{route(PRODUCT_DETAIL,['id'=>$item->prod_id,'slug'=>$item->prod_slug])}}">Xem chi tiết</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop
