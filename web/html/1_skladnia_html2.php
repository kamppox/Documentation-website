<?php

function kolorowanka($string,$znaczniki,$atrybuty,$pod1,$pod2)
{
	$bufor=file($string);
	$bufor2;
	
	echo'<table border="0" frame="box" rules="none"  cellspacing="0" style="border-color:black; border-style:solid; background-color:#262626;font-size:13px;overflow:auto;" >'
		.'<tr><td align="center" colspan="2" style="color:gold;font-size:15px;background-color:#003700;">HTML/XHTML:</td></tr>';
		
	for($i=0;$i<count($bufor) ;$i++)
	{
		$bufor2=$bufor[$i];
	while(strstr($bufor2,"<")&&strstr($bufor2,">")&&strpos($bufor2,"<")<strpos($bufor2,">")     &&          $bufor2[strpos($bufor2,"<")+1]!='!'&&$bufor2[strpos($bufor2,">")-1]!='-')
	
		{
			$poczatek=strpos($bufor2,'<');
			$koniec=strpos($bufor2,'>');
			$bufor3='';
			for($j=$poczatek;$j<=$koniec;$j++)
			{
				$bufor3=$bufor3.$bufor2[$j];
			}
			
			
			
			$bufor3=str_replace('&','&amp',$bufor3);
			$bufor3=str_replace('<','&lt',$bufor3);
			$bufor3=str_replace('>','&gt',$bufor3);
			
			for($k=0;$k<count($pod1);$k++)
			{	
				
				$bufor3=str_replace($pod1[$k],$pod2[$k],$bufor3);
			}
			
			
			if(strstr($bufor3,'ęęę'))
			{
				
				$bufor4=explode('ęęę',$bufor3);
				$bufor5='';
				for($s=0;$s<count($bufor4)-1;$s++)
				{
					if(!($s%2))
						$bufor5=$bufor5.$bufor4[$s].'żżżspan class="normal"źźź"';
					else
						$bufor5=$bufor5.$bufor4[$s].'"żżż/spanźźź';	
				}
				$bufor5=$bufor5.$bufor4[count($bufor4)-1];
				$bufor3=$bufor5;
				
			}
			//$k<count($znaczniki)
			
			for($k=0;$k<76;$k++)
			{
				
				$przed=$bufor3[strpos($bufor3,$znaczniki[$k])-2].$bufor3[strpos($bufor3,$znaczniki[$k])-2].$bufor3[strpos($bufor3,$znaczniki[$k])-1];
				$iloscznakow=strlen($znaczniki[$k]);
				$po=$bufor3[strpos($bufor3,$znaczniki[$k])+$iloscznakow].$bufor3[strpos($bufor3,$znaczniki[$k])+$iloscznakow+1].$bufor3[strpos($bufor3,$znaczniki[$k])+$iloscznakow+2];
			
				if($k!=59&&strstr($bufor3,$znaczniki[$k]))
				{
					if('t'==$bufor3[strpos($bufor3,$znaczniki[$k])-1]||'&'==$bufor3[strpos($bufor3,$znaczniki[$k])+$iloscznakow])
					{
						$bufor3=str_replace($znaczniki[$k],'żżżspan class="keywords"źźź'.$znaczniki[$k].'żżż/spanźźź',$bufor3);
						break;
				   }
				}
			}
			
			for($k=0;$k<count($atrybuty);$k++)
			{
				if($k!=106)	
				$bufor3=str_replace($atrybuty[$k],'żżżspan class="comment"źźź'.$atrybuty[$k].'żżż/spanźźź',$bufor3);
			}
				
				
				
				
			$bufor3=str_replace($pod2[0],'żżżspan class="operator"źźź/żżż/spanźźź',$bufor3);
			$bufor3=str_replace($pod2[1],'żżżspan class="operator"źźź=żżż/spanźźź',$bufor3);
			$bufor3=str_replace($pod2[2],'żżżspan class="comment"źźźclassżżż/spanźźź',$bufor3);
			$bufor3=str_replace($pod2[3],'żżżspan class="keywords"źźźspanżżż/spanźźź',$bufor3);
			$bufor3=str_replace('&lt','żżżspan class="operator"źźź&ltżżż/spanźźź',$bufor3);
			$bufor3=str_replace('&gt','żżżspan class="operator"źźź&gtżżż/spanźźź',$bufor3);
			$bufor3=str_replace('&amp','żżżspan class="operator"źźź&ampżżż/spanźźź',$bufor3);
			//$bufor2=str_replace(' ','&ensp;',$bufor2);
			
			$bufor6='';
			$bufor7='';
			for($j=0;$j<$poczatek;$j++)
			{
				$bufor6=$bufor6.$bufor2[$j];
			}
			
			$ile=strlen($bufor2)-($koniec);
			for($j=$koniec+1;$j<$ile+1;$j++)
			{
				$bufor7=$bufor7.$bufor2[$j];
			}
			
			
			$bufor2=$bufor6.$bufor3.$bufor7;
			//echo $bufor6.'<br>';
		
				
		}
		$bufor2=str_replace('    ','&emsp;&ensp;',$bufor2);
		$bufor2=str_replace('    ','&emsp;&ensp;',$bufor2);
		$bufor2=str_replace('<!--','<code class="truecomment">&lt!--',$bufor2);
		$bufor2=str_replace('-->','--&gt</code>',$bufor2);
		$bufor2=str_replace('żżż','<',$bufor2);
		$bufor2=str_replace('źźź','>',$bufor2);
			
		
		echo '<tr><td nowrap bgcolor="black"><span class="licznik">'.$i.'</span><span class="leftbar">-></span></td><td nowrap><code>'.$bufor2.'</code></td></tr>';
	}
	echo '</table>';
}

