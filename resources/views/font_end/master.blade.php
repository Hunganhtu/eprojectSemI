<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/fixfellow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 01:20:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Ecommerce &raquo; HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>  Tools Store Ecommerce</title>
<base  href="{{url('public/assets')}}/">
<!-- favicon icon -->
<link rel="shortcut icon" href="images/logo/logo-Fatema.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="css/slick.css">

<!-- slick -->
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">



<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>

<!-- megamenu -->
<link rel="stylesheet" type="text/css" href="css/megamenu.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">

</head>

<body>

    <!--page start-->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- top_bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-md-flex flex-row">
                            <div class="top_bar_contact_item">Welcome visitor you can <span class="ttm-textcolor-highlight"> Login</span> or <span class="ttm-textcolor-highlight">Register !</span></div> 
                                <div class="top_bar_contact_item  contact" >
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    
                                    <div class="top_bar_menu">
                                        <ul class="top_bar_dropdown">
                                            <li><a href="#" data-toggle="dropdown">My Account</a>
                                                <ul>
                                                <li><a href="{{route('user.login')}}"><i class="fa fa-sign-in mr-2"></i>Login</a></li>
                                                    <li><a href="{{route('user.register')}}"><i class="fa fa-sign-in mr-2"></i>Register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a href="#">Wishlist</a></div>
                                    <div><a href="{{route('user.ckeckout')}}">Check out</a></div>
                                    <div><a href="{{route('user.cart')}}">Shopping Cart</a></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- top_bar end-->
            <!-- header_main -->
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-3 order-1">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="{{route('user.home')}}" title="Fixfellow" rel="home">
                                    <img id="logo-img" class="img-center" src="images/logo/logo-Fatema.png" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                        </div>
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search"><!-- header_search -->
                                <div class="header_search_content">
                                    <div id="search_block_top" class="search_block_top">
                                        <form id="searchbox" method="get" action="#">
                                                       
                                            <div class="categories-block">               
                                                <select id="search_category" name="search_category" class="form-control">
                                                    <option value="all">All Categories</option>
                                                    <option value="Categories 1">Categories 1</option>
                                                    <option value="Categories 2">Categories 2</option>
                                                    <option value="Categories 3">Categories 3</option>
                                                </select>
                                            </div>
                                            <input class="search_query form-control" type="text" id="search_query_top" name="s" placeholder="Search For Shopping...." value="">
                                            <button type="submit" name="submit_search" class="btn btn-default button-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>    
                            <!-- header_search end -->
                        </div>
                        <div class="col-lg-3 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <!-- header_extra -->
                            <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                <div class="cart dropdown">
                                    <div class="dropdown_link d-flex flex-row align-items-center justify-content-end" data-toggle="dropdown">
                                        <div class="cart_icon">
                                          <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <div class="cart_count">02</div>
                                        </div>
                                    </div>
                                    <aside class="widget_shopping_cart dropdown_content">
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="photo"><img src="images/product/pro-front-02.png" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Impact Wrench</a></h6>
                                                
                                            </li>
                                            <li>
                                                <a href="#" class="photo"><img src="images/product/pro-front-03.png" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Demolition Breaker</a></h6>
                                               
                                            </li>
                                            <li class="total">
                                                
                                                <a href="{{route('user.cart')}}" class="btn btn-default btn-cart">Cart</a>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                                <div class="cart dropdown">
                                    <div class="dropdown_link d-flex flex-row align-items-center justify-content-end" data-toggle="dropdown">
                                        <div class="cart_icon">
                                            <i class="fa fa-shopping-cart"></i>
                                            <div class="cart_count">02</div>
                                        </div>
                                       
                                    </div>
                                    <aside class="widget_shopping_cart dropdown_content">
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="photo"><img src="images/product/pro-front-02.png" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Impact Wrench</a></h6>
                                                <p>2x - <span class="price">$220.00</span></p>
                                            </li>
                                            <li>
                                                <a href="#" class="photo"><img src="images/product/pro-front-03.png" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Demolition Breaker</a></h6>
                                                <p>1x - <span class="price">$38.00</span></p>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right"><strong>Total</strong>: $257.00</span>
                                            <a href="{{route('user.cart')}}" class="btn btn-default btn-cart">Cart</a>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                            </div><!-- header_extra end -->
                        </div>
                    </div>
                </div>
            </div><!-- haeder-main end -->
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white clearfix">
                <div class="site-header-menu-inner stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main_nav_content d-flex flex-row">
                                    <div class="cat_menu_container">
                                        <a href="#" class="cat_menu d-flex flex-row align-items-center">
                                            <div class="cat_icon"><i class="fa fa-bars"></i></div>
                                            <div class="cat_text"><span>Shop by</span><h4>Categories</h4></div>
                                        </a>
                                        <ul class="cat_menu_list menu-vertical">
                                            <li><a href="#" class="close-side"><i class="fa fa-times"></i></a></li>
                                            <li class="parent">
                                                <a href="#">Toolbox</a>
                                                <div class="sub-menu megamenu column3">
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Materials</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Miter Box</a></li>
                                                                    <li><a href="#">Scraper</a></li>
                                                                    <li><a href="#">Screwdriver</a></li>
                                                                    <li><a href="#">Glass Cutter</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Accessories</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Hacksaw</a></li>
                                                                    <li><a href="#">Pitchfork</a></li>
                                                                    <li><a href="#">Circular Saw</a></li>
                                                                    <li><a href="#">Hex Wrench</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Cutting Tools‎ </a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Axes‎</a></li>
                                                                    <li><a href="#">Scissors</a></li>
                                                                    <li><a href="#">Saws‎</a></li>
                                                                    <li><a href="#">Knives</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="parent">
                                                <a href="#">Hand Tool</a>
                                                <div class="sub-menu megamenu column3">
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Gas Equipment</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Dust Collector</a></li>
                                                                    <li><a href="#">Heat Guns</a></li>
                                                                    <li><a href="#">Impact Drivers</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Cordless Tools</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Bare Tools</a></li>
                                                                    <li><a href="#">Grinders</a></li>
                                                                    <li><a href="#">Impact Drivers</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled childs_1">
                                                        <li class="title"><a href="#">Air Tools</a>
                                                            <div class="sub-menu">
                                                                <ul class="list-unstyled childs_2">
                                                                    <li><a href="#">Air Hoses</a></li>
                                                                    <li><a href="#">Chipping Hammers</a></li>
                                                                    <li><a href="#">Compressors</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Cutter Wood</a></li>
                                            <li><a href="#">Power Tools</a></li>
                                            <li><a href="#">Saw Map</a></li>
                                            <li><a href="#">Electric Tools</a></li>
                                            <li><a href="#">Collapsible</a></li>
                                            <li><a href="#">Corded Planer</a></li>
                                            <li class="parent-plus"><a href="#">More Categories</a>
                                                <div class="plus-menu">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Hacksaw</a></li>
                                                        <li><a href="#">Post Hole</a></li>
                                                        <li><a href="#">Tool Belt</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--site-navigation -->
                                    <div id="site-navigation" class="site-navigation">
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <!-- menu -->
                                        <nav class="menu menu-mobile" id="menu">
                                            <ul class="nav">
                                                <li class="mega-menu-item active">
                                                    <a href="#" class="">Home</a>
                                                   
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Pages</a>
                                                    <ul class="mega-submenu">
                                                        <li><a href="{{route('user.about')}}">About Us</a></li>
                                                        <li><a href="{{route('user.login')}}">Login</a></li>
                                                        <li><a href="{{route('user.register')}}">Register</a></li>
                                                        <li><a href="{{route('user.contact')}}">Contact Us</a></li>
                                                        <li><a href="{{route('user.error')}}">Error Page</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item megamenu-fw">
                                                    <a href="#" class="mega-menu-link">Shop</a>
                                                    <ul class="mega-submenu megamenu-content" role="menu">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-menu col-md-3">
                                                                    <h6 class="title">Shop Page Layout</h6>
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="{{route('user.shop')}}">Shop Default</a></li>
                                                                            <li><a href="{{route('user.left-sidebar')}}">Shop Left Sidebar</a></li>
                                                                        <li><a href="{{route('user.right-sidebar')}}">Shop Right Sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- end col-3 -->
                                                                <div class="col-menu col-md-3">
                                                                    <h6 class="title">Shop Pages</h6>
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="{{route('user.cart')}}">Cart</a></li>
                                                                            <li><a href="{{route('user.ckeckout')}}">Checkout</a></li>
                                                                            <li><a href="{{route('user.login')}}">Account/Login</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- end col-3 -->
                                                                <div class="col-menu col-md-3">
                                                                    <h6 class="title">Shop Product Layout</h6>
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="{{route('user.product-layout-1')}}">Product Layout 1</a></li>
                                                                            <li><a href="{{route('user.product-layout-2')}}">Product Layout 2</a></li>
                                                                            <li><a href="{{route('user.product-layout-3')}}">Product Layout 3</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>    
                                                                <div class="col-menu col-md-3">
                                                                    <div class="content">
                                                                        <ul class="menu-col">
                                                                            <li><a href="{{route('user.shop')}}">
                                                                                <img class="img-fluid" src="images/menu-item-banner.jpg" alt="bimg">
                                                                            </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- end col-3 -->
                                                            </div><!-- end row -->
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Blog</a>
                                                    <ul class="mega-submenu">
                                                        <li class=""><a href="{{route('user.blog')}}">Blog Classic</a></li>
                                                        <li class=""><a href="{{route('user.blog-grid')}}">Blog Grid</a></li>
                                                        <li class=""><a href="{{route('user.blog-single')}}">Single Blog View</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('user.contact')}}">Contact Us</a></li>
                                            </ul>
                                        </nav>  
                                    </div><!-- site-navigation end-->
                                    <div class="user_zone_block d-flex flex-row align-items-center justify-content-end ml-auto">
                                        <div class="icon"><i class="fa fa-gift"></i></div>
                                        <h6 class="text">New User Zone</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- site-header-menu end -->
        </header><!--header end-->

      @yield('main')

        <!--footer start-->
         <div class=" container text-center">
         <div class="owl-carousel " id="ctv">
            <img src="images/logo/logo-ctv-1.gif" alt="" > 
            <img src="images/logo/logo-ctv-4.gif" alt="" > 
            <img src="images/logo/logo-ctv-2.gif" alt="">
            <img src="images/logo/logo-ctv-3.gif" alt="" >
            <img src="images/logo/logo-ctv-5.gif" alt="" > 
            <img src="images/logo/logo-ctv-6.gif" alt="" > 
            <img src="images/logo/logo-ctv-7.gif" alt="">
         </div>
      </div>
      <footer class="footer-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="footer-left">
                     <div class="footer-logo">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120119.61918423921!2d105.72101450414743!3d19.80869870090704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f7fe237e2277%3A0xa13832367bfc213a!2zVHAuIFRoYW5oIEhvw6EsIFRoYW5oIEhvw6EsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1591687970132!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                     </div>
                     <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                     </ul>
                     <div class="footer-social ">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2  col-sm-6">
                  <div class="footer-widget">
                     <h5>Category</h5>
                     <ul>
                        <li><a href="#">Women Dress</a></li>
                        <li><a href="#">Men Dress</a></li>
                        <li><a href="#">Suport Footware</a></li>
                        <li><a href="#">Jullary</a></li>
                        <li><a href="#">Digital</a></li>
                        <li><a href="#">Shoes</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-sm-6">
                  <div class="footer-widget">
                     <h5>About Us</h5>
                     <ul>
                        <li><a href="#">Song</a></li>
                        <li><a href="#">Fourms</a></li>
                        <li><a href="#">Place</a></li>
                        <li><a href="#">Hot Collecttion</a></li>
                        <li><a href="#">Upcoming Event</a></li>
                        <li><a href="#">All Movies</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="newslatter-item footer-widget">
                     <h5>Join Our Newsletter Now</h5>
                     <p>Get E-mail updates about our latest shop and special offers.</p>
                     <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright-reserved">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-xs-12 copyright-text text-center">
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy; All rights reserved | by
                     <a href="https://www.facebook.com/nguyen.ad.18" target="_blank">Nguyễn Hưng</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </div>
                  <div class="col-md-6 text-center">
                     <div class="payment-pic ">
                        <img src="images/payment-method.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
  <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->
    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/numinate.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/price_range_script.js"></script>
    <script src="js/easyzoom.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validate.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
     <script>
         $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          responsiveClass:true,
          responsive:{
            0:{
              items:1,
              
            },
            600:{
              items:3,
              
            },
            1000:{
              items:5,
              
            }
          }
         })
      </script>

    <!-- Javascript end-->

</body>

<!-- Mirrored from themetechmount.com/html/fixfellow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 01:20:57 GMT -->
</html>