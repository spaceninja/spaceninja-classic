<?
include("dbinit.php");
sess("empid","empLogin.php");

$titlemsg = "Upload Graphics";
include("header.php");

if(($file) && (strcmp($file,"none"))) {
  $fp = fopen($file,"r");
  $blob = addslashes(fread($fp, filesize($file)));
  fclose($fp);
    
  if(filesize($file) > 614400) {
    print "<h1 class=\"head\">Error: Image is larger than 600k</h1>
      <p>Your image was not saved because it was too large.  An uploaded
        image may not be larger than 600k.";  
  } else {
    if(!mysql_query("update employers set image='$blob' where id=$empid"))
    problem("Couldn't add image");
  }
  
  print "<h1 class=\"head\">$file_name Successfully Uploaded</h1>";
  
}

if(!($result = mysql_query("select image from employers where id=$empid && length(image) != 0")))
  problem("Couldn't read image from employers");

if(mysql_num_rows($result)) {
  srand(time());
  $rand_num = rand();
  print "<img src=\"empPic.php?empid=$empid&r=$rand_num\"><br><br>";
}

?>

  <h1 class="head">Upload Graphics</h1>
  
  <p>Any image you upload will automatically be displayed in
  all of your job listings.  Providing an image can make your
  job listings stand out form the rest.
  
  <p>All images must be under 600k in size, and must be in either
  GIF or JPEG format.
  
  <form action="empGfx.php" enctype="multipart/form-data">
  <input type="file" name="file" size=20 accept="image/*"><br>
  <input type="submit" value="Upload"><br><br>
  
  <a href="empMenu.php<?=SID?>">Back to main menu.</a>
  

<?
include("footer.php");