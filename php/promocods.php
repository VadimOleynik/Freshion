<?php
$fp = fopen("../promocods.txt", "r"); // Открываем файл в режиме чтения

if ($fp) {
	while (!feof($fp)){
		$text = fgets($fp, 999);
		$text = preg_replace('/\s+/', ',', $text);
		echo $text;
	}
}

fclose($fp);

?>

