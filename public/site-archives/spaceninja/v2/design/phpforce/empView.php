<?

include("dbinit.php");
sess("empid","empLogin.php");

$titlemsg = "Your Posted Jobs";
include("header.php");

if(!($result = mysql_query("select id,date_format(date,'%c/%e/%Y') date,location,skills,left(description,250) description from jobs where employer=$empid order by id desc")))
  problem("Couldn't get jobs out of database for list");

print "<h1 class=\"head\">Your Posted Jobs</h1>";
  
while($row = mysql_fetch_array($result)) {
  list($month, $day, $year) = split("/",$row["date"]);
  $today = getdate();
  $timeleft = mktime(0,0,0,$month,$day + 60, $year) - mktime(0,0,0,$today["mon"],$today["mday"],$today["year"]);
  ?>
  <a href="empEdit.php?<?=SID?>&jobid=<?=$row["id"]?>"><h1 class="head"><font color="black"><?=$row["skills"]?></font></h1></a>
  Date: <?=$row["date"]?><br>
  Expires: <?=date("n/j/Y",mktime(0,0,0,$month,$day + 60, $year))?> (<?=$timeleft / 86400?> days)<br>
  Location: <?=$row["location"]?><br>
  Description:
  <table border=0><tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?=nl2br($row["description"])?>. . .</td>
  </tr></table><br><br>
  <?  
}

include("footer.php");