<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:title" content="Польская фабрика J. London. Женская одежда средних и больших размеров от производителя оптом." /> 
<meta property="og:url" content="http://jk-london.com/" />
<meta property="og:image" content="http://jk-london.com/img/title-ogg.jpg" />
  <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<link rel="stylesheet" href="css/jquery.fancybox.css">
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox-thumbs.css">
		<link rel="stylesheet" href="css/hover-min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/screen.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/banner-css.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter39490315 = new Ya.Metrika({
	                    id:39490315,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true,
	                    trackHash:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/39490315" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
	</head>

	<?php

		$utm = $_GET['utm_campaign'];

		if($utm == 'ubku_nouck' || $utm == 'ubku_rsya_text1' || $utm == 'ubku_rsya_text2') {
			$title = "Польская фабрика J. London. Юбки средних и больших размеров от производителя <span class=\"red-text\">оптом.</span>";
			$ubku_active = 'active';
		}
		else if($utm == 'platye_nouck' || $utm == 'platye _rsya_text1' || $utm == 'platye _rsya_text2') {
			$title = "Польская фабрика J. London. Платья средних и больших размеров от производителя <span class=\"red-text\">оптом.</span>";
			$platye_active = 'active';
		}
		else if($utm == 'bluzku_nouck' || $utm == 'bluzku _rsya_text1' || $utm == 'bluzku _rsya_text2') {
			$title = "Польская фабрика J. London. Блузки средних и больших размеров от производителя <span class=\"red-text\">оптом.</span>";
			$bluzku_active = 'active';
		}
		else if($utm == 'bruki_nouck' || $utm == 'bruki_rsya_text1' || $utm == 'bruki_rsya_text2') {
			$title = "Польская фабрика J. London. Брюки средних и больших размеров от производителя <span class=\"red-text\">оптом.</span>";
			$bruki_active = 'active';
		} else {
			$title = "Польская фабрика J. London. Женская одежда средних и больших размеров от производителя <span class=\"red-text\">оптом.</span>";
			$default_active = 'active';
		}

	?>

	<body class="text-center">
<!--<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br>
						<img src="img/logo_p.png" height="213" width="225" alt=""></div></div>-->

	<nav class="clearfix nav-menu">
	<div id="menu" class="container">
		<a href="#" id="pull">Меню</a>
		<ul class="clearfix ">
					<li><a href="#ex1">Главная</a></li>
					<li><a href="#ex2">Каталог</a></li>
					<li><a href="#ex3">Преимущества</a></li>
					<li><a href="#ex4">Качество</a></li>
					<li><a href="#ex5">О компании</a></li>
					<li><a href="#ex6">Наше производство</a></li>
					<li><a href="#ex7">Отзывы</a></li>
					<li><a href="#ex8">Контакты</a></li>
		</ul>
	</div>
	</nav>
		<div class="container-fluid s-1" id="ex1">
			<div class="container s-1-container">
				<div class="row lang-row">
					<ul class="text-center">
						<li class="active"><a href="">ru</a></li>
						<li><a href=""> </a></li>
						<li><a href="">eng</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<img src="img/logo_h.png" height="60" width="240" alt="">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 descript" >
						<p class="txt-top">Польская женская одежда Оптом от производителя с Бесплатной доставкой по СНГ</p>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-right">
						<div class="take-call">
						<span>+7 495 134 24 82</span>
						<span>+7 968 357 27 57</span>
							<span>+380 63 952 59 39</span>
							<button data-toggle="modal" data-target="#modal-1-1" class="btn"><div onClick="yaCounter39490315.reachGoal('zvonok'); ga('zvonok', 'zakaz'); return true;" style="width: 100%; height: 100%; line-height: 36px;">заказать звонок</div></button>
						</div>
					</div>
				</div>
				<div class="row">
					<p class="title-f big-t"><?php echo $title; ?></p>
				</div>
				<div class="row">
					<div class="col-md-6">
						 
					</div>
					<div class="col-md-6 text-right">
						<!-- <p class="f-cl"><span class="list-img-header"></span><strong>Подсортировка</strong> размеров.<br><span class="list-img-header"></span>Средние и большие <strong>размеры 40(+6)-62(+6).</strong><br> <span class="list-img-header"></span><strong>30 лет в индустрии</strong> 7000 оптовых клиентов</p> -->

						 <!-- <div class="form-timer"></div> -->
						 <form id="application" action="/application1.php" method=post enctype="multipart/form-data" class="contact-form text-center">

								<div class="form-head-txt">
									<p class="form-title">Получите доступ к оптовому каталогу<br><!-- <span>+ бесплатные образцы изделий</span> <br>-->до конца акции осталось 
										<div class="timer-in-form">
											<script src="http://megatimer.ru/s/9574d156887212cd330e2f4fab0026f8.js"></script>
										</div>
									</p>
								</div>
								<div class="rezult hide"></div>
								<input type="hidden" class="popup-shower" name="title" value="">

								<div class="input-group phone">
				                <input  name="DATA[PHONE_WORK]"  type="tel" id="applicationTelephone" maxlength="20" placeholder="Введите Ваш телефон" required=""></div>

				                <div class="input-group email">
				                <input  name="DATA[EMAIL_WORK]"  type="email" id="applicationEmail" maxlength="30" placeholder="Введите Ваш E-mail*" required />
				                <div class="input-group  opt-user">
				                	<div class="radio-label">
				                		<label for="opt-ipt" class="opt-lab"></label>
					                	<input type="radio" name="DATA[Opt]" value="Опт" id="opt-ipt" class="userInn" required="">
				                	</div>
				                		<span>Оптовый покупатель</span>
									
									<div class="radio-label">
										<label for="roz-ipt" class="roz-lab"></label>
						                <input type="radio" name="DATA[Opt]" value="Розница" id="roz-ipt" class="userInn" required="">	
									</div>
						                <span>Розничный покупатель</span>
				                </div>

				                <input class="applicationButton btn btn-sbmt" onClick="yaCounter39490315.reachGoal('katalog1'); ga('perexod1', 'forma1'); return true;" type="submit" value="перейти в каталог" name="submit"/>
							<p class="personal-data">* Ваши данные не будут переданы третьим лицам.</p>
						</form>
					</div>
				</div> 
