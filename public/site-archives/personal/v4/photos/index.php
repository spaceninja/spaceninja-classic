<html><head><title>Space Ninja PHP Directory Browser</title>
<style type="text/css">
<!--
  .cell { font-family: verdana, sans serif; font-size: 12px;}
  a { text-decoration: none; }
  a:hover { color: red; }
-->
</style>
</head>
<body bgcolor=white text=black link=blue alink=red vlink=purple>

<?
// Set the two background colors for table cells to alternate between
$cellcolor1="#ffffff";
$cellcolor2="#eeeeee";

// Set the file's URL to a variable for easy reference
$self="http://".$HTTP_HOST.$PHP_SELF;

// Read the files from the directory
$Dir = ".";
$Open = opendir ("$Dir");
while ($Files = readdir ($Open)) {
	$Filename = "$Dir/" . $Files;
	$Type = filetype ("$Filename");
	if ($Files == '..' or $Files == '.' or $Files == '') {
		continue;
	} else {
		if (is_dir ($Filename)) {
			$Name = "[<a href=\"$Filename\">$Files</a>]";
			$Size = "directory";
		} else {
			$Name = "<a href=\"$Filename\">$Files</a>";
			$Size = filesize ("$Filename");
		}
	}
	$FileArray[] = $Name;
	$SizeArray[] = $Size;
	$TypeArray[] = $Type;
}
closedir ($Open);

// Define the two ways to sort the directory contents
switch ($Sort) {
	case "SortBySize":
		array_multisort ($SizeArray, $FileArray);
		break;
	default:
		array_multisort ($TypeArray, $FileArray, $SizeArray);
		break;
}

// Print out the contents of the directory
print "<p><table border=0 width=300 cellspacing=0 cellpadding=0><tr><td bgcolor=$cellcolor1>\n";
print "<table border=0 width=100% cellspacing=1 cellpadding=3 align=center>\n";
print ("<tr bgcolor=$cellcolor2 class=cell align=left>
	<th><a href=\"$self\">Filename</a></th>
	<th><a href=\"$self?Sort=SortBySize\">Size</a></th>
	</tr>\n");
for ($n = 0; $n < count($FileArray); $n++) {
	$color=1-$color;
	$cellcolor=$color?"$cellcolor1":"$cellcolor2";
	print ("<tr bgcolor=$cellcolor class=cell><td>$FileArray[$n]</td><td>$SizeArray[$n]</td></tr>\n");
}
print "</table>\n";
print "</td></tr></table>\n";

?>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
  _uacct = "UA-588310-1";
  urchinTracker();
</script>
<script src="/mint/?js" type="text/javascript"></script>\n</body>

</html>