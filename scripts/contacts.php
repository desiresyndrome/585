<?php
	$title = $_POST['titleFF'];
	$name = $_POST['nameFF'];
	$phone = $_POST['telFF'];
	$msg = $_POST['msgFF'];
	$token = "1723488466:AAEmU6Vm2aIw2vXli9GO8YRPnNF8Qi08l6M";
	$chat_id = "-1001599382179";
	$arr = array(
		'Со страницы: ' => $title,
		'Имя пользователя: ' => $name,
		'Телефон: ' => $phone,
		'Сообщение: ' => $msg,
	);
	foreach($arr as $key => $value) {
		$txt .= "<b>".$key."</b> ".$value."%0A";
	};

	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
	if ($sendToTelegram) {
		header('Location: /thnx');
	} else {
		echo "Error";
	} 
?>