<!--				<div class="s-1-info-list">-->
<!--					<ul>-->
<!--						<li>-->
<!--							<div class="im im-1"></div>-->
<!--							<p><span>Подсортировка</span><br>размеров</p>-->
<!--						</li>-->
<!--						<li>-->
<!--							<div class="im im-2"></div>-->
<!--							<p><span>Бесплатные изделия</span> <br>на пробу</p>-->
<!--						</li>-->
<!--						<li>-->
<!--							<div class="im im-3"></div>-->
<!--							<p><span>Гарантия</span> возврата денег</p>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</div>-->
			</div>
		</div>
		</div>

		<div class="container-fluid s-2 text-center hidden">
			<div class="container-fluid">
				<div class="video-container">
					<video autoplay="" loop="">
						<source src="videos/_0134_3_wmv.mp4" type="video/mp4">
							Your browser does not support the video tag. I suggest you upgrade your browser.
						<source src="videos/_0134_3_wmv.webm" type="video/webm">
							Your browser does not support the video tag. I suggest you upgrade your browser.
						<source src="videos/_0134_3_wmv.ogv" type="video/ogv">
							Your browser does not support the video tag. I suggest you upgrade your browser.
					</video>
				</div>
				<div class="filter"></div>
				<iframe width="560" height="315" loop="1" src="https://www.youtube.com/embed/PrZjO3ZmAns?rel=0&amp;showinfo=0;loop=1;autoplay=1" frameborder="0" allowfullscreen></iframe>
				<div class="video"></div>
			</div>
		</div>
		
		<div class="container-fluid s-3"  id="ex2">
			<div class="container text-center">
				<h1 class="h1">
					Каталог
					<div class="after-wr">
						<img src="img/title-after.png" height="30" width="60" alt="">
					</div>
				</h1>

				<div class="btn-group goods-catalog-btn-group">
                    <button class="btn <?php echo $bluzku_active; echo $default_active; ?> " id="blouses-btn" data-target="#blouses-tab">Костюмы / блузы</button>
                    <button class="btn <?php echo $bruki_active; ?> " id="pants-btn" data-target="#pants-tab">брюки</button>
					<button class="btn <?php echo $platye_active;  ?> " id="dresses-btn" data-target="#dresses-tab">платья</button>
					<button class="btn <?php echo $ubku_active; ?> " id="skirts-btn" data-target="#skirts-tab">юбки</button>
				</div>

				<div class="goods-type-wr <?php echo $platye_active; ?>" id="dresses-tab" data-button-tab="#dresses-btn">
				<!-- <h1>Оптовые цены  от <span class="red">25$</span></h1> -->
					<ul> 

						<li class="week-price" data-toggle="modal" data-target="#modal-679">
							<div class="im">
								<img src="img/goods/dresses/679.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-684">
							<div class="im">
								<img src="img/goods/dresses/684.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-698">
							<div class="im">
								<img src="img/goods/dresses/698.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-6539">
							<div class="im">
								<img src="img/goods/dresses/6539.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-6981">
							<div class="im">
								<img src="img/goods/dresses/6981.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-68515">
							<div class="im">
								<img src="img/goods/dresses/68515.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-690">
							<div class="im">
								<img src="img/goods/dresses/690.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-6945">
							<div class="im">
								<img src="img/goods/dresses/6945.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-6552">
							<div class="im">
								<img src="img/goods/dresses/6552.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-69515">
							<div class="im">
								<img src="img/goods/dresses/69515.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-69415">
							<div class="im">
								<img src="img/goods/dresses/69415.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						<li class="week-price" data-toggle="modal" data-target="#modal-695">
							<div class="im">
								<img src="img/goods/dresses/695.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Платье J. London</h2>
								<!-- <div class="row">
									<p class="old-price">17$</p>
									<p class="price">12$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
						</ul>	
				</div>

				<div class="goods-type-wr <?php echo $ubku_active; ?>" id="skirts-tab" data-button-tab="#skirts-btn">
				<!-- <h1>Оптовые цены  от <span class="red">19$</span> </h1> -->
					<ul> 
						<li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/2007.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/2049.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/20951.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/20961.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/20988.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/215213.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/20491.jpg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/215213.jpg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/20302.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/2065.jpg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/2049.jpg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/skirts/20062.jpeg" alt="">
							</div>
							<div class="info">
								<h2>Юбка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li> 
					</ul>	
				</div>

				<div class="goods-type-wr <?php echo $bruki_active; ?>" id="pants-tab" data-button-tab="#pants-btn">
				<!-- <h1>Оптовые цены от <span class="red">22$</span></h1> -->
					<ul>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/1007.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/8873.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>

                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/1010.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/1025.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/1054.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/1061.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/1088.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/10639.jpg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/10120.jpg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/10972.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>

                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/10699.jpg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/pants/10829.jpeg" height="360" width="265" alt="">
							</div>
							<div class="info">
								<h2>Брюки J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li> 
					</ul>	
				</div>

				<div class="goods-type-wr <?php echo $bluzku_active; echo $default_active; ?>" id="blouses-tab" data-button-tab="#blouses-btn">
				<!-- <h1>Оптовые цены  от <span class="red">22$</span> </h1> -->
					<ul>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/3007.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Пиджак J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/880.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/3008.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/3015.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/8805.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/3016.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/8811.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/8822.jpg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/8841.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/8873.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/10843.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>
                        <li data-toggle="modal" data-target="#modal-1">
							<div class="im">
								<img src="img/goods/blouses/30178.jpeg" height="360" width="265" alt="" alt="">
							</div>
							<div class="info">
								<h2>Блузка J. London</h2>
								<!-- <div class="row">
									<p class="price">27$</p>
								</div> -->
								<button class="btn tmpl-btn"><div onClick="yaCounter39490315.reachGoal('podrobnee'); ga('tovar', 'posmotret'); return true;" style="width: 100%; height: 100%; line-height: 47px">Посмотреть</div></button>
							</div>
						</li>      
					</ul>	
				</div>



				

				<button class="btn more" data-toggle="modal" data-target="#modal-1"><div onClick="yaCounter39490315.reachGoal('vse'); ga('smotret', 'tovary'); return true;" style="width: 100%; height: 100%; line-height: 39px">смотреть все товары</div></button>

			</div>
			<div class="bottom-line"></div>
		</div>

