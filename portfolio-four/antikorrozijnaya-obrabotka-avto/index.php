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

    $from='Мегасервис АНТИКОР заявка'; 

	

    mail($to,  "From:".$from, $message ); 

    

};

?>

<!doctype html>

<html lang="ru">



<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width">



    <title>Антикоррозийная обработка автомобиля. Недорогая антикоррозийная обработка динитролом в Минске.</title>
	<meta name="description" content="Представляем вашему вниманию услуги по антикоррозийной обработке автомобиля в Минске. Гарантируем высокое качество покрытия, доступные цены и высокий уровень сервиса. По всем вопросам звоните: +375 (29) 638-44-55">
	<meta name="keywords" content="антикоррозийная обработка покрытие автомобиль Минск заказать недорого стоимость цены">

 

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

    <div class="header__fixed">

        <div class="container">

            <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 header__fixed_logo_contanier">

                <div class="logo">

                    <a href="/"><img src="../img/logo.png" alt="антикоррозийная обработка" class="img-responsive"></a>

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

                    <a href="callto:+375296384455"><img src="../img/operator.png" alt=""></a>

                </div>

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

                            <div class="logo">

                                <a href="/"><img src="../img/logo.png" alt="" class="img-responsive"></a>

                            </div>

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

                    <li><a href="http://megaservice.by/contacts/">О компании</a></li>

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

                                <li class="visible-xs"><a href="#">Услуги</a></li>

                                <li class="visible-xs"><a href="#">Акции</a></li>

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

                                <li><a href="#"><span>спецпредложения</span></a></li>

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

                    <img src="../img/content/antikoroz-obrabotca-kyzova/header.png" alt="Антикоррозийная обработка в Минске" title="Антикоррозийная обработка в Минске">

                    <div class="slider-content">

                        <div class="text-center">
                        
                            <div class="red-block-top">Всего<br><span>от 195</span><br>рублей</div>

                            <h1 style="font-size: 57px;font-weight: bold;margin: 0;color: #000;">
                            <span class="text-red" style="display: block;">Антикоррозийная</span> обработка кузова</h1>
                            
                            <div class="red-block">ЦЕНТР МИНСКА, НИЗКИЕ ЦЕНЫ, ГАРАНТИЯ!</div>

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
				<div class="free-text"><span class="text-red">Бесплатная диагностика </span>подвески при антикоррозийной обработке кузова!</div>
            </div>

            <!-- /free -->

            <!-- services -->

            <div class="services">

                <div class="title"><h2 style="font-weight: bold;">Услуга по антикоррозийной обработке кузова автомобиля</h2></div>

                <p>Наш автосервис проводит антикоррозийную обработку автомобилей в Минске. Использование специального оборудования, качественных материалов от ведущих мировых производителей и профессиональная антикоррозийная обработка днища, порогов, кузова и позволяет защитить ваше авто от коррозии на долгие годы. У нас работают опытные специалисты с высокой квалификацией, которые выполнят все работы качественно, оперативно и по доступной цене.</p>

                
                <!-- advantages -->

                <div class="row">

                    <div class="col-sm-4">

                        <div class="advantages-block">

                            <div class="span sprites i-advantages-1"></div>

                            <div class="title">7.5 лет опыта</div>

                            <p>Работы в сфере автоуслуг:</p>

                            <ul>

                                <li>— Сеть автомоек «МЕГАМОЙКА»</li>

                                <li>— Центр замены масел</li>

                                <li>— Антикоррозийная обработка</li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="advantages-block">

                            <div class="span sprites i-advantages-2"></div>

                            <div class="title">низкие цены</div>

                            <p>Самые низкие цены в Минске на антикоррозийное покрытие и большинство услуг нашего авторсервиса. <br>Не упустите выгоду</p>

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

                    <div class="title text-center"><h2>Цены на антикоррозийную обработку</h2></div>

                    <div class="table-responsive">

                        <table class="table price-table">

                            <tr>

                                <th>Класс</th>

                                <th>Модель автомобиля</th>

                                <th>Цена эконом</th>

                                <th>Цена стандарт</th>
								
								<th>Цена премиум</th>
                                

                            </tr>

                            <tr>

                                <td><span>1 класс</span><br>Например,<br>Дэо Матиз<br> Тойота Ярис</td>

                                <td><img src="../img/content/antikoroz-obrabotca-kyzova/1.png" alt="Антикоррозийная обработка" title="Антикоррозийная обработка"></td>
								
								<td><span>120 руб.</span></td>

                                <td><span>175 руб.</span><br>+ в ПОДАРОК<br>диагностика подвески</td>

                                <td><span>210 руб.</span><br>+ мойка авто и<br>диагностика в подарок!</td>

                            </tr>

                            <tr>

                                <td><span>2 класс</span><br>Автомобиль<br>хэтчбек/<br>седан</td>

                                <td><img src="../img/content/antikoroz-obrabotca-kyzova/2.png" alt="Антикоррозийная обработка цены" title="Антикоррозийная обработка цены"></td>

                                <td><span>130 руб.</span><br></td>

                                <td><span>185 руб.</span><br>+ в ПОДАРОК<br>диагностика подвески</td>
                                
                                <td><span>220 руб.</span><br>+ мойка авто и<br>диагностика в подарок!</td>

                            </tr>
							
							<tr>

                                <td><span>3 класс</span><br> Большой<br>Седан<br></td>

                                <td><img src="../img/content/antikoroz-obrabotca-kyzova/a3.png" alt="Антикоррозийная обработка недорого" title="Антикоррозийная обработка недорого"></td>

                                <td><span>150 руб.</span><br></td>

                                <td><span>205 руб.</span><br>+ в ПОДАРОК<br>диагностика подвески</td>
                                
                                <td><span>240 руб.</span><br>+ мойка авто и<br>диагностика в подарок!</td>

                            </tr>
							
							<tr>

                                <td><span>4 класс</span><br>Минивэн<br>небольшой<br>Микроавтобус</td>

                                <td><img src="../img/content/antikoroz-obrabotca-kyzova/a5.png" alt="качественная антикоррозийная обработка в Минске" title="качественная антикоррозийная обработка в Минске"></td>

                                <td><span>170 руб.</span><br></td>

                                <td><span>220 руб.</span><br>+ в ПОДАРОК<br>диагностика подвески</td>
                                
                                <td><span>280 руб.</span><br>+ мойка авто и<br>диагностика в подарок!</td>

                            </tr>
							
							<tr>

                                <td><span>5 класс</span><br>Большой<br>внедорожник<br></td>

                                <td><img src="../img/content/antikoroz-obrabotca-kyzova/a6.png" alt="заказать антикор в Минске" title="заказать антикор в Минске"></td>

                                <td><span>170 руб.</span><br></td>

                                <td><span>230 руб.</span><br>+ в ПОДАРОК<br>диагностика подвески</td>
                                
                                <td><span>280 руб.</span><br>+ мойка авто и<br>диагностика в подарок!</td>

                            </tr>
							
                        </table>

                    </div>

                </div>

                <div class="price-buttons">

                    <p>Закажите антикоррозийную обработку на этой неделе и получите <span class="text-red">Скидку до 15%</span></p>

                    <p>

                        <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на антикор</a>

                        <a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>

                    </p>

                </div>

            </div>

            <!-- /price -->

            <!-- comparison -->

            <div class="wrap-comparison">



                <div class="row">

                    <div class="col-sm-6">

                        <div class="title__comparison">Жидкие подкрылки</div>

                        <div class="img__comparison text-center">

                            <img src="../img/content/antikoroz-obrabotca-kyzova/3a.png"  alt="заказать антикор кузова" title="заказать антикор кузова">

                        </div>

                    </div> 

                    <div class="col-sm-6">

                        <div class="title__comparison red">Обработка днища</div>

                        <div class="img__comparison text-center">

                            <img src="../img/content/antikoroz-obrabotca-kyzova/2a.png"  alt="антикорозийная обработка в Минске" title="антикорозийная обработка в Минске">

                        </div>

                    </div>

                </div>

            </div>

            <!-- /comparison -->


            <!-- consultation -->

            <div class="wrap-consultation">

                <div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i>на недорогой и качественный АНТИКОР вы можете по телефонам:</i></div>

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

   
   <!-- gallery -->
            <div class="title text-center">Фотогалерея</div>
			<div class="gallery-slider">
				<div>
					<a href="../img/content/img1.jpg" data-fancybox="gallery"><img src="../img/content/img1.jpg" alt="антикорозийная обработка в Минске" title="антикорозийная обработка в Минске" class="img-responsive center-block"></a>
					<p>АВТОСЕРВИС НИЗКИХ ЦЕН</p>
				</div>
				<div>
					<a href="../img/content/img9.jpg" data-fancybox="gallery"><img src="../img/content/img9.jpg" alt="антикорозийная обработка" title="антикорозийная обработка" class="img-responsive center-block"></a>
					<p>Работаем 7 дней в неделю!</p>
				</div>
				<div>
					<a href="../img/content/img4.jpg" data-fancybox="gallery"><img src="../img/content/img4.jpg" alt="антикорозийная обработка в Минске" title="антикорозийная обработка в Минске" class="img-responsive center-block"></a>
					<p>Современный автосервис в центре Минска</p>
				</div>
				<div>
					<a href="../img/content/img11.jpg" data-fancybox="gallery"><img src="../img/content/img11.jpg" alt="антикорозийная обработка в Минске" title="антикорозийная обработка в Минске" class="img-responsive center-block"></a>
					<p>Комфортная комната клиента</p>
				</div>
				<div>
					<a href="../img/content/img10.jpg" data-fancybox="gallery"><img src="../img/content/img10.jpg" alt="антикорозийная обработка в Минске" title="антикорозийная обработка в Минске" class="img-responsive center-block"></a>
					<p>Большой выбор масел и фильтров</p>
				</div>
				<div>
					<a href="../img/content/img21.jpg" data-fancybox="gallery"><img src="../img/content/img21.jpg" alt="антикорозийная обработка в Минске" title="антикорозийная обработка в Минске" class="img-responsive center-block"></a>
					<p>Широкий спектр услуг</p>
				</div>
				<div>
					<a href="../img/content/img8.jpg" data-fancybox="gallery"><img src="../img/content/img8.jpg" alt="антикорозийная обработка в Минске" title="антикорозийная обработка в Минске" class="img-responsive center-block"></a>
					<p>Гарантия на все услуги</p>
				</div>
			</div>
            <!-- /gallery -->

            <!-- text-block -->

            <div class="text-block">
			<h2>Антикоррозийная обработка кузова</h2>
