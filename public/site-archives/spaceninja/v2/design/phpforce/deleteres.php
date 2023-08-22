<?
  include ("dbinit.php");
  $login_to = "http://www.phpforce.com/login.php?redir=deleteres.php";
  $username = trim( stripslashes( $username ) );
  $password = trim( stripslashes( $password ) );

  verify_user( $username, $encpass, $login_to );

  if( $confirmed ) {
    mysql_query( "delete from resume where username='$username'" );
    setcookie("username");
    setcookie("encpass");
    $deleted=1;
  }

  $titlemsg = "p h p force - delete your account";
  include ("header.php");



  if( !$confirmed ) {

    echo "<h1>Deleting your account...</h1>\n";
    echo "\n";
    echo "If you hit the button below, we'll remove your information from ";
    echo "our database permanently.  There is no way to recover it - you'll ";
    echo "have to start a new account.<p>";
    echo "<p class=\"warning\">Are you sure you want to do this?</p>\n";
    echo "\n";
    echo "<form action=\"deleteres.php\" method=post>\n";
    echo "<input type=hidden name=\"confirmed\" value=\"yes\">\n";
    echo "<input type=submit value=\"Yes, delete my account\">\n";
    echo "</form>\n";
    echo "<a href=\"user.php\">No, go back!</a>\n";

  } else {

    echo "<h1>Account deleted</h1>";
    echo "Your account has been deleted.  Thanks for trying PHPForce.<p>\n";
    echo "<a href=\"/\">Go back to the start</a>.\n";
    
  }

  include ("footer.php");

?>
