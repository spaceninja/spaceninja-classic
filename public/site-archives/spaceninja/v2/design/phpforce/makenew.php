<?
  include("dbinit.php");

  $username=$HTTP_POST_VARS['username'];
  $password=$HTTP_POST_VARS['password'];

  $username = trim( stripslashes( $username ) );
  $password = trim( stripslashes( $password ) );
  $email = trim( $email );

  if( !$username )

    header("Location: http://www.phpforce.com/newaccount.php");

  else {

    if( ereg( "[^A-Za-z0-9_\-]",$username ) ) {
      $sorry=1;
    } else {

      $username = ereg_replace("'","",$username);
      $password = ereg_replace("'","",$password);


      $dbh_res = mysql_query( "select count(*) from resume where username='$username'" );
      list($count) = mysql_fetch_row( $dbh_res );

      if( $count == 0 ) {

        mysql_query( "insert into resume (username,password,email) values ".
	             "('$username','$password','$email' )" );

        $dbh_res = mysql_query( "select password('$password')" );

        list($encpass) = mysql_fetch_row( $dbh_res );
        setcookie("username","$username");
        setcookie("encpass","$encpass");
	$sorry = 0;


      } else

        $sorry = 1;

    }



  }


?>
<html>
<head><title>p h p force - login</title></head>
<? $titlemsg = "p h p force - new account";
   include ("header.php"); ?>



<?

  if( $sorry ) {

    echo "That username is unavailable.  Please <a href=\"newaccount.php";
    if( $redir ) echo "?redir=$redir";
    echo "\">try again</a>.";

  } else {

    echo "Thanks for making a new account, ";
    echo "<i>$username</i>!<p>";
    echo "Click <a href=\"$redir\">here</a> to continue!<p>";

  }
  
?>


<? include ("footer.php"); ?>
</html>
