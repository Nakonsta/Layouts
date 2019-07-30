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

	Электронный адрес:'.$_POST['email'].' 

	Вопрос:'.$_POST['question'].'

	Коментарий:'.$_POST['comment'];

	$message = iconv("utf-8", "windows-1251", $mess);

    // $to - кому отправляем 

    $to = 'megaminsk@inbox.ru'; 

    // $from - от кого 

    $from='МЕГАСЕРВИС АВТОЗАПЧАСТИ'; 

	

    mail($to,  "From:".$from, $message ); 

    

};

?>

<!doctype html>

<html lang="ru"> 

<head>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<meta name="viewport" content="width=device-width">



	<title>«Мегасервис» Масла</title>

	<link rel="stylesheet" href="/css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="/css/slick.css">

	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<link rel="stylesheet" href="/css/style.css?2">

	<link rel="stylesheet" href="/zapchasti_filtr/css/style.css">

	<link rel="icon" href="/img/favicon.ico">  


</head>

<body>

    <div class="header__fixed">

        <div class="container">

            <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 header__fixed_logo_contanier">

			    <div class="logo"><a href="/"><img src="../img/logo.png" alt="" class="img-responsive"></a></div>							

			</div>

           <div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 header__fixed_menu_contanier">

			    <a href="#" class="header__fixed_menu" onclick="return false;">Меню</a>							

			</div>

            <div class="col-sm-4 col-lg-5 col-md-5 hidden-xs header__fixed_address_contanier">

			    <address>
                    <a class="scroll_map" href="#map"><img src="../img/content/zapchasti_filtr/marker.png" alt=""> Минск, ул. Короля, 88 «Мегасервис»</a>
                </address>						

			</div>

           <div class="col-sm-5 col-lg-4 col-md-4 col-xs-9 text-right header__fixed_operators_contanier">

			   <div class="right_top_header">
                    <address>
                        <a class="scroll_map" href="#map"><img src="../img/content/zapchasti_filtr/marker.png" alt=""><span> Минск, ул. Короля, 88 «Мегасервис»</span></a>
                    </address>
                   
                   <div class="phone">
                        <div class="icon">
                            <img src="../img/content/zapchasti_filtr/icon_vel.png" alt="">
                            <img src="../img/content/zapchasti_filtr/icon_mts.png" alt="">
                        </div>
                        <a class="tel" href="callto:+375296384455">638-44-55</a>
                        <div class="icon">
                            <span>VELCOM</span>
                            <a class="block_phone_click_top" href="#">MTC</a>
                        </div>
                        <div class="clear"></div>
                        <div class="block_phone_show_top">
                            <div class="block_phone">
                                        <p class="name">Магазин Автозапчастей</p>
                                        <a href="callto:+375336384455"><span>+375 33</span> 638-44-55</a>
                                        <a href="callto:+375296384455"><span>+375 29</span> 638-44-55</a>
                                        <p class="address">Минск, ул. Короля, 88</p>
                                    </div>
                                    <div class="block_phone">
                                        <p class="name">Автосервис «Мегасервис»</p>
                                        <a href="callto:+375336274488"><span>+375 33</span> 627-44-88</a>
                                        <a href="callto:+375296274488"><span>+375 29</span> 627-44-88</a>
                                        <p class="address">Минск, ул. Короля, 88</p>
                                    </div>
                                    <div class="block_phone">
                                        <p class="name">Автомойка</p>
                                        <a href="callto:+375335357615"><span>+375 33</span> 535-76-15</a>
                                        <a href="callto:+375445957555"><span>+375 44</span> 595-75-55</a>
                                        <p class="address">Минск, ул. Короля, 88</p>
                            </div>
                        </div>
    				</div>
               </div>				

			</div>

        </div>

    </div>

	<div id="wrap">

		<!-- wrap-home-slider -->
		<div class="wrap-home-slider">
			<!-- header -->
			<header>
            
                <div class="block_top_header">
                    <div class="container">
                        <div class="name">Гарантия лучшей цены!</div>
                        <div class="arrow_block">Нашли дешевле?<br> Снизим цену!</div>
                        <a href="#callback" data-toggle="modal" class="btn btn-callback">Перезвоните мне</a>
                    </div>
                </div>
            
				<div class="container">
					<div class="row mobile-row">
						<div class="col-sm-3 col-lg-6 col-md-4 col-xs-5">
							<div class="logo"><a href="/"><img src="../img/logo.png" alt="" class="img-responsive"></a></div>
							<address>
                                <a class="scroll_map" href="#map"><img src="../img/content/zapchasti_filtr/marker.png" alt=""> Минск, ул. Короля, 88 </a>
                                <span>100м от ТЦ "Корона" Кальварийская</span>
                            </address>
						</div>
						<div class="col-sm-9 col-lg-6 col-md-8 col-xs-7">
							<!-- phone -->
							<div class="phone">
                                <div class="icon">
                                    <img src="../img/content/zapchasti_filtr/icon_vel.png" alt="">
                                    <img src="../img/content/zapchasti_filtr/icon_mts.png" alt="">
                                </div>
                                <a class="tel" href="callto:+375296384455">638-44-55</a>
                                <div class="icon">
                                    <span>VELCOM</span>
                                    <a class="block_phone_click" href="callto:+375336384455">MTC</a>
                                </div>
                                <div class="clear"></div>
                                <div class="block_phone_show">
                                    <div class="block_phone">
                                        <p class="name">Магазин Автозапчастей</p>
                                        <a href="callto:+375336384455"><span>+375 33</span> 638-44-55</a>
                                        <a href="callto:+375296384455"><span>+375 29</span> 638-44-55</a>
                                        <p class="address">Минск, ул. Короля, 88</p>
                                    </div>
                                    <div class="block_phone">
                                        <p class="name">Автосервис «Мегасервис»</p>
                                        <a href="callto:+375336274488"><span>+375 33</span> 627-44-88</a>
                                        <a href="callto:+375296274488"><span>+375 29</span> 627-44-88</a>
                                        <p class="address">Минск, ул. Короля, 88</p>
                                    </div>
                                    <div class="block_phone">
                                        <p class="name">Автомойка</p>
                                        <a href="callto:+375335357615"><span>+375 33</span> 535-76-15</a>
                                        <a href="callto:+375445957555"><span>+375 44</span> 595-75-55</a>
                                        <p class="address">Минск, ул. Короля, 88</p>
                                    </div>
                                </div>
							</div>
							<!-- /phone -->
							<!-- callback -->
							<div class="callback">
								<a href="" class="btn btn-callback">Бесплатная доставка</a>
								<p>9:00-21:00 без выходных</p>
							</div>
							<!-- /callback -->
						</div>
					</div>
				</div>


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
								<li class="visible-xs"><a href="http:">Акции</a></li>
								<li>
								    <a class="btn_open" href="#"><span>Акции </span><span class="sprites i-caret"></span></a>
                                    <div class="content_open">
                                        <div class="container">
                                            <div class="block_link">
											<div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#"> *при покупке у нас <span></span></a>
														<span>БЕСПЛАТНО ЗАМЕНИМ!!!</span>
														    <li><a href="#">Моторное масло</a></li>
                                                            <li><a href="#">Аккумулятор</a></li>
                                                            <li><a href="#">Автомобильную резину</a></li>
                                                            <li><a href="#">Автомобильные диски</a></li>
                                                            <li><a href="#">Стеклоомывающую жидкость</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
													 <ul><a href="#"> *при покупке у нас <span></span></a>
														<span>СКИДКА 30%</span>
                                                            <li><a href="#">Мойка автомобиля</a></li>
                                                            <li><a href="#">Замена автостекол</a></li>
                                                            <li><a href="#">Заправка кондиционера</a></li>
                                                            <li><a href="#">Шиномонтаж</a></li>
															<li><a href="#">Химчистка авто</a></li>
															<li><a href="#">Полировка кузова</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">СКИДКА 25% на замену ЗАПЧАСТЕЙ<span></span></a>
                                                            <li><a href="#">ВСЕХ ЗАПЧАСТЕЙ приобретенных в нашем магазине</a></li>
                                                            <li><a href="#">Ремонт автомобиля</a></li>
                                                            <li><a href="#">Компьютерную диагностику</a></li>
                                                            <li><a href="#">Замена фильтров и тех. жидкостей</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

								</li>
								<li><a href=""><span>гарантии</span></a></li>
								<li><a href=""><span>отзывы</span></a></li>
								<li><a href=""><span>Контакты</span></a></li>
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
					<img class="img_header" src="../img/content/zapchasti_filtr/header.jpg" alt="">                      
					<div class="slider-content">
						<div class="text-center">
                            <img src="../img/content/zapchasti_filtr/5.png" alt="">
                            <p>ЗАМЕНА ФИЛЬТРОВ АВТО</p>
                            <p><span class="text-red">ЗА 20 МИНУТ</span></p>
                            <div class="white-block"><span>САМАЯ НИЗКАЯ ЦЕНА!</span></div>
                            
                            <a href="#question-modal" data-toggle="modal" class="btn btn-red"><b>-25%</b> Рассчитать стоимость <span>Замены на нашем СТО -25%</span></a>
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Подобрать запчасть <span>Доверьте подбор специалисту</span></a>
                            
						</div>
					</div>
				</div>
			</div>

			<!-- /home-slider -->


		</div>

		<!-- /wrap-home-slider -->

