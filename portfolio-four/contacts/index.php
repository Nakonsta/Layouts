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

    $from='Мегасервис КОНТАКТЫ заявка'; 

	

    mail($to,  "From:".$from, $message ); 

    

};

?>

<!doctype html>

<html lang="ru">



<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width">



    <title>Контакты</title>



    <link rel="icon" href="/img/favicon.ico">



    <!-- Yandex.Metrika counter -->

    <script type="text/javascript">

        (function(d, w, c) {

            (w[c] = w[c] || []).push(function() {

                try {

                    w.yaCounter45542175 = new Ya.Metrika({

                        id: 45542175,

                        clickmap: true,

                        trackLinks: true,

                        accurateTrackBounce: true,

                        webvisor: true

                    });

                } catch (e) {}

            });



            var n = d.getElementsByTagName("script")[0],

                s = d.createElement("script"),

                f = function() {

                    n.parentNode.insertBefore(s, n);

                };

            s.type = "text/javascript";

            s.async = true;

            s.src = "https://mc.yandex.ru/metrika/watch.js";



            if (w.opera == "[object Opera]") {

                d.addEventListener("DOMContentLoaded", f, false);

            } else {

                f();

            }

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

<!-- Begin CallBox code -->

<script >
 setTimeout(function(){
	(function() {

	var d = new Date(); 

	var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true; 

		em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') 

		+ 'callbox.by/js/callbox.js?' + d.getTime(); var s = document.getElementsByTagName('script')[0];

 		s.parentNode.insertBefore(em, s);

	})();
},5000)

</script>

<!-- End CallBox code -->

  <script>

    setTimeout(function(){

        $.getScript("https://moclients.com/js/5326.js");

    },5000)

</script>





    <div class="header__fixed">

        <div class="container">

            <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 header__fixed_logo_contanier">

                <div class="logo">

                    <a href="/"><img src="/img/logo.png" alt="" class="img-responsive"></a>

                </div>

            </div>

            <div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 header__fixed_menu_contanier">

                <a href="#" class="header__fixed_menu" onclick="return false;">Меню</a>

            </div>

            <div class="col-sm-5 col-lg-6 col-md-5 col-xs-5 header__fixed_address_contanier">

                <address class="text-center">Минск, ул. Короля 88</address>

            </div>

            <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 text-right header__fixed_operators_contanier">

                <div class="header__fixed_operators">

                    <a href="callto:+375296274488"><img src="/img/operator.png" alt=""></a>

                </div>

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

                            <div class="logo">

                                <a href="/"><img src="/img/logo.png" alt="" class="img-responsive"></a>

                            </div>

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

                    <img src="/img/content/contacts/header.png" alt="">

                    <div class="slider-content">

                        <div class="text-center">

                            <p>Контакты</p>

                            <p class="small_title_in_header"> <span>Минск, ул. Короля 88</span></p>

                            <div class="red-block phone_in_header"><span><img src="/img/content/contacts/small_phone.png" alt="">Звоните: 627-44-88</span></div>

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

            <!-- contacts -->

            <div class="contacts">

                <div class="row wrap-services mobile-row">

                    <div class="col-xs-12 col-sm-3">

                        <div class="box-contact">

                            <h4>Автосервис</h4>

                            <div class="contact-grafic">9:00-21:00 Без выходных</div>

							<div class="location-grafic">Минск, ул. Короля 88 «МЕГАСЕРВИС»</div>

                            <div class="contact-phones">

                                <a href="tel:+375296274488">+375 (29) 627-44-88</a>

                                <a href="tel:+375336274488">+375 (29) 627-44-88</a>

                            </div> 

                        </div>

                        <div class="box-contact">

                            <h4>Шиномонтаж</h4>

                            <div class="contact-grafic">9:00-21:00 Без выходных</div>

                            <div class="contact-phones">

                                <a href="tel:+375296122577">+375 (29) 612-25-77</a>

                                <a href="tel:+375297395877">+375 (29) 739-58-77</a>

                            </div>

                        </div>

                        <div class="box-contact">

                            <h4>Автостекла</h4>

                            <div class="contact-grafic">9:00-21:00 Без выходных</div>

                            <div class="contact-phones">

                                <a href="tel:+375296327887">+375 (29) 632-78-87</a>

                            </div>

                        </div>

                        <div class="box-contact">

                            <h4>Автомойка</h4>

                            <div class="contact-grafic">8:00-23:00 Без выходных</div>

                            <div class="contact-phones">

                                <a href="tel:+375445957555">+375 (44) 595-75-55</a>

                                <a href="tel:+375295357615">+375 (29) 535-76-15</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-9">

                        <div class="photo_in_contacts">

                            <img src="/img/content/contacts/mega111.png" alt="">

                        </div>

                        <div class="row contacts_buttons">

                           <div class="col-sm-6 col-xs-12">

                                <p><a href="#instruction" class="btn btn-blue btn-block btnsubmit disabled">как доехать?</a></p>

                            </div>

                            <div class="col-sm-6 col-xs-12">

                                <p><a href="#question-modal" data-toggle="modal" class="btn btn-red btn-block">Оставить заявку</a></p>

                            </div>

                            

                        </div>

                    </div>

                </div>



            </div>

            <!-- /contacts -->

        </div>



        <!-- map -->

        <div id="map" class="map-margin"> <a href="#"><img style="width: 100%;" src="map.jpg"></a></div>

        <!-- /map -->

        

        <div class="container" id="instruction">

            <!-- contacts -->

            <div class="title text-center">как добраться?</div>

            <div class="instruction">

                <div class="row wrap-services mobile-row">

                    <div class="col-xs-12 col-sm-4">

                        <div class="item">

                            <h4><span>01.</span> Со стороны центра</h4>

                            <p>Двигаемся от центра города по улице Кальварийская до ТЦ Корона, на светофоре поворачиваем на стоянку Короны и сразу же разворачиваемся обратно, для того, чтобы была возможность пересечь улицу. После пересечения Кальварийской двигаемся по прямой, через 100 метров справа и будет наш Автосервисный комплекс.</p>

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-4">

                        <div class="item">

                            <h4><span>02.</span> От ТЦ Корона <small>ул. Кальварийская</small></h4>

                            <p>Выезжаем с автомобильной стоянки ТЦ Корона и пересекаем по прямой улицу Кальварийская. Через 100 метров справа будет заезд к комплексу «Мегасервис» Автосервис, Автомойка, Шиномонтаж, Автостекла ул. Короля 88.</p>

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-4">

                        <div class="item">

                            <h4><span>03.</span> Со стороны <small>МКАД</small></h4>

                            <p>Двигаемся со стороны МКАД по улице Кальварийская, спускаясь с моста (через дорогу от ТЦ Корона) поворачиваем направо на улицу Дрозда. Двигаемся по ул. Дрозда 100 метров, справа вы увидите большие вывески Автостекла, Автомойка, Мегасервис. Мы всегда рады вас видеть!</p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- /contacts -->

        </div>

        

        <div class="container">

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

        </div>

        

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

                                <li><a href="http://megaservice.by/remont-glushitelya/">Ремонт глушителей</a></li>

                                <li><a href="#">Диагностика автомобиля</a></li>

                                <li><a href="#">Ремонт рулевых реск</a></li>

                                <li><a href="#">Ремон гидроусилителя</a></li>

                                <li><a href="#">Автоэлектрика</a></li>

                                <li><a href="http://megaservice.by/remont-startera-generatora/">Ремонт стартеров и генератора</a></li>

                                <li><a href="http://megaservice.by/zamena-remnya-grm/">Заменя ремня ГРМ</a></li>

                            </ul>

                        </div>

                        <div class="col-sm-3 col-lg-3">

                            <div class="title-small">Замена масел</div>

                            <ul class="footer-nav">

                                <li><a href="">Замена масла в двигателе</a></li>

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

                                <li><a href="#">Контактные данные</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- /footer-block -->

            <div class="container">

                <div class="copyright">

                    <p>© Copyright. Все права защищены. ООО «Отель Сервис Групп».</p>

                    <p>Юр. адрес: г. Минск, ул. Короля 88. Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-сб), 09:00 - 21:00 (вс)</p>

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

                <form method="post" class="form_check" action="#">

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

                    <div class="form-group rline"><input class="rfield" type="text" name="name" placeholder="ваше имя"></div>

                    <div class="form-group rline"><input class="rfield" type="text" name="email" placeholder="ваш e-mail"></div>

                    <div class="form-group rline"><textarea class="rfield" name="question" placeholder="ваш вопрос"></textarea></div>

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

                    <div class="form-group rline"><input class="rfield" type="text" name="name" placeholder="ваше имя"></div>

                    <div class="form-group rline"><input class="rfield" type="text" name="phone" placeholder="ваш телефон"></div>

                    <div class="form-group rline"><textarea class="rfield" name="comment" placeholder="Коментарий"></textarea></div>

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

        $(document).ready(function() {

            if (window.kvg) {

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

            responsive: [{

                breakpoint: 571,

                settings: {

                    centerMode: true,

                    centerPadding: '0px',

                    slidesToShow: 1

                }

            }]

        });

        $('.review-slider').slick({

            dots: true,

            infinite: false,

            speed: 300,

            slidesToShow: 2,

            slidesToScroll: 1,

            responsive: [{

                breakpoint: 769,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1

                }

            }, ]

        });



    </script>

    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/css/slick.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/style.css?2">

    <link rel="stylesheet" href="/contacts/css/style.css">

    <!-- map 

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <script type="text/javascript">

        ymaps.ready(init);



        function init() {

            var myMap = new ymaps.Map("map", {

                center: [53.90471857067563, 27.528126500000003],

                zoom: 16,

                controls: ["zoomControl"]

            });

            myMap.behaviors.disable('scrollZoom');

            myMap.controls.add('fullscreenControl', {

                float: 'left'

            });

            // Создаем геообъект с типом геометрии "Точка".

            myGeoObject = new ymaps.GeoObject();

            myMap.geoObjects

                .add(new ymaps.Placemark([53.90471857067563, 27.528126500000003], {

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
-->

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

