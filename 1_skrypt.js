
function dotnetmenuclick()
	{
	
	var doc=document.getElementById("submenu");
		doc.innerHTML= '<a href="#">C#</a> | <a href="#">Dokmentacja .NET</a> | <a href="#">ASP.NET</a>';
	var main=document.getElementById("main");
		main.innerHTML="";
	var bar=document.getElementById("leftmenu");
		bar.innerHTML="";
	}
function webmenuclick()
	{
	
	var doc=document.getElementById("submenu");
	doc.innerHTML= '<a href="web/html/0_html.php">HTML</a> | <a href="#">CSS</a> | <a href="#">JavaScript</a> | <a href="#">PHP</a>';
	var main=document.getElementById("main");
	main.innerHTML='<h1>WEBMASTERING</h1><p>Webmaster – szeroki termin, do niedawna oznaczający jedną osobę zajmującą się projektowaniem, kodowaniem, szatągraficzną oraz aktualizacją witryny internetowej. Witrynę WWW webmaster wykonuje na zamówienie osoby (firmy), która chce zaistnieć w sieci internetowej.</p>'+
	'<p>Technologie webmasterowe jakie zostały opisane na tej stronie to:'+
		'<ul>'+
			'<li><a href="web/html/0_html.php" >HTML</a></li>'+
			'<li><a href="web/css/0_css.php" >CSS</a></li>'+
			'<li><a href="web/js/0_js.php" >JS</a></li>'+
			'<li><a href="web/php/0_php.php" >PHP</a></li>'+
		'</ul></p>';
	var bar=document.getElementById("leftmenu");
	bar.innerHTML='<ul><li><a href="web/html/0_html.php" >HTML</a></li>'+
			'<li><a href="web/css/0_css.php" >CSS</a></li>'+
			'<li><a href="web/js/0_js.php" >JS</a></li>'+
			'<li><a href="web/php/0_php.php" >PHP</a></li></ul>';
	}

function cplusmenuclick()
	{
	
	var doc=document.getElementById("submenu");
	doc.innerHTML= '<a href="winapi/0.php">WIN 32 API</a> | <a href="#">STL</a> | <a href="#">SDL</a>';
	var main=document.getElementById("main");
	main.innerHTML= '<h1>C++ – język programowania ogólnego przeznaczenia.</h1><p>Umożliwia abstrakcję danych oraz stosowanie kilku paradygmatów programowania: proceduralnego, obiektowego i generycznego. Charakteryzuje się wysoką wydajnością kodu wynikowego, bezpośrednim dostępem do zasobów sprzętowych i funkcji systemowych, łatwością tworzenia i korzystania z bibliotek (napisanych w C++, C lub innych językach), niezależnością od konkretnej platformy sprzętowej lub systemowej (co gwarantuje wysoką przenośność kodów źródłowych) oraz niewielkim środowiskiem uruchomieniowym. Podstawowym obszarem jego zastosowań są aplikacje i systemy operacyjne.</p><p>C++ został zaprojektowany przez Bjarne Stroustrupa jako rozszerzenie języka C o obiektowe mechanizmy abstrakcji danych i silną statyczną kontrolę typów. Zachowanie zgodności z językiem C na poziomie kodu źródłowego pozostaje jednym z podstawowych celów projektowych kolejnych standardów języka.</p>';
	var bar=document.getElementById("leftmenu");
	bar.innerHTML= '<ul><li><a href="winapi/0.php">WIN 32 API</a></li><li><a href="#">STL</a></li><li><a href="#">SDL</a></li><ul>';
	}

function menu()
	{
	document.write( '<a href="index.php">HOME</a> | <a onclick="return cplusmenuclick()" >C++</a> | <a onclick="return dotnetmenuclick()">.NET</a> | <a  onclick="return  webmenuclick()">WEBMASTER</a>');
	}

