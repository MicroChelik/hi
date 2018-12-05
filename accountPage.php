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
<body id="accountPage">
	<?php
		include('nav.php');
	?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb pl-0">
				<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				<li class="breadcrumb-item active" aria-current="page">Личный кабинет</li>
			</ol>
		</div>
	</div>
	<div class="container">
		<div class="row accountPageRow">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-12 accountMenuDiv">
						<div class="d-flex accountMenu">
							<div class="accountMenuItem active" id="availableProgramms">
								<p>Доступные программы</p> 
							</div>
							<div class="accountMenuItem" id="profile">
								<p>Профиль</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row availableProgramms">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<p class="card-title">Название программы в две строчки</p>
								<p class="card-text">Срок обучения: <span class="blueText">8 часов</span></p>
								<p class="card-text">Кол-во вопросов в тесте: <span class="blueText">80 вопросов</span></p>
								<a href="thisProgrammPage.php">
									<button class="programmBtn">Пройти программу</button>
								</a>
								<a href="passingTestPage.php">
									<button class="blueBtn">Пройти тест</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<p class="card-title">Название программы в две строчки</p>
								<p class="card-text">Срок обучения: <span class="blueText">8 часов</span></p>
								<p class="card-text">Кол-во вопросов в тесте: <span class="blueText">80 вопросов</span></p>
								<a href="thisProgrammPage.php">
									<button class="programmBtn">Пройти программу</button>
								</a>
								<a href="passingTestPage.php">
									<button class="blueBtn">Пройти тест</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<p class="card-title">Название программы в две строчки</p>
								<p class="card-text">Срок обучения: <span class="blueText">8 часов</span></p>
								<p class="card-text">Кол-во вопросов в тесте: <span class="blueText">80 вопросов</span></p>
								<a href="thisProgrammPage.php">
									<button class="programmBtn">Пройти программу</button>
								</a>
								<a href="passingTestPage.php">
									<button class="blueBtn">Пройти тест</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row programms">
					<div class="col-12">
						<p class="ProgrammsTitle">Возможные программы</p>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. 
								</p>
								<p class="card-text trainingPeriod">
									Срок обучения: 8 часов
								</p>
								<p class="card-text price"> 
									5 000 руб.
								</p>
								<a href="thisEducationProgramm.php">
									<button class="blueBtn">Заказать</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. 
								</p>
								<p class="card-text trainingPeriod">
									Срок обучения: 8 часов
								</p>
								<p class="card-text price"> 
									5 000 руб.
								</p>
								<a href="thisEducationProgramm.php">
									<button class="blueBtn">Заказать</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. 
								</p>
								<p class="card-text trainingPeriod">
									Срок обучения: 8 часов
								</p>
								<p class="card-text price"> 
									5 000 руб.
								</p>
								<a href="thisEducationProgramm.php">
									<button class="blueBtn">Заказать</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. 
								</p>
								<p class="card-text trainingPeriod">
									Срок обучения: 8 часов
								</p>
								<p class="card-text price"> 
									5 000 руб.
								</p>
								<a href="thisEducationProgramm.php">
									<button class="blueBtn">Заказать</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. 
								</p>
								<p class="card-text trainingPeriod">
									Срок обучения: 8 часов
								</p>
								<p class="card-text price"> 
									5 000 руб.
								</p>
								<a href="thisEducationProgramm.php">
									<button class="blueBtn">Заказать</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. 
								</p>
								<p class="card-text trainingPeriod">
									Срок обучения: 8 часов
								</p>
								<p class="card-text price"> 
									5 000 руб.
								</p>
								<a href="thisEducationProgramm.php">
									<button class="blueBtn">Заказать</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Имеется спорная точка зрения, гласящая примерно следующее: реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и призваны к ответу. 
								</p>
								<p class="card-text trainingPeriod">
									Срок обучения: 8 часов
								</p>
								<p class="card-text price"> 
									5 000 руб.
								</p>
								<a href="thisEducationProgramm.php">
									<button class="blueBtn">Заказать</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row profile">
					<div class="col-lg-7">
						<div class="form-group accountInputs">
							<input type="text" class="form-control" placeholder="Компания: ООО “Электрон” ">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="form-group accountInputs">
							<input type="text" class="form-control" placeholder="Россия, г. Ижевск, БЦ «Нова Парк», ул. 10 лет Октября, дом 60, офис 309а">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="form-group accountInputs">
							<input type="text" class="form-control" placeholder="+ 7 (3412) 23-53-11">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="form-group accountInputs">
							<input type="email" class="form-control" placeholder="office@web-electron.ru">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="form-group accountInputs">
							<input type="text" class="form-control" placeholder="Изменить пароль">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-12 testsMenu">
						<div class="testsMenuTitle">
							<p>Пройденые тесты<br><span>за последний месяц</span></p>
						</div>
						<div class="testMenuItem">
							<p class="testMenuItemTitle">Название программы<br>в две строчки</p>
							<p class="testMenuItemText testMenuItemToggle">Пройден тест: <span>6 часов 35 минут</span></p>
							<p class="testMenuItemText testMenuItemToggle">Кол-во правильных ответов: <span>78 из 80 </span><br>Пройден тест: <span>05.02.2017</span></p>
							<div class="testMenuItemResult testMenuItemToggle">
								<p class="testMenuItemResultTitle">Поздравляем</p><p>тест пройден, для дальнейших действий свяжитесь с администратором</p>
							</div>
						</div>
						<div class="testMenuItem testmenuItemFailTest">
							<p class="testMenuItemTitle">Название программы<br>в две строчки</p>
							<p class="testMenuItemText testMenuItemToggle">Пройден тест: <span>6 часов 35 минут</span></p>
							<p class="testMenuItemText testMenuItemToggle">Кол-во правильных ответов: <span>78 из 80 </span><br>Пройден тест: <span>05.02.2017</span></p>
							<div class="testMenuItemResult testMenuItemToggle">
								<p class="testMenuItemResultTitle">К сожалению </p><p>тест не пройден, повторите учебный материал и пройдите тест еще раз</p>
							</div>
						</div>
						<div class="testMenuItem testmenuItemFailTest">
							<p class="testMenuItemTitle">Название программы<br>в две строчки</p>
							<p class="testMenuItemText testMenuItemToggle">Пройден тест: <span>6 часов 35 минут</span></p>
							<p class="testMenuItemText testMenuItemToggle">Кол-во правильных ответов: <span>78 из 80 </span><br>Пройден тест: <span>05.02.2017</span></p>
							<div class="testMenuItemResult testMenuItemToggle">
								<p class="testMenuItemResultTitle">К сожалению </p><p>тест не пройден, повторите учебный материал и пройдите тест еще раз</p>
							</div>
						</div>
						<div class="testMenuItem">
							<p class="testMenuItemTitle">Название программы<br>в две строчки</p>
							<p class="testMenuItemText testMenuItemToggle">Пройден тест: <span>6 часов 35 минут</span></p>
							<p class="testMenuItemText testMenuItemToggle">Кол-во правильных ответов: <span>78 из 80 </span><br>Пройден тест: <span>05.02.2017</span></p>
							<div class="testMenuItemResult testMenuItemToggle">
								<p class="testMenuItemResultTitle">Поздравляем</p><p>тест пройден, для дальнейших действий свяжитесь с администратором</p>
							</div>
						</div>
						<div class="testMenuItem">
							<p class="testMenuItemTitle">Название программы<br>в две строчки</p>
							<p class="testMenuItemText testMenuItemToggle">Пройден тест: <span>6 часов 35 минут</span></p>
							<p class="testMenuItemText testMenuItemToggle">Кол-во правильных ответов: <span>78 из 80 </span><br>Пройден тест: <span>05.02.2017</span></p>
							<div class="testMenuItemResult testMenuItemToggle">
								<p class="testMenuItemResultTitle">Поздравляем</p><p>тест пройден, для дальнейших действий свяжитесь с администратором</p>
							</div>
						</div>
						<div class="testMenuItem testmenuItemFailTest">
							<p class="testMenuItemTitle">Название программы<br>в две строчки</p>
							<p class="testMenuItemText testMenuItemToggle">Пройден тест: <span>6 часов 35 минут</span></p>
							<p class="testMenuItemText testMenuItemToggle">Кол-во правильных ответов: <span>78 из 80 </span><br>Пройден тест: <span>05.02.2017</span></p>
							<div class="testMenuItemResult testMenuItemToggle">
								<p class="testMenuItemResultTitle">К сожалению </p><p>тест не пройден, повторите учебный материал и пройдите тест еще раз</p>
							</div>
						</div>
						<div class="testMenuItem testmenuItemFailTest">
							<p class="testMenuItemTitle">Название программы<br>в две строчки</p>
							<p class="testMenuItemText testMenuItemToggle">Пройден тест: <span>6 часов 35 минут</span></p>
							<p class="testMenuItemText testMenuItemToggle">Кол-во правильных ответов: <span>78 из 80 </span><br>Пройден тест: <span>05.02.2017</span></p>
							<div class="testMenuItemResult testMenuItemToggle">
								<p class="testMenuItemResultTitle">К сожалению </p><p>тест не пройден, повторите учебный материал и пройдите тест еще раз</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		include('footer.php');
	?>
	<?php
		include('htmlEndBody.php');
	?>