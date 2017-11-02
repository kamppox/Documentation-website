<?php
/*
Autor: Kamil Poczatko. 
*/
function kolo($string,$keys,$ops,$dig,$pod,$pod2)
{
	$bufor=file($string);
	$bufor2;

	
	
	

	
	echo'<table border="0" frame="box" rules="none"  cellspacing="0" style="border-color:black; border-style:solid; background-color:#262626;font-size:13px;overflow:auto;" >'
		.'<tr><td align="center" colspan="2" style="color:gold;font-size:15px;background-color:#003700;">C/C++:</td></tr>';
		
	for($i=0;$i<count($bufor) ;$i++)
	{
		
		if(strstr($bufor[$i],'#'))
		{
			$bufor2=$bufor[$i];
			$bufor2=str_replace('<','&lt',$bufor2);
			$bufor2=str_replace('>','&gt',$bufor2);
			$bufor2=str_replace('/*','<code class="truecomment">/*',$bufor2);
			$bufor2=str_replace('*/','*/</code>',$bufor2);
			if(strstr($bufor2,'//'))
			{
				$bufor2=str_replace('//','<code class="truecomment">//',$bufor2);
				$bufor2=$bufor2.'</code>';
			}
			echo '<tr><td nowrap bgcolor="black"><span class="licznik">'.$i.'</span><span class="leftbar">-></span></td><td nowrap><code class="comment"> '.$bufor2.'</code></td></tr>';
		}
		
		else
		{
			$bufor2=$bufor[$i];
				
			for($k=0;$k<count($pod);$k++)
				{					
						$bufor2=str_replace($pod[$k],$pod2[$k],$bufor2);
				}
			
			
			
			
			for($j=0;$j<count($keys) ;$j++)
			{
				
					/* liczby i cyfry: <48,57>U<65,90>U<97,112>U{95}*/
				
				
				$znak=true;
				$iloscznakow=strlen($keys[$j]);	
					for($g=13;$g<123;$g++)
					{	
						if( $g>=48 && $g<=57 || $g>=65 && $g<=90 || $g>=97 && $g<=122 || $g==95 ||  $g==13)
						{
							//jest przed slowem kluczowym nie ma po
							if(chr($g)==$bufor2[strpos($bufor2,$keys[$j])-1]||chr($g)==$bufor2[strpos($bufor2,$keys[$j])+$iloscznakow])//||chr($g)==$bufor2[strpos($bufor2,$keys[$j])+strlen($key[$j])])
							$znak=false;
							
						}		
					}
					if($znak)
						$bufor2=str_replace($keys[$j],'<span class="keywords">'.$keys[$j].'</span>',$bufor2);
					
				
				
			}
			
			for($k=0;$k<count($ops);$k++)
			{
				if($k==3)
					continue;
				else
				$bufor2=str_replace($ops[$k],'<span class="operator">'.$ops[$k].'</span>',$bufor2);
			}
			for($k=0;$k<count($dig);$k++)
			{
				$znak=true;
					for($g=13;$g<123;$g++)
					{	
						if( $g>=65 && $g<=90 || $g>=97 && $g<=122 || $g==95 ||  $g==13)
						{
							//jest przed slowem kluczowym nie ma po
							if(chr($g)==$bufor2[strpos($bufor2,$dig[$k])-1]||chr($g)==$bufor2[strpos($bufor2,$dig[$k])+1])//||chr($g)==$bufor2[strpos($bufor2,$keys[$j])+strlen($key[$j])])
							$znak=false;
							
						}		
					}
					if($znak)
				$bufor2=str_replace($dig[$k],'<span class="cholerawieco">'.$dig[$k].'</span>',$bufor2);
			}
			
		
			$bufor2=str_replace($pod2[3],'<span class="operator">/</span>',$bufor2);
			$bufor2=str_replace($pod2[4],'<span class="operator">=</span>',$bufor2);
			$bufor2=str_replace($pod2[5],'<span class="keywords">class</span>',$bufor2);
			$bufor2=str_replace($pod2[1],'<span class=operator>&lt</span>',$bufor2);
			$bufor2=str_replace($pod2[2],'<span class=operator>&gt</span>',$bufor2);
			$bufor2=str_replace($pod2[0],'<span class="operator">&amp</span>',$bufor2);
			$bufor2=str_replace('<span class="operator">/</span><span class="operator">*</span>','<code class="truecomment">/*',$bufor2);
			$bufor2=str_replace('<span class="operator">*</span><span class="operator">/</span>','*/</code>',$bufor2);
			
			
			
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
			
			
			if(strstr($bufor2,'//'))
			{
				$bufor2=str_replace('//','<code class="truecomment">//',$bufor2);
				$bufor2=$bufor2.'</code>';
			}
			
			
			
			$bufor2=str_replace('    ','&emsp;&ensp;',$bufor2);
	
			echo '<tr><td nowrap bgcolor="black"><span class="licznik">'.$i.'</span><span class="leftbar">-></span></td><td nowrap><code>'.$bufor2.'</code></td></tr>';
		}
	}
	
	echo '</table>';
			
}

$keywords=array(44);
$keywords[0]='asm';
$keywords[1]='auto';
$keywords[2]='break';
$keywords[3]='case';
$keywords[4]='catch';
$keywords[5]='char';
$keywords[6]='while';
$keywords[7]='const';
$keywords[8]='continue';
$keywords[9]='default';
$keywords[10]='delete';
$keywords[11]='do';
$keywords[12]='friend';
$keywords[13]='goto';
$keywords[14]='if';
$keywords[15]='inline';
$keywords[16]='int';
$keywords[17]='long';
$keywords[18]='new';
$keywords[19]='operator';
$keywords[20]='private';
$keywords[21]='protected';
$keywords[22]='public';
$keywords[23]='register';
$keywords[24]='return';
$keywords[25]='short';
$keywords[26]='unsigned';
$keywords[27]='sizeof';
$keywords[28]='static';
$keywords[29]='struct';
$keywords[30]='switch';
$keywords[31]='template';
$keywords[32]='this';
$keywords[33]='throw';
$keywords[34]='try';
$keywords[35]='typedef';
$keywords[36]='union';
$keywords[37]='signed';
$keywords[38]='virtual';
$keywords[39]='void';
$keywords[40]='volatile';
$keywords[41]='for';
$keywords[42]='namespace';
$keywords[43]='using';


$operat=array(20);
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
$operat[19]='!';

$cyfry=array(10);
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

$blabla=array(7);
$blabla[0]='&';
$blabla[1]='<';
$blabla[2]='>';
$blabla[3]='/';
$blabla[4]='=';
$blabla[5]='class';
$blabla[6]='"';

$blabla1=array(7);
$blabla1[0]='ąąą';
$blabla1[1]='ńńń';
$blabla1[2]='óóó';
$blabla1[3]='śśś';
$blabla1[4]='źźź';
$blabla1[5]='coscoscos';
$blabla1[6]='fak';

?>