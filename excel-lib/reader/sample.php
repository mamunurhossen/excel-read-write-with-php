<?php 
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	
	error_reporting(-1);
	ini_set('display_errors', 1);
	ini_set('memory_limit', '-1');

	//Note: You need to install the following things to run the xlsx script
	//sudo apt-get install php5-mcrypt php5-curl php5-gd php5-xsl zziplib-bin
	
 	require_once "excel-lib/reader/simplexlsx.class.php";
	
	//$fileName = '../data.xlsx';
	$fileName = "teacher.xlsx";

	$xlsx = new SimpleXLSX($fileName, false, true);

	list($cols,) = $xlsx->dimension();

	echo count($xlsx->rows());
	$count = 0;
	foreach( $xlsx->rows() as $k => $r) {
		echo $k." => ".$r[1];
		$count++;
		if($count > 2) break;
	}