<div class="block_card">
    <div class="card"></div>
</div>


		<div class="container">
        
            <!-- free -->
			<div class="free-block">
				<span class="sprites i-free-oil"><span class="free-price">0<sup> ₽</sup></span></span>
				<div class="free-text"><span class="text-red">Бесплатная замена </span>масла в нашей мастерской!</div>
			</div>
			<!-- /free -->
            
            <!-- services -->
			<div class="services">
				<div class="title">ЗАМЕНА ФИЛЬТРОВ АВТОМОБИЛЯ</div>
				<p>Профессиональная экспресс замена автомобильных масел, других технических жидкостей и фильтров. Наш центр Экспресс замены масла находится в самом центре Минска, в 100 метрах от ТЦ Корона по ул. Кальварийская.</p>
				<p>Оригинальные моторные и трансмиссионные масла по самым выгодным ценам в Минске. Все клиенты получают скидочную карту на весь спектр автоуслуг на наших автосервисах и автомойках.</p>
				<div class="row wrap-services mobile-row">
					<div class="col-xs-6 col-md-3">
						<a href="#" class="services-block">
							<img src="/img/content/zapchasti_filtr/1.png" alt="">
							<span class="services-text">Замена топливного фильтра</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="services-block">
							<img src="/img/content/zapchasti_filtr/2.png" alt="">
							<span class="services-text">Замена салонного фильтра</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="services-block">
							<img src="/img/content/zapchasti_filtr/3.png" alt="">
							<span class="services-text">Замена воздушного фильтра</span>
						</a>
					</div>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="services-block">
							<img src="/img/content/zapchasti_filtr/4.png" alt="">
							<span class="services-text">Замена маслянного фильтра</span>
						</a>
					</div>
				</div>
			</div>
			<!-- /services -->
            
            <!-- price -->
			<div class="price">
				<div class="title text-center">В НАЛИЧИИ ШИРОКИЙ ВЫБОР МАСЕЛ И ФИЛЬТРОВ</div>
				<div class="table-responsive">
					<table class="table price-table">
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
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
					<p>ЗАКАЖИТЕ ЗАМЕНУ ФИЛЬТРОВ НА ЭТОЙ НЕДЕЛЕ И ПОЛУЧИТЕ <span class="text-red">СКИДКУ -25% НА ЗАМЕНУ</span></p>
					<p>
						<a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на замену</a>
						<a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>
					</p>
				</div>
			</div>
			<!-- /price -->
            
            <!-- advantages -->
			<div class="row">
				<div class="col-sm-3">
					<div class="advantages-block">
						<div class="span sprites i-advantages-1"></div>
						<div class="title">7.5 лет опыта</div>
						<p>Работы в сфере автоуслуг:</p>
						<ul>
							<li>—  Сеть автомоек «МЕГАМОЙКА»</li>
							<li>—  Центр замены масел</li>
							<li>—  Шинный центр</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="advantages-block">
						<div class="span sprites i-advantages-2"></div>
						<div class="title">низкие цены</div>
						<p>Самые низкие цены в Минске на большинство услуг нашего автосервиса. <br>Не упустите выгоду</p>
					</div>
				</div>
                <div class="col-sm-3">
					<div class="advantages-block">
						<div class="span sprites i-advantages-4"></div>
						<div class="title">бесплатная доставка</div>
						<p>В пределах Минска и близ-лежащие районы. Мы всегда заботимся о Вас.</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="advantages-block">
						<div class="span sprites i-advantages-3"></div>
						<div class="title">центр минска</div>
						<p>Мы находимся в 100 метрах от торгового центра Корона Кальварийская и в 2-х минутах от Метро.</p>
					</div>
				</div>
			</div>
			<!-- /advantages -->
            
        
            <div class="row">
                <div class="block_banner">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="block_banner_text">
                            <img src="../img/drop.png" alt="">
                            <p>ЗАМЕНИМ МАСЛО В ДВИГАТЕЛЕ</p>
                            <div class="title-big">БЕСПЛАТНО - 0 ₽</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img class="banner_img img-responsive" src="../img/content/zapchasti_filtr/banner_img.png" alt="">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
			
            
            
            <!-- about -->
			<div class="title">О компании «мегасервис»</div>
			<div class="collapse-text collapse" id="about-text">
				<p>«Автосеть» – это компания с опытом работы в автомобильной сфере более 10 лет. За это время «Автосеть» объединила вокруг себя команду настоящих профессионалов, высококлассных специалистов в области продаж автомобильных товаров и оказания сервисных услуг. Сегодня «Автосеть» – это разветвлённая сеть торгово-сервисных центров. Мы работаем в Минске, областных центрах страны и городе Бобруйске.</p>
                <p>Мы предлагаем своим покупателям широкий ассортимент автомобильных шин от известных во всём мире производителей. В наличии более 3 000 наименований шин и более 5 000 автотоваров, а также самые современные модели легкосплавных дисков и автомобильных аккумуляторных батарей.</p>
                <p>Мы готовы предложить шины для любой поры года и для любого типа транспортного средства. Будь у вас легковой автомобиль, городской кроссовер, полноприводный внедорожник или лёгкий грузовик – вы найдёте шины для себя. Bridgestone, Continental, Hankook, Michelin, Pirelli, Premiorri, Roadstone, Rosava, Taurus, Toyo – это лишь десяток из сорока брендов, которые постоянно присутствуют в нашем ассортименте. На выбор свыше 400 типоразмеров, самые популярные из которых: 185/65R14, 185/65R15, 195/65R15, 205/65R15, 205/55R16, 205/60R16, 215/65R16, 225/50R17.</p>
                <p>Мы открыты как для физических лиц, так и для бизнеса: малого, среднего, крупного. «Автосеть» предлагает своим клиентам большой перечень товаров грузового сегмента. Шины для тяжёлых грузовых автомобилей, пассажирских автобусов, сельскохозяйственной, индустриальной и строительной техники. Нам доверяют автопарки, заводы, службы такси, промышленные предприятия, организации сферы услуг. Среди наших клиентов ОАО «Белгазпромбанк», МВД РБ, ОАО «МТС» и пр. Корпоративных сектор «Автосеть» – это более 10 000 юридических лиц.</p>
                
			</div>
			<a data-toggle="collapse" href="#about-text" aria-expanded="false" aria-controls="about-text" class="text-red">Показать текст полностью <span class="sprites i-caret-red"></span></a>
			<!-- /about -->

			
            
			<!-- gallery -->

			<div class="title text-center">Фотогалерея</div>
			<div class="gallery-slider">
				<div>
					<a href="/img/content/img1.jpg" data-fancybox="gallery"><img src="/img/content/img1.jpg" alt="" class="img-responsive center-block"></a>
					<p>Полные спектр услуг по ремонту.</p>
				</div>
				<div>
					<a href="/img/content/img9.jpg" data-fancybox="gallery"><img src="/img/content/img9.jpg" alt="" class="img-responsive center-block"></a>
					<p>Продаем автозапчасти 7 дней в неделю!</p>
				</div>
				<div>
					<a href="/img/content/img4.jpg" data-fancybox="gallery"><img src="/img/content/img4.jpg" alt="" class="img-responsive center-block"></a>
					<p>Предоставляем скидки на замену на нашем сто.</p>
				</div>
				<div>
					<a href="/img/content/img11.jpg" data-fancybox="gallery"><img src="/img/content/img11.jpg" alt="" class="img-responsive center-block"></a>
					<p>Комфортные условия ожидания.</p>
				</div>
				<div>
					<a href="/img/content/img10.jpg" data-fancybox="gallery"><img src="/img/content/img10.jpg" alt="" class="img-responsive center-block"></a>
					<p>При покупке моторного масла у нас, замена Бесплатно!</p>
				</div>
				<div>
					<a href="/img/content/img21.jpg" data-fancybox="gallery"><img src="/img/content/img21.jpg" alt="" class="img-responsive center-block"></a>
					<p>Замена автостекол, шиномонтаж, автомойка, автосервис!</p>
				</div>
				<div>
					<a href="/img/content/img8.jpg" data-fancybox="gallery"><img src="/img/content/img8.jpg" alt="" class="img-responsive center-block"></a>
					<p>Предоставляем гарантию на товар!</p>
				</div>
			</div>


			<!-- /gallery -->
            
            
            
		</div>

		<!-- map -->
		<div id="map"></div>
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

							<div class="title-small">Магазин автозапчастей</div>

							<ul class="footer-nav">

								<li><a>Подбор автозапчастей</a></li>

								<li><a>Консультация специалиста</a></li>

								<li><a>Доставка товара</a></li>

								<li><a>Самовывоз в центре Минска</a></li>

								<li><a>Гарантия возврата</a></li>

							</ul>

						</div>

						<div class="col-sm-3 col-lg-3">

							<div class="title-small">Наши услуги</div>

							<ul class="footer-nav">

								<li><a href="">Любой ремонт автомобиля</a></li>

								<li><a href="">Диагностика автомобиля</a></li>

								<li><a href="">Замена масел</a></li>

								<li><a href="">Установка автостекол</a></li>
								
								<li><a href="">Антикоррозийная обработка</a></li>
								
								<li><a href="">Аргонная сварка</a></li>
								
								<li><a href="">Шиномонтаж</a></li>
								
								<li><a href="">Автомойка</a></li>

							</ul>

						</div>

						<div class="col-sm-3 col-lg-3">

							<div class="title-small">МЕГАПРАЙС Автозапчасти</div>

							<ul class="footer-nav">

								<li><a>О компании</a></li>

								<li><a=>Вакансии</a></li>

								<li><a>Реквизиты</a></li>

								<li><a>Контакты</a></li>

							</ul>

						</div>

					</div>

				</div>

			</div>

			<!-- /footer-block -->

			<div class="container">

				<div class="copyright">

					<p>© Copyright. Все права защищены.  ООО «Отель Сервис Групп».</p>

					<p>Юр. адрес: г. Минск. ул. Короля 88, «Мегасервис»    Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-вс) </p>

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






