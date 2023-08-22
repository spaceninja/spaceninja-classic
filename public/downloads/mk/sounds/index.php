<html>
<head>
<meta NAME="description" CONTENT="Mutton Kombat">
<meta NAME="keywords" CONTENT="pokey, penguin, mutton, kombat, fight, game, combat, nutty, gustavo, miles, johnson, spriteworld, studio, fojar">
<meta NAME="authors" CONTENT="Space Ninja Design">
<title>Mutton Kombat</title>
<style type="text/css">
<!--

body {text-align: center; margin: 0; background-color: #333333; font-family: verdana, sans-serif; font-size: 12px; color: #b0b0b0;}
a:link, a:active, a:visited { color: white; text-decoration: none; }
a:hover { color: white; text-decoration: underline; }
#no_tables { background-color: #333333; width: 600px; margin-top: 20px; margin-bottom: 20px; margin-left: auto; margin-right: auto; text-align: left;}
#showcase { width: 600px; }
.image { vertical-align: top; width: 400px; }
.info { background-color: #404040; vertical-align: top; padding: 5px; font-size: 11px; }
.footnote { font-size: 11px; text-align: center; }
.body { background-color: #404040; vertical-align: top; padding: 5px; }
.titlebar { background-color: #606060; }
.title { background-color: #333333; font-weight: bold; font-size: 12px;}
.subhead { font-weight: bold; border-bottom: 1px solid #666666; }
.cell { font-size: 12px;}
.cellbig { font-size: 14px;}

-->
</style>
</head>

<body>

<div id=no_tables>

<table border=0 width=600 cellpadding=4 cellspacing=2 class="titlebar"><tr>
<td class="title">&nbsp;Mutton&nbsp;Kombat&nbsp;Sounds&nbsp;</td>
<td width="100%">&nbsp;</td></tr></table>

<p class=footnote><a href="../">Return to the main page</a></p>

<?
// Set the two background colors for table cells to alternate between
$cellcolor1="#333333";
$cellcolor2="#404040";

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
			$filesize = filesize ("$Filename");
			$Size = $filesize / 1000;
			$Size = sprintf ("%01.1f", $Size);
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
print "<p><table border=0 cellspacing=0 cellpadding=0><tr><td bgcolor=$cellcolor1>\n";
print "<table border=0 width=100% cellspacing=1 cellpadding=3 align=center>\n";
print ("<tr bgcolor=$cellcolor2 class=cellbig align=left>
	<th><a href=\"$self\">Filename</a></th>
	<th><a href=\"$self?Sort=SortBySize\">Size in KB</a></th>
	</tr>\n");
for ($n = 0; $n < count($FileArray); $n++) {
	$color=1-$color;
	$cellcolor=$color?"$cellcolor1":"$cellcolor2";
	print ("<tr bgcolor=$cellcolor class=cell><td>$FileArray[$n]</td><td>$SizeArray[$n]</td></tr>\n");
}
print "</table>\n";
print "</td></tr></table>\n";

?>

<p class=footnote><a href="../">Return to the main page</a></p>

<p class=footnote>Pokey the Penguin is &copy; Copyright 1998-2002 The Authors</p>

</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
  _uacct = "UA-588310-1";
  urchinTracker();
</script>
<script src="/mint/?js" type="text/javascript"></script>
</body>

</html>