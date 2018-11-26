<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<title>Хай-Тандем</title>
</head>
<body class="servicePage" id="thisEducationProgramm">
	<?php
		include('nav.php');
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-7 aboutEducationProgramm">
				<h3>Что входит в программу обучения?</h3>
				<p>
					Вообще-то это, по сути, отдельный подпроект, который будет иметь с РыбаТекстом общий API. 
				</p>
				<p>
					Онлайн-генераторов изображений сейчас довольно много, но какие-то не умеют отдавать фиксированные картинки (всегда передают случайные), в каких-то нет категорий, а многие просто недоступны по HTTPS (что накладывает ограничения на использование). 
				</p>
				<p>
					В общем, идеала мы так и не нашли.
				</p>
				<p>
					 И, конечно, хотим создать его самостоятельно.
				</p>
				<p>
					Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: укрепление и развитие внутренней структуры предполагает независимые способы реализации экспериментов, поражающих по своей масштабности и грандиозности. В своем стремлении улучшить пользовательский опыт мы упускаем, что тщательные исследования конкурентов представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть обнародованы! 
				</p>
				<p>
					А еще независимые государства объединены в целые кластеры себе подобных. Противоположная точка зрения подразумевает, что некоторые особенности внутренней политики заблокированы в рамках своих собственных рациональных ограничений.
				</p>
			</div>
			<div class="col-lg-5">
				<div class="card">
					<div class="card-top">
						<p>Стоимость обучения</p>
						<p class="price">5 000 <span class="priceLowerCase">руб.</span></p>
					</div>
					<div class="card-body">
						<p><span class="greyText">Срок обучения:</span> 8 часов</p>
						<p><span class="greyText">Кол-во вопросов в тесте:</span> 80 вопросов</p>
						<hr>
						<p class="cardTitle">Заказать</p>
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
	<?php
		include('services.php');
	?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p>
					Предварительные выводы неутешительны: высокое качество позиционных исследований, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для благоприятных перспектив. Кстати, акционеры крупнейших компаний будут смешаны с неуникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.
				</p>
			</div>
		</div>
	</div>
	<section class="schemeOfWork">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>Схема работы</h3>
				</div>
				<div class="col-12 schemes d-flex">
					<div class="col-3 scheme arrowAfterBLock">
						<div class="col-12 d-flex schemeNumber">
							<p>1</p>
						</div>
						<div class="col-12 d-flex schemeText">
							<p>Вы подаете заявку на бланке</p>
						</div>
					</div>
					<div class="col-3 scheme arrowAfterBLock">
						<div class="col-12 d-flex schemeNumber">
							<p>2</p>
						</div>
						<div class="col-12 d-flex schemeText">
							<p>Оплачиваете выбранную программу обучения</p>
						</div>
					</div>
					<div class="col-3 scheme arrowAfterBLock">
						<div class="col-12 d-flex schemeNumber">
							<p>3</p>
						</div>
						<div class="col-12 d-flex schemeText">
							<p>Получаете доступ к курсу</p>
						</div>
					</div>
					<div class="col-3 scheme">
						<div class="col-12 d-flex schemeNumber">
							<p>4</p>
						</div>
						<div class="col-12 d-flex schemeText">
							<p>Проходите обучение и сдаете тест</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		include('comments.php')
	?>
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