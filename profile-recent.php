<? include('components/header.php'); ?>
	<div class="content container row">
		<? include('components/sidebar.php'); ?>
		<? include('components/search.php'); ?>
		<div class="breadcrumbs col l5 m3 s1">
			<ul class="bcs-list">
				<li class="item"><a href="#">На главную</a></li>
				<li class="item"><span>Личный кабинет</span></li>
			</ul>
		</div>
		<div class="workarea profile-page row" ng-controller="CatalogProductsCtrl">
			<? include('components/profile-menu.php');?>
			<div class="col m3 s1 profile-content">
				<div class="recent section">
					<div class="section-header"></div>
					<div class="catalog view-list">
						<div class="item" ng-repeat="product in products | limitTo:5">
							<div class="product-card">
								<div class="product-info">
									<a class="item-img" href="#" style="background-image:url({{product.image}});"></a>
									<h6 class="item-name"><a href="#">{{product.name}}</a></h6>
									<div class="product-price">
										<span>Цена</span>
										<span class="price">{{product.price}} <i class="rouble">q</i></span>
									</div>
								</div>
								<div class="product-add">
									<div class="item-price">
										<span class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">q</i></span>
										<span class="price">{{product.price}} <i class="rouble">q</i></span>
									</div>
									<div class="actions-btns">
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="btn hide-on-large-only" href="#">Вернуться в кабинет</a>
			</div>
		</div>
	</div>
<? include('components/footer.php'); ?>