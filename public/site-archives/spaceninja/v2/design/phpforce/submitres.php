<?

  include("dbinit.php");
  
  if( !$redir )
    $redir="user.php";
    
  $login_to = "http://www.phpforce.com/login.php?redir=submitres.php";

  $username = trim( stripslashes( $username ) );
  $password = trim( stripslashes( $password ) );

  verify_user( $username, $encpass, $login_to );

  $username = ereg_replace("'","",$username);
  $dbh_res = mysql_query( "select name,email,phone,address1,address2,".
                          "city,state,country,postal,description,".
			  "resumeurl,resumetext,resumefilename,".
			  "length(resumefile),public from resume ".
			  "where username='$username' ");

  list($name,$email,$phone,$address1,$address2,$city,$state,
       $country,$postal,$description,$resumeurl,$resumetext,
       $resumefilename,$res_length,$public) = mysql_fetch_row( $dbh_res );

  $titlemsg = "p h p force - edit your resume";
  include ("header.php");


?>


<form action="postres.php" enctype="multipart/form-data" method=post>
<input type=hidden name="action" value="update">

<? if( $redir ) echo "<input type=hidden name='redir' value='$redir'>\n"; ?>

<font size=+1>Information for user name <i><?=$username?></i></font><p>

This is the information you may have released to prospective employers.
All of the information is optional.<p>

<table cellpadding=0 cellspacing=0>

<tr><td valign=center align=right>Name:</td>
<td valign=center align=left><input type=text name="name" value="<?=$name?>" size=20 maxlength=60></td></tr>

<tr><td valign=center align=right>Email:</td>
<td valign=center align=left><input type=text name="email" value="<?=$email?>" size=20 maxlength=50></td></tr>

<tr><td valign=center align=right>Phone:</td>
<td valign=center align=left><input type=text name="phone" value="<?=$phone?>" size=10 maxlength=20></td></tr>

<tr><td valign=center align=right>Address:</td>
<td valign=center align=left><input type=text name="address1" value="<?=$address1?>" size=20 maxlength=60></td></tr>

<tr><td valign=center align=right>Address 2:</td>
<td valign=center align=left><input type=text name="address2" value="<?=$address2?>" size=20 maxlength=60></td></tr>

<tr><td valign=center align=right>City:</td>
<td valign=center align=left><input type=text name="city" value="<?=$city?>" size=20 maxlength=30></td></tr>

<tr><td valign=center align=right>State:</td>
<td valign=center align=left><input type=text name="state" value="<?=$state?>" size=2 maxlength=2></td></tr>

<tr><td valign=center align=right>Country:</td>
<td valign=center align=left><input type=text name="country" value="<?=$country?>" size=10 maxlength=15></td></tr>

<tr><td valign=center align=right>Postal:</td>
<td valign=center align=left><input type=text name="postal" value="<?=$postal?>" size=10 maxlength=10><p>

</table><p>

Brief description of your skills:<br>
<input type=text name="description" value="<?=$description?>" size=40 maxlength=80><p>

<table cellpadding=0 cellspacing=0>
<tr><td valign=center align=right>The URL to your resume:</td>
<td valign=center align=left><input type=text name="resumeurl" value="<?=$resumeurl?>" size=20 maxlength=100></td></tr>

<tr><td valign=center align=right>Upload a resume?</td>
<td valign=center align=left><input type=hidden name="MAX_FILE_SIZE" value="100000">
<input type=file name="resumefile"></td></tr>
</table><br>

<?
  if( $res_length ) {
    echo "You have previously uploaded a resume, <b>$resumefilename</b>,";
    echo "$res_length bytes in size.  ";
    echo "If you upload a new one, it will overwrite your current one.  ";
    echo "Click <a href=\"deleteres.php?redir=submitres.php\">here</a> to delete your ";
    echo "current resume.<p>\n";
  }
?>

Optionally paste a plaintext resume in here:<br>
<textarea name="resumetext" rows=4 cols=60><?=$resumetext?></textarea><p>

Make this profile public? <input type=checkbox name="public"
<? if($public) echo "checked"; ?> ><p>

<input type=submit value="Go!">

</form>



<? include ("footer.php"); ?>
</html>
