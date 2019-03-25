<?php

header("Content-Type: text/plain; charset=utf-8");


	echo "Имя: {$_GET['name']}\n"; 


		if ($_GET['age'] == "age"){
		echo "Возраст\n";
			} else {
		echo "Возраст: {$_GET['age']}\n";
	}
	 
	if ($_GET['sex'] == "sex"){
		echo "Пол\n";
	} else {
		echo "Пол: {$_GET['sex']}\n";
	}

		
	echo "Ваше мнение: {$_GET['comnents']}\n";

?>