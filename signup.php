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
        
		
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/mine/logo.png" alt="english tutor"></a></li>
						
					</ul>
				</nav>
			</div>
		</div>
	<div style="margin-left:44%;">
       <?php
							$data = $_POST;
							if( isset($data['do_signup'])){
								//здесь регистрируем
								$errors = array();
								if(trim($data['login']) == '')
									{
									$errors[] = 'Введите логин!';
									}
								if(trim($data['email']) == '')
									{
									$errors[] = 'Введите Email-адрес!';
									}
								if(($data['password']) == '')
									{
									$errors[] = 'Введите пароль!';
									}
								if(($data['password_2']) != ($data['password']) )
									{
									$errors[] = 'Повторный пароль введен не верно!';
									}
								if(R::count('users',"login = ?", array($data['login']))>0)
									{
									$errors[]='Пользователь с таким логином уже существует!';
									}
								if(R::count('users',"email = ?", array($data['email']))>0)
									{
									$errors[]='Пользователь с таким email уже существует!';
									}
								if(trim($data['name']) == '')
									{
									$errors[] = 'Введите ваше имя!';
									}
								if(trim($data['surname']) == '')
									{
									$errors[] = 'Введите вашу фамилию!';
									}
								if(trim($data['phone_number']) == '')
									{
									$errors[] = 'Введите ваш номер телефона!';
									}
								if (empty($errors))
									{
									//все хорошо,регистрируем
									$user = R::dispense('users');
									$user->login=$data['login'];
									$user->email=$data['email'];
									$user->password= password_hash($data['password'], PASSWORD_DEFAULT);
									$user->name=$data['name'];
									$user->surname=$data['surname'];
									$user->phone_number=$data['phone_number'];
									R::store($user);
									$userdictionary = R::dispense('userdictionary');
									R::store($userdictionary);
									echo '<div style="color: green;">Вы успешно зарегистрировались</div>
									<hr>';
									}
								else
									{
									echo '<div style="color: red;">'.array_shift($errors).'</div>
									<hr>';
									}
								}
								?>
								<form action = "/signup.php" method ="POST">		
									<strong>Ваш логин</strong>
									<p>
									<input type="text" placeholder="Только латинские буквы" required name="login" pattern="^[a-zA-Z]+$" value="<?php echo @$data['login'];?>">
									</p>
									<p>
									<p><strong>Ваш email-адресс</strong></p>
									<input type="email" required name="email" value="<?php echo @$data['email'];?>">
									</p>
									<p>
									<p><strong>Ваш пароль</strong></p>
									<input type="password" required name="password">
									</p>
									<p>
								<p><strong>Ваш пароль еще раз</strong></p>
								<input type="password" required name="password_2">
									</p>
									<p>
									<p><strong>Имя</strong></p>
									<input type="text" required name="name" value="<?php echo @$data['name'];?>">
									</p>									
									<p>
									<p><strong>Фамилия</strong></p>
									<input type="text" required name="surname" value="<?php echo @$data['surname'];?>">
									</p>
								<p>
								<p><strong>Мобильный телефон</strong></p>
								<input type="number" required  placeholder="Пример: +79212223322" name="phone_number" value="<?php echo @$data['phone_number'];?>">
								</p>
								<p>
								<button type = "submit" style="border-radius: 15px; padding: 10px 7px;" name="do_signup" >Зарегистрироваться </button>
								</p>
								</form>	
								<form action="index.php">
									<p>
										<input value="назад" style="border-radius: 15px; padding: 10px 50px;" type="submit">
									</p>
								</form>
		</h4></div>
        

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