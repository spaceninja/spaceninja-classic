<?
  include ("dbinit.php");

  if( $query ) {
    $orig_query = $query;

    $query = ereg_replace( "[^a-zA-Z ]", "", trim( stripslashes( $query ) ) );
    $query = strtolower( $query );
    $query = preg_replace( "/\b(and|or|not|the|of|with)\b/", "", $query );
    $query = preg_replace( "/\s+/"," ", $query );

    $query = ereg_replace( " ","|", $query );
    $query = "[[:<:]]($query)[[:>:]]";
    $query = sql_regcase( $query );

    $dbh_res = mysql_query( "select id,employer,date,location,skills from jobs where ".
                            "description regexp '$query' or skills ".
			    "regexp '$query'" );

    if( !$dbh_res or !mysql_num_rows( $dbh_res ) ) {

      $search_res = "Sorry, no jobs matched your search keywords!\n";

    } else {

      while( list($id,$emp,$date,$loc,$sk) = mysql_fetch_row( $dbh_res ) ) {
  
        list($y,$m,$d)=split("-",$date);
	$y*=1; $m*=1; $d*=1; if( $y == 2000 ) $y="2K";
	$date="$m/$d/$y";
  
        $emp_res = mysql_query( "select company from employers where id=$emp" );
	list( $empname ) = mysql_fetch_row( $emp_res );
    
        $search_res .= "<a href=\"viewjob.php?id=$id&redir=listjob.php".
	               "\">$empname</a> - $loc &nbsp; <font size=-1>(posted on ".
		       "$date)</font><br>\n".
		       "&nbsp;&nbsp;&nbsp;&nbsp;Skills wanted: <i>$sk</i><p>\n";
      }


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

<form action="searchjobs.php" method=post>
Search our database of job listings here!<p>

Enter your keywords - <input type=text name="query">
<p>
<input type=submit value="Search">

</form>

<a href="user.php">Go back</a>

<? include ("footer.php"); ?>
