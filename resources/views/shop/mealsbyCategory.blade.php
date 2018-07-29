@extends('layouts.master')

@section('title')
{{ $meals->meal_category_name }} Meals
@endsection

@section('styles')
   
@endsection

@section('content')
<div class="main-content">
   <section class="full-height-slider type-1">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/ticklers-shop.jpg)" data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h2 class="h2 title">{{ $meals->meal_category_name }} Meals</h2>
                           <div class="empty-sm-30"></div>
                           <div class="col-md-10 col-md-offset-1">
                              <div class="simple-text md">
                                 <p style="color: #fff; font-weight: bold">Ticklers offers a wide range of {{ $meals->meal_category_name }} meals and drinks for your pleasure. Order a meal and have it delivered to you.</p>
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
      <div class="empty-lg-120 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="container-fluid padding-70">
         <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-12">               
               <div class="filter-open">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" xml:space="preserve">
                     <g>
                        <path d="M1,9h3v4c0,0.553,0.447,1,1,1h12c0.553,0,1-0.447,1-1V9h35c0.553,0,1-0.447,1-1s-0.447-1-1-1H18V3c0-0.553-0.447-1-1-1H5
                           C4.447,2,4,2.447,4,3v4H1C0.447,7,0,7.447,0,8S0.447,9,1,9z M6,4h10v8H6V4z"/>
                        <path d="M53,26H34v-4c0-0.553-0.447-1-1-1H21c-0.553,0-1,0.447-1,1v4H1c-0.553,0-1,0.447-1,1s0.447,1,1,1h19v4c0,0.553,0.447,1,1,1
                           h12c0.553,0,1-0.447,1-1v-4h19c0.553,0,1-0.447,1-1S53.553,26,53,26z M32,31H22v-8h10V31z"/>
                        <path d="M53,45h-3v-4c0-0.553-0.447-1-1-1H37c-0.553,0-1,0.447-1,1v4H1c-0.553,0-1,0.447-1,1s0.447,1,1,1h35v4c0,0.553,0.447,1,1,1
                           h12c0.553,0,1-0.447,1-1v-4h3c0.553,0,1-0.447,1-1S53.553,45,53,45z M48,50H38v-8h10V50z"/>
                     </g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                  </svg>
               </div>
               <div class="menu-filter">
                  <div class="close-filter main-fill-col">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 21.9 21.9" enable-background="new 0 0 21.9 21.9" width="18px" height="18px">
                        <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#FFFFFF"></path>
                     </svg>
                  </div>
                  <aside>
                     <div class="empty-sm-65 empty-xs-65"></div>
                     <h5 class="tt h5 color-2">Meal Categories</h5>
                     <div class="empty-sm-20 empty-xs-10"></div>
                     <ul class="list-style-4 type-2 ul-list">
                        @foreach($categories as $category)
                        <li><a href="{{ route('shop.meal.category',$category->slug) }}" class="link-hover">{{ $category->meal_category_name }}</a></li>
                        @endforeach
                     </ul>
                  </aside>                                    
               </div>
               <div class="empty-md-0 empty-sm-30 empty-xs-30"></div>
            </div>
            <div class="col-lg-10 col-md-9 col-xs-12">
               <div class="row">
                  <div class="col-md-12 col-xs-12">
                     <div class="shop-filter">
                        <div class="found-items">
                           <div class="simple-text">
                              <p>Found <span class="main-col"><b>{{ count($meals->meal) }}</b></span> {{ count($meals->meal) === 1 ? 'item' : 'items' }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row row-4-columns row-3-columns row-2-columns">
                  @if(count($meals->meal) > 0)
                  @foreach($meals->meal as $meal)
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <img src="{{ Voyager::image($meal->thumbnail('cropped', 'meal_image')) }}" alt="{{ $meal->meal_name }}">
                           <div class="vertical-align full menu-button">
                              <form action="{{ route('shop.cart.store') }}" method="POST">
                                 @csrf
                                 <input type="hidden" name="id" value="{{ $meal->id }}">
                                 <input type="hidden" name="name" value="{{ $meal->meal_name }}">
                                 <input type="hidden" name="price" value="{{ $meal->price }}">
                                 <input type="hidden" name="qty" value="1">
                                 <button class="page-button button-style-1 type-2"><span class="txt">Add to cart</span></button>
                              </form>                              
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="{{ route('shop.meal', $meal->slug) }}" class="page-button button-style-1 type-4"><span class="txt">details</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">{{ $meal->meal_name }}</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 main-col">{{ $meal->presentPrice() }}</div>
                        </div>
                     </div>
                  </div>                  
                  @endforeach
                  @else
                  <div class="row">
                     <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                        <div class="simple-item color-type-2 text-center">
                           <div class="main-title">                              
                              <h2 class="h2 title">There are no meals in this category</h2>
                              <div class="empty-sm-25"></div>
                              <div class="col-md-10 col-md-offset-1">
                                 <div class="simple-text md opacity-1">
                                    <p>Please go back to the <a href="{{ route('shop.index') }}">shop</a> to order your first item...</p>
                                 </div>
                              </div>                     
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="empty-lg-70 empty-md-50 empty-sm-40 empty-xs-30"></div>
                  @endif                 
               </div>
               <div class="empty-lg-70 empty-md-50 empty-sm-40 empty-xs-30"></div>               
            </div>
         </div>
      </div>
   </section>
</div>
@endsection

@section('scripts')
   
@endsection