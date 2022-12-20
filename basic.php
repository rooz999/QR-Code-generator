<?php 

include "config.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>basic example</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<!--<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
--><script type="text/javascript" src="../src/jquery.qrcode.js"></script>
<script type="text/javascript" src="../src/qrcode.js"></script>

<?
	$q = mysql_query("SELECT * FROM people where people_no > 22121709 limit 100");
	while ($r = mysql_fetch_assoc($q)){
?>

<div id="qrcodeTable<? echo $r['id'];?>"></div>

<script>
	//jQuery('#qrcode').qrcode("this plugin is great");
	jQuery('#qrcodeTable<? echo $r['id'];?>').qrcode({
		render	: "table",
		text	: "<? echo $r['people_no'];?>"
	});	
	
	
	// jQuery('#qrcodeCanvas').qrcode({
		// text	: "http://jetienne.com"
	// });	
</script>
<p>--------------------------------------------------------------</p>

	<?}?>
</body>
</html>
