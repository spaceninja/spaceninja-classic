<? $titlemsg = "p h p force - new account";
   include ("header.php"); ?>


Please to enter a username and password.
<form action="makenew.php" method=post>

<table cellpadding=0 cellspacing=0>
<tr><td valign=center align=right>Username:</td>
<td><input type=text name="username" size=20 maxlength=25></td></tr>
<tr><td valign=center align=right>Password:</td>
<td><input type=password name="password" size=20 maxlength=25></td></tr>
</table><p>

Please give a valid email address, so we can mail you a password if you need
it.  Of course we won't release your password, but you may also read <a
href="privacy.php">privacy policy</a> if you like.<p>

Email: <input type=text name="email" size=30 maxlength=50><p>

<input type=submit value="Go!">
<? if( $redir ) echo "<input type=hidden name=redir value=\"$redir\">"; ?>
</form>




<? include ("footer.php"); ?>
</html>
