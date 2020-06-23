@extends('font_end.master')
@section('main')
    <!--login-section-->
    <section class="login-section bg-img2 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 ml-auto mr-auto">
                    <div class="wrap-login">
                        <form action="" class="form-user" method="POST" id="register">
                            <div class="form-group">
                                <i class="fa fa-user-o"></i>
                                <input type="text" name='name' placeholder="Full name..."/>     
                            </div>
                             <div class="form-group">
                                <i class="fa fa-envelope-o"></i>
                                <input type="email" name='email' placeholder="Enter your email"/>     
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" name='password' placeholder="Enter your password"/>     
                            </div> 
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" name='confirm_password' placeholder="Enter your password"/>     
                            </div>
                            <div class="pt-5">
                                <h6 class="font-weight-normal">OR</h6>
                            </div>
                            <div class="login-social-buttons">
                                <button id="login-with-facebook" data-network="Facebook" class="social-account-button facebook-button">
                                    <i class="ti ti-facebook">
                                    </i>
                                    <span>Facebook</span>
                                </button>
                                &nbsp;&nbsp;
                                <button id="login-with-google" data-network="google" class="social-account-button google-button">
                                    <i class="ti ti-google">
                                    </i>
                                    <span>Google</span>
                                </button>
                            </div>
                            <div class="form-group">
                                <button id="login-button" class="button action-button expand-center mb-15">
                                    <span class="label">Register</span>
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