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

-->
</style>
</head>

<body>

<div id=no_tables>

<table border=0 width=600 cellpadding=4 cellspacing=2 class="titlebar"><tr>
<td class="title">&nbsp;Mutton&nbsp;Kombat&nbsp;Screenshots&nbsp;</td>
<td width="100%">&nbsp;</td></tr></table>

<p class=footnote><a href="../">Return to the main page</a></p>

<center>
<p>

<?

$dh = opendir(".");
while ($f = readdir( $dh ) ) {
	if (ereg( "(\.gif|\.jpg)", $f ) )
		show ( $f );
}

function show ($f) {
	echo "<img src=\"$f\"><BR><b>$f</b><p>";
}

?>
</center>

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