@extends('font_end.master')
@section('main')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="first-slide" src="images/slides/slider-mainbg-005.jpg" alt="First slide" style="background-size: cover;">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          <h4 style="color: red">Example headline.</h4>
          <h3>Smart Powertrain components </h3>
          <h3>  Hotesrt Products-2019</h3>
          <p><a class="btn btn-lg btn-light" href="#" role="button">Shop Now</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="images/slides/slider-mainbg-006.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          <h4 style="color: red">Example headline.</h4>
          <h3>Smart Powertrain components </h3>
          <h3>  Hotesrt Products-2019</h3>
          <p><a class="btn btn-lg btn-light" href="#" role="button">Shop Now</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="images/slides/slider-mainbg-002.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
         <h4 style="color: red">Example headline.</h4>
         <h3>Smart Powertrain components </h3>
         <h3>  Hotesrt Products-2019</h3>
         <p><a class="btn btn-lg btn-light" href="#" role="button">Shop Now</a></p>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- END REVOLUTION SLIDER -->

<!--site-main start-->


<!--banner-box-section-->
<div class="banner-box-section clearfix">
  <div class="container">
    <div class="d-md-flex flex-row justify-content-start">
      <div class="left-image-single mr-20">
        <!-- banner-image -->
        <div class="banner-image pt-20">
          <figure class="ttm-figure">
            <a href="#"><img class="img-fluid" src="images/banner-four.jpg" alt=""></a>
          </figure>
        </div><!-- banner-image end -->
      </div>
      <div class="left-image-group">
        <div class="d-sm-flex flex-row justify-content-start">
          <!-- banner-image -->
          <div class="banner-image pt-20">
            <a href="#"><img class="img-fluid" src="images/banner-one.jpg" alt=""></a>
          </div><!-- banner-image end -->
          <!-- banner-image -->
          <div class="banner-image pt-20 pl-20 pr-20">
            <a href="#"><img class="img-fluid" src="images/banner-two.jpg" alt=""></a>
          </div><!-- banner-image end -->
        </div>
        <div class="d-flex flex-row justify-content-start">
         <!-- banner-image -->
         <div class="banner-image pt-20 pr-20 res-767-pr-0">
          <a href="#"><img class="img-fluid" src="images/banner-three.jpg" alt=""></a>
        </div><!-- banner-image end -->
      </div>
    </div>
    
  </div>
</div>
</div>
<!--banner-box-section end-->


