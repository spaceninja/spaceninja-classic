<?

# Employer login PHP


# function showLoginForm();
# (Defined at the bottom of this file

include("dbinit.php");

if($name) {
  
  $pass1 = strtoupper($password);
  
  if(!($result = mysql_query("select password,id from employers where name='$name'")))
    problem("Couldn't get name and password from employer database.");

  list($pass2,$id) = mysql_fetch_row($result);

  if( (!$pass1) || (strcmp($pass1,$pass2)) ) {
    $titlemsg = "Invalid Login";
    include("header.php");
    ?>
      <h1 class="head">Invalid Login</h1>

      <p>Invalid login.  Please try logging in again.  If you think you've 
      forgotten your password, click <a href="empMailPass.php">here</a> 
      to have it automatically emailed to you.
   
    <br>
    <?
    showLoginForm();
    include("footer.php");
    exit;
  }
  
  session_start();
  session_register("empid");
  $empid = $id;
  header(sprintf("Location: empMenu.php?%s",SID));
  
}
    
$titlemsg = "Employer Login";

include("header.php");

showLoginForm();

include("footer.php");

function showLoginForm() {
  ?>
  <h1 class="head">Employer Login</h1>
  
  Enter your username and password to log in.<br><br>
  <form action="empLogin.php" method="post">
  <table>
    <tr>
      <td align="right">Username:</td>
      <td><input type="text" name="name" size=20 maxlength=20></td>
    </tr>
    <tr>
      <td align="right">Password:</td>
      <td><input type="password" name="password" size=20 maxlength=25></td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
      <td><input type="submit" value="Login"></td>
    </tr>
  </table>
  </form>
  If you've forgotten your password, <a href="empMailPass.php">click here</a>
  to have it emailed to you.
  <?
}
?>
