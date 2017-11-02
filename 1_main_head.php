<?php

function head($tytul)
	{
		echo'<meta http-equiv="content; Content-type=text/html" charset="utf-8" />
		<link href="1_style.css" rel="stylesheet" type="text/css" />
		<SCRIPT  src="1_skrypt.js" type="text/javascript"></SCRIPT>
		<title>'.$tytul.'</title>';
	}
function stopka()
	{
		echo '<marquee behavior="alternate">All right reserved &copy 2017 Kamil Początko</marquee>';
	}
	function url()
	{
		//header("Location: http://trying.kamillopoczczo.cba.pl/index.php");
		echo '<base href="http://trying.kamillopoczczo.cba.pl/index.php" />';
		// '<link rel="alternate" hreflang="pl" href="http://trying.kamillopoczczo.cba.pl/index.php" />'; 
		
	}
	
	
?>