<!--		<div class="container-fluid s-4" id="ex3">-->
<!--			<div class="container ">-->
<!--				<h1 class="h1">-->
<!--					Почему женская одежда от J. London-->
<!--					<div class="after-wr">-->
<!--						<img src="img/title-after.png" height="30" width="60" alt="">-->
<!--					</div>-->
<!--				</h1>-->
<!---->
<!--				<ul>-->
<!--					<li>-->
<!--						<div class="im im-1"></div>-->
<!--						<h2>Без риска</h2>-->
<!--						<p>Высылаем образцы готовых изделий бесплатно, чтобы Вы убедились в качестве изделий лично</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-2"></div>-->
<!--						<h2>подсортировка размеров</h2>-->
<!--						<p>Заказывайте только необходимые Вам размеры и количество</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-3"></div>-->
<!--						<h2>евростандарт iso</h2>-->
<!--						<p>Первоклассное качество наших изделий соответствует европейскому стандарту ISO</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-4"></div>-->
<!--						<h2>доставка от 2-х часов</h2>-->
<!--						<p>Наличие склада в Польше, России и Украине гарантирует быструю доставку Вашего заказа</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-5"></div>-->
<!--						<h2>гарантия возврата и обмена</h2>-->
<!--						<p>Если по какой-либо причине Вас не устраивает продукция, мы делаем возврат или обмен</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-6"></div>-->
<!--						<h2>эксклюзивное дилерство</h2>-->
<!--						<p>Получите возможность эксклюзивного дилерства J. London в Вашем регионе. Можете не бояться появления наших моделей у ваших конкурентов</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-7"></div>-->
<!--						<h2>востребованные рынком модели</h2>-->
<!--						<p>7000 оптовых клиентов с разных регионов анализируют новые модели еще до выхода на рынок. Это гарантирует высокие показатели продаж</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-8"></div>-->
<!--						<h2>30 лет в индустрии, 7000 оптовых клиентов</h2>-->
<!--						<p>С 1985 года нам доверяют оптовые клиенты Европы и СНГ</p>-->
<!--					</li>-->
<!--					<li>-->
<!--						<div class="im im-9"></div>-->
<!--						<h2>бесплатная рекламная продукция</h2>-->
<!--						<p>Мы даем четкие, рабочие рекламные инструменты, которые уже увеличили продажи у 7000 наших клиентов</p>-->
<!--					</li>-->
<!--				</ul>-->
<!--<div class="form-1-1"></div>-->
<!---->
<!--			</div>-->
<!--			<div class="bottom-line"></div>-->
<!--		</div>-->

		<div class="container s-5" id="ex4">
			<h1 class="h1">
					Что гарантирует первоклассное<br> качество наших изделий?
					<div class="after-wr">
						<img src="img/title-after.png" height="30" width="60" alt="">
					</div>
				</h1>

			<ul>
				<div class="row mb pad">
					<li class="left">
						<im class="im im-1"></im>
						<p>Сертифицированные специалисты индустрии с опытом от 15 лет.</p>
					</li>
					<li class="right">
						<im class="im im-4"></im>
						<p>Индивидуальная сборка изделия (полный цикл сборки изделия одним портным)</p>
					</li>
				</div>

				<div class="row mb">
					<li class="left">
						<im class="im im-2"></im>
						<p>Профессиональное немецкое и японское оборудование Durkopp Adler, Juki, Siruba</p>
					</li>
					<li class="right">
						<im class="im im-5"></im>
						<p>Эксклюзивные дизайны(Лучшие фабрики Европы разрабатывают уникальные рисунки и пестротканые полотна для бренда J. London)</p>
					</li>
				</div>

				<div class="row pad">
					<li class="left">
						<im class="im im-3"></im>
						<p>5 уровней европейского контроля качества</p>
					</li>
					<li class="right">
						<im class="im im-6"></im>
						<p>Европейские ткани и фурнитура (Италия "Bizelli", Германия "Karamann", Польша "Damaz")</p>
					</li>
				</div>
			</ul>
		</div>

		<div class="container-fluid s-6 text-center">
			<div class="info-block">
				<div class="before"></div>
				<p>« Уже 30 лет наша команда умело подбирает модель для любого типа фигуры и случая. В нашей повседневной и офисной одежде, клиентки чувствуют себя истинными женщинами. Стройными, эффектными и уверенными в себе.»</p>
			</div>
			<div class="container-fluid video"  data-toggle="modal" data-target="#modal-v-1"></div>

			<div id="slider-1">
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/1.jpg" title="">
					<img src="img/slides/Qality/1.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/10.jpg" title="">
					<img src="img/slides/Qality/10.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/11.jpg" title="">
					<img src="img/slides/Qality/11.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/12.jpg" title="">
					<img src="img/slides/Qality/12.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/13.jpg" title="">
					<img src="img/slides/Qality/13.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/14.jpg" title="">
					<img src="img/slides/Qality/14.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/15.jpg" title="">
					<img src="img/slides/Qality/15.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/16.jpg" title="">
					<img src="img/slides/Qality/16.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/17.jpg" title="">
					<img src="img/slides/Qality/17.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/2.jpg" title="">
					<img src="img/slides/Qality/2.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/3.jpg" title="">
					<img src="img/slides/Qality/3.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/4.jpg" title="">
					<img src="img/slides/Qality/4.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/5.jpg" title="">
					<img src="img/slides/Qality/5.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/6.jpg" title="">
					<img src="img/slides/Qality/6.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/7.jpg" title="">
					<img src="img/slides/Qality/7.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/8.jpg" title="">
					<img src="img/slides/Qality/8.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s1" href="img/slides/Qality/9.jpg" title="">
					<img src="img/slides/Qality/9.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
			</div>

			<button class="btn tmpl-btn" data-toggle="modal" onClick="yaCounter39490315.reachGoal('polniy'); ga('vsya', 'produkciya'); return true;" data-target="#modal-1-2">перейти в полный каталог</button>
		</div>

		<div class="container-fluid s-7" id="ex5">
			<h1 class="h1">
				Познакомьтесь с нашей<br> компанией
				<div class="after-wr">
					<img src="img/title-after.png" height="30" width="60" alt="">
				</div>
			</h1>
			<ul>
				<li>
					<div class="im im-1"></div>
					<p>Работаем с 1985 года</p>
				</li>
				<li>
					<div class="im im-2"></div>
					<p>Более 7000 оптовых<br> клиентов</p>
				</li>
				<li>
					<div class="im im-3"></div>
					<p>10 фестивалей моды в год</p>
				</li>
				<li>
					<div class="im im-4"></div>
					<p>Склад в Польше, России и Украине</p>
				</li>
				<li>
					<div class="im im-5"></div>
					<p>96% покупателей наших клиентов делают повторные покупки изделий J. London</p>
				</li>
				<li>
					<div class="im im-6"></div>
					<p>Уже в 9 странах мира</p>
				</li>
				<li>
					<div class="im im-7"></div>
					<p>С Вами работает персональный менеджер<br> 24/7</p>
				</li>
				<li>
					<div class="im im-8"></div>
					<p>Наличие средних и больших размеров 40(+6)-62(+6)</p>
				</li>
			</ul>
		</div>


		<div class="container-fluid s-8">
			<div class="container">
				<h1 class="h1">
					Наши сертификаты и дипломы
					<div class="after-wr">
						<img src="img/title-after.png" height="30" width="60" alt="">
					</div>
				</h1>

				<div class="slider" id="sertification">
					<a  class="fancybox-thumb"  data-fancybox-group="thumb" href="img/slides/slide-2-1.png" title="">
						<img src="img/slides/slide-2-1.png" class="hvr-grow-shadow" alt="">
					</a>
					<a class="fancybox-thumb"  data-fancybox-group="thumb" href="img/slides/slide-2-2.png" title="">
						<img src="img/slides/slide-2-2.png" class="hvr-grow-shadow" alt="">
					</a>
					<a class="fancybox-thumb"  data-fancybox-group="thumb" href="img/slides/slide-2-3.png" title="">
						<img src="img/slides/slide-2-3.png" class="hvr-grow-shadow"  alt="">
					</a>
					<!--<a class="fancybox-thumb"  data-fancybox-group="thumb" href="img/slides/slide-2-4.png" title="">
						<img src="img/slides/slide-2-4.png" class="hvr-grow-shadow" alt="">-->
					</a>
					<a class="fancybox-thumb"  data-fancybox-group="thumb" href="img/slides/slide-2-2.png" title="">
						<img src="img/slides/slide-2-2.png" class="hvr-grow-shadow" alt="">
					</a>
					<a  class="fancybox-thumb"  data-fancybox-group="thumb" href="img/slides/slide-2-1.png" title="">
						<img src="img/slides/slide-2-1.png" class="hvr-grow-shadow" alt="">
					</a>
				</div>

				<button class="btn tmpl-btn" onClick="yaCounter39490315.reachGoal('polniy1'); ga('vsya1', 'produkciya1'); return true;" data-toggle="modal" data-target="#modal-1-3">перейти в полный каталог</button>
			</div>
			<!-- </div> -->
			<div class="bottom-line"></div>
		</div>

		<div class="container-fluid s-9" id="ex6">
			<h1 class="h1">
					Виртуальная прогулка по <br>нашему производству
					<div class="after-wr">
						<img src="img/title-after.png" height="30" width="60" alt="">
					</div>
				</h1>
			<div class="container-fluid video"  data-toggle="modal" data-target="#modal-v-2"></div>

			<div id="slider-2">
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3699.jpg" title="">
					<img src="img/slides/Production/KOO_3699.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3700.jpg" title="">
					<img src="img/slides/Production/KOO_3700.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3701.jpg" title="">
					<img src="img/slides/Production/KOO_3701.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3694.jpg" title="">
					<img src="img/slides/Production/KOO_3694.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3695.jpg" title="">
					<img src="img/slides/Production/KOO_3695.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3697.jpg" title="">
					<img src="img/slides/Production/KOO_3697.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3698.jpg" title="">
					<img src="img/slides/Production/KOO_3698.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3702.jpg" title="">
					<img src="img/slides/Production/KOO_3702.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3703.jpg" title="">
					<img src="img/slides/Production/KOO_3703.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3704.jpg" title="">
					<img src="img/slides/Production/KOO_3704.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3705.jpg" title="">
					<img src="img/slides/Production/KOO_3705.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3706.jpg" title="">
					<img src="img/slides/Production/KOO_3706.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3707.jpg" title="">
					<img src="img/slides/Production/KOO_3707.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3713.jpg" title="">
					<img src="img/slides/Production/KOO_3713.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3717.jpg" title="">
					<img src="img/slides/Production/KOO_3717.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3719.jpg" title="">
					<img src="img/slides/Production/KOO_3719.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3721.jpg" title="">
					<img src="img/slides/Production/KOO_3721.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3729.jpg" title="">
					<img src="img/slides/Production/KOO_3729.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
				<a class="fancybox-thumb"  data-fancybox-group="s3" href="img/slides/Production/KOO_3795.jpg" title="">
					<img src="img/slides/Production/KOO_3795.jpg" height="305" width="305" class="hvr-grow-shadow" alt="">
				</a>
			</div>

				<div class="info-block">
					<div class="before">
						<img src="img/icon-8.png" height="30" width="50" alt="">
					</div>
					<p class="p1">
						<span>J. London</span> -
					С 1985 года наша команда профессионалов разрабатывает модели, которые идеально подходят под любой тип фигуры. Доказывая тем самым миру, что женщина, параметры которой не соответствуют общепринятым голливудским стандартам, так же может быть красивой и стильной.
					</p>
					<p class="p2">Идеальная посадка достигается благодаря проверенным и точным лекалам, а использование натуральных тканей и европейский контроль качества гарантируют высокие продажи в магазинах наших Партнеров!!!</p>
					<p class="p3">Мы любим, ценим Вас и стараемся сделать все, чтобы однажды сделав заказ - Вы остались с нами на долгие годы!</p>

					<button class="btn tmpl-btn" data-toggle="modal" onClick="yaCounter39490315.reachGoal('polniy2'); ga('vsya2', 'produkciya2'); return true;" data-target="#modal-1-4">перейти в полный каталог</button>
				</div>

			<div class="bottom-line"></div>
		</div>

		<div class="container s-11" id="ex7">
			<h1 class="h1">
					Отзывы наших клиентов
					<div class="after-wr">
						<img src="img/title-after.png" height="30" width="60" alt="">
					</div>
				</h1>

			<div class="reviews">
				<div class="row l">
					<div class="col-md-2 cl-1">
						<img src="img/kora3.png" height="130" width="130" alt="">
						<h2>Салихова Айгуль</h2>
						<h3>Россия г.Нефтекамск </h3>
					</div>
					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2></h2>
							<p>
