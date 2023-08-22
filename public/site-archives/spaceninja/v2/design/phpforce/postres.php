<?

  include("dbinit.php");
  $login_to = "http://www.phpforce.com/login.php?redir=submitres.php";

  $username = trim( stripslashes( $username ) );
  $password = trim( stripslashes( $password ) );

  verify_user( $username, $encpass, $login_to );

  $username = ereg_replace("'","",$username);
  if( $action == "update" ) {
    mysql_query( "update resume set name='$name',email='$email',".
                 "phone='$phone',address1='$address1',address2=".
		 "'$address2',city='$city',state='$state',country=".
		 "'$country',postal='$postal',description=".
		 "'$description',public=" .($public?"1":"0"). ",".
		 "resumeurl='$resumeurl',resumetext='$resumetext'".
		 " where username='$username'" );


    if( $resumefile != "none" ) {
      $fp = fopen("$resumefile","r");
      $file = fread ($fp, filesize ($resumefile));
      fclose($fp);
      $encoded_file = addslashes( $file );
      mysql_query( "update resume set resumefilename='$resumefile_name',".
                   "resumefile='$encoded_file' where username='$username'" );
      unlink($resumefile);
    }
  }

  header( "Location: http://www.phpforce.com/viewres.php" .
          ($redir ? "?redir=$redir":"") );
?>
