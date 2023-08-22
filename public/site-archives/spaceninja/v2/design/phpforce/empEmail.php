<?

include("dbinit.php");
sess("empid","empLogin.php");

$title = "Email Notifications";
include("header.php");

if($changing) {
  if(!mysql_query("update employers set keywords='$keywords' where id=$empid"))
    problem("Couldn't update employers keywords");

  ?>
    <h1 class="head">Updated</h1>
    
    <p>Your email notification settings have been updated.<br><br>
    
    <a href="empMenu.php?<?=SID?>">Back to main menu.</a>
  <?
  include("footer.php");
  exit;
}
  
if(!($result = mysql_query("select keywords from employers where id=$empid")))
  problem("Couldn't get keywords from employers where id=$empid");

$row = mysql_fetch_array($result);

?>

  <h1 class="head">Email Notifications</h1>

  <p>You can configure your account to automatically email you 
  new resumes that meet your criteria as they're submitted
  from job seekers.
  
  <p>Type in a list of keywords separated by spaces.  Once you're
  done, any new resumes that contain one or more of your keywords
  will be automatically emailed to you.
  
  <form action="empEmail.php" method="post">
  Keywords:<br>
  <input type="text" name="keywords" size=40 maxlength=100 value="<?=$row["keywords"]?>">
  <br><br>
  <input type="hidden" name="changing" value="1">
  <input type="submit" value="Save changes">
  </form>
<?

include("footer.php");
?>