<!-- product-section -->
<section class="product-section clearfix">
  <div class="container"> 
    <!-- row -->
    <div class="row">
      <div class="col-lg-7 col-md-8 ml-auto mr-auto">
        <!-- section title -->
        <div class="section-title title-style-center_text style2">
          <div class="title-header">
            <h5>how it works</h5>
            <h2 class="title">Top Selling Products</h2>
          </div>
        </div><!-- section title end -->
      </div>
    </div><!-- row end -->
    <div class="row">
      <div class="col-lg-12">
       <div class="ttm-tabs tabs-for-products" data-effect="fadeIn">
        <ul class="tabs clearfix">
          <li class="tab active"><a href="#">Plus Recents</a></li>
          <li class="tab"><a href="#">Plus Recents</a></li>
          <li class="tab"><a href="#">Plus Recents</a></li>
          <li class="tab"><a href="#">Plus Recents</a></li>
        </ul>
        <div class="content-tab">
          <!-- content-inner -->
          <div class="content-inner">
            <div class="products row">
              <!-- product -->
              <div class="product col-md-3 col-sm-6 col-xs-12">
                <div class="product-box">
                  <!-- product-box-inner -->
                  <div class="product-box-inner">
                    <div class="product-image-box">
                      <div class="onsale">Sale!</div>
                      <img class="img-fluid pro-image-front" src="images/product/pro-front-02.png" alt="">
                      <img class="img-fluid pro-image-back" src="images/product/pro-back-02.png" alt="">
                    </div>
                    <div class="product-btn-links-wrapper">
                      <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
                      </div>
                      <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
                      </div>
                      <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
                      </div>
                    </div>
                  </div><!-- product-box-inner end -->
                  <div class="product-content-box">
                    <a class="product-title" href="product-layout1.html">
                      <h2>Impact Wrench</h2>
                    </a>
                    <div class="star-ratings">
                      <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                      </ul>
                    </div>
                    <span class="price">
                      <ins><span class="product-Price-amount">
                        <span class="product-Price-currencySymbol">$</span>110.00
                      </span>
                    </ins>
                    <del><span class="product-Price-amount">
                      <span class="product-Price-currencySymbol">$</span>123.00
                    </span>
                  </del>
                </span>
              </div>
            </div>
          </div><!-- product end -->
          <!-- product -->
          <div class="product col-md-3 col-sm-6 col-xs-12">
            <div class="product-box">
              <!-- product-box-inner -->
              <div class="product-box-inner">
                <div class="product-image-box">
                  <img class="img-fluid pro-image-front" src="images/product/pro-front-05.png" alt="">
                  <img class="img-fluid pro-image-back" src="images/product/pro-back-05.png" alt="">
                </div>
                <div class="product-btn-links-wrapper">
                  <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
                  </div>
                  <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
                  </div>
                  <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
                  </div>
                </div>
              </div><!-- product-box-inner end -->
              <div class="product-content-box">
                <a class="product-title" href="product-layout1.html">
                  <h2>Folding Hex Key Set</h2>
                </a>
                <div class="star-ratings">
                  <ul class="rating">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <span class="price">
                  <span class="product-Price-amount">
                    <span class="product-Price-currencySymbol">$</span>62.00
                  </span>
                </span>
              </div>
            </div>
          </div><!-- product end -->
          <!-- product -->
          <div class="product col-md-3 col-sm-6 col-xs-12">
            <div class="product-box">
              <!-- product-box-inner -->
              <div class="product-box-inner">
                <div class="onsale">Sale!</div>
                <div class="product-image-box">
                  <img class="img-fluid pro-image-front" src="images/product/pro-front-06.png" alt="">
                  <img class="img-fluid pro-image-back" src="images/product/pro-back-06.png" alt="">
                </div>
                <div class="product-btn-links-wrapper">
                  <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
                  </div>
                  <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
                  </div>
                  <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
                  </div>
                </div>
              </div><!-- product-box-inner end -->
              <div class="product-content-box">
                <a class="product-title" href="product-layout1.html">
                  <h2>Circular Saw</h2>
                </a>
                <div class="star-ratings">
                  <ul class="rating">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
                <span class="price">
                  <ins><span class="product-Price-amount">
                    <span class="product-Price-currencySymbol">$</span>124.00
                  </span>
                </ins>
                <del><span class="product-Price-amount">
                  <span class="product-Price-currencySymbol">$</span>111.00
                </span>
              </del>
            </span>
          </div>
        </div>
      </div><!-- product end -->
      <!-- product -->
      <div class="product col-md-3 col-sm-6 col-xs-12">
        <div class="product-box">
          <!-- product-box-inner -->
          <div class="product-box-inner">
            <div class="product-image-box">
              <img class="img-fluid pro-image-front" src="images/product/pro-front-08.png" alt="">
              <img class="img-fluid pro-image-back" src="images/product/pro-back-08.png" alt="">
            </div>
            <div class="product-btn-links-wrapper">
              <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
              </div>
            </div>
          </div><!-- product-box-inner end -->
          <div class="product-content-box">
            <a class="product-title" href="product-layout1.html">
              <h2>Tape Measure</h2>
            </a>
            <div class="star-ratings">
              <ul class="rating">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
            <span class="price">
              <span class="product-Price-amount">
                <span class="product-Price-currencySymbol">$</span>24.00
              </span>
            </span>
          </div>
        </div>
      </div><!-- product end -->
    </div>
  </div>
  <!-- content-inner -->
  <div class="content-inner">
    <div class="products row">
      <!-- product -->
      <div class="product col-md-3 col-sm-6 col-xs-12">
        <div class="product-box">
          <!-- product-box-inner -->
          <div class="product-box-inner">
            <div class="product-image-box">
              <img class="img-fluid pro-image-front" src="images/product/pro-front-01.png" alt="">
              <img class="img-fluid pro-image-back" src="images/product/pro-back-01.png" alt="">
            </div>
            <div class="product-btn-links-wrapper">
              <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
              </div>
            </div>
          </div><!-- product-box-inner end -->
          <div class="product-content-box">
            <a class="product-title" href="product-layout1.html">
              <h2>Reel Fiberglass Tape</h2>
            </a>
            <div class="star-ratings">
              <ul class="rating">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
            <span class="price">
              <span class="product-Price-amount">
                <span class="product-Price-currencySymbol">$</span>40.00
              </span>
            </span>
          </div>
        </div>
      </div><!-- product end -->
      <!-- product -->
      <div class="product col-md-3 col-sm-6 col-xs-12">
        <div class="product-box">
          <!-- product-box-inner -->
          <div class="product-box-inner">
            <div class="product-image-box">
              <div class="onsale">Sale!</div>
              <img class="img-fluid pro-image-front" src="images/product/pro-front-02.png" alt="">
              <img class="img-fluid pro-image-back" src="images/product/pro-back-02.png" alt="">
            </div>
            <div class="product-btn-links-wrapper">
              <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
              </div>
            </div>
          </div><!-- product-box-inner end -->
          <div class="product-content-box">
            <a class="product-title" href="product-layout1.html">
              <h2>Impact Wrench</h2>
            </a>
            <div class="star-ratings">
              <ul class="rating">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
            <span class="price">
              <ins><span class="product-Price-amount">
                <span class="product-Price-currencySymbol">$</span>110.00
              </span>
            </ins>
            <del><span class="product-Price-amount">
              <span class="product-Price-currencySymbol">$</span>123.00
            </span>
          </del>
        </span>
      </div>
    </div>
  </div><!-- product end -->
  <!-- product -->
  <div class="product col-md-3 col-sm-6 col-xs-12">
    <div class="product-box">
      <!-- product-box-inner -->
      <div class="product-box-inner">
        <div class="product-image-box">
          <img class="img-fluid pro-image-front" src="images/product/pro-front-03.png" alt="">
          <img class="img-fluid pro-image-back" src="images/product/pro-back-03.png" alt="">
        </div>
        <div class="product-btn-links-wrapper">
          <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
          </div>
        </div>
      </div><!-- product-box-inner end -->
      <div class="product-content-box">
        <a class="product-title" href="product-layout1.html">
          <h2>Demolition Breaker</h2>
        </a>
        <div class="star-ratings">
          <ul class="rating">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <span class="price">
          <span class="product-Price-amount">
            <span class="product-Price-currencySymbol">$</span>38.00
          </span>
        </span>
      </div>
    </div>
  </div><!-- product end -->
  <!-- product -->
  <div class="product col-md-3 col-sm-6 col-xs-12">
    <div class="product-box">
      <!-- product-box-inner -->
      <div class="product-box-inner">
        <div class="product-image-box">
          <div class="onsale">Sale!</div>
          <img class="img-fluid pro-image-front" src="images/product/pro-front-04.png" alt="">
          <img class="img-fluid pro-image-back" src="images/product/pro-back-04.png" alt="">
        </div>
        <div class="product-btn-links-wrapper">
          <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
          </div>
        </div>
      </div><!-- product-box-inner end -->
      <div class="product-content-box">
        <a class="product-title" href="product-layout1.html">
          <h2>Cordless Drywall Cutter</h2>
        </a>
        <div class="star-ratings">
          <ul class="rating">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <span class="price">
          <ins><span class="product-Price-amount">
            <span class="product-Price-currencySymbol">$</span>99.00
          </span>
        </ins>
        <del><span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>82.00
        </span>
      </del>
    </span>
  </div>