<div class="youtube" data-embed="GFYD5px1C_o">  
    <div class="play-button"></div> 
   <!--  <iframe width="" height="" src="https://www.youtube.com/embed/GFYD5px1C_o" frameborder="0" allowfullscreen></iframe> --> </p></div> 
						</div>
					</div>
				</div>
				<div class="row r">
					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2></h2><p>
<div class="youtube" data-embed="soEo4KElO9c">  
    <div class="play-button"></div> </div> 
<!--     <iframe width="560" height="315" src="https://www.youtube.com/embed/soEo4KElO9c" frameborder="0" allowfullscreen></iframe> -->
							 </p> 
						</div>
					</div>
					<div class="col-md-2 cl-1">
						<img src="img/kora1.png" height="130" width="130" alt="">
						<h2>Куркина Ольга</h2>
						<h3>Казахстан</h3>
					</div>
				</div>
				<div class="row l">
					<div class="col-md-2 cl-1">
						<img src="img/kora.png" height="130" width="130" alt="">
						<h2>Кора Елена</h2>
						<h3>Россия г. Благовещенск</h3>
					</div>
					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2></h2>
							<p>
<div class="youtube" data-embed="qYvUiUxjPNs">  
    <div class="play-button"></div> </div> 
   <!--  <iframe width="" height="" src="https://www.youtube.com/embed/qYvUiUxjPNs" frameborder="0" allowfullscreen></iframe> --> </p>
						</div>
					</div>
				</div>
				<div class="row r">

					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2></h2>
							<p>
<div class="youtube" data-embed="yJsJH2v7ABw">  
    <div class="play-button"></div> </div> 
<!--     <iframe width="" height="" src="https://www.youtube.com/embed/yJsJH2v7ABw" frameborder="0" allowfullscreen></iframe> -->
  </p> 
						</div>
					</div>
					<div class="col-md-2 cl-1">
						<img src="img/sobol.png" height="130" width="130" alt="">
						<h2>Соболь Дмитрий </h2>
						<h3>Россия г.Иваново</h3>
					</div>
				</div>
				<div class="row l">
					<div class="col-md-2 cl-1">
						<img src="img/suleko.png" height="130" width="130" alt="">
						<h2>Чхетиани Сулико </h2>
						<h3>Россия г.Сочи</h3>
					</div>
					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2></h2>
							<p>
<div class="youtube" data-embed="A7ifD0DE0tQ">  
    <div class="play-button"></div> </div> 
<!--     <iframe width="" height="" src="https://www.youtube.com/embed/A7ifD0DE0tQ" frameborder="0" allowfullscreen></iframe> -->
  </p>
						</div>
					</div>
				</div>
				<div class="row r">

					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2></h2>
							<p>
<div class="youtube" data-embed="7bwWokwXCto">  
    <div class="play-button"></div> </div> 
