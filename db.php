<?php

require "libs/rb.php";

R::setup( 'mysql:host=localhost;dbname=english','root', '' );
$mysqli = new mysqli("localhost", "root", "", "english");
if (!R::testConnection())
{
	exit ('Нет соедиенения с базой данных!!!');
}
//else {
	//echo 'Есть соединение!!!';
//}
/*проверка соединения */
//if ($mysqli->connect_errno) {
//    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
//    exit();
//}
//else {
//	echo 'Есть соединение!!! Кирилл';
//}
session_start();?>

