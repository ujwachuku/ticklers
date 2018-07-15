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
                     @if(Cart::count() > 0)
                     <h2 class="h2 title">Your Cart</h2>
                     <div class="empty-sm-25"></div>
                     <div class="col-md-10 col-md-offset-1">
                        <div class="simple-text md opacity-1">
                           <p>The summary of your cart items is in the table below. Please feel free to checkout if you are satisfied with the cart summary or you can <a href="{{ route('shop.index') }}">continue shopping</a></p>
                        </div>
                     </div>
                     @else
                     <h2 class="h2 title">Your Cart is empty</h2>
                     <div class="empty-sm-25"></div>
                     <div class="col-md-10 col-md-offset-1">
                        <div class="simple-text md opacity-1">
                           <p>Your cart is empty. Please go back to the <a href="{{ route('shop.index') }}">shop</a> to order your first item...</p>
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
                        <h5 class="tt h5 sm color-2 height-50">VAT:<span><b class="main-col">N{{ Cart::tax() }}</b></span></h5>
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
                     <a href="{{ route('shop.index') }}" class="page-button md button-style-1 type-4"><span class="txt">continue shopping</span></a>
                     <button class="page-button md button-style-1 type-4 pull-right"><span class="txt">empty cart</span></button>
                  </form>
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
                     <div class="col-sm-12 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="Address *" required> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>                    
                  </div>
                  <div class="row">
                     <div class="col-sm-12 col-xs-12">
                        <div class="input-field-wrap">
                           <input type="email" class="input-field color-2" placeholder="City *" value="Lagos" readonly> 
                           <div class="focus"></div>
                        </div>
                        <div class="empty-sm-20 empty-xs-20"></div>
                     </div>                     
                  </div>                  
                  <div class="input-field-wrap">
                     <textarea placeholder="Additional instructions" class="input-field color-2"></textarea>
                     <div class="focus"></div>
                  </div>
                  <div class="empty-sm-50 empty-xs-50"></div>           
               
               <div class="fr button-full-width">
                  <a href="{{ route('shop.index') }}" class="page-button button-style-1 type-2"><span class="txt">Back to meals</span></a>
                  <a href="/checkout" class="page-button button-style-1 type-4"><span class="txt">Checkout</span></a>
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