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



	<title>Автокондиционеры в Минске</title>

	<link rel="stylesheet" href="/css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="/css/slick.css">

	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<link rel="stylesheet" href="/css/style.css?2">

	<link rel="stylesheet" href="/avtokonditsionery/css/style.css">

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

									<li><a href="http://megaservice.by/oil/">замена масла</a></li>
										 
										 <li><a href="http://megaservice.by/diagnostika-remont-podveski/">диагностика и ремонт подвески</a></li>
										 
										 <li><a href="http://megaservice.by/antikorrozijnaya-obrabotka-avto/">антикоррозийная обработка</a></li>
										
										<li><a href="http://megaservice.by/remont-glushitelya/">ремонт глушителей</a></li>
										
										<li><a href="http://megaservice.by/protochka-tormoznyh-diskov/">проточка тормозных дисков</a></li>
										
										<li><a href="http://megaservice.by/remont-startera-generatora/">ремонт стартера и генератора</a></li>
										
										<li><a href="http://megaservice.by/remont-zamena-scepleniya/">замена сцепления</a></li>
										
										<li><a href="http://megaservice.by/shinomontazh/">шиномонтаж</a></li>
										
										<li><a href="http://megaservice.by/remont-pechki/">ремонт печки (отопителя)</a></li>
										
										<li><a href="http://megaservice.by/polirovka-kuzova/">полировка кузова</a></li>
										
										<li><a href="http://megaservice.by/himchistka-salona-avto/">химчистка авто</a></li>
										
										<li><a href="http://megaservice.by/bespokrasochnoe-udalenie-vmyatin/">беспокрасочное удаление вмятин</a></li>
										

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
					<img src="../img/content/avtokonditsionery/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Заправка и ремонт<span>Низккая цена</span></p>
                            <p class="p_2">Автокондиционеров</p>
							<p class="text-yellow">Сделаем РЕМОНТ по Вашей цене <a data-toggle="modal" class="modal_text" href="#yslovie">*</a></p>         
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-red">Предложить свою цену</a>
						</div>
					</div>
				</div>
				<div>
					<img src="../img/content/avtokonditsionery/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Заправка и ремонт<span>Низккая цена</span></p>
                            <p class="p_2">Автокондиционеров</p>
							<p class="text-yellow">Сделаем РЕМОНТ по Вашей цене <a data-toggle="modal" class="modal_text" href="#yslovie">*</a></p>         
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-red">Предложить свою цену</a>
						</div>
					</div>
				</div>
                <div>
					<img src="../img/content/avtokonditsionery/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Заправка и ремонт<span>Низккая цена</span></p>
                            <p class="p_2">Автокондиционеров</p>
							<p class="text-yellow">Сделаем РЕМОНТ по Вашей цене <a data-toggle="modal" class="modal_text" href="#yslovie">*</a></p>         
                            <a href="#entry-modal" data-toggle="modal" class="btn btn-red">Предложить свою цену</a>
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
				<div class="free-text"><span class="text-red">Бесплатная диагностика подвески</span> при замене ГРМ у нас!</div>
            </div>
			<!-- /free -->
			<!-- services -->
			<div class="services">
				<div class="title">Замена ремня грм в центре Минска</div>
				<p>Замена ремня ГРМ представляет собой востребованную и очень важную услугу, так как от него зависит правильность работы клапанов. Последние, в свою очередь, регулируют впрыск топлива в двигатель, а также ответственны за отвод от него отработанных газов.</p>
				<p>Для замены ремня нужно обращаться исключительно к профессиональным мастерам, так как для успешного выполнения работ требуется дорогостоящий инструмент и большой опыт работы. От правильности установки ремня ГРМ и будет зависеть дальнейшая работа распредвала, коленвала, клапанов и поршней. </p>
				<div class="row wrap-services mobile-row">
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="services-block">
							<img src="/img/content/diagnostika-remont-podveski/1.png" alt="">
							<span class="services-text">Замена амортизаторов и пружин (аналоги и оригиналы в наличии)</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="services-block">
							<img src="/img/content/diagnostika-remont-podveski/2.png" alt="">
							<span class="services-text">Замена сайлентблоков (выпресовка, замена)</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="http://megaservice.by/protochka-tormoznyh-diskov/" class="services-block">
							<img src="/img/content/diagnostika-remont-podveski/3.png" alt="">
							<span class="services-text">Проточка тормозных дисков (проточка либо замена)</span>
						</a>
					</div>
                </div>
				<div class="row wrap-services mobile-row">	
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="services-block">
							<img src="/img/content/diagnostika-remont-podveski/4.png" alt="">
							<span class="services-text">Замена ступичного подшипника (есть выбор, низкие цены)</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="services-block">
							<img src="/img/content/diagnostika-remont-podveski/5.png" alt="">
							<span class="services-text">Замена шаровой и ступицы</span>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="http://megaservice.by/remont-glushitelya/" class="services-block">
							<img src="/img/content/diagnostika-remont-podveski/6.png" alt="">
							<span class="services-text">Сварка или ремонт глушителя (вырежем катализатор)</span>
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
                    <div class="title text-center">Стоимость работ</div>
                    <div class="table-responsive">
                        <table class="table price-table">
                            <tr>
                                <th>№</th>
                                <th>Наименование работ (замена)</th>
                                <th>Стомость работ</th>
                                <th>Цена</th>
                            </tr>
							<tr>
