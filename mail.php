<?php
	if($_GET) {
		$name = htmlspecialchars($_GET['name']);
		$mail = htmlspecialchars($_GET['email']);
		$tel = htmlspecialchars($_GET['tel']);
		$msg = htmlspecialchars($_GET['comment']);
		$to = 'nexus-studio@yandex.ru';
		
		$msg .= '
Имя: '.$name.'
Телефон: '.$phone.'
E-mail: '.$mail;

		$result = mail($to, "Обратная связь!", $msg);
		
		if($result) {
			echo 'Принято к доставке!';
		} else {
			echo 'Не принято к доставке!';
		}
	} else {
		echo 'not data!';
	}