$blabla=array(6);
$blabla[0]='/';
$blabla[1]='=';
$blabla[2]='class';
$blabla[3]='span';
$blabla[4]='"';
$blabla[5]="'";

$blabla1=array(6);
$blabla1[0]='ąąą';
$blabla1[1]='ńńń';
$blabla1[2]='óóó';
$blabla1[3]='śśś';
$blabla1[4]='ęęę';
$blabla1[5]='ęęę';

$znacznikihtml=array(76);
$znacznikihtml[0]='abbr';
$znacznikihtml[1]='acronym';
$znacznikihtml[2]='address';
$znacznikihtml[3]='area';
$znacznikihtml[4]='var';
$znacznikihtml[5]='base';
$znacznikihtml[6]='bdo';
$znacznikihtml[7]='big';
$znacznikihtml[8]='blockquote';
$znacznikihtml[9]='body';
$znacznikihtml[10]='br';
$znacznikihtml[11]='button';
$znacznikihtml[12]='head';
$znacznikihtml[13]='caption';
$znacznikihtml[14]='cite';
$znacznikihtml[15]='code';
$znacznikihtml[16]='col';
$znacznikihtml[17]='colgroup';
$znacznikihtml[18]='dd';
$znacznikihtml[19]='del';
$znacznikihtml[20]='dfn';
$znacznikihtml[21]='div';
$znacznikihtml[22]='dl';
$znacznikihtml[23]='dt';
$znacznikihtml[24]='em';
$znacznikihtml[25]='fieldset';
$znacznikihtml[26]='form';
$znacznikihtml[27]='h1';
$znacznikihtml[28]='h2';
$znacznikihtml[29]='h3';
$znacznikihtml[30]='h4';
$znacznikihtml[31]='h5';
$znacznikihtml[32]='thead';
$znacznikihtml[33]='hr';
$znacznikihtml[34]='html';
$znacznikihtml[35]='imp';
$znacznikihtml[36]='input';
$znacznikihtml[37]='ins';
$znacznikihtml[38]='title';
$znacznikihtml[39]='kbd';
$znacznikihtml[40]='label';
$znacznikihtml[41]='legend';
$znacznikihtml[42]='table';
$znacznikihtml[43]='link';
$znacznikihtml[44]='map';
$znacznikihtml[45]='meta';
$znacznikihtml[46]='noscript';
$znacznikihtml[47]='object';
$znacznikihtml[48]='tbody';
$znacznikihtml[49]='optgroup';
$znacznikihtml[50]='optiona';
$znacznikihtml[51]='param';
$znacznikihtml[52]='pre';
$znacznikihtml[53]='tfoot';
$znacznikihtml[54]='textarea';
$znacznikihtml[55]='samp';
$znacznikihtml[56]='script';
$znacznikihtml[57]='select';
$znacznikihtml[58]='small';
///$znacznikihtml[59]='span';
$znacznikihtml[60]='strong';
$znacznikihtml[61]='style';
$znacznikihtml[62]='sub';
$znacznikihtml[63]='sup';
$znacznikihtml[64]='b';
$znacznikihtml[65]='p';
$znacznikihtml[66]='td';
$znacznikihtml[67]='ul';
$znacznikihtml[68]='li';
$znacznikihtml[69]='i';
$znacznikihtml[70]='q';
$znacznikihtml[71]='ol';
$znacznikihtml[72]='tr';
$znacznikihtml[73]='tt';
$znacznikihtml[74]='th';
$znacznikihtml[75]='a';


