<!DOCTYPE HTML>
<html lang="pl">
<head>

<?php
include('../../1_main_head.php');
include('1_skladnia_html2.php');
url();
head('HTML ');
include('0_header_html.php');
?>

</head>
<body>
	
	<div  id="all"  >
		<div id="head"></div>
		<div id="menu"><script type="text/javascript"> menu(); </script></div>
		<div id="submenu"></div>		
		<div id="leftmenu"><?php wypiszemy($znacznik,"web/html/");?></div>
		<div id="main">
			<h1>HTML</h1>
			<p>
				HTML (ang. HyperText Markup Language) – hipertekstowy język znaczników, obecnie szeroko wykorzystywany do tworzenia stron internetowych.
			</p>
			<p>
				HTML pozwala opisać strukturę informacji zawartych wewnątrz strony internetowej,
				nadając znaczenie poszczególnym fragmentom tekstu – formując hiperłącza, akapity, nagłówki, listy – 
				oraz osadza w tekście dokumentu obiekty plikowe np. multimedia bądź elementy baz danych np. interaktywne formularze danych.
			</p>
			<p>
			
					<?php kolorowanka('123.txt',$znacznikihtml,$atrybutyhtml,$blabla,$blabla1); ?>
			
			</p>
		</div>		
		<div id="end"><?php stopka();?></div>
	</div>
	 
	
</body>
</html>