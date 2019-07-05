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

    $from='Мегасервис ремонт печки заявка'; 

	

    mail($to,  "From:".$from, $message ); 

    

};

?>

<!doctype html>

<html lang="ru">



<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width">



    <title>Ремонт автомобильных печек в Минске</title>

  

    <link rel="icon" href="../img/favicon.ico">



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

                    <a href="/"><img src="../img/logo.png" alt="" class="img-responsive"></a>

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

                    <a href="callto:+375296274488"><img src="../img/operator.png" alt=""></a>

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

                                <a href="/"><img src="../img/logo.png" alt="" class="img-responsive"></a>

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

                    <img src="../img/content/pechka/remont-pechka.png" alt="">

                    <div class="slider-content">

                        <div class="text-center">
                        
                            <div class="red-block-top">Всего<br><span>от 20</span><br>рублей</div>

                            <p><span class="text-red">РЕМОНТ ПЕЧКИ</span></p>

                            <p>АВТОМОБИЛЯ В МИНСКЕ</p>
                            
                            <div class="red-block">Самые низкие цены! Центр Минска</div>

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
				<div class="free-text"><span class="text-red">Бесплатная компьютерная </span>диагностика при ремонте в нашем сервисе!</div>
            </div>

            <!-- /free -->

            <!-- services -->

            <div class="services">

                <div class="title">Услуги по ремонту систем отопления авто </div>

                <p>Если вы заметили, что печка стала плохо греть автомобиля, с нее дует чуть теплый воздух, скорее всего она забита и требует промывки. Процедура не занимает много времени, но в домашних условиях ее выполнять не рекомендуют. Неправильная диагностика, использование подручных средств для чистки может стать причиной более серьезной поломки и дорогостоящего ремонта. Наш автосервис выполнит промывку и ремонт радиатора печки быстро, с гарантией качества и по выгодным ценам.</p>

                
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

                                <li>— Шинный сервис</li>

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
				<div class="title text-center">Прейскурант на услуги</div>
				<div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table price-table">
                                <tr>
                                    <th>№</th>
                                    <th>Наименование работ</th>
                                    <th>Условия </th>
                                    <th>Цена </th>
                                </tr>
                                <tr>
                                    <td>01.</td>
                                    <td>Диагностика (выявим причину неисправности)</td>
                                    <td><span class="text-red">БЕСПЛАТНО (ремонтируя у нас)</span></td>
                                    <td>15 руб.</td>
                                </tr>
                                <tr>
                                    <td>02.</td>
                                    <td>Ремонт системы отопления</td>
                                    <td>Самые низкие цены!</td>
                                    <td>до 25 руб.</td>
                                </tr>
								<tr>
                                    <td>03.</td>
                                    <td>Проверка радиатора на герметичность</td>
                                    <td></td>
                                    <td> 20 руб.</td>
                                </tr>
								<tr>
                                    <td>04.</td>
                                    <td>Замена радиатора</td>
                                    <td></td>
                                    <td>от 40 руб.</td>
                                </tr>
								<tr>
                                    <td>05.</td>
                                    <td>Снятие/установка салонного вентилятора</td>
                                    <td></td>
                                    <td>от 20 руб.</td>
                                </tr>
								<tr>
                                    <td>06.</td>
                                    <td>Замена фильтра салона</td>
                                    <td></td>
                                    <td>от 15 руб.</td>
                                </tr>
								<tr>
                                    <td>07.</td>
                                    <td>Аргонная сварка радиатора/трубок</td>
                                    <td></td>
                                    <td>от 5 руб.</td>
                                </tr>
								<tr>
                                    <td>08.</td>
                                    <td>Замена охлаждающей жидкости</td>
                                    <td></td>
                                    <td>от 15 руб.</td>
                                </tr>
								<tr>
                                    <td>09.</td>
                                    <td>Ремонт электрики печки</td>
                                    <td></td>
                                    <td>от 15 руб.</td>
                                </tr>
								<tr>
                                    <td>10.</td>
                                    <td>Ремонт вентилятора</td>
                                    <td></td>
                                    <td>от 15 руб.</td>
                                </tr>
								<tr>
                                    <td>11.</td>
                                    <td>Промывка радиатора печки</td>
                                    <td></td>
                                    <td>от 60 руб.</td>
                                </tr>
								<tr>
                                    <td>12.</td>
                                    <td>Заправка кондиционера</td>
                                    <td></td>
                                    <td>от 15 руб.</td>
                                </tr>
								<tr>
                                    <td>13.</td>
                                    <td>Ремонт автокондиционера</td>
                                    <td></td>
                                    <td>от 25 руб.</td>
                                </tr>
								<tr>
                                    <td>14.</td>
                                    <td>Диагностика подвески</td>
                                    <td><span class="text-red">БЕСПЛАТНО! Ремонтируя авто у нас!</span></td>
                                    <td> 15 руб.</td>
                                </tr>
								<td>15.</td>
                                    <td>Мойка автомобиля</td>
                                    <td><span class="text-red">БЕСПЛАТНО (при ремонте свыше 100 руб)</span></td>
                                    <td>12 руб.</td>
                            </tr>
							
                        </table>

                    </div>



                </div>

                <div class="price-buttons">

                    <p>Закажите ремонт печки на этой неделе и получите <span class="text-red">Скидку до 15%</span></p>

                    <p>

                        <a href="#entry-modal" data-toggle="modal" class="btn btn-blue">Записаться на замену</a>

                        <a href="#question-modal" data-toggle="modal" class="btn btn-red">Задать вопрос мастеру</a>

                    </p>

                </div>

            </div>

            <!-- /price -->


            <!-- consultation -->

            <div class="wrap-consultation">

                <div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i>на замену глушителя вы можете по телефонам:</i></div>

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
			<h2>Диагностика и ремонт автомобильных печек</h2>
