<?
  include ("dbinit.php");
  sess("empid","empLogin.php");

  $dbh_res = mysql_query( "select username from resume where public=1 order by username" );
  while( list($username) = mysql_fetch_row( $dbh_res ) )
    $list .= "/ <a href=\"viewres.php?username=".
             "$username&redir=listres.php\">$username</a> /<br>";


  $titlemsg = "p h p force - resume listings";
  include ("header.php");
?>

<h1 class=header>Current resumes on PHPForce</h1>

This is a complete list of every public resume in our database.<p>

<?=$list?>

<? include ("footer.php"); ?>
