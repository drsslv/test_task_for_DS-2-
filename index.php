<?php
/*
Задание 2.
Написать функцию, которая принимает в качестве аргументов префикс и массив строк и возвращает все строки, начинающиеся с указанного префикса. Необходимо реализовать функцию наиболее оптимальным образом.

*/
function qwerty($prefix,$mas) {
	$ms = array();
	$i = 0;
	foreach ($mas as $key => $value) {
		if (stripos($mas[$key],$prefix) === 0){
		$ms[$i] = $mas[$key];
		$i++;
		}
	}
	return $ms;
}
$kok = 'з';
$lol = array('привет','здоровье','прикол','злоба','кошка','ремесло','воображение');
$result = qwerty($kok,$lol);
echo var_dump($result);



?>