<p>В процессе эксплуатации автомобиля влага, грязь, соль оказывают губительное влияние на элементы кузова и днища автомобиля. Со временем появляется коррозия и возникает необходимость проведения дорогостоящего ремонта и косметических процедур, стоимость которых может быть существенной. Чтобы этого избежать и защитить автомобиль от негативного воздействия окружающей среды, проводят антикоррозийную обработку.</p>

<p>Со временем на кузове появляются места, где краска откололась, обнажив металл. Они потенциально опасны &ndash; туда попадает вода, грязь, химические средства. Это приводит к коррозии. Также подвержены воздействию окружающей среды места стыков (где элементы кузова крепятся между собой).</p>
<p><font size="4"><b>Антикоррозийная обработка кузова условно делится на несколько видов, отличающихся по цене и площади покрытия:</b></font></p>
<ol>
<li>Полная. Антикоррозионный материал наносится на все элементы кузова;</li>
<li>Частичнаяя Обрабатываются детали и места, которые подвержены риску возникновения коррозии;</li>
<li>Повторная. Профилактическое мероприятие, которое проводится по истечении регламентированного срока последней обработки.</li>
</ol>
<p>Мы рекомендуем регулярно проводить профилактическую обработку антикором. Процедура по цене недорогая, но позволит серьезно сэкономить в будущем на ремонте автомобиля.</p>
<p>Антикор авто проводится профессиональными мастерами. Технология может иметь особенности, в зависимости от марки авто, но в общем она стандартная для любого автомобиля. Антикоррозионную обработку кузова необходимо проходить для нового автомобиля минимум через 5 лет. При интенсивной эксплуатации или эксплуатации в неблагоприятных условиях &ndash; не реже раза в два года.</p>
<p><font size="4">Процесс антикоррозионной обработки кузова состоит из нескольких этапов:</font></p>
<ol>
	<li>предварительный &ndash; на этом этапе проводится чистка и мойка поверхности. Ее необходимо качественно обработать, удалив всю пыль, грязь, другие наслоения;</li>
	<li>подготовка &ndash; кузов сушат, протирают специальными растворами, которые обезжиривают металл и способствуют лучшему сцеплению поверхности с антикоррозионным веществом;</li>
	<li>покрытие &ndash; нанесение нескольких слоев специального материала, обеспечивающего антикоррозионный эффект. Его наносят с помощью валика, кисти или методом распыления. Рекомендуется делать защитную обработку в теплое время, так как это позволяет лучше подготовить поверхность к обработке.</li>
