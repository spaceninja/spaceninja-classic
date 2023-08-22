<?
/*   SPACENINJA RANDOM IMAGE SCRIPT

provides two functions:

	random_image(path)
	random_img_tag(path, attributes)

[1]	random_image( "images" );

inserts <img src="images/random.gif"> into your page.


[2]	random_img_tag("images", "width=200 height=220"); 

inserts <img src="images/random.gif" width=200 height=220>.

*/

function imglist($dirname) {
  global $mwj_img_cache;
  if (empty($mwj_img_cache[$dirname])){
    $dir = opendir($dirname);


    while (  $file = readdir($dir) ){
   	if (! ereg("(\.gif)|(\.jpg)", $file) ){
   		continue;//skip ".", "..", and non-directories
   	}
   	$imgs[] = $file;
      }
     closedir($dir);
     $mwj_img_cache[$dirname] = $imgs;
   }
  return $mwj_img_cache[$dirname];
}


function randomimg($directory){
	$set = imglist($directory);
	srand((double)microtime()*1000000);
	$i = rand(0,count($set) - 1);
	return $set[$i];	
}


function random_img_tag($directory, $attribs){
	echo "<IMG SRC=\"" . $directory . "/" . randomimg($directory) . "\"";
	echo " " . $attribs . " >";
}


function random_image($directory){
	echo "<IMG SRC=\"" . $directory . "/" . randomimg($directory) . "\">";
}

?>