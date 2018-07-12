@extends('layouts.master')

@section('title')
The best food in Lagos
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="main-content">
   <section class="full-height-slider type-1">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/shop/main-naner-bg-3.jpg)" data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h1 class="h1 caption">Our Shop</h1>
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
      <div class="empty-lg-120 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="container-fluid padding-70">
         <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-12">
               <aside>
                  <form action="#" class="search-form type-2">
                     <input type="text" placeholder="Search for..." class="input-search" required="">
                     <div class="submit-search">
                        <input type="submit" value="">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="14px" height="14px">
                           <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#FFFFFF"></path>
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
                  </form>
               </aside>
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
                     <h5 class="tt h5 color-2">Categories</h5>
                     <div class="empty-sm-20 empty-xs-10"></div>
                     <ul class="list-style-4 type-2 ul-list">
                        <li><a href="#" class="link-hover">Soups</a></li>
                        <li><a href="#" class="link-hover">Meat</a></li>
                        <li><a href="#" class="link-hover">Salats</a></li>
                        <li><a href="#" class="link-hover">Pizzas</a></li>
                        <li><a href="#" class="link-hover">Other</a></li>
                     </ul>
                  </aside>
                  <aside>
                     <div class="empty-sm-65 empty-xs-30"></div>
                     <h5 class="tt h5 color-2">Price</h5>
                     <div class="empty-sm-20 empty-xs-10"></div>
                     <form action="/" class="input-range">
                        <div class="slider-range" data-counter="$" data-position="start" data-from="2" data-to="300" data-min="0" data-max="400">
                           <div class="range"></div>
                           <div class="range-val flex-align">
                              <div class="range-title">
                                 Price:
                              </div>
                              <span class="amount-start">$2</span>
                              <span>-</span>
                              <span class="amount-end" value="$300"></span>
                           </div>
                        </div>
                     </form>
                  </aside>
                  <aside>
                     <div class="empty-sm-65 empty-xs-30"></div>
                     <h5 class="tt h5 color-2">Taste</h5>
                     <div class="empty-sm-20 empty-xs-10"></div>
                     <div class="checkbox-entry-wrap type-1">
                        <label class="checkbox-entry">
                           <input type="checkbox">
                           <span>
                              <i></i>
                              <p>Vegetarian</p>
                           </span>
                        </label>
                     </div>
                     <div class="empty-sm-20 empty-xs-10"></div>
                     <div class="checkbox-entry-wrap type-1">
                        <label class="checkbox-entry">
                           <input type="checkbox">
                           <span>
                              <i></i>
                              <p>Low calorie</p>
                           </span>
                        </label>
                     </div>
                     <div class="empty-sm-20 empty-xs-10"></div>
                     <div class="checkbox-entry-wrap type-1">
                        <label class="checkbox-entry">
                           <input type="checkbox">
                           <span>
                              <i></i>
                              <p>For kids</p>
                           </span>
                        </label>
                     </div>
                     <div class="empty-sm-20 empty-xs-10"></div>
                     <div class="checkbox-entry-wrap type-1">
                        <label class="checkbox-entry">
                           <input type="checkbox">
                           <span>
                              <i></i>
                              <p>To vine</p>
                           </span>
                        </label>
                     </div>
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
                              <p>Found <span class="main-col"><b>27</b></span> items</p>
                           </div>
                        </div>
                        <div class="shop-select">
                           <div class="show-item">
                              <div class="title-select">
                                 <div class="simple-text">
                                    <p>Shown items per page</p>
                                 </div>
                              </div>
                              <select class="input-field type-2 main-col">
                                 <option value="val1">10</option>
                                 <option value="val1">40</option>
                                 <option value="val1">25</option>
                                 <option value="val1">38</option>
                              </select>
                           </div>
                           <div class="sort-by">
                              <div class="title-select">
                                 <div class="simple-text">
                                    <p>Sort by</p>
                                 </div>
                              </div>
                              <select class="input-field type-2 main-col">
                                 <option value="val1">popular</option>
                                 <option value="val1">popular-1</option>
                                 <option value="val1">popular-2</option>
                                 <option value="val1">popular-3</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row row-4-columns row-3-columns row-2-columns">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-13.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1" ><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-14.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza Margherita</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$16.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-15.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza al Prosciutto</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$8.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-16.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$7.75</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-17.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-18.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza Margherita</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-19.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza al Prosciutto</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-20.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-21.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-22.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza Margherita</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-23.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza al Prosciutto</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="empty-sm-60 empty-xs-50"></div>
                     <div class="menu-item menu-item-2 type-2">
                        <div class="image hover-zoom">
                           <a href="#" class="like-product left main-fill-col">
                              <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                                 <g>
                                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                       c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                       l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                       C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                       s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                       c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                       C444.801,187.101,434.001,213.101,414.401,232.701z"></path>
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
                           </a>
                           <img src="/img/shop/product-24.png" alt="">
                           <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                              <div class="empty-sm-10 empty-xs-10"></div>
                              <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery" data-rel="1"><span class="txt">quick view</span></a>
                           </div>
                        </div>
                        <div class="text">
                           <div class="empty-sm-20 empty-xs-20"></div>
                           <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="menu-price style-2 title main-col">$6.25</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="empty-lg-70 empty-md-50 empty-sm-40 empty-xs-30"></div>
               <div class="row">
                  <div class="col-md-10 col-md-offset-1 col-xs-12">
                     <div class="page-navigation">
                        <a href="#" class="left-arr">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="6px" height="8px" viewBox="0 0 292.359 292.359" style="enable-background:new 0 0 292.359 292.359;" xml:space="preserve">
                              <g>
                                 <path d="M222.979,5.424C219.364,1.807,215.08,0,210.132,0c-4.949,0-9.233,1.807-12.848,5.424L69.378,133.331   c-3.615,3.617-5.424,7.898-5.424,12.847c0,4.949,1.809,9.233,5.424,12.847l127.906,127.907c3.614,3.617,7.898,5.428,12.848,5.428   c4.948,0,9.232-1.811,12.847-5.428c3.617-3.614,5.427-7.898,5.427-12.847V18.271C228.405,13.322,226.596,9.042,222.979,5.424z" fill="#898989"></path>
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
                        </a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">29</a>
                        <a href="#" class="right-arr">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="6px" height="8px" viewBox="0 0 292.359 292.359" style="enable-background:new 0 0 292.359 292.359;" xml:space="preserve">
                              <g>
                                 <path d="M222.979,133.331L95.073,5.424C91.456,1.807,87.178,0,82.226,0c-4.952,0-9.233,1.807-12.85,5.424   c-3.617,3.617-5.424,7.898-5.424,12.847v255.813c0,4.948,1.807,9.232,5.424,12.847c3.621,3.617,7.902,5.428,12.85,5.428   c4.949,0,9.23-1.811,12.847-5.428l127.906-127.907c3.614-3.613,5.428-7.897,5.428-12.847   C228.407,141.229,226.594,136.948,222.979,133.331z" fill="#898989"></path>
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
                        </a>
                     </div>
                  </div>
               </div>
               <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection

@section('scripts')
	
@endsection