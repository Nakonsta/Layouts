<?php 
	 if($_POST['submit']) {
    $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 100); 
    $_POST['phone'] =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 30);
    $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 30);
    $_POST['phone-code'] =  substr(htmlspecialchars(trim($_POST['phone-code'])), 0, 5);
    $_POST['question'] =  substr(htmlspecialchars(trim($_POST['question'])), 0, 500);
    $_POST['comment'] =  substr(htmlspecialchars(trim($_POST['comment'])), 0, 500);
	$mess = '
	Имя отправителя:'.$_POST['name'].' 
	Контактный телефон:'.$_POST['phone-code'].''.$_POST['phone'].' 
	Электорнный адрес:'.$_POST['email'].' 
	Вопрос:'.$_POST['question'].'
	Коментарий:'.$_POST['comment'];
	$message = iconv("utf-8", "windows-1251", $mess);
    // $to - кому отправляем 
    $to = 'megaminsk@inbox.ru'; 
    // $from - от кого 
    $from='Мегасервис масла заявка'; 
	
    mail($to,  "From:".$from, $message ); 
    
};
?>
<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Замена масел от Мегасервис</title>
	
	<link rel="icon" href="/img/favicon.ico">
	
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45542175 = new Ya.Metrika({
                    id:45542175,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
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
<noscript><div><img src="https://mc.yandex.ru/watch/45542175" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109755775-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109755775-1');
</script>

</head>
<body>
<!--  Clickcease.com tracking-->
<script type="text/javascript">
var script = document.createElement("script");
script.async = true; script.type = "text/javascript";
var target = 'https://www.clickcease.com/monitor/stat.js';
script.src = target;
var elem = document.head;
elem.appendChild(script);
</script>
<noscript><a href="https://www.clickcease.com" rel="nofollow"><img src="https://monitor.clickcease.com/stats/stats.aspx"  alt="ClickCease"/></a></noscript>
<!--  Clickcease.com tracking-->
    <div class="header__fixed">
            <div class="container">
                <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 header__fixed_logo_contanier">
				    <div class="logo"><a href="/"><img src="/img/logooil.png" alt="" class="img-responsive"></a></div>							
				</div>
               <div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 header__fixed_menu_contanier">
				    <a href="#" class="header__fixed_menu" onclick="return false;">Меню</a>							
				</div>
                <div class="col-sm-5 col-lg-6 col-md-5 col-xs-5 header__fixed_address_contanier">
				    <address class="text-center">Минск, ул. Короля 88</address>							
				</div>
               <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 text-right header__fixed_operators_contanier">
				    <div class="header__fixed_operators"><a href="callto:+375296274488"><img src="/img/operator.png" alt="" ></a></div>					
				</div>
                <div class="col-sm-2 col-lg-1 col-md-2 col-xs-2 text-center header__fixed_phone_contanier">
				    <a href="callto:+375296274488" class="header__fixed_phone ">627-44-88</a>						
				</div>
            </div>
        </div>
	<div id="wrap">
		<!-- wrap-home-slider -->
		<div class="wrap-home-slider">
			<!-- header -->
			<header>
				<div class="container">
					<div class="row mobile-row">
						<div class="col-sm-5 col-lg-5 col-md-4 col-xs-6">
							<div class="logo"><a href="/"><img src="/img/logo.png" alt="" class="img-responsive"></a></div>
							<address>Минск, ул. Короля 88</address>
						</div>
						<div class="col-sm-7 col-lg-7 col-md-8 col-xs-6">
							<!-- phone -->
							<div class="phone">
								<a href="tel:+375296274488">+375 (29) 627-44-88</a>
								<span>/</span>
								<a href="tel:+375336274488">+375 (33) 627-44-88</a>
							</div>
							<!-- /phone -->
							<!-- callback -->
							<div class="callback">
								<p><a href="#callback" data-toggle="modal" class="btn btn-callback"><span class="sprites i-phone"></span>Обратный звонок</a></p>
								<p>9:00-21:00 без вых.</p>
							</div>
							<!-- /callback -->
						</div>
					</div>
				</div>
				<!-- menu -->
				<ul class="menu">
					<li><a href="http://megaservice.by/contacts/">О компании</a></li>
					<li><a href="#">Информация</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="http://megaservice.by/specpredlozhnie/">Акции</a></li>
				</ul>
				<!-- /menu -->
				<!-- navigation -->
				<nav>
					<div class="container">
						<div class="clearfix">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="navbar">
							<ul class="nav nav-justified navbar-nav">  
								<li class="visible-xs"><a href="#">О компании</a></li>
								<li class="visible-xs"><a href="#">Информация</a></li>
								<li class="visible-xs"><a href="#">Отзывы</a></li>
								<li class="visible-xs"><a href="http://megaservice.by/specpredlozhnie/">Акции</a></li>
								<li class="dropdown">
								    <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span>Услуги </span><span class="sprites i-caret"></span></a>
									<ul class="dropdown-menu" role="menu">
									
									<li><a href="https://megaservice.by/oil/">замена масла</a></li>
										
										 <li><a href="https://megaservice.by/razval_shojdenie/">3D развал-схождение</a></li>
										 
										 <li><a href="https://megaservice.by/remont-dvigatelya/">Ремонт двигателя</a></li>
										 
										 <li><a href="https://megaservice.by/diagnostika-remont-podveski/">диагностика и ремонт подвески</a></li>
										 
										 <li><a href="https://megaservice.by/kompyuternaya-diagnostika-avtomobilya/">компьютерная диагностика</a></li>
										 
										 <li><a href="https://megaservice.by/remont-avtoelektriki/">автоэлектрика</a></li>
										 
										 <li><a href="https://megaservice.by/antikorrozijnaya-obrabotka-avto/">антикоррозийная обработка</a></li>
										
										<li><a href="https://megaservice.by/remont-glushitelya/">ремонт глушителей</a></li>
										
										<li><a href="https://megaservice.by/protochka-tormoznyh-diskov/">проточка тормозных дисков</a></li>
										
										<li><a href="https://megaservice.by/remont-tormoznoy-sistemy/">ремонт тормозной системы</a></li>
										
										<li><a href="https://megaservice.by/remont-supportov/">ремонт суппортов</a></li>
										
										<li><a href="https://megaservice.by/remont-startera-generatora/">ремонт стартера и генератора</a></li>
										
										<li><a href="https://megaservice.by/remont-zamena-scepleniya/">замена сцепления</a></li>
										
										<li><a href="https://megaservice.by/zamena-remnya-grm/">замена грм</a></li>
										
										<li><a href="https://megaservice.by/remont-rulevoj-rejki/">ремонт рулевой рейки</a></li>
										
										<li><a href="https://megaservice.by/shinomontazh/">шиномонтаж</a></li>
										
										<li><a href="https://megaservice.by/remont-pechki/">ремонт печки (отопителя)</a></li>
										
										<li><a href="https://megaservice.by/tonirovka/">тонировка авто</a></li>
										
										<li><a href="https://megaservice.by/bespokrasochnoe-udalenie-vmyatin/">беспокрасочное удаление вмятин</a></li>
										
										<li><a href="https://megaservice.by/himchistka-salona-avto/">химчистка авто</a></li>
										
										<li><a href="https://megaservice.by/polirovka-kuzova/">полировка кузова</a></li>
										
									</ul>
								</li>
								<li><a href="http://megaservice.by/specpredlozhnie/"><span>спецпредложения</span></a></li>
								<li><a href="#"><span>цены</span></a></li>
								<li><a href="http://megaservice.by/contacts/"><span>Контакты</span></a></li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- /navigation -->
			</header>
			<!-- /header -->
			<!-- home-slider -->
			<div class="home-slider">
				<div>
					<img src="/img/content/slide-oil.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>ЭКСПРЕСС ЗАМЕНА</p>
							<p>МАСЛА <span class="text-red">В МИНСКЕ</span></p>
							<div class="red-block">Самые низкие цены!  Широкий выбор масел и фильтров!</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /home-slider -->
			<div class="container">
				<div class="card"></div>
				<div class="drop"></div>
			</div>
		</div>
		<!-- /wrap-home-slider -->
		<div class="container">
			<!-- free -->
			<div class="free-block">
				<span class="sprites i-free-oil"><span class="free-price">0<sup> ₽</sup></span></span>
				<div class="free-text"><span class="text-red">Бесплатная замена </span>масла от МЕГАСЕРВИС!</div>
			</div>
			<!-- /free -->
			<!-- services -->
			<div class="services">
				<div class="title">центр замены масел автомобиля в Минске</div>
				<p>Профессиональная экспресс замена автомобильных масел, других технических жидкостей и фильтров. Наш центр Экспресс замены масла находится в самом центре Минска, в 100 метрах от ТЦ Корона по ул. Кальварийская.</p>
				<p>Оригинальные моторные и трансмиссионные масла по самым выгодным ценам в Минске. Все клиенты получают скидочную карту на весь спектр автоуслуг на наших автосервисах и автомойках.</p>
				<div class="row wrap-services mobile-row">
					<div class="col-xs-6 col-md-4">
						<a href="#" class="services-block">
							<img src="/img/content/i-oil-1.png" alt="">
							<span class="services-text">Замена масла в двигателе (моторного масла дизель/бензин)</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-4">
						<a href="#" class="services-block">
							<img src="/img/content/i-oil-2.png" alt="">
							<span class="services-text">Замена масла в АКПП и МКПП (редукторе, мостах)</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-4">
						<a href="#" class="services-block">
							<img src="/img/content/i-oil-3.png" alt="">
							<span class="services-text">Замена масляного фильтра (в наличии на все автомобили)</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-4">
						<a href="#" class="services-block">
							<img src="/img/content/i-oil-4.png" alt="">
							<span class="services-text">Замена воздушного и салонного (все фильтры в наличии)</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-4">
						<a href="#" class="services-block">
							<img src="/img/content/i-oil-5.png" alt="">
							<span class="services-text">Замена тормозной жидкости и антифриза</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-4">
						<a href="#" class="services-block">
							<img src="/img/content/i-oil-6.png" alt="">
							<span class="services-text">Замена свечей зажигания и промывка инжектора</span>
						</a>
					</div>
				</div>
			</div>
			<!-- /services -->
			<!-- advantages -->
			<div class="row">
				<div class="col-sm-4">
					<div class="advantages-block">
						<div class="span sprites i-advantages-1"></div>
						<div class="title">7.5 лет опыта</div>
						<p>Работы в сфере автоуслуг:</p>
						<ul>
							<li>—  Сеть автомоек «МЕГАМОЙКА»</li>
							<li>—  Центр замены масел</li>
							<li>—  Шинный сервис</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="advantages-block">
						<div class="span sprites i-advantages-2"></div>
						<div class="title">низкие цены</div>
						<p>Самые низкие цены в Минске на большинство услуг нашего авторсервиса. <br>Не упустите выгоду</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="advantages-block">
						<div class="span sprites i-advantages-3"></div>
						<div class="title">центр минска</div>
						<p>Мы находимся в 100 метрах от торгового центра Корона Кальварийская и в 2-х минутах от Метро.</p>
					</div>
				</div>
			</div>
			<!-- /advantages -->
			<!-- price -->
			<div class="price">
				<div class="title text-center">В НАЛИЧИИ ШИРОКИЙ ВЫБОР МАСЕЛ И ФИЛЬТРОВ</div>
				<div class="table-responsive">
					<table class="table price-table">
						<tr>
							<th>№</th>
							<th>Наименование масла</th>
							<th>Новая цена</th>
							<th>Старая цена</th>
						</tr>
						<tr>
							<td>01.</td>
							<td>
							<img src="/img/content/price-oli-4.png" alt="">
								Моторное масло Shell </td>
							<td><span class="text-red">от 9,99 руб.</span></td>	
							<td>от 13,99 руб.</td>
						</tr>
						<tr>
							<td>02.</td>
							<td>
								<img src="/img/content/price-oli-2.png" alt="">
								Моторное масло G-Energy </td>
                            <td><span class="text-red">от 6,5 руб.</span></td>
							<td>от 8,5 руб.</td>
						</tr>
						<tr>
							<td>03.</td>
							<td>
								<img src="/img/content/price-oli-3.png" alt="">
								Моторное масло Divinol </td>
							<td><span class="text-red">от 8,5 руб.</span></td>
							<td>от 10,5 руб.</td>
						</tr>
						<tr>
							<td>04.</td>
							<td>
							<img src="/img/content/price-oli-1.png" alt="">
								Моторное масло Castrol </td>
							<td><span class="text-red">от 17,99 руб.</span></td>
							<td>от 20 руб.</td>
						</tr>
						<tr>
							<td>05.</td>
							<td>
							<img src="/img/content/price-oli-5.png" alt="">
								Фильтр масляный (широкий выбор) </td>
							<td><span class="text-red">от 7,99 руб.</span></td>
							<td>от 9,99 руб.</td>
						</tr>
						<tr>
							<td>06.</td>
							<td>
							<img src="/img/content/price-oli-6.png" alt="">
								Фильтр воздушный (широкий выбор)</td>
							<td><span class="text-red">от 8 руб.</span></td>
							<td>от 9 руб.</td>
						</tr>
						<tr>
							<td>07.</td>
							<td>
							<img src="/img/content/price-oli-7.png" alt="">
								Антифриз (красный, синий)</td>
							<td><span class="text-red">от 6 руб.</span></td>
							<td>от 7 руб.</td>
						</tr>
					</table>
				</div>
				<div class="price-buttons">
					<p>Закажите любое масло из списка на этой неделе и получите <span class="text-red">бесплатную замену!</span></p>
					<p>
						<a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на замену</a>
						<a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>
					</p>
				</div>
			</div>
			<!-- /price -->
			<!-- price -->
			<div class="price">
				<div class="title text-center">ПРЕЙСКУРАНТ ЦЕН НА УСЛУГИ</div>
				<div class="table-responsive">
					<table class="table price-table">
						<tr>
							<th>№</th>
							<th>Наименование услуги</th>
							<th>Стоимость услуги</th>
						</tr>
						<tr>
							<td>01.</td>
							<td>
							<img src="/img/content/price-rem-1.png" alt="">
								Замена моторного масла (наши материалы) </td>
							<td><span class="text-red"> 0 руб!</span></td>	
						</tr>
						<tr>
							<td>02.</td>
							<td>
								<img src="/img/content/price-rem-2.png" alt="">
								 Замена моторного масла (материалы клиента)</td>
							<td><span class="text-red"> 14,99 руб.</span></td>	
						</tr>
					</table>
				</div>
				<div class="price-buttons">
					<p>Закажите любое масло у нас на этой неделе и получите <span class="text-red">БЕСПЛАТНУЮ ЗАМЕНУ!</span></p>
					<p>
						<a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на замену</a>
						<a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>
					</p>
				</div>
			</div>
			<!-- /price -->
			<!-- consultation -->
			<div class="wrap-consultation">
				<div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i>на замену масла вы можете по телефонам:</i></div>
				<div class="consultation-block consultation-block-contacts">
					<div class="consultation-form">
						<!-- phone -->
						<div class="phone consultation-phone">
							<span class="sprites i-time"></span>
							<p>
								<a href="tel:+375296274488">+375 (29) 627-44-88</a>
								<span>/</span>
								<a href="tel:+375336274488">+375 (33) 627-44-88</a>
							</p>
							<p><i>Оставить заявку Вы можете круглосуточно!</i></p>
						</div>
						<!-- /phone -->
						<p><a href="#callback" data-toggle="modal" class="btn btn-blue">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</a></p>
						<div class="consultation-address">
							<p>Мы находимся в центре Минска:</p>
							<p class="text-blue">ул. Короля 88, 100 метров от ТЦ Корона на Кальварийской</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /consultation -->
			<!-- text-block -->
			<div class="text-block">
				<p><h2>Замена масла в Минске</h2>Каждому водителю хорошо известно, что надежная и бесперебойная работа автомобиля напрямую зависит от выбора моторного масла. Любое транспортное средство имеет свои технические характеристики и показатели, которые необходимо учитывать при выборе жидкости. Не лишним также будет знать, что некоторые производители автомобилей делают так называемые оригинальные масла, которые лучше всего использовать именно для конкретной марки автомобиля.</p>
				<p><h3>Залог качественной и бесперебойной работы</h3>Если вам нужно действительно качественно и быстро осуществить замену масла, обращайтесь в автосервисный комплекс «Мегасервис». Нужно понимать, что фактическая замена – это лишь половина дела. Для того чтобы получить отличный результат, необходимо еще подобрать наиболее подходящую жидкость. Наши специалисты отлично понимают это, и гарантируют заливку максимально подходящего масла под конкретный автомобиль, что гарантирует безукоризненную работу двигателя.</p>
				<p>Наш автосервис предлагает высококачественные масла, а также их замену по самым доступным ценам. Независимо от конкретно выбранной марки, вы получаете только высшее качество, поскольку любое масло, имеющееся в нашем ассортименте, является полностью проверенным. За годы деятельности мы отобрали исключительно надежных поставщиков, которым полностью доверяем.</p>
				<p>Обратившись к нам, вы получаете неизменно положительный результат, поскольку в автосервисе работают только проверенные специалисты с большим опытом. Каждый из них зарекомендовал себя, как надежный сотрудник, который действительно знает, что делать и как поступать в самых разных, даже непредвиденных ситуациях. Доверяя им свой автомобиль, вы можете быть абсолютно спокойными, так как он действительно находится в надежных и умелых руках.</p>
				<p>Любая работа специалистов проводится только с использованием самого современного технического оборудования. С его помощью отработанное масло выкачивается из системы всего за минуту. Для максимально эффективного результата вместе с самим маслом мы также меняем масляный фильтр.</p>
				<p>Напоминаем, что замена масла для дизельных автомобилей должна проводиться, как минимум, через 7-8 тысяч километров. Что касается бензиновых двигателей, предел увеличивается до 10-12 тыс. км. Кроме того, необходимо проверять уровень масла через каждые 2000-3000 км, и посещать автосервис хотя бы раз в год.</p>
			</div>
			<!-- /text-block -->
			<!-- gallery -->
			<div class="title text-center">Фотогалерея</div>
			<div class="gallery-slider">
				<div>
					<a href="/img/content/img1.jpg" data-fancybox="gallery"><img src="/img/content/img1.jpg" alt="" class="img-responsive center-block"></a>
					<p>АВТОСЕРВИС НИЗКИХ ЦЕН</p>
				</div>
				<div>
					<a href="/img/content/img9.jpg" data-fancybox="gallery"><img src="/img/content/img9.jpg" alt="" class="img-responsive center-block"></a>
					<p>Работаем 7 дней в неделю!</p>
				</div>
				<div>
					<a href="/img/content/img4.jpg" data-fancybox="gallery"><img src="/img/content/img4.jpg" alt="" class="img-responsive center-block"></a>
					<p>Современный автосервис в центре Минска</p>
				</div>
				<div>
					<a href="/img/content/img11.jpg" data-fancybox="gallery"><img src="/img/content/img11.jpg" alt="" class="img-responsive center-block"></a>
					<p>Комфортная комната клиента</p>
				</div>
				<div>
					<a href="/img/content/img10.jpg" data-fancybox="gallery"><img src="/img/content/img10.jpg" alt="" class="img-responsive center-block"></a>
					<p>Большой выбор масел и фильтров</p>
				</div>
				<div>
					<a href="/img/content/img21.jpg" data-fancybox="gallery"><img src="/img/content/img21.jpg" alt="" class="img-responsive center-block"></a>
					<p>Широкий спектр услуг</p>
				</div>
				<div>
					<a href="/img/content/img8.jpg" data-fancybox="gallery"><img src="/img/content/img8.jpg" alt="" class="img-responsive center-block"></a>
					<p>Гарантия на все услуги</p>
				</div>
			</div>
			<!-- /gallery -->
			<!-- review -->
			<div class="title-big text-center">Отзывы клиентов</div>
			<div class="review-slider">
				<div>
					<div class="review-block clearfix">
						<div class="review-image">
							<img src="/img/content/masla1.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Кафе Гараж, водитель</i></p>
							<div class="name">Анатолий Сухих <span class="text-red">34</span></div>
							<div class="review-text-block">
								<p>«Остался доволен после посещения данного автосервиса. Масла и фильтра поменяли, все было в наличии, замену произвели бесплатно. Можно рекомендовать!»</p>
							</div>
							<div class="post-date">12 марта 2017</div>
						</div>
					</div>
				</div>
				<div>
					<div class="review-block clearfix">
						<div class="review-image">
							<img src="/img/content/masla2.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Предприниматель</i></p>
							<div class="name">Елена М. <span class="text-red">25</span></div>
							<div class="review-text-block">
								<p>«Очень адекватные цены, комфортная комната ожидания, приветливый персонал. Остались только положительные впечатления после посещения сто.»</p>
							</div>
							<div class="post-date">14 апреля 2017</div>
						</div>
					</div>
				</div>
				<div>
					<div class="review-block clearfix">
						<div class="review-image">
							<img src="/img/content/scep2.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Водитель</i></p>
							<div class="name">Александр Мартыненко <span class="text-red">27</span></div>
							<div class="review-text-block">
								<p>«Достойная работа ребят и профессиональный подход к делу. Заменили масло и фильтры не успел и кофе по пить. Рекомендую и приеду еще!»</p>
							</div>
							<div class="post-date">17 марта 2017</div>
						</div>
					</div>
				</div>
				<div>
					<div class="review-block clearfix">
						<div class="review-image">
							<img src="/img/content/masla4.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Автолюбитель</i></p>
							<div class="name">Александр Веремеенко <span class="text-red">25</span></div>
							<div class="review-text-block">
								<p>«Хорошее обслуживание, действительно низкие цены. Все очень понравилось, замена масла в двигателе длилась 15 минут. Вообщем молодцы.»</p>
							</div>
							<div class="post-date">12 апреля 2017</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /review -->
		</div>
			<!-- map -->
		<style type="text/css">
.mob_map { display: none; }
/* Smartphone Portrait and Landscape */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 980px){ .d_m {    display: none; }
.mob_map{
	display: block;
}
}
</style>
		<div class="d_m" id="map"><img style="width: 100%;" src="/map.png"></div>
		<div class="mob_map" id="map"><img src="/mob_m.png"></div>
		<!-- /map -->
		<!-- footer -->
		<footer>
			<!-- footer-block -->
			<div class="footer-block">
				<!-- top -->
				<a href="#wrap" class="top"></a>
				<!-- /top -->
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-lg-3 col-lg-offset-1">
							<div class="title-small">Услуги автосервиса</div>
							<ul class="footer-nav">
								<li><a href="http://megaservice.by/remont-glushitelya/">Ремонт глушителей</a></li>
								<li><a href="#">Диагностика автомобиля</a></li>
								<li><a href="#">Ремонт рулевых реск</a></li>
								<li><a href="#">Ремон гидроусилителя</a></li>
								<li><a href="#">Автоэлектрика</a></li>
								<li><a href="#">Ремонт стартеров и генератора</a></li>
								<li><a href="#">Заменя ремня ГРМ</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="title-small">Замена масел</div>
							<ul class="footer-nav">
								<li><a href="http://megaservice.by/oil/">Замена масла в двигателе</a></li>
								<li><a href="#">Замена масла в АКПП</a></li>
								<li><a href="#">Замена фильтров</a></li>
								<li><a href="#">Замена других жидкостей</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-lg-2">
							<div class="title-small">Автомойка</div>
							<ul class="footer-nav">
								<li><a href="#">Мойка автомобиля</a></li>
								<li><a href="#">Полировка</a></li>
								<li><a href="#">Химчистка салона</a></li>
							</ul>
							<div class="title-small">Шиномонтаж</div>
							<ul class="footer-nav">
							    <li><a href="http://megaservice.by/shinomontazh/">Шиномонтаж</a></li>
								<li><a href="http://megaservice.by/shinomontazh/">Правка дисков</a></li>
								<li><a href="#">Аргонная сварка</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="title-small">мегасервис</div>
							<ul class="footer-nav">
								<li><a href="#">О нашей компании</a></li>
								<li><a href="#">Вакансии открытые</a></li>
								<li><a href="#">Реквизиты организации</a></li>
								<li><a href="http://megaservice.by/contacts/">Контактные данные</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-block -->
			<div class="container">
				<div class="copyright">
					<p>© Copyright. Все права защищены.  ООО «Отель Сервис Групп».</p>
					<p>Юр. адрес: г. Минск. ул. Селицкого 39Б.  Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-сб), 09:00 - 21:00 (вс)</p>
					<p>Наша организация не осуществляет розничную торговлю, все цены указанные на сайте носят ознакомительный характер. Данная информация является справочной и публичной офертой не является.
				</div>
			</div>
		</footer>
		<!-- /footer -->
	</div>

	<!-- callback -->
	<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				<div class="title text-center">ОБРАТНЫЙ ЗВОНОК</div>
				<form method="post"  class="form_check" action="#">
					<div class="form-group rline"><input class="rfield" type="text" name="name" placeholder="ваше имя"></div>
					<div class="form-group rline"><input class="rfield" type="text" name="phone" placeholder="ваш телефон"></div>
					<p class="text-center"><input class="btn btnsubmit btn-blue btn-block" name="submit" type="submit" value="отправить заявку"></p>
				</form>
				<p class="confidentiality">* Внимание! Мы не передаем никаких данных 3-м лицам. Все конфиденциально.</p>
			</div>
		</div>
	</div>
	<!-- /callback -->
	<!-- question-modal -->
	<div class="modal fade" id="question-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				<div class="title text-center">Задать вопрос</div>
				<form method="post" class="form_check" action="#">
					<div class="form-group rline"><input  class="rfield" type="text" name="name" placeholder="ваше имя"></div>
					<div class="form-group rline"><input  class="rfield" type="text" name="email" placeholder="ваш e-mail"></div>
					<div class="form-group rline"><textarea  class="rfield" name="question" placeholder="ваш вопрос"></textarea></div>
					<p class="text-center"><input class="btn btnsubmit btn-blue btn-block" name="submit" type="submit" value="Задать вопрос"></p>
				</form>
				<p class="confidentiality">* Внимание! Мы не передаем никаких данных 3-м лицам. Все конфиденциально.</p>
			</div>
		</div>
	</div>
	<!-- /question-modal -->
	<!-- entry-modal -->
	<div class="modal fade" id="entry-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				<div class="title text-center">Записаться на замену</div>
				<form method="post" class="form_check" action="#">
					<div class="form-group rline"><input  class="rfield" type="text" name="name" placeholder="ваше имя"></div>
					<div class="form-group rline"><input  class="rfield" type="text" name="phone" placeholder="ваш телефон"></div>
					<div class="form-group rline"><textarea  class="rfield" name="comment" placeholder="Коментарий"></textarea></div>
					<p class="text-center"><input class="btn btnsubmit btn-blue btn-block" name="submit" type="submit" value="Записаться"></p>
				</form>
				<p class="confidentiality">* Внимание! Мы не передаем никаких данных 3-м лицам. Все конфиденциально.</p>
			</div>
		</div>
	</div>
	<!-- /entry-modal -->
	<!-- tranks -->
	<div class="modal fade" id="tranks" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				<div class="title text-center">Заявка отправлена.</div>
				<p class="text-center">Мы свяжемся с Вами в ближайшее время.</p>
			</div>
		</div>
	</div>
	<!-- /tranks -->
