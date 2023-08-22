<?

# Page where employers add job listings.

include("dbinit.php");
sess("empid","empLogin.php");

$titlemsg = "Add Job Listing";

include("header.php");

?>

  <h1 class="head">Add Job Listing</h1>
  
  <p>Once you add your job listing, it will be made available to anyone
  who uses the site.
  
  <p>Note that if you did not enter contact information information
  in your account creation, such as an email address or a phone number,
  it would be a good idea to put it in the job description so job
  seekers can get in touch with you.  If you didn't enter contact
  information for your account but would like to, 
  <a href="empUpdate.php?<?=SID?>">go here.</a>
  
  <form action="empPost.php?<?=SID?>" method="post">
  Job location:<br>
  <input type="text" name="location" size=40 maxlength=40><br><br>
  
  Basic skills desired (brief desc.):<br>
  <input type="text" name="skills" size=40 maxlength=80><br><br>
  
  Job type:<br>
  <select name="type[]" size=9 multiple>
    <option value="cont-w2">W2 Contract</option>
    <option value="cont-ind">Independent Contract</option>
    <option value="cont-c2c">Corp-to-Corp Contract</option>
    <option value="cth-w2">W2 Contract-to-hire</option>
    <option value="cth-ind">Independent Contract-to-hire</option>
    <option value="cth-c2c">Corp-to-Corp Contract-to-hire</option>
    <option value="ft">Full-time</option>
    <option value="pt">Part-time</option>
    <option value="any" selected>Any of the above</option>
  </select><br><br>
  
  Pay:<br>
  <input type="text" name="pay" size=40 maxlength=40><br><br>
  
  Job description:<br>
  <textarea name="description" cols=60 rows=20 wrap="soft"></textarea><br><br>
  
  <input type="submit" value="Post the job">
  </form>

<?

include("footer.php");
  
  
  
  
  
  
