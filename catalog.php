<? include('components/header.php'); ?>
	<div class="content container row">
		<? include('components/sidebar-catalog.php'); ?>
		<? include('components/search.php'); ?>
		<div class="breadcrumbs col l4 m3 s1">
			<ul class="bcs-list">
				<li class="item"><a href="#">На главную</a></li>
				<li class="item"><span>Телевизоры</span></li>
			</ul>
		</div>
		<div class="workarea col s1 m3 l4" ng-controller="CatalogProductsCtrl">
			<div class="title-box">
				<h5 class="title">Телевизоры</h5>
				<button class="btn filter-btn hide-on-large-only">Фильтры</button>
				<div class="sort-box">
					<span class="sort-text">Сортировать по</span>
					<select class="sort browser-default" required ng-model="sort" ng-init="sort = 'reviews'">
						<option value="reviews" selected>популярности</option>
						<option value="rating">рейтингу</option>
						<option value="price">цене</option>
					</select>
					<button class="btn-view active hide-on-small-only" data-view="grid"><svg class="icon"><use xlink:href="#grid"/></svg></button>
					<button class="btn-view hide-on-small-only" data-view="list"><svg class="icon"><use xlink:href="#list"/></svg></button>
				</div>
			</div>
			<div class="row catalog view-grid">
				<div class="item col l1 m1 s1" ng-repeat="product in products | orderBy:sort:true">
					<div class="product-card">
						<div class="product-info">
							<a class="item-img" href="#" style="background-image:url({{product.image}});"></a>
							<h6 class="item-name"><a href="#">{{product.name}}</a></h6>
							<div ng-class="'rating rate-'+product.rating">
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
								<span class="count">({{product.reviews}})</span>
							</div>
							<div class="product-price">
								<span class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">q</i></span>
								<span class="price">{{product.price}} <i class="rouble">q</i></span>
							</div>
						</div>
						<div class="product-add">
							<div class="item-price">
								<span class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">q</i></span>
								<span class="price">{{product.price}} <i class="rouble">q</i></span>
							</div>
							<div class="actions-btns">
								<a href="#" class="btn secondary wishlist">В избранное</a>
								<a href="#" class="shopping-card btn">
									<span class="btn-text">Добавить в</span>
									<svg class="icon"><use xlink:href="#shopping-card"/>
								</a>
							</div>
							<div class="actions-oth">
								<div class="availibility">
									<div class="av" ng-if="product.quantity != 0">
										<svg class="av-icon"><use xlink:href="#done"/></svg>
										<span class="av-text">Есть в наличии</span>
									</div>
									<div class="na" ng-if="product.quantity == 0">
										<svg class="na-icon"><use xlink:href="#na"/></svg>
										<span class="na-text">Нет в наличии</span>
									</div>
								</div>
								<div class="compare">
									<input type="checkbox" id="compare_today_{{product.id}}" />
									<label class="grey-text text-darken-1-2" for="compare_today_{{product.id}}">Cравнить</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="more-box"><a class="btn secondary btn-more" href="#">Показать еще</a></div>
			<? include('components/pagination.php'); ?>
			<div  class="seo-text">
				<h4>Какой телевизор купить?</h4>
				<p>Почувствуйте себя героем любимого фильма – с современным телевизором это так просто! Вы можете купить его для кухни, спальни, гостиной или домашнего кинозала – просто подберите подходящий цвет, дизайн и размер. Купите телевизор белого цвета – и он подчеркнет стиль вашего интерьера, а черный подойдет для любителей классики. Модели с изогнутым экраном – главная новинка в мире ТВ. Ощущения еще реалистичнее!</p>
				<p>Где купить телевизоры с новейшими технологиями дешевле? В интернет-магазине М.Видео вы сможете сравнить модели по цене, а также изучить наши обзоры, отзывы, посмотреть фото и подробное описание продукции. И сможете купить их недорого: стоимость самого дешевого телевизора – 3990 рублей. Также на нашем сайте вы найдете инструкцию по эксплуатации в формате PDF и характеристику.</p>
				<p>Как выбрать и купить лучший телевизор? Обратите внимание на новинки с технологией LED и Full HD-формата. Такие телевизоры совсем недавно появились в продаже, а выбор – огромен. Благодаря светодиодной подсветке обеспечивается естественная цветопередача. 3D-изображение подарит невероятно реалистичное качество картинки. А SMART TV позволит подключиться к интернету через Wi-Fi. Ищите новинки кино через телевизор! Также для вашего удобства производители предусмотрели USB-вход. Закачайте на флешку фотографии – и делитесь с друзьями лучшими моментами на большом экране!</p>
			</div>
		</div>
	</div>
<? include('components/footer.php'); ?>