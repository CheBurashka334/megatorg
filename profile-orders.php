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
				<div class="orders-history section">
					<div class="section-header">История заказов</div>
					<div class="order-table table">
						<div class="table-row status-processing">
							<div class="table-col info">
								<div class="status-icon circle processing">
									<svg class="icon"><use xlink:href="#clock-24"/></svg>
								</div>
								Заказ: 532341-23<br/>
								Статус: В обработке
							</div>
							<div class="table-col date">
								Дата создания:<br/>
								25.05.2015
							</div>
							<div class="table-col sum">
								Сумма:<br/>
								16 354 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Детали заказа</a>
							</div>
						</div>
						<div class="table-row status-paid">
							<div class="table-col info">
								<div class="status-icon circle paid">
									<svg class="icon"><use xlink:href="#delivery-truck"/></svg>
								</div>
								Заказ: 532341-23<br/>
								Статус: Оплачен
							</div>
							<div class="table-col date">
								Дата создания:<br/>
								21.05.2015
							</div>
							<div class="table-col sum">
								Сумма:<br/>
								142 947 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Детали заказа</a>
							</div>
						</div>
						<div class="table-row status-done">
							<div class="table-col info">
								<div class="status-icon circle done">
									<svg class="icon"><use xlink:href="#done"/></svg>
								</div>
								Заказ: 532341-23<br/>
								Статус: Выполнен
							</div>
							<div class="table-col date">
								Дата создания:<br/>
								13.04.2015
							</div>
							<div class="table-col sum">
								Сумма:<br/>
								53 231 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Детали заказа</a>
							</div>
						</div>
						<div class="table-row status-done">
							<div class="table-col info">
								<div class="status-icon circle done">
									<svg class="icon"><use xlink:href="#done"/></svg>
								</div>
								Заказ: 532341-23<br/>
								Статус: Выполнен
							</div>
							<div class="table-col date">
								Дата создания:<br/>
								13.04.2015
							</div>
							<div class="table-col sum">
								Сумма:<br/>
								53 231 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Детали заказа</a>
							</div>
						</div>
						<div class="table-row status-done">
							<div class="table-col info">
								<div class="status-icon circle done">
									<svg class="icon"><use xlink:href="#done"/></svg>
								</div>
								Заказ: 532341-23<br/>
								Статус: Выполнен
							</div>
							<div class="table-col date">
								Дата создания:<br/>
								13.04.2015
							</div>
							<div class="table-col sum">
								Сумма:<br/>
								53 231 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Детали заказа</a>
							</div>
						</div>
						<div class="table-row status-done">
							<div class="table-col info">
								<div class="status-icon circle done">
									<svg class="icon"><use xlink:href="#done"/></svg>
								</div>
								Заказ: 532341-23<br/>
								Статус: Выполнен
							</div>
							<div class="table-col date">
								Дата создания:<br/>
								13.04.2015
							</div>
							<div class="table-col sum">
								Сумма:<br/>
								53 231 <span class="rouble">q</span>
							</div>
							<div class="table-col detail hide-on-small-only">
								<a class="btn center" href="#">Детали заказа</a>
							</div>
						</div>
					</div>
					<a class="btn center" href="#">История заказов</a>
				</div>
				<a class="btn hide-on-large-only" href="#">Вернуться в кабинет</a>
			</div>
		</div>
	</div>
<? include('components/footer.php'); ?>