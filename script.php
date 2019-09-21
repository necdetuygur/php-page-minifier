<?php
ob_start();
header('Content-type: text/Necdet');
// content // start
include("base.js");
include("other.js");
// content // end
$nPageContent = ob_get_contents();
ob_end_clean();
$i = 9;
while($i--){
	$search = array("  ", "\t", "\n", "\r");
	$replace = " ";
	$nPageContent = preg_replace("/\/\*.*?\*\//ms", $replace, $nPageContent);
	$nPageContent = preg_replace("/\/\/.*?\n/ms", $replace, $nPageContent);
	$nPageContent = str_replace($search, $replace, $nPageContent);
}
echo "/*
	Necdet Softwares
	All rights reserved.
	necdet.uygur@gmail.com
	
	Thank you for looking into the code!
*/";
$i = 93;
while($i--) echo "\n";
echo $nPageContent;
?>