</div>
</div><!-- product end -->
</div>
</div>
<!-- content-inner -->
<div class="content-inner">
  <div class="products row">
    <!-- product -->
    <div class="product col-md-3 col-sm-6 col-xs-12">
      <div class="product-box">
        <!-- product-box-inner -->
        <div class="product-box-inner">
          <div class="product-image-box">
            <img class="img-fluid pro-image-front" src="images/product/pro-front-05.png" alt="">
            <img class="img-fluid pro-image-back" src="images/product/pro-back-05.png" alt="">
          </div>
          <div class="product-btn-links-wrapper">
            <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
            </div>
          </div>
        </div><!-- product-box-inner end -->
        <div class="product-content-box">
          <a class="product-title" href="product-layout1.html">
            <h2>Folding Hex Key Set</h2>
          </a>
          <div class="star-ratings">
            <ul class="rating">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
          <span class="price">
            <span class="product-Price-amount">
              <span class="product-Price-currencySymbol">$</span>62.00
            </span>
          </span>
        </div>
      </div>
    </div><!-- product end -->
    <!-- product -->
    <div class="product col-md-3 col-sm-6 col-xs-12">
      <div class="product-box">
        <!-- product-box-inner -->
        <div class="product-box-inner">
          <div class="onsale">Sale!</div>
          <div class="product-image-box">
            <img class="img-fluid pro-image-front" src="images/product/pro-front-06.png" alt="">
            <img class="img-fluid pro-image-back" src="images/product/pro-back-06.png" alt="">
          </div>
          <div class="product-btn-links-wrapper">
            <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
            </div>
          </div>
        </div><!-- product-box-inner end -->
        <div class="product-content-box">
          <a class="product-title" href="product-layout1.html">
            <h2>Circular Saw</h2>
          </a>
          <div class="star-ratings">
            <ul class="rating">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
          <span class="price">
            <ins><span class="product-Price-amount">
              <span class="product-Price-currencySymbol">$</span>124.00
            </span>
          </ins>
          <del><span class="product-Price-amount">
            <span class="product-Price-currencySymbol">$</span>111.00
          </span>
        </del>
      </span>
    </div>
  </div>
