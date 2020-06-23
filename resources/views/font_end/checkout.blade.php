@extends('font_end.master')
@section('main')
   <!-- page-title -->
   <div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="page-title-heading">
                        <h1 class="title">Checkout</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="index.html">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Checkout</span>
                    </div>
                </div>
            </div>
        </div>  
    </div>                    
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">

    <!-- checkout-section -->
    <section class="checkout-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-form-tag">
                        <div class="checkout-top-form-tag"> Have a coupon? <a href="#">Click here to enter your code</a></div>
                    </div>
                    <div class="ttm-form-tag">
                        <div class="checkout-top-form-tag"> Returning customer? <a href="#">Click here to login</a></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form name="checkout" method="post" class="checkout row" action="#">
                        <div class="col-lg-6">
                            <div class="billing-fields">
                                <div class="content-sec-head-style">
                                    <div class="content-area-sec-title">
                                        <h5>Billing details</h5>
                                    </div>
                                </div>
                                <div class="billing-fields-wrapper pt-10">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>First name</label>
                                                <input type="text" class="input-tex" name="billing_first_name" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>Last name</label>
                                                <input type="text" class="input-text " name="billing_last_name" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Company name&nbsp;<span class="optional">(optional)</span></label>
                                                <input type="text" class="input-text " name="billing_company" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>Email Address</label>
                                                <input type="email" class="input-text " name="billing_email" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>Phone&nbsp;<span class="optional">(optional)</span></label>
                                                <input type="tel" class="input-text " name="billing_phone" placeholder="" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Country</label>
                                                <select name="billing_country" class="country_to_state country_select" tabindex="-1" aria-hidden="true">
                                                    <option value="">Select a country…</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Address</label>
                                                <input type="text" class="input-text" name="billing_address_1" placeholder="Street Address" value="">
                                            </div>
                                            <div class="form-row">
                                                <input type="text" class="input-text " name="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Town / City</label>
                                                <input type="text" class="input-text " name="billing_city" placeholder="" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>State / County</label>
                                                <select name="billing_state" id="billing_state" class="state_select select2-hidden-accessible">
                                                    <option value="">Select a state…</option>
                                                    <option value="AP">Andhra Pradesh</option>
                                                    <option value="AR">Arunachal Pradesh</option>
                                                    <option value="AS">Assam</option>
                                                    <option value="BR">Bihar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>Postcode / ZIP</label>
                                                <input type="text" class="input-text " name="billing_postcode" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <div class="create_account_option">
                                                    <div class="checkbox" id="create_account">
                                                        <label data-target="#collapseOne">
                                                            <input type="checkbox"/> <span class="ttm-textcolor-dark">Create an account?</span>
                                                        </label>
                                                    </div>
                                                    <div id="collapseOne" class="collapse in">
                                                        <p>Create an account by entering the information below. If you are a
                                                        returning customer please login at the top of the page.</p>
                                                        <p class="form-row form-row validate-required" id="account_password_field">
                                                            <label for="account_password" class="">Account password</label>
                                                            <input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password" value="">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="additional-fields">
                                <div class="content-sec-head-style">
                                    <div class="content-area-sec-title">
                                        <h5>Additional information</h5>
                                    </div>
                                </div>
                                <div class="additional-fields-wrapper pt-10">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>First name</label>
                                                <input type="text" class="input-tex" name="billing_first_name" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>Last name</label>
                                                <input type="text" class="input-text " name="billing_last_name" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Company name&nbsp;<span class="optional">(optional)</span></label>
                                                <input type="text" class="input-text " name="billing_company" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Country</label>
                                                <select name="billing_country" class="country_to_state country_select" tabindex="-1" aria-hidden="true">
                                                    <option value="">Select a country…</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Address</label>
                                                <input type="text" class="input-text" name="billing_address_1" placeholder="Street Address" value="">
                                            </div>
                                            <div class="form-row">
                                                <input type="text" class="input-text " name="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-row">
                                                <label>Town / City</label>
                                                <input type="text" class="input-text " name="billing_city" placeholder="" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>State / County</label>
                                                <select name="cus_state" id="cus_state" class="state_select select2-hidden-accessible">
                                                    <option value="">Select a state…</option>
                                                    <option value="AP">Andhra Pradesh</option>
                                                    <option value="AR">Arunachal Pradesh</option>
                                                    <option value="AS">Assam</option>
                                                    <option value="BR">Bihar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label>Postcode / ZIP</label>
                                                <input type="text" class="input-text " name="billing_postcode" placeholder="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row" id="order_comments_field">
                                        <label>Other Notes</label>
                                        <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!--site-main start-->
                            <div class="site-main">

                             <!-- cart-section -->
                             <div class="cart-section clearfix">
                                <div class="content-sec-head-style">
                                    <div class="content-area-sec-title">
                                        <h5>Your order</h5>
                                    </div>
                                </div>
                                <div class="container">
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- cart_table -->
                                            <table class="table cart_table shop_table_responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">&nbsp;</th>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal">Total</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                                    
                                                    <tr class="cart_item">
                                                        <td class="product-thumbnail">
                                                            <a href="product-layout1.html">
                                                                <img class="img-fluid" src="images/product/pro-front-04.png" alt="product-img">
                                                            </a>
                                                        </td>
                                                        <td class="product-name" data-title="Product">
                                                            <a href="product-layout1.html">Cordless Drywall Cutter</a>
                                                            <span>Raising a heavy fur muff that covered the viewer regook oe window.</span>
                                                        </td>
                                                        <td class="product-price" data-title="Price">
                                                            <span class="Price-amount">
                                                                <span class="Price-currencySymbol">$</span>82.00
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity" data-title="Quantity">
                                                         <span class="Price-amount">
                                                            <span class="Price-currencySymbol">x2</span>
                                                        </span>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <span class="Price-amount">
                                                            <span class="Price-currencySymbol">$</span>18.00
                                                        </span>
                                                    </td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- cart-collaterals -->
                                        <div class="cart-collaterals">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="cart_shipping mt-30">
                                                        <h5>Calculate Shipping<span class="ti ti-angle-down"></span></h5>
                                                        <p class="text-input orderby">
                                                            <select><option>United Kingdom (UK)</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </p>
                                                        <p class="text-input"><input type="text" class="input-text zip-code" name="shipping_name" placeholder="Postal Code / Zip"></p>
                                                        <div class="pt-20">
                                                            <p class="text-input"><input type="button" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" name="update_cart" value="update total"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="cart_discount mt-30">
                                                        <h5>Coupon Discount<span class="ti ti-angle-down"></span></h5>
                                                        <p class="pt-10">Enter Your Coupon Code If You Have Done.</p>
                                                        <p class="text-input"><input type="text" class="input-text zip-code" name="shipping_name" placeholder="Coupon Code"></p>
                                                        <div class="pt-20">
                                                            <p class="text-input"><input type="button" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" name="update_cart" value="Apply Coupon"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="cart_totals res-767-mt-30">
                                                        <h5>Cart totals<span>$1450.00</span></h5>
                                                        <h5>Shipping</h5>
                                                        <p class="text-input">
                                                            <input type="radio" name="grpShipping" value="Male" Checked>Standard<span>+ $10.00</span>
                                                        </p>
                                                        <p class="text-input">
                                                            <input type="radio" name="grpShipping" value="Female">Standard<span>+ $10.00</span>
                                                        </p>
                                                        <h5>Total<span>$1460.00</span></h5>
                                                    </div>
                                                    <div class="proceed-to-checkout">
                                                        <a href="#" class="checkout-button button">Proceed to checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- cart-collaterals end-->
                                    </div>
                                </div>
                            </div>
                        </div><!-- cart-section end-->

                    </div><!--site-main end-->
                </div>
                <div class="col-lg-12">
                    <div class="pt-80 res-991-pt-50">
                        <div class="checkout-payment-method">
                            <!-- payment-method -->
                            <div class="payment-method">
                                <div class="paymentBox mb-15">
                                    <label><input type="radio" name="payment-method" value="bank"> Direct Bank Transfer</label>
                                    <div class="payment-detail"><p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p></div>
                                </div>
                                <div class="paymentBox mb-15">
                                    <label><input type="radio" name="payment-method" value="check"> Check Payment</label>
                                    <div class="payment-detail"><p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p></div>
                                </div>
                                <div class="paymentBox mb-15">
                                    <label><input type="radio" name="payment-method" value="cash"> Cash on Delivery</label>
                                    <div class="payment-detail"><p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p></div>
                                </div>
                                <div class="paymentBox mb-15">
                                    <label><input type="radio" name="payment-method" value="paypal" checked="checked"> Paypal
                                        <span class="mt-10 mb-10 ml-25">
                                            <img src="images/payment-paypal.png" alt=""> <span class="mt-5">What is Paypal?</span>
                                        </span>
                                    </label>
                                    <div class="payment-detail"><p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p></div>
                                </div>
                                <div class="paymentBox mb-15">
                                    <label><input type="checkbox" id="accept_terms">I’ve read and accept the terms &amp; conditions</label>
                                </div>
                            </div><!-- payment-method end  -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9"></div>
                <div class="col-lg-3">
                 <div class="text-right place-order mt-30">
                    <button type="submit" class="button" name="checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place Order</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>
<!-- checkout-section end -->

</div><!--site-main end-->
@stop()