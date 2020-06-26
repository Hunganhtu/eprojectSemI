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
        <form  action="" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên</label>
              <input type="text" class="form-control"  placeholder="Nhập tên sản phẩm" name="name" value="{{old('name')}}">
              @if($errors->has('name'))
              <label class="error" >{{$errors->first('name') }}</label>
              @endif
            </div>
            <div class="form-group">
              <label for="inputStatus">Danh mục</label>
              <select class="form-control custom-select" name="cat_id">
                <option selected disabled>--Chọn danh mục---</option>
                @foreach($category as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>}

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

              @if($errors->has('image'))
              <label class="error" >{{$errors->first('image') }}</label>
              @endif
             
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá</label>
              <input type="number" class="form-control" placeholder="Nhập tên sản phẩm" name="price"  value="{{old('price')}}" >
              @if($errors->has('price'))
              <label class="error" >{{$errors->first('price') }}</label>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Ảnh </label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input"  name="image_detail[]" multiple >
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                
              </div>
              @if($errors->has('image_detail'))
              <label class="error" >{{$errors->first('image_detail') }}</label>
              @endif  
              @if($errors->has('image_detail.*'))
              <label class="error" >{{$errors->first('image_detail.*') }}</label>
              @endif
              
            </div>
            <div class="form-group">
             <label for="exampleInputFile">Mô tả</label>
             <textarea class="textarea" name="description"  class="form-control"
             style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('description')}}</textarea>
             @if($errors->has('description'))
             <label class="error" >{{$errors->first('description')}}</label>
         @endif
       </div>
        <div class="form-group">
             <label for="exampleInputFile">Chính sách bảo mật</label>
             <textarea class="textarea" name="privacy"  class="form-control"
             style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('privacy')}}</textarea>
            
       </div>
       <div class="form-group">
             <label for="exampleInputFile">Điều khoản dịch vụ</label>
             <textarea class="textarea" name="service"  class="form-control"
             style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('service')}}</textarea>
            
       </div>
        <div class="form-group">
             <label for="exampleInputFile">Thông số kỹ thuật</label>
             <textarea class="textarea" name="paramaster"  class="form-control"
             style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('paramaster')}}</textarea>
           
       </div>
       <div class="form-group">
          <label for="sel2">Chọn sản phẩm liên quan</label>
          <select multiple class="form-control" id="sel2" name="related_product[]">
              @foreach($product as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>}
                @endforeach
          </select>
    </div>
       <div class="form-group">
        <label for="exampleInputPassword1">status</label>
        <br>
        <input type="radio" value="1" name="status" checked>  Hiện
        <input type="radio" value="0" name="status"  style="margin-left:5px"> Ẩn
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