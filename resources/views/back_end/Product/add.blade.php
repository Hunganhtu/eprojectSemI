@extends('back_end.master')
@section('main')
<div class="card">
  <div class="card-header">

  </div>
  <div class="card-body">
    <p class="card-text">Thêm mới danh mục !</p>
    <a href="" class="btn btn-primary">Thêm mới</a> 
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
      <form role="form">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Slug</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
           <div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
          <div class="form-group">
            <label for="exampleInputFile">Ảnh </label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group">
           <label for="exampleInputFile">File input</label>
                <textarea class="textarea" placeholder="Place some text here"  class="form-control"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
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