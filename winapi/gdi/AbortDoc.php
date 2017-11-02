<!DOCTYPE HTML>
<html lang="pl">
<head>

<?php
include('../../1_main_head.php');
include('1_skladnia.php');
url();
head('GDI 32.dll');
include('0_header_gdi.php');
?>

</head>
<body>
	
	<div  id="all"  >
		<div id="head"></div>
		<div id="menu"><script type="text/javascript"> menu(); </script></div>
		<div id="submenu"></div>		
		<div id="leftmenu"></div>
		<div id="main">
		<h1>AbortDoc()</h1>
			
		<pre id="cpp">WING&ensp;DIAPI int WINAPI AbortDoc(HDC);</pre>
		<?php kolo('skladnia2.txt',$keywords,$operat,$cyfry,$blabla,$blabla1); ?>
		
		</ul></p></div>		
		<div id="end"><?php stopka();?></div>
	</div>
	 
	
</body>
</html>