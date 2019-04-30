<?php
ob_start();
include 'header.php';
include 'content.php';
include 'footer.php';
$content = ob_get_contents();
ob_end_clean();
$i = 9;
while($i--){
	$search = array("  ", "\t", "\n", "\r");
	$replace = " ";
	$content = preg_replace("/<!--.*?-->/ms", $replace, $content);
	$content = str_replace($search, $replace, $content);
}
echo "<!-- Thank you for looking into the code! -->";
$i = 99;
while($i--) echo "\n";
echo $content;
?>
