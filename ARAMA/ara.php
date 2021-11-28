<?php
require_once'connect.php';
?>
<?php
$q=$_GET['q'];
if($q == null){
header("location:indexx.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
	<title><?php echo $q; ?> ara.com </title>
	<link href="ara.css" type="text/css" rel="stylesheet" media="all" />
	</head>
	<body>
		<div class="box">
			<a href="indexx.php">
			<img src="Camera Roll/logo4.png" id="logo"></a>
			   <form id="form" method="GET" action="ara.php">
			<input type="text" name="q"  value="<?php echo $q; ?>" id="inputtext" required/>
			<input type="submit" name="Ara" value="Ara" id="btn"/>
		</form>
		</div>
		<hr>
<div class="result">
	<center><h2>'<?php echo $q; ?>' sorguladınız...</h1></center>

	<?php


$query = $db-> query("SELECT * FROM site WHERE baslik LIKE  '%".$q."%' ",PDO::FETCH_ASSOC);
//$query=$db->prepare("SELECT * FROM site WHERE baslik LIKE :baslik");
//$query->execute(array(':baslik'=> '%'.$q.'%'  ));

/* Sonuç kümesindeki tüm satırları alalım */

		  
		
if ($query->rowCount() ) {
	 
	foreach ($query as $row) {
		
			#
		
		
        $baslik = $row['baslik'];
		$url = $row['url'];
		$desc = $row['description'];


		
		//echo " ".$row['baslik']."<br>";
		//echo " ".$row['description']."<br>";
		
		
		
	
	}

	}
	//echo "<p>$q</p>". "kaydına ait(".$query->rowCount().")sonuç bulundu" ; 
 
		 
		
		
		
	 ?>

	
<div class="box">
	<p style="color:green;"><?php echo $url; ?> </p>
<h1><a href=<?php echo $url; ?><style="text-decoration:none;color:#0066ff;">
		<?php echo $baslik; ?></a></h1>

<p style="margin-top:10px;"><?php echo $desc; ?></p>
<hr>
</div>
</body>
</html>