<!--     <iframe width="" height="" src="https://www.youtube.com/embed/7bwWokwXCto" frameborder="0" allowfullscreen></iframe> -->
  </p> 
						</div>
					</div>
					<div class="col-md-2 cl-1">
						<img src="img/nurzhan.png" height="130" width="130" alt="">
						<h2>Чураева Нуржан</h2>
						<h3>Дагестан г.Махачкала</h3>
					</div>
				</div>
				<div class="row l">
					<div class="col-md-2 cl-1">
						<img src="img/rw-11.png" height="130" width="130" alt="">
						<h2>Адеева Альфия</h2>
						<h3>Казахстан г.Астана</h3>
					</div>
					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2>...Качество действительно отменное и нравится то, насколько грамотно эти изделия садятся...</h2>
							<p>
<div class="youtube" data-embed="abWtnsAFNDk">  
    <div class="play-button"></div> </div> 
   <!--  <iframe width="" height="" src="https://www.youtube.com/embed/abWtnsAFNDk" frameborder="0" allowfullscreen></iframe> --></p>
						</div>
					</div>
				</div>
				<div class="row r">

					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2>По результату сотрудничества : был 1 магазин - стало 3!</h2>
							<p>Добрый день, хочу сказать несколько слов о моих поставщиках компании J. London : мы сотрудничаем уже 8 лет и для меня главный показатель , помимо бизнеса , это человеческие </p>
							<div class=" collapse" id="rev-txt-1">
								<p> взаимоотношения с учредителями и командой , они всегда лояльны и всегда рады помочь. По результату сотрудничества : был 1 магазин - стало 3 , и в большей степени это благодаря ребятам. Над разработкой моделей они всегда со мной советуються и это в итоге влияет на продажи в моих магазинах . А по поводу качеста и посадки на фигуру и речи быть не может , - идеально сидит даже на самых проблемных фигурах. Так что девочки , рекомендую !</p>
							</div>
							<button class="more" data-toggle="collapse" data-target="#rev-txt-1">Читать полностью</button>
						</div>
					</div>
					<div class="col-md-2 cl-1">
						<img src="img/rw-2.png" height="130" width="130" alt="">
						<h2>Волкова Надежда</h2>
						<h3>г. Санкт-Петербург</h3>
					</div>
				</div>
				<div class="row l">
					<div class="col-md-2 cl-1">
						<img src="img/rw-5.png" height="130" width="130" alt="">
						<h2>Наврузова Лилия</h2>
						<h3>Россия г.Москва </h3>
					</div>
					<div class="col-md-9 cl-2">
						<div class="review-txt-block">
							<div class="before"></div>
							<h2>...Решающим фактором для нас было безупречное качество...</h2>
							<p>
<div class="youtube" data-embed="oS2zPds_4Ko">  
    <div class="play-button"></div> </div> 
    <!-- <iframe width="" height="" src="https://www.youtube.com/embed/oS2zPds_4Ko" frameborder="0" allowfullscreen></iframe> --></p>
						</div>
					</div>
				</div>
				<div class="collapse" id="more-review">
					<div class="row r">

						<div class="col-md-9 cl-2">
							<div class="review-txt-block">
								<div class="before"></div>
								<h2>Главное - этот товар всегда продаётся и пользуется спросом!</h2>
								<p>Современные модели и великолепный крой являются отличительными особенностями этого товара. 
								Главное - этот товар всегда продаётся и пользуется спросом.</p>
										<div class=" collapse" id="rev-txt-2">
											<p>Это может быть самым лучшим комментарием о данной продукции.</p> 
											<p>А  если говорить о руководстве компании "J. London", то с ними всегда приятно сотрудничать. Они открыты и доброжелательны, всегда идут навстречу.</p>
											<p>P. S. Работаем с компанией более 10 лет.</p>
								</div>
								<button class="more" data-toggle="collapse" data-target="#rev-txt-2">Читать полностью</button>
							</div>
						</div>
						<div class="col-md-2 cl-1">
							<img src="img/rw-1.png" height="130" width="130" alt="">
							<h2>коллектив салона "Эвита" и "Монро"</h2>
							<h3>Украина г.Херсон </h3>
						</div>
					</div>
					<div class="row l">
						<div class="col-md-2 cl-1">
							<img src="img/rw-12.png" height="130" width="130" alt="">
							<h2>Кулий Тарас Юрьевич</h2>
							<h3>Украина г.Ивано-Франковск</h3>
						</div>
						<div class="col-md-9 cl-2">
							<div class="review-txt-block">
								<div class="before"></div>
								<h2>Можете спокійно брати: товар - хороший, компанія - добра. Я довіряю.</h2>
								<p>
<div class="youtube" data-embed="AQQZoij577c">  
    <div class="play-button"></div> </div> 
   <!--  <iframe width="" height="" src="https://www.youtube.com/embed/AQQZoij577c" frameborder="0" allowfullscreen></iframe> --></p>
							</div>
						</div>
					</div>
					<div class="row r">

						<div class="col-md-9 cl-2">
							<div class="review-txt-block">
								<div class="before"></div>
								<h2>Обожаю работать с изделиями "J. London"!</h2>
								<p>Обожаю работать с изделиями "J. London". Всегда отменное качество ! Брюками и пиджаками торгую в своем магазине давно.
											Покупатели идут ко мне именно за брюками "J. London ".</p> 

								<div class=" collapse" id="rev-txt-3">
									<p>Прекрасно садятся на любую фигуру.</p>
									<p>Пиджаки,платья,юбки,капри,брюки - все имеет отличные лекала, интересные фасоны,исключительно подобранные ткани-компаньоны.</p>
									<p>Успехов вам "J. London for women", с уважением Н. Леонтьева.</p>
								</div>
								<button class="more" data-toggle="collapse" data-target="#rev-txt-3">Читать полностью</button>
							</div>
						</div>
						<div class="col-md-2 cl-1">
							<img src="img/rw-6.png" height="130" width="130" alt="">
							<h2>Леонтьева Нина Александровна</h2>
							<h3>Украина г.Николаев</h3>
						</div>
					</div>
					<div class="row l">
						<div class="col-md-2 cl-1">
							<img src="img/rw-14.png" height="130" width="130" alt="">
							<h2>Скоморохова Инна</h2>
							<h3>г. Одесса</h3>
						</div>
						<div class="col-md-9 cl-2">
							<div class="review-txt-block">
								<div class="before"></div>
								<h2>Очень довольна качеством пошива,посадкой изделий и адекватными ценами!</h2>
								<p>
<div class="youtube" data-embed="V_FZ9WtlEec">  
    <div class="play-button"></div> </div> 
