@extends('layouts.master')

@section('title')
Checkout
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="main-content">
	<section class="full-height-slider">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/shop/main-naner-bg-3.jpg)"data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h1 class="h1 caption">Checkout</h1>
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
                     <h1 class="h1 color-2">Checkout</h1>
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
                  <h4 class="h4 sm color-2">Payment Method</h4>
               </div>
               <div class="empty-sm-40 empty-xs-20"></div>
               <div class="checkbox-entry-wrap">
                  <label class="checkbox-entry type-2">
                     <input type="radio" name="1" checked="">
                     <span>
                        <i></i>
                        <p>By Credit Card</p>
                     </span>
                  </label>
               </div>
               <div class="empty-sm-10 empty-xs-10"></div>
               <div class="simple-text padd-left-25">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
               </div>
               <div class="empty-sm-15 empty-xs-10"></div>
               <div class="checkbox-entry-wrap">
                  <label class="checkbox-entry type-2">
                     <input type="radio" name="1">
                     <span>
                        <i></i>
                        <p>By Cash On Delivery</p>
                     </span>
                  </label>
               </div>
               <div class="empty-sm-10 empty-xs-10"></div>
               <div class="simple-text padd-left-25">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
               </div>
            </div>
            <div class="col-md-7 col-xs-12">
               <div class="empty-sm-60 empty-xs-30"></div>
               <div class="text-left check-subtitle">
                  <h4 class="h4 sm color-2">Payment Info</h4>
               </div>
               <div class="empty-sm-40 empty-xs-20"></div>
               <form action="#">
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" class="input-field color-2" placeholder="Card Number *" required>
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" class="input-field color-2" placeholder="Cardholder Name *">
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Expectation Month *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Expectation Year *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="CVV *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="simple-text">
                           <p>* Incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="empty-sm-50 empty-xs-30"></div>
                  <div class="fr button-full-width">
                     <a href="#" class="page-button button-style-1 type-2"><span class="txt">Back to order</span></a>
                     <a href="#" class="page-button button-style-1 type-4"><span class="txt">Pay 21.20$</span></a>
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