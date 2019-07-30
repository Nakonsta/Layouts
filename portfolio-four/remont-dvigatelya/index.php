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

    $from='Мегасервис Ремонт двигателя'; 

	

    mail($to,  "From:".$from, $message ); 

    

};

?>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Ремонт двигателя в Минске. Автосервис "Мегасервис" – ремонт машин в центре Минска</title>
	<meta name="description" content='Ремонт двигателя автомобиля по доступным ценам в автосервисе "Мегасервис" в Минске. Профессиональный ремонт автомобилей всех марок по низким ценам в центре Минска. Звоните +375 (29) 627-44-88'>
	<meta name="keywords" content="автосервис, ремонт автомобилей, станция техобслуживания, компьютерная диагностика, автоэлектрик, ремонт подвески, ремонт двигателя, недорого, стоимость, цена">
	
	
	<link rel="icon" href="/img/favicon.ico">
	
<meta name="yandex-verification" content="a04b613a3c64bd03" />
<meta name="yandex-verification" content="48db8f4bdcc92fb5" />
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
<noscript><div><img src="https://mc.yandex.ru/watch/45542175" style="position:absolute; left:-9999px;" alt="карта мегасервис" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53866705, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53866705" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<meta name="google-site-verification" content="ICL-3Sp4OkpglUTqCw_sahY9PiNK0QpBIrF0P-ZSypY" />
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
				    <div class="logo"><a href="/"><img src="/img/logo.png" alt="Логотип сто автосервиса Мегасервис" title="Логотип Мегасервис" class="img-responsive"></a></div>
				</div>
               <div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 header__fixed_menu_contanier">
				    <a href="#" class="header__fixed_menu" onclick="return false;">Меню</a>							
				</div>
                <div class="col-sm-5 col-lg-6 col-md-5 col-xs-5 header__fixed_address_contanier">
				    <address class="text-center">Минск, ул. Короля 88</address>							
				</div>
               <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 text-right header__fixed_operators_contanier">
				    <div class="header__fixed_operators"><img src="/img/operator.png" alt="вызов" ></a></div>
				</div>
                <div class="col-sm-2 col-lg-1 col-md-2 col-xs-2 text-center header__fixed_phone_contanier">
				    <a href="callto:+375296274488" class="header__fixed_phone ">627-44-88</a>						
				</div>
            </div>
        </div>

	<div id="wrap" class="engine inner-page">
		<div class="wrap-home-slider wrap-home-slider-small">
			<header>
				<div class="container">
					<div class="row mobile-row">
						<div class="col-sm-5 col-lg-5 col-md-4 col-xs-6">
							<div class="logo"><a href="/"><img src="/img/logo.png" alt="Автосервис Мегасервис логотип"  title="Автосервис Мегасервис логотип" class="img-responsive"></a></div>
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
					<li><a href="https://megaservice.by/specpredlozhnie/">Акции</a></li>
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
								<li class="visible-xs"><a href="https://megaservice.by/specpredlozhnie/">Акции</a></li>
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
								<li><a href="https://megaservice.by/specpredlozhnie/"><span>спецпредложения</span></a></li>
								<li><a href="#"><span>цены</span></a></li>
								<li><a href="/contacts/"><span>Контакты</span></a></li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- /navigation -->
			</header>
            <div class="home-slider home-slider-small">
                <div>
                    <img src="/img/remont-dvigatelya.jpg" alt="Автосервис Мегасервис в Минске" title="ждём в нашем автосервисе">
                    <div class="slider-content home-slider-content">
                    <div class="text-center home-slider-wrapper">
                            <h1 class="home-slider-h1"><span class="text-toning">Ремонт двигателя</span><br>
                            <span class="text-orange text-toning-light">в Минске</span></h1>
                            <div class="parallelogram-wrapper">
                                <div class="red-block parallelogram"></div>
                                <span class="red-block-text">Компьютерная диагностика двигателя в подарок при последующем ремонте у нас</span>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="container advantages__more">
            <div class="row">
                <div class="advantages__more-demo menuUnderSlider">
                    <div class="menuUnderSlider-block">
                        <img src="/img/re/icon1.png" alt="">
                        <div class="menuUnderSlider-right">
                            <a>Услуги</a>
                            <span>Гарантия 2 года</span>
                        </div>
                    </div>

                    <div class="menuUnderSlider-block">
                        <img src="/img/re/icon2.png" alt="">
                        <div class="menuUnderSlider-right">
                            <a>Автосервис</a>
                            <span>В Центре Минска</span>
                        </div>
                    </div>

                    <div class="menuUnderSlider-block">
                        <img src="/img/re/icon3.png" alt="">
                        <div class="menuUnderSlider-right">
                            <div class="estimate_form"><a>СТО НА 7 <br> ПОДЪЕМНИКОВ</a></div>
                        </div>
                        <!--<span>В короткие сроки</span>-->
                    </div>

                    <div class="menuUnderSlider-block">
                        <img src="/img/re/icon4.png" alt="">
                        <div class="menuUnderSlider-right">
                            <a>ДИАГНОСТИКА БЕСПЛАТНО</a>
                            <span>При ремонте у нас</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container toning-main">
        <div class="row toning-mobile-reverse">
            <div class="col-md-3">
                <div class="left-cell">
                    <div class="leftmenu">
                        <div class="headmenu"></div>
                        <ul>
                            <!-- <li><a href="/#/">Услуги</a></li> -->
                            <li><a href="/kompyuternaya-diagnostika-avtomobilya/">Диагностика</a></li>
                            <li><a href="/diagnostika-remont-podveski/">Ремонт</a></li>
                            <li><a href="/remont-tormoznoy-sistemy/">Диагностика</a></li>
                            <li><a href="/protochka-tormoznyh-diskov/">Проточка</a></li>
                            <li><a href="/shinomontazh/">Шиномонтаж</a></li>
                            <li class="active"><a href="/razval_shojdenie/">Развал-схождение</a></li>
                            <li><a href="/himchistka-salona-avto/">Химчистка</a></li>
                            <li><a href="/#/">Электрик</a></li>
                            <li><a class="fontRED" href="/specpredlozhnie/">АКЦИИ</a></li>
                            <li><a href="/contacts/">Запись на ремонт</a></li>
                            <li><a href="/#/">Гарантии</a></li>
                            <li><a href="/#/">Вопрос-ответ</a></li>
                            <li><a href="/#/">Отзывы</a></li>
                        </ul>
                    </div>
                    <div class="otzivi">
                        <div class="elem_head">Последние отзывы</div>
                        <div class="box-content">
                            <div class="review-list">
                                <div class="toning__rating"><img src="/razval_shojdenie/img/stars-5.png" alt="Рейтинг выставлен Елена"></div>
                                <div class="author">Елена
                                    <br><span>17.03.2019</span></div>
                                <div class="text">Делала на данном автосервисе развал-схождения. Сделали все быстро, машина едет ровно, обслуживание качественное… <a href="#">Читать далее</a></div>
                            </div>
                            <div class="review-list">
                                <div class="toning__rating"><img src="/razval_shojdenie/img/stars-5.png" alt="Рейтинг выставлен Иван Сорока"></div>
                                <div class="author">Иван Сорока
                                    <br><span>09.03.2019</span></div>
                                <div class="text">Качественный автосервис, с действительно низкими ценами. Заменили элементы подвески остался доволен… <a href="#">Читать далее</a></div>
                            </div>
                            <div class="review-list">
                                <div class="toning__rating"><img src="/razval_shojdenie/img/stars-4.png" alt="Рейтинг выставлен Василий"></div>
                                <div class="author">Василий
                                    <br><span>24.01.2019</span></div>
                                <div class="text">Не первый раз ремонтирую авто на этом сто. Цены низкие при высоком профессионализме… <a href="#">Читать далее</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content">
                    <h2 class="content-h2">
                    Почему стоит обратится за ремонтом<br>автоэлектрики к нам: </h2>
                    <div class="contentActions contentActions-table">
                        <div class="action">
                            <div class="toning__action-pic"><img src="../img/action-1.png" alt="Быстрая диагностика автомобиля в центре Минска" title="Быстрая диагностика автомобиля в центре Минска"></div>
                            <div class="actionRight">
                                <div class="redText">
                                    Быстрая диагностика за 20 минут
                                </div>
                            </div>
                        </div><div class="action">
                            <div class="toning__action-pic"><img src="../img/action-2.png" alt="Диагностика Бесплатно при последующем ремонте" title="Диагностика Бесплатно при последующем ремонте"></div>
                            <div class="actionRight">
                                <div class="redText">
                                    Диагностика Бесплатно при последующем ремонте у нас
                                </div>

                            </div>
                        </div><div class="action">
                            <div class="toning__action-pic"><img src="../img/action-3.png" alt="Гарантия на работу в автосервисе" title="Гарантия на работу в автосервисе"></div>
                            <div class="actionRight">
                                <div class="redText">
                                    Гарантия на работу
                                </div>
                            </div>
                        </div><div class="action">
                            <div class="toning__action-pic"><img src="../img/action-4.png" alt="Ремонт двигателя в центре Минска" title="Ремонт двигателя в центре Минска"></div>
                            <div class="actionRight">
                                <div class="redText">
                                    Опыт в ремонте двигателей более 15 лет
                                </div>
                            </div>
                        </div><div class="action">
                            <div class="toning__action-pic"><img src="../img/action-5.png" alt="Автосервис с низкими ценами" title="Автосервис с низкими ценами"></div>
                            <div class="actionRight">
                                <div class="redText">
                                    Низкие цены на все услуги
                                </div>
                            </div>
                        </div><div class="action">
                            <div class="toning__action-pic"><img src="../img/action-6.png" alt="Автосервис в центре Минска" title="Автосервис в центре Минска"></div>
                            <div class="actionRight">
                                <div class="redText">
                                    Центр Минска, рядом метро
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="content-h2">Наши услуги</h2>
                    <div class="services-items">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="services-item">
                                    <div class="services-item__photo services-item__photo-1"></div>
                                    <div class="services-item__name-wrapper"><div class="services-item__name">Замена гидрокомпенсаторов</div></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="services-item">
                                    <div class="services-item__photo services-item__photo-2"></div>
                                    <div class="services-item__name-wrapper"><div class="services-item__name">Ремонт головки блока цилиндров</div></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="services-item">
                                    <div class="services-item__photo services-item__photo-3"></div>
                                    <div class="services-item__name-wrapper"><div class="services-item__name">Замена маслосъемных колпачков</div></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="services-item">
                                    <div class="services-item__photo services-item__photo-4"></div>
                                    <div class="services-item__name-wrapper"><div class="services-item__name">Ремонт дизельных двигателей</div></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="services-item">
                                    <div class="services-item__photo services-item__photo-5"></div>
                                    <div class="services-item__name-wrapper"><div class="services-item__name">Замена прокладки ГБЦ</div></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="services-item">
                                    <div class="services-item__photo services-item__photo-6"></div>
                                    <div class="services-item__name-wrapper"><div class="services-item__name">Замена ремня ГРМ</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="content-h2">Ремонт двигателя В МИНСКЕ</h2>
                    <div class="contentInfo">
                     <p>Ремонт двигателя &ndash; это совокупность определенных видов работ узла ДВС, необходимых для восстановления или поддержания работоспособности и улучшения состояния силового агрегата. При таком ремонте комплексно восстанавливаются и заменяются основные рабочие узлы двигателя, чтобы путем таких работ вернуть агрегату ресурсные и эксплуатационные характеристики, близки к заводским показателям.</p><p><strong>Капитальный ремонт </strong>автомобильного двигателя считается технически сложной и дорогостоящей работой, требующей наличия теоретических знаний и практических умений, которая должна проводиться исключительно профессионалами и на специальном оборудовании. В противном случае, непрофессиональное вмешательство может стать причиной более серьезных поломок и полному выходу из строя силового агрегата и автомобиля в целом.</p><p>Особенности капитального ремонта двигателя</p><p>Чаще всего, <strong>капитальный ремонт</strong> в <strong>Минске</strong> включает в себя следующий основной комплекс работ:</p><ol><li>Разборку двигателя</li><li>Очистку двигательной системы</li><li>Проверку и оценку состояния рабочих узлов силового агрегата</li><li>Составление дефектной ведомости</li><li>Размена, восстановление изношенных и поврежденных элементов агрегата, <strong>ремонт турбин</strong> дизельных двигателей (в зависимости от степени и характера повреждений, дефектов, износа)</li><li>Проверка качества работ</li></ol><p>Во время ремонта может производиться гильзовка или расточка блока цилиндров, шлифовка коленвала, работа с охладительной системой и другие мероприятия для восстановления рабочих показателей бензинового или <strong>дизельного двигателя</strong> внутреннего сгорания.</p><p>В зависимости от характера неисправностей состав работ может быть разным. Поэтому даже высококвалифицированный специалист не способен без предварительной разборки и составления дефектной ведомости назвать точную <strong>стоимость</strong> ремонта.</p>       
                    </div>
                    <img src="../img/remont-dvigatelya-2.png" alt="Ремонт двигателя. Автосервис Мегасервис" title="Ремонт двигателя. Автосервис Мегасервис" class="contentImg">
                </div>
            </div>
        </div>
        </div>
        <div class="container service-price">
            <div class="row">
                <h2 class="content-h2">Стоимость работ</h2>
                <div class="toning-table-responsive">
                    <div class="service-price__titles">
                        <div class="service-price__title service-price__num">№</div>
                        <div class="service-price__title service-price__name">Наименование услуги</div>
                        <!-- <div class="service-price__title service-price__engine">Тип двигателя / ТС</div> -->
                        <div class="service-price__title service-price__sum">Цена услуги</div>
                    </div>
                    <div class="service-price__items">
                        <div class="service-price__item service-price__num">01</div>
                        <div class="service-price__item service-price__name">Компьютерная диагностика двигателя</div>
                        <!-- <div class="service-price__item service-price__engine">
                            <div class="service-price__item-inner">Отечественные</div>	
                            <div class="service-price__item-inner">Иномарки с рядным двигателем</div>
                            <div class="service-price__item-inner">Внедорожники</div>
                        </div> -->
                        <div class="service-price__item service-price__sum"> от 15 руб.
                            <!-- <div class="service-price__item-inner">от 150 руб.</div>	
                            <div class="service-price__item-inner">от 200 руб.</div>
                            <div class="service-price__item-inner">от 250 руб.</div> -->
                        </div>
                    </div> 
                    <div class="service-price__items">
                        <div class="service-price__item service-price__num">02</div>
                        <div class="service-price__item service-price__name">Полная диагностика двигателя</div>
                        <div class="service-price__item service-price__sum"> от 20 руб.</div>
                    </div> 
                    <div class="service-price__items">
                        <div class="service-price__item service-price__num">03</div>
                        <div class="service-price__item service-price__name">Замер компрессии двигателя</div>
                        <div class="service-price__item service-price__sum"> от 10 руб.</div>
                    </div> 
                    <div class="service-price__items">
                        <div class="service-price__item service-price__num">04</div>
                        <div class="service-price__item service-price__name">Замена клапанной крышки</div>
                        <div class="service-price__item service-price__sum"> от 20 руб.</div>
                    </div> 
                    <div class="service-price__items">
                        <div class="service-price__item service-price__num">05</div>
                        <div class="service-price__item service-price__name">Замена масла в двигателе</div>
                        <div class="service-price__item service-price__sum"> от 15 руб.</div>
                    </div> 
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">06</div>
                        <div class="service-price__item service-price__name">Замена маслосъемных колпачков</div>
                        <div class="service-price__item service-price__sum"> от 150 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">07</div>
                        <div class="service-price__item service-price__name">Замена прокладки поддона</div>
                        <div class="service-price__item service-price__sum"> от 30 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">08</div>
                        <div class="service-price__item service-price__name">Замена прокладки ГБЦ</div>
                        <div class="service-price__item service-price__sum"> от 300 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">09</div>
                        <div class="service-price__item service-price__name">Замена ГБЦ</div>
                        <div class="service-price__item service-price__sum"> от 300 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">10</div>
                        <div class="service-price__item service-price__name">Замена цепи ГРМ</div>
                        <div class="service-price__item service-price__sum"> от 200 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">11</div>
                        <div class="service-price__item service-price__name">Ремонт дизельных двигателей</div>
                        <div class="service-price__item service-price__sum"> от 200 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">12</div>
                        <div class="service-price__item service-price__name">Ремонт бензиновых двигателей</div>
                        <div class="service-price__item service-price__sum"> от 200 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">13</div>
                        <div class="service-price__item service-price__name">Чип тюнинг авто</div>
                        <div class="service-price__item service-price__sum"> от 200 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">14</div>
                        <div class="service-price__item service-price__name">Замена двигателя</div>
                        <div class="service-price__item service-price__sum"> от 300 руб.</div>
                    </div> 
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">15</div>
                        <div class="service-price__item service-price__name">Замена гидрокомпенсаторов</div>
                        <div class="service-price__item service-price__sum"> от 150 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">16</div>
                        <div class="service-price__item service-price__name">Снятие/установка ДВС</div>
                        <div class="service-price__item service-price__sum"> от 230 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">17</div>
                        <div class="service-price__item service-price__name">Замена шкива коленчатого вала</div>
                        <div class="service-price__item service-price__sum"> от 30 руб.</div>
                    </div> 
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">18</div>
                        <div class="service-price__item service-price__name">Замена водяного насоса (помпы)</div>
                        <div class="service-price__item service-price__sum"> от 40 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">19</div>
                        <div class="service-price__item service-price__name">Замена полуколец (вкладышей) коленвала</div>
                        <div class="service-price__item service-price__sum"> от 150 руб.</div>
                    </div> 
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">20</div>
                        <div class="service-price__item service-price__name">Замена сальника двигателя</div>
                        <div class="service-price__item service-price__sum"> от 30 руб.</div>
                    </div>
					<div class="service-price__items">
                        <div class="service-price__item service-price__num">21</div>
                        <div class="service-price__item service-price__name">Замена  свечей зажигания</div>
                        <div class="service-price__item service-price__sum"> от 20 руб.</div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="container toning-buttons">
            <div class="price-buttons">
                <p>Диагностика двигателя при ремонту у нас <span class="text-red">БЕСПЛАТНО</span></p>
                <p>
                    <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на диагностику</a>
                    <a href="#question-modal" data-toggle="modal" class="btn btn-red">Записаться на Ремонт</a>
                </p>
            </div>
        </div>
        <div class="container toning-comparison wrap-comparison">
            <div class="row">
                <div class="col-12"><div class="title text-center">ПРИМЕРЫ НАШИХ РАБОТ</div></div>
                <div class="col-sm-4">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/1-min.jpg"  alt="Ремонт ДВС" title="Замена маслосъемных колпачков">
                        <span>Ремонт ДВС</span>
                    </div>
                </div> 
                
                <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/2-min.jpg"  alt="Ремонт двигателя автомобиля" title="Двигатель автомобиля">
                        <span>Ремонт двигателя</span>
                    </div>
                </div> 
                
                <div class="col-sm-4">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/3-min.jpg"  alt="Капитальный ремонт двигателя" title="Капремонт авто">
                        <span>Капитальный ремонт двигателя</span>
                    </div>
                </div>
                
                <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/4-min.jpg"  alt="Капитальный ремонт ДВС" title="Ремонт бензиновых двигателей">
                        <span>Капитальный ремонт двигателя</span>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/5-min.jpg"  alt="Диагностика двигателя" title="Ремонт дизельных двигателей">
                        <span>Диагностика двигатедя</span>
                    </div>
                </div>                 
                                
                <div class="col-sm-4 hidden-xs">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/4-min.jpg"  alt="Проверка компрессии двигателя" title="Замена грм">
                        <span>Замена фаз vvt</span>
                    </div>
                </div> 
                <div class="col-sm-4 hidden-xs">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/2-min.jpg"  alt="Регулировка клапанов" title="Диагностика клапанов">
                        <span>Проверка зазоров</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="img__comparison text-center">
                        <img src="../img/content/remont-dvigatelya/6-min.jpg"  alt="Замена поршневых колец" title="раскоксовка поршневых колец">
                        <span>Диагностика ДВС</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container tonning-about">
            <div class="wrap-consultation">
                <div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i>на ремонт двигателя Вашего автомибля:</i></div>
                <div class="consultation-block consultation-block-contacts">
                    <div class="consultation-form">
                        <div class="phone consultation-phone">
                            <span class="sprites i-time"></span>
                            <p>
                                <a href="tel:+375296384455">+375 (29) 638-44-55</a>
                                <span>/</span>
                                <a href="tel:+375336384455">+375 (33) 638-44-55</a>
                            </p>
                            <p><i>Оставить заявку Вы можете круглосуточно!</i></p>
                        </div>
                    <p><a href="#callback" data-toggle="modal" class="btn btn-blue">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</a></p>
                    <div class="consultation-address">
                        <p>Мы находимся в центре Минска:</p>
                        <p class="text-blue">ул. Короля 88 100 метров от ТЦ Корона на Кальварийской</p>
                    </div>
                </div>                  
            </div>
            <h2 class="content-h2"><span>Почему стоит обратиться к нам?</span></h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="advantages-block">
                        <div class="span sprites i-advantages-1"></div>
                        <div class="title">7.5 лет опыта</div>
                        <p>Работы в сфере автоуслуг:</p>
                        <ul>
                            <li>—  Сеть автомоек МЕГАМОЙКА</li>
                            <li>—  Центр замены масел</li>
                            <li>—  Шинный сервис</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="advantages-block">
                        <div class="span sprites i-advantages-2"></div>
                        <div class="title">Низкие цены</div>
                        <p>Самые низкие цены в Минске на большинство услуг нашего авторсервиса.<br>Не упустите выгоду</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="advantages-block">
                        <div class="span sprites i-advantages-3"></div>
                        <div class="title">Центр Минска</div>
                        <p>Мы находимся в 100 метрах от торгового центра Король Кальваринка и в 2-х минутах от Метро.</p>
                    </div>
                </div>
            </div>
            <!-- about -->
            <div class="row toning__info">
                <div class="col-md-9 col-sm-8 toning__text-about">
				<p>Когда необходимо производить ремонт ДВС</p>
