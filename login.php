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
     
		
        

       
		
		 <div class="mainmenu-wrapper">
	        <div class="container">
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/mine/logo.png" alt="english tutor"></a></li>
					</ul>
				</nav>
			</div>
		</div>

       <?php
								$data = $_POST;
								if(isset($data['do_login']))
								{
									$errors = array();
									$user = R::findOne('users', 'login = ?', array($data['login']));
								if($user)
								{
									//логин существует
									if(password_verify($data['password'], $user->password))
									{
										//все хорошо, логиним пользователя
									$_SESSION['logged_user'] = $user;
									$_SESSION['logged_id'] = $user->id;?>
									<li class="active"><h1>Вход выполнен</h1>
							<a href="/index.php"><button class="authorize-button" type="submit">Перейти на главную страницу</button></a><br> 
									</li>
					<?php

								}else
								{
									$errors[]='Неверно введен пароль!';
								}
								}else
								{
									$errors[]='Пользователь с таким логином не найден!';
								}
								if (!empty($errors))
									{
								echo '<div style="color: red;">'.array_shift($errors).'</div>
							<hr>';
									}
								}
							?>
							<?php if( isset($_SESSION['logged_user']) ) :?>
								<form action="index.php">
								</form>
							<?php else : ?>
								<form action ="login.php" method="POST">
								
										<strong>Логин</strong><br>
									<p>
										<input type="text" name="login" value="<?php echo @$data['login'];?>">
									</p>								
									<p>
										<p><strong>Пароль</strong></p>
										<input type="password" name="password" value="<?php echo @$data['password'];?>">
									</p>
									
									<p>
										<button type="submit" name ="do_login">Войти</button>
									</p>
								</form>
								<form action="index.php">
									<p>
										<input value="назад" type="submit">
									</p>
									
								</form>
							
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