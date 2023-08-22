<?

  $dbh = mysql_connect("localhost","steve","happy");
  mysql_select_db("spaceninja",$dbh);

  mysql_query( "insert into guestbook (name,quest,color,email,siteurl,sitename,comments,date) values ('$name','$quest','$color','$email','$siteurl','$sitename','$comments',now() )" );


  header("Location: http://www.spaceninja.com/home/guestbook/gb_view.php");
	
?>
