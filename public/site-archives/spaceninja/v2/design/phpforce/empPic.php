<?

include("dbinit.php");

if(!($result = mysql_query("select image from employers where id=$empid")))
  print "Couldn't read image";

$row = mysql_fetch_array($result);

if(!strcasecmp(substr($row["image"],0,3), "gif"))
  $ctype = "gif";
else
  $ctype = "jpeg";
  
header("Content-type: image/$ctype");
header("Pragma: no-cache");

print $row["image"];

?>