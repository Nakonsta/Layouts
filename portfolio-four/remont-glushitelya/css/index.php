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

    $from='Мегасервис ремонт глушителя заявка'; 

	

    mail($to,  "From:".$from, $message ); 

    

};

?>

<!doctype html>

<html lang="ru"> 

<head>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<meta name="viewport" content="width=device-width">



	<title>Ремон и установка глушителей от Мегасервис</title>

	<link rel="stylesheet" href="/css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="/css/slick.css">

	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<link rel="stylesheet" href="/css/style.css?2">

	<link rel="stylesheet" href="/remont-glushitelya/css/style.css">

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

</head>

<body>

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

				    <div class="header__fixed_operators"><a href="callto:672-73-88"><img src="/img/operator.png" alt="" ></a></div>					

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

					<li><a href="#">О компании</a></li>

					<li><a href="#">Информация</a></li>

					<li><a href="#">Отзывы</a></li>



					<li><a href="#">Акции</a></li>

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


								<li class="visible-xs"><a href="#">Акции</a></li>

								<li class="dropdown">

								    <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span>Услуги </span><span class="sprites i-caret"></span></a>

									<ul class="dropdown-menu" role="menu">

										<li><a href="http://megaservice.by/oil/">замена масла</a></li>
										 
										 <li><a href="http://megaservice.by/diagnostika-remont-podveski/">диагности подвески</a></li>
										
										<li><a href="http://megaservice.by/remont-glushitelya/">ремонт глушителей</a></li>
										
										<li><a href="http://megaservice.by/protochka-tormoznyh-diskov/">проточка тормозных дисков</a></li>
										
										<li><a href="http://megaservice.by/shinomontazh/">шиномонтаж</a></li>

									</ul>

								</li>

								<li><a href="#"><span>спецпредложения</span></a></li>

								<li><a href="#"><span>цены</span></a></li>

								<li><a href="#"><span>Контакты</span></a></li>

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

					<img src="/img/content/remont-glushitelya/header.png" alt="">

					<div class="slider-content">

						<div class="text-center">

							<p>РЕМОНТ И УСТАНОВКА</p>

							<p> <span class="text-red">ГЛУШИТЕЛЕЙ В МИНСКЕ</span></p>

							<div class="red-block">Самые низкие цены в Минске!</div>

							<div class="red-text-small">Опытный сварщик 6-го разряда!</div>

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

				<div class="free-text">При ремонте глушителя Диагностика подвески <span class="text-red">в подарок!</span></div>

			</div>

			<!-- /free -->

			<!-- services -->

			<div class="services">

				<div class="title">Профессиональная замена глушителей в Минске</div>

				<p>--</p>

				<p>--</p>

				<p><strong>МегаСервис предоставляет весь спектр услуг по ремонт, замене и тюнингу выхлопных систем:</strong></p>

                <div class="row">

                    <div class="col-sm-7">

                        <ul class="red_list">

                            <li><a href="">Сварка колен глушителя</a></li>

                            <li><a href="">Замена гофр, труб</a></li>

                            <li><a href="">Полная замена элементов глушителя</a></li>

                            <li><a href="">Замена или удаление сажевого фильтра</a></li>

                            <li><a href="">Замена катализатора</a></li>

                            <li><a href="">Сварка глушителя </a></li>

                        </ul>

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

                    <div class="title text-center">Стоимость работ</div>

                    <div class="table-responsive">

                        <table class="table price-table">

                            <tr>

                                <th>№</th>

                                <th>Наименование работ</th>

                                <th>Стомость работ</th>

                                <th>Цена со скидкой 25%</th>

                            </tr>

                            <tr>

                                <td>01</td>

                                <td>Замена катализатора</td>

                                <td>2 500 руб.</td>

                                <td>2 100 руб.</td>

                            </tr>

                            <tr>

                                <td>02</td>

                                <td>Замена или удаление сажевого фильтра</td>

                                <td>32 750 руб.</td>

                                <td>29 750 руб.</td>

                            </tr>

                            <tr>

                                <td>03</td>

                                <td>Полная замена элементов глушителя</td>

                                <td>3 250 руб.</td>

                                <td>2 750 руб.</td>

                            </tr>

                        </table>

                    </div>



                </div>

                <div class="price-buttons">

                    <p>Закажите Ремонт выхлопной системы на этой неделе и получите <span class="text-red">скидку до 25%</span></p>

                    <p>

                        <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на проточку</a>

                        <a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>

                    </p>

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

				<p>--</p>

				<p>-</p>

				 <ol>

                    <li> </li>

                    <li> </li>

                    <li> </li>

					 <li> </li>

					  <li> </li>

					   <li> </li>

                </ol>
				
				<ul class="red_circle">
			<li><span>Амортизаторов;</span></li>
			<li><span>Пружин;</span></li>
			<li><span>Рычагов;</span></li>
			<li><span>Сайлентблоков;</span></li>
			<li><span>Шаровых опор;</span></li>
			<li><span>Шрусов.</span></li>
		</ul>


				

                <p>

               </p>

                <p>--</p>

            

                <h3>--</h3>

                

                <ol>

                    <li>- </li>

                    <li>-- </li>

                    <li>- </li>

					<li>- </li>

					<li>--  </li>

					<li>- </li>

					<li>-  </li>

					<li>- </li>

                </ol>

				<p>--</p>

                <p>--</p>



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

								<p>«О--»</p>

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

								<p>«--»</p>

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

								<p>«--»</p>

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

								<p>«--»</p>

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

		<div id="map" class="map-margin"></div>

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

                                <li><a href="#">Контактные данные</a></li>


							</ul>

						</div>

						<div class="col-sm-3 col-lg-3">

							<div class="title-small">мегасервис</div>

							<ul class="footer-nav">

								<li><a href="#">О нашей компании</a></li>

								<li><a href="#">Вакансии открытые</a></li>

								<li><a href="#">Реквизиты организации</a></li>

								<li><a href="#">Контактные данные</a></li>

							</ul>

						</div>

					</div>

				</div>

			</div>

			<!-- /footer-block -->

			<div class="container">

				<div class="copyright">

					<p>© Copyright. Все права защищены.  ООО «Отель Сервис Групп».</p>

					<p>Юр. адрес: г. Минск. ул. Селицкого 39Б.  Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-сб), 09:00 - 18:00 (вс)</p>

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



	<!-- map -->

	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <script type="text/javascript">

        ymaps.ready(init);

			  function init () {

			    var myMap = new ymaps.Map("map", {

			    center: [53.90471857067563,27.528126500000003],

			    zoom:16,

			    controls: ["zoomControl"]

			  });

			  myMap.behaviors.disable('scrollZoom');

			  myMap.controls.add('fullscreenControl',{float: 'left'});

			  // Создаем геообъект с типом геометрии "Точка".

			  myGeoObject = new ymaps.GeoObject();

			  myMap.geoObjects

			  .add(new ymaps.Placemark([53.90471857067563,27.528126500000003], {

			     balloonContent: 'Минск, ул. Короля 88'

			  }, {

			     // Опции.

			        // Необходимо указать данный тип макета.

			        iconLayout: 'default#image',

			        // Своё изображение иконки метки.

			        iconImageHref: '/img/i-map.png',

			        // Размеры метки.

			        iconImageSize: [134, 127],

			        // Смещение левого верхнего угла иконки относительно

			        // её "ножки" (точки привязки).

			        iconImageOffset: [-60, -127]

			  }));

			}

    </script>

</body>

</html>

