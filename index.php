<?php	
		require "db.php";
	?>
<!DOCTYPE html>

<html class="no-js">
 
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
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <?php if( isset($_SESSION['logged_user']) ) :?>
		
        

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

        <!-- Homepage Slider -->
        <div class="homepage-slider">
        	<div id="sequence">
				<ul class="sequence-canvas">
					<!-- Slide 1 -->
					<li class="bg4">
						<!-- Slide Title -->
						<h2 class="title">Удобство!</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Изучай английский, не выходя из дома</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/true.png" alt="Slide 1" />
					</li>
					<!-- End Slide 1 -->
					<!-- Slide 2 -->
					<li class="bg3">
						<!-- Slide Title -->
						<h2 class="title">Читай - запоминай!</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Читай по-английски, а незнакомые слова добавляй в свой словарик, чтобы не забыть</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/imgonline-com-ua-Transparent-backgr-cPIZqEfzmUPcMKH5.png" alt="Slide 2" />
					</li>
					<!-- End Slide 2 -->
					<!-- Slide 3 -->
					<li class="bg1">
						<!-- Slide Title -->
						<h2 class="title">Учи английский бесплатно!</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Учи английский с нами абсолютно бесплатно без каких-либо вложений за дополнительные функции</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/E0OiqTUf7BQ.jpg" alt="Slide 3" />
					</li>
					<!-- End Slide 3 -->
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
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
		<?php else : ?>
		
		<div class="mainmenu-wrapper">
	        <div class="container">
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/mine/logo.png" alt="english tutor"></a></li>
						<li class="active">
							<a href="/login.php"><button class="authorize-button" type="submit">Авторизоваться</button></a><br> 
									
						</li>
						<li>
							<a href="/signup.php"><button class="authorize-button" type="submit">Зарегистрироваться</button></a><br> 
						</li>
						
					</ul>
				</nav>
			</div>
		</div>

        <!-- Homepage Slider -->
       <div class="homepage-slider">
        	<div id="sequence">
				<ul class="sequence-canvas">
					<!-- Slide 1 -->
					<li class="bg4">
						<!-- Slide Title -->
						<h2 class="title">Удобство!</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Изучай английский, не выходя из дома</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/true.png" alt="Slide 1" />
					</li>
					<!-- End Slide 1 -->
					<!-- Slide 2 -->
					<li class="bg3">
						<!-- Slide Title -->
						<h2 class="title">Читай - запоминай!</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Читай по-английски, а незнакомые слова добавляй в свой словарик, чтобы не забыть</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/imgonline-com-ua-Transparent-backgr-cPIZqEfzmUPcMKH5.png" alt="Slide 2" />
					</li>
					<!-- End Slide 2 -->
					<!-- Slide 3 -->
					<li class="bg1">
						<!-- Slide Title -->
						<h2 class="title">Учи английский бесплатно!</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Учи английский с нами абсолютно бесплатно без каких-либо вложений за дополнительные функции</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/E0OiqTUf7BQ.jpg" alt="Slide 3" />
					</li>
					<!-- End Slide 3 -->
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
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
		<?php endif; ?>

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