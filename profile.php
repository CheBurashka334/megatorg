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
				<div class="greeting section">
					<div class="section-content">
						Здравствуйте, Иван, добро пожаловать в Ваш личный кабинет.
						<button class="btn-profile-menu btn hide-on-large-only">Меню кабинета</button>
					</div>
				</div>
				<div class="profile-info section">
					<div class="section-content">
						<div class="avatar circle"><img src="images/content/avatar.png" class="item-img" /></div>
						<div class="item-name">Иван Иванов</div>
						<a class="edit-link" href="#">Редактировать профиль</a>
						<p class="item-contacts">Email: ivan@ivan.ru<br/>	
						Телефон: +7 (395) 481-34-42</p>
						<a class="btn btn-coupons" href="profile-coupons.php">Мои купоны (<span class="red-text">2</span>)</a>
					</div>
				</div>
				<div class="orders-history section">
					<div class="section-header">История заказов</div>
					<div class="order-table table">
						<div class="table-row status-processing">
							<div class="table-col info">
								<div class="status-icon circle processing">
									<svg class="icon"><use xlink:href="#clock-24"/></svg>
								</div>
								Заказ: 532341-23<br/>
								Статус: В&nbsp;обработке
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
					</div>
					<a class="btn center" href="profile-orders.php">История заказов</a>
				</div>
				<div class="subscribe-box section">
					<div class="section-header">Рассылка новостей</div>
					<div class="section-content">
						<button class="btn center">Настроить рассылку</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<? include('components/footer.php'); ?>