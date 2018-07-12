@extends('layouts.master')

@section('title')
Your cart
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="main-content">
	<section class="full-height-slider">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/shop/main-naner-bg-3.jpg)" data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h1 class="h1 caption">Your Cart</h1>
                           <div class="empty-sm-30"></div>
                           <div class="col-md-10 col-md-offset-1">
                              <div class="simple-text md">
                                 <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="empty-lg-50 empty-md-20 empty-sm-10 empty-xs-10"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
               <div class="simple-item color-type-2 text-center">
                  <div class="main-title">
                     <h1 class="h1 color-2">Your Cart</h1>
                     <div class="empty-sm-25"></div>
                     <div class="col-md-10 col-md-offset-1">
                        <div class="simple-text md opacity-1">
                           <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <div class="container">
         <div class="row">
            <div class="col-md-5 col-xs-12">
               <div class="empty-sm-60 empty-xs-30"></div>
               <div class="text-left check-subtitle">
                  <h4 class="h4 sm color-2">Your Order</h4>
               </div>
               <div class="empty-sm-40 empty-xs-20"></div>
               <table class="order-list" cols="4" cellspacing="0">
                  <tr>
                     <td>
                        <div class="img hover-zoom">
                           <div class="color-type-1">
                              <a href="#" class="image-hover"><img src="//img/checkout/order-1.png" alt=""></a>
                           </div>
                        </div>
                     </td>
                     <td>
                        <h5 class="h5 caption"><a href="#" class="link-hover">Mediterranean  Shrimp Pizza</a></h5>
                     </td>
                     <td>
                        <div class="shop-item">
                           <h6 class="h6">2 items</h6>
                        </div>
                     </td>
                     <td>
                        <h5 class="h5 sm order-price main-col">$16.80</h5>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="img hover-zoom">
                           <div class="color-type-1">
                              <a href="#" class="image-hover"><img src="//img/checkout/order-2.png" alt=""></a>
                           </div>
                        </div>
                     </td>
                     <td>
                        <h5 class="h5 caption"><a href="#" class="link-hover">Big Coca-Cola 2L</a></h5>
                     </td>
                     <td>
                        <div class="shop-item">
                           <h6 class="h6">1 item</h6>
                        </div>
                     </td>
                     <td>
                        <h5 class="h5 sm order-price main-col">$2.80</h5>
                     </td>
                  </tr>
               </table>
               <div class="empty-sm-30 empty-xs-15"></div>
               <div class="promo-code">
                  <div class="input-field-wrap type-2">
                     <input type="text" class="input-field color-2" placeholder="Promo Code"> 
                  </div>
                  <a href="#" class="page-button md button-style-1 type-4 check"><span class="txt">check code</span></a>
               </div>
               <div class="empty-sm-30 empty-xs-15"></div>
               <div class="cart-total">
                  <ul>
                     <li>
                        <h5 class="tt h5 sm color-2 height-50">Cart Total<span><b class="main-col">$19.80</b></span></h5>
                     </li>
                     <li>
                        <h5 class="tt h5 sm color-2 height-50">Delivery:<span><b class="main-col">free</b></span></h5>
                     </li>
                     <li>
                        <h5 class="tt h5 sm color-2 height-50">Box for pizza:<span><b class="main-col">$1.60</b></span></h5>
                     </li>
                     <div class="empty-sm-15 empty-xs-15"></div>
                     <li>
                        <h4 class="tt h4 color-2 height-50">Total:<span><b class="main-col">$21.60</b></span></h4>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-7 col-xs-12">
               <div class="empty-sm-60 empty-xs-30"></div>
               <div class="text-left check-subtitle">
                  <h4 class="h4 sm color-2">Your Info</h4>
               </div>
               <div class="empty-sm-40 empty-xs-20"></div>
               <form action="#">
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" class="input-field color-2" placeholder="First Name *" required>
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" class="input-field color-2" placeholder="Last Name">
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Email *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Phone *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Country *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="ZIP Code *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="City *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Street *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="House Number *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Flat Number *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="input-field-wrap">
                     <textarea placeholder="Message" class="input-field color-2"></textarea>
                     <div class="focus"></div>
                  </div>
                  <div class="empty-sm-50 empty-xs-50"></div>
                  <div class="checkbox-entry-wrap tt delivery">
                     <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                           <i></i>
                           <p>Delivery to another address</p>
                        </span>
                     </label>
                  </div>
                  <div class="delivery-form">
                     <div class="empty-sm-40 empty-xs-20"></div>
               <form action="#">
               <div class="row">
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">  
               <input type="text" class="input-field color-2" placeholder="First Name *" required>
               <div class="focus"></div>
               </div>  
               <div class="empty-sm-20 empty-xs-20"></div>   
               </div>
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap"> 
               <input type="text" class="input-field color-2" placeholder="Last Name">
               <div class="focus"></div>
               </div>    
               <div class="empty-sm-20 empty-xs-20"></div>    
               </div>
               </div>
               <div class="row">
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="Email *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>   
               </div>
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="Phone *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>      
               </div>
               </div>
               <div class="row">
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="Country *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>   
               </div>
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="ZIP Code *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>      
               </div>
               </div>
               <div class="row">
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="City *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>   
               </div>
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="Street *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>      
               </div>
               </div>
               <div class="row">
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="House Number *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>   
               </div>
               <div class="col-sm-6 col-xs-12">
               <div class="input-field-wrap">
               <input type="email" class="input-field color-2" placeholder="Flat Number *" required> 
               <div class="focus"></div>
               </div> 
               <div class="empty-sm-20 empty-xs-20"></div>      
               </div>
               </div>
               <div class="input-field-wrap">  
               <textarea placeholder="Message" class="input-field color-2"></textarea>
               <div class="focus"></div> 
               </div>  
               </form>
               </div>
               <div class="empty-sm-50 empty-xs-50"></div>
               <div class="fr button-full-width">
                  <a href="/meals" class="page-button button-style-1 type-2"><span class="txt">Back to meals</span></a>
                  <a href="/checkout" class="page-button button-style-1 type-4"><span class="txt">Go to payment</span></a>
               </div>
               </form>
            </div>
         </div>
      </div>
      <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
   </section>
</div>
@endsection

@section('scripts')
	
@endsection