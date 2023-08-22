<? $titlemsg = "p h p force - find workers and find jobs";
   include ("header.php"); ?>

<h1 class="head">Welcome, <? echo ($username ? "$username":"job seekers" ); ?>!</h1>


<p>The Job Seekers area is where you can post your resume for potential
employers to examine.  You can also choose to have new job listings mailed
to you if they match on some keywords you specify.

<p>If you don't have an account and you want prospective employers to be
able to find you, <a href="newaccount.php?redir=user.php">make a new
account</a>!  It's simple, quick, and unintrusive.  Forgot your password?
Have it <a href="mailpw.php">mailed to you</a>!

<p>Once you have an account and have logged in, you can access your resume
listing.  You can also configure your job-listing notifications, so that
when an employer posts a job matching the keywords you specify, you will be
automatically informed by email of the listing.



<center>
<p>
<a href="searchjobs.php">Search the current openings</a><br>
<a href="listjobs.php">List all available positions
</center>
<p>


<?
if( $username ) {
  echo "<p><a href=\"viewres.php\">View your resume</a>";
  echo "<p><a href=\"submitres.php\">Change your resume</a>";
  echo "<br><a href=\"listingnotify.php\">Configure listing notifications</a>";
  echo "<br><a href=\"changepw.php\">Change your password</a>";
  echo "<p><a href=\"deleteres.php\">Delete your profile</a>";
}
?>


<? include ("footer.php"); ?>
