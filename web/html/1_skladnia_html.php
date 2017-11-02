<?php

function kolo($string,$keys,$pod,$pod2)
{
	$bufor=file($string);
	$bufor2;
	
	echo'<table border="0" frame="box" rules="none"  cellspacing="0" style="border-color:black; border-style:solid; background-color:#262626;font-size:13px;overflow:auto;" >'
		.'<tr><td align="center" colspan="2" style="color:gold;font-size:15px;background-color:#003700;">HTML/XHTML:</td></tr>';
		
	for($i=0;$i<count($bufor) ;$i++)
	{
		
		
		
			$bufor2=$bufor[$i];
				
			for($k=0;$k<count($pod);$k++)
				{					
					$bufor2=str_replace($pod[$k],$pod2[$k],$bufor2);
				}
			
			
			
			
			for($j=0;$j<count($keys) ;$j++)
			{
				
					/* liczby i cyfry: <48,57>U<65,90>U<97,112>U{95}*/
				
				
			
						$bufor2=str_replace($keys[$j],'<span class="keywords">'.$keys[$j].'</span>',$bufor2);
					
				
				
			}
			
			
			$bufor2=str_replace($pod2[3],'<span class="operator">/</span>',$bufor2);
			$bufor2=str_replace($pod2[4],'<span class="operator">=</span>',$bufor2);
			$bufor2=str_replace($pod2[5],'<span class="keywords">class</span>',$bufor2);
			$bufor2=str_replace($pod2[1],'<span class=operator>&lt</span>',$bufor2);
			$bufor2=str_replace($pod2[2],'<span class=operator>&gt</span>',$bufor2);
			
			$bufor2=str_replace('<span class=operator>&lt</span>!--','<code class="truecomment">&lt!--',$bufor2);
			$bufor2=str_replace('--<span class=operator>&gt</span>','--&gt</code>',$bufor2);
			
			
		
			
			
			
			if(strstr($bufor2,'fak'))
			{
				
				$bufor3=explode('fak',$bufor2);
				$bufor4='';
				for($s=0;$s<count($bufor3)-1;$s++)
				{
					if(!($s%2))
						$bufor4=$bufor4.$bufor3[$s].'<span class="normal">"';
					else
						$bufor4=$bufor4.$bufor3[$s].'"</span>';	
				}
				$bufor4=$bufor4.$bufor3[count($bufor3)-1];
				$bufor2=$bufor4;
				
			}
			
			
		
			
			
		$bufor2=str_replace('    ','&emsp;&ensp;',$bufor2);
	
		echo '<tr><td nowrap bgcolor="black"><span class="licznik">'.$i.'</span><span class="leftbar">-></span></td><td nowrap><code>'.$bufor2.'</code></td></tr>';
		
	}
	
	echo '</table>';
			
}

