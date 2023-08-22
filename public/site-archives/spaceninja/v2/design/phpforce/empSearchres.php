<?
  include ("dbinit.php");
  sess("empid","empLogin.php");

  if( $query ) {
    $orig_query = $query;

    $query = ereg_replace( "[^a-zA-Z ]", "", trim( stripslashes( $query ) ) );
    $query = strtolower( $query );
    $query = preg_replace( "/\b(and|or|not|the|of|with)\b/", "", $query );
    $query = preg_replace( "/\s+/"," ", $query );

    $query = ereg_replace( " ","|", $query );
    $query = "[[:<:]]($query)[[:>:]]";
    $query = sql_regcase( $query );

    $dbh_res = mysql_query( "select username,description from resume where ".
                            "(description regexp '$query' or resumetext ".
			    "regexp '$query') and public=1" );

    if( !$dbh_res or !mysql_num_rows( $dbh_res ) ) {

      $search_res = "Sorry, no users matched your search keywords!\n";

    } else {

      while( list($user,$desc) = mysql_fetch_row( $dbh_res ) )
        $search_res .= "<a href=\"viewres.php?username=$user\">$user</a><br>".
	               "&nbsp;&nbsp;&nbsp;&nbsp;$desc<p>\n";

    }    

  }

  $titlemsg = "p h p force - search resumes";
  include ("header.php");
  
  if( $query ) {
    echo "You searched for <i>$orig_query</i>.<p>\n";
    echo $search_res;
    echo "<hr width=60%>\n";
  }
  
?>

<form action="searchres.php" method=post>
Search our database of php developers here!<p>

Enter your keywords - <input type=text name="query">
<p>
<input type=submit value="Search">

</form>

<a href="user.php">Go back</a>

<? include ("footer.php"); ?>
