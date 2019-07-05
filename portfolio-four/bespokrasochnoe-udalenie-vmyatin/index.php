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
    $from='Мегасервис беспокрасочное удаление заявка'; 
	
    mail($to,  "From:".$from, $message ); 
    
};
?>
<!doctype html>
<html lang="ru"> 
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Беспокрасочное удаление вмятин от Мегасервис</title>
	
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
				    <div class="logo"><a href="/"><img src="/img/logo.png" alt="" class="img-responsive"></a></div>							
				</div>
               <div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 header__fixed_menu_contanier">
				    <a href="#" class="header__fixed_menu" onclick="return false;">Меню</a>							
				</div>
                <div class="col-sm-5 col-lg-6 col-md-5 col-xs-5 header__fixed_address_contanier">
				    <address class="text-center">Минск, ул. Короля 88</address>							
				</div>
               <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 text-right header__fixed_operators_contanier">
				    <div class="header__fixed_operators"><a href="callto:+375296384455"><img src="/img/operator.png" alt="" ></a></div>					
				</div>
                <div class="col-sm-2 col-lg-1 col-md-2 col-xs-2 text-center header__fixed_phone_contanier">
				    <a href="callto:+375296384455" class="header__fixed_phone ">638-44-55</a>						
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
								<a href="tel:+375296384455">+375 (29) 638-44-55</a>
								<span>/</span>
								<a href="tel:+375336384455">+375 (33) 638-44-55</a>
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
					<li><a href="#">О компании</a></li>
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
								<li class="visible-xs"><a href="http://megaservice.by/contacts/">О компании</a></li>
								<li class="visible-xs"><a href="#">Информация</a></li>
								<li class="visible-xs"><a href="#">Отзывы</a></li>
								<li class="visible-xs"><a href="#">Услуги</a></li>
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
										
										</li>
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
            <div class="home-slider home-slider_top">
				<div>
					<img src="../img/content/bespokrasochnoe-udalenie-vmyatin/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Беспокрасочное<br>удаление вмятин</p>
							<p class="text-yellow">По мега-низкой цене в Минске! Спешите!</p>
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Консультация</a>
						</div>
					</div>
				</div>
				<div>
					<img src="../img/content/bespokrasochnoe-udalenie-vmyatin/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Беспокрасочное<br>удаление вмятин</p>
							<p class="text-yellow">По мега-низкой цене в Минске! Спешите!</p>
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Консультация</a>
						</div>
					</div>
				</div>
				<div>
					<img src="../img/content/bespokrasochnoe-udalenie-vmyatin/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Беспокрасочное<br>удаление вмятин</p>
							<p class="text-yellow">По мега-низкой цене в Минске! Спешите!</p>
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Консультация</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /home-slider -->
            
			<div class="container">
				<div class="card"></div>
			</div>
		</div>
		<!-- /wrap-home-slider -->
		<div class="container">
			<!-- free -->
			<div class="free-block">
			    <div class="free-text"><span class="text-red">АКЦИЯ!</span></div>
				<span class="sprites i-action"></span>
				<div class="free-text">При ремонте у нас! <span class="text-red">Полировка на месте вмятин в подарок!</span></div>
                <div class="free-text">При ремонте у нас! <span class="text-red">Мойка автомобиля в подарок!</span></div>
                <div class="clear"></div>
            </div>
			<!-- /free -->
			<!-- services -->
			<div class="services">
				<div class="title">Беспокрасочное удаление вмятин от Мегасервис</div>
				<p>Современные технологии и оборудование, применяемые в деятельности нашей компании, позволяют проводить беспокрасочное удаление вмятин на кузове автомобилей. </p>
				<p>Высококвалифицированные специалисты с большим опытом работы смогут выполнить ремонт любых автомобилей, в том числе и премиум класса, в самые короткие сроки. Беспокрасочное удаление вмятин позволяет удалять не только незначительные повреждения, но и сложные обширные дефекты поверхности автомобиля.  </p>
				<div class="row wrap-services mobile-row">
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="services-block">
							<img src="/img/content/bespokrasochnoe-udalenie-vmyatin/1.png" alt="">
							<span class="services-text">Беспокрасочное удаление вмятин (низкие цены)</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="http://megaservice.by/polirovka-kuzova/" class="services-block">
							<img src="/img/content/bespokrasochnoe-udalenie-vmyatin/2.png" alt="">
							<span class="services-text">Полировка кузова (сезонная, глубокая)</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a class="services-block">
							<img src="/img/content/bespokrasochnoe-udalenie-vmyatin/3.png" alt="">
							<span class="services-text">Ремонт и замена автостекол (устранение сколов)</span>
						</a>
					</div>
                </div>
				<div class="row wrap-services mobile-row">	
					<div class="col-xs-12 col-sm-4">
						<a href="http://megaservice.by/polirovka-kuzova/" class="services-block">
							<img src="/img/content/bespokrasochnoe-udalenie-vmyatin/4.png" alt="">
							<span class="services-text">Полировка фар</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="http://megaservice.by/himchistka-salona-avto/" class="services-block">
							<img src="/img/content/bespokrasochnoe-udalenie-vmyatin/5.png" alt="">
							<span class="services-text">Химчистка салона (турбо-химчистка)</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="http://megaservice.by/" class="services-block">
							<img src="/img/content/bespokrasochnoe-udalenie-vmyatin/6.png" alt="">
							<span class="services-text">Услуги автосервиса</span>
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
                    <div class="title text-center">Цены ны услуги</div>
                    <div class="table-responsive">
                        <table class="table price-table">
                            <tr>
                                <th></th>
                                <th>Хэтчбек</th>
                                <th>Седан</th>
                                <th>Минивен</th>
                                <th>Джип</th>
                            </tr>
							<tr>
                                <td>Размер<br>вмятины,<br>см</td>
                                <td><img src="../img/content/antikoroz-obrabotca-kyzova/1.png" alt=""></td>
								<td><img src="../img/content/antikoroz-obrabotca-kyzova/a3.png" alt=""></td>
                                <td><img src="../img/content/antikoroz-obrabotca-kyzova/a5.png" alt=""></td>
								<td><img src="../img/content/antikoroz-obrabotca-kyzova/a6.png" alt=""></td>
                            </tr>
                            <tr>
                                <td><span class="text-red">от 1 до 3</span></td>
                                <td>от 10 руб.</td>
								<td>от 10 руб.</td>
                                <td>от 10руб.</td>
								<td>от 10 руб.</td>
                            </tr>
                            <tr>
                                <td><span class="text-red">от 3 до 10</span></td>
                                <td>от 23 руб.</td>
								<td>от 23 руб.</td>
                                <td>от 23 руб.</td>
								<td>от 23 руб.</td>
                            </tr>
                            <tr>
                                <td><span class="text-red">от 10 до 20</span></td>
                                <td>от 40 руб.</td>
								<td>от 40 руб.</td>
                                <td>от 40 руб.</td>
                                <td>от 40 руб.</td>
                            </tr>
							<tr>
                                <td><span class="text-red">от 20 до 40</span></td>
                                <td>от 60 руб.</td>
								<td>от 60 руб.</td>
                                <td>от 60 руб.</td>
                                <td>от 60 руб.</td>
                            </tr>
							<tr>
                                <td><span class="text-red">от 40 см и выше</span></td>
                                <td>от 80 руб.</td>
								<td>от 80 руб.</td>
                                <td>от 80 руб.</td>
                                <td>от 80 руб.</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="price-buttons">
                    <p>Закажите беспокрасочное удаление вмятин в нашем Автосервисе! <span class="text-red">И получите мойку в подарок!</span></p>
                    <p>
                        <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на замену</a>
                        <a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>
                    </p>
                </div>        
             <!-- /price -->
			<!-- comparison -->

            <div class="wrap-comparison">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="title__comparison">До удаления вмятин</div>
                        <div class="img__comparison text-center">
                            <img src="../img/content/bespokrasochnoe-udalenie-vmyatin/a1.jpg"  alt="">
                        </div>
                    </div> 
                    <div class="col-sm-6">
                        <div class="title__comparison red">После удаления <span class="hidden-sm">в мегасервис</span></div>
                        <div class="img__comparison text-center red">
                            <img src="../img/content/bespokrasochnoe-udalenie-vmyatin/a2.jpg"  alt="">
                            <p>3,5 часа</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-comparison">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="hidden-lg hidden-md hidden-sm title__comparison">До удаления вмятин</div>
                        <div class="img__comparison text-center">
                            <img src="../img/content/bespokrasochnoe-udalenie-vmyatin/a3.jpg"  alt="">
                        </div>
                    </div> 
                    <div class="col-sm-6">
                        <div class="hidden-lg hidden-md hidden-sm title__comparison red">После удаления <span class="hidden-sm">в мегасервис</span></div>
                        <div class="img__comparison text-center red">
                            <img src="../img/content/bespokrasochnoe-udalenie-vmyatin/a4.jpg"  alt="">
                            <p>1 час.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /comparison -->
			<!-- consultation -->
			<div class="wrap-consultation">
				<div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i>на беспокрасочное удаление вмятин:</i></div>
				<div class="consultation-block consultation-block-contacts">
					<div class="consultation-form">
						<!-- phone -->
						<div class="phone consultation-phone">
							<span class="sprites i-time"></span>
							<p>
								<a href="tel:+375296384455">+375 (29) 638-44-55</a>
								<span>/</span>
								<a href="tel:+375336384455">+375 (33) 638-44-55</a>
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

				<h2>Применение беспокрасочного удаления вмятин</h2>

             <p>Для проведения этого технологического процесса вмятина не должна иметь сквозных повреждений, заломов металла и повреждения лакокрасочного покрытия. Перед проведением ремонта так же проводится оценка растяжения металла вокруг образовавшейся вмятины. </p>
             <p>Беспокрасочный ремонт кузова автомобиля проводится в следующих случаях:</p>
				
				<p>• Повреждения кузова от падения предметов (град, ветки, сосульки и т.д.); <br>•	Последствия неудачной парковки;<br>•	Повреждения после незначительных ДТП;<br>•	Вдавливания, возникшие от перевозки грузов и рук.</p>

             <p>Современные методы позволяют проводить ремонт любых металлических частях автомобиля (железные, алюминиевые). Восстановление деталей автомобилей этим способом возможно только при целостности краски в месте повреждения и вокруг него. В случае повреждения краски деталь следует перекрашивать.  </p>

               <h3>Достоинства беспокрасочного ремонта</h3>

				<p>Применение данной технологии имеет ряд преимуществ перед традиционным ремонтом оперения автомобиля. Использование современных технологий и специального инструмента позволяют исправлять сложные дефекты в труднодоступных местах. Основные преимущества данной технологии:</p>
  
                <ol>

                    <li> Сохранение оригинального покрытия автомобиля;</li>

                    <li> Стоимость ремонта существенно ниже традиционного;</li>

                    <li> Быстрота проведения ремонтных работ;</li>

					<li> Возможность выезда специалиста к месту нахождения автомобиля;</li>

					<li>Проведение данных работ не наносит урон окружающей среде. </li>
					
                </ol>
				
				<h3>Как проводится беспокрасочное удаление вмятин</h3>

				<p>Правка дефектов лакокрасочного покрытия выполняется специальным инструментом, которыми специалист выдавливает вмятину в обратную сторону до получения первоначального вида. В труднодоступных местах используются технологические отверстия, в ряде случаев могут сниматься элементы автомобиля. Качество выполняемого ремонта зависит в основном от опыта мастера и освещённости поверхности автомобиля. Для увеличения освещённости используются специальные светильники. По отражениям и теням определяется направление вытягивания вмятины и готовность поверхности. Возможности ремонта и качество работ во многом зависит от используемого инструмента. При проведении работ наши специалисты используют только оригинальные инструменты лучших марок Европы и Америки.</p> 
				
				<h3>Стоимость работ</h3>
				
				<p>Расчёт стоимости ремонта производится индивидуально для каждого автомобиля. В первую очередь цена зависит от размера повреждения, чем больше вмятина, тем выше стоимость ремонта. На стоимость работ оказывает и тип вмятины, при остроконечных повреждениях цена будет повышенной. На стоимость работ влияет месторасположение дефекта, в сложных местах в оплату включается цена разборки автомобиля. Цена на стоимость работ увеличивается в случае:</p>
              
			  <p>• Нарушено ребро детали; <br>•	Отсутствует свободный доступ к детали;<br>• 	Деталь изготовлена из алюминия.</p>
			  
			  <p>В любом случае беспокрасочное удаление вмятин обходится значительно дешевле традиционного ремонта. Самые простые дефекты наши специалисты могут удалить всего за 20 рублей.</p>
			  
			 <h3>Наши преимущества</h3>
			 
			 <p>При проведении беспокрасочного удаления вмятин в Минске наша компания имеет следующие преимущества:</p>
			 
			 <ol>

                    <li> Удобное расположение. Мы находимся в центре Минска;</li>

                    <li> Имеем большой опыт работы в этой сфере;</li>

                    <li> Используем профессиональный инструмент;</li>

					<li> Стоимость ремонта озвучивается до начала работ;</li>

					<li> Работаем с повреждениями любой сложности;</li>
					
					<li> Сроки выполнения работ от 30 минут.</li>
					
                </ol>
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
							<img src="/img/content/review-1.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Водитель</i></p>
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
							<img src="/img/content/review-2.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Предприниматель</i></p>
							<div class="name">Александр Кравченко <span class="text-red">25</span></div>
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
							<img src="/img/content/review-1.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Автолюбитель</i></p>
							<div class="name">Андрей Радченко <span class="text-red">34</span></div>
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
							<img src="/img/content/review-2.jpg" alt="" class="img-responsive">
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
				<div>
					<div class="review-block clearfix">
						<div class="review-image">
							<img src="/img/content/review-1.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Автолюбитель</i></p>
							<div class="name">Андрей Иванов <span class="text-red">34</span></div>
							<div class="review-text-block">
								<p>«...»</p>
							</div>
							<div class="post-date">15 марта 2017</div>
						</div>
					</div>
				</div>
				<div>
					<div class="review-block clearfix">
						<div class="review-image">
							<img src="/img/content/review-2.jpg" alt="" class="img-responsive">
							<div class="progress rating">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
							</div>
						</div>
						<div class="review-text">
							<p><i>Автолюбитель</i></p>
							<div class="name">Александр  <span class="text-red">25</span></div>
							<div class="review-text-block">
								<p>«...»</p>
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
							<li><a href="https://megaservice.by/razval_shojdenie/">3D развал-схождение</a></li>
								<li><a href="#">Ремонт глушителей</a></li>
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
								<li><a href="#">Правка дисков</a></li>
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
					<p>Юр. адрес: г. Минск, ул. Короля 88.  Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-сб), 09:00 - 21:00 (вс)</p>
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

	<link rel="stylesheet" href="/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css?2">
	<link rel="stylesheet" href="/bespokrasochnoe-udalenie-vmyatin/css/style.css">
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

</body>
</html>
