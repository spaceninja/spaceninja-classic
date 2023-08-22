<?
include("dbinit.php");

$titlemsg = "Forgotten Password";

include("header.php");

if($email) {
  if(!($result = mysql_query("select password from employers where email='$email'")))
    problem("Couldn't get passwords from database for $email");
    
  if(!mysql_num_rows($result)) {
    print "$email was not found in the database.  Are you sure you  have 
      an account?<br><br>
      To create an account, go to the <a href=\"empCreate.php\">Employer
      Account Creation</a> form.";
  } else {
    while($row = mysql_fetch_array($result))
      mail($email,"PHPForce.com Forgotten Password",
        sprintf("Your PHPForce password is %s.", $row["password"]),
        "From: master@phpforce.com");
    print "Your PHPForce password has been mailed to you at $email.";
    include("footer.php");
    end;
  }
}
?>

Please enter your email address below, and your password will
be sent to you right away.<br><br>

<form action="empMailPass.php" method="post">
Email address: <input type="text" name="email" size=20 maxlength=50><br>
<input type="submit" value="Send Password">
</form>

<?
include("footer.php");