</div><!-- product end -->
<!-- product -->
<div class="product col-md-3 col-sm-6 col-xs-12">
  <div class="product-box">
    <!-- product-box-inner -->
    <div class="product-box-inner">
      <div class="product-image-box">
        <img class="img-fluid pro-image-front" src="images/product/pro-front-07.png" alt="">
        <img class="img-fluid pro-image-back" src="images/product/pro-back-07.png" alt="">
      </div>
      <div class="product-btn-links-wrapper">
        <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
        </div>
      </div>
    </div><!-- product-box-inner end -->
    <div class="product-content-box">
      <a class="product-title" href="product-layout1.html">
        <h2>Impact Driver Kit</h2>
      </a>
      <div class="star-ratings">
        <ul class="rating">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
        </ul>
      </div>
      <span class="price">
        <span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>149.00
        </span>
      </span>
    </div>
  </div>
</div><!-- product end -->
<!-- product -->
<div class="product col-md-3 col-sm-6 col-xs-12">
  <div class="product-box">
    <!-- product-box-inner -->
    <div class="product-box-inner">
      <div class="product-image-box">
        <img class="img-fluid pro-image-front" src="images/product/pro-front-08.png" alt="">
        <img class="img-fluid pro-image-back" src="images/product/pro-back-08.png" alt="">
      </div>
      <div class="product-btn-links-wrapper">
        <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
        </div>
      </div>
    </div><!-- product-box-inner end -->
    <div class="product-content-box">
      <a class="product-title" href="product-layout1.html">
        <h2>Tape Measure</h2>
      </a>
      <div class="star-ratings">
        <ul class="rating">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
        </ul>
      </div>
      <span class="price">
        <span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>24.00
        </span>
      </span>
    </div>
  </div>
</div><!-- product end -->
</div>
</div>
<!-- content-inner -->
<div class="content-inner">
  <div class="products row">
    <!-- product -->
    <div class="product col-md-3 col-sm-6 col-xs-12">
      <div class="product-box">
        <!-- product-box-inner -->
        <div class="product-box-inner">
          <div class="product-image-box">
            <img class="img-fluid pro-image-front" src="images/product/pro-front-01.png" alt="">
            <img class="img-fluid pro-image-back" src="images/product/pro-back-01.png" alt="">
          </div>
          <div class="product-btn-links-wrapper">
            <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
            </div>
          </div>
        </div><!-- product-box-inner end -->
        <div class="product-content-box">
          <a class="product-title" href="product-layout1.html">
            <h2>Reel Fiberglass Tape</h2>
          </a>
          <div class="star-ratings">
            <ul class="rating">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
          <span class="price">
            <span class="product-Price-amount">
              <span class="product-Price-currencySymbol">$</span>40.00
            </span>
          </span>
        </div>
      </div>
    </div><!-- product end -->
    <!-- product -->
    <div class="product col-md-3 col-sm-6 col-xs-12">
      <div class="product-box">
        <!-- product-box-inner -->
        <div class="product-box-inner">
          <div class="product-image-box">
            <img class="img-fluid pro-image-front" src="images/product/pro-front-03.png" alt="">
            <img class="img-fluid pro-image-back" src="images/product/pro-back-03.png" alt="">
          </div>
          <div class="product-btn-links-wrapper">
            <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
            </div>
          </div>
        </div><!-- product-box-inner end -->
        <div class="product-content-box">
          <a class="product-title" href="product-layout1.html">
            <h2>Demolition Breaker</h2>
          </a>
          <div class="star-ratings">
            <ul class="rating">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
          <span class="price">
            <span class="product-Price-amount">
              <span class="product-Price-currencySymbol">$</span>38.00
            </span>
          </span>
        </div>
      </div>
    </div><!-- product end -->
    <!-- product -->
    <div class="product col-md-3 col-sm-6 col-xs-12">
      <div class="product-box">
        <!-- product-box-inner -->
        <div class="product-box-inner">
          <div class="product-image-box">
            <div class="onsale">Sale!</div>
            <img class="img-fluid pro-image-front" src="images/product/pro-front-04.png" alt="">
            <img class="img-fluid pro-image-back" src="images/product/pro-back-04.png" alt="">
          </div>
          <div class="product-btn-links-wrapper">
            <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
            </div>
            <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
            </div>
          </div>
        </div><!-- product-box-inner end -->
        <div class="product-content-box">
          <a class="product-title" href="product-layout1.html">
            <h2>Cordless Drywall Cutter</h2>
          </a>
          <div class="star-ratings">
            <ul class="rating">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
          </div>
          <span class="price">
            <ins><span class="product-Price-amount">
              <span class="product-Price-currencySymbol">$</span>99.00
            </span>
          </ins>
          <del><span class="product-Price-amount">
            <span class="product-Price-currencySymbol">$</span>82.00
          </span>
        </del>
      </span>
    </div>
  </div>
