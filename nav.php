<header class="d-none d-lg-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 logo">
					<h2>Хай-Тандем</h2>
					<span>Учебный центр</span>
				</div>
				<div class="col-lg-2 offset-lg-2">
					<img src="img/icons/mail.png">
					<span>haidarov_f@mail.ru</span>
				</div>
				<div class="col-lg-2 mobileNavPhoneNumbers">
					<img src="img/icons/phone.png" class="phoneImg">
					<p>+7 (912) 853 29 40</p>
					<p>+7 (912) 444 87 29</p>
				</div>
				<div class="col-lg-2">
					<a data-fancybox data-animation-duration="700" data-src="#callBackModal" href="javascript:;">
						<button class="lightBlueBtn">Обратный звонок</button>
					</a>
				</div>
				<div style="display: none;" id="callBackModal" class="animated-modal">
					<div class="card">
						<img class="card-img-top" src="img/bg/footer.png" alt="Card image cap">
						<div class="card-img-overlay overlayFix">
							<h2>ОБРАТНЫЙ ЗВОНОК</h2>
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
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
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
				<div class="col-lg-1 logInDiv">
					<a data-fancybox data-animation-duration="700" data-src="#logInModal" href="javascript:;">
						<img src="img/icons/logIn.png" class="logIn">
						<p>Вход</p>
					</a>
				</div>
				<div style="display: none;" id="logInModal" class="animated-modal">
					<div class="card">
						<img class="card-img-top" src="img/bg/footer.png" alt="Card image cap">
						<div class="card-img-overlay overlayFix">
							<h2>ВХОД</h2>
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
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
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
		</div>
	</header>
	<nav class="d-none d-lg-block">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-auto">
					<a href="index.php">Главная</a>
				</div>
				<div class="col-auto">
					<a href="aboutCompanyPage.php">О компании</a>
				</div>
				<div class="col-auto">
					<a href="servicesPage.php">Услуги</a>
				</div>
				<div class="col-auto">
					<a href="newsPage.php">Новости</a>
				</div>
				<div class="col-auto">
					<a href="q-a.php">Вопрос-ответ</a>
				</div>
				<div class="col-auto">
					<a href="commentsPage.php">Отзывы</a>
				</div>
				<div class="col-auto">
					<a href="contactsPage.php">Контакты</a>
				</div>
			</div>
		</div>
	</nav>
	<section class="mobileNav d-lg-none d-block">
		<div class="container">
			<div class="row justify-content-around align-items-center">
				<div class="mobileLogo">
					<span>Хай-<br>Тандем</span>
				</div>
				<button class="navbar-toggler d-lg-none d-inline-block" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		   			<span class="navbar-toggler-icon" id="toggle"><img src="img/icons/burger.png"></span>
			  	</button>
			  	<div class="logInDiv">
			  		<a data-fancybox data-animation-duration="700" data-src="#logInModal" href="javascript:;">
			  			<img src="img/icons/logIn.png">
			  			<span>Вход</span>
			  		</a>
			  	</div>
			 	<div class="collapse navbar-collapse" id="navbarNav">
			 		<ul class="navbar-nav">
			 			<li class="nav-item nav-item-first">
	 						<a class="nav-link" href="index.php"><p>Главная</p><span class="sr-only">(current)</span></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="aboutCompanyPage.php""><p>О компании</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="servicesPage.php"><p>Услуги</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="newsPage.php"><p>Новости</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="q-a.php"><p>Вопрос-ответ</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="commentsPage.php"><p>Отзывы</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="contactsPage.php"><p>Контакты</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="accountPage.php"><p>Личный кабинет</p></a>
	 					</li>
			 		</ul>
			 		<hr>
				 	<div class="row w-100">
				 		<div class="col-6 mobileNavFooter">
				 			<p>+7 (912) 853 29 40<br>+7 (912) 444 87 29</p>
				 		</div>
				 		<div class="col-6">
				 			<p>haidarov_f@mail.ru<br><a data-fancybox data-animation-duration="700" data-src="#callBackModal" href="javascript:;">Обратный звонок</a></p>
				 		</div>
				 		<div class="col-10 callReceptionText mobileNavFooter">
				 			<p class="text-left">Прием звонков с 07:00 до 18:00</p>
				 			<p class="text-left">Примем заявок с сайта 24/7</p>
				 		</div>
				 	</div>
			 	</div>
			</div>
		</div>
	</section>