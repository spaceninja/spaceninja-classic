<?

$titlemsg = "Create Employer Account";

include("header.php");

?>
  <h1 class="head">Create Employer Account</h1>

  <p>Fill in the fields to create an account.  Creating an account allows you
  to post your PHP jobs and search through resumes.
  
  <p>The username is the name you will use to log in to your account.  It
  does not necessarily have to be the name of a company.
  
  <p>Required fields are  listed in bold.

  <form action="empVerify.php" method="post">
  <table>
    <tr>
      <td align="right"><b>Username:</b></td>
      <td align="left"><input type="text" name="name" size=20 maxlength=20></td>
    </tr>
    <tr>
      <td align="right"><b>Password:</b></td>
      <td align="left"><input type="password" name="pass1" size=20 maxlength=25></td>
    </tr>
    <tr>
      <td align="right"><b>Re-type password:</b></td>
      <td align="left"><input type="password" name="pass2" size=20 maxlength=25></td>
    </tr>
    <tr>
      <td align="right"><b>Company name:</b></td>
      <td align="left"><input type="text" name="company" size=20 maxlength=50></td>
    </tr>
    <tr>
      <td align="right"><b>Email address:</b></td>
      <td align="left"><input type="text" name="email" size=20 maxlength=50></td>
    </tr>
    <tr>
      <td align="right">Company URL:</td>
      <td align="left"><input type="text" name="url" size=20 maxlength=100></td>
    </tr>
    <tr>
      <td align="right">Phone #:</td>
      <td align="left"><input type="text" name="phone" size=20 maxlength=20></td>
    </tr>
    <tr>
      <td align="right">Fax #:</td>
      <td align="left"><input type="text" name="fax" size=20 maxlength=20></td>
    </tr>
    <tr>
      <td align="right">Address 1:</td>
      <td align="left"><input type="text" name="addr1" size=20 maxlength=50></td>
    </tr>
    <tr>
      <td align="right">Address 2:</td>
      <td align="left"><input type="text" name="addr2" size=20 maxlength=50></td>
    </tr>
    <tr>
      <td align="right">City:</td>
      <td align="left"><input type="text" name="city" size=20 maxlength=50></td>
    </tr>
    <tr>
      <td align="right">State/Province:</td>
      <td align="left"><input type="text" name="state" size=2 maxlength=2></td>
    </tr>
    <tr>
      <td align="right">Postal code:</td>
      <td align="left"><input type="text" name="zip" size=10 maxlength=10></td>
    </tr>
    <tr>
      <td align="right">Country:</td>
      <td align="leftl"><input type="text" name="country" size=20 maxlength=25></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <br>
        <input type="submit" value="Create Account">
      </td>
    </tr>
  </table>

<?

include("footer.php");

?>
