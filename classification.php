<?php	
		require "db.php";
	?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title>English Tutor</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
		        <nav id="mainmenu" class="mainmenu">
					<div class="menuextras">
					<div class="extras">
						<ul>
							<?php 
								
									$users = R::load('users', $_SESSION['logged_id']);
									echo '<li>' . "Пользователь: " .$users->login . '</li>';
									echo "<br>";
									$users = R::load('users', $_SESSION['logged_id']);
									echo '<li>' . "Имя: " . $users->name . '</li>' ;
									echo "<br>";
									$users = R::load('users', $_SESSION['logged_id']);
									echo '<li>' . "Фамилия: " . $users->surname . '</li>';
			
							?>
							
			        	</ul>
					</div>
		        </div>
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/mine/logo.png" alt="english tutor"></a></li>
						<li>
							<a href="index.php">Главная</a>
						</li>
						<li>
							<a href="grammar.php">Грамматика</a>
						</li>
						<li>
							<a href="vocabuler.php">Словарь</a>
						</li>
						<li>
							<a href="theme.php">Темы</a>
						</li>
						<?php if($_SESSION['logged_id']== '1'  ){
						echo '<li>
								<a href="admin.php">Меню администратора</a>
							  </li>';
						}?>
						<li>
							<a href="logout.php">Выйти</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><strong><h1>Английские глаголы. Классификация глаголов английского языка.
	<br><br><br><br>

Глагол – это самостоятельная часть речи, обозначающая действие или состояние предмета или лица.
В английском языке признаком глагола в неопределенной форме является частица to.<br><br>

to sing – петь<br>
to draw – рисовать<br>
to exist – существовать<br>
to stand – стоять<br><br>
Чаще всего именно глагол является ключевой основой, вокруг которой строится предложение, поэтому глаголы почти во всех языках следуют сложным правилам грамматики и имеют большое число форм.
<br><br>
Структура английских глаголов
<br><br>
По структуре английские глаголы делятся на простые, производные, сложные и составные.
<br><br>
Простые глаголы состоят только из одного корня:
<br><br>
walk – идти<br>
play – играть<br>
eat – есть<br><br>
В производных глаголах, кроме корня, есть приставка и/или суффикс:
<br><br>
unload – разгружать<br>
reread – перечитать<br>
replay – переиграть<br><br>
Сложные глаголы состоят из двух основ:
<br><br>
underline – подчёркивать<br>
whitewash – белить<br>
overtake – догонять<br><br>
Составные (фразовые) глаголы состоят из глагола и наречия или предлога:
<br><br>
look out – высматривать<br>
stand up – выдерживать<br>
pull off – снимать<br><br>
По значению английские глаголы делятся на смысловые и служебные.
<br><br>
Смысловые (самостоятельные) глаголы обладают собственным лексическим значением, они обозначают определенное действие или состояние:
<br><br>
I work at the zoo.<br>
Я работаю в зоопарке.<br><br>
Служебные глаголы не имеют самостоятельного значения. Они используются только для построения сложных форм глагола или составных сказуемых. В составных сказуемых спрягаются именно служебные глаголы, то есть при их помощи можно выразить лицо, число и время:
<br><br>
I am going – Я иду<br>
Jim is going – Джим идет<br>
people were going – люди шли<br><br>
Служебные английские глаголы:<br>
<br>
глаголы-связки, соединяющие в предложении подлежащее с определенным состоянием (обычно выражаемым дополнением):
<br><br>to be<br>
to become<br>
to seem<br>
to look<br>
и др.<br>
She got hungry in the evening.<br>
Она проголодалась вечером.<br><br>
вспомогательные глаголы, которые служат для образования сложных глагольных форм:
to be<br>
to do<br>
to have<br>
will<br>
и др.<br>
We have seen it before.<br>
Мы видели это раньше.<br><br>
модальные глаголы, которые отражают отношение говорящего к данному действию:<br>
can<br>
may<br>
must<br>
need<br>
и др.<br>
He must sing loudly.<br>
Он должен петь громко.<br><br>
Основные формы английского глагола:
<br><br>
инфинитив<br><br>
to sing – петь<br>
to travel – путешествовать<br>
прошедшее неопределенное время<br>
sang – пел<br>
travelled – путешествовал<br>
причастие прошедшего времени (причастие второе)<br>
sung – спевший<br>
travelled – путешествовавший<br><br>
Иногда их называют соответственно первой, второй и третьей формой английского глагола. Эти основные формы служат для построения всех остальных глагольных форм, простых и сложных.
<br><br>
Английские глаголы в детальном рассмотрении:<br><br>

Правильные и неправильные глаголы<br>
Таблица неправильных английских глаголов<br>
Лицо и число английского глагола<br>
Переходные и непереходные глаголы<br>
Глагол to be<br>
Глагол to have<br>
Личные и неличные формы глагола<br>
Инфинитив<br>
Герундий<br>
Причастие<br>
Времена английского глагола<br>
Present Simple<br>
Past Simple<br>
Future Simple<br>
Present Continuous<br>
Past Continuous<br>
Future Continuous<br>
Present Perfect<br>
Past Perfect<br>
Future Perfect<br>
Present Perfect Continuous<br>
Past Perfect Continuous<br>
Future Perfect Continuous<br>
Future in the Past<br>
Активный залог<br>
Пассивный залог<br>
Изъявительное наклонение<br>
Сослагательное наклонение<br>
Повелительное наклонение<br>
Модальные глаголы в английском языке<br>
Модальный глагол Can<br>
Модальный глагол May<br>
Модальный глагол Must<br>
Модальный глагол Have to<br>
Модальный глагол Be to<br>
Модальный глагол Need<br>
Модальный глагол Ought to<br>
Модальный глагол Should<br>
Модальный глагол Would<br>
Модальные глаголы Shall, Will<br>
Модальный глагол Dare<br>
Модальный глагол Used to<br>
					</div>
				</div>
			</div>
		</div>
        
 


	    <!-- Footer -->
	    	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Адрес:</b> Канонерский остров, дом 10, кв 48<br/>
	        				<b>Телефон:</b> +79117985687<br/>
	        				<b>Email:</b> <a href="mailto:MrKiraller@gmail.com">MrKiraller@gmail.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2018 All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>