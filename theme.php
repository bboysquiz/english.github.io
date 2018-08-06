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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="js/scripts.js"></script>
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
						<h1>Темы</h1>
					</div>
				</div>
			</div>
		</div>
        <?php if(!isset($_GET['id'])) :?>
		 <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
					<h4>Выберите тему, которая вам была бы интересна для прочтения<h4>
					</div>
					<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
					<?php	$text= R::findCollection('texts');
								while($texts = $text->next() ){	
									echo '<h4><a href="/theme.php?id=' . $texts->id .'">' . $texts->text_name . '</a>' . '</h4><br>';		
								}
					?>
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<?php else : ?>
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
						<h4>Наведите мышкой на слово<br><br>
						Чтобы узнать перевод <br> слова
						"<span id="word"></span>"<br>
						нужно всего лишь щелкнуть по нему</h4>
				
				<!-- Модальное окно -->
				<div id="JS_popup">
				<span id="JS_popup_close"></span>
				<h4>Добавить слово <br> <span id="word_in"></span> <br> в ваш словарь?</h4>
				<button id="but_n">Нет</button>
				<button id="but_y">Да</button>
				</div>
			
					</div>
					<!-- End Sidebar -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
													
								
								
								<?php $texts = R::load('texts', $_GET['id']);
								$allWords = $texts->text_content;
								//$separateWords = explode(" ", $allWords);										
								//$i=1;
								// foreach($separateWords as $oneWord){
								//	echo '<div style="display: inline-block;" id='	. $i . ' style="color: white;">' . $oneWord  . '</div>  ';
								//	$i++;
								//}?>
									<div id="JS_text">
										<h4><p><?php echo $allWords;?></p></h4>
						

								<?php
								echo '<br>';
								echo '<h1>Перевод:</h1>';
								echo '<h4>' . $texts->text_translate . '</h4>';
								?>
													
												</div>
												
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>	
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