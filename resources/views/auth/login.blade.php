@extends('layouts.master')

@section('title')
    
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
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
               <div class="simple-item color-type-2 text-center">
                  <div class="main-title">
                     <h2 class="h2 title">Login</h2>
                     <div class="empty-sm-25"></div>              
                     <div class="col-md-10 col-md-offset-1">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                          <div class="row">
                             <div class="col-md-12 col-xs-12">
                                <div class="input-field-wrap">
                                   <input type="text" name="email" class="input-field color-2" placeholder="First Name *" required>
                                   <div class="focus"></div>
                                </div>
                                <div class="empty-sm-20 empty-xs-20"></div>
                             </div>
                             <div class="col-md12 col-xs-12">
                                <div class="input-field-wrap">
                                   <input type="password" name="password" class="input-field color-2" placeholder="Password">
                                   <div class="focus"></div>
                                </div>
                                <div class="empty-sm-20 empty-xs-20"></div>
                             </div>
                          </div>                          
                          <div class="input-field-wrap">
                             <button type="submit" class="page-button lg button-style-1 type-4"><span class="txt">Login</span></button>
                          </div>                          
                       </form>
                     </div>
                     <div class="empty-lg-70 empty-md-60 empty-sm-60 empty-xs-40"></div>                                  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="empty-lg-70 empty-md-60 empty-sm-60 empty-xs-40"></div>
   </section>   
</div>
@endsection

@section('scripts')
    
@endsection
