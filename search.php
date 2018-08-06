<?php

// подключаемся к базе
require_once('db.php');

// получаем данные из запроса
$word = $_POST['word'];

//ищем в базе (здесь надо бы обработать $word перед запросом в базу для безопасности)
$query = "SELECT * FROM globalwords WHERE word LIKE '".$word."%'";

if ($result = $mysqli->query($query)) {

    /* извлечение ассоциативного массива */
    while ($row = $result->fetch_assoc()) {
            echo  " ".$row['translate']."";
    }

    /* удаление выборки */
    $result->free();
}

//закрываем соединение с базой
require_once('dbend.php');