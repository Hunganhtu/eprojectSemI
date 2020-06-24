@extends('back_end.master')
@section('main')
  <div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
      <p class="card-text">Danh sách sản phẩm!</p>
      <a href="{{route('product.index')}}" class="btn btn-success">Danh sách</a> 
    </div>
  </div>
  <div class="row">
  	<div class="col-md-10">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Thêm sản phẩm</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form  action="" method="POST" enctype="multipart/form-data" id="validate_product">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên</label>
              <input type="text" class="form-control"  placeholder="Nhập tên sản phẩm" name="name"  value="{{$data->name}}">
              @if($errors->has('name'))
              <label class="error" >{{$errors->first('name') }}</label>
              @endif
            </div>
            <div class="form-group">
              <label for="inputStatus">Danh mục</label>
              <select class="form-control custom-select" name="cat_id">
                <option selected disabled>--Chọn danh mục---</option>
                @foreach($category as $value)
                <option value="{{$value->id}}" {{($data->cat_id==$value->id)?'selected':''}}>
                  {{$value->name}}
                </option>}

                @endforeach
              </select>
              @if($errors->has('cat_id'))
              <label class="error" >{{$errors->first('cat_id') }}</label>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Ảnh </label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input"  name="image">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>

              </div>
              <img src="{{url('public/assets/images/product')}}/{{$data->image}}" alt="" width="100px" class="mt-2">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá</label>
              <input type="number" class="form-control" placeholder="Nhập tên sản phẩm" name="price"   value="{{$data->price}}">
              @if($errors->has('price'))
              <label class="error" >{{$errors->first('price') }}</label>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Ảnh chi tiết </label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input"  name="image_detail[]" multiple >
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                
              </div>
             @foreach($old_detail as $value)
              <img src="{{url('public/assets/images/product')}}/{{$value}}" alt="" width="100px" class="mt-2">
             @endforeach
            </div>
            <div class="form-group">
             <label for="exampleInputFile">File input</label>
             <textarea class="textarea" name="description"  class="form-control"
             style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$data->description}}</textarea>
             @if($errors->has('description'))
             <label class="error" >{{$errors->first('description') }}</label>
           }
         }
         @endif
       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <br>
         <input type="radio" value="1" name="status" {{$data->status==1?'checked':''}}>  Hiện
         <input type="radio" value="0" name="status" {{$data->status==0?'checked':''}} style="margin-left:5px">Ẩn
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  </div>
  </div>
  </div>
@stop()