<!--     <iframe width="" height="" src="https://www.youtube.com/embed/V_FZ9WtlEec" frameborder="0" allowfullscreen></iframe> --></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<button class="more-review" class="more" data-toggle="collapse" data-target="#more-review">смотреть еще 55 отзывов</button>
		</div>

		<div class="container s-12">
			<h1 class="h1">
					Работаем в 9 странах мира
					<div class="after-wr">
						<img src="img/title-after.png" height="30" width="60" alt="">
					</div>
				</h1>
						<ul class="country-list">
							<li class="i1">Польша</li>
							<li class="i2">Германия</li>
							<li class="i3">Австрия</li>
							<li class="i4">Россия</li>
							<li class="i1">Украина</li>
							<li class="i2">Беларусь</li>
							<li class="i3">Казахстан</li>
							<li class="i4">Канада</li>
							<li class="i4">США</li>
						</ul>
			<img class="map" src="img/bg/map.png" height="494" width="106411" alt="">
		</div>

		<div class="container-fluid s-10">
			<div class="container text-center">

				<p class="ttl"><span>Если у Вас остались вопросы</span> введите их в поле ниже,<br> наш менеджер свяжется с Вами в течении 15 минут</p>
    
			 <div class="form-1-2"></div>
			</div>
		</div>

		<footer id="ex8">
			<div class="container">
				<div class="row r-1">
					<div class="col-md-4 col-sm-4 col-xs-12 office">
						<ul class="office-list">
						<h2>Представительства:</h2>
						<li>Россия, г.Москва, МКАД 14км, ТК «Садовод», корпус А, 2 этаж - павильон 2Д-13</li>
						<li>Украина. г.Николаев</li><br>
						<li>Польша. Lodz al.Pilsudskiego 135/1</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<img src="img/logo_f.png" height="135" width="145" alt="">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 contact">
						<p>+7 495 134 24 82</p>
						<p>+7 968 357 27 57</p>
						<p>+380 63 952 59 39</p>
						<p>j.London.pl@gmail.com</p>
						<p>Skype: j.londonfw</p>
						<button data-toggle="modal" onClick="yaCounter39490315.reachGoal('zvonok_futer'); ga('pozvonit', 'futer'); return true;" data-target="#modal-1-5" >Заказать звонок</button>
						<ul class="text-right lang-row">
							<li class="active"><a href="">ru</a></li>
							<li><a href="">pl</a></li>
							<li><a href="">eng</a></li>
						</ul>
					</div>
				</div>
				<div class="row r-2">
					<div class="col-md-4 col-sm-4 copy">
					<div class="col-md-9 col-sm-9 col-xs-12 social">
						<ul class="social-list">
							<li class="i1"><a href="" target="_blank"></a></li>
							<li class="i2"><a href="" target="_blank"></a></li>
							<li class="i3"><a href="" target="_blank"></a></li>
							<li class="i4"><a href="" target="_blank"></a></li>
						</ul>
					</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center"><span style="font-family: 'SF-L', sans-serif;color: #a4a8a9;top: 17px;position: relative;">© 2017 “J. London - Производство женской одежды премиум класса”.</span></div>
					<div class="col-md-2 col-sm-3 col-md-offset-2 made-in">
						<a href="http://scaling.com.ua" target="_blank">
							<span>Сделано в</span> scaling
						</a> 
					</div>
				</div>
			</div>
		</footer>
		
		<div class="modal fade" id="modal-1">
	      <div class="modal-dialog modal-md">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2>Получить доступ к полному каталогу</h2>
	          </div>
	          <div class="modal-body text-center">
	            
			 <div class="form-catalog"></div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade" id="modal-2">
	      <div class="modal-dialog modal-md">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2>Получить доступ к полному каталогу</h2>
	          </div>
	          <div class="modal-body text-center">
	            
			 <div class="form-catalog-2"></div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade" id="modal-1-1">
	      <div class="modal-dialog modal-md">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2>Заказать звонок</h2>
	          </div>
	          <div class="modal-body text-center">
	            <div class="form-recall"></div>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade" id="modal-1-2">
	      <div class="modal-dialog modal-md">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2>Заказать звонок</h2>
	          </div>
	          <div class="modal-body text-center">
	            <div class="form-1-3"></div>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade" id="modal-1-3">
	      <div class="modal-dialog modal-md">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2>Заказать звонок</h2>
	          </div>
	          <div class="modal-body text-center">
	            <div class="form-1-4"></div>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade" id="modal-1-4">
	      <div class="modal-dialog modal-md">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2>Заказать звонок</h2>
	          </div>
	          <div class="modal-body text-center">
	            <div class="form-1-5"></div>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade" id="modal-1-5">
	      <div class="modal-dialog modal-md">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2>Заказать звонок</h2>
	          </div>
	          <div class="modal-body text-center">
	            <div class="form-recall"></div>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade modal-video" id="modal-v-1">
	      <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	            
<div class="youtube" data-embed="8ZdoQj-648M">  
    <div class="play-button"></div> </div> 
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/8ZdoQj-648M" frameborder="0" allowfullscreen></iframe> -->

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="modal fade modal-video" id="modal-v-2">
	      <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-2" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	            
<div class="youtube" data-embed="yKmUQup0tLg">  
    <div class="play-button"></div> </div> 
<!-- 				<iframe width="560" height="315" src="https://www.youtube.com/embed/yKmUQup0tLg" frameborder="0" allowfullscreen></iframe> -->

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-2" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>


	    <!-- <div class="banner-wr">
			<div class="banner">
				<div class="close-btn"></div>	
				<div class="im1"></div>
				<div class="im2"></div>
				<div class="im3"></div>
				<p><span class="big-text">Мы рады пригласить Вас</span> на выставку 
					CPM в Москве <span>с 20 по 23 февраля</span> 2017 года на 
					презентацию новой коллекции<br>
					<span>Spring-Summer 2017.</span><br>
					<span class="red">Павильон 7.5. стэнд С 40</span>
				</p>
			</div>
		</div> -->
		
<!-- Платье -->

<!-- Платье 679-->
	    <div class="modal fade modal-prod-cart" id="modal-679">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/679.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/679.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 679</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 684-->
	    <div class="modal fade modal-prod-cart" id="modal-684">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/684.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/684.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 684</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 698-->
	    <div class="modal fade modal-prod-cart" id="modal-698">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/698.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/698.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 698</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 6539-->
	    <div class="modal fade modal-prod-cart" id="modal-6539">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/6539.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/6539.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 6539</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 6981-->
	    <div class="modal fade modal-prod-cart" id="modal-6981">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/6981.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/6981.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 6981)</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 68515-->
	    <div class="modal fade modal-prod-cart" id="modal-68515">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/68515.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/68515.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 68515</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 69515-->
	    <div class="modal fade modal-prod-cart" id="modal-69515">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/69515.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/69515.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 69515</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 69415-->
	    <div class="modal fade modal-prod-cart" id="modal-69415">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/69415.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/69415.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 69415</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
           <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- Платье 695-->
	    <div class="modal fade modal-prod-cart" id="modal-695">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/695.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/695.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 695</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
             <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>


<!-- Платье 690-->
	    <div class="modal fade modal-prod-cart" id="modal-690">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/dresses/690.jpeg" width="288px"></div> 
  </div>
  <div class="slider-nav"> 
    <div class=""><img src="img/goods/dresses/690.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 690</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
             <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>


