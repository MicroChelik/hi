<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="shortcut icon" href="/img/icons/favicon.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<title>Хай-Тандем</title>
</head>
<body id="servicesPage">
	<?php
		include('nav.php');
	?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb pl-0">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Услуги</li>
		 	</ol>
		</div>
	</div>
	<section id="servicesFirstRow">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-1 col-12">
					<p>
						ООО "Хай-Тандем"- имеет собственный Учебный центр и Лабораторию радиационного контроля. Присоединяйтесь как Партнер или Заказчик, мы будем рады общению с Вами!
					</p>
					<a href="accountPage.php">
						<button class="lightBlueBtn">Мои программы</button>
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php
		include('services.php');
	?>
	<section class="consultation">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<h3>Задать вопрос</h3>
					<form>
						<div class="form-row">
							<div class="col-lg-6">
								<input type="text" class="form-control" placeholder="Ваше имя*">
								<input type="email" class="form-control" placeholder="Ваш email*">
								<input type="number" class="form-control" placeholder="Ваш номер телефона*">
							</div>
							<div class="col-lg-6">
								<textarea class="form-control" rows="3" placeholder='Ваш комментарий*'></textarea>
								<p class="personalInformation">Нажимая на кнопку, вы даете свое согласие на обработку персональных данных.  <a href="">Узнать больше</a></p>
							</div>
							<div class="col-lg-6 col-12 recaptcha-wrapper">
									<div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div>
								</div>
								<div class="col-lg-6 d-flex">
									<button class="blueBtn mx-auto" type="submit">Отправить</button>
								</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php
		include('footer.php');
	?>
	<?php
		include('htmlEndBody.php');
	?>