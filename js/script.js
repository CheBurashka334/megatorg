$(document).ready(function(){
	
	$('#svg-placeholder').html(svg);
	
	$(window).scroll(function(){
		if($(window).scrollTop() > 50) {
			$('.header').addClass('fixed');
		} else {
			$('.header').removeClass('fixed');
		}
	});
	
	// modal
	$('.btn-modal').click(function(){
		var modal = $(this).attr('data-modal');
		$('.dark-bg, #'+modal).fadeIn(500);
	});
	$('.modal .btn-close, .dark-bg').click(function(){
		$('.dark-bg, .modal').fadeOut(500);
	});
	
	// menu
	$('.js-menu').click(function(){
		var act = $(this).attr('data-action');
		switch(act){
			case 'open':
				position();
				$('.page-aside').addClass('open');
				$('.js-menu').attr('data-action', 'close');
			break;
			case 'close':
			default:
				var pos = parseInt($('.page').css('top'), 10);
				$('.page-aside').removeClass('open');
				$('.js-menu').attr('data-action', 'open');
				$('.page').css({'position': 'relative', 'top': '0px'});
				$(window).scrollTop(-pos);
		}
	});
	$('.mobile-menu .parent > .menu-link').click(function(){
		$(this).parent('.parent').siblings().addClass('inactive').removeClass('open');
		if($(this).parent('.parent').hasClass('submenu-item')){
			$(this).parent('.submenu-item').parent('.submenu').siblings().addClass('inactive');
		} else {
			$(this).parent('.menu-item').parent('.menu').siblings('.menu').addClass('inactive');
		}
		$('.menu-back-btn').addClass('active');
		$(this).parent('.parent').addClass('open');
		return false;
		//e.preventDefault;
	});
	$('.mobile-menu .menu-back-btn').click(function(){
		$('.menu .parent.open:last').removeClass('open');
	});
	// footer-menu on mobile
	if($(window).width() < 601){
		$('.footer-menu .menu-link').click(function(){
			$(this).toggleClass('active').siblings('.submenu').slideToggle(500);
			return false;
		});
	} else {
		$('.footer-menu .menu-link').click(function(){
			return false;
		});
	}
	
	$('.dropdown-btn').dropdown({
		//gutter: 40,
		constrain_width: false,
		beloworigin: true
	});
	
	$('.btn-view').click(function(){
		if($(this).hasClass('active')){
			return false;
		} else {
			var view = $(this).attr('data-view');
			$(this).addClass('active').siblings('.btn-view').removeClass('active');
			if(view == 'grid'){
				var viewOpp = 'list';
			} else {
				var viewOpp = 'grid';
			}
			$('.catalog').removeClass('view-'+viewOpp).addClass('view-'+view);
		}
	});
	
	// jcarousel
	// http://sorgalla.com/jcarousel/docs/
	$('.carousel').jcarousel({
		list: '.carousel-inner',
		wrap: 'circular'
	});
	/*$('.carousel-nav')
		.jcarouselPagination({
			item: function(page){
				return '<li class="nav-item"><a class="nav-link" href="#'+page+'"></a></li>';
			}
		})
		.on('jcarouselpagination:active', 'a', function(){ // - вот эта херня не работает почему-то
			$(this).addClass('active');
		})
		.on('jcarouselpagination:inactive', 'a', function(){ // - и эта (а должна!)
			$(this).removeClass('active');
		});*/
	$('.carousel-controlls .prev')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl({
			target: '-=1'
		});
	$('.carousel-controlls .next')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl({
			target: '+=1'
		});
	
	
	// anchor-menu
	$('.anchor-manu .menu-link.anchor:not(.inactive)').click(function(e){
		var el = $(this).attr('href');
		$(el).addClass('show').siblings().removeClass('show');
		var scrollto = $(el).position();
		$('html,body').animate({scrollTop: scrollto.top},700);
		return false;
		//e.preventDefault;
	});
	// неактивная ссылка меню
	$('.inactive').click(function(){
		return false;
	});
	// anchor-link
	$('.anchor-link').click(function(e){
		var el = $(this).attr('href');
		var scrollto = $(el).offset();
		$('html,body').animate({scrollTop: scrollto.top - 100},700);
		return false;
		//e.preventDefault;
	});
	
	// yandex.map
	// https://tech.yandex.ru/maps/doc/jsapi/2.1/quick-start/tasks/quick-start-docpage/
	/*ymaps.ready(init);
	var luxMap, luxPlacemark;
	
	function init(){
		luxMap = new ymaps.Map("map",{
			center: [57.13319444, 65.56589206],
			zoom: 17
		});
		luxPlacemark = new ymaps.Placemark(luxMap.getCenter(),{},{
			iconLayout: 'default#image',
			iconImageHref: 'images/map-marker.png',
			iconImageSize: [50, 90],
			iconImageOffset: [-30,-70]
		});
		luxMap.behaviors.disable('scrollZoom');
		luxMap.geoObjects.add(luxPlacemark);
	}*/

});