<!-- Платье 6945-->
	    <div class="modal fade modal-prod-cart" id="modal-6945">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
		<div class=""><img src="img/goods/dresses/6945.jpeg" width="288px"></div>
		<div class=""><img src="img/goods/dresses/6949.jpeg" width="288px"></div>
  </div>
  <div class="slider-nav"> 
		<div class=""><img src="img/goods/dresses/6945.jpeg" width="75"></div>
		<div class=""><img src="img/goods/dresses/6949.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 6945</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
             <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>


<!-- Платье 6552-->
	    <div class="modal fade modal-prod-cart" id="modal-6552">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 

<div class="slider-container">
  <div class="slider-for">
		<div class=""><img src="img/goods/dresses/6552.jpeg" width="288px"></div>
		<div class=""><img src="img/goods/dresses/6555.jpeg" width="288px"></div>
  </div>
  <div class="slider-nav"> 
		<div class=""><img src="img/goods/dresses/6552.jpeg" width="75"></div>
		<div class=""><img src="img/goods/dresses/6555.jpeg" width="75"></div> 
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Платье </h2>
	             	<h3 class="sku">Артикул: Арт 6552</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 27$ до 50</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
             <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>


<!-- Брюки --> 

<!-- брюки 1007-->

	    <div class="modal fade modal-prod-cart" id="modal-1007">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/1007.jpeg" width="288px"></div>       
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/1007.jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 1007</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 1010-->

	    <div class="modal fade modal-prod-cart" id="modal-1010">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/1010.jpeg" width="288px"></div>       
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/1010.jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 1010</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 1025-->

	    <div class="modal fade modal-prod-cart" id="modal-1025">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
		<div class=""><img src="img/goods/pants/1025.jpeg" width="288px"></div>      
  </div>
  <div class="slider-nav">
		<div class=""><img src="img/goods/pants/1025.jpeg" width="75"></div> 
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 1025</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 1054-->

	    <div class="modal fade modal-prod-cart" id="modal-1054">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/1054.jpeg" width="288px"></div>       
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/1054.jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 1054</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 1061-->

	    <div class="modal fade modal-prod-cart" id="modal-1061">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/1061.jpeg" width="288px"></div>       
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/1061.jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 1061</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 1088-->

	    <div class="modal fade modal-prod-cart" id="modal-1088">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/1088.jpeg" width="288px"></div>       
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/1088.jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 1088</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 8873-->

	    <div class="modal fade modal-prod-cart" id="modal-8873">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/8873.jpeg" width="288px"></div>     
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/8873.jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 8873</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
  

<!-- брюки 10120--> 
	    <div class="modal fade modal-prod-cart" id="modal-10120">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/10120.jpg" width="288px"></div>       
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/10120.jpg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 10120</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  

<!-- брюки 10639-->

	    <div class="modal fade modal-prod-cart" id="modal-10639">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/10639.jpg" width="288px"></div>       
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/10639.jpg" width="75"></div>
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 10639</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  

<!-- брюки 10972-->

	    <div class="modal fade modal-prod-cart" id="modal-10972">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
		<div class=""><img src="img/goods/pants/10972.jpeg" width="288px"></div>
		<div class=""><img src="img/goods/pants/10972..jpeg" width="288px"></div>       
  </div>
  <div class="slider-nav">
		<div class=""><img src="img/goods/pants/10972.jpeg" width="75"></div>
		<div class=""><img src="img/goods/pants/10972..jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 10972</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 10639-->

	    <div class="modal fade modal-prod-cart" id="modal-10699">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/pants/10699.jpg" width="288px"></div>
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/pants/10699.jpg" width="75"></div>
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 10639</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- брюки 10829-->

	    <div class="modal fade modal-prod-cart" id="modal-10829">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	             
               
	              <div class="slider-container">
  <div class="slider-for">
		<div class=""><img src="img/goods/pants/10829.jpeg" width="288px"></div>
		<div class=""><img src="img/goods/pants/10829..jpeg" width="288px"></div>        
  </div>
  <div class="slider-nav">
		<div class=""><img src="img/goods/pants/10829.jpeg" width="75"></div>
		<div class=""><img src="img/goods/pants/10829..jpeg" width="75"></div>     
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Брюки </h2>
	             	<h3 class="sku">Артикул: Арт 10829</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  
<!-- Блузы-->
<!-- блуза 880-->

	    <div class="modal fade modal-prod-cart" id="modal-880">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/880.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/880.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 880</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- блуза 3007-->

	    <div class="modal fade modal-prod-cart" id="modal-3007">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/3007.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/3007.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Пиджак</h2>
	             	<h3 class="sku">Артикул: Арт 3007</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>	
<!-- блуза 3008-->

	    <div class="modal fade modal-prod-cart" id="modal-3008">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/3008.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/3008.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 3008</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- блуза 3015-->

	    <div class="modal fade modal-prod-cart" id="modal-3015">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/3015.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/3015.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 3015</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>					
<!-- блуза 3016-->

	    <div class="modal fade modal-prod-cart" id="modal-3016">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/3016.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/3016.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 3016</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- блуза 8805-->

	    <div class="modal fade modal-prod-cart" id="modal-8805">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/8805.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/8805.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 8805</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- блуза 8811-->

	    <div class="modal fade modal-prod-cart" id="modal-8811">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/8811.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/8811.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 8811</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
             <div class="form-popup"></div>
          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

<!-- блуза 8822-->

	    <div class="modal fade modal-prod-cart" id="modal-8822">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/8822.jpg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/8822.jpg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 8822</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
             <div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

<!-- блуза 8841-->

	    <div class="modal fade modal-prod-cart" id="modal-8841">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/8841.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/8841.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 8841</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>

<!-- блуза 8873-->

	    <div class="modal fade modal-prod-cart" id="modal-8873-1">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/8873.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/8873.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 8873</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
 
<!-- блуза 10843-->

	    <div class="modal fade modal-prod-cart" id="modal-10843">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/10843.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/10843.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 10843</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- блуза 30178-->

	    <div class="modal fade modal-prod-cart" id="modal-30178">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12"> 
<div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/blouses/30178.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/blouses/30178.jpeg" width="75"></div>  
  </div>
</div> 
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Блуза</h2>
	             	<h3 class="sku">Артикул: Арт 30178</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 25$ до 35</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
<!-- юбки попап  --> 
<!-- юбка 20062-->

	    <div class="modal fade modal-prod-cart" id="modal-20062">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/20062.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/20062.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 20062</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 20491-->

	    <div class="modal fade modal-prod-cart" id="modal-20491">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/20491.jpg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/20491.jpg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 20491</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 20302-->

	    <div class="modal fade modal-prod-cart" id="modal-20302">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/20302.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/20302.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 20302</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 2065-->

	    <div class="modal fade modal-prod-cart" id="modal-2065">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/2065.jpg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/2065.jpg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 2065</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 2049-->

	    <div class="modal fade modal-prod-cart" id="modal-2049">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/2049.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/2049.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 2049</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>        
