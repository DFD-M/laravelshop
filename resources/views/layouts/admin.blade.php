<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
<link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/styles/responsive.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
 @yield('custom_css')
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">E Shop</a></div>
							<nav class="main_nav">
								<ul>
									<li class="hassubs active">
										<a href="{{route('home')}}">Главная</a>
										<ul>
											<li><a href="categories.html">Категории</a></li>
											<li><a href="product.html">Product</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Check out</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</li>
									<li class="hassubs">
                                        <a href="categories.html">Categories</a>
                                        <ul>
                                            @foreach($categories as $category)
                                                <li><a href="{{route('showCategory',$category->alias)}}">{{$category->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Offers</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="{{route('login')}}">Вход</a></li>
								</ul>
							</nav>
							
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		

		<!-- Social -->
		
	</header>

	<!-- Menu -->

	
	
	<!-- Products -->

	@yield('content')

	

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/styles/bootstrap4/popper.js"></script>
<script src="/styles/bootstrap4/bootstrap.min.js"></script>

<script src="/plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="/js/custom.js"></script>
@yield('custom_js')
</body>
</html>