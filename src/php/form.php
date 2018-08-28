<?php

// err_1   => заполнены не все поля
// err_2_1 => некоректное имя
// err_2_2 => некоректная фамилия
// err_2_3 => некоректный номер телефона

$data = json_decode(file_get_contents('php://input'), true);
$dt = date('Y-m-d H:i:s');
$name =  $data["name"];
$surname = $data["surname"];
$phone = $data["phone"];
$order = $data["order"];
$promocod = $data["promocod"];
$promoDescending = $data["promocod-descending"];
$promoMark = "";
$summ = $data["summ"];

for ($i = 0; $i < count($order); $i++) {
	$str = $str.'№'.$order[$i]["number"].' '.$order[$i]["name"].' ('.$order[$i]["amount"].') '.$order[$i]["color"].' - '.$order[$i]["price"].'грн'."\n";
}

if ($name == '' || $surname == '' || $phone == '') {
	echo 'err_1';
}

else if(!(preg_match("/^[а-яФА-Я]+$/",$name))) {
	echo 'err_2_1';
}

else if(!(preg_match("/^[а-яФА-Я]+$/",$surname))) {
	echo 'err_2_2';
}

else if(!(preg_match("/^\+380 \([0-9]{2}\) [0-9]{3}-[0-9]{2}-[0-9]{2}$/",$phone))) {
	echo 'err_2_3';
}

else {
	if ($promoDescending == true) {
		$promoMark = "✔";
	}

	file_put_contents('../orders.txt', "$dt $surname $name $phone \n"."$str"."Промокод: $promocod $promoMark \n"."Сумма: $summ \n \n", FILE_APPEND);
	echo 1;
}


?>