@extends('layouts.master')

@section('title')
Your cart
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="main-content">
	<section class="full-height-slider">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/ticklers-cart.jpg)" data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                     @if(Cart::count() > 0)
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h2 class="h2 title">Your Cart</h2>
                           <div class="empty-sm-30"></div>
                           <div class="col-md-10 col-md-offset-1">
                              <div class="simple-text md">
                                 <p style="color: #fff; font-weight: bold;">The summary of your cart items is in the table below. Please feel free to checkout if you are satisfied with the cart summary</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <!-- <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div> -->
      <div class="empty-lg-50 empty-md-20 empty-sm-10 empty-xs-10"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
               <div class="simple-item color-type-2 text-center">
                  <div class="main-title">
                     @if(Cart::count() == 0)                     
                     <h2 class="h2 title">Your Cart is empty</h2>
                     <div class="empty-sm-25"></div>
                     <div class="col-md-10 col-md-offset-1">
                        <div class="simple-text md opacity-1">
                           <p>Your cart is empty. Please go back to the <a href="{{ route('shop.index') }}">Ticklers menu</a> to order your first meal...</p>
                        </div>
                     </div>
                     @endif                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <div class="container">
         @if(Cart::count() > 0)
         <div class="row">
            @include('inc.messages')
            <div class="col-md-5 col-xs-12">               
               <div class="empty-sm-60 empty-xs-30"></div>
               <div class="text-left check-subtitle">
                  <h4 class="h4 sm color-2">Your Order</h4>
               </div>
               <div class="empty-sm-40 empty-xs-20"></div>
               <table class="order-list" cols="4" cellspacing="0">
                  @foreach(Cart::content() as $item)
                  <tr>
                     <td>
                        <div class="img hover-zoom">
                           <div class="color-type-1">
                              <a href="#" class="image-hover"><img src="//img/checkout/order-1.png" alt=""></a>
                           </div>
                        </div>
                     </td>
                     <td>
                        <h5 class="h5 caption"><a href="#" class="link-hover">{{ $item->name }}</a></h5>
                     </td>
                     <td>
                        <div class="shop-item">
                           <h6 class="h6">{{ $item->qty }} {{ $item->qty > 1 ? 'items' : 'item' }}</h6>
                        </div>
                     </td>
                     <td>
                        <h5 class="h5 sm order-price main-col">N{{ number_format($item->qty * $item->price, 2) }}</h5>
                     </td>
                  </tr>
                  @endforeach                  
               </table>
               <div class="empty-sm-50 empty-xs-15"></div>
               <div class="cart-total">
                  <ul>
                     <li>
                        <h5 class="tt h5 sm color-2 height-50">Cart Total<span><b class="main-col">N{{ Cart::subtotal() }}</b></span></h5>
                     </li>
                     <li>
                        <h5 class="tt h5 sm color-2 height-50">VAT:<span><b class="main-col">N{{ Cart::tax(5, '.', ',') }}</b></span></h5>
                     </li>
                     <div class="empty-sm-15 empty-xs-15"></div>
                     <li>
                        <h4 class="tt h4 color-2 height-50">Total:<span><b class="main-col">N{{ Cart::total() }}</b></span></h4>
                     </li>
                  </ul>
               </div>
               <div class="empty-sm-50 empty-xs-15"></div>
               <div class="col-md-12" style="display: inline;">                  
                  <form action="{{ route('shop.cart.destroy') }}" method="POST">
                     @csrf
                     <a href="{{ route('shop.index') }}" class="page-button md button-style-1 type-4"><span class="txt">back to meals</span></a>
                     <button class="page-button md button-style-1 type-4 pull-right"><span class="txt">empty cart</span></button>
                  </form>
               </div>
            </div>
            <div class="col-md-7 col-xs-12">
               <div class="empty-sm-60 empty-xs-30"></div>
               <div class="text-left check-subtitle">
                  <h4 class="h4 sm color-2">Your Info</h4>
                  <br>
                  <div class="simple-text md opacity-1">
                     <p>Please fill in the following fields to complete your order.</p>
                  </div>
               </div>
               <div class="empty-sm-40 empty-xs-20"></div>
               <form action="{{ route('order.store') }}" method="POST">
                  @csrf
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" name="first_name" class="input-field color-2" placeholder="First Name *" required>
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" name="last_name" class="input-field color-2" placeholder="Last Name">
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" name="email" class="input-field color-2" placeholder="Email *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" name="phone" class="input-field color-2" placeholder="Phone *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" name="address" class="input-field color-2" placeholder="Address *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>                    
                  </div>
                  <div class="row">
                     <div class="col-sm-12 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="text" name="city" class="input-field color-2" placeholder="City *" value="Lagos" readonly> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>                     
                  </div>                  
                  <div class="input-field-wrap">
                     <textarea name="instructions" placeholder="Additional instructions" class="input-field color-2"></textarea>
                     <div class="focus"></div>
                  </div>
                  <p><u>Payment: At this time, we only accept cash on delivery.</u></p>
                  <div class="empty-sm-50 empty-xs-50"></div>
                  
                  <div class="fr button-full-width">
                     <a href="{{ route('shop.index') }}" class="page-button button-style-1 type-2"><span class="txt">Back to meals</span></a>
                     <button type="submit" class="page-button button-style-1 type-4"><span class="txt">Checkout</span></button>
                  </div>
               </form>
            </div>
         </div>         
         @endif
      </div>
      <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
   </section>
</div>
@endsection

@section('scripts')
	
@endsection