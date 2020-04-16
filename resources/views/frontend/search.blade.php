<link rel="stylesheet" href="css/search.css">
@extends('frontend.master')
@section('title','TÌm kiếm')
@section('main')
    <div id="wrap-inner">
        <div class="products">
            <h3>Tìm kiếm với từ khóa: <span>{{$keyword}}</span></h3>
            <div class="product-list row">
                @foreach($items as $item)
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

        <div id="pagination">
            <ul class="pagination pagination-lg justify-content-center">
                {{ $items->links() }}
            </ul>
        </div>
    </div>
@stop
