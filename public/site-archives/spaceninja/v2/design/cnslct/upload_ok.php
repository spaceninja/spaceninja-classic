<html>

<body bgcolor="#ccccff">
	<center>
		<h2>
			Thank you! Your resume was uploaded successfully!
		</h2>
	</center>
	<hr width="75%">

	<?

	/** mail (to, subject, text, additional_headers) **/

	$recipient = "wooterb@pdx.edu";
	$subject = "RESUME from $name";

	$text = "new resume uploaded (this is only a test)";

	$text = "
Applicant:  $name \r
Date:       $date \r
SSN:        $ssn \r
Address:    $curadd \r
Perm. Address:  $peradd\r
Telephone:  $phone\r
Alt. Phone#:    $alt\r
Email:      $email\r
Major:      $major\r
GPA:        $gpa\r
Graduates:  $grad\r
Hours desired:  $hours\r
CWSP?:      $cwsp\r
Position:   $position\r
Resume uploaded to:\r
" . chop(`pwd`) . "/resumes/$resname";

	$fp = fopen("resumes/" . $name . ".nfo", 'w');
	fwrite($fp, $text);
	fclose($fp);

	if (mail($recipient, $subject, $text)) {
		echo "<br>";
		echo "<b>mailed:</b> $recipient";
		/*
    if ($position == "Net") {
		if (mail("jon@pdx.edu", $subject, $text)){
			echo " and Jon Snyder";
		} else{
			echo ", <font color=red>failed to mail Jon Snyder. </font>";
		}
	}
    */
		if ($position == "Unix") {
			if (mail("dennis@pdx.edu", $subject, $text)) {
				echo " and Dennis X";
			} else {
				echo ", <font color=red>failed to mail Dennis. </font>";
			}
		}

		echo "<br><u>Content:</u><br>" . nl2br($text);
	} else {
		echo " <h2> <font color=red> ...BUT AN ERROR OCCURRED WHILE MAILING IT. </font> </h2><br> ";
		echo " contact <a href='mailto:scott@pdx.edu'> miles </a>";
	}
	?>


</html>