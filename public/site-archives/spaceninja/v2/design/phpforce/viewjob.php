<?
  include("dbinit.php");

  if( !$redir )
    $redir="listjobs.php";



  $id = ereg_replace("'","", trim( stripslashes( $id ) ) );

  $dbh_res = mysql_query( "select count(id) from jobs where id=$id" );
  list($idexists) = mysql_fetch_row( $dbh_res );

  if( $idexists ) {
    
    $dbh_res = mysql_query( "select employer,date,location,skills,pay,type,description from jobs where id=$id" );
    list($emp,$date,$loc,$sk,$pay,$type,$desc) = mysql_fetch_row( $dbh_res );

$type = ereg_replace("cont-w2","W2 Contract", $type);
$type = ereg_replace("cont-ind","Independent Contract", $type);
$type = ereg_replace("cont-c2c","Corp-to-Corp Contract", $type);
$type = ereg_replace("cth-w2", "W2 Contract-to-hire", $type);
$type = ereg_replace("cth-ind", "Independent Contract-to-hire", $type);
$type = ereg_replace("cth-c2c", "Corp-to-Corp Contract-to-hire", $type);
$type = ereg_replace("ft", "Full-time", $type);
$type = ereg_replace("pt", "Part-time", $type);
$type = ereg_replace(",", ",<br>", $type);


    list($y,$m,$d)=split("-",$date);
    $y*=1; $m*=1; $d*=1; if( $y == 2000 ) $y="2K";
    $date="$m/$d/$y";

    $emp_res = mysql_query( "select company,email,url,length(image) from employers where id=$emp" );
    list( $empname,$email,$url,$imlen ) = mysql_fetch_row( $emp_res );


  } else {

    $nojob=1;

  }


  $titlemsg = "p h p force - view job $id";
  include ("header.php");

  function display_item( $name,$value ) {
    if( $value ) {
      echo "<tr><td valign=top align=right>$name</td>";
      echo "<td valign=top align=left>$value</td></tr>\n";
    }
  }



?>



<? if( $nojob ) {  /* THE RESUME IS UNAVAILABLE FOR VIEWING SO DISPLAY THIS */ ?>

<font size=+2>Sorry</font><p>
That job ID is not available for viewing at this time!<p>




<? } else { ?>


<br><br>
<? if( $imlen ) echo "<img src=\"empPic.php?empid=$emp\" align=right>\n"; ?>
<h1 class="head">Information for employer <?=$empname?></h1><p>

<table cellpadding=0 cellspacing=0>
<? display_item("URL:","<a href=\"$url\">$url</a>"); ?>
<? display_item("Email:","<a href=\"mailto:$email\">$email</a>"); ?>
<? display_item("Location:",$loc); ?>
<? display_item("Pay:",$pay); ?>
<? display_item("Type:",$type); ?>
</table><p>


<? if( $sk ) echo "Skills wanted:<br>".
                  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
 		  "<i>$sk</i><p>";

  if( $desc ) {
    echo "Job description:<br>\n";
    printf("<ul>%s</ul>\n", nl2br($desc));
    echo "<p>\n";
  }
?>


<? } ?>



<a href="<?=$redir?>">Go back</a>.<p>


</form>



<? include ("footer.php"); ?>
