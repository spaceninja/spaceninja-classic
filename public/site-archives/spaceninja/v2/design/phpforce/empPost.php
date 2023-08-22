<?

include("dbinit.php");
sess("empid","empLogin.php");

$type = implode(",",$type);

if(!strcmp($type,"any"))
  $type = "cont-w2,cont-ind,cont-c2c,cth-w2,cth-ind,cth-c2c,ft,pt";
  
if(!$description) {
  $titlemsg="Error Posting Job";
  include("header.php");
  ?>
  <h1 class="head">Error</h1>
  
  <p>Your job listing could not be posted due to missing information.  Please
  go back and at least fill in the job description field.
  
  <?

  # If there's already a $jobid, it's a job that's being changed from empEdit.php

} else if($jobid) {
  
  $titlemsg = "Job Updated";
  include("header.php");
    
  ?>
  <h1 class="head">
  <?

  if(!($result = mysql_query("select employer from jobs where id=$jobid",$dbh)))
    problem("Couldn't get employer from jobs");

  $row = mysql_fetch_array($result);

  if($empid == $row["employer"]) {
    if(!mysql_query("update jobs set location='$location',skills='$skills',type='$type',pay='$pay',description='$description' where id=$jobid",$dbh))
      problem("Couldn't update database for job id $jobid");
    
    print "Job Updated";
  } else {
    print "Could not update job.";
  }
  ?>
  </h1><br><br>
  <a href="empMenu.php?<?=SID?>">Back to main menu.<a/>
  
  
  </center>
  <?
  
  # otherwise it's new

} else {
  
  if(!mysql_query("insert into jobs values(null,$empid,curdate(),'$location','$skills','$type','$pay','$description')",$dbh))
    problem("Couldn't add new job to the database.");
    
  $titlemsg = "Job Posted";
  include("header.php");
  
  $today = getdate();
  
  ?>
    <h1 class="head">Job Posted</h1>
    
    <p>Your job has been posted.  It will be visible to job seekers for
    the next 60 days, expiring on 
    <?=date("l, F jS, Y",mktime(0,0,0,$today["mon"],$today["mday"] +60 ,$today["year"]))?>.
    Please do not re-post it until then.  If you need 
    to make modifications to the listing, you can do so
    <a href="empView.php?<?=SID?>">here</a>.<br><br>
    
    <a href="empMenu.php?<?=SID?>">Back to main menu.</a>
  
  <?
}
 
include("footer.php");

?>
