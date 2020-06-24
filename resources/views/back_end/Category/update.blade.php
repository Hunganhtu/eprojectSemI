@extends('back_end.master')
@section('main')
<div class="card ">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <p class="card-text">Danh sách danh mục</p>
    <a href="{{route('category.index')}}" class="btn btn-success">Danh sách</a> 
  </div>
</div>
<div class="row">
 
	<div class="col-md-8">
		  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới danh mục</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="" id="addcategory">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" placeholder="Nhập tên....." name="name" required value="{{$data->name}}">
                     @if($errors->has('name'))
                        <span style="color: red">{{$errors->first('name') }}</span>
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
                  <button  class="btn btn-primary">Thêm</button>
                </div>
              </form>
            </div>
	</div>
</div>
<!-- vừa sửa -->
@stop()