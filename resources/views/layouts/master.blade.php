<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Gem store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
            <a href="/home" id="logo" title="Diana’s jewelry">
                <img src="{{ asset('storage/images/logo.png') }}" alt="logo">
            </a>
			<div class="right-links">
				<ul>
					<li><a href="/cart/view"><span class="ico-products"></span>{{ $items ?? 0 }} items, total {{ $total ?? 0 }} $</a></li>
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
						@else
						<li><a href="#"><span class="ico-account"></span>{{ Auth::user()->name }}</a></li>
						<li> 
							<span class="ico-signout"></span>                                   
							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
										  document.getElementById('logout-form').submit();">
							 {{ __('Logout') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					@endguest
				</ul>
			</div>
		</div>
		<!-- / container -->
	</header>
	<!-- / header -->

	<nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<ul>
				<li><a href="/product/show">New collection</a></li>
				<li><a href="/product/category/2">necklaces</a></li>
				<li><a href="/product/category/3">earrings</a></li>
				<li><a href="/product/category/1">Rings</a></li>
				<li><a href="/product/category/4">Bracelets</a></li>
				<li><a href="products.html">Promotions</a></li>
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->

	<div id="slider">
		<ul>
			<li style="background-image: url(/storage/images/0.jpg)">
				<h3>Make your life better</h3>
				<h2>Genuine diamonds</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
			<li class="purple" style="background-image: url(/storage/images/01.jpg)">
				<h3>She will say “yes”</h3>
				<h2>engagement ring</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
			<li class="yellow" style="background-image: url(/storage/images/02.jpg)">
				<h3>You deserve to be beauty</h3>
				<h2>golden bracelets</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
		</ul>
	</div>
	<!-- / body -->

	@yield('url')

	<div id="body">
		<div class="container">
            @yield('content')
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<footer id="footer">
		<div class="container">
			<div class="cols">
				<div class="col">
					<h3>Frequently Asked Questions</h3>
					<ul>
						<li><a href="#">Fusce eget dolor adipiscing </a></li>
						<li><a href="#">Posuere nisl eu venenatis gravida</a></li>
						<li><a href="#">Morbi dictum ligula mattis</a></li>
						<li><a href="#">Etiam diam vel dolor luctus dapibus</a></li>
						<li><a href="#">Vestibulum ultrices magna </a></li>
					</ul>
				</div>
				<div class="col media">
					<h3>Social media</h3>
					<ul class="social">
						<li><a href="#"><span class="ico ico-fb"></span>Facebook</a></li>
						<li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
						<li><a href="#"><span class="ico ico-gp"></span>Google+</a></li>
						<li><a href="#"><span class="ico ico-pi"></span>Pinterest</a></li>
					</ul>
				</div>
				<div class="col contact">
					<h3>Contact us</h3>
					<p>Gem store.<br>69 Hung Vuong Street<br>Da Nang City</p>
					<p><span class="ico ico-em"></span><a href="#">contact@gemstore.com</a></p>
					<p><span class="ico ico-ph"></span>(590) 423 446 924</p>
				</div>
				<div class="col newsletter">
					<h3>Join our newsletter</h3>
					<p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium.</p>
					<form action="#">
						<input type="text" placeholder="Your email address...">
						<button type="submit"></button>
					</form>
				</div>
			</div>
			<p class="copy">Copyright 2021 Jewelry. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write(`<script src=" {{ asset('js/jquery-1.11.1.min.js') }} ">\x3C/script>`)</script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
