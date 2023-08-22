<?
  include("dbinit.php");

  if( !$redir )
    $redir="user.php";


  if( $HTTP_GET_VARS['username'] )
    $username=$HTTP_GET_VARS['username'];

  if( $username != $HTTP_COOKIE_VARS['username'] )
    $viewother=1;




  $username = ereg_replace("'","", trim( stripslashes( $username ) ) );
  $password = trim( stripslashes( $password ) );

  $dbh_res = mysql_query( "select sum(public) from resume where username='$username'" );
  list($ispublic) = mysql_fetch_row( $dbh_res );

  if( !$ispublic and !verify_user( $username, $encpass, "" ) ) {
  
    $noview=1;
    $your="no";
    
  } else {

    $dbh_res = mysql_query( "select name,email,phone,address1,address2,".
                            "city,state,country,postal,description,".
			    "resumeurl,resumetext,resumefilename,".
			    "length(resumefile),public from resume ".
			    "where username='$username' ");

    list($name,$email,$phone,$address1,$address2,$city,$state,
         $country,$postal,$description,$resumeurl,$resumetext,
	 $resumefilename,$res_length,$public) = mysql_fetch_row( $dbh_res );


    if( $email )
      $email = "<a href=\"mailto:$email\">$email</a>";
      
    if( $resumeurl and !ereg("http://",$resumeurl) )
      $resumeurl = "http://$resumeurl";

    if( $viewother ) {
      $you="$username has";
      $your="$username's";
    } else {
      $you="you have";
      $your="your";
    }

  }

  $titlemsg = "p h p force - view $your resume";
  include ("header.php");

  function display_item( $name,$value ) {
    if( $value ) {
      echo "<tr><td valign=top align=right>$name</td>";
      echo "<td valign=top align=left>$value</td></tr>\n";
    }
  }



?>



<? if( $noview ) {  /* THE RESUME IS UNAVAILABLE FOR VIEWING SO DISPLAY THIS */ ?>

<font size=+2>Sorry</font><p>
That resume is not available for viewing at this time!<p>




<? } else { /* THE RESUME IS AVAILABLE SO DISPLAY THE FOLLOWING */ ?>




<br><br>
<font size=+1>Information for user <i><?=$username?></i></font><p>

This is the information <?=$you?> specified.<p>

<table cellpadding=0 cellspacing=0>
<? display_item("Name:",$name); ?>
<? display_item("Email:",$email); ?>
<? display_item("Phone:",$phone); ?>
<? display_item("Address:",$address1); ?>
<? display_item("Address 2:",$address2); ?>
<? display_item("City:",$city); ?>
<? display_item("State:",$state); ?>
<? display_item("Country:",$country); ?>
<? display_item("Postal:",$postal); ?>
</table><p>


<? if( $description ) echo "Brief description of $your skills:<br>".
                           "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
			   "<i>$description</i><p>"; ?>

<? if( $resumeurl) echo "The URL to $your resume:<br>".
                        "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
			"<a href=\"$resumeurl\">$resumeurl</a><p>"; ?>


<?
  if( $res_length ) {
    echo "Resume <b>$resumefilename</b> has been uploaded, at $res_length bytes ";
    echo "(<a href=\"downloadres.php?username=$username\">download it here</a>)";
    echo "<p>\n";
  }

  if( $resumetext ) {
    echo "Plaintext resume was included:<br>\n";
    echo "<ul><pre>$resumetext</pre></ul>\n";
    echo "<p>\n";
  }
?>


<? if( !$viewother ) {
    echo "This profile is ";
    if($public) echo "public"; else echo "private";
    echo ".<p>";
    echo "<a href=\"submitres.php\">Make changes</a> to your profile?<p>";
  }
?>

<? } ?>

<a href="<?=$redir?>">Go back</a>.<p>


</form>



<? include ("footer.php"); ?>
