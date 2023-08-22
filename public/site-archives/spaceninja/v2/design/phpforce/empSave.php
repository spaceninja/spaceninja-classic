<?
include("dbinit.php");
sess("empid","empLogin.php");

if( (!$company) || (!$email) ) {

  $titlemsg = "Could not update account";
  
  include("header.php");

  ?>
  <h1 class="head">Required Data Missing</h1>
 
  <p>You seem to have forgotten to provide some required data.
  Required fields that still need to be filled in are listed in red.

  <form action="empSave.php" method="post">
  <table>
    <tr>
      <td align="right"><b>
      <?
      if(!$company)
        print "<font color=\"red\">Company name:</font>";
      else
        print "Company name:";
      ?>
      </b></td>
      <td align="left">
        <input type="text" name="company" size=20 maxlength=50 value="<?=$company?>">
      </td>
    </tr>
    <tr>
      <td align="right"><b>
      <?
      if(!$email)
        print "<font color=\"red\">Email address:</font>";
      else
        print "Email address";
      ?>
      </b></td>
      <td align="left">
        <input type="text" name="email" size=20 maxlength=50 value="<?=$email?>">
      </td>
    </tr>
    <tr>
      <td align="right">Company URL:</td>
      <td align="left">
        <input type="text" name="url" size=20 maxlegth=100 value="<?=$url?>">
      </td>
    </tr>
    <tr>
      <td align="right">Phone #:</td>
      <td align="left">
        <input type="text" name="phone" size=20 maxlegth=20 value="<?=$phone?>">
      </td>
    </tr>
    <tr>
      <td align="right">Fax #:</td>
      <td align="left">
        <input type="text" name="fax" size=20 maxlegth=20 value="<?=$fax?>">
      </td>
    </tr>
    <tr>
      <td align="right">Address 1:</td>
      <td align="left">
        <input type="text" name="addr1" size=20 maxlegth=50 value="<?=$addr1?>">
      </td>
    </tr>
    <tr>
      <td align="right">Address 2:</td>
      <td align="left">
        <input type="text" name="addr2" size=20 maxlegth=50 value="<?=$addr2?>">
      </td>
    </tr>
    <tr>
      <td align="right">City:</td>
      <td align="left">
        <input type="text" name="city" size=20 maxlegth=50 value="<?=$city?>">
      </td>
    </tr>
    <tr>
      <td align="right">State/Province:</td>
      <td align="left">
        <input type="text" name="state" size=2 maxlegth=2 value="<?=$state?>">
      </td>
    </tr>
    <tr>
      <td align="right">Postal code:</td>
      <td align="left">
        <input type="text" name="zip" size=10 maxlegth=10 value="<?=$zip?>">
      </td>
    </tr>
    <tr>
      <td align="right">Country:</td>
      <td align="left">
        <input type="text" name="country" size=20 maxlength=25 value="<?=$country?>">
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <br>
        <input type="submit" value="Re-submit">
      </td>
    </tr>
  </table>
  
  <?
  
  include("footer.php");
  exit;
}

if(!mysql_query("update employers set company='$company',email='$email',
  url='$url',phone='$phone',fax='$fax',addr1='$addr1',addr2='$addr2',
  city='$city',state='$state',zip='$zip',country='$country' where id=$empid"))
  problem("Couldn't update employer record.");
  
$titlemsg = "User Info Updated";
include("header.php");

?>
  <h1 class="head">User Info Updated</h1><br><br>
  
  <a href="empMenu.php?<?=SID?>">Back to main menu.</a>
<?
include("footer.php");
?>