</div><!-- product end -->
<!-- product -->
<div class="product col-md-3 col-sm-6 col-xs-12">
  <div class="product-box">
    <!-- product-box-inner -->
    <div class="product-box-inner">
      <div class="onsale">Sale!</div>
      <div class="product-image-box">
        <img class="img-fluid pro-image-front" src="images/product/pro-front-06.png" alt="">
        <img class="img-fluid pro-image-back" src="images/product/pro-back-06.png" alt="">
      </div>
      <div class="product-btn-links-wrapper">
        <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
        </div>
      </div>
    </div><!-- product-box-inner end -->
    <div class="product-content-box">
      <a class="product-title" href="product-layout1.html">
        <h2>Circular Saw</h2>
      </a>
      <div class="star-ratings">
        <ul class="rating">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
        </ul>
      </div>
      <span class="price">
        <ins><span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>124.00
        </span>
      </ins>
      <del><span class="product-Price-amount">
        <span class="product-Price-currencySymbol">$</span>111.00
      </span>
    </del>
  </span>
</div>
</div>
</div><!-- product end -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section><!-- product-section end-->

<!-- testimonial-section -->
<div id="myCarousel-1" class="carousel slide" data-ride="carousel" style="background-color: #000;">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel-1" data-slide-to="1"></li>
    <li data-target="#myCarousel-1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <h2 >What client says?</h2>
    <div class="carousel-item active client " style="color: #fff">

     
     <div class="container">
       <div class="row">
        <div class=" caption text-left col-md-6">
          <i class="fa fa-quote-left" aria-hidden="true"></i>
          <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor</p>
          <p class="avatar"><img src="images/flicker/avatar.jpg" alt="">Anil Barua</p>
        </div>
        <div class="caption text-left col-md-6">
          <i class="fa fa-quote-left" aria-hidden="true"></i>
          <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor</p>
          <p class="avatar"><img src="images/flicker/avatar.jpg" alt="">Anil Barua</p>
          
        </div>
      </div>
    </div>
    
  </div>
  <div class="carousel-item client"  style="color: #fff">
    <div class="container">
     <div class="row">
      <div class=" caption text-left col-md-6">
        <i class="fa fa-quote-left" aria-hidden="true"></i>
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor</p>
        <p  class="avatar"><img src="images/flicker/avatar.jpg" alt="">Anil Barua</p>
      </div>
      <div class="caption text-left col-md-6">
        <i class="fa fa-quote-left" aria-hidden="true"></i>
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor</p>
        <p class="avatar"><img src="images/flicker/avatar.jpg" alt="">Anil Barua</p>
        
      </div>
    </div>
  </div>
  
</div>
<div class="carousel-item client"  style="color: #fff">
 
  <div class="container">
   <div class="row">
    <div class=" caption text-left col-md-6">
      <i class="fa fa-quote-left" aria-hidden="true"></i>
      <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor</p>
      <p class="avatar"><img src="images/flicker/avatar.jpg" alt="">Anil Barua</p>
    </div>
    <div class="caption text-left col-md-6">
      <i class="fa fa-quote-left" aria-hidden="true"></i>
      <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor</p>
      
      <p class="avatar"><img src="images/flicker/avatar.jpg" alt="">Anil Barua</p>
    </div>
  </div>
</div>

</div>
</div>
</div>
<!-- testimonial-section end-->

