<!DOCTYPE HTML>
<html lang="pl">
<head>

<?php
include('../1_main_head.php');
url();
head('WIN 32 API');
?>

</head>
<body>
	
	<div  id="all"  >
		<div id="head"></div>
		<div id="menu"><script type="text/javascript"> menu(); </script></div>
		<div id="submenu"></div>		
		<div id="leftmenu"></div>
		<div id="main">
		<h1>WINDOWS API</h1>
		<p>Windows API, lub krócej: WinAPI – interfejs programistyczny systemu Microsoft Windows – jest to zbiór niezbędnych funkcji, stałych i zmiennych umożliwiających działanie programu w systemie operacyjnym Microsoft Windows.</p>
		<p>Win32 – nazwa 32-bitowej bazy programistycznej zastosowanej w nowszych wersjach systemów operacyjnych produkowanych przez firmę Microsoft. Wcześniejsza 16-bitowa wersja bazy programistycznej Microsoft Windows nosiła nazwę Win16.
		Na Win32 składają się funkcje w języku C w postaci bibliotek DLL, z których najważniejsze to:
		<ul>
			<li><a href="winapi/kernel/0_kernel.php">kernel32.dll</a></li>
			<li><a href="winapi/user/0_user.php">user32.dll</a></li>
			<li><a href="winapi/gdi/0_gdi.php" >gdi32.dll</a></li>
		</ul></p></div>		
		<div id="end"><?php stopka();?></div>
	</div>
	 
	
</body>
</html>