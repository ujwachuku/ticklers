@extends('layouts.master')

@section('title')
Thank you for your order
@endsection

@section('styles')

@endsection

@section('content')
<div class="main-content">
   <section class="full-height-slider">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/thanks.jpg)" data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h2 class="h2 title">Thank you</h2>
                           <div class="empty-sm-30"></div>
                           <div class="col-md-10 col-md-offset-1">
                              <div class="simple-text md">
                                 <p style="color: #fff; font-weight: bold;">Your order will be processed as quickly as possible. Please get in touch with us if you require further assistance.</p>
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
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="simple-item-style-2 simple-item text-center">
                  <div class="empty-sm-10"></div>
                  <h2 class="h2 title">Your order summary is as follows:</h2>
                  <div class="empty-sm-40 empty-xs-20"></div>
                  <div class="row">
                     <table class="table table-striped">
                        <thead>
                           <th class="bold">Meal</th>
                           <th class="bold">Unit Price</th>
                           <th class="bold">Qty</th>
                        </thead>
                        <tbody>
                           @foreach($cartDetails as $detail)
                           <tr>
                              <td>{{ $detail->meal_name }}</td>
                              <td>N{{ $detail->price }}</td>
                              <td>{{ $detail->qty }}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                     <table class="table">
                        <tr>
                           <td colspan="2"><b>SUBTOTAL</b></td>
                           <td>N{{ $detail->subtotal }}</td>
                        </tr>
                        <tr>
                           <td colspan="2"><b>VAT (5%)</b></td>
                           <td>N{{ $detail->vat }}</td>
                        </tr>
                        <tr>
                           <td colspan="2"><b>TOTAL</b></td>
                           <td><u>N{{ $detail->total }}</u></td>
                        </tr>
                     </table>
                  </div>
               </div>
               <div class="empty-md-0 empty-sm-30 empty-xs-30"></div>
            </div>
            <div class="empty-lg-50 empty-md-50 empty-sm-50 empty-xs-50"></div>
            <!-- <div class="col-md-6 col-md-pull-6 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="wrapp-border">
                        <span class="page-span-6 page-span left"></span>
                        <img src="/img/about/impression-1.jpg" alt="" class="full-img">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="wrapp-border">
                              <span class="page-span-5 page-span right"></span>
                              <img src="/img/about/impression-2.jpg" alt="" class="full-img">
                           </div>
                        </div>
                        <div class="empty-sm-30 empty-xs-30"></div>
                        <div class="col-sm-12">
                           <div class="wrapp-border">
                              <img src="/img/about/impression-3.jpg" alt="" class="full-img">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
         <div class="row">
            <table class="table table-striped text-center">
               <tr>
                  <td colspan="2"><b>Name</b></td>
                  <td>{{ $detail->fname.' '.$detail->lname }}</td>
               </tr>
               <tr>
                  <td colspan="2"><b>Email</b></td>
                  <td>{{ $detail->email }}</td>
               </tr>
               <tr>
                  <td colspan="2"><b>Phone</b></td>
                  <td>{{ $detail->phone }}</td>
               </tr><tr>
                  <td colspan="2"><b>Address</b></td>
                  <td>{{ $detail->address }}</td>
               </tr>
               <tr>
                  <td colspan="2"><b>Instructions</b></td>
                  <td>{{ empty($detail->instructions) ? '-' : $detail->instructions }}</td>
               </tr>
            </table>
         </div>
      </div>
      <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
   </section>
</div>
@endsection

@section('scripts')

@endsection
