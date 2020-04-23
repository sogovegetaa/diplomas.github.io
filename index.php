<?php error_reporting(0);
		include './admin/config.php';
		$config = getConfig();
		$page = 'index';
		?>
<!DOCTYPE html>
<html lang="en">
<head>
		<?php if (!empty($config)) include "./admin/include-head.php" ?>
	<meta charset="UTF-8">
	<title>Auto Complex</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="libs/owlcarousel2/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="libs/owlcarousel2/assets/owl.theme.default.css">
</head>
<body>
	<?php if (!empty($config)) include "./admin/include-body-start.php" ?>

	<nav class="top">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<a href="#"><img src="img/logo.png" alt="Auto Complex" class="top-log"></a>
				</div>
				<div class="col-6 black-col"></div>
				<div class="col-3">
					<div class="row" style="margin-top: 25px;">
						<div class="col-6  ">
							<a href="#" class="log-in">My Account</a>
						</div>
						<div class="col-4  ">
							<a href="#" class="log-in">Login</a>
						</div>
						<div class="col-1">
							<a href="#"><img src="img/shop.png" alt="" class="shop-img"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<header class="head" style="margin-bottom: 30px;">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="row" style="margin-top: 13px;">
						<div class="col-3"><a href="#" class="header-text">Home</a></div>
						<div class="col-4"><a href="#" class="header-text">Specials</a></div>
						<div class="col-5"><a href="#" class="header-text">Contact Us</a></div>						
					</div>
				</div>
			</div>
		</div>
	</header>
	

	<div class="container">
		<div class="owl-carousel carControl owl-theme">
		    <div class="item"><img src="img/slide.jpg" alt=""></div>
		    <div class="item"><img src="img/slide2.jpg" alt=""></div>
		    <div class="item"><img src="img/slide3.jpg" alt=""></div>
		</div>
		<div class="owl-dots">
	        <div class="owl-dot active"><span></span></div>
	        <div class="owl-dot"><span></span></div>
	        <div class="owl-dot"><span></span></div>
	    </div>
	</div>

	<div class="content container">
		<div class="row">
			<div class="col-3 box-category">
				<div class="dropdown open dropright">
					<p class="btn btn-secondary dropdown-togglee text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Выхлопные насадки
					</p>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="pabes/products/exhaust/product-exhaust.html">M Perfomance</a>
						<a class="dropdown-item" href="#">F Project</a>
						<a class="dropdown-item" href="#">Atenza</a>
					</div>
				</div>

				<div class="dropdown open dropright">
					<p class="btn btn-secondary dropdown-togglee text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Бамперы и компоненты
					</p>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">M Perfomance</a>
						<a class="dropdown-item" href="#">F Project</a>
						<a class="dropdown-item" href="#">Atenza</a>
					</div>
				</div>

				<div class="dropdown open dropright">
					<p class="btn btn-secondary dropdown-togglee text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Колеса и компоненты
					</p>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">M Perfomance</a>
						<a class="dropdown-item" href="#">F Project</a>
						<a class="dropdown-item" href="#">Atenza</a>
					</div>
				</div>

				<div class="dropdown open dropright">
					<p class="btn btn-secondary dropdown-togglee text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Решетки и компоненты
					</p>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">M Perfomance</a>
						<a class="dropdown-item" href="#">F Project</a>
						<a class="dropdown-item" href="#">Atenza</a>
					</div>
				</div>

				<a href="#" style="text-decoration: none;">
					<p  class="category-text">Суппорта</p>				
				</a>

				<a href="#" style="text-decoration: none;">
					<p  class="category-text">Амортизаторы и стойки</p>				
				</a>

				<a href="#" style="text-decoration: none;">
					<p  class="category-text">Чехол</p>				
				</a>

				<a href="#" style="text-decoration: none;">
					<p  class="category-text">Автокресло</p>				
				</a>

				<a href="#" style="text-decoration: none;">
					<p  class="category-text">Комплект ковров</p>				
				</a>
			</div>
			<div class="col-9">
				<div class="row">
					<div class="col-6 product-block">
						<div class="row">
							<div class="col-7">
								<a href="#" class="link-no"><p class="product-title">Подвесная</p></a>
								<a href="#" class="link-no"><p class="product-span">Система</p></a>
								<a href="#" class="link-no"><p class="product-subtitle">У нас есть большие возможности удовлетворить ваш спрос с помощью продукции самого высокого качества</p></a>
							</div>
							<div class="col-5 product-img">
								<img class="w-100" src="img/box-product/suns-system.png" alt="">
							</div>
							
						</div>
					</div>
					<div class="col-6 product-block">
						<div class="row">
							<div class="col-7">
								<a href="#" class="link-no"><p class="product-title">Тормозная</p></a>
								<a href="#" class="link-no"><p class="product-span">Система</p></a>
								<a href="#" class="link-no"><p class="product-subtitle">У нас есть большие возможности удовлетворить ваш спрос с помощью продукции самого высокого качества</p></a>
							</div>
							<div class="col-5 product-img">
								<img class="w-100" src="img/box-product/break-system.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-6 product-block">
						<div class="row">
							<div class="col-7">
								<a href="#" class="link-no"><p class="product-title">Фары</p></a>
								<a href="#" class="link-no"><p class="product-span">Halo</p></a>
								<a href="#" class="link-no"><p class="product-subtitle">У нас есть большие возможности удовлетворить ваш спрос с помощью продукции самого высокого качества</p></a>
							</div>
							<div class="col-5 product-img">
								<img class="w-100" src="img/box-product/halo-headlights.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-6 product-block">
						<div class="row">
							<div class="col-7">
								<a href="#" class="link-no"><p class="product-title">Впуск</p></a>
								<a href="#" class="link-no"><p class="product-span">Intakes</p></a>
								<a href="#" class="link-no"><p class="product-subtitle">У нас есть большие возможности удовлетворить ваш спрос с помощью продукции самого высокого качества</p></a>
							</div>
							<div class="col-5 product-img">
								<img class="w-100" src="img/box-product/air-intakes.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-6 product-block">
						<div class="row">
							<div class="col-7">
								<a href="#" class="link-no"><p class="product-title">Турбинная</p></a>
								<a href="#" class="link-no"><p class="product-span">Система</p></a>
								<a href="#" class="link-no"><p class="product-subtitle">У нас есть большие возможности удовлетворить ваш спрос с помощью продукции самого высокого качества</p></a>
							</div>
							<div class="col-5 product-img">
								<img class="w-100" src="img/box-product/turbine.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-6 product-block">
						<div class="row">
							<div class="col-7">
								<a href="#" class="link-no"><p class="product-title">Выхлопнная</p></a>
								<a href="#" class="link-no"><p class="product-span">Система</p></a>
								<a href="#" class="link-no"><p class="product-subtitle">У нас есть большие возможности удовлетворить ваш спрос с помощью продукции самого высокого качества</p></a>
							</div>
							<div class="col-5 product-img">
								<img class="w-100" src="img/box-product/haust.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="container">
			<div class="row">
				<div class="col-3">
					
				</div>
				<div class="col-9">
					<h2 class="featured-title-text" style="background-color: #ffdb14; margin-left: 18px;">Рекомендуемые продукты</h2>
				</div>
			</div>
		</div>

	<div class="featured container">
		<div class="row featured-content">
			<div class="col-3">
				
			</div>
			<div class="col-9">
				<div class="row featuder-product">
					<div class="col-4 featured-block">
						<img class="w-100 feat-prod" src="img/featured-product/product-5-270x300.webp" alt="">
						<p class="featured-price">97.00$</p>
						<a href="#" class="link-no"><p class="featured-name">Angel Eye Headlight BMW 3er Limo</p></a>
						<p class="featured-subname">So, if you like listening to the sound of your engine, or if you like the smell of burning rubber ..</p>
						<button type="button" class="btn btn-buy">Купить</button>
					</div>
					<div class="col-4 featured-block mar-l">
						<img class="w-100 feat-prod" src="img/featured-product/product-korobka.webp" alt="">
						<p class="featured-price">3,500.00$</p>
						<a href="#" class="link-no"><p class="featured-name">Angel Eye Headlight BMW 3er Limo</p></a>
						<p class="featured-subname">So, if you like listening to the sound of your engine, or if you like the smell of burning rubber ..</p>
						<button type="button" class="btn btn-buy">Купить</button>
					</div>
					<div class="col-4 featured-block mar-l">
						<img class="w-100 feat-prod" src="img/featured-product/product-l.webp" alt="">
						<p class="featured-price">296.00$</p>
						<a href="#" class="link-no"><p class="featured-name">Angel Eye Headlight BMW 3er Limo</p></a>
						<p class="featured-subname">So, if you like listening to the sound of your engine, or if you like the smell of burning rubber ..</p>
						<button type="button" class="btn btn-buy">Купить</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="call-back" style="margin-bottom: 50px;">
			<div class="container-xl">
				<div class="row">
					<div class="col-12 text-center" style="margin-top: 20px;">
						<h2 class="text-white">Хотите оформить заявку?</h2>
						<p class="text-white">Оставьте свои контакты и мы перезвоним вам для оформления заявки!</p>

						<div class="call-back-form">
							<form  class="form" action="thankyou.php" method="POST">
								<div class="row">
									<div class="col-4">
										 <input type="text" name="email" class="form-control fctrl1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите почту">
									</div>
									<div class="col-4" style="padding-left: 0px">
										 <input type="text" name="name" class="form-control fctrl2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите имя">
									</div>
									<div class="col-4" style="padding-left: 0px">
										<button type="submit" class="btn-callback">Отправить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>

	

	<footer>
		<div class="container">
		<div class="row">
			<div class="col-4 social-link">
				<p class="footer-title">Соц сети</p>
				<a href="#" class="link-no"><p class="footer-subtitle">Facebook</p></a>
				<a href="#" class="link-no"><p class="footer-subtitle">Instagram</p></a>
				<a href="#" class="link-no"><p class="footer-subtitle">Vk</p></a>
			</div>
			<div class="col-5">
				<p class="footer-title">Контакты</p>
				<p class="footer-cont">My Company , 4578 Marmora Road, <br> Glasgow D04 89GR</p>
				<p class="footer-cont">Номер: +7 771 127 77 07</p>
				<p class="footer-cont">E-mail: <a href="#" class="link-no gmail">mustakhkuanysh@gmail.com</a></p>
			</div>
		</div>
		</div>
	</footer>

 	<div class="bot">
 		<div class="container text-white">
 			<p>Powered By Mustakh Kuanysh © 2020.</p>
 		</div>
 	</div>









	<script src="js/code.jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="libs/owlcarousel2/owl.carousel.min.js"></script>
	<script src="js/js.js"></script>
	<?php if (!empty($config)) include "./admin/include-body-end.php" ?>
</body>
</html>
