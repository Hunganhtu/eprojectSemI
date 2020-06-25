@extends('back_end.master')
@section('main')
<div class="card">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <p class="card-text">Thêm mới sản phẩm !</p>
    <a href="{{route('product.create')}}" class="btn btn-success">Thêm mới</a> 
  </div>
</div>

    <div class="card">
        <div class="row">
          <div class="preview col-md-6 text-center">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="{{url('public/assets/images/product')}}/{{$product->image}}" /></div>
              @foreach($image_detail as $data)
              <div class="tab-pane" id="pic-{{$loop->index +2}}">
                <img src="{{url('public/assets/images/product')}}/{{$data}}" /></div>
              @endforeach
            </div>
            <ul class="preview-thumbnail nav nav-tabs text-center">
              <li class="active">
                  <a data-target="#pic-1" data-toggle="tab">
                      <img src="{{url('public/assets/images/product')}}/{{$product->image}}" />
                  </a>
              </li>
               @foreach($image_detail as $data)
              <li>
                  <a data-target="#pic-{{$loop->index +2}}" data-toggle="tab">
                      <img src="{{url('public/assets/images/product')}}/{{$data}}" />
                  </a>
              </li>
               @endforeach
            </ul>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">{{$product->name}}</h3>
              <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <h5 class="product-title">Mô tả :</h5>
            <p class="product-description">{!!$product->description!!}</p>
            <h4 class="price">Giá: <span>{{number_format($product->price)}}</span></h4>
           
            
            <div class="action">
              <a class=" btn btn-primary" type="button" href="{{route('product.index')}}">Quay lại danh sách</a>
              <a class=" btn btn-danger" type="button" href="{{route('product.update',['slug'=>$product->slug])}}">Chỉnh sửa</a>
            </div>
          </div>
        </div>
    </div>

@stop()