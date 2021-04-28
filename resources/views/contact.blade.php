@extends('layouts.main')
@section('title','contacts')

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="/styles/contact_responsive.css">
@endsection

	<div class="contact">
		<div class="container">
			<div class="row">
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->
	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/contact.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
				

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
				
					<div class="contact_info">
						<div class="contact_info_section">
						<div class="info">
			<p>Это сайт- это сайт компьютерного интернет магазина, который продает комплектующие для сборки на пк.Наш проек был создан недавно и мы надеемся что в нынешних пандемических условия мы сможем помочь вам найти себе комплектующие по душе.</p>
			</div>
							<div class="contact_info_title">Продажа</div>
							<ul>
								<li>Телефон: <span>+79206547767</span></li>
								<li>Почта: <span>test@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Возврат товаров</div>
							<ul>
								<li>Телефон: <span>+79290334355</span></li>
								<li>Почта: <span>test2@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Информация</div>
							<ul>
								<li>Телефон: <span>+79101222344</span></li>
								<li>Почта: <span>test3@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Google Map -->
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
