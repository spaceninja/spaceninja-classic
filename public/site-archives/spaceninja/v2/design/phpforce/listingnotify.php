<?
  include("dbinit.php");

  if( !$redir )
    $redir="user.php";

  $login_to = "http://www.phpforce.com/login.php?redir=listingnotify.php";

  $username = trim( stripslashes( $username ) );
  $password = trim( stripslashes( $password ) );

  verify_user( $username, $encpass, $login_to );


  if( $clear == "yes" )
    mysql_query( "update resume set keywords='' where username='$username'" );
  elseif( $keywords )
    mysql_query( "update resume set keywords='$keywords' where username='$username'" );
  else {
    $dbh_res = mysql_query( "select keywords from resume where username='$username'" );
    list($keywords) = mysql_fetch_row( $dbh_res );
  }

  include ("header.php");


?>

<h1 class="head">Email Notifications</h1>

You can configure your account to automatically email you with new job
postings that match your criteria.  You can turn off job notifications
by clearing your list of search criteria.<p>

Type in a list of keywords you want to search for.  New jobs that meet your
criteria are mailed out nightly.<p>

<form action="listingnotify.php" method=post>
Keywords: <input type=text name="keywords" value="<?=$keywords?>" maxlength=100>
<p>
<input type=submit value="Update">
</form>
<p>

If you are tired of receiving email notifications,
<a href="listingnotify.php?clear=yes">click here</a> to clear your search
criteria.<p>

<a href="<?=$redir?>">Go back</a>.<p>

<? include ("footer.php"); ?>
