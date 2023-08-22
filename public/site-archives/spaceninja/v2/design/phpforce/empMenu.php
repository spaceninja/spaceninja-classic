<?

include("dbinit.php");
sess("empid","empLogin.php");

$titlemsg = "Employer Menu";
include("header.php")
?>

  <h1 class="head">Employer Menu</h1>
  
  <a href="empSearchres.php?<?=SID?>"><font color="black" size="+1">Search Resumes</font></a>
  <blockquote>
  Search through the resumes uploaded by job seekers.  You can also get a 
  listing of <a href="empListres.php?<?=SID?>">all resumes</a>.
  </blockquote>  

  <a href="empAdd.php?<?=SID?>"><font color="black" size="+1">Add a job listing</font></a>
  <blockquote>
  Got a job you need to hire someone for?  Post your job listing here and
  it'll be made available to every job seeker who visits the site.
  </blockquote>
    
  <a href="empView.php?<?=SID?>"><font color="black" size="+1">View your posted job listings</font></a>
  <blockquote>
  Browse through a list of your currently posted jobs.  Make changes to
  them, or delete them from the database.
  </blockquote>
  
  <a href="empEmail.php?<?=SID?>"><font color="black" size="+1">Configure resume notifications</font></a>
  <blockquote>
  Set up your account to automatically email you when a new job seeker
  posts his resume.  You can fine-tune it to only email you about job
  seekers which match your criteria.
  </blockquote>
  
  <a href="empUpdate.php?<?=SID?>"><font color="black" size="+1">Update your information</font></a>
  <blockquote>
  Update your account information, including address, phone number, URL, etc.
  </blockquote>
  
  <a href="empChangePass.php?<?=SID?>"><font color="black" size="+1">Change your password</font></a>
  <blockquote>
  Set a new password for logging in to your account.
  </blockquote>

  <a href="empGfx.php?<?=SID?>"><font color="black" size="+1">Upload graphics</font></a>
  <blockquote>
  If you upload a graphic, such as a company logo or banner, it will
  show up in all of your job listings.
  </blockquote>


<?

include("footer.php");

?>