$znaczniki[0]='&lta';
$znaczniki[1]='a&gt';
$znaczniki[2]='&ltabbr';
$znaczniki[3]='abbr&gt';
$znaczniki[4]='&ltacronym';
$znaczniki[5]='acronym&gt';
$znaczniki[6]='&ltaddress';
$znaczniki[7]='address&gt';
$znaczniki[8]='&ltarea';
$znaczniki[9]='area&gt';
$znaczniki[10]='&ltb';
$znaczniki[11]='b&gt';
$znaczniki[12]='&ltbase';
$znaczniki[13]='base&gt';
$znaczniki[14]='&ltbdo';
$znaczniki[15]='bdo&gt';
$znaczniki[16]='&ltbig';
$znaczniki[17]='big&gt';
$znaczniki[18]='&ltblockquote';
$znaczniki[19]='blockquote&gt';
$znaczniki[20]='&ltbody';
$znaczniki[21]='body&gt';
$znaczniki[22]='&ltbr';
$znaczniki[23]='br&gt';
$znaczniki[24]='&ltbutton';
$znaczniki[25]='button&gt';
$znaczniki[26]='&ltcaption';
$znaczniki[27]='caption&gt';
$znaczniki[28]='&ltcite';
$znaczniki[29]='cite&gt';
$znaczniki[30]='&ltcode';
$znaczniki[31]='code&gt';
$znaczniki[32]='&ltcol';
$znaczniki[33]='col&gt';
$znaczniki[34]='&ltcolgroup';
$znaczniki[35]='colgroup&gt';
$znaczniki[36]='&ltdd';
$znaczniki[37]='dd&gt';
$znaczniki[38]='&ltdel';
$znaczniki[39]='del&gt';
$znaczniki[40]='&ltdfn';
$znaczniki[41]='dfn&gt';
$znaczniki[42]='&ltdiv';
$znaczniki[43]='div&gt';
$znaczniki[44]='&ltdl';
$znaczniki[45]='dl&gt';
$znaczniki[46]='&ltdt';
$znaczniki[47]='dt&gt';
$znaczniki[48]='&ltem';
$znaczniki[49]='em&gt';
$znaczniki[50]='&ltfieldset';
$znaczniki[51]='fieldset&gt';
$znaczniki[52]='&ltform';
$znaczniki[53]='form&gt';
$znaczniki[54]='&lth1';
$znaczniki[55]='h1&gt';
$znaczniki[56]='&lth2';
$znaczniki[57]='h2&gt';
$znaczniki[58]='&lth3';
$znaczniki[59]='h3&gt';
$znaczniki[60]='&lth4';
$znaczniki[61]='h4&gt';
$znaczniki[62]='&lth5';
$znaczniki[63]='h5&gt';
$znaczniki[64]='&lthead';
$znaczniki[65]='head&gt';
$znaczniki[66]='&lthr';
$znaczniki[67]='hr&gt';
$znaczniki[68]='&lthtml';
$znaczniki[69]='html&gt';
$znaczniki[70]='&lti';
$znaczniki[71]='i&gt';
$znaczniki[72]='&ltimp';
$znaczniki[73]='imp&gt';
$znaczniki[74]='&ltinput';
$znaczniki[75]='input&gt';
$znaczniki[76]='&ltins';
$znaczniki[77]='ins&gt';
$znaczniki[78]='&ltkbd';
$znaczniki[79]='kbd&gt';
$znaczniki[80]='&ltlabel';
$znaczniki[81]='label&gt';
$znaczniki[82]='&ltlegend';
$znaczniki[83]='legend&gt';
$znaczniki[84]='&ltli';
$znaczniki[85]='li&gt';
$znaczniki[86]='&ltlink';
$znaczniki[87]='link&gt';
$znaczniki[88]='&ltmap';
$znaczniki[89]='map&gt';
$znaczniki[90]='&ltmeta';
$znaczniki[91]='meta&gt';
$znaczniki[92]='&ltnoscript';
$znaczniki[93]='noscript&gt';
$znaczniki[94]='&ltobject';
$znaczniki[95]='object&gt';
$znaczniki[96]='&ltol';
$znaczniki[97]='ol&gt';
$znaczniki[98]='&ltoptgroup';
$znaczniki[99]='optgroup&gt';
$znaczniki[100]='&ltoption';
$znaczniki[101]='option&gt';
$znaczniki[102]='&ltp';
$znaczniki[103]='p&gt';
$znaczniki[104]='&ltparam';
$znaczniki[105]='param&gt';
$znaczniki[106]='&ltpre';
$znaczniki[107]='pre&gt';
$znaczniki[108]='&ltq';
$znaczniki[109]='q&gt';
$znaczniki[110]='&ltsamp';
$znaczniki[111]='samp&gt';
$znaczniki[112]='&ltscript';
$znaczniki[113]='script&gt';
$znaczniki[114]='&ltselect';
$znaczniki[115]='select&gt';
$znaczniki[116]='&ltsmall';
$znaczniki[117]='small&gt';
//$znaczniki[118]='&ltspan';
//$znaczniki[119]='span&gt';
$znaczniki[120]='&ltstrong';
$znaczniki[121]='strong&gt';
$znaczniki[122]='&ltstyle';
$znaczniki[123]='style&gt';
$znaczniki[124]='&ltsub';
$znaczniki[125]='sub&gt';
$znaczniki[126]='&ltsup';
$znaczniki[127]='sup&gt';
$znaczniki[128]='&lttable';
$znaczniki[129]='table&gt';
$znaczniki[130]='&lttbody';
$znaczniki[131]='tbody&gt';
$znaczniki[132]='&lttd';
$znaczniki[133]='td&gt';
$znaczniki[134]='&lttextarea';
$znaczniki[135]='textarea&gt';
$znaczniki[136]='&lttfoot';
$znaczniki[137]='tfoot&gt';
$znaczniki[138]='&ltth';
$znaczniki[139]='th&gt';
$znaczniki[140]='&ltthead';
$znaczniki[141]='thead&gt';
$znaczniki[142]='&lttitle';
$znaczniki[143]='title&gt';
$znaczniki[144]='&lttr';
$znaczniki[145]='tr&gt';
$znaczniki[146]='&lttt';
$znaczniki[147]='tt&gt';
$znaczniki[148]='&ltul';
$znaczniki[149]='ul&gt';
$znaczniki[150]='&ltvar';
$znaczniki[151]='var&gt';



/*$operat=array(20);
$operat[0]='~';
$operat[1]='%';
$operat[2]='^';
$operat[3]='&';
$operat[4]='*';
$operat[5]='(';
$operat[6]=')';
$operat[7]='-';
$operat[8]='|';
$operat[9]='[';
$operat[10]='{';
$operat[11]=']';
$operat[12]='}';
$operat[13]=';';
$operat[14]=':';
$operat[15]=',';
$operat[16]='?';
$operat[17]='+';
$operat[18]='.';
$operat[19]='!';*/

/*$cyfry=array(10);
$cyfry[0]='0';
$cyfry[1]='1';
$cyfry[2]='2';
$cyfry[3]='3';
$cyfry[4]='4';
$cyfry[5]='5';
$cyfry[6]='6';
$cyfry[7]='7';
$cyfry[8]='8';
$cyfry[9]='9';
*/
$blabla=array(7);

$blabla[1]='<';
$blabla[2]='>';
$blabla[3]='/';
$blabla[4]='=';
$blabla[5]='class';
$blabla[0]='"';

$blabla1=array(7);

$blabla1[1]='&lt';
$blabla1[2]='&gt';
$blabla1[3]='śśś';
$blabla1[4]='źźź';
$blabla1[5]='coscoscos';
$blabla1[0]='fak';

?>