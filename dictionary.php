<?php 
// подключаемся к базе

require_once ('db.php');

$data = $_POST;
// получаем данные из запроса
$word = $_POST['word'];
$logged_id = $_SESSION['logged_id'];


$ourword = R::findOne( 'globalwords', "`word`=?", array($word));
// находим в таблице globalwords слово переданное нам через POST-переменную и помещаещаем информацию об этом в переменную ourword
$id=$ourword->id;
//находим id нашего слова 	

$data['id']= $id;

	$userdictionary = R::dispense('userdictionary');
	
	if(R::count('userdictionary',"word = ?", array($data['id']))==0  or R::count('userdictionary',"iduser = ?", array($logged_id))==0 ) {
				$userdictionary->word = $id;
			//в таблицу userdictionary в поле word помещаем id нашего слова из таблицы globalword
				
			$userdictionary->iduser = $_SESSION['logged_id'];
			// в поле iduser помещается id пользователя, который сейчас авторизован
	
				R::store($userdictionary);
			// сохраняем
	}
	//$checkFor = R::count( 'word', ' iduser == [ $logged_id ]');
	//помещаем в переменную checkFor количество слов, которые передали нам через POST в таблице userdictionary
	
	//if($checkFor == 0){  
	

	
	

	//}
		
//if ($result = $mysqli->query("SELECT id FROM globalwords WHERE word LIKE '".$word."%'")) {

    /* извлечение ассоциативного массива */
    //while ($row = $result->fetch_assoc()) {

      //  if($ins_word = $mysqli->query("INSERT INTO `userdictionary`(`word`) VALUES ('".$row['id']."')")) {
        //    echo 'Добавлено';
        //}

    //}

    /* удаление выборки */
    //$result->free();
//}


//закрываем соединение с базой
require_once('dbend.php');