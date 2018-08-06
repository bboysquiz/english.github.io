<?php header("Location: admin.php");
 require "db.php";?>
<?php

$data = $_POST;
if( isset($data['do_add_text'])){ //проверка на начичие нажатой кнопки "добавить тему"
	$texts = R::dispense('texts'); //создание таблицы, если её нет, если есть, то её открытие
	$texts->text_name=$data['text_name']; //добавление в таблицу "texts" в поле "text_name" названия темы
	$texts->text_content=$data['text_content'];
	$texts->text_translate=$data['text_translate'];
	R::store($texts); // сохранение изменений в таблице "texts"
	$_SESSION['text_id'] = $texts->id;
	$_SESSION['text_name'] = $texts->text_name;
	$texts = R::load('texts', $_SESSION['text_id']);
	$allWords = $texts->text_content;
	$separateWords = str_word_count($allWords, 1);	
		foreach($separateWords as $oneWord){
		$globalwords = R::dispense('globalwords');
		$data['oneWord']= $oneWord;
		if(R::count('globalwords',"word = ?", array($data['oneWord']))==0){
			$globalwords->word=$data['oneWord'];
			R::store($globalwords);
		}
	}
	}
?>