<?
  $dbh = mysql_connect( "localhost", "steve", "happy" );
  mysql_select_db( "phpforce", $dbh );



function verify_user( $username, $encpass, $login_to, $table = "resume" ) {

  if( !$username or !$encpass) {
  
    if( $login_to )
      header("Location: $login_to");
    else
      return 0;

  } else {
  
    $username = ereg_replace("'","",$username);
    $encpass = ereg_replace("'","",$encpass);

    $dbh_res = mysql_query( "select password from $table where username='$username'" );
    if( !$dbh_res or !mysql_num_rows( $dbh_res ) )

      if( $login_to )
        header("Location: $login_to");
      else
        return 0;
      
    else {

      list($dbpass)=mysql_fetch_row( $dbh_res );

      $dbh_res = mysql_query( "select password('$dbpass')" );
      list($db_encpass)=mysql_fetch_row( $dbh_res );

      if( $db_encpass != $encpass ) {

        if( $login_to )
          header("Location: $login_to");
        else
          return 0;
	
      }

    }
    
  }
  
  return 1;
  
}



function problem($message) {

# Put code here to display error message and/or
# automatically alert us about this problem via
# email or something when I am not so sleepy.

#  mail("sean@fojar.com,steve@fojar.com","Problem with PHPForce","$message");
print "\n$message\n";

}

function sess($testvar, $login_to) {
  global $HTTP_HOST, $SERVER_NAME, $REQUEST_URI,
    $dbh;

  session_start();
  if(!session_is_registered($testvar)) {
    $titlemsg = "Not logged in";
    include("header.php");
    ?>
    <h1 class="head">Not Logged In</h1>
    
    <p>Before using this page, you must <a href="<?=$login_to?>">log in</a>.<br><br>
    If you already have logged in, and you feel you've reached this page
    in error, please <a href="mailto:problems@phpforce.com">let us know</a>.
    <? 
    include("footer.php"); 
    exit; 
  }
}
  


?>
