<?php
 //This is a simple bar to indicate the amout of donation to a project or comunity 
 //Config
 $cost = 100; 					//cost to operate
 $donations = 10;	 			//current donations
 $width = 500;		 			//width of bar
 $height = 10;					// the hight of the bar, defualt is 1 (modified by text)
 $fontsize = 10;				// Size of the font in pexels...
 $percentinred = 'off'; 			// show the amount completed in the red bar "off" is off "on" is on
 $alternategreen = 'green';		// alternate color for the green, leave green if you want it to stay green, color codes and words work. 
 $alternatered = 'red';			// alternate color for the red, leave red if you want it to stay red, you can use a color code or the word. if you using a color code be sure to leave out the number sign or it wont work
 $textcolor = 'Black';			// the text color on the percentage (percentinred must be on)
 $decimalplacelimit = 2;		// the number of decimal places in the percentage (perecentinred must be on)
 $debug = 'off'; 					// print debug informations "on" for on and "off" for off
 //math
 $ratio = $donations / $cost;
 $percent = $ratio * 100;
 $greenwidth = $ratio * $width;
  if ($greenwidth > $width) {
	$greenwidth = $width;
 }
 $redwidth = $width - $greenwidth;
 //percent in red caclulations
 if ($percentinred == 'on'){
	 $percent = round($percent,$decimalplacelimit);
	 if ($percent < 95) {
		 $enabledpercentinred = $percent. "%";
	 } 
 }
 ?>
<div id="Donations bar">
	<table cellpadding="0" border="0" cellspacing="0">
		<tr height="<? print $height; ?>" width='<? print $width; ?>px'>
			<td width='<? print $greenwidth; ?>px' style="background:<? print $alternategreen; ?>;"></td>
			<td width='<? print $redwidth; ?>px' style="background:<? print $alternatered; ?>; color:<? print $textcolor; ?>; font-size:<? print $fontsize; ?>px;" align='right'><? print $enabledpercentinred; ?></td>
		</tr>
	</table>
	 <!-- This was made with Nickfost's Donations Bar Generator V. 1.5-->
</div>
 <?php
  //debug
 if ($debug == 'on'){
 echo <<<EOF
	 <br /><h3>DEBUG</h3><br />
	 <p>CONFIG></p>
	 <p>-------------</p>
	 <p>Cost = $cost </p>
	 <p>Donations = $donations </p>
	 <p>Width = $width </p>
	 <p>Height = $height </p>
	 <p>Font Size = $fontsize </p>
	 <p>Percent in red = $percentinred </p>
	 <p style='color:".$alternategreen.";'>Alternate Green = $alternategreen </p>
	 <p style='color: $alternatered;'>Alternate Red = $alternatered </p>
	 <p style='color: $textcolor;'>Text Color = $textcolor </p>
	 <p>Decimal Place Limit = $decimalplacelimit </p>
	 <p>Debug =  $debug
	 <br />Math section<br />
	 <p>-------------</p>
	 <p>Ratio = $ratio </p>
	 <p>Percent =  $percent </p>
	 <p>greenwidth =  $greenwidth </p>
	 <p>Redwidth = $redwidth </p>
	 <br />OTHER<br />;
	 <p>-------------</p>;
	 <p>enabled perecent in red  = $enabledpercentinred </p>
	 <p><h6>This was made with Nickfost's Donations Bar Generator V. 1.5</h6>
EOF;
 }
 ?>
 