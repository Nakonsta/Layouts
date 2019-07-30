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



	<title>Услуги салона авто в Минске</title>

	<link rel="stylesheet" href="/css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="/css/slick.css">

	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<link rel="stylesheet" href="/css/style.css?2">

	<link rel="stylesheet" href="/yslygi/css/style.css">

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

			    <div class="header__fixed_operators"><a href="callto:627-44-88"><img src="/img/operator.png" alt="" ></a></div>					

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
								<li>
								    <a class="btn_open" href="#"><span>Услуги </span><span class="sprites i-caret"></span></a>
                                    <div class="content_open">
                                        <div class="container">
                                            <div class="block_link">
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block_yslygi">
                                                    <div class="yslygi">
                                                        <ul><a href="#">Ремонт электрооборудования <span></span></a>
                                                            <li><a href="#">Замена масла в двигателе</a></li>
                                                            <li><a href="#">Замена масла в АКПП</a></li>
                                                            <li><a href="#">Замена масла в МКПП</a></li>
                                                            <li><a href="#">Замена фильтров</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
					<img src="../img/content/yslygi/header.jpg" alt="">
					<div class="slider-content">
						<div class="text-center">
							<p>Полный ассортимент наших услуг</p>
                            <i>Наш автосервисный комплекс прделагает Вам более 230 услуг в одном месте</i>
						</div>
					</div>
				</div>
			</div>

			<!-- /home-slider -->

			<div class="">

				<div class="card"></div>
                <img class="card_img" src="../img/content/yslygi/premium.png" alt="">

			</div>

		</div>

		<!-- /wrap-home-slider -->

		<div class="container">

			<!-- free -->

			<div class="free-block">
				<div class="free-text"><span class="text-red">ДОВЕРЬТЕ АВТО ПРОФЕССИОНАЛАМ!</span></div>
			</div>

			<!-- /free -->
            
			
            <!-- yslygi -->
            
            <div class="row block_clear">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/11.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">01.</span> Замена масел и жидкостей</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/12.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">02.</span> Техобслуживание</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/13.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">03.</span> Диагностика автомобиля</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/14.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">04.</span> Ремонт<br> электрооборудования</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/15.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">05.</span> Ремонт подвески</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/16.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">06.</span> Ремонт тормозной системы</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/17.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">07.</span> Ремонт рулевого<br> управления</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/18.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">08.</span> Ремонт системы<br> охлаждения</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/1.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">09.</span> Ремонт выхлопной<br> системы</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/2.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">10.</span> Ремонт сцепления</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/19.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">11.</span> Ремонт коробки передач</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/3.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">12.</span> Ремонт двигателя</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/4.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">13.</span> Автостекла</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/5.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">14.</span> Автокондиционеры</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/6.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">15.</span> Автомойки</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/7.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">16.</span> Шиномонтаж</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/8.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">17.</span> Детейлинг</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="block_yslygi">
                        <img src="/img/content/yslygi/9.png">
                        <div class="yslygi">
                            <ul><a href="#"><span class="text-red">18.</span> Другие услуги</a>
                                <li><a href="#">Замена масла в двигателе</a></li>
                                <li><a href="#">Замена масла в АКПП</a></li>
                                <li><a href="#">Замена масла в МКПП</a></li>
                                <li><a href="#">Замена фильтров</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
            </div>
            
            
            
            
            <!-- /yslygi -->
            
            
            <!-- consultation -->

			<div class="wrap-consultation">

				<div class="title-big title-big-consultation">ЗАПИСАТЬСЯ <i> вы можете по телефонам:</i></div>

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



	

</body>

</html>