</ol>
<p>В нашем автоцентре есть специальное оборудование, которое обеспечивает качественную подготовку и нанесение покрытия в любое время года.</p>
<h2>Антикоррозийная обработка днища</h2>
<p>Некоторые элементы авто наиболее подвержены воздействию неблагоприятных условий, такие как днище. Поэтому оно особенно нуждается в защите. Процедура антикоррозионной обработки днища в общем схожа с обработкой кузова, но имеет некоторые особенности. Это касается не только стоимости, но и материалов, которые используются.</p>
<ol>
<li>В начале днище моется и тщательно очищается от загрязнений, от этого этапа во многом зависит качество обработки.</li>
<li>Днище после обработки антикорозийным составом сушится в течение 20 минут обдувается горячим воздухом. Мастер осматривает днище на предмет наличия дефектов (вздутий, ржавчины и т.д.).</li>
<li>Если были выявлены дефекты, они устраняются (ржавчина удаляется, после чего место моется, сушится, грунтуется).</li>
<li>Обезжиривание поверхности.</li>
<li>Покрытие антикоррозионным веществом, в несколько слоев, для колесных арок часто используют жидкие подкрылки.</li>
</ol>
<h2>Антикоррозийная обработка порогов</h2>
<p>Пороги &ndash; один из самых уязвимых элементов кузова, который часто подвергается коррозии. Любой удар острого камня, вмятина, след от неосторожного обращения с домкратом может стать причиной возникновения коррозии. Потому обработке порогов нужно уделять должное внимание, рекомендуется ее проводить минимум 1-2 раза в год. Процедура выполняется по стандартной технологии &ndash; пороги тщательно очищаются, моются, сушатся, после чего обрабатываются мастикой или другим антикоррозионным веществом.&nbsp;</p>
<p>Обращаяь к нам за обработкой автомобиля, вы доверяете его в надежные руки квалифицированных специалистов. Мы гарантируем высокое качество оказываемых услуг, доступные цены и высокий уровень сервиса.</p>

               
            </div>

            <!-- /text-block -->

     
        <!-- map -->

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
							
							<li><a href="https://megaservice.by/razval_shojdenie/">3D развал-схождение</a></li>

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

                    <p>© Copyright. Все права защищены. ООО «Отель Сервис Групп».</p>

                    <p>Юр. адрес: г. Минск. ул. Короля 88 Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-сб), 09:00 - 21:00 (вс)</p>

                    <p>Наша организация не осуществляет розничную торговлю, все цены указанные на сайте носят ознакомительный характер. Данная информация является справочной и публичной офертой не является.</p>

                </div>

            </div>

        </footer>

        <!-- /footer -->

    



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

   <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/slick.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/style.css?2">

    <link rel="stylesheet" href="../antikorrozijnaya-obrabotka-avto/css/style.css">

    <link rel="icon" href="../img/favicon.ico">



    <script type="text/javascript" src="../js/jquery.min.js"></script>

    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../js/slow_scroll.js"></script>

    <script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="../js/main.js"></script>



    <!-- form -->

    <script type="text/javascript" src="../js/is.mobile.js"></script>

    <script type="text/javascript" src="../js/formcheck.js"></script>

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

    <script type="text/javascript" src="../js/slick.min.js"></script>

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

