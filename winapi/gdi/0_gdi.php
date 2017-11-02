<!DOCTYPE HTML>
<html lang="pl">
<head>
	
<?php
include('../../1_main_head.php');

include('1_skladnia.php');

	

url();
head('GDI 32.dll');
include('0_header_gdi.php');
/* liczby i cyfry: <48,57>U<65,90>U<97,112>U{95}*/

?>
	
	
</head>
<body>
	
	<div  id="all"  >
		<div id="head"></div>
		<div id="menu"><script type="text/javascript"> menu(); </script></div>
		<div id="submenu"></div>		
		<div id="leftmenu"><?php wypiszemy($tabgdi,"winapi/gdi/");?></div>
		<div id="main">
			
			<h1>GDI 32.dll</h1>
			
			<?php kolo('skladnia.txt',$keywords,$operat,$cyfry,$blabla,$blabla1);?>
		</div>		
		<div id="end"><?php stopka();?></div>
	</div>
	 
	
</body>
</html>