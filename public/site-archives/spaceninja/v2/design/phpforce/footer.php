<!-- BEGIN FOOTER -->

</td>
</tr>

</table>

</td>
<td rowspan=3><img src=images/x.gif width=10 height=1></td>
</tr>

<tr>
  <td align=left valign=bottom bgcolor="#c0c0c0"><img src=images/llu.gif></td>
  <td bgcolor="#c0c0c0"><img src=images/x.gif width=1 height=1></td>
  <td align=right valign=bottom bgcolor="#c0c0c0"><img src=images/lru.gif></td>
</tr>

<tr>
  <td align=left valign=top bgcolor=black><img src=images/lll.gif></td>
  <td bgcolor=black align=center valign=middle width=100% class=orange>
    <? /*

  if( !$dbh ) {
    include("dbinit.php");
  }

  $dbh_res = mysql_query( "select count(*) from resume where public=1" );
  list($resumecount)=mysql_fetch_row($dbh_res);

  $dbh_res = mysql_query( "select count(*) from jobs" );
  list($jobcount)=mysql_fetch_row($dbh_res);

  if( $resumecount == 1 ) $restext = "is 1 resume";
                     else $restext = "are $resumecount resumes";

  if( $jobcount == 1 ) $jobtext = "1 currently active job.";
                  else $jobtext = "$jobcount currently active jobs.";

  echo "There $restext and $jobcount currently active jobs.";

   */ ?>
    There are 7 resumes and 14 currently active jobs.
  </td>
  <td align=right valign=top bgcolor=black><img src=images/lrl.gif></td>
</tr>

</table>

</td>
</tr>

</table>
</td>
</tr>
</table>

<?
if (!$HTTP_COOKIE_VARS['username'])
  echo "</form>\n";
?>

</html>