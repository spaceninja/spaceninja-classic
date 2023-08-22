<?
include("dbinit.php");
sess("empid","empLogin.php");

$titlemsg = "Change Password";

include("header.php");

if($pass1) {
  if(strcasecmp($pass1,$pass2))
    print "<h1 class=\"head\">Passwords Don't Match</h1>
      <p>The passwords you typed in do not match.  Please try again.";
  else {
    $pass1 = strtoupper($pass1);
    if(!mysql_query("update employers set password='$pass1' where id=$empid"))
      problem("Couldn't update password to $pass1 for employer $empid");
    ?>
    <h1 class="head">Password Changed</h1>
    
    <p>Your password has now been changed.<br><br>
    
    <a href="empMenu.php?<?=SID?>">Back to main menu.</a>
    <?
    include("footer.php");
    exit;
  }
}

?>
  <h1 class="head">Change Password</h1>

  <p>Type your new password in twice and hit the submit button to change 
  your password.<br><br>
  
  <form method="post">
  <table>
    <tr>
      <td align="right">New Password:</td>
      <td align="left"><input type="password" name="pass1" size=20 maxlength=25></td>
    </tr>
    <tr>
      <td align="right">Again:</td>
      <td align="left"><input type="password" name="pass2" size=20 maxlength=25></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left"><input type="submit" value="Change Password"></td>
    </tr>
  </table>
  </form>

<?

include("footer.php");