<!-- featured-product-section -->
<section class="featured-product-section clearfix">
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-lg-7 col-md-12 ml-auto mr-auto">
        <!-- section-title -->
        <div class="section-title title-style-center_text style2">
          <div class="title-header">
            <h5>how it works</h5>
            <h2 class="title">Top Selling Products</h2>
          </div>
        </div><!-- section-title end -->
      </div>
    </div><!-- row end -->
    <div class="products row">
      <!-- product -->
      <div class="product col-md-3 col-sm-6 col-xs-12">
        <div class="product-box">
          <!-- product-box-inner -->
          <div class="product-box-inner">
            <div class="product-image-box">
              <img class="img-fluid pro-image-front" src="images/product/pro-front-01.png" alt="">
              <img class="img-fluid pro-image-back" src="images/product/pro-back-01.png" alt="">
            </div>
            <div class="product-btn-links-wrapper">
              <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
              </div>
            </div>
          </div><!-- product-box-inner end -->
          <div class="product-content-box">
            <a class="product-title" href="product-layout1.html">
              <h2>Reel Fiberglass Tape</h2>
            </a>
            <div class="star-ratings">
              <ul class="rating">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
            <span class="price">
              <span class="product-Price-amount">
                <span class="product-Price-currencySymbol">$</span>40.00
              </span>
            </span>
          </div>
        </div>
      </div><!-- product end -->
      <!-- product -->
      <div class="product col-md-3 col-sm-6 col-xs-12">
        <div class="product-box">
          <!-- product-box-inner -->
          <div class="product-box-inner">
            <div class="product-image-box">
              <div class="onsale">Sale!</div>
              <img class="img-fluid pro-image-front" src="images/product/pro-front-02.png" alt="">
              <img class="img-fluid pro-image-back" src="images/product/pro-back-02.png" alt="">
            </div>
            <div class="product-btn-links-wrapper">
              <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
              </div>
              <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
              </div>
            </div>
          </div><!-- product-box-inner end -->
          <div class="product-content-box">
            <a class="product-title" href="product-layout1.html">
              <h2>Impact Wrench</h2>
            </a>
            <div class="star-ratings">
              <ul class="rating">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
            <span class="price">
              <ins><span class="product-Price-amount">
                <span class="product-Price-currencySymbol">$</span>110.00
              </span>
            </ins>
            <del><span class="product-Price-amount">
              <span class="product-Price-currencySymbol">$</span>123.00
            </span>
          </del>
        </span>
      </div>
    </div>
  </div><!-- product end -->
  <!-- product -->
  <div class="product col-md-3 col-sm-6 col-xs-12">
    <div class="product-box">
      <!-- product-box-inner -->
      <div class="product-box-inner">
        <div class="product-image-box">
          <img class="img-fluid pro-image-front" src="images/product/pro-front-03.png" alt="">
          <img class="img-fluid pro-image-back" src="images/product/pro-back-03.png" alt="">
        </div>
        <div class="product-btn-links-wrapper">
          <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
          </div>
        </div>
      </div><!-- product-box-inner end -->
      <div class="product-content-box">
        <a class="product-title" href="product-layout1.html">
          <h2>Demolition Breaker</h2>
        </a>
        <div class="star-ratings">
          <ul class="rating">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <span class="price">
          <span class="product-Price-amount">
            <span class="product-Price-currencySymbol">$</span>38.00
          </span>
        </span>
      </div>
    </div>
  </div><!-- product end -->
  <!-- product -->
  <div class="product col-md-3 col-sm-6 col-xs-12">
    <div class="product-box">
      <!-- product-box-inner -->
      <div class="product-box-inner">
        <div class="product-image-box">
          <div class="onsale">Sale!</div>
          <img class="img-fluid pro-image-front" src="images/product/pro-front-04.png" alt="">
          <img class="img-fluid pro-image-back" src="images/product/pro-back-04.png" alt="">
        </div>
        <div class="product-btn-links-wrapper">
          <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
          </div>
          <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
          </div>
        </div>
      </div><!-- product-box-inner end -->
      <div class="product-content-box">
        <a class="product-title" href="product-layout1.html">
          <h2>Cordless Drywall Cutter</h2>
        </a>
        <div class="star-ratings">
          <ul class="rating">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
            <li><i class="fa fa-star-o"></i></li>
          </ul>
        </div>
        <span class="price">
          <ins><span class="product-Price-amount">
            <span class="product-Price-currencySymbol">$</span>99.00
          </span>
        </ins>
        <del><span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>82.00
        </span>
      </del>
    </span>
  </div>
</div>
</div><!-- product end -->
<!-- product -->
<div class="product col-md-3 col-sm-6 col-xs-12">
  <div class="product-box">
    <!-- product-box-inner -->
    <div class="product-box-inner">
      <div class="product-image-box">
        <img class="img-fluid pro-image-front" src="images/product/pro-front-05.png" alt="">
        <img class="img-fluid pro-image-back" src="images/product/pro-back-05.png" alt="">
      </div>
      <div class="product-btn-links-wrapper">
        <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
        </div>
      </div>
    </div><!-- product-box-inner end -->
    <div class="product-content-box">
      <a class="product-title" href="product-layout1.html">
        <h2>Folding Hex Key Set</h2>
      </a>
      <div class="star-ratings">
        <ul class="rating">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
        </ul>
      </div>
      <span class="price">
        <span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>62.00
        </span>
      </span>
    </div>
  </div>
