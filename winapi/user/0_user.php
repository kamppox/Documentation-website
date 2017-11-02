<!DOCTYPE HTML>
<html lang="pl">
<head>

<?php
include('../../1_main_head.php');
url();
head('USER 32.dll');
include('0_header_user.php');
?>

</head>
<body>
	
	<div  id="all"  >
		<div id="head"></div>
		<div id="menu"><script type="text/javascript"> menu(); </script></div>
		<div id="submenu"></div>		
		<div id="leftmenu"><?php wypiszemy($tabuser,"winapi/user/");?></div>
		<div id="main">
		<h1>USER 32.dll</h1>
		
		</ul></p></div>		
		<div id="end"><?php stopka();?></div>
	</div>
	 
	
</body>
</html>