<script type="text/javascript">

    myWidth = window.innerWidth;
    
    if(myWidth*1 <= 767){
        $(".btn_open").click(function(){
    		$(".content_open").slideToggle("normal"); return false;
    	});
    }else{
        $(".btn_open").parents("li").hover(function(){
    		$(".content_open").slideToggle("normal"); return false;
    	});
    }
    
    
    
    $(".block_phone_click_top").click(function(){
		$(".block_phone_show_top").slideToggle("normal"); return false;
	});
    
    $(".block_phone_click").click(function(){
		$(".block_phone_show").slideToggle("normal"); return false;
	});
    
    
        
    $(".block_link ul a").click(function(){
        var dis = $(this).nextAll("li").css("display");
        if(dis == "none"){
            $(this).nextAll("li").slideDown();
            return false;
        }else if(dis == "block"){
            $(this).nextAll("li").slideUp();
            return false;
        }else{
            return true;
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
    
    <script type="text/javascript">

    $(document).ready(function () {
        $(".scroll_map").click(function () {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            if ($.browser.safari) {
                $('body').animate({ scrollTop: destination }, 1100); //1100 - скорость прокрутки
            } else {
                $('html').animate({ scrollTop: destination }, 1100);
            }
            return false; 
        });
    });
    
    </script>
    
    
    
    
    
    
    
    
    
    
    
    <script>(function($){$('input[type=checkbox], input[type=radio], select').styler();})(jQuery);</script>
	

</body>

</html>

