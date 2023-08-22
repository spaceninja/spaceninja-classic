<? $titlemsg = "p h p force - login"; include ("header.php"); ?>


If you have an account, this is where you log in to access the features of
your user account.  If you don't have an account, go <a
href="newaccount.php<? if( $redir ) echo "?redir=$redir"; ?>">here</a> to
get one!<p>

<form action="loggedin.php" method=post>

<table cellpadding=0 cellspacing=0>
<tr><td valign=middle align=right class=body>Username:</td>
<td><input type=text name="username" size=20 maxlength=25></td></tr>

<tr><td valign=middle align=right class=body>Password:</td>
<td><input type=password name="password" size=20 maxlength=25></td></tr>
</table>

<input type=submit value="Go!">
<? if( $redir ) echo "<input type=hidden name=redir value=\"$redir\">"; ?>
</form>

Forgot your password?  Have it <a href="mailpw.php">mailed to you</a>.<p>

Go <a href="logout.php"> here</a> to log out completely!<p>


<? include ("footer.php"); ?>
</html>
