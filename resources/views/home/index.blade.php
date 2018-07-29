@extends('layouts.master')

@section('title')
The best food in Lagos
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="main-content">
   <section class="section">
      <div class="bg layer ready data-jarallax" data-jarallax="5" style="background-image: url(/img/ticklers-home-min.jpg)"></div>
      <div class="empty-lg-130 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <div class="main-caption text-center color-type-1">
                  <h2 class="h2 title">Menu categories</h2>
                  <div class="empty-sm-20 empty-xs-20"></div>
                  <img src="/img/title_sepp_4.png" alt="{{ config('app.name') }}">
                  <div class="empty-sm-15 empty-xs-15"></div>
                  <div class="simple-text md">
                     <p style="color: #fff;"><b>Ticklers quick delivery restaurant is your one-stop quick service restaurant for delicious meals. We have an extensive menu. Here are our meal categories.</b></p>
                  </div>
                  <div class="empty-lg-70 empty-md-60 empty-sm-60 empty-xs-40"></div>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($categories as $category)            
            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="menu-item menu-item-4">
                  <div class="image hover-zoom">
                     <img src="/img/product-7.png" alt="{{ $category->meal_category_name }}">
                     <div class="vertical-align full menu-button">
                        <a href="{{ route('shop.meal.category', $category->slug) }}" class="page-button button-style-1 sm"><span class="txt">view more</span></a>
                     </div>
                  </div>
                  <div class="text">
                     <div class="empty-sm-20 empty-xs-20"></div>
                     <h4 class="h4 caption"><a href="{{ route('shop.meal.category', $category->slug) }}" class="link-hover-line">{{ $category->meal_category_name }}</a></h4>
                     <div class="empty-sm-10 empty-xs-10"></div>
                  </div>
               </div>
               <div class="empty-sm-30 empty-xs-30"></div>
            </div>
            @endforeach            
         </div>
      </div>      
   </section>
   @if(count($meals) >= 6)
   <section class="section">      
      <div class="empty-lg-130 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <div class="main-caption text-center color-2">
                  <h2 class="h2 title">Featured Meals</h2>
                  <div class="empty-sm-20 empty-xs-20"></div>
                  <img src="/img/title_sepp_3.png" alt="{{ config('app.name') }}" class="color-overlay">
                  <div class="empty-sm-15 empty-xs-15"></div>
                  <div class="simple-text md">
                     <p><b>Here are some of the most popular meals that Ticklers quick service restaurant has to offer. Order a featured meal and have it delivered to you at home or at your office.</b></p>
                  </div>
                  <div class="empty-lg-70 empty-md-60 empty-sm-60 empty-xs-40"></div>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($meals as $meal)
            <div class="col-md-4">
               <div class="menu-item menu-item-6">
                  <div class="image">
                     <img src="/img/product-7.png" alt="{{ $meal->meal_name }}" class="resp-img">
                     <div class="vertical-align full menu-button">
                        <a href="{{ route('shop.meal', $meal->slug) }}" class="page-button button-style-1 type-2"><span class="txt">quick view</span></a>
                        <form action="{{ route('shop.cart.store') }}" method="POST">
                           @csrf
                           <input type="hidden" name="id" value="{{ $meal->id }}">
                           <input type="hidden" name="name" value="{{ $meal->meal_name }}">
                           <input type="hidden" name="price" value="{{ $meal->price }}">
                           <input type="hidden" name="qty" value="1">
                           <button class="page-button button-style-1 type-2"><span class="txt">Add to cart</span></button>
                        </form>
                     </div>
                  </div>
                  <div class="text">
                     <div class="empty-sm-20 empty-xs-20"></div>
                     <h4 class="h4 caption"><a href="{{ route('shop.meal', $meal->slug) }}" class="link-hover-line">{{ $meal->meal_name }}</a></h4>
                     <div class="empty-sm-5 empty-xs-5"></div>
                     <div class="simple-text">
                        <p><b>Description: </b>{{ substr($meal->meal_description,0,100) }}...</p>
                     </div>
                     <div class="menu-price fw-400 main-col">{{ $meal->presentPrice() }}</div>
                  </div>
               </div>
               <div class="empty-md-60 empty-sm-30 empty-xs-30"></div>
            </div>
            @endforeach            
         </div>
      </div>      
   </section>
   @endif
   @if(count($posts) > 0)
   <section class="section">
      <div class="bg left auto pos-center-left lgx-hide" style="background-image: url(/img/home-4/news_bg.jpg)"></div>
      <div class="bg right auto pos-center-right lgx-hide" style="background-image: url(/img/home-4/news_bg2.jpg)"></div>
      <div class="empty-lg-130 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <div class="main-caption text-center color-2">
                  <h2 class="h2 title">Latest News</h2>
                  <div class="empty-sm-20 empty-xs-20"></div>
                  <img src="/img/title_sepp_3.png" alt="" class="color-overlay">
                  <div class="empty-sm-15 empty-xs-15"></div>
                  <div class="simple-text md">
                     <p><b>Get the latest updates about Ticklers Quick Service Restaurant here.</b></p>
                  </div>
                  <div class="empty-lg-70 empty-md-60 empty-sm-60 empty-xs-40"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="row">
               @foreach($posts as $post)
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="simple-item text-center">
                     <div class="image hover-zoom">
                        <a href="{{ route('posts.post', $post->slug) }}"><img src="{{ Voyager::image($post->thumbnail('cropped')) }}" alt="{{ $post->post_title }}" class="resp-img"></a>
                     </div>
                     <div class="empty-sm-10 empty-xs-10"></div>
                     <h5 class="h5 caption"><a href="{{ route('posts.post', $post->slug) }}" class="link-hover-line">{{ $post->title }}</a></h5>
                     <div class="empty-sm-10 empty-xs-10"></div>
                     <div class="simple-text xs">
                        <p>{{ $post->created_at->toFormattedDateString() }}</p>
                     </div>
                     <div class="empty-sm-5 empty-xs-5"></div>
                     <div class="simple-text">
                        <p>{{ substr($post->post_content, 0, 100) }}...</p>
                     </div>
                     <div class="empty-sm-10 empty-xs-10"></div>
                     <a href="{{ route('posts.post', $post->slug) }}" class="page-button button-style-1 type-2 sm"><span class="txt">CONTINUE READING</span><i></i></a>
                     <div class="empty-md-0 empty-sm-30 empty-xs-30"></div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>         
      </div>
   </section>
   @endif
   <section class="section">
      <div class="bg left contain lgx-hide" style="background-image: url(/img/home-4/contact_left_img.jpg)"></div>
      <div class="bg right contain lgx-hide" style="background-image: url(/img/home-4/contact_right_img.jpg)"></div>
      <div class="empty-lg-130 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <div class="main-caption text-center color-2">
                  <h2 class="h2 title">Contact</h2>
                  <div class="empty-sm-20 empty-xs-20"></div>
                  <img src="/img/title_sepp_3.png" alt="" class="color-overlay">
                  <div class="empty-sm-15 empty-xs-15"></div>
                  <div class="simple-text md">
                     <p><b>Please feel free to get in touch with us. We look forward to hearing from you.</b></p>
                  </div>
                  <div class="empty-lg-70 empty-md-60 empty-sm-60 empty-xs-40"></div>
                  <ul class="list-style-2 ul-list">
                     <li>
                        <span><b>Address:</b> Funplex Resort, beside Center for Management Development, CMD Road, Shangisha, Lagos</span>
                     </li>
                     <li>
                        <span><b>Phone:</b><a href="tel:" class="link-hover">+234 806 406 0386</a></span>
                     </li>
                  </ul>
                  <div class="empty-sm-40 empty-xs-30"></div>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-2">
                        <h4 class="h4 tt caption">working hours</h4>
                        <div class="empty-sm-10 empty-xs-10"></div>
                        <div class="simple-text">
                           <p></p>
                        </div>
                        <div class="empty-sm-15 empty-xs-15"></div>
                        <ul class="list-style-1 ul-list">
                           <li>
                              <div class="flex-wrap"><span>All week</span><i></i><b>09:00 - 23:00</b></div>
                           </li>                           
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="empty-lg-130 empty-md-70 empty-sm-30 empty-xs-30"></div>
   </section>
   <section class="section">
      <div class="map-item">
         <div class="map-wrapper map-full" id="map-canvas" data-lat="6.614789" data-lng="3.369949" data-zoom="14" data-marker="/img/marker.png" data-style="1"></div>
         <div class="markers-wrapper addresses-block">
            <a class="marker" data-rel="map-canvas" data-lat="6.614789" data-lng="3.369949" data-string=""></a>
         </div>
      </div>
   </section>
</div>
@endsection

@section('scripts')
	
@endsection