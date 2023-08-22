<?
  include ("dbinit.php");

  $dbh_res = mysql_query( "select id,employer,date,location,skills from jobs order by date desc" );
  while( list($id,$emp,$date,$loc,$sk) = mysql_fetch_row( $dbh_res ) ) {
  
    list($y,$m,$d)=split("-",$date);
    $y*=1; $m*=1; $d*=1; if( $y == 2000 ) $y="2K";
    $date="$m/$d/$y";
  
    $emp_res = mysql_query( "select company from employers where id=$emp" );
    list( $empname ) = mysql_fetch_row( $emp_res );
    
    $list .= "<a href=\"viewjob.php?id=$id".
             "\">$empname</a> - $loc &nbsp; <font size=-1>(posted on ".
	     "$date)</font><br>\n".
             "&nbsp;&nbsp;&nbsp;&nbsp;Skills wanted: <i>$sk</i><p>\n";

  }

  $titlemsg = "p h p force - job listings";
  include ("header.php");
?>

<h1 class=header>Current Jobs on PHPForce</h1>

This is a complete list of all job listings that the employers have made
public.<p>

<?=$list?>

<a href="user.php">Go back</a> to the user area

<? include ("footer.php"); ?>
