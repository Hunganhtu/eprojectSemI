@extends('font_end.master')
@section('main')
     <!--login-section-->
     <section class="login-section bg-img2 clearfix">
        <div class="container">
            <div class="row">
                <div class=" ml-auto mr-auto">
                    <div class="wrap-forget">
                        <form action="" class="form-user" id="login" method="POST">
                            @csrf
                              <div class="form-group"> 
                               <h5>Cung cấp email để lấy lại mật khẩu</h5>   
                            </div>
                            <div class="form-group"> 
                                <i class="fa fa-envelope-o"></i>
                                <input type="email" name='email' placeholder="Email"/>     
                            </div>
                           
                           
                            
                            <div class="form-group">
                                <button id="login-button" class="button action-button expand-center mb-15">
                                    <span class="label">Gửi</span>
                                    <span class="spinner"></span>
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--login-section end-->
@endsection