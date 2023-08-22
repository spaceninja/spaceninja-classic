<?

include("dbinit.php");
sess("empid","empLogin.php");

$titlemsg = "Update Your Info";
include("header.php");

if(!($result = mysql_query("select name,company,email,url,phone,fax,
  addr1,addr2,city,state,zip,country from employers where id=$empid")))
  problem("Couldn't get info from employers for update");
  
$row = mysql_fetch_array($result);

?>
  
  <h1 class="head">Update Info for <?=$row["name"]?></h1>
  
  <p>Make modifications to your account information here.  Required
  fields (fields that you can not leave empty) are listed in bold.
  
  <p>(To change your password, <a href="empChangePass.php?<?=SID?>">click here</a>.)
  
  
  
    <form action="empSave.php" method="post">
    <table>
      <tr>
        <td align="right"><b>Company name:</b></td>
        <td align="left"><input type="text" name="company" size=20 maxlength=50 value="<?=$row["company"]?>"></td>
      </tr>
      <tr>
        <td align="right"><b>Email address:</b></td>
        <td align="left"><input type="text" name="email" size=20 maxlength=50 value="<?=$row["email"]?>"></td>
      </tr>
      <tr>
        <td align="right">Company URL:</td>
        <td align="left"><input type="text" name="url" size=20 maxlength=100 value="<?=$row["url"]?>"></td>
      </tr>
      <tr>
        <td align="right">Phone #:</td>
        <td align="left"><input type="text" name="phone" size=20 maxlength=20 value="<?=$row["phone"]?>"></td>
      </tr>
      <tr>
        <td align="right">Fax #:</td>
        <td align="left"><input type="text" name="fax" size=20 maxlength=20 value="<?=$row["fax"]?>"></td>
      </tr>
      <tr>
        <td align="right">Address 1:</td>
        <td align="left"><input type="text" name="addr1" size=20 maxlength=50 value="<?=$row["addr1"]?>"></td>
      </tr>
      <tr>
        <td align="right">Address 2:</td>
        <td align="left"><input type="text" name="addr2" size=20 maxlength=50 value="<?=$row["addr2"]?>"></td>
      </tr>
      <tr>
        <td align="right">City:</td>
        <td align="left"><input type="text" name="city" size=20 maxlength=50 value="<?=$row["city"]?>"></td>
      </tr>
      <tr>
        <td align="right">State/Province:</td>
        <td align="left"><input type="text" name="state" size=2 maxlength=2 value="<?=$row["state"]?>"></td>
      </tr>
      <tr>
        <td align="right">Postal code:</td>
        <td align="left"><input type="text" name="zip" size=10 maxlength=10 value="<?=$row["zip"]?>"></td>
      </tr>
      <tr>
        <td align="right">Country:</td>
        <td align="leftl"><input type="text" name="country" size=20 maxlength=25 value="<?=$row["country"]?>"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <br>
          <input type="submit" value="Update Info">
        </td>
      </tr>
    </table>
  
<?

include("footer.php");
  
  