<!-- юбка 2063-->

	    <div class="modal fade modal-prod-cart" id="modal-2063">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/2063.jpg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/2063.jpg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 2063</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 215213-->

	    <div class="modal fade modal-prod-cart" id="modal-215213">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/215213.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/215213.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 215213</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>      
<!-- юбка 2007-->

	    <div class="modal fade modal-prod-cart" id="modal-2007">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/2007.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/2007.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 2007</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 2049-->

	    <div class="modal fade modal-prod-cart" id="modal-2049">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/2049.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/2049.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 2049</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 20951-->

	    <div class="modal fade modal-prod-cart" id="modal-20951">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/20951.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/20951.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 20951</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>           
<!-- юбка 20961-->

	    <div class="modal fade modal-prod-cart" id="modal-20961">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/20961.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/20961.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 20961</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 20988-->

	    <div class="modal fade modal-prod-cart" id="modal-20988">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/20988.jpeg" width="288px"></div>  
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/20988.jpeg" width="75"></div>   
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 20988</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>    
<!-- юбка 215213-->

	    <div class="modal fade modal-prod-cart" id="modal-215213">
	      <div class="modal-dialog cart-prod">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	              <i class="glyphicon glyphicon-remove"></i>
	            </button>
	            <h2></h2>
	          </div>
	          <div class="modal-body text-center">
	             <div class="col-md-4 col-xs-12">
	              
	              <div class="slider-container">
  <div class="slider-for">
    <div class=""><img src="img/goods/skirts/215213.jpeg" width="288px"></div>   
  </div>
  <div class="slider-nav">
    <div class=""><img src="img/goods/skirts/215213.jpeg" width="75"></div>    
  </div>
</div>
	             </div>
	             <div class="col-md-8 col-xs-12 text-left">
	             	<h2 class="mod-title">Юбка </h2>
	             	<h3 class="sku">Артикул: Арт 215213</h3>
	             	<p class="content">Размерный ряд 38 – 48 (+6).</p>
<!--       <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-default btn-xs spoiler-trigger more-link" data-toggle="collapse">Читать полностью</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body">
            <p> </p>
          </div>
        </div>
      </div> -->

      <div class="panel panel-default sec">
        <div class="panel-heading">
        <!-- <div class="mod-price">от 18$ до 38</div> -->
          <button type="button" class="btn btn-default btn-xs btn-forms spoiler-trigger" data-toggle="collapse">ПЕРЕЙТИ В КАТАЛОГ</button>
        </div>
        <div class="panel-collapse collapse out">
          <div class="panel-body"><div class="form-popup"></div>

          </div>
        </div>
      </div>
      	<div class="row padtop">
				<div class="s-1-info-list">
					<ul>
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-1"></div>
							<p><span>Подсортировка</span><br>размеров</p>
						</li>
						<!-- <li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-2"></div>
							<p><span>Бесплатные изделия</span> <br>на пробу</p>
						</li> -->
						<li class="co-md-4 col-sm-4 col-xs-12">
							<div class="im im-3"></div>
							<p><span>Гарантия</span> возврата денег</p>
						</li>
					</ul>
				</div></div>
	             </div>

	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>
 
 
<!-- popup info -->
<!-- 	    <div class="modal fade modal-info-cart" id="modal-info">
	      <div class="modal-dialog">
	        <div class="modal-content text-left">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal">
	            </button>
	            <h2 >Посмотрите видео отзывы наших партнеров</h2>
	          </div>
	          <div class="modal-body">
	          	<div class="col-md-9 inf">
<div class="youtube" data-embed="GFYD5px1C_o">  
    <div class="play-button"></div>
     </div>
     <a id="toresp" href="#ex7"><button class="btn tmpl-btn"  data-current="modal-v-1" data-dismiss="modal">Посмотреть видео отзывы</button></a></div>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger cls" type="button" data-current="modal-v-1" data-dismiss="modal">Закрыть</button>
	          </div>
	        </div>
	      </div>
	    </div>  -->


<!-- popup info -->
	    <div class="modal fade modal-info-cart" id="modal-info-1">
	      <div class="modal-dialog">
	        <div class="modal-content text-left">
	          <div class="modal-header">
	            <button class="close" type="button" data-current="modal-v-1" data-dismiss="modal" onclick="delayedAlert();"></button> 
	          </div>
	          <div class="modal-body row">
	          	<div class="col-md-12 inf">
<img src="img/pop-img.png" class="img-responsive"  alt=""></div>
	          </div>
	          <div class="modal-footer"> 
	          </div>
	        </div>
	      </div>
	    </div> 
	  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
		<script src="js/fancybox/jquery-1.10.1.min.js"></script>
		<script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
		<script src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
		<script src="js/fancybox/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!--<script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
        $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});
    </script>-->
		<script type="text/javascript">
			$(".fancybox-thumb").fancybox({
		      prevEffect  : 'none',
		      nextEffect  : 'none',
		      
		      closeBtn  : true,
			  arrows    : true,
			  nextClick : true,

		      helpers : {
		        title : {
		          type: null
		        },
		        thumbs  : {
		          width : 50,
		          height  : 50
		        }
		      }
		    });
		</script>


	    <script src="js/jquery-2.2.4.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/slick.min.js"></script>
	    <script src="js/main.js"></script>
	    <script src="js/banner-js.js"></script>
	    <script type="text/javascript"> 
	  	  var namekey = ['added','utm_campaign','utm_source','utm_medium','utm_term','source'], 
	      div_class = '.rezult', 
	      input_hide = 'text'; 

		  $(document).ready(function (){ 
		    input(); 
		  }); 
		</script>
	<script type="text/javascript">
		// var handler = function ( event ){
		//   event = event || window.event;
		//   var target = event.target || event.srcElement;
		//   if ( target.nodeType == 1 && target.nodeName.toLowerCase() == "input" && target.type == "checkbox" && target.checked ) {
		// 	var inputs = document.getElementsByTagName("input");
		// 	for ( var i = 0; inputs[i]; i++ ) {
		// 	  if ( inputs[i].type == "checkbox" && inputs[i] != target ) {
		// 		inputs[i].checked = false;
		// 	  }
		// 	}
		//   }
		// }
		// if (document.addEventListener){
		//   document.addEventListener('click', handler, false); 
		// } else if (document.attachEvent){
		//   document.attachEvent('onclick', handler);
		// }
	</script>
	<script type="text/javascript">
		var handler = function ( event ){
		  event = event || window.event;
		  var target = event.target || event.srcElement;
		  if ( target.nodeType == 1 && target.nodeName.toLowerCase() == "input" && target.type == "radio" && target.checked ) {
			var inputs = document.getElementsByTagName("input");
			for ( var i = 0; inputs[i]; i++ ) {
			  if ( inputs[i].type == "radio" && inputs[i] != target ) {
				inputs[i].checked = false;
			  }
			}
		  }
		}
		if (document.addEventListener){
		  document.addEventListener('click', handler, false); 
		} else if (document.attachEvent){
		  document.attachEvent('onclick', handler);
		}
	</script>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M49S4X"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M49S4X');</script>
	<!-- End Google Tag Manager -->
	</body>
</html>