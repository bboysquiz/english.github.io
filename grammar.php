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
						<h1><strong><h1>Времена в английском языке. Таблица английских времен.</h1></strong><br>
			Как известно, в русском языке три времени – прошедшее, настоящее и будущее. Английских времен тоже три – present, past и future, но в зависимости от того, является ли действие завершенным или длительным, каждое из этих времен может быть четырех типов – simple, continuous, perfect и perfect continuous. В результате в английском языке можно получить 12 временных форм.
			Таблица английских времен:
	<br><br>
			<table class="table_dark" border="1" width="100%" cellpadding="5">
				<tr>
				<th></th>
				<th>Simple / Indefinite</th>
				<th>Continuous / Progressive</th>
				<th>Perfect</th>
				<th>Perfect Continuous</th>
				</tr>
				<tr>
				<td>Present</td>
				<td>I play</td>
				<td>I am playing</td>
				<td>I have played</td>
				<td>I have been playing</td>
				</tr>
				<tr>
				<td>Past</td>
				<td>I played</td>
				<td>I was playing</td>
				<td>I had played</td>
				<td>I had been playing</td>
				</tr>
				<tr>
				<td>Future</td>
				<td>I will play</td>
				<td>I will be playing</td>
				<td>I will have played</td>
				<td>I will have been playing</td>
				</tr>
				</table><br>
				В нескольких словах рассмотрим английские времена, образование которых зависит от состояния действия.<br><br>
				Простое (неопределенное) время (Simple Tense)<br>
				Времена группы Simple обозначают действие самым общим образом, и не указывают на то, завершено ли оно и является ли оно длительным.<br><br>
				I often go to the park.<br>
				Я часто хожу в парк.<br>
				Длительное время (Continuous Tense)<br>
				Времена группы Continuous указывают на процесс, действие, длящееся в определенный момент в прошлом, настоящем или будущем.<br><br>
				Sally is doing her homework at the moment.<br>
				Салли сейчас делает домашнее задание.<br>
				Совершенное время (Perfect Tense)<br>
				Времена группы Perfect в английском языке обозначают действия, закончившиеся к определенному моменту или происходившие ранее других действий в настоящем, прошедшем или будущем.<br><br>
				I have done my homework already.<br>
				Я уже сделал домашнее задание.<br>
				Длительное совершенное время (Perfect Continuous Tense)<br>
				Времена Perfect Continuous используются для обозначения процесса, который начался и длился в течение некоторого времени до некоего момента в настоящем, прошлом или будущем.<br>
				We have been preparing for our exam since morning.<br>
				Мы готовились к экзамену с самого утра.<br><br>
				<br>
				Английские времена в детальном рассмотрении:<br>
				<br>
				Present Simple - простое настоящее время<br>
				<br>
				Время Present Simple обозначает действие в настоящем в широком смысле слова. Оно употребляется для обозначения обычных, регулярно повторяющихся или постоянных действий, например, когда мы говорим о чьих-либо привычках, режиме дня, расписании и т. д., т. е. Present Simple обозначает действия, которые происходят в настоящее время, но не привязаны именно к моменту речи.<br>
				<br>
				Образование Present Simple<br>
				Утвердительные предложения:<br>
				<table class="table_dark" border="1" width="100%" cellpadding="5">
				<tr>
				<th>I play</th>
				<th>We play</th>
				</tr>
				<tr>
				<td>You play</td>
				<td>You play</td>
				</tr>
				<tr>
				<td>He / she / it plays</td>
				<td>They play</td>	
				</tr>
				</table><br>
				Вопросительные предложения:<br>
				<table class="table_dark" border="1" width="100%" cellpadding="5">
				<tr>
				<th>Do I play?</th>
				<th>Do we play?</th>
				</tr>
				<tr>
				<td>Do you play?</td>
				<td>Do you play?</td>
				</tr>
				<tr>
				<td>Does he / she / it play?</td>
				<td>Do they play?</td>	
				</tr>
				</table><br>
				Отрицательные предложения:<br>
				<br>
				<table class="table_dark" border="1" width="100%" cellpadding="5">
				<tr>
				<th>I do not play</th>
				<th>We do not play</th>
				</tr>
				<tr>
				<td>You do not play</td>
				<td>You do not play</td>
				</tr>
				<tr>
				<td>He / she / it does not play</td>
				<td>They do not play</td>	
				</tr>
				</table><br><br>
				Английский глагол во временной форме Present Simple почти всегда совпадает со своей начальной, то есть указанной в словаре, формой без частицы to. Лишь в 3-ем лице единственного числа к ней нужно прибавить окончание -s:<br>
				<br>
				I work – he works<br>
				<br>
				Если глагол оканчивается на -s, -ss, -sh, -ch, -x, -o, то к нему прибавляется окончание -es:<br>
				<br>
				I wish – he wishes<br>
				<br>
				К глаголам на -y с предшествующей согласной тоже прибавляется окончание -es, а -y заменяется на -i-:<br>
				<br>
				I try – he tries<br>
				Если же глагол оканчивается на -y с предшествующей гласной, то -y сохраняется и добавляется только окончание -s:<br>
				<br>
				I play – he plays<br>
				Для того, чтобы построить вопросительное предложение, перед подлежащим нужно поставить вспомогательный глагол. Время Present Simple используется без него, поэтому в этом случае добавляется вспомогательный глагол do (или does в 3 л. ед. ч.):<br>
				<br>
				Do you like rock?<br>
				Тебе нравится рок?<br>
				<br>
				Does he speak English?<br>
				Он говорит по-английски?<br>
				В отрицательных предложениях тоже используется вспомогательный глагол do/does, но не перед подлежащим, а перед глаголом. После него прибавляется отрицательная частица not. Do/does и not часто сокращаются до don’t и doesn’t соответственно:<br>
				<br>
				I do not like black coffee.<br>
				Я не люблю черный кофе.<br>
				<br>
				She doesn't smoke.<br>
				Она не курит.<br>
				Примечание:<br>
				Вспомогательный глагол do/does может стоять и в утвердительных предложениях. Тогда предложение приобретает бoльшую экспрессивность, глагол оказывается эмоционально выделен:<br>
				<br>
				I do want to help you.<br>
				Я на самом деле хочу тебе помочь.<br>
				<br>
				Jane does know how to cook.<br>
				Джейн действительно умеет готовить.<br>
				В таких предложениях вспомогательный глагол никогда не сокращается.<br>
				<br>
				Случаи употребления Present Simple<br>
				Регулярные, повторяющиеся действия:<br>
				I often go to the park.<br>
				Я часто хожу в парк.<br>
				<br>
				They play tennis every weekend.<br>
				Каждые выходные они играют в теннис.<br>
				Действие в настоящем в широком смысле слова (не обязательно в момент речи):<br>
				Jim studies French.<br>
				Джим изучает французский.<br>
				We live in Boston.<br>
				Мы живем в Бостоне.<br>
				Общеизвестные факты:<br>
				The Earth is round.<br>
				Земля – круглая.<br><br>
				The Volga is the longest river in Europe.<br>
				Волга – самая длинная река в Европе.<br>
				Перечисление последовательности действий:<br>
				We analyse what our clients may need, develop a new product, produce a sample, improve it and sell it.<br>
				Мы анализируем, что может понадобиться нашим клиентам, разрабатываем новый продукт, изготавливаем образец, дорабатываем его и продаем.<br>
				Некоторые случаи указания на будущее время (если имеется в виду некое расписание или план действий, а также в придаточных предложениях времени и условия):<br>
				The airplane takes off at 2.30 p.m.<br>
				Самолет взлетает в 14:30.<br><br>
				When you see a big green house, turn left.<br>
				Когда вы увидите большой зеленый дом, поверните налево.<br>
				Некоторые случаи указания на прошедшее время (в заголовках газет, при пересказе историй):<br>
				Airplane crashes in Pakistan.<br>
				В Пакистане разбился самолет.<br><br>
				I met Lenny last week. He comes to me and says, “Hello, mister!”<br>
				На прошлой неделе я встретил Ленни. Подходит ко мне и говорит: «Здорово, мистер!»<br></h1>
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