</div><!-- product end -->
<!-- product -->
<div class="product col-md-3 col-sm-6 col-xs-12">
  <div class="product-box">
    <!-- product-box-inner -->
    <div class="product-box-inner">
      <div class="onsale">Sale!</div>
      <div class="product-image-box">
        <img class="img-fluid pro-image-front" src="images/product/pro-front-06.png" alt="">
        <img class="img-fluid pro-image-back" src="images/product/pro-back-06.png" alt="">
      </div>
      <div class="product-btn-links-wrapper">
        <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
        </div>
      </div>
    </div><!-- product-box-inner end -->
    <div class="product-content-box">
      <a class="product-title" href="product-layout1.html">
        <h2>Circular Saw</h2>
      </a>
      <div class="star-ratings">
        <ul class="rating">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
        </ul>
      </div>
      <span class="price">
        <ins><span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>124.00
        </span>
      </ins>
      <del><span class="product-Price-amount">
        <span class="product-Price-currencySymbol">$</span>111.00
      </span>
    </del>
  </span>
</div>
</div>
</div><!-- product end -->
<!-- product -->
<div class="product col-md-3 col-sm-6 col-xs-12">
  <div class="product-box">
    <!-- product-box-inner -->
    <div class="product-box-inner">
      <div class="product-image-box">
        <img class="img-fluid pro-image-front" src="images/product/pro-front-07.png" alt="">
        <img class="img-fluid pro-image-back" src="images/product/pro-back-07.png" alt="">
      </div>
      <div class="product-btn-links-wrapper">
        <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
        </div>
      </div>
    </div><!-- product-box-inner end -->
    <div class="product-content-box">
      <a class="product-title" href="product-layout1.html">
        <h2>Impact Driver Kit</h2>
      </a>
      <div class="star-ratings">
        <ul class="rating">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
        </ul>
      </div>
      <span class="price">
        <span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>149.00
        </span>
      </span>
    </div>
  </div>
</div><!-- product end -->
<!-- product -->
<div class="product col-md-3 col-sm-6 col-xs-12">
  <div class="product-box">
    <!-- product-box-inner -->
    <div class="product-box-inner">
      <div class="product-image-box">
        <img class="img-fluid pro-image-front" src="images/product/pro-front-08.png" alt="">
        <img class="img-fluid pro-image-back" src="images/product/pro-back-08.png" alt="">
      </div>
      <div class="product-btn-links-wrapper">
        <div class="product-btn"><a href="#" class="add-to-cart-btn tooltip-top" data-tooltip="Add To Cart"><i class="ti ti-shopping-cart"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="quick-view-btn js-show-modal1 tooltip-top" data-tooltip="Quick View"><i class="ti ti-search"></i></a>
        </div>
        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top" data-tooltip="Add To Wishlist"><i class="ti ti-heart"></i></a>
        </div>
      </div>
    </div><!-- product-box-inner end -->
    <div class="product-content-box">
      <a class="product-title" href="product-layout1.html">
        <h2>Tape Measure</h2>
      </a>
      <div class="star-ratings">
        <ul class="rating">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
          <li><i class="fa fa-star-o"></i></li>
        </ul>
      </div>
      <span class="price">
        <span class="product-Price-amount">
          <span class="product-Price-currencySymbol">$</span>24.00
        </span>
      </span>
    </div>
  </div>
</div><!-- product end -->
</div>
</div>
</section>
<!-- featured-product-section end -->

<!-- banner-section -->
<div class="news">
 <div class="container">
  <div class="row">
   <div class="col-md-6 col-lg-6 col-pad">
    <div class="category">
     <div class="category_bg_box cat-2-bg" style="background-image: url(images/ns-img.jpg);">
      <div class="category-overlay">
       <div class="category-content">
        <div class="new text-center">50% OFF</div>
        <div class="lo-text clearfix">
         <div class="new-title-left">
          <h3>Gear Patrol</h3>
          <a href="car-details.html" class="btn btn-light" style="background-color: #ffe03d">Buy now</a>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-pad">
  <div class="category">
   <div class="category_bg_box cat-3-bg" style="background-image: url(images/banner-4.jpg);">
    <div class="category-overlay">
     <div class="category-content">
      
      <div class="lo-text clearfix">
       <div class="new-title-right">
        <h3>Gear Patrol</h3>
        <a href="car-details.html" class="btn btn-light" style="background-color: #ffe03d">Buy now</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- banner-section end -->

<!-- blog-section -->
<section class="blog-title-section bg-img3 clearfix">
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-7 ml-auto mr-auto">
        <!-- section-title -->
        <div class="section-title title-style-center_text style2">
          <div class="title-header">
            <h5>OUR BLOG</h5>
            <h2 class="title">Our Latest News</h2>
          </div>
        </div><!-- section-title end -->
      </div>
    </div><!-- row end -->
  </div>
</section>

