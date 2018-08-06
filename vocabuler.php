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
						<h1>Словарь</h1>
					</div>
				</div>
			</div>
		</div>
		<div style=' margin-left: 44%; '>
        <?php
						if($_SESSION['logged_id']== '1'  ){
						$globalwords= R::findCollection('globalwords');
							while($word = $globalwords->next() ){
								echo $word->word;	  
								echo ' - ';
								echo $word->translate;
								echo '<br>';
						}}
						else {		
							$iduser = $_SESSION['logged_id'];
							$userdictionary = R::find( 'userdictionary', ' iduser LIKE ? ', [ $iduser ] );
							foreach ($userdictionary as $value) {
							$word = $value->word;
							$ourword = R::find( 'globalwords', 'id LIKE ?' , [ $word ]);
							foreach ($ourword as $wordx) {
							echo '<h4>' . $wordx->word;
							echo ' - ';
							echo $wordx->translate . '</h4>';
							echo '<br>';
							}}
						}
					?>
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