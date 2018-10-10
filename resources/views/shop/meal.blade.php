@extends('layouts.master')

@section('title')
{{ $meal->meal_name }}
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="main-content">
   <section class="full-height-slider type-1">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/ticklers-meal.jpg)" data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h2 class="h2 title">{{ $meal->meal_name }}</h2>
                           <div class="empty-sm-30"></div>
                           <div class="col-md-10 col-md-offset-1">
                              <div class="simple-text md">
                                 <p style="color: #fff; font-weight: bold;">{!! $meal->meal_description !!}</p>
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
      <div class="empty-lg-100 empty-md-80 empty-sm-60 empty-xs-50"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-5 col-xs-12">
               <img src="{{ Voyager::image($meal->thumbnail('cropped', 'meal_image')) }}" alt="{{ $meal->meal_name }}" class="full-img">
            </div>
            <div class="col-lg-6 col-md-7 col-xs-12">
               <div class="empty-sm-0 empty-xs-30"></div>
               <aside>
                  <div class="empty-sm-20 empty-xs-20"></div>
                  <h4 class="h4 sm tt color-2">{{ $meal->meal_name }}</h4>
                  <div class="empty-sm-20 empty-xs-20"></div>
                  <h5 class="h5 sm color-2">Price: <span class="h4 main-col"><b>{{ $meal->presentPrice() }}</b></span></h5>
               </aside>
               <div class="empty-sm-40 empty-xs-25"></div>
               <aside>
                  <form action="{{ route('shop.cart.store') }}" method="POST">
                     @csrf
                     <div class="buy-bar type-2">
                        <div class="fl">
                           <h5 class="h5 sm follow-title quntity">Quantity:</h5>
                           <div class="custom-input-number type-2">
                              <button type="button" class="cin-btn cin-decrement">
                              <img src="/img/left_arr.png" alt="">
                              </button>
                              <input type="number" name="qty" class="cin-input input-field" step="1" value="1" min="0" max="10">
                              <button type="button" class="cin-btn cin-increment">
                              <img src="/img/right_arr.png" alt="">
                              </button>
                           </div>
                           <div class="empty-sm-20 empty-xs-15"></div>
                        </div>                     
                     </div>
                     <div class="row">
                        <input type="hidden" name="id" value="{{ $meal->id }}">
                        <input type="hidden" name="name" value="{{ $meal->meal_name }}">
                        <input type="hidden" name="price" value="{{ $meal->price }}">
                        <button class="page-button button-style-1 type-2"><span class="txt">Add to cart</span></button>
                        <a href="{{ route('shop.index') }}" class="page-button button-style-1 type-2"><span class="txt">back to meals</span></a>                     
                     </div>
                  </form>
               </aside>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <div class="empty-lg-50 empty-md-50 empty-sm-40 empty-xs-30"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xs-12">
               <div class="text-center">
                  <ul class="item-tabs type-2">
                     <li class="active"><a href="#" class="link-hover-line type-2">Description</a></li>                     
                  </ul>
               </div>
               <div class="tab-container-wraps">
                  <div class="tab-container-item">
                     <div class="empty-sm-60 empty-xs-30"></div>
                     <div class="simple-text">
                        <p>{!! $meal->meal_description !!}</p>
                     </div>                     
                  </div>                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section">
      <div class="empty-lg-100 empty-md-80 empty-sm-60 empty-xs-50"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="simple-item color-type-2 text-center">
                  <h2 class="h2">You Can Also Order</h2>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="col-md-6 col-md-offset-3 col-xs-12">
                     <div class="simple-text md opacity-1">
                        <p>Here are some interesting meals that you can also order with the meal above.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="also-order-col-wrapper">
               @foreach($upSells as $upSell)
               <div class="col-20">
                  <div class="empty-sm-60 empty-xs-50"></div>
                  <div class="menu-item menu-item-6 type-3">
                     <div class="image">
                        <img src="{{ Voyager::image($upSell->thumbnail('cropped', 'meal_image')) }}" alt="{{ $upSell->meal_name }}">
                        <div class="vertical-align full menu-button">
                           <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <a href="{{ route('shop.meal', $upSell->slug) }}" class="page-button button-style-1 type-4"><span class="txt">details</span></a>
                        </div>
                     </div>
                     <div class="text">
                        <div class="empty-sm-20 empty-xs-20"></div>
                        <h5 class="h5 caption"><a href="#" class="link-hover-line">{{ $upSell->meal_name }}</a></h5>
                        <div class="empty-sm-5 empty-xs-5"></div>
                        <div class="simple-text">
                           <p>{!! $upSell->meal_description !!}</p>
                        </div>
                        <div class="menu-price style-2 main-col" style="right: 18px; font-size: 14px; top: 2px;">{{ $upSell->presentPrice() }}</div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="empty-lg-100 empty-md-80 empty-sm-60 empty-xs-50"></div>
   </section>
</div>
@endsection

@section('scripts')
	
@endsection