<link rel="stylesheet" href="/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css?2">
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/slow_scroll.js"></script>
	<script type="text/javascript" src="/js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	
	<!-- form -->
	<script type="text/javascript" src="/js/is.mobile.js"></script>
	<script type="text/javascript" src="/js/formcheck.js"></script>
	<script type="text/javascript">
	<?php
	if(isset($_POST['submit'])) {
		echo "kvg = true;";
	}
	?>
	$(document).ready(function(){
		if(window.kvg)
		{
			$('#tranks').modal();
		}
	});
        
	</script>	

	<!-- slick -->
	<script type="text/javascript" src="/js/slick.min.js"></script>
	<script type="text/javascript">
		$('.home-slider').slick({
		  dots: true
		});
		$('.gallery-slider').slick({
		  centerMode: true,
		  slidesToShow: 3,
		  centerPadding: '0px',
		  dots: true,
		  responsive: [
		    {
		      breakpoint: 571,
		      settings: {
		        centerMode: true,
		        centerPadding: '0px',
		        slidesToShow: 1
		      }
		    }
		  ]
		});
		$('.review-slider').slick({
		  dots: true,
  		  infinite: false,
		  speed: 300,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  responsive: [
			{
			  breakpoint: 769,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			},
		  ]
		});
	</script>
	<script>

    setTimeout(function(){

        $.getScript("//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5114845044932608");


    },5000)

</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3124845", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="https://top-fwz1.mail.ru/counter?id=3124845;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '01d1c4da3bb5c405aed9e5174fdbd209');
</script>

</body>
</html>
