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
<body id="contactsPage">
	<?php
		include('nav.php');
	?>
	<div class="container">
		<div class="row contactsRow">
			<div class="col-lg-5">
				<div class="row contactsInfo">
					<div class="col-12">
						<div class="d-flex footerImgs contactsImg">
							<img src="img/icons/1.png">
							<img src="img/icons/2.png">
							<img src="img/icons/3.png">
							<img src="img/icons/4.png">
						</div>
					</div>
					<div class="col-12">
						<p>УР, г. Ижевск, ул. Динамовская, 83</p>
					</div>
					<div class="col-6">
						<p><span>Время работы:</span><br>пн-вс с 10:00 до 21:00</p>
					</div>
					<div class="col-6">
						<p>Примем заявок с<br>сайта круглосуточно</p>
					</div>
					<div class="col-6">
						<p><span>Телефоны:</span><br>+7 (912) 853 29 40<br>+7 (912) 444 87 29</p>
					</div>
					<div class="col-6">
						<p><span>Email:</span><br>haidarov_f@mail.ru</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<p>Получить консультацию</p>
								<form>								
									<div class="form-row">
										<div class="col-12">
											<input type="text" class="form-control" placeholder="Ваше имя*">
											<input type="email" class="form-control" placeholder="Ваш email*">
											<input type="number" class="form-control" placeholder="Ваш номер телефона*">
										</div>
										<div class="col-12">
											<textarea class="form-control" rows="3" placeholder='Ваш комментарий*'></textarea>
										</div>
										<div class="col-lg-6 col-12">
											<div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div>
										</div>
										<div class="col-lg-6 col-12">
											<p class="personalInformation">Нажимая на кнопку, вы даете свое согласие на обработку персональных данных.  <a href="">Узнать больше</a></p>
										</div>
										<div class="col-12 d-flex">
											<button class="blueBtn mx-auto" type="submit">Отправить</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa04519ca2914559135d78b1da6ed66455bebdc7d02c6a81d7356783aadc8dfed&amp;width=100%25&amp;height=681&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</div>
	</div>

	<?php
		include('footer.php');
	?>
<div id="toTop" ><img src="img/icons/top.png"></div>
	<script src="js/main.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</body>
</html>