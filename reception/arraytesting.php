<?php $tmp=['henry','su su','su su','martin']; 

for ($i=count($tmp)-1; $i>0; $i--) {
 if( $tmp[$i]==$tmp[$i-1]) { 
  
array_splice($tmp,$i,1);
  }
   } 
foreach ($tmp as $var) { 
	echo ($var);

 } ?>

