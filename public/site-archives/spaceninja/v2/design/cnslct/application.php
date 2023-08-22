<html>
<head>
<title>employment form</title>
</head>
<body bgcolor=white text=white>

<table border=0 width="100%" height="100%">
<tr><td align=center valign=middle>

<form enctype = "multipart/form-data" method =post action="resume.php">
<table border=0 cellpadding=4 cellspacing=2>

<tr>
<td colspan=2 bgcolor="#336633" align=center>
<b>CNS Employment Application</b></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Date:</td>
<td bgcolor=gray align=left>
	<?
	$today = date("m/d/y");
	echo "<input type=text size=40 name=\"date\" value = $today ></td>"
	?>
</tr>

<tr>
<td bgcolor="#336633" align=right>Name:</td>
<td bgcolor=gray align=left><input type=text size=40 name="name"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>SSN/Student ID:</td>
<td bgcolor=gray align=left><input type=text size=40 name="ssn"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Current Address:</td>
<td bgcolor=gray align=left><input type=text size=40 name="curadd"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Permanent Address:</td>
<td bgcolor=gray align=left><input type=text size=40 name="peradd"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Telephone Number:</td>
<td bgcolor=gray align=left><input type=text size=40 name="phone"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Alternate Number:</td>
<td bgcolor=gray align=left><input type=text size=40 name="alt"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Email Address:</td>
<td bgcolor=gray align=left><input type=text size=40 name="email"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Major:</td>
<td bgcolor=gray align=left><input type=text size=40 name="major"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Approximate GPA:</td>
<td bgcolor=gray align=left><input type=text size=40 name="gpa"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Expected Graduation Date:</td>
<td bgcolor=gray align=left><input type=text size=40 name="grad"> If your <br>
graduation date is 3 months or less from now, please do not apply.
</td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Are you College Work Study (CWSP)?<br>(not required for employment)</td>
<td bgcolor=gray align=left><input type=text size=40 name="cwsp"></td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Position desired:</td>
<td bgcolor=gray align=left>
	<select name="position">
		<option value="numbskull"> --Select One--
		<option value="NT/2000"> NT/2000 Technician
<!--		<option value="Mac"> Mac Technician
		<option value="OfficeCoordinator"> Office Coordinator
-->          <option value="Unix"> Unix Technician
	</select> Please note that NT/2000 interviews<br>
will be conducted during two sessions: May 21 - June 8 and <br>
June 25 - July 13.  Hiring will take place at the end of each round.


</td>
</tr>

<tr>
<td bgcolor="#336633" align=right>Hours per Week you would like to work:</td>
<td bgcolor=gray align=left><input type=text size=40 name="hours"></td>
</tr>
<tr>
<td bgcolor="#336633" align=right>Attach a resume in Microsoft Word, RTF, or ASCII format:</td>
<td bgcolor=gray align=left><input type=file size=40 name="resume"></td>
</tr>

</table>

<input type=hidden name=formname value=employment>
<input type="submit" value="Continue">
</form>

</td></tr></table>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
  _uacct = "UA-588310-1";
  urchinTracker();
</script>
<script src="/mint/?js" type="text/javascript"></script>\n</body>

</html>

