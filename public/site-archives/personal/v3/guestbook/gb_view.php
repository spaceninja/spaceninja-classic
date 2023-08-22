<?

$dbh = mysql_connect( "localhost","steve","happy" );
mysql_select_db( "spaceninja", $dbh );


if( !$top ) $top=0;
if( $top < 0 ) $top=0;
if( ereg("[^0-9]",$top ) ) $top=0;



$dbh_res = mysql_query( "select count(*) from guestbook" );
list($count) = mysql_fetch_row( $dbh_res );

include ("gb_head.php");


$dbh_res = mysql_query( "select name,email,quest,color,siteurl,sitename,".
                        "comments,date from guestbook order by id desc limit $top,10");

while( list($name,$email,$quest,$color,$siteurl,
            $sitename,$comments,$date) = mysql_fetch_row( $dbh_res ) ) {

  $name=stripslashes($name);
  $email=stripslashes($email);
  $quest=stripslashes($quest);
  $color=stripslashes($color);
  $siteurl=stripslashes($siteurl);
  $sitename=stripslashes($sitename);
  $comments=stripslashes($comments);


  if( !ereg("^http",$siteurl) )
    $siteurl="http://$siteurl";


  if( $email and $name )
    $mailurl = "<br><font size=4><b><a href=\"mailto:$email\">$name</a></b></font>\n";
  elseif( $email and !$name )
    $mailurl = "<br><font size=4><b><a href=\"mailto:$email\">$email</a></b></font>\n";
  elseif( !$email and $name )
    $mailurl = "<br><font size=4><b>$name</b></font>\n";
  elseif( !$email and !$name )
    $mailurl = "\n";


  if( $siteurl and $sitename )
    $sitelink = "<br><b>website:</b> <a href=\"$siteurl\">$sitename</a>\n";
  elseif( $siteurl and !$sitename )
    $sitelink = "<br><b>website:</b> <a href=\"$siteurl\">$siteurl</a>\n";
  else
    $sitelink = "<br>\n";



  echo "<p><hr>\n";
  echo $mailurl;
  
  if( $quest )
    echo "<br><b>quest:</b> $quest\n";
  if( $color )
    echo "<br><b>favorite color:</b> $color\n";

  echo $sitelink;

  if( $comments )
    echo "<br> Comments: &nbsp; $comments\n";
    
  echo "<br><small> $date </small>";

}


if( $count-$top > 10 )
  $next = $count-$top-10;

if( $next )
  $nextstg = " <a href=\"gb_view.php?top=" .($top+10). "\">next $next &gt;&gt;</a>";


include("gb_foot.php");
?>
