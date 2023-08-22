<?
  include ("dbinit.php");
  
  $username=ereg_replace("'","", trim( stripslashes( $username ) ) );
  $dbh_res = mysql_query( "select password,email from resume where username='$username'" );
  if( !$dbh_res or !mysql_num_rows( $dbh_res ) )
    $error=1;
  else {
  
    list( $password,$email ) = mysql_fetch_row( $dbh_res );
    mail( "$email","Your PHPforce password",
          "Hi!  Your PHPforce password is:\n\n$password\n\nThanks for using PHPforce!",
 	  "From: master@phpforce.com\nReply-To: master@phpforce.com" );
	 
  }
  
  $titlemsg="p h pforce - mailing password";
  include ("header.php");

  if( $error )
    echo "That user does not exist!";
  else
    echo "Your password has been mailed!";
?>

<p>
<a href="user.php">Go back</a><p>

<? include ("footer.php"); ?>
