<!DOCTYPE html>
<html>
<head>
	<title>Megatorg</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.png" type="image/png"-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<!--script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/datepicker-ru.js"></script>
	<script src="js/inputmask.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script-->
	<script src="js/angular.min.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
	<!--script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script-->
	<script src="js/svg-lib.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
<div id="svg-placeholder" class="hide"></div>
<div class="layout">
<div class="page-aside hide-on-large-only">
	<div class="profile-aside">
		Привет, Иван
	</div>
	<div class="catalog-menu-aside">
		<button>&laquo; Назад</button>
		
	</div>
</div>
<div class="page">
	<div class="header">
		<div class="topbar grey darken-1">
			<div class="container row">
				<div class="menu-icon grey darken-2 hide-on-large-only">
					<button class="btn-icon js-menu" data-action="open"><svg class="icon"><use xlink:href="#menu"/></svg></button>
				</div>
				<div class="geo grey darken-2 col l1 hide-on-med-and-down">
					Ваш город: Санкт-Петербург
				</div>
				<div class="logo col m1 hide-on-small-only hide-on-large-only">
					Мегаторг
				</div>
				<div class="notification hide-on-large-only">
					<div class="shopping-card"><button class="btn-icon"><svg class="icon"><use xlink:href="#shopping-card"/></svg></button></div>
					<div class="search hide-on-med-and-up"><button class="btn-icon"><svg class="icon"><use xlink:href="#magnifying-glass"/></svg></button></div>
					<div class="wishlist hide-on-small-only"><button class="btn-icon"><svg class="icon"><use xlink:href="#star"/></svg></button></div>
					<div class="compare hide-on-small-only"><button class="btn-icon"><svg class="icon"><use xlink:href="#compare"/></svg></button></div>
				</div>
				<div class="profile grey darken-2 col l1 hide-on-med-and-down offset-l3">
					Привет, Иван
				</div>
			</div>		
		</div>
		<div class="content container row">
			<div class="logo col l1 hide-on-med-and-down">
				<h1 class="site-name">Мегаторг</h1>
				<p class="site-desk">интернет-магазин электроники и бытовой техники</p>
			</div>
		</div>
	</div>
	<div class="content container row">
		<div class="sidebar col l1 hide-on-med-and-down">
			<div class="catalog-menu">
				<a href="#!">Каталог товаров</a>
				<ul>
					<li>
						<a href="#">Телевизоры и видео</a>
						<ul>
							<li><a href="#">Телевизоры</a></li>
							<li><a href="#">Домашние кинотеатры</a></li>
							<li><a href="#">Аксессуары для ТВ</a></li>
						</ul>
					</li>
					<li><a href="#">Аудиотехника</a></li>
					<li><a href="#">Ноутбуки, планшеты и компьютеры</a></li>
					<li><a href="#">Телефоны</a></li>
					<li><a href="#">Фото и видео</a></li>
					<li><a href="#">Техника для дома</a></li>
					<li><a href="#">Техника для кухни</a></li>
					<li><a href="#">Встраиваемая техника</a></li>
					<li><a href="#">Красота и здоровье</a></li>
					<li><a href="#">Автотехника</a></li>
					<li><a href="#">Игры и развлечения</a></li>
				</ul>
			</div>
		</div>
		<div class="search col hide-on-small-only m3 l4">
			<div class="card">
				<div class="search-icon"><svg class="icon"><use xlink:href="#magnifying-glass"/></svg></div>
				<input type="search" placeholder="Что будем искать?" class="search-field"/>
				<input type="submit" value="Найти" class="btn-medium search-btn secondary" />
			</div>
		</div>
		<div class="workarea col s1 m3 l4">
			<form class="row">
				<div class="col l3">
					<div class="card section">
						<div class="input-field">
							<input type="text" id="name" />
							<label for="name">Ваше имя*</label>
						</div>
						<p>
							<input type="checkbox" id="check" />
							<label class="grey-text text-darken-1-2" for="check">чекбокс</label>
						</p><p>
							<input type="checkbox" id="check-1" class="custom" />
							<label for="check-1">чекбокс</label>
						</p>
						<div class="range-field">
							<div class="ui-slider ui-slider-horizontal">
								<div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
								<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
								<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a>
							</div>
							<div class="bx_filter_param_area_block row valign-wrapper">
								<div class="bx_input_container col l2 valign">
									<input class="min-value input_text_style filterRangeInp" type="text" name="arrFilter_P1_MIN" id="arrFilter_P1_MIN" value="6150">
								</div>
								<div class="col l1 center-align valign"> - </div>
								<div class="bx_input_container col l2 valign">
									<input class="max-value input_text_style filterRangeInp" type="text" name="arrFilter_P1_MAX" id="arrFilter_P1_MAX" value="26990">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l2">
					<div class="card section">
						<p>
						<button class="btn-small"><svg class="icon"><use xlink:href="#shopping-card"/></svg></button>
						<button class="btn-flat">ЧИТАТЬ ДАЛЬШЕ</button>
						<button class="btn-large secondary">Показать еще</button>
						</p><p>
						<a href="#" class="btn-small"><svg class="icon"><use xlink:href="#shopping-card"/></svg></a>
						<a href="#" class="btn-flat">ЧИТАТЬ ДАЛЬШЕ</a>
						<a href="#" class="btn-large secondary">Показать еще</a>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="footer">
		<div class="subscribe">
		
		</div>
		<div class="content">
		
		</div>
	</div>
</div>
</div>
</body>
</html>