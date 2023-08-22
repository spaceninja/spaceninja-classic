<?
  include ("dbinit.php");
  $login_to = "http://www.phpforce.com/login.php?redir=changepw.php";
  $username = trim( stripslashes( $username ) );
  $password = trim( stripslashes( $password ) );

  verify_user( $username, $encpass, $login_to );

  if( $newpass )
    if( $newpass == $newpass2 ) {
      mysql_query( "update resume set password='$newpass' where username='$username'" );
      $dbh_res = mysql_query( "select password('$newpass')" );
      list( $encpass ) = mysql_fetch_row( $dbh_res );
      setcookie("encpass","$encpass");

      $success=1;
    }

  $titlemsg = "p h p force - changing password";
  include ("header.php");



  if( !$newpass ) {

    echo "<h1>Changing your password...</h1>\n";
    echo "\n";
    echo "Please choose a new password!\n";
    echo "\n";
    echo "<form action=\"changepw.php\" method=post>\n";
    echo "<table border=0>\n";
    echo "<tr>\n";
    echo "<td align=right valign=center>New password:</td>\n";
    echo "<td valign=center><input type=password name=\"newpass\"></td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td align=right valign=center>Verify new password:</td>\n";
    echo "<td valign=center><input type=password name=\"newpass2\"></td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<input type=submit value=\"Change password\">\n";
    echo "</form>\n";

    include ("footer.php");
    
  } else {

    if( $success ) {
      echo "<h1>Password changed!</h1>\n";
      echo "<a href=\"user.php\">Go back</a>\n";
    } else {
      echo "<h1>Password not changed</h1>";
      echo "When you entered your new password in to verify it, the ";
      echo "passwords didn't match!  Please <a href=\"changepw.php\">";
      echo "try again</a>.";
    }
    include ("footer.php");

  }