$atrybutyhtml=array(128);
$atrybutyhtml[0]='abbr';
$atrybutyhtml[1]='accept-charset';
$atrybutyhtml[2]='accept';
$atrybutyhtml[3]='accesskey';
$atrybutyhtml[4]='action';
$atrybutyhtml[5]='align';
$atrybutyhtml[6]='alink';
$atrybutyhtml[7]='alt';
$atrybutyhtml[8]='async';
$atrybutyhtml[9]='autocomplete';
$atrybutyhtml[10]='autofocus';
$atrybutyhtml[11]='autoplay';
$atrybutyhtml[12]='axis';
$atrybutyhtml[13]='background';
$atrybutyhtml[14]='bgcolor';
$atrybutyhtml[15]='border';
$atrybutyhtml[16]='cellpadding';
$atrybutyhtml[17]='cellspacing';
$atrybutyhtml[18]='challenge';
$atrybutyhtml[19]='charoff';
$atrybutyhtml[20]='charset';
$atrybutyhtml[21]='char';
$atrybutyhtml[22]='checked';
$atrybutyhtml[23]='cite';
$atrybutyhtml[24]='clear';
$atrybutyhtml[25]='color';
$atrybutyhtml[26]='cols';
$atrybutyhtml[27]='colspan';
$atrybutyhtml[28]='compact';
$atrybutyhtml[29]='content';
$atrybutyhtml[30]='controls';
$atrybutyhtml[31]='coords';
$atrybutyhtml[32]='datetime';
$atrybutyhtml[33]='default';
$atrybutyhtml[34]='defer';
$atrybutyhtml[35]='dir';
$atrybutyhtml[36]='disabled';
$atrybutyhtml[37]='enctype';
$atrybutyhtml[38]='face';
$atrybutyhtml[39]='formaction';
$atrybutyhtml[40]='formenctype';
$atrybutyhtml[41]='formmethod';
$atrybutyhtml[42]='formnovalidate';
$atrybutyhtml[43]='formtarget';
$atrybutyhtml[44]='form';
$atrybutyhtml[45]='for';
$atrybutyhtml[46]='frameborder';
$atrybutyhtml[47]='frame';
$atrybutyhtml[48]='headers';
$atrybutyhtml[49]='height';
$atrybutyhtml[50]='high';
$atrybutyhtml[51]='hreflang';
$atrybutyhtml[52]='href';
$atrybutyhtml[53]='hspace';
$atrybutyhtml[54]='http-equiv';
$atrybutyhtml[55]='icon';
$atrybutyhtml[56]='ismap';
$atrybutyhtml[57]='keytype';
$atrybutyhtml[58]='kind';
$atrybutyhtml[59]='label';
$atrybutyhtml[60]='language';
$atrybutyhtml[61]='link';
$atrybutyhtml[62]='list';
$atrybutyhtml[63]='longdesc';
$atrybutyhtml[64]='loop';
$atrybutyhtml[65]='low';
$atrybutyhtml[66]='manifest';
$atrybutyhtml[67]='marginheight';
$atrybutyhtml[68]='marginwidth';
$atrybutyhtml[69]='maxlength';
$atrybutyhtml[70]='max';
$atrybutyhtml[71]='media';
$atrybutyhtml[72]='method';
$atrybutyhtml[73]='min';
$atrybutyhtml[74]='multiple';
$atrybutyhtml[75]='muted';
$atrybutyhtml[76]='name';
$atrybutyhtml[77]='nohref';
$atrybutyhtml[78]='noresize';
$atrybutyhtml[79]='noshade';
$atrybutyhtml[80]='novalidate';
$atrybutyhtml[81]='nowrap';
$atrybutyhtml[82]='optimum';
$atrybutyhtml[83]='pattern';
$atrybutyhtml[84]='placeholder';
$atrybutyhtml[85]='poster';
$atrybutyhtml[86]='preload';
$atrybutyhtml[87]='radiogroup';
$atrybutyhtml[88]='readonly';
$atrybutyhtml[89]='rel';
$atrybutyhtml[90]='required';
$atrybutyhtml[91]='reversed';
$atrybutyhtml[92]='rev';
$atrybutyhtml[93]='rowspan';
$atrybutyhtml[94]='rows';
$atrybutyhtml[95]='rules';
$atrybutyhtml[96]='sandbox';
$atrybutyhtml[97]='scheme';
$atrybutyhtml[98]='scope';
$atrybutyhtml[99]='scoped';
$atrybutyhtml[100]='scrolling';
$atrybutyhtml[101]='seamless';
$atrybutyhtml[102]='selected';
$atrybutyhtml[103]='shape';
$atrybutyhtml[104]='sizes';
$atrybutyhtml[105]='size';
///$atrybutyhtml[106]='span';
$atrybutyhtml[107]='srcdoc';
$atrybutyhtml[108]='srclang';
$atrybutyhtml[109]='src';
$atrybutyhtml[110]='start';
$atrybutyhtml[111]='step';
$atrybutyhtml[112]='summary';
$atrybutyhtml[113]='tabindex';
$atrybutyhtml[114]='target';
$atrybutyhtml[115]='text';
$atrybutyhtml[116]='title';
$atrybutyhtml[117]='type';
$atrybutyhtml[118]='usemap';
$atrybutyhtml[119]='valign';
$atrybutyhtml[120]='valuetype';
$atrybutyhtml[121]='value';
$atrybutyhtml[122]='vlink';
$atrybutyhtml[123]='vspace';
$atrybutyhtml[124]='width';
$atrybutyhtml[125]='id';
$atrybutyhtml[126]='style';
$atrybutyhtml[127]='lang';

?>