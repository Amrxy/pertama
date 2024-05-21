<?php
$a = 15;
$b = 35;
function addition(){
		$GLOBALS['c'] = $GLOBALS['a'] = $GLOBALS['b'];
}
addition();
echo$c;
?>