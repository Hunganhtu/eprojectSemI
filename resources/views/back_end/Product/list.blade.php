@extends('back_end.master')
@section('main')
<div class="card">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <p class="card-text">Thêm mới danh mục !</p>
    <a href="{{route('product.create')}}" class="btn btn-success">Thêm mới</a> 
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Danh sách danh mục</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="product" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>STT</th>
          <th>Tên</th>
          <th>Slug</th>
          <th>Trạng Thái</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

       @foreach($product as $data)
         <tr>
          <td>{{$data->loop +1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->slug}}</td>
            <td>
              {{($data->status)==1?'hiện':'ẩn'}}
            </td>
            <td>
              <a href="{{route('product.update',['id'=>$data->id])}}" title="" class="btn btn-primary"><i class="far fa-edit"></i></a>
              <a href="{{route('product.delete',['id'=>$data->id])}}" title="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
       @endforeach
      </tbody>
     
    </table>
  </div>

</div>
@stop()