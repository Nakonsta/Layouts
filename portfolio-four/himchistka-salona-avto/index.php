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

    $from='Мегасервис химчистка авто'; 

	

    mail($to,  "From:".$from, $message ); 

    

};

?>

<!doctype html>

<html lang="ru"> 

<head>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<meta name="viewport" content="width=device-width">



	<title>Химчистка салона авто в Минске</title>



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

				    <div class="header__fixed_operators"><a href="callto:638-44-55"><img src="/img/operator.png" alt="" ></a></div>					

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

								<li class="visible-xs"><a href="#">О компании</a></li>

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
<div class="modal fade" id="yslovie" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<div class="title text-center">Условия акции</div>
			<p><b>Выполним химчистку вашего автомобиля по самой низкой и приемлемой для вас цене!</b> В том случае если степень загрязнения либо предложенная вами стоимость будет не логично низкой.  Мы предложим вам <b>максимально низкую стоимость</b> на выполнение услуги.</p>
            <p>Всегда готовы к конструктивному диалогу и рады видеть вас в качестве наших клиентов.</p>
        </div>
	</div>
</div>

			<div class="home-slider home-slider_top">
				<div>
					<img src="../img/content/himchistka-salona-avto-2/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Химчистка<span>Мегаакция</span></p>
                            <p>Салона авто</p>
							<p class="text-yellow">ВЫПОЛНИМ ХИМЧИСТКУ САЛОНА ПО ВАШЕЙ ЦЕНЕ! <a data-toggle="modal" class="modal_text" href="#yslovie">*</a></p>         
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Предложить свою цену</a>
						</div>
					</div>
				</div>
				<div>
					<img src="../img/content/himchistka-salona-avto-2/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Химчистка<span>Мегаакция</span></p>
                            <p>Салона авто</p>
							<p class="text-yellow">ВЫПОЛНИМ ХИМЧИСТКУ САЛОНА ПО ВАШЕЙ ЦЕНЕ! <a data-toggle="modal" class="modal_text" href="#yslovie">*</a></p>         
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Предложить свою цену</a>
						</div>
					</div>
				</div>
                <div>
					<img src="../img/content/himchistka-salona-avto-2/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Химчистка<span>Мегаакция</span></p>
                            <p>Салона авто</p>
							<p class="text-yellow">ВЫПОЛНИМ ХИМЧИСТКУ САЛОНА ПО ВАШЕЙ ЦЕНЕ! <a data-toggle="modal" class="modal_text" href="#yslovie">*</a></p>         
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Предложить свою цену</a>
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
				<div class="free-text"><span class="text-red">ДОВЕРЬТЕ АВТО ПРОФЕССИОНАЛАМ!</span></div>
			</div>

			<!-- /free -->
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

						<p>Самые низкие цены в Минске на большинство услуг нашего автосервиса. <br>Высокое качество!</p>

					</div>

				</div>

				<div class="col-sm-4">

					<div class="advantages-block">

						<div class="span sprites i-advantages-3"></div>

						<div class="title">удобное расположение</div>

						<p>Выполнить химчистку вы можете на 4-х наших Автомойках в разных районах Минска! Что очень удобно!</p>

					</div>

				</div>

			</div>

			<!-- /advantages -->
			<!-- services -->

			<div class="services">

				<div class="title text-center">ХИМЧИСТКА САЛОНА АВТОМОБИЛЯ В МИНСКЕ</div>

				<div class="row">
                    <div class="col-sm-6">
                        <p>«Мегасервис» - это самые низкие цены на широчайший комплекс услуг по обслуживанию автомобилей в Минске.</p>
                        <p>Химчистка салона авто в Минске – одна из услуг предоставляемых нашей компанией. Наши специалисты произведут работу так, что внутри салона не останется и намека на то, что машина была в неприглядном виде.</p>
						<p>Устали от засаленных пятен, волос и шерсти на сидениях, полики потеряли свой первоначальный вид из-за налипшей грязи? На торпедке толстый слой пыли, а в пепельницах пепел от сигарет? Наши мастера справятся с любыми загрязнениями.</p>
                    </div>
                    
                    <div class="col-sm-6">
                        <img class="wid" src="../img/content/himchistka-salona-avto-2/1.png" alt="">
                    </div>
                </div>
                
				<div class="row wrap-services mobile-row">

					<div class="col-xs-12 col-sm-4">

						<a href="#" class="services-block">

							<img src="/img/content/himchistka-salona-avto-2/2.png" alt="">

							<span class="services-text">Химчистка салона (турбо-химчистка)</span>

						</a>

					</div>

					<div class="col-xs-12 col-sm-4">

						<a href="http://megaservice.by/polirovka-kuzova/" class="services-block">

							<img src="/img/content/himchistka-salona-avto-2/3.png" alt="">

							<span class="services-text">Полировка фар </span>

						</a>

					</div>

					<div class="col-xs-12 col-sm-4">

						<a href="http://megaservice.by/polirovka-kuzova/" class="services-block">

							<img src="/img/content/himchistka-salona-avto-2/4.png" alt="">

							<span class="services-text">Полировка кузова (сезонная, глубокая)</span>

						</a>

					</div>

                </div>

				<div class="row wrap-services mobile-row">	

					<div class="col-xs-12 col-sm-4">

						<a href="http://megaservice.by/bespokrasochnoe-udalenie-vmyatin/" class="services-block">

							<img src="/img/content/himchistka-salona-avto-2/5.png" alt="">

							<span class="services-text">Беспокрасочное удаление вмятин (низкие цены)</span>

						</a>

					</div>

					<div class="col-xs-12 col-sm-4">

						<a href="" class="services-block">

							<img src="/img/content/himchistka-salona-avto-2/6.png" alt="">

							<span class="services-text">Ремонт и замена автостекол (устранение сколов)</span>

						</a>

					</div>

					<div class="col-xs-12 col-sm-4">

						<a href="http://megaservice.by/" class="services-block">

							<img src="/img/content/himchistka-salona-avto-2/7.png" alt="">

							<span class="services-text">Услуги автосервиса</span>

						</a>

					</div>

				</div>

			</div>

			<!-- /services -->

			

			<!-- price -->
			<div class="price">
				<div class="title text-center">Цены на услуги</div>
				<div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table price-table">
                                <tr>
                                    <th>№</th>
                                    <th>Наименование работ</th>
                                    <th>Стоимость работ</th>
                                    <th>Цена с МЕГА СКИДКОЙ</th>
                                </tr>
                                <tr>
                                    <td>01.</td>
                                    <td>Химчистка одного элемента</td>
                                    <td>от 20 руб.</td>
                                    <td><span class="text-red">от 10 руб.</span></td>
                                </tr>
                                <tr>
                                    <td>02.</td>
                                    <td>Химчистка потолка</td>
                                    <td>от 50 руб.</td>
                                    <td><span class="text-red">от 25 руб.</span></td>
                                </tr>
                                <tr>
                                    <td>03.</td>
                                    <td>Полная химчистка авто</td>
                                    <td>от 110 руб.</td>
                                    <td><span class="text-red">от 50  руб.</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
				<div class="price-buttons">

					<p>Закажите химчистку Вашего автомобиля в НОЯБРЕ получите <span class="text-red">скидку до 50%</span></p>

					<p>

						<a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на химчистку</a>

						<a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>

					</p>

				</div>

			</div>

			<!-- /price -->

			
            
            
            <!-- services-2 -->

			<div class="services services-2">
				<div class="title text-center">ПРИ ЗАКАЗЕ ХИМЧИСТКИ ЛИБО ПОЛИРОВКИ У НАС —<br><span class="text-red">ВЫ ПОЛУЧАЕТЕ СКИДКУ ДО 50% И РЯД УСЛУГ В ПОДАРОК!</span></div>
                
				<div class="row wrap-services mobile-row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a class="services-block">
							<img src="/img/content/himchistka-salona-avto-2/2-2.png" alt="">
							<span class="services-text">Полная МЕГАМОЙКА всего вашего автомобиля - вы уедете на идеально чистой машине!</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a class="services-block">
							<img src="/img/content/himchistka-salona-avto-2/3-3.png" alt="">
							<span class="services-text">Выполним обработку кузова НАНО полимерным воском с гидрофобным эффектом</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a class="services-block">
							<img src="/img/content/himchistka-salona-avto-2/4-4.png" alt="">
							<span class="services-text">Отбелим диски и выполним чернение резины</span>
						</a>
					</div>
                    <div class="col-xs-12 col-sm-6 hidden-md hidden-lg">
						<a class="services-block">
							<img src="/img/content/himchistka-salona-avto-2/5-5.png" alt="">
							<span class="services-text">Прочистим и продуем воздуховоды + в подарок АРОМАТИЗАЦИЯ салона!</span>
						</a>
					</div>
                </div>
				<div class="row wrap-services mobile-row">	
					<div class="hidden-xs hidden-sm col-md-4">
						<a class="services-block">
							<img src="/img/content/himchistka-salona-avto-2/5-5.png" alt="">
							<span class="services-text">Прочистим и продуем воздуховоды + в подарок АРОМАТИЗАЦИЯ салона!</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a class="services-block">
							<img src="/img/content/himchistka-salona-avto-2/6-6.png" alt="">
							<span class="services-text">НИКАКИХ ДОПЛАТ! Химчистка багажника и детского кресла в ПОДАРОК!</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a class="services-block">
							<img src="/img/content/himchistka-salona-avto-2/7-7.png" alt="">
							<span class="services-text">Обязательно подарим скидочную карту на услуги наших автомоек и автосервиса!</span>
						</a>
					</div>
				</div>
                
                <div class="price-buttons">
					<p>
						<a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться прямо сейчас</a>
					</p>
				</div>
                
			</div>

			<!-- /services -->
            
            <!-- comparison -->

            <div class="wrap-comparison">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="title__comparison">До химчистки</div>
                        <div class="img__comparison text-center">
                            <img src="../img/content/himchistka-salona-avto-2/a1.jpg"  alt="">
                        </div>
                    </div> 
                    <div class="col-sm-6">
                        <div class="title__comparison red">После химчистки <span class="hidden-sm">в мегасервис</span></div>
                        <div class="img__comparison text-center red">
                            <img src="../img/content/himchistka-salona-avto-2/a2.jpg"  alt="">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-comparison">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="hidden-lg hidden-md hidden-sm title__comparison">До химчистки</div>
                        <div class="img__comparison text-center">
                            <img src="../img/content/himchistka-salona-avto-2/a5.jpg"  alt="">
                        </div>
                    </div> 
                    <div class="col-sm-6">
                        <div class="hidden-lg hidden-md hidden-sm title__comparison red">После химчистки <span class="hidden-sm">в мегасервис</span></div>
                        <div class="img__comparison text-center red">
                            <img src="../img/content/himchistka-salona-avto-2/a6.jpg"  alt="">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-comparison">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="hidden-lg hidden-md hidden-sm title__comparison">До химчистки</div>
                        <div class="img__comparison text-center">
                            <img src="../img/content/himchistka-salona-avto-2/a3.jpg"  alt="">
                        </div>
                    </div> 
                    <div class="col-sm-6">
                        <div class="hidden-lg hidden-md hidden-sm title__comparison red">После химчистки <span class="hidden-sm">в мегасервис</span></div>
                        <div class="img__comparison text-center red">
                            <img src="../img/content/himchistka-salona-avto-2/a4.jpg"  alt="">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /comparison -->
            
            
            
            <div class="block_text">
				<div class="free-text"><span class="text-red">ВЫПОЛНИТЬ ХИМЧИСТКУ ВЫ МОЖЕТЕ:</span></div>
                <div class="block_text_name"><span>01.</span>автосервисный центр «мегасервис»</div>
                <div class="block_text_address"><span class="text-blue">Минск, ул.Короля 88 (у ТЦ Корона на Кальварийской)</span></div>
                <a href="tel:+375296384455" class="block_text_tel"><span class="text-red"><img src="../img/content/himchistka-salona-avto-2/tel.png" alt="">+375 (29) 638-44-55</span></a>
			</div>
            
            <div class="row">
                <div class="col-sm-4">
                    <div class="block_text block_text_col">
                        <div class="block_text_name"><span>02.</span>Автомойка <br> «мегамойка»</div>
                        <div class="block_text_address"><span class="text-blue">Минск, ул. Корженевского 16В</span></div>
                        <a href="tel:+375296217788" class="block_text_tel"><span class="text-red"><img src="../img/content/himchistka-salona-avto-2/tel.png" alt="">+375 (29) 621-77-88</span></a>
        			</div>
                </div>
                <div class="col-sm-4">
                    <div class="block_text block_text_col">
                        <div class="block_text_name"><span>03.</span>«автомойка»<br> на нововиленской</div>
                        <div class="block_text_address"><span class="text-blue">Минск, ул. Нововиленская 48</span></div>
                        <a href="tel:+375296345788" class="block_text_tel"><span class="text-red"><img src="../img/content/himchistka-salona-avto-2/tel.png" alt="">+375 (29) 634-57-88</span></a>
        			</div>
                </div>
                <div class="col-sm-4">
                    <div class="block_text block_text_col">
                        <div class="block_text_name"><span>04.</span>Автомоечный центр<br> на шабаны</div>
                        <div class="block_text_address"><span class="text-blue">Минск, ул. Селицкого 39Б</span></div>
                        <a href="tel:+375296317688" class="block_text_tel"><span class="text-red"><img src="../img/content/himchistka-salona-avto-2/tel.png" alt="">+375 (29) 631-76-88</span></a>
        			</div>
                </div>
            </div>
            
            

			<!-- consultation -->

			<div class="wrap-consultation">

				<div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i>на химчистку вы можете по телефонам:</i></div>

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

			
<h2><span>Химчистка салона автомобиля</span></h2>
<p>Салон автомобиля – лицо владельца авто. Даже новый салон рано или поздно становиться грязным и дело вовсе не в неопрятности владельца. Уличная грязь, шерсть животных, волосы, запахи еды и бензины могут въесться в обивку так, что собственными силами такие загрязнения удалить вряд ли удастся</p>
<p>Проводить чистку собственными силами не рекомендуется, т.к. это может лишь усугубить ситуацию. Грязь равномерно размажется по салону. Неверные пропорции химических средств могут стать причиной появления дыр на обивке салона и сидений. Конечно, сегодня на мойках предлагают услуги уборки салонов. Однако не стоит путать уборку и химчистку. Во время уборки удаляются только поверхностные пятна, в то время как использование специальных химических средств позволяет справиться с глубокими загрязнениями, въевшейся грязью, болезнетворными бактериями, неприятными запахами.</p>
<p>Комплексная химчистка салона автомобиля в Минске включает:</p>
<p>&bull;&emsp;сухую чистку с использованием быстросохнущих составов. Особой эффективности можно добиться благодаря мощному пылесосу со специальными насадками;<br>&bull;&emsp;разборку обшивки и других комплектующих (при необходимости);<br>&bull;&emsp;влажную чистку с применением специальных химических средств;<br>&bull;&emsp;просушку салона;<br>&bull;&emsp;дезодорирование салона (позволяет избавиться от неприятных въевшихся запахов).</p>
<p>Для удаления особо стойких пятен, въевшихся в обивку, применяются специальные пятновыводители, которые подбираются мастерами исходя из следующих показателей:</p>
<p>&bull;&emsp;характер загрязнения;<br>&bull;&emsp;масштаб;<br>&bull;&emsp;материал обрабатываемой поверхности.</p>
<p>Во время чистки не упускаются из виду даже такие детали как петли дверей, верхние части порогов, коврики в салоне.</p>
<p>Для обработки пластиковых деталей, натуральной кожи, кожзаменителя, используются специальные средства, придающие деталям первоначальный вид. Профессиональная химчистка салона гарантирует, что даже в труднодоступных местах не будет и следа от грязи и пыли. Неприятные запахи исчезнут, поверхности тканевой обивки приобретет шелковистость, фактура и цвет будут восстановлена.</p>
<p>Средства, используемые нами во время работ, не имеют запаха, не нанесут вреда человеческому здоровью и не навредят домашним животным.</p>
<h3><span>Основные этапы работы</span></h3>
<p>Тщательной обработке подвергаются все элементы авто. Перед началом работ рекомендуется убрать из салона все лишние вещи, в особенности мелкие. Если во время работы в салоне будут найдены посторонние предметы, мешающие чистке, они будут извлечены, упакованы в пакет и в дальнейшем возвращены владельцу.</p>
<p>В начале работ, чистка производиться при помощи специального пылесоса, в комплектации которого имеются насадки, позволяющие обработать всю поверхность салона, включая багажник. Далее проводится очистка пластиковых, кожаных и тканевых поверхностей с использованием специальных чистящих средств. Профессиональные средства позволяют добиться желаемого результата даже при удалении трудновыводимых загрязнений. Химчистка позволяет устранить любые типы пятен с любой поверхности, которая впоследствии приобретает заводской вид.</p>
<p>Финальный этап работ включает обработку салона с применением специальных полиролей и кондиционеров. В состав специальных средств входят компоненты, предотвращающие растрескивание кожи и пластика, выцветанию тканевых обивок.</p>
<p>Наши мастера проводят химчистку салона любых марок автомобилей вне зависимости от степени загрязнения.</p>

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

							<img src="/img/content/scep1.jpg" alt="" class="img-responsive">

							<div class="progress rating">

								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>

							</div>

						</div>

						<div class="review-text">

							<p><i>Клиент</i></p>

							<div class="name">Олег Кравченко <span class="text-red">48</span></div>

							<div class="review-text-block">

								<p>Отличные сервис, низкие цены и удобное расположение. Заменили корзину сцепления за пару часов, отдал 110 рублей. Еще и помыли в подарок! Молодцы!</p>

							</div>

							<div class="post-date">17 августа 2017</div>

						</div>

					</div>

				</div>

				<div>

					<div class="review-block clearfix">

						<div class="review-image">

							<img src="/img/content/scep2.jpg" alt="" class="img-responsive">

							<div class="progress rating">

								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>

							</div>

						</div>

						<div class="review-text">

							<p><i>Деловая сеть, водитель</i></p>

							<div class="name">Александр Мартыненко <span class="text-red">27</span></div>

							<div class="review-text-block">

								<p>«Работаем с ребятами по безналу, очень довольны обслуживанием и выгодными условиями. Действительно низкие цены, при этом очень приличный автосервис. Рекомендую.»</p>

							</div>

							<div class="post-date">15 июня 2017</div>

						</div>

					</div>

				</div>

				<div>

					<div class="review-block clearfix">

						<div class="review-image">

							<img src="/img/content/scep3.jpg" alt="" class="img-responsive">

							<div class="progress rating">

								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>

							</div>

						</div>

						<div class="review-text">

							<p><i>Автолюбитель</i></p>

							<div class="name">Леонид Подберезкин <span class="text-red">57</span></div>

							<div class="review-text-block">

								<p>«Стаж вождения более 30 лет и могу уверенно сказать, что ребята знают и умеют работать. Главный и существенный плюс - это цена, у них она низкая!»</p>

							</div>

							<div class="post-date">03 мая 2017</div>
				
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

								<li><a href="http://megaservice.by/himchistka-salona-avto/">Химчистка салона</a></li>

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

					<p>Юр. адрес: г. Минск, ул.Короля 88.  Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-сб), 09:00 - 21:00 (вс)</p>

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

		  dots: true,
          arrows: false

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

	<link rel="stylesheet" href="/himchistka-salona-avto/css/style.css">

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

!-- Begin Talk-Me {literal} -->
<script type='text/javascript'>
	(function(d, w, m) {
		window.supportAPIMethod = m;
		var s = d.createElement('script');
		s.type ='text/javascript'; s.id = 'supportScript'; s.charset = 'utf-8';
		s.async = true;
		var id = '0670be2ebba61e7e44320a405b69c120';
		s.src = '//lcab.talk-me.ru/support/support.js?h='+id;
		var sc = d.getElementsByTagName('script')[0];
		w[m] = w[m] || function() { (w[m].q = w[m].q || []).push(arguments); };
		if (sc) sc.parentNode.insertBefore(s, sc); 
		else d.documentElement.firstChild.appendChild(s);
	})(document, window, 'TalkMe');
</script>
<!-- {/literal} End Talk-Me -->
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

