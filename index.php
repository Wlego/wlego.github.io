<!-- Doctype HTML -->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 	<!-- мета тег для определения кодировки сайта -->
<meta name="keywords" content="test, site, website" />					<!-- теги для поискового робота -->
<meta name="description" content="Этот сайт является пробным сайтом" />	<!-- мета тег названия сайта -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="calendar-redhead/calendar-redhead.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" /> 

	

																			<!-- путь к стилям(это коммент) -->
<link href="img/PI16.ICO" rel="shortcut icon" type="image/x-icon" />		<!--изображение иконки вкладки браузера -->

<title>Тестовый сайт</title>												<!--название вкладки браузера -->


</head>
<body>
<!-- <script type="text/javascript">
	alert();
</script> -->
	
	<header>
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a class="nav navbar-brand" href="index.php" title="На главную" id="logo">МЕБЕЛЬ НА ЗАКАЗ</a> 
					</div>
					
					
					<div class="navbar-left navbar-form ">
						<div class="form-group">
						<input type="text" class="form-control" placeholder="Поиск по сайту"/>
						</div>
					</div>	
					
					
					<div class="navbar-right menu" ><!-- id="menuHrefs" -->
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="index.php">О нас</a></li>
							<li><a href="feedback.php" >Обратная связь</a></li>
							<li><a href="#myModalBox" data-toggle="modal">Вход</a></li>
							<li><a href="reg.php" >Регистрация</a></li>
						</ul>	
					</div>
				</div>	
			</div>	
		</div>
		
	</header>
	
		<!-- <div class="clear"><br /></div> -->
		


		<div class="container ">
			<div class="row">
					<div class="col-sm-3">
						<div class="left-sidebar">
								<h2 onclick="return divnext11();">КАТЕГОРИИ</h2>
								<div class="panel-group category-products" id="accordian">
									<!-- <!-- <input type="text" class="find" placeholder="Поиск в категориях"/> 
									<div class="navbar-form ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Поиск в категориях"/>
										</div>
									</div>	 -->
									<!--  кухни  -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordian" href="#kitchen" class="collapsed" >
													<span class="badge pull-right"><i class="fa fa-plus"></i></span>
													Кухни
												</a>
											</h4>
										</div>
										<div id="kitchen" class="panel-collapse collapse" >
												<div class="panel-body panel-group" id="accordian1">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordian1" href="#kitchendirect"  >Прямые 
																<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="kitchendirect" class="panel-collapse collapse">
															<div class="panel-body">
															<ul>
																<li><a href="#kitchendirectclassic">Классика </a></li>
																<li><a href="#kitchendirectmodern">Модерн </a></li>
																<li><a href="#kitchendirectstandart">Стандарт </a></li>
															</ul>
															</div>
														</div>
														
														<div class="panel-heading">	
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordian1" href="#kitchenangular">Угловые 
																<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="kitchenangular" class="panel-collapse collapse">
															<div class="panel-body">
															<ul>
																<li><a href="#kitchenangularclassic">Классика </a></li>
																<li><a href="#kitchenangularmodern">Модерн </a></li>
																<li><a href="#kitchenangularstandart">Стандарт </a></li>
															</ul>
															</div>
														</div>
														
														<div class="panel-heading">	
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordian1" href="#kitchenp-figurative" >П-образные 
																<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																</a>
															</h4>	
														</div>
														<div id="kitchenp-figurative" class="panel-collapse collapse">
															<div class="panel-body">
															<ul>
																<li><a href="#kitchenp-figurativeclassic">Классика </a></li>
																<li><a href="#kitchenp-figurativemodern">Модерн </a></li>
																<li><a href="#kitchenp-figurativestandart">Стандарт </a></li>
															</ul>
															</div>
														</div>
														
													</div>
												</div>
										</div>
									</div>
									<!-- шкафы купе -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordian" href="#cupe" class="collapsed">
													<span class="badge pull-right"><i class="fa fa-plus"></i></span>
													Шкафы купе
												</a>
											</h4>
										</div>
										<div id="cupe" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li><a href="#cupedirect">Прямые</a></li>
													<li><a href="#cuperadius">С радиусными дверями</a></li>
													<li><a href="#cupecladovii">Кладовые</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Мебельные стенки -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordian" href="#steni">
													<span class="badge pull-right"><i class="fa fa-plus"></i></span>
													Мебельные стенки
												</a>
											</h4>
										</div>
										<div id="steni" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li><a href="#stenidirect">Классика </a></li>
													<li><a href="#stenimodern">Модерн </a></li>
													<li><a href="#stenistandart">Стандарт </a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Детские		 -->							
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a href="#children">Детские</a></h4>
										</div>
									</div>
									<!-- Комоды -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a href="#comodi">Комоды</a></h4>
										</div>
									</div>
									<!-- Прихожие -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a href="#prihozie">Прихожие</a></h4>
										</div>
									</div>
									<!-- Будуары -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a href="#grims">Будуары</a></h4>
										</div>
									</div>
									<!-- Мебель в ванной -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title"><a href="#vani">Мебель для уборной</a></h4>
										</div>
									</div>
									<!-- Фасады -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordian" href="#fasad">
													<span class="badge pull-right"><i class="fa fa-plus"></i></span>
													Фасады
												</a>
											</h4>
										</div>
										<div id="fasad" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li><a href="#">Fendi</a></li>
													<li><a href="#">Guess</a></li>
													<li><a href="#">Valentino</a></li>
													<li><a href="#">Dior</a></li>
													<li><a href="#">Versace</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- ЛДСП -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordian" href="#ldsp">
													<span class="badge pull-right"><i class="fa fa-plus"></i></span>
													ЛДСП
												</a>
											</h4>
										</div>
										<div id="ldsp" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li><a href="#">Fendi</a></li>
													<li><a href="#">Guess</a></li>
													<li><a href="#">Valentino</a></li>
													<li><a href="#">Dior</a></li>
													<li><a href="#">Versace</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- ПРОФИЛЬ ДВЕРЕЙ ШКАФОВ КУПЕ -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordian" href="#doors">
													<span class="badge pull-right"><i class="fa fa-plus"></i></span>
													ПРОФИЛЬ ДВЕРЕЙ ШКАФОВ КУПЕ
												</a>
											</h4>
										</div>
										<div id="doors" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li><a href="#">Fendi</a></li>
													<li><a href="#">Guess</a></li>
													<li><a href="#">Valentino</a></li>
													<li><a href="#">Dior</a></li>
													<li><a href="#">Versace</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div> 
					
			
					<div class="col-sm-6">
						<span class='glyphicon glyphicon-menu-left' style='color:red;' aria-hidden='true'></span>
						<div class="features_items">
							<h2 class="title text-center">Текущий раздел</h2>
							<div class="svoi0 productinfo text-center" id="0">
									<p>Мы используем только качественные материалы.</p>
							</div>
							
							<div class="svoi" id="current">
									<div class="productinfo text-center" id="compaunt">
									</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-sm-3">
						<div class="right-sidebar">
							<!-- Calendar --><div class="calendar"></div><!-- /Calendar -->
						</div>	
					</div>
			</div>
		</div>
		<div class="clear-fix"><br/></div>
		<div class="container">
		<div id="main_soc_block">
				<center>
				<div id="main_soc_block_in">
					<a href="reg.html" class="main_soc_block_in" title="регистрируйтесь">Регистрируйтесь на сайте</a>
					<!-- <a href="reg.html" title="регистрируйтесь">Регся быстрей</a> -->
				</div>
				</center>
			</div>
		</div>
		
		<div id="myModalBox" class="modal fade" data-backdrop="false">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<!-- Заголовок модального окна -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Вход</h4>
					</div>
					<!-- Основное содержимое модального окна -->
					<div class="modal-body">
						<div class="container-fluid">
						<!-- Контейнер, в котором можно создавать классы системы сеток -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Логин</label>				
										<input type="text" id="subject" class="form-control"name="subject" placeholder="Логин"/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Пароль</label>				
										<input type="text" id="subject" class="form-control"name="subject" placeholder="пароль"/>
									</div>
								</div>
								</div>
							</div>
						</div>
					
					<!-- Футер модального окна -->
					<div class="modal-footer">
						<div class="form-group ">
						<button type="button" class="btn btn-default" data-dismiss="modal">Войти</button>
						<button type="button" class="btn btn-default">Выйти</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<span class="left">Все права защищены &copy; 2015</span>
			<span class="right">Социальные кнопки<img src="img/bing.ico"  alt="Группа в контакте" title="Группа в контакте"/></span>
		</footer>

		
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="calendar-redhead/calendar.js"></script>
	<script src="calendar-redhead/moment-2.2.1.js"></script>	
	<script src="js/scriptbox.js"></script>



</body>

</html>
