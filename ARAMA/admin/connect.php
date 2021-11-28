<?php
try {
	$db=new PDO("mysql:host=localhost;dbname=araproject;charset=utf8", 'root', '');
	echo "BAĞLANDIII";
	
} catch (PDOException $e) {
	echo 'HATA:'.$e->getmessage();
	
}
//if ($db->exec('insert into site(baslik,url,description)values("deneme","hjkj","bhj")')) {
	//echo "eklendi";
	
//}
?>