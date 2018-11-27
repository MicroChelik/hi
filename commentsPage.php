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
<body id="commentsPage">
	<?php
		include('nav.php');
	?>
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-lg-4 col-12">
				<a data-fancybox data-animation-duration="700" data-src="#sendCommentModal" href="javascript:;">
					<button class="blueBtn" id="sendComment">Оставить отзыв о магазине</button>
				</a>
			</div>
			<div style="display: none;" id="sendCommentModal" class="animated-modal">
				<div class="card">
					<img class="card-img-top" src="img/bg/footer.png" alt="Card image cap">
					<div class="card-img-overlay overlayFix">
						<h2>ОСТАВИТЬ ОТЗЫВ</h2>
					</div>
					<div class="card-body">
						<form action = "javascript: void(null);" method="post" id="">
							<div class="row px-15">
								<div class="col-12 form-group">
									<input type="text" class="form-control" name="name" placeholder="Ваше имя *" required>
								</div>
								<div class="col-12 form-group">
									<input type="number" class="form-control" name="phoneNumber" placeholder="Ваш номер телефона *" required>
								</div>
								<div class="col-12 form-group">
									<input type="email" class="form-control" name="email" placeholder="Ваш Email *" required>
								</div>
								<div class="col-12 form-group">
									<textarea class="form-control" name="text" rows="3" placeholder="Ваш комментарий *"></textarea>
								</div>
								<div class="col-lg-6 col-12 captchaDiv"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
								<div class="col-lg-6 col-12">
									<p class="personalInformation">Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a></p>
								</div>
								<div class="col-12 d-lg-block d-flex">
									<button type="submit" class="blueBtn mx-auto">Отправить</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row comments">
			<div class="col-12 comment">
				<p class="commentData">06.08.2018</p>
				<div class="d-flex companyInfo">
					<img src="img/otherPages/comments/companyLogo.png">
					<p>Нзвание компании</p>
				</div>
				<p>
					Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Не часто встретишь такую оперативную работу с клиентами. Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. Не следует, однако, забывать, что консультация с широким активом выявляет срочную потребность соответствующих условий активизации. Прежде всего, выбранный нами инновационный путь однозначно определяет каждого участника как способного принимать собственные решения касаемо глубокомысленных рассуждений.
				</p>
			</div>
			<div class="col-12 comment">
				<p class="commentData">06.08.2018</p>
				<div class="d-flex companyInfo">
					<img src="img/otherPages/comments/companyLogo.png">
					<p>Нзвание компании</p>
				</div>
				<p>
					Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Не часто встретишь такую оперативную работу с клиентами. Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. Не следует, однако, забывать, что консультация с широким активом выявляет срочную потребность соответствующих условий активизации. Прежде всего, выбранный нами инновационный путь однозначно определяет каждого участника как способного принимать собственные решения касаемо глубокомысленных рассуждений.
				</p>
			</div>
			<div class="col-12 comment">
				<p class="commentData">06.08.2018</p>
				<div class="d-flex companyInfo">
					<img src="img/otherPages/comments/companyLogo.png">
					<p>Нзвание компании</p>
				</div>
				<p>
					Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Не часто встретишь такую оперативную работу с клиентами. Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. Не следует, однако, забывать, что консультация с широким активом выявляет срочную потребность соответствующих условий активизации. Прежде всего, выбранный нами инновационный путь однозначно определяет каждого участника как способного принимать собственные решения касаемо глубокомысленных рассуждений.
				</p>
			</div>
			<div class="col-12 comment">
				<p class="commentData">06.08.2018</p>
				<div class="d-flex companyInfo">
					<img src="img/otherPages/comments/companyLogo.png">
					<p>Нзвание компании</p>
				</div>
				<p>
					Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Не часто встретишь такую оперативную работу с клиентами. Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. Не следует, однако, забывать, что консультация с широким активом выявляет срочную потребность соответствующих условий активизации. Прежде всего, выбранный нами инновационный путь однозначно определяет каждого участника как способного принимать собственные решения касаемо глубокомысленных рассуждений.
				</p>
			</div>
			<div class="col-12 comment">
				<p class="commentData">06.08.2018</p>
				<div class="d-flex companyInfo">
					<img src="img/otherPages/comments/companyLogo.png">
					<p>Нзвание компании</p>
				</div>
				<p>
					Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Не часто встретишь такую оперативную работу с клиентами. Заказывал резину через интернет, в наличии не оказалось, но уже через день ее привезли в мой город. Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. Не следует, однако, забывать, что консультация с широким активом выявляет срочную потребность соответствующих условий активизации. Прежде всего, выбранный нами инновационный путь однозначно определяет каждого участника как способного принимать собственные решения касаемо глубокомысленных рассуждений.
				</p>
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