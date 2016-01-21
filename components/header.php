<!DOCTYPE html>
<html>
<head>
	<title>Megatorg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.png" type="image/png"-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<!--script src="js/jquery-ui.min.js"></script-->
	<script src="js/jquery.jcarousel.min.js"></script>
	<!--script src="js/datepicker-ru.js"></script>
	<script src="js/inputmask.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script-->
	<!--script src="js/accounting.min.js"></script-->
	<script src="js/angular.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
	<!--script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script-->
	<script src="js/svg-lib.js"></script>
	<script src="js/content-app.js"></script>
	<script src="js/script.js"></script>
</head>
<body ng-app="megatorg">
<div id="svg-placeholder" class="hide"></div>
<div class="layout grey lighten-4">
<div class="page-aside hide-on-large-only">
	<div class="inner">
		<? include('components/mobile-menu.php'); ?>
	</div>
</div>
<div class="page">
	<div class="header">
		<div class="topbar">
			<div class="container row">
				<div class="menu-icon hide-on-large-only">
					<button class="btn-icon js-menu" data-action="open"><svg class="icon"><use xlink:href="#menu"/></svg></button>
				</div>
				<div class="geo col l1 hide-on-med-and-down">
					Ваш город: Санкт-Петербург
				</div>
				<div class="profile hide-on-med-and-down offset-l3">
					<a class="dropdown-btn" href="#!" data-activates="dropdown-profile">
						<div class="avatar circle">ИИ</div>
						Привет, Иван
					</a>
					<ul id="dropdown-profile" class="dropdown-content">
						<li><a href="#">Личный кабинет</a></li>
						<li><a href="#">Мои заказы</a></li>
						<li><a href="#">Выход</a></li>
					</ul>
				</div>
			</div>		
		</div>
		<div class="header-content container row">
			<div class="logo col l1 hide-on-small-only">
				<h1 class="site-name">Мегаторг</h1>
				<p class="site-desc hide-on-med-and-down">интернет-магазин электроники и бытовой техники</p>
			</div>
			<div class="callback col l2 hide-on-med-and-down">
				<span class="phone">8-800-200-543-2</span>
				<button class="callback-btn link">Заказать звонок</button>
			</div>
			<div class="notification">
				<div class="shopping-card notif-box">
					<button class="btn-icon notif-btn btn-flat">
						<svg class="icon"><use xlink:href="#shopping-card"/></svg>
						<span class="counter">2</span>
						<span class="title hide-on-med-and-down">Корзина</span>
					</button>
				</div>
				<div class="search hide-on-med-and-up">
					<button class="btn-icon btn-flat">
						<svg class="icon"><use xlink:href="#magnifying-glass"/></svg>
					</button>
				</div>
				<div class="wishlist hide-on-small-only notif-box">
					<button class="btn-icon notif-btn btn-flat">
						<svg class="icon"><use xlink:href="#star"/></svg>
						<span class="counter"></span>
						<span class="title hide-on-med-and-down">Избранное</span>
					</button>
				</div>
				<div class="compare hide-on-small-only notif-box">
					<button class="btn-icon notif-btn btn-flat">
						<svg class="icon"><use xlink:href="#compare"/></svg>
						<span class="counter">13</span>
						<span class="title hide-on-med-and-down">Сравнение</span>
					</button>
				</div>
			</div>
		</div>
	</div>