<?php 
   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $starttime = $mtime; 
?> 

<?php

	require_once "simplexlsx.class.php";
	
	$fileName = '../data.xlsx';

	$xlsx = new SimpleXLSX($fileName);
	
	list($cols,) = $xlsx->dimension();
	
	foreach( $xlsx->rows() as $k => $r) {
		echo $k." => ".$r[1];
	}

?>

<?php 
   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $endtime = $mtime; 
   $totaltime = ($endtime - $starttime); 
   echo "This page was created in ".$totaltime." seconds"; 
;?>
