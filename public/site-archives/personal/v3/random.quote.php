<?
/*  SPACENINJA RANDOM QUOTE SCRIPT 0.9

	selects a random line from a text file and returns it.
	usage:

	echo quotefrom("quotefile.txt");

	inserts the quote into your html.

*/


//cache files to save on disk access
$mwj_quote_cache = array( "_mwj_" => 0 );

function quotefrom($f){
	global $mwj_quote_cache;
	srand((double)microtime()*1000000);
	if (!empty($mwj_quote_cache[$f])){
		$a = $mwj_quote_cache[$f];
	} else {
		$a = file($f);
		$mwj_quote_cache[$f] = $a;
	}
	$q = $a[rand(0,count($a)-1)];
	return $q;
}
?>