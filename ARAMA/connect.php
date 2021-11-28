<?php
try {
	$db=new PDO("mysql:host=localhost;dbname=araproject;charset=utf8", 'root', '');
	echo "BAĞLANDIII";
	
} catch (PDOException $e) {
	echo 'HATA:'.$e->getmessage();
	
}