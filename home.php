<? include('components/header.php'); ?>
	<div class="content container row home">
		<? include('components/sidebar-home.php'); ?>
		<? include('components/search.php'); ?>
		<div class="workarea col s1 m3 l4" ng-controller="HomeProductsCtrl">
			<div class="carousel home-slider hide-on-small-only">
				<div class="carousel-content">
					<div class="carousel-inner">
						<div class="item">
							<img class="item-img" src="images/content/slides/slide-1.jpg" />
							<div class="item-content">
								<p class="item-title">Телевизор Philips</h3>
								<p class="item-text">Новое качество изображения!</p>
							</div>
						</div>
						<div class="item">
							<img class="item-img" src="images/content/slides/slide-1.jpg" />
							<div class="item-content">
								<p class="item-title">Телевизор Philips 2</h3>
								<p class="item-text">Новое качество изображения!</p>
							</div>
						</div>
						<div class="item">
							<img class="item-img" src="images/content/slides/slide-1.jpg" />
							<div class="item-content">
								<p class="item-title">Телевизор Philips 3</h3>
								<p class="item-text">Новое качество изображения!</p>
							</div>
						</div>
						<div class="item">
							<img class="item-img" src="images/content/slides/slide-1.jpg" />
							<div class="item-content">
								<p class="item-title">Телевизор Philips 4</h3>
								<p class="item-text">Новое качество изображения!</p>
							</div>
						</div>
						<div class="item">
							<img class="item-img" src="images/content/slides/slide-1.jpg" />
							<div class="item-content">
								<p class="item-title">Телевизор Philips 5</h3>
								<p class="item-text">Новое качество изображения!</p>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-controlls">
					<button class="prev"></button>
					<button class="next"></button>
				</div>
				<div class="carousel-pagination">
				
				</div>
			</div>
			<h5>Товары дня</h5>
			<div class="product-carousel carousel">
				<div class="carousel-content">
					<div class="carousel-inner">
						<div class="item card product-card" ng-repeat="product in products | orderBy: 'id' | filter:   {today: 'true'}">
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
							</div>
							<div class="product-add">
								<div class="item-price">
									<span class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">q</i></span>
									<span class="price">{{product.price}} <i class="rouble">q</i></span>
								</div>
								<a class="shopping-card btn-small"><svg class="icon"><use xlink:href="#shopping-card"/></a>
								<div class="compare">
									<input type="checkbox" id="compare_today_{{product.id}}" />
									<label class="grey-text text-darken-1-2" for="compare_today_{{product.id}}">Сравнить</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-controlls">
					<button class="prev"></button>
					<button class="next"></button>
				</div>
			</div>
			<h5>Акции</h5>
			<div class="banner-carousel carousel">
				<div class="carousel-content">
					<div class="carousel-inner">
						<div class="item">
							<img class="item-img" src="images/content/banners/banner-bosch.jpg" />
						</div>
						<div class="item">
							<img class="item-img" src="images/content/banners/banner-asus.jpg" />
						</div>
						<div class="item">
							<img class="item-img" src="images/content/banners/banner-asus.jpg" />
						</div>
					</div>
				</div>
				<div class="carousel-controlls">
					<button class="prev"></button>
					<button class="next"></button>
				</div>
			</div>
			<h5>Новинки </h5>
			<div class="product-carousel carousel">
				<div class="carousel-content">
					<div class="carousel-inner">
						<div class="item card product-card" ng-repeat="product in products | orderBy: 'id' | filter:   {new: 'true'}">
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
							</div>
							<div class="product-add">
								<div class="item-price">
									<span class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">q</i></span>
									<span class="price">{{product.price}} <i class="rouble">q</i></span>
								</div>
								<a class="shopping-card btn-small"><svg class="icon"><use xlink:href="#shopping-card"/></a>
								<div class="compare">
									<input type="checkbox" id="compare_new_{{product.id}}" />
									<label class="grey-text text-darken-1-2" for="compare_new_{{product.id}}">Сравнить</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-controlls">
					<button class="prev"></button>
					<button class="next"></button>
				</div>
			</div>
			<h5>Хиты продаж</h5>
			<div class="product-carousel carousel">
				<div class="carousel-content">
					<div class="carousel-inner">
						<div class="item card product-card" ng-repeat="product in products | orderBy: 'name' | filter:   {bestseller: 'true'}">
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
							</div>
							<div class="product-add">
								<div class="item-price">
									<span class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">q</i></span>
									<span class="price">{{product.price}} <i class="rouble">q</i></span>
								</div>
								<a class="shopping-card btn-small"><svg class="icon"><use xlink:href="#shopping-card"/></a>
								<div class="compare">
									<input type="checkbox" id="compare_bestseller_{{product.id}}" />
									<label class="grey-text text-darken-1-2" for="compare_bestseller_{{product.id}}">Сравнить</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-controlls">
					<button class="prev"></button>
					<button class="next"></button>
				</div>
			</div>
			<h5>Последние новости</h5>
			<div class="row news-list">
				<div class="col l2-5 m2-5 news">
					<div class="card">
						<div class="card-image">
							<img src="images/content/news-1.jpg" />
						</div>
						<div class="card-content">
							<span class="date grey-text text-darken-1">03.05.2015</span>
							<div class="card-title grey-text text-darken-4">Самый отзывчивый</div>
							<p>Новый сезон любимого конкурса на лучший отзыв о товаре!</p>
						</div>
						<div class="card-action">
							<a href="#" class="btn-flat right">ЧИТАТЬ ДАЛЬШЕ</a>
						</div>
					</div>
				</div>
				<div class="col l2-5 m2-5 news">
					<div class="card">
						<div class="card-image">
							<img src="images/content/news-2.jpg" />
						</div>
						<div class="card-content">
							<span class="date grey-text text-darken-1">03.04.2015</span>
							<div class="card-title grey-text text-darken-4">Названа лучшая бытовая техника 2014 года</div>
							<p>23 марта 2015 года Подведены итоги голосавания «Лучшая бытовая техника 2014 по версии рунета»</p>
						</div>
						<div class="card-action">
							<a href="#" class="btn-flat right">ЧИТАТЬ ДАЛЬШЕ</a>
						</div>
					</div>
				</div>
			</div>
			<div class="seo-text">
				<p>Мегаторг - лидер по продаже электроники и бытовой техники среди рохничных сетй России. Мы знаем, насколько стремительна жихнь и как важно все успеть! Пока вы работаете и строите карьеру, воспитываете детей и воплащаете мечта в реальность, мы всегда рядом - в шаге, в клике, по звонку.</p>
				<p>Стратегическое партнерство с ведущими международными и производителями позволяет клиентам «Магаторг» в числе первых узнавать о впечатляющих
инновациях и получать эксклюзивные новинки.</p>
				<p>«Мегаторг-сервис» - это крпнейшая в России профессиональная сервисная компания, которая представлена по всей стране и осуществляет установку,
подключение, настройку и ремонт бытовой техники и электроники любой сложности.</p>
			</div>
		</div>
	</div>
<? include('components/footer.php'); ?>