<p>Не следует путать ремонт <strong>бензиновых </strong>и дизельных двигателей от простой переборки ДВС, которая заключается лишь в разборке агрегата и замене тех частей, которые стали неисправными. <strong>Ремонт мотора </strong>производится тогда, когда отмечается потеря мощности и низкая компрессия, появляющиеся после естественного пробега автомобиля.</p>
<p>Кроме того, ремонт двигателя требуется при появлении ряда других признаков:</p>
<ul>
<li>Появление стуков и других посторонних шумов в кривошипно-шатунном механизме (КШМ)</li>
<li>Регулярное снижение давления масла в течение короткого промежутка времени (о падении давления масла в системе сигнализирует лампочка на приборной доске)</li>
<li>Падение компрессии, возникающее из-за износа поршневых колец, прогорания прокладки главного блока цилиндров и прогоранием клапанов</li>
<li>Увеличение расхода масла, которое может возникать из-за закупоривания колец поршня или снижения эластичности съемных колпаков газораспределительной системы.</li>
<li>Другие дефекты и сбои в работе ДВС</li>
</ul>
<p>Для точного определения характера неисправностей и масштаба ремонта проводится полная диагностика двигателя с помощью манометра, компрессометра, эндоскопа, стетоскопа и других приборов. Только после полной диагностики составляется дефектная ведомость с указанием видов работ, их объемов и используемых для ремонта запчастей, и расходных материалов, что является основанием для расчета <strong>цены</strong> ремонта.</p>
<p><strong>В Минске</strong> услуги по ремонту ДВС оказывает наша автомастерская. Все работы проводятся профессиональными автомеханиками с использованием специальных приборов и оборудования. Замена вышедших из строя элементов автомобильных систем производятся с использованием оригинальных запчастей и материалов, рекомендуемых к использованию производителями автомобилей.</p>
                    </div>
                <div class="col-md-3 col-sm-4 toning__right-slider">
                    <div class="right-slider">
                        <img src="/img/re/rem1.png" alt="Ремонт машины">
                        <img src="/img/re/gallery2.png" alt="Мастера ремонтируют автомобиль">
                        <img src="/img/re/galler1.png" alt="Автосервис Мегасервис">
                    </div>
                </div>
            </div>
        </div>
        <div class="container toning-gallery toning-gallery-desktop bottom-gallery">
            <div class="row">
                <div class="title text-center">Фотогалерея</div>
                <div class="gallery-slider gallery-slider-desktop">
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-3.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-3.jpg" alt="Мастера работают с заменой детали" title="Мастера работают с заменой детали" class="img-responsive center-block">
                        </a>
                        <p>Мастера работают с заменой детали</p>
                    </div>
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-2.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-2.jpg" alt="Современный автосервис в центре Минска" title="Современный автосервис в центре Минска" class="img-responsive center-block">
                        </a>
                        <p>Современный автосервис в центре Минска</p>
                    </div>
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-4.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-4.jpg" alt="Автосервис в Минске" title="Автосервис в Минске" class="img-responsive center-block">
                        </a>
                        <p>Работаем 7 дней в неделю!</p>
                    </div>
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-1.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-1.jpg" alt="Автосервис низких цен в Минске" title="Автосервис низких цен в Минске" class="img-responsive center-block">
                        </a>
                        <p>Автосервис низких цен</p>
                    </div>
                </div>
            </div>
        </div>   
        <div class="container toning-gallery toning-gallery-mobile">
            <div class="row">
                <div class="title text-center">Фотогалерея</div>
                <div class="gallery-slider gallery-slider-mobile">
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-3.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-3.jpg" alt="Мастера работают с заменой детали" title="Мастера работают с заменой детали" class="img-responsive center-block">
                        </a>
                        <p>Мастера работают с заменой детали</p>
                    </div>
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-2.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-2.jpg" alt="Современный автосервис в центре Минска" title="Современный автосервис в центре Минска" class="img-responsive center-block">
                        </a>
                        <p>Современный автосервис в центре Минска</p>
                    </div>
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-4.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-4.jpg" alt="Автосервис в Минске" title="Автосервис в Минске" class="img-responsive center-block">
                        </a>
                        <p>Работаем 7 дней в неделю!</p>
                    </div>
                    <div>
                        <a href="/img/content/tonirovka/toning-gallery-1.jpg" data-fancybox="gallery">
                            <img src="/img/content/tonirovka/toning-gallery-1.jpg" alt="Автосервис низких цен в Минске" title="Автосервис низких цен в Минске" class="img-responsive center-block">
                        </a>
                        <p>Автосервис низких цен</p>
                    </div>
                </div>
            </div>
        </div>               
        </div>	
        <div class="d_m" id="map"></div>
	</div>
	<footer>
			<div class="footer-block">
				<!-- top -->
				<a href="#wrap" class="top"></a>
				<!-- /top -->
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-lg-3 col-lg-offset-1">
							<div class="title-small">Услуги автосервиса</div>
							<ul class="footer-nav">
							    <li><a href="https://megaservice.by/remont-glushitelya/">Ремонт глушителей</a></li>
								<li><a href="#">Диагностика автомобиля</a></li>
								<li><a href="https://megaservice.by/remont-rulevoj-rejki/">Ремонт рулевых реек</a></li>
								<li><a href="#">Ремонт гидроусилителя</a></li>
								<li><a href="#">Автоэлектрика</a></li>
								<li><a href="https://megaservice.by/remont-startera-generatora/">Ремонт стартеров и генератора</a></li>
								<li><a href="https://megaservice.by/zamena-remnya-grm/">Заменя ремня ГРМ</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="title-small">Замена масел</div>
							<ul class="footer-nav">
								<li><a href="https://megaservice.by/oil/">Замена масла в двигателе</a></li>
								<li><a href="#">Замена масла в АКПП</a></li>
								<li><a href="#">Замена фильтров</a></li>
								<li><a href="#">Замена других жидкостей</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-lg-2">
							<div class="title-small">Автомойка</div>
							<ul class="footer-nav">
								<li><a href="#">Мойка автомобиля</a></li>
								<li><a href="https://megaservice.by/polirovka-kuzova/">Полировка</a></li>
								<li><a href="https://megaservice.by/himchistka-salona-avto/">Химчистка салона</a></li>
							</ul>
							<div class="title-small">Шиномонтаж</div>
							<ul class="footer-nav">
								<li><a href="https://megaservice.by/shinomontazh/">Правка дисков</a></li>
								<li><a href="#">Аргонная сварка</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="title-small">Мегасервис</div>
							<ul class="footer-nav">
								<li><a href="#">О нашей компании</a></li>
								<li><a href="#">Вакансии открытые</a></li>
								<li><a href="#">Реквизиты организации</a></li>
								<li><a href="https://megaservice.by/contacts/">Контактные данные</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
                <div class="footer__socials">
                    <p>Мы в социальных сетях</p>
                    <div class="footer__socials-items">
                        <a href="#" class="footer__social-item footer__social-item-instagram">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192c88.352,0,160-71.648,160-160V160
                                        C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48
                                        h192c61.76,0,112,50.24,112,112V352z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128z M256,336
                                        c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="393.6" cy="118.4" r="17.056"/>
                                </g>
                            </g>
                            </svg>
                        </a>
                        <a href="#" class="footer__social-item footer__social-item-vkontakte">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="96.496px" height="96.496px" viewBox="0 0 96.496 96.496" style="enable-background:new 0 0 96.496 96.496;"
                                    xml:space="preserve">
                                <g>
                                    <path d="M92.499,65.178c-2.873-3.446-6.254-6.387-9.453-9.51c-2.886-2.815-3.068-4.448-0.748-7.697
                                        c2.532-3.546,5.255-6.956,7.81-10.486c2.385-3.299,4.823-6.589,6.078-10.539c0.796-2.513,0.092-3.623-2.485-4.063
                                        c-0.444-0.077-0.903-0.081-1.355-0.081l-15.289-0.018c-1.883-0.028-2.924,0.793-3.59,2.462c-0.899,2.256-1.826,4.51-2.897,6.687
                                        c-2.43,4.936-5.144,9.707-8.949,13.747c-0.839,0.891-1.767,2.017-3.169,1.553c-1.754-0.64-2.271-3.53-2.242-4.507l-0.015-17.647
                                        c-0.34-2.521-0.899-3.645-3.402-4.135l-15.882,0.003c-2.12,0-3.183,0.819-4.315,2.145c-0.653,0.766-0.85,1.263,0.492,1.517
                                        c2.636,0.5,4.121,2.206,4.515,4.849c0.632,4.223,0.588,8.463,0.224,12.703c-0.107,1.238-0.32,2.473-0.811,3.629
                                        c-0.768,1.817-2.008,2.187-3.637,1.069c-1.475-1.012-2.511-2.44-3.525-3.874c-3.809-5.382-6.848-11.186-9.326-17.285
                                        c-0.716-1.762-1.951-2.83-3.818-2.859c-4.587-0.073-9.175-0.085-13.762,0.004c-2.76,0.052-3.583,1.392-2.459,3.894
                                        c4.996,11.113,10.557,21.917,17.816,31.759c3.727,5.051,8.006,9.51,13.534,12.67c6.265,3.582,13.009,4.66,20.112,4.328
                                        c3.326-0.156,4.325-1.021,4.479-4.336c0.104-2.268,0.361-4.523,1.48-6.561c1.098-2,2.761-2.381,4.678-1.137
                                        c0.959,0.623,1.767,1.416,2.53,2.252c1.872,2.048,3.677,4.158,5.62,6.137c2.437,2.48,5.324,3.945,8.954,3.646L93.744,75.5
                                        c2.264-0.148,3.438-2.924,2.138-5.451C94.969,68.279,93.771,66.703,92.499,65.178z"/>
                                </g>
                            </svg>
                        </a>
                        <a href="#" class="footer__social-item footer__social-item-facebook">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="96.124px" height="96.123px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;"
                                xml:space="preserve">
                                <g>
                                    <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
                                        c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
                                        c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
                                        c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
                                </g>
                            </svg>
                        </a>
                        <a href="#" class="footer__social-item footer__social-item-twitter">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
                                        c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
                                        c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
                                        c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
                                        c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
                                        c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
                                        c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
                                </g>
                            </g>
                            </svg>
                        </a>
                    </div>
                    <p>Подписывайтесь на каналы</p>
                </div>
				<div class="copyright">
					<p>&copy; Copyright. Все права защищены.  ООО «Отель Сервис Групп».</p>
                       <p>Юр. адрес: г. Минск. ул. Короля 88 Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 Без выходных</p>

                    <p>Наша организация не осуществляет розничную торговлю, все цены указанные на сайте носят ознакомительный характер. Данная информация является справочной и публичной офертой не является.</p>      
				</div>
			</div>
	</footer>
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
	<script type="text/javascript" src="/js/main.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/slow_scroll.js"></script>
	<script type="text/javascript" src="/js/jquery.fancybox.min.js"></script>
	
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
		$('.home-slider').slick();
		$('.gallery-slider-desktop').slick({
		  centerMode: true,
		  slidesToShow: 3,
		  centerPadding: '0px',
          dots: true, 
          autoplay:true  	  
        });
        $('.gallery-slider-mobile').slick({
		  slidesToShow: 1,
          dots: true, 
          autoplay:true,    
          mobileFirst: true  
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
     $('.right-slider').slick({
              arrows:false,
              dots: true,
              slidesToScroll: 1,
              slidesToShow: 1,
            });
	</script>
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css?2">
    <link rel="stylesheet" href="/css/re.css">
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);
			  function init () {
			    var myMap = new ymaps.Map("map", {
			    center: [53.90471857067563,27.528126500000003],
			    zoom: 16,
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
			        iconImageHref: '../img/i-map.png',
			        // Размеры метки.
			        iconImageSize: [134, 127],
			        // Смещение левого верхнего угла иконки относительно
			        // её "ножки" (точки привязки).
			        iconImageOffset: [-30, -100]
			  }));
			};
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