<section class="blog-section clearfix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- slick_slider -->
        <div class="slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true}'>
          <!-- featured-imagebox-post -->
          <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
            <div class="ttm-post-featured-outer">
              <div class="ttm-post-thumbnail featured-thumbnail">
                <img class="img-fluid" src="images/blog/01.jpg" alt="">
                
              </div>
            </div>
            <div class="featured-content featured-content-post">
              <div class="post-meta">
               
                <span class="ttm-meta-line tag-link"><i class="fa fa-calendar"></i>21 September 2019</span>
              </div>
              <div class="post-title featured-title">
                <h5><a href="blog-single.html">Danger of Having High Water Pressure</a></h5>
                <a href="" title="" class="btn btn-light mt-5">Read more</a>
              </div>
            </div>
          </div><!-- featured-imagebox-post end -->
          <!-- featured-imagebox-post -->
          <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
            <div class="ttm-post-featured-outer">
              <div class="ttm-post-thumbnail featured-thumbnail">
                <img class="img-fluid" src="images/blog/02.jpg" alt="">
                
              </div>
            </div>
            <div class="featured-content featured-content-post">
              <div class="post-meta">
                
                <span class="ttm-meta-line tag-link"><i class="fa fa-calendar"></i>21 September 2019</span>
              </div>
              <div class="post-title featured-title">
                <h5><a href="blog-single.html">The Most Common Painting Mistakes</a></h5>
                <a href="" title="" class="btn btn-light mt-5">Read more</a>
              </div>
            </div>
          </div><!-- featured-imagebox-post end -->
          <!-- featured-imagebox-post -->
          <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
            <div class="ttm-post-featured-outer">
              <div class="ttm-post-thumbnail featured-thumbnail">
                <img class="img-fluid" src="images/blog/03.jpg" alt="">
                
              </div>
            </div>
            <div class="featured-content featured-content-post">
              <div class="post-meta">
               
                <span class="ttm-meta-line tag-link"><i class="fa fa-calendar"></i>21 September 2019</span>
              </div>
              <div class="post-title featured-title">
                <h5><a href="blog-single.html">Choosing Roofing Material for Home</a></h5>
                <a href="" title="" class="btn btn-light mt-5">Read more</a>
              </div>
            </div>
          </div><!-- featured-imagebox-post end -->
          <!-- featured-imagebox-post -->
          <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
            <div class="ttm-post-featured-outer">
              <div class="ttm-post-thumbnail featured-thumbnail">
                <img class="img-fluid" src="images/blog/04.jpg" alt="">
                
              </div>
            </div>
            <div class="featured-content featured-content-post">
              <div class="post-meta">
                
                <span class="ttm-meta-line tag-link"><i class="fa fa-calendar"></i>21 September 2019</span>
              </div>
              <div class="post-title featured-title">
                <h5><a href="blog-single.html">Equipping Researchers in the Developing.</a></h5>
                <a href="" title="" class="btn btn-light mt-5">Read more</a>
              </div>
            </div>
          </div><!-- featured-imagebox-post end-->
          <!-- featured-imagebox-post -->
          <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
            <div class="ttm-post-featured-outer">
              <div class="ttm-post-thumbnail featured-thumbnail">
                <img class="img-fluid" src="images/blog/05.jpg" alt="">
                
              </div>
            </div>
            <div class="featured-content featured-content-post">
              <div class="post-meta">
               
                <span class="ttm-meta-line tag-link"><i class="fa fa-calendar"></i>21 September 2019</span>
              </div>
              <div class="post-title featured-title">
                <h5><a href="blog-single.html">Simple Steps for Replacing old Tiling</a></h5>
                <a href="" title="" class="btn btn-light mt-5">Read more</a>
              </div>
            </div>
          </div><!-- featured-imagebox-post end-->
          <!-- featured-imagebox-post -->
          <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
            <div class="ttm-post-featured-outer">
              <div class="ttm-post-thumbnail featured-thumbnail">
                <img class="img-fluid" src="images/blog/06.jpg" alt="">
                
              </div>
            </div>
            <div class="featured-content featured-content-post">
              <div class="post-meta">
               
                <span class="ttm-meta-line tag-link"><i class="fa fa-calendar"></i>21 September 2019</span>
              </div>
              <div class="post-title featured-title">
                <h5><a href="blog-single.html">Got a Leaking? Hire an experienced Plumber</a></h5>
                <a href="" title="" class="btn btn-light mt-5">Read     more</a>
              </div>
            </div>
          </div>
          <!-- featured-imagebox-post end-->
        </div><!-- slick_slider end -->
      </div>
    </div>
  </div>
</section>
<!-- multi-section end -->

</div><!--site-main end-->

@endsection