<p></p>

<p>Неисправность печки приводит к нарушению температурного режима в салоне и значительным неудобствам, особенно в холодное время года. Но для эффективного ремонта необходимо провести диагностику, которая укажет на реальную причину неисправности.</p>
<p><font size="4">Наиболее распространенные проблемы, в результате которых печка дует холодным воздухом:</font></p>

	 <p style="margin-left:0.5in">низкое качество или уровень антифриза;</p>
	 <p style="margin-left:0.5in">тяга заслонки соскочила с привода;</p>
	 <p style="margin-left:0.5in">неисправность термостата;</p>
	 <p style="margin-left:0.5in">засорение отопителя.</p>

<p>Специалисты автосервиса точно определят проблему и выберут наиболее эффективный способ ремонта (промывка, сварка радиатора печки и др.).</p>

<h3>Промывка радиатора (отопителя) печки</h3>

<p>Одна из самых распространенных причин неисправности автомобильных печек – засорение. Со временем на внутренних стенках радиатора скапливается накипь, грязь и т.д. Это значительно ухудшает теплообмен и замедляет циркуляцию жидкости. В результате салон вашего автомобиля начинает плохо прогреваться.</p>

<p>В таком случае нужна замена радиатора печки, но существует и более дешевое решение вопроса – профессиональная промывка отопителя. Наш автосервис оснащен необходимым оборудованием, что позволяет эффективно очистить радиатор печки быстро и недорого.</p>

<h3>Промывка печки без радиатора</h3>
<p>Наличие специального оборудования позволяет промыть печку без снятия радиатора. Такая технология дает возможность избежать процедуры демонтажа, которая сопровождается определенными рисками, и сэкономить время. К системе подключается специальное оборудование, которое под давлением подает специальное средство, размягчающее и удаляющее отложения. Жидкость двигается по кругу – промывает внутреннюю поверхность радиатора, после чего полностью удаляется из системы. В результате отложения удаляются и повышается качество теплообмена. Химическое средство не наносит вреда самой печке, но удаляет все отложения, в том числе труднорастворимые. Такой метод считается довольно эффективным.</p>

