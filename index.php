<?php

include_once 'fields.php';

$utm = '';
if(!empty($_GET['utm_term'])){ $utm.= 'utm_term=' . $_GET['utm_term'] ;}
if(!empty($_GET['utm_source'])){ $utm.= '&utm_source=' . $_GET['utm_source'] ;}
if(!empty($_GET['utm_medium'])){ $utm.= '&utm_medium=' . $_GET['utm_medium'] ;}
if(!empty($_GET['utm_content'])){ $utm.= '&utm_content=' . $_GET['utm_content'] ;}
if(!empty($_GET['utm_campaign'])){ $utm.= '&utm_campaign=' . $_GET['utm_campaign'];}


?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	
	<title>Snap-On Smile - подарите себе идеальную улыбку!</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=480">

	<meta name="description" content="Snap-On Smile – уникальное приспособление, которое сделает вашу улыбку неотразимой. С помощью него вы перестанете стесняться своих зубов и сможете улыбаться так часто, как этого захотите.">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="https://static.topproducty.ru/land/css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!--[if lt IE 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?=$pixel?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?=$pixel?>&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
	
	<div class="main_wrapper">

		<!-- header 3 -->

		<header class="offer_section offer3">
			<h1 class="main_title">Snap-On Smile</h1>
			<div class="info_block">
				<p class="subtitle">Подарите себе идеальную улыбку!</p>
				<div class="discount"><b>53% скидка</b></div>
				<img src="images/offer3__image.jpg" alt="Snap-On Smile">
			</div>
			<div class="price_block">
				<div class="price_item old">
					<div class="text">Обычная цена:</div>
					<div class="value">640 грн</div>
				</div>
				<div class="price_item new">
					<div class="text">Цена сегодня:</div>
					<div class="value">299 грн</div>
				</div>
			</div>
			<div class="benefits_block clearfix">
				<div class="benefit_item">
					<img src="images/offer3__benefit1_image.jpg" alt="Snap-On Smile">
					<p>Универсальный размер</p>
				</div>
				<div class="benefit_item">
					<img src="images/offer3__benefit2_image.jpg" alt="Snap-On Smile">
					<p>Надежное крепление</p>
				</div>
				<div class="benefit_item">
					<img src="images/offer3__benefit3_image.jpg" alt="Snap-On Smile">
					<p>Сверхтонкие, прочные, удобные</p>
				</div>
			</div>
			<div class="timer_block clearfix">
				<p>Предложение действует:</p>
				<div class="timer clearfix">
					<div class="timer_item">
						<div class="count hours"></div>
						<div class="text">часов</div>
					</div>
					<div class="timer_item">
						<div class="count minutes"></div>
						<div class="text">минут</div>
					</div>
					<div class="timer_item">
						<div class="count seconds"></div>
						<div class="text">секунд</div>
					</div>
				</div>
			</div>
			<a href="#order_form" class="button">Оформить заказ</a>
			<div class="products_count">Осталось <b>9</b> упаковок по акции</div>
		</header>

		<!-- /header 3 -->

		<!-- benefits -->

		<section class="benefits_section">
			<h2 class="title"><span>Забудьте о таких</span> проблемах</h2>

			<!-- benefits 2 -->

			<div class="benefits_list2">
				<div class="benefit_item">
					<img src="images/benefits2__benefit1_image.jpg" alt="Snap-On Smile">
					<p>Неровные зубы или большие промежутки между зубами</p>
				</div>
				<div class="benefit_item">
					<img src="images/benefits2__benefit2_image.jpg" alt="Snap-On Smile">
					<p>Отсутствует один или несколько зубов, сколотые зубы</p>
				</div>
				<div class="benefit_item">
					<img src="images/benefits2__benefit3_image.jpg" alt="Snap-On Smile">
					<p>Зубы утратили белизну эмали</p>
				</div>
				<div class="benefit_item">
					<img src="images/benefits2__benefit4_image.jpg" alt="Snap-On Smile">
					<p>Старые потемневшие пломбы</p>
				</div>
			</div>

			<!-- benefits 2 -->

		</section>

		<!-- /benefits -->

		<!-- description -->

		<section class="description_section description1">
			<img class="image image1" src="images/description1__image1.jpg" alt="Snap-On Smile">
			<p>Сломанные, кривые, отсутствующие зубы спереди не добавляют нам всем привлекательности и отталкивают от нас людей. Именно поэтому мы стараемся как можно меньше улыбаться и не показывать свои передние зубы.</p>
			<img class="image image2" src="images/description1__image2.jpg" alt="Snap-On Smile">
			<p><b>Snap-On Smile – уникальное приспособление, которое сделает вашу улыбку неотразимой.</b> С помощью него вы перестанете стесняться своих зубов и сможете улыбаться так часто, как этого захотите.</p>
			<p><b>Ваша улыбка будет нравиться всем!</b></p>
		</section>

		<!-- /description -->

		<!-- image -->

		<img class="result_image" src="images/result_image.jpg" alt="Snap-On Smile">

		<!-- /image -->

		<!-- description -->

		<section class="description_section description2">
			<h2 class="title"><span>Snap-On Smile</span> созданы специально для вас</h2>
			<img class="image image1" src="images/description2__image1.jpg" alt="Snap-On Smile">
			<p>Snap-On Smile – простые и удобные съемные виниры, которые подходят каждому. Они настолько удобны, что уже через 10 минут после вставки, вы перестаете их замечать. Никто и никогда, не зная вас, не догадается, что это виниры, а не ваши настоящие красивые зубы.</p>
			<img class="image image2" src="images/description2__image2.jpg" alt="Snap-On Smile">
			<p><b>Snap-On Smile не требуют обточки зубов, не вредят эмали и деснам.</b> Они производятся из сверхтонкого и сверхпрочного медицинского полипропилена. Это очень надежный материал, который не теряет своей привлекательности и прочности на протяжении десятков лет.</p>
			<ul class="list2 marker1">
				<li>Устанавливаются без боли и обточки зубов</li>
				<li>Гипоаллергенный материал и фиксатор</li>
				<li>Идеально ровные и белые зубы</li>
				<li>Надежное крепление 24/7</li>
				<li>Универсальный размер</li>
			</ul>
			<a href="#order_form" class="button">Оформить заказ</a>
		</section>

		<!-- /description -->

		<!-- benefits -->

		<section class="benefits_section yellow_theme">
			<h2 class="title">Использовать<br>Snap-On Smile<br><span>очень просто!</span></h2>

			<!-- benefits 1 -->

			<div class="benefits_list1">
				<div class="benefit_item">
					<img src="images/benefits1__benefit1_image.jpg" alt="Snap-On Smile">
					<h4>Шаг 1</h4>
					<p>Опустите накладки на 2 минуты в горячую воду</p>
				</div>
				<div class="benefit_item">
					<img src="images/benefits1__benefit2_image.jpg" alt="Snap-On Smile">
					<h4>Шаг 2</h4>
					<p>Плотно прижмите к наружной стороне зубов</p>
				</div>
				<div class="benefit_item">
					<img src="images/benefits1__benefit3_image.jpg" alt="Snap-On Smile">
					<h4>Шаг 3</h4>
					<p>Улыбайтесь как можно чаще, ведь красивая улыбка идет всем!</p>
				</div>
			</div>

			<!-- benefits 1 -->

		</section>

		<!-- /benefits -->

		<!-- reviews 2 -->

		<section class="reviews2_section gray_theme">
			<h2 class="title">Отзывы <span>покупателей</span></h2>
			<div class="reviews_list owl-carousel">
				<div class="review_item">
					<img class="photo" src="images/reviews2__review1_photo.jpg" alt="Snap-On Smile">
					<p>У меня были желтые и кривые зубы, которые устраивали меня, но не устраивали мою жену. Тут она нашла виниры Snap-On Smile, купила их себе, поносила и заказала такие же мне. Честно скажу, не очень хотел их носить. Но когда попробовал, удивился. Они очень удобные, крепятся прочно, а зубы выглядят идеально. Теперь на любой официальный случай они у меня под рукой.</p>
					<div class="author_block clearfix">
						<img src="images/reviews__review1_avatar.jpg" alt="Snap-On Smile">
						<div class="author_info">
							<div class="name">Денис</div>
							<div class="text">Киев, 26 лет</div>
						</div>
					</div>
				</div>
				<div class="review_item">
					<img class="photo" src="images/reviews2__review2_photo.jpg" alt="Snap-On Smile">
					<p>У меня между передними зубами большая трещина, выглядит не очень красиво, я всегда мечтала ее закрыть как-нибудь. Увидела рекламу, заказала виниры Snap-On Smile, исполнила свою мечту! Зубки полностью покрываются этой пластинкой, выглядит очень естественно и красиво! Зубки белые, ровные сразу, то что надо! Берите, не пожалеете)</p>
					<div class="author_block clearfix">
						<img src="images/reviews__review2_avatar.jpg" alt="Snap-On Smile">
						<div class="author_info">
							<div class="name">Ирина</div>
							<div class="text">Днепр, 30 лет</div>
						</div>
					</div>
				</div>
				<div class="review_item">
					<img class="photo" src="images/reviews2__review3_photo.jpg" alt="Snap-On Smile">
					<p>Заказал себе Snap-On Smile потому что вроде все берут их. У меня зубы мягко говоря в не очень хорошем состоянии. Ну думаю попробую. Виниры эти полностью оправдали мои ожидания. Я стал улыбаться, не стесняясь своих зубов. Отличить от настоящих зубов эти виниры невозможно. Всем, у кого передние зубы в не очень хорошем состоянии, крайне рекомендую!</p>
					<div class="author_block clearfix">
						<img src="images/reviews__review3_avatar.jpg" alt="Snap-On Smile">
						<div class="author_info">
							<div class="name">Михаил</div>
							<div class="text">Харьков, 28 лет</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- /reviews 2 -->

		<!-- order steps 1 -->

		<section class="order1_section">
			<h2 class="title"><span>Как сделать</span> заказ?</h2>
			<div class="order_steps1">
				<div class="step_item">
					<div class="step_wrapper">
						<img src="images/order_steps__step1_icon.png" alt="Snap-On Smile">
						<h4>Заявка</h4>
						<p>Заполните форму на сайте</p>
					</div>
				</div>
				<div class="step_item">
					<div class="step_wrapper">
						<img src="images/order_steps__step2_icon.png" alt="Snap-On Smile">
						<h4>Звонок</h4>
						<p>Наш менеджер перезвонит для уточнения деталей</p>
					</div>
				</div>
				<div class="step_item">
					<div class="step_wrapper">
						<img src="images/order_steps__step3_icon.png" alt="Snap-On Smile">
						<h4>Отправка</h4>
						<p>Доставляем ваш товар в течение<br>1-3 дней</p>
					</div>
				</div>
				<div class="step_item">
					<div class="step_wrapper">
						<img src="images/order_steps__step4_icon.png" alt="Snap-On Smile">
						<h4>Получение</h4>
						<p>Оплачиваете при получении на Новой Почте</p>
					</div>
				</div>
			</div>
		</section>

		<!-- /order steps 1 -->

		<!-- order 3 -->

		<section class="offer_section offer3 order">
			<h3 class="main_title">Snap-On Smile</h3>
			<div class="info_block">
				<p class="subtitle">Подарите себе идеальную улыбку!</p>
				<div class="discount"><b>53% скидка</b></div>
				<img src="images/offer3__image.jpg" alt="Snap-On Smile">
			</div>
			<div class="price_block clearfix">
				<div class="price_item old">
					<div class="text">Обычная цена:</div>
					<div class="value">640 грн</div>
				</div>
				<div class="price_item new">
					<div class="text">Цена сегодня:</div>
					<div class="value">299 грн</div>
				</div>
			</div>
			<div class="benefits_block clearfix">
				<div class="benefit_item">
					<img src="images/offer3__benefit1_image.jpg" alt="Snap-On Smile">
					<p>Универсальный размер</p>
				</div>
				<div class="benefit_item">
					<img src="images/offer3__benefit2_image.jpg" alt="Snap-On Smile">
					<p>Надежное крепление</p>
				</div>
				<div class="benefit_item">
					<img src="images/offer3__benefit3_image.jpg" alt="Snap-On Smile">
					<p>Сверхтонкие, прочные, удобные</p>
				</div>
			</div>
			<div class="timer_block clearfix">
				<p>Предложение действует:</p>
				<div class="timer clearfix">
					<div class="timer_item">
						<div class="count hours"></div>
						<div class="text">часов</div>
					</div>
					<div class="timer_item">
						<div class="count minutes"></div>
						<div class="text">минут</div>
					</div>
					<div class="timer_item">
						<div class="count seconds"></div>
						<div class="text">секунд</div>
					</div>
				</div>
			</div>
			<form id="order_form" class="order_form" action="/order.php?<?=$utm?>" method="POST" >
				<input class="field" type="text" name="name" placeholder="Введите Ваше имя" required>
				<input class="field" type="tel" name="phone" placeholder="Введите Ваш телефон" required>
				<button class="button">Оформить заказ</button>
			</form>
			<div class="products_count">Осталось <b>9</b> упаковок по акции</div>
		</section>

		<!-- /order 3 -->

		<!-- footer -->

		<footer class="footer_section">
			<a href="politics.html" target="_blank">Политика конфиденциальности</a><br>
			<a href="agreement.html" target="_blank">Пользовательское соглашение</a>
		</footer>

		<!-- /footer -->

	</div>

	<!-- scripts -->

	





<link rel="stylesheet" type="text/css" href="//static.topproducty.ru/fonts/roboto.css">
<script src="//static.topproducty.ru/js/jquery.js" type="text/javascript"></script>
<script src="//static.topproducty.ru/js/plugins.js?v=1551018127" type="text/javascript"></script>

<script src="//static.topproducty.ru/js/detect.js" type="text/javascript"></script>
    <script src="js/scripts.js"></script>

</body>
</html>