function position() {
	var pos = $(window).scrollTop();
	$('.page').css({'position': 'fixed', 'top': - pos+'px'});
}

// angularjs 
// https://docs.angularjs.org/guide
// http://angular.ru/guide/
/*
var lux = angular.module('lux',[]);
lux.controller('oformCtrl', ['$scope', '$http', '$sce', function($scope, $http, $sce){
	$scope.orderForm = {'subj': 'заказа'};
	// тут и далее было задумано, что текст ответов 
	// грузится из файла, а не хранится прямо тут.
	// но что-то не срослось
	/*$scope.answer = {'success': '', 'error': '', 'visible': false, 'text': ''};
	$http.get('js/answers.json').success(function(data){
		$scope.answer = data;
	});*//*
	$scope.sce = $sce;
	$scope.answer = {
		'success': '<p>В ближайшее время наш менеджер свяжется с вами</p>',
		'error': '<p class="error-color">Что-то пошло не так. Ваша заявка не отправлена.</p><p>Вы можете позвонить нам по телефону 8&nbsp;(3452)&nbsp;60&#8209;57&#8209;91</p>',
		'visible': false,
		'text': ''
	}
	$scope.submit = function(){
		if($scope.order_form.$valid){
			$http.post('send-mail.php',$scope.orderForm).success(function(res){
				if(res.res == 'ok'){
					$scope.orderForm = {};
					$scope.order_form.$setPristine();
					$scope.answer.text = $scope.answer.success;
					$scope.answer.visible = true;
				} else {
					$scope.answer.text = $scope.answer.error;
					$scope.answer.visible = true;
				}
			})
			.error(function(err){
				console.log(err);
				$scope.answer.text = $scope.answer.error;
				$scope.answer.visible = true;
			});
		}
	}
	$scope.closeAnswer = function(){
		$scope.answer.text = '';
		$scope.answer.visible = false;
	}
}]);
lux.controller('vformCtrl',  ['$scope', '$http', '$sce', function($scope, $http, $sce){
	$scope.orderFormVip = {'subj': 'VIP'};
	/*$scope.answer = {'success': '', 'error': '', 'visible': false, 'text': ''};
	$http.get('js/answers.json').success(function(data){
		$scope.answer = data;
	});*//*
	$scope.sce = $sce;
	$scope.answer = {
		'success': '<p>В ближайшее время наш менеджер свяжется с вами</p>',
		'error': '<p class="error-color">Что-то пошло не так. Ваша заявка не отправлена.</p><p>Вы можете позвонить нам по телефону 8&nbsp;(3452)&nbsp;60&#8209;57&#8209;91</p>',
		'visible': false,
		'text': ''
	}
	$scope.submit = function(){
		if($scope.order_form_vip.$valid){
			$http.post('send-mail.php',$scope.orderFormVip).success(function(res){
				if(res.res == 'ok'){
					$scope.orderFormVip = {};
					$scope.order_form_vip.$setPristine();
					$scope.answer.text = $scope.answer.success;
					$scope.answer.visible = true;
				} else {
					$scope.answer.text = $scope.answer.error;
					$scope.answer.visible = true;
				}
			})
			.error(function(err){
				console.log(err);
				$scope.answer.text = $scope.answer.error;
				$scope.answer.visible = true;
			});
		}
	}
	$scope.closeAnswer = function(){
		$scope.answer.text = '';
		$scope.answer.visible = false;
	}
}]);
lux.controller('dformCtrl',  ['$scope', '$http', '$sce', function($scope, $http, $sce){
	$scope.orderFormDiscovery = {'subj': 'Discovery'};
	/*$scope.answer = {'success': '', 'error': '', 'visible': false, 'text': ''};
	$http.get('js/answers.json').success(function(data){
		$scope.answer = data;
	});*//*
	$scope.sce = $sce;
	$scope.answer = {
		'success': '<p>В ближайшее время наш менеджер свяжется с вами</p>',
		'error': '<p class="error-color">Что-то пошло не так. Ваша заявка не отправлена.</p><p>Вы можете позвонить нам по телефону 8&nbsp;(3452)&nbsp;60&#8209;57&#8209;91</p>',
		'visible': false,
		'text': ''
	}
	$scope.submit = function(){
		if($scope.order_form_discovery.$valid){
			$http.post('send-mail.php',$scope.orderFormDiscovery).success(function(res){
				if(res.res == 'ok'){
					$scope.orderFormDiscovery = {};
					$scope.order_form_discovery.$setPristine();
					$scope.answer.text = $scope.answer.success;
					$scope.answer.visible = true;
				} else {
					$scope.answer.text = $scope.answer.error;
					$scope.answer.visible = true;
				}
			})
			.error(function(err){
				console.log(err);
				$scope.answer.text = $scope.answer.error;
				$scope.answer.visible = true;
			});
		}
	}
	$scope.closeAnswer = function(){
		$scope.answer.text = '';
		$scope.answer.visible = false;
	}
}]);
lux.controller('cformCtrl', ['$scope', '$http', '$sce', function($scope, $http, $sce){
	$scope.callbackForm = {'subj': 'Заказать звонок'};
	/*$scope.answer = {'success': '', 'error': '', 'visible': false, 'text': ''};
	$http.get('js/answers.json').success(function(data){
		$scope.answer = data;
	});*//*
	$scope.formVisible = true;
	$scope.sce = $sce;
	$scope.answer = {
		'success': '<p>В ближайшее время наш менеджер свяжется с вами</p>',
		'error': '<p class="error-color">Что-то пошло не так. Ваша заявка не отправлена.</p><p>Вы можете позвонить нам по телефону 8&nbsp;(3452)&nbsp;60&#8209;57&#8209;91</p>',
		'visible': false,
		'text': ''
	}
	$scope.submit = function(){
		if($scope.callback_form.$valid){
			$http.post('send-mail.php',$scope.callbackForm).success(function(res){
				if(res.res == 'ok'){
					$scope.callbackForm = {};
					$scope.callback_form.$setPristine();
					$scope.formVisible = false;
					$scope.answer.text = $scope.answer.success;
					$scope.answer.visible = true;
				} else {
					$scope.answer.text = $scope.answer.error;
					$scope.formVisible = false;
					$scope.answer.visible = true;
					console.log(res);
				}
			})
			.error(function(err){
				$scope.answer.text = $scope.answer.error;
				$scope.formVisible = false;
				$scope.answer.visible = true;
			});
		}
	}
	$scope.closeAnswer = function(){
		$scope.answer.text = '';
		$scope.answer.visible = false;
		$scope.formVisible = true;
	}
}]);*/