<?
  include("dbinit.php");

  $username=ereg_replace("'","", trim( stripslashes( $username) ) );
  $dbh_res = mysql_query( "select resumefilename,resumefile from resume ".
                          "where username='$username'" );

  if( !$dbh_res or !mysql_num_rows( $dbh_res ) ) {

    $titlemsg = "p h p force - resume downloading";
    include("header.php");
    echo "<h2>That resume is not available for download!</h2>";
    echo "Please try again later.";
    include("footer.php");

  } else {

    list($resname,$resfile) = mysql_fetch_row( $dbh_res );
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$resname");
    header("Content-Transfer-Encoding: binary");
    echo $resfile;

  }
?>
