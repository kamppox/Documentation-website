<!DOCTYPE HTML>
<html lang="pl">
<head>

<?php
include('../../1_main_head.php');
url();
head('KERNEL 32.dll');
include('0_header_kernel.php');
?>

</head>
<body>
	
	<div  id="all"  >
		<div id="head"></div>
		<div id="menu"><script type="text/javascript"> menu(); </script></div>
		<div id="submenu"></div>		
		<div id="leftmenu"><?php wypiszemy($tabkernel,"winapi/kernel/");?></div>
		<div id="main">
		<h1>KERNEL 32.dll</h1>
		
		</ul></p></div>		
		<div id="end"><?php stopka();?></div>
	</div>
	 
	
</body>
</html>