<h3>Промывка печки со снятием радиатора</h3>
<p>Промывка радиатора печки со снятием – более трудоемкая процедура. Отопитель снимается, подключается к специальной насосной установке, где проводится аналогичная процедура промывки чистящим средством. Используют такой способ чаще всего в том случае, если есть подозрение повреждения целостности радиатора и нужно проверить, нет ли течи.</p>

<p>Наш автосервис предлагает комплекс услуг по ремонту печки без снятия или со снятием радиатора. Мы используем лишь качественные химические растворы, рекомендованные производителем, что исключает повреждение отопителя. Гарантируем высокое качество и результат прочистки.</p>

<p>Если печка начала дуть холодным, срочно обращайтесь в наш центр. Причин может быть много, некоторые из них серьезные и могут спровоцировать дорогостоящий ремонт при несвоевременном вмешательстве. Мы проводим диагностику на профессиональном оборудовании, что позволяет точно определить причину проблемы и устранить ее в максимально короткий срок.</p>

               
            </div>

            <!-- /text-block -->

                  <!-- gallery -->
            <div class="title text-center">Фотогалерея</div>
			<div class="gallery-slider">
				<div>
					<a href="../img/content/img1.jpg" data-fancybox="gallery"><img src="../img/content/img1.jpg" alt="" class="img-responsive center-block"></a>
					<p>АВТОСЕРВИС НИЗКИХ ЦЕН</p>
				</div>
				<div>
					<a href="../img/content/img9.jpg" data-fancybox="gallery"><img src="../img/content/img9.jpg" alt="" class="img-responsive center-block"></a>
					<p>Работаем 7 дней в неделю!</p>
				</div>
				<div>
					<a href="../img/content/img4.jpg" data-fancybox="gallery"><img src="../img/content/img4.jpg" alt="" class="img-responsive center-block"></a>
					<p>Современный автосервис в центре Минска</p>
				</div>
				<div>
					<a href="../img/content/img11.jpg" data-fancybox="gallery"><img src="../img/content/img11.jpg" alt="" class="img-responsive center-block"></a>
					<p>Комфортная комната клиента</p>
				</div>
				<div>
					<a href="../img/content/img10.jpg" data-fancybox="gallery"><img src="../img/content/img10.jpg" alt="" class="img-responsive center-block"></a>
					<p>Большой выбор масел и фильтров</p>
				</div>
				<div>
					<a href="../img/content/img21.jpg" data-fancybox="gallery"><img src="../img/content/img21.jpg" alt="" class="img-responsive center-block"></a>
					<p>Широкий спектр услуг</p>
				</div>
				<div>
					<a href="../img/content/img8.jpg" data-fancybox="gallery"><img src="../img/content/img8.jpg" alt="" class="img-responsive center-block"></a>
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

                            <img src="../img/content/review-1.jpg" alt="" class="img-responsive">

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

                            <img src="../img/content/review-2.jpg" alt="" class="img-responsive">

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

                            <img src="../img/content/review-1.jpg" alt="" class="img-responsive">

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

                            <img src="../img/content/review-2.jpg" alt="" class="img-responsive">

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

                            <img src="../img/content/review-1.jpg" alt="" class="img-responsive">

                            <div class="progress rating">

                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- /review -->

        </div>
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

                    <p>© Copyright. Все права защищены. ООО «Отель Сервис Групп».</p>

                    <p>Юр. адрес: г. Минск. ул. Селицкого 39Б. Электронная почта megaminsk@inbox.ru Режим работы: 09:00 - 21:00 (пн-сб), 09:00 - 21:00 (вс)</p>

                    <p>Наша организация не осуществляет розничную торговлю, все цены указанные на сайте носят ознакомительный характер. Данная информация является справочной и публичной офертой не является.

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



	  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/slick.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/style.css?2">

    <link rel="stylesheet" href="../remont-pechki/css/style.css">

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

