<header class="header header-style-3">
   <div class="navigation flex-align">
      <a href="/" class="logo">
         <img src="/img/test-ticklers-1.png" alt="{{ config('app.name') }}"><img src="/img/test-ticklers-1.png" alt="{{ config('app.name') }}" class="logo-type-2">
      </a>
      <div class="burger-menu"><i></i></div>
      <div class="nav">
         <div class="nav-align-wrap">            
            <nav>
               <ul class="header-menu">
                  <li class="active">
                     <a href="/">Home</a>                 
                  </li>
                  <li>
                     <a href="{{ route('shop.index') }}">Meals</a>
                  </li>
                  <li>
                     <a href="{{ route('posts.index') }}">News</a>
                  </li>
                  <li>
                     <a href="{{ route('about') }}">About</a>
                  </li>
                  <li>
                     <a href="{{ route('contact') }}">Contact</a>
                  </li>
                  <li>
                     <a href="{{ route('shop.cart') }}">                        
                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Cart&nbsp;
                        @if(Cart::content()->count() > 0)
                        <span class="badge badge-warning">{{ Cart::content()->count() }}</span>
                        @endif
                     </a>
                  </li>                  
               </ul>
            </nav>
         </div>
      </div>
   </div>
</header>