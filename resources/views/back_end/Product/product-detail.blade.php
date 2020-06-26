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
           
            <p class="product-description"></p>
            <h4 class="price">Giá: <span>{{number_format($product->price)}}</span></h4>
           
            
            <div class="action">
              <a class=" btn btn-primary" type="button" href="{{route('product.index')}}">Quay lại danh sách</a>
              <a class=" btn btn-danger" type="button" href="{{route('product.update',['slug'=>$product->slug])}}">Chỉnh sửa</a>
            </div>
          </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="desscription-tab" data-toggle="tab" href="#desscription" role="tab" aria-controls="desscription" aria-selected="true">Mô tả</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Privacy-tab" data-toggle="tab" href="#Privacy" role="tab" aria-controls="Privacy" aria-selected="false"> 
Chính sách bảo mật</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false"> 
Điều khoản dịch vụ</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="desscription" role="tabpanel" aria-labelledby="desscription-tab">
    {!!$product->description!!}
  </div>
  <div class="tab-pane fade" id="Privacy" role="tabpanel" aria-labelledby="Privacy-tab">
       {!!$product->privacy!!}
</div>
  <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
    {!!$product->service!!}
  </div>
</div>
 <div>
  <h5><b>Thông số kỹ thuật</b></h5>
   {!!$product->paramaster!!}
 </div>

  <div>
    
   @if(count($related_product)>0)
   <h5><b>Sản phẩm liên quan</b></h5>  
      <div class="container">
    <div class="product-list">
      <div class="row">
        @foreach($related_product as $data)
        <div class="col-md-3 col-sm-6">
          <div class="white-box">
            <div class="product-img">
              <img src="{{url('public/assets/images/product')}}/{{$data->image}}">
            </div>
            <div class="product-bottom">
              <div class="product-name">{{$data->name}}</div>
              <div class="price">
                <span class="rupee-icon"></span>{{number_format($data->price)}}
              </div>
              <a href="{{route('product.detail',['slug'=>$data->slug])}}" class="blue-btn">Xem chi tiết</a>
            </div>
          </div>
        </div>
          @endforeach
      </div>
    </div>
 
</div> 
       @endif
    </div>
@stop()