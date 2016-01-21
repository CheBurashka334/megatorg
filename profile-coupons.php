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
		<div class="workarea profile-page row">
			<? include('components/profile-menu.php');?>
			<div class="col m3 s1 profile-content">
				<div class="coupons section">
					<div class="section-header">Мои купоны</div>
					<div class="coupon-table table">
						<div class="table-row status-processing">
							<div class="table-col info">
								<div class="status-icon circle">
									<svg class="icon"><use xlink:href="#percent"/></svg>
								</div>
								Купон №: 532341-23<br/>
								Код: 3JKU72RGN
							</div>
							<div class="table-col date">
								Дата сгорания:<br/>
								25.05.2015
							</div>
							<div class="table-col sum">
								Сумма скидки:<br/>
								1 600 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Копировать код</a>
							</div>
						</div>
						<div class="table-row status-paid">
							<div class="table-col info">
								<div class="status-icon circle paid">
									<svg class="icon"><use xlink:href="#percent"/></svg>
								</div>
								Купон №: 523441-12<br/>
								Код: 3JKU72R3C
							</div>
							<div class="table-col date">
								Дата сгорания:<br/>
								21.05.2015
							</div>
							<div class="table-col sum">
								Сумма скидки:<br/>
								400 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Копировать код</a>
							</div>
						</div>
					</div>
				</div>
				<a class="btn hide-on-large-only" href="#">Вернуться в кабинет</a>
			</div>
		</div>
	</div>
<? include('components/footer.php'); ?>