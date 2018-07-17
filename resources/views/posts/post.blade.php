@extends('layouts.master')

@section('title')
{{ $post->post_name }}
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="main-content">
   <section class="full-height-slider type-1">
      <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(/img/ticklers-post.jpg)" data-swiper-parallax="50%"></div>
      <div class="table-view mobile-rel-block">
         <div class="table-cell">
            <div class="container no-padd">
               <div class="row vertical-wrap">
                  <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                     <div class="simple-item color-type-1 text-center">
                        <div class="main-title">
                           <h2 class="h2 title">{{ $post->post_name }}</h2>
                           <div class="empty-sm-30"></div>
                           <div class="col-md-10 col-md-offset-1">
                              <div class="simple-text md">
                                 <p style="color: #fff; font-weight: bold;">{{ substr($post->post_content, 0, 100) }}...</p>
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
      <div class="empty-lg-115 empty-md-100 empty-sm-60 empty-xs-60"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xs-12">
               <article>
                  <div class="simple-item color-type-2 text-center">
                     <div class="main-title">
                        <h2 class="h2 caption">{{ $post->post_name }}</h2>
                        <div class="empty-sm-20 empty-xs-5"></div>
                        <div class="blog-info">
                           <ul>
                              <li>
                                 <div class="inline icon">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 563.43 563.43" width="18px" height="18px" style="enable-background:new 0 0 563.43 563.43;" xml:space="preserve">
                                       <path d="M280.79,314.559c83.266,0,150.803-67.538,150.803-150.803S364.055,13.415,280.79,13.415S129.987,80.953,129.987,163.756
                                          S197.524,314.559,280.79,314.559z M280.79,52.735c61.061,0,111.021,49.959,111.021,111.021S341.851,274.776,280.79,274.776
                                          s-111.021-49.959-111.021-111.021S219.728,52.735,280.79,52.735z"></path>
                                       <path d="M19.891,550.015h523.648c11.102,0,19.891-8.789,19.891-19.891c0-104.082-84.653-189.198-189.198-189.198H189.198
                                          C85.116,340.926,0,425.579,0,530.124C0,541.226,8.789,550.015,19.891,550.015z M189.198,380.708h185.034
                                          c75.864,0,138.313,56.436,148.028,129.524H41.17C50.884,437.607,113.334,380.708,189.198,380.708z"></path>
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
                                 <div class="simple-text xs inline">
                                    <a href="">
                                       <p>{{ $post->user->name }}</p>
                                    </a>
                                 </div>
                              </li>
                              <li>
                                 <div class="inline icon">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58 58" width="18px" height="18px" style="enable-background:new 0 0 58 58;" xml:space="preserve">
                                       <g>
                                          <path d="M42.899,4.5c-0.465-2.279-2.484-4-4.899-4c-0.553,0-1,0.447-1,1s0.447,1,1,1c1.654,0,3,1.346,3,3s-1.346,3-3,3
                                             c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.414,0,4.434-1.721,4.899-4H56v9H2v-9h14h3c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1.816
                                             c0.414-1.162,1.514-2,2.816-2c1.654,0,3,1.346,3,3s-1.346,3-3,3c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.757,0,5-2.243,5-5
                                             s-2.243-5-5-5c-2.414,0-4.434,1.721-4.899,4H0v13v40h58v-40v-13H42.899z M56,55.5H2v-38h54V55.5z"></path>
                                          <path d="M26,2.5c1.654,0,3,1.346,3,3s-1.346,3-3,3c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.757,0,5-2.243,5-5s-2.243-5-5-5
                                             c-0.553,0-1,0.447-1,1S25.447,2.5,26,2.5z"></path>
                                          <path d="M32,2.5c1.654,0,3,1.346,3,3s-1.346,3-3,3c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.757,0,5-2.243,5-5s-2.243-5-5-5
                                             c-0.553,0-1,0.447-1,1S31.447,2.5,32,2.5z"></path>
                                          <circle cx="22" cy="24.5" r="1"></circle>
                                          <circle cx="29" cy="24.5" r="1"></circle>
                                          <circle cx="36" cy="24.5" r="1"></circle>
                                          <circle cx="43" cy="24.5" r="1"></circle>
                                          <circle cx="50" cy="24.5" r="1"></circle>
                                          <circle cx="8" cy="32.5" r="1"></circle>
                                          <circle cx="15" cy="32.5" r="1"></circle>
                                          <circle cx="22" cy="32.5" r="1"></circle>
                                          <circle cx="29" cy="32.5" r="1"></circle>
                                          <circle cx="36" cy="32.5" r="1"></circle>
                                          <circle cx="43" cy="32.5" r="1"></circle>
                                          <circle cx="50" cy="32.5" r="1"></circle>
                                          <circle cx="8" cy="39.5" r="1"></circle>
                                          <circle cx="15" cy="39.5" r="1"></circle>
                                          <circle cx="22" cy="39.5" r="1"></circle>
                                          <circle cx="29" cy="39.5" r="1"></circle>
                                          <circle cx="36" cy="39.5" r="1"></circle>
                                          <circle cx="43" cy="39.5" r="1"></circle>
                                          <circle cx="50" cy="39.5" r="1"></circle>
                                          <circle cx="8" cy="47.5" r="1"></circle>
                                          <circle cx="15" cy="47.5" r="1"></circle>
                                          <circle cx="22" cy="47.5" r="1"></circle>
                                          <circle cx="29" cy="47.5" r="1"></circle>
                                          <circle cx="36" cy="47.5" r="1"></circle>
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
                                 <div class="simple-text xs inline">
                                    <a href="">
                                       <p>{{ $post->created_at->toFormattedDateString() }}</p>
                                    </a>
                                 </div>
                              </li>
                              <li>
                                 <div class="inline icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                       viewBox="0 0 512 512" width="18px" height="18px" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                       <g>
                                          <g>
                                             <path d="M63.403,0v46.122H40.545v30.417h22.857v18.25H40.545v30.417h22.857v18.25H40.545v30.417h22.857v18.25H40.545v30.417
                                                h22.857v18.25H40.545v30.417h22.857v18.25H40.545v30.417h22.857v18.25H40.545v30.417h22.857v18.25H40.545v30.417h22.857v18.25
                                                H40.545v30.417h22.857V512h408.052V0H63.403z M93.82,481.583v-15.704h22.858v-30.417H93.82v-18.25h22.858v-30.417H93.82v-18.25
                                                h22.858v-30.417H93.82v-18.25h22.858v-30.417H93.82v-18.25h22.858v-30.417H93.82v-18.25h22.858v-30.417H93.82v-18.25h22.858
                                                v-30.417H93.82v-18.25h22.858V94.789H93.82v-18.25h22.858V46.122H93.82V30.417h347.218v451.166H93.82z"/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <polygon points="399.95,123.52 369.081,154.389 356.092,141.401 334.585,162.909 369.081,197.406 421.458,145.028    "/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <rect x="145.303" y="157.125" width="167.639" height="30.417"/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <polygon points="399.95,224.433 369.081,255.303 356.092,242.315 334.585,263.823 369.081,298.32 421.458,245.941    "/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <rect x="145.303" y="258.039" width="167.639" height="30.417"/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <polygon points="399.95,325.347 369.081,356.217 356.092,343.229 334.585,364.737 369.081,399.234 421.458,346.855     "/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <rect x="145.303" y="358.953" width="167.639" height="30.417"/>
                                          </g>
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
                                 <div class="simple-text xs inline">
                                    <a href="">
                                       <p>{{ $post->category->post_category_name }}</p>
                                    </a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="empty-sm-65 empty-xs-30"></div>
                     </div>
                  </div>
                  <div class="video-open">
                     <img src="/img/blog/video-bg.jpg" alt="" class="resp-img">
                     <div class="vertical-align full">
                        <a href="#" class="play-button" data-video="https://www.youtube.com/embed/XRnZiqk5Grs?autoplay=1">
                           <span class="play-button-wrap">
                              <svg version="1.1" class="vertical-align full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 443.307 443.306" style="enable-background:new 0 0 443.307 443.306;" xml:space="preserve">
                                 <g>
                                    <path d="M415.934,212.799L36.788,2.097C32.411-0.377,28.65-0.661,25.51,1.242c-3.14,1.902-4.708,5.328-4.708,10.276V431.78
                                       c0,4.952,1.569,8.381,4.708,10.284c3.14,1.902,6.901,1.622,11.278-0.855l379.146-210.703c4.381-2.478,6.571-5.434,6.571-8.856
                                       C422.505,218.224,420.314,215.274,415.934,212.799z"></path>
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
                           </span>
                        </a>
                     </div>
                     <div class="video-item">
                        <div class="video-wrapper">
                           <div class="video-iframe"></div>
                           <div class="close-video main-fill-col">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 21.9 21.9" enable-background="new 0 0 21.9 21.9" width="14px" height="14px">
                                 <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#FFFFFF"></path>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="text-block-wrapp text-left color-type-2">
                     <div class="empty-sm-45 empty-xs-20"></div>
                     <div class="simple-text">
                        <p>{{ $post->post_content }}</p>
                     </div>
                     <div class="empty-sm-25 empty-xs-10"></div>                     
                  </div>
               </article>
            </div>
            <div class="empty-md-100 empty-sm-70 empty-xs-50"></div>
         </div>
         <div class="empty-sm-50 empty-xs-30"></div>
         @if(count($recommended) >= 3)
         <div class="row">
            <div class="col-md-12">
               <h2 class="h2 caption">You Can Also Read</h2>
            </div>
            @foreach($recommended as $article)
            <div class="col-md-4 col-xs-12">
               <article>
                  <div class="empty-sm-50 empty-xs-30"></div>
                  <div class="menu-item menu-item-2 color-type-1 hover-zoom">
                     <a href="{{ route('posts.post', $article->slug) }}" class="image-hover"><img src="/img/blog/read-post-1.jpg" alt="" class="full-img"></a>
                  </div>
                  <div class="text-block-wrapp text-left color-type-2">
                     <div class="empty-sm-25 empty-xs-10"></div>
                     <h4 class="h4 tt color-type-1"><a href="{{ route('posts.post', $article->slug) }}" class="title-blog">{{ $article->post_name }}</a></h4>
                     <div class="empty-sm-15 empty-xs-10"></div>
                     <div class="simple-text">
                        <p>{{ substr($article->post_content, 0, 100) }}...</p>
                     </div>
                  </div>
               </article>
            </div>
            @endforeach
            <div class="empty-md-100 empty-sm-70 empty-xs-50"></div>
         </div>
         @endif
      </div>
   </section>   
</div>	
@endsection

@section('scripts')
	
@endsection