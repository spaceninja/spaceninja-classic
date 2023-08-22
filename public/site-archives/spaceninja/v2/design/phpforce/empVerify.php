<?

# Employer account creation form verification PHP.

# function showForm();
# (the function is at the bottom of this file)

$pass1 = strtoupper($pass1);
$pass2 = strtoupper($pass2);

include("dbinit.php");

if(!($result = mysql_query("select id from employers where name='$name'",$dbh)))
  problem("Couldn't search for dupe names.");

if(mysql_num_rows($result)) {

  # If there's already someone in the database with this username

  $titlemsg = "Could not create account";
  
  include("header.php");
  
  ?>
  <h1 class="head">Username Taken</h1>
  
  <p>The username <?=$name?> is already being used by another employer.
  Please choose a different username and re-submit the form.
  <?
  unset($name);
  showForm();

} elseif((!$name) || (!$pass1) || (!$pass2) || (!$company) || (!$email)) {
   
  # If required form data was missing.
  
  $titlemsg = "Could not create account";
  
  include("header.php");

  ?>
  <h1 class="head">Required Data Missing</h1>
 
  <p>You seem to have forgotten to provide some required data.
  Required fields that still need to be filled in are listed in red.
  <?
  showForm();

} elseif(strcasecmp($pass1,$pass2)) {

  # If the two entered passwords do not match

  $titlemsg = "Could not create account";
  
  include("header.php");

  ?>
  <h1 class="head">Mistyped Passwords</h1>
  
  <p>You mis-typed your password in one of the two entry fields.
  Type it in again in both fields and re-submit the form.
  <?
  unset($pass1);
  unset($pass2);
  
  showForm();

} else {
 
  # Otherwise, if everything is OK, add it to the database.

  if(!mysql_query("insert into employers values(
    null,'$name','$pass1','$company','$email','$url','$phone',
    '$fax','$addr1','$addr2','$city','$state','$zip','$country',null,null,null)",$dbh))
    problem("Couldn't add new employer account.");
  
  $titlemsg = "Account Created";

  include("header.php");

  ?>
  Your account has been created.
  
  <p>You can now go to the <a href="empLogin.php">employer log-in page</a>
  to edit your account settings for features such as job posting,
  resume searching, and automatic email notifications of future resumes
  that meet your criteria.
  <?
}

include("footer.php");

function showForm() {

  # Show the form, let them give it another go

  global $name, $pass1, $pass2, $company, $email, $url, $phone, $fax,
    $addr1, $addr2, $city, $state, $zip, $country;

  ?>
  <form action="empVerify.php" method="post">
  <table>
    <tr>
      <td align="right"><b>
        <?
        if(!$name)
          print "<font color=\"red\">Account name:</font>";
        else
          print "Account name:";
        ?>
        </b></td>
      <td align="left">
        <input type="text" name="name" size=20 maxlength=20 value="<?=$name?>">
      </td>
    </tr>
    <tr>
      <td align="right"><b>
      <?
      if(!$pass1)
        print "<font color=\"red\">Password:</font>";
      else
        print "Password:";
      ?>
      </b></td>
      <td align="left">
        <input type="password" name="pass1" size=20 maxlength=25 value="<?=$pass1?>">
      </td>
    </tr>
    <tr>
      <td align="right"><b>
      <?
      if(!$pass2)
        print "<font color=\"red\">Re-type password:</font>";
      else
        print "Re-type password:";
      ?>
      </b></td>
      <td align="left">
        <input type="password" name="pass2" size=20 maxlength=25 value="<?=$pass2?>">
      </td>
    </tr>
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

}


?>
