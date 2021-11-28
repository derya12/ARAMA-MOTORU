<?php
require_once'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>URL EKLEME SAYFASI</title>
	<meta charset="UTF-8">
	<link href="admin.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="content">
			<h1>URL KAYDETME SAYFASI...</h1><br>
			<form method="POST" action="index.php">
				<label>BAŞLIK: </label><br>
				<input type="text" name="baslik" id="baslik"><br><br>
				<label>URL:</label><br>
				<input type="text" name="url" id="url"><br><br>
				<label>AÇIKLAMA:</label><br>
				<textarea name="desc" id="description"></textarea><br><br>
				<input type="submit" name="submit" value="KAYDET" id="submit"><br>
			</form>

		</div>
	
			<?php
	

	if(isset($_POST['submit'])){
		$baslik = $_POST['baslik'];
		$url = $_POST['url'];
		$desc = $_POST['desc'];
		
		

		$veriekle = $db->exec("insert into site set baslik= '$baslik', url = '$url', description = '$desc'");

		



		if($veriekle){

echo "EKLENDİ";

}else{

echo "HATA";

}
	}
	
	
			?>


</body>
</html>