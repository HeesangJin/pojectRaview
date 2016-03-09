<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/restaurantMain.css" type="text/css">
</head>
	<?php
   	include "subPage/raviewTitle.html";
   
   
	?>

	<body>

	<div id="space"></div>



	<?php
		include "subPage/searchBar.php";
		include "subPage/restaurantInfo.php"
	?>
	<div id="spaceDouble"></div>
	<?php
		include "subPage/menuList.php";
	?>
	<div id="space"></div>
	<?php
		include "subPage/footer.php";
	?>
</body>
</html>