<?
include("dbinit.php");
sess("empid","empLogin.php");

if(!($result = mysql_query("select id,employer,location,skills,type,pay,description,date_format(date,'%c/%e/%Y') date from jobs where id=$jobid && employer=$empid",$dbh)))
  problem("Couldn't get job from database for editing.");

$row = mysql_fetch_array($result);  

if(!mysql_num_rows($result)) { 
  $titlemsg = "Invalid Job ID";
  include("header.php");
  ?>
  <h1 class="head">Invalid Job ID</h1>
  
  Job number <?=$jobid?> either doesn't exist or doesn't
  belong to you (employer #<?=$empid?>).<br><br>
  If you feel you've reached this message in error, please
  <a href="mailto:problems@phpforce.com">let us know</a>.
  <?
  include("footer.php");
  exit;
}

$titlemsg = "Edit Job";
include("header.php");

$jobtypes = array( array("cont-w2","W2 Contract"),
                   array("cont-ind","Independent Contract"),
                   array("cont-c2c","Corp-to-Corp Contract"),
                   array("cth-w2","W2 Contract-to-hire"),
                   array("cth-ind","Independent Contract-to-hire"),
                   array("cth-c2c","Corp-to-Corp Contract-to-hire"),
                   array("ft","Full time"),
                   array("pt","Part time"),
                   array("any","Any of the above") );

?>
  <h1 class="head">Edit Job from <?=$row["date"]?></h1>
  
  Make any changes to your posted job here, then submit the data.<br><br>
  
  <form action="empPost.php?<?=SID?>" method="post">
  Job location:<br>
  <input type="text" name="location" size=40 maxlength=40 value="<?=$row["location"]?>"><br><br>
  
  Basic skills desired (brief desc.):<br>
  <input type="text" name="skills" size=40 maxlength=80 value="<?=$row["skills"]?>"><br><br>
  
  Job type:<br>
  <select name="type[]" size=9 multiple>
    <?
    if(!strcmp($row["type"],"cont-w2,cont-ind,cont-c2c,cth-w2,cth-ind,cth-c2c,ft,pt"))
      $row["type"] = "any";
    foreach($jobtypes as $j) {
      printf("<option value=\"%s\"",$j[0]);
      if(ereg($j[0], $row["type"]))
        print " selected";
      printf(">%s</option>\n",$j[1]);
    }
    ?>
  </select><br><br>
    
  Pay:<br>
  <input type="text" name="pay" size=40 maxlength=40 value="<?=$row["pay"]?>"><br><br>
  
  Job description:<br>
  <textarea name="description" cols=60 rows=20 wrap="soft"><?=$row["description"]?></textarea><br><br>
  
  <input type="submit" value="Post the job">
  <input type="hidden" name="jobid" value="<?=$jobid?>">
  </form>

<?
include("footer.php");