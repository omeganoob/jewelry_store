<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Gem store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/welcomepage/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/welcomepage/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/welcomepage/responsive.css') }}">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('js/welcomepage/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('storage/images/welcomepage/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header-top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="/home"><img src="{{ asset('storage/images/logo.png') }}" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                           <div class="limit-box">
                              <nav class="main-menu">
                                 <ul class="menu-area-main">
                                    <li class="active"> <a href="/">Home</a> </li>
                                    <li> <a href="/home">jewellery</a> </li>
                                    <li> <a href="#">Contact</a> </li>
                                    <li> <a href="/login">Login</a> </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div class="banner_main">
                  <div class="container">
                     <div class="row d_flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                           <div class="text-bg">
                              <h1>Jewellery</h1>
                              <span>Beauty, fashion and attractive<br> 
                              <strong class="land_bold">Gem store online jewelry shop</strong></span>
                              <a href="/home">Home</a>
                           </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                           <div class="text-img">
                              <figure><img src="{{ asset('storage/images/welcomepage/img.png') }}" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
         </section>
         
         </div>
      </header>
      
      @yield('best')
      @yield('contact')
      @yield('clients')

      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="call_now2">
                        <h3>Online jewelry shopping</h3>
                        <span>Gem store welcome</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="call_now">
                        <h3>Call Now</h3>
                        <span>(+84)123456789</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <p>© 2021 All Rights Reserved. <a href="/home">Gem store</a></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('js/welcomepage/jquery.min.js') }}"></script>
      <script src="{{ asset('js/welcomepage/popper.min.js') }}"></script>
      <script src="{{ asset('js/welcomepage/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/welcomepage/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/welcomepage/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/welcomepage/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/welcomepage/custom.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>