<td>01.</td>
<td>Замена ремня ГРМ</td>
<td><span class="text-red">Самые низкие цены!</span></td>
<td>от 70 руб.</td>
</tr>
<tr>
<td>02.</td>
<td>Замена цепи ГРМ</td>
<td>Самые низкие цены в Минске!</td>
<td>от 130 руб.</td>
</tr>
<tr>
<td>03.</td>
<td>Диагностика подвески</td>
<td><span class="text-red">БЕСПЛАТНО! Ремонтируя авто у нас!</span></td>
<td> 15 руб.</td>
</tr>
<tr>
<td>04.</td>
<td>Мойка автомобиля</td>
<td><span class="text-red">БЕСПЛАТНО (при ремонте свыше 100 руб)</span></td>
<td>12 руб.</td>
</tr>
<tr>
<td>06.</td>
<td>Замена моторного масла</td>
<td><span class="text-red">БЕСПЛАТНО! (при покупке масла у нас)</span></td>
<td> 15 руб.</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="price-buttons">
                    <p>Закажите замену на этой неделе и получите <span class="text-red">скидку до 10%</span></p>
                    <p>
                        <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на замену</a>
                        <a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>
                    </p>
                </div>        
             <!-- /price -->
			
			<!-- text-block -->
			<div class="text-block">
		<h2><span>Причина замена ремня грм автомобиля</span></h2>
<p>Чаще всего автовладельцы поздно узнают о вышедшем из строя ремне ГРМ, что несёт в себе определённые сложности. Обычный срок службы ремня рассчитан на пробег 55-150 тысяч километров, что зависит от особенностей автомобиля. Также на то, что пора менять ремень, могут указывать такие характерные сигналы, как стук во время запуска двигателя, которого не наблюдалось ранее и его неровная работа. Чтобы избежать аварийного ремонта, следует соблюдать указанный производителем его приблизительный срок работы, но этого будет недостаточно. Для полной уверенности в его исправности следует время от времени проходить процедуру визуального осмотра.</p>
<p>Если ремень вышел из строя или скоро придёт в непригодность, то отремонтировать его не представляется возможным. Это связано с тем, что в большинстве случаев ремни сделаны с использованием резинометаллической основы.</p>
<h3><span>Особенности и причины обрыва ГРМ</span></h3>
<p>Среди наиболее частых причин обрыва ремня можно отметить: </p>
<ol>
	<li>Заклинило ролик или помпу.</li>
	<li>педаль акселератора демонстрирует нестабильную работу – наблюдается сброс скорости при её нажатии, вместо разгона;</li>
	<li>Заклинил распредвал.</li>
	<li>Замена амортизаторов прошла неправильно</li>
</ol>
<p>Важно понимать, что обрыв ремня говорит о том, что двигатель испытал сильную перегрузку, что произошла при резком возрастании количества оборотов. Не следует затягивать устранение неисправности, лучше как можно быстрее обратиться в автосервис для замены ремня.</p>
<h3><span>Процесс проведения работы</span></h3>
<p>До того, как начать замену, мастерами проводится полный осмотр взаимосвязанных деталей, во время которого выявляются все уязвимые места. Работа по замене ремня ГРМ имеет приблизительно такую последовательность:</p>
<ol>
	<li>Поднятие передней части автомобиля на домкрат.</li>
	<li>Снятие правого переднего колеса, защиту, фартук и верхнюю крышку двигателя.</li>
	<li>Отсоединение вакуумной трубки и трубки и подачи топлива с аккумулятора паров.</li>
	<li>Снятие кронштейна с аккумулятора паров, а также открепление заливной горловины бочка омывателя.</li>
	<li>Снятия защиты дополнительного ремня, а также приводного ремня и его натяжителя.</li>
	<li>После этого коленчатый вал проворачивается на уровень верхней мёртвой точки первого цилиндра.</li>
	<li>Далее проходит снятие шкива коленчатого вала, центральной и нижней крышек, а также снимается ремень газораспределительного механизма.</li>
	<li>Происходит съём кронштейна и болтов правой опоры двигателя.</li>
	<li>Старый ремень заменяется новым, и процедура проводится в обратном порядке.</li>
</ol>
<h3><span>Преимущества обращения в нашу компанию</span></h3>
<p>При обращении в наш автосервис клиент получает такие преимущества, как:</p>
<ol>
	<li>Выполнение работ согласно техническим рекомендациям от производителя, а также соблюдение всех заводских технологий.</li>
	<li>Для работы используется профессиональный инструмент, что гарантирует качественное проведение любых работ.</li>
	<li>Замена происходит только на оригинальные детали от официального производителя.</li>
	<li>На все проведённые работы и установленные детали даётся гарантийный талон.</li>
	<li>Каждый вид работы имеет свою фиксированную цену.</li>
</ol>
<p>Можно позвонить по указанному на сайте номеру и договорится об удобном времени для осмотра автомобиля. Также можно получить представление о приблизительной итоговой цене.</p>

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
						<!-- consultation -->
			<div class="wrap-consultation">
				<div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i>на замену ГРМ или ремонт авто вы можете по телефонам:</i></div>
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
								<li><a href="oil/">Замена масла в двигателе</a></li>
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
	
	<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5114845044932608"></script>

</body>

</html>

