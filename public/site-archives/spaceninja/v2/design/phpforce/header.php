<?
if(!ereg("www\.",$HTTP_HOST)) {
  $NewURL = "http://" . $SERVER_NAME . $REQUEST_URI;
  header("HTTP/1.0 302 RD");
  header("Location: $NewURL");
  exit;
}

// $browser = get_browser();

/* Check for Mac browsers which use excessively small fonts */
if (
         (strstr($HTTP_USER_AGENT, "Mac")  &&  !strstr($HTTP_USER_AGENT, "compatible") ) /* Mac Netscape? */
 )
        {
                $bodysize = 12;
                $headsize = 18;
                $footsize = 10;
        } else {
                $bodysize = 10;
                $headsize = 16;
                $footsize = 8;
        }

?>

<html>
<head><title><?=$titlemsg?></title>

<style type="text/css">
<!--
.orange {font-family: verdana, sans-serif; font-size: <?=$footsize?>pt; color: #ffc600;}
.body {font-family: verdana, sans-serif; font-size: <?=$bodysize?>pt; color: black;}
.login {font-family: verdana, sans-serif; font-size: <?=$footsize?>pt; color: #ffc600; padding-right: 5px;}
a {color: blue;}
-->
</style>

</head>

<body bgcolor="#707070" text=black>

<table border=0 width=100% height=100%><tr><td align=center valign=middle>
<table border=0 width=625 cellpadding=0 cellspacing=0>

<tr>
<td align=right valign=bottom><img src=images/1ul.gif></td>
<td align=left valign=bottom><img src=images/1ur.gif></td>
<td colspan=2><img src=images/x.gif width=1 height=1></td>
</tr>


<tr>
<td align=right valign=top><img src=images/1ll.gif></td>
<td align=left valign=top bgcolor=black><img src=images/1lr.gif></td>
<td rowspan=2 bgcolor=black width=100% align=right valign=middle class=login>

<?
  if( (!$HTTP_COOKIE_VARS['username']) || (ereg("emp",$PHP_SELF)) ) {
    echo "<form action=\"loggedin.php\" method=post>\n";
    echo "<input type=hidden name=\"redir\" value=\"$PHP_SELF\">\n";
    echo "login: <input type=\"text\" name=\"username\" size=\"10\">\n";
    echo "<br>password: <input type=\"password\" name=\"password\" size=\"10\">\n";
  } else {
    echo "you are logged in as $HTTP_COOKIE_VARS[username]\n";
    echo "<br><a href=\"logout.php\">";
    echo "<img src=\"images/logout.gif\" border=0 vspace=3>";
    echo "</a>\n";
  }
?>

</td>
<td align=right valign=top bgcolor=black><img src=images/ur.gif></td>
</tr>

<tr>
<td><img src=images/x.gif height=20 width=1></td>
<td bgcolor=black align=center valign=top class=orange>Find workers and find
jobs</td>
<td bgcolor=black align=center valign=middle><?
if( (!$HTTP_COOKIE_VARS['username']) || (ereg("emp",$PHP_SELF)) ) {
  echo "<i><input type=\"image\" border=0 src=images/go.gif></i>";
  echo "</form>";
}
?><img src=images/x.gif width=1 height=1></td>
</tr>


<tr>
<td><img src=images/x.gif height=1 width=1></td>
<td colspan=3>

<table border=0 cellpadding=0 cellspacing=0 height=100% width=100%>

<tr>
<td rowspan=3><img src=images/x.gif width=10 height=1></td>
<td colspan=3 bgcolor="#c0c0c0" align=center valign=middle>

<table border=0 width=100% height=100% cellpadding=0 cellspacing=10>

<tr>
<td align=right valign=top class=body>

<center>
<a href="index.php">Home</a>
<p><a href="user.php">Job seekers</a>
<p><a href="employer.php">Employers</a>
<p><a href="privacy.php">Privacy Policy</a>
<p><a href="aboutus.php">About us</a>
</center>

</td>
<td><img src="images/black.gif" width=1 height=100%></td>
<td width=100% align=left valign=top class=body>

<!-- END HEADER -->
