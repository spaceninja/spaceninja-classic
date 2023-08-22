<?
  include("dbinit.php");

  if( $redir == "/newaccount.php" )
    $redir="user.php";

  $username=$HTTP_POST_VARS['username'];
  $password=$HTTP_POST_VARS['password'];

  $username = trim( stripslashes( $username ) );
  $password = trim( stripslashes( $password ) );

  if( !$username )

    header("Location: http://www.phpforce.com/login.php");

  else {

    $username = ereg_replace("'","",$username);
    $password = ereg_replace("'","",$password);

    $dbh_res = mysql_query( "select password,password('$password') from resume where username='$username'" );
    if( !$dbh_res or !mysql_num_rows( $dbh_res ) )
      $sorry=1;
    else {
      list($dbpass,$encpass)=mysql_fetch_row( $dbh_res );
      if( $dbpass != $password )
        $sorry=1;
      else {
        setcookie("username","$username");
        setcookie("encpass","$encpass");
      }
    }
  }


  $titlemsg = "p h p force - logging in";
  include ("header.php");

  if( $sorry ) {
    echo "<h1>Sorry, please try again.</h1>";
    echo "Click <a href=\"$redir\">here</a> to try again.";
  } else {
    echo "<h1>Thanks for logging in, $username!</h1>";
    echo "Click <a href=\"$redir\">here</a> to continue.";
  }

  include ("footer.php");


?>
