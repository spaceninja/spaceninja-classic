<? /*
  $dbh = mysql_connect("localhost","steve","happy");
  mysql_select_db("killingmachines",$dbh);

  $dbh_res = mysql_query( "select id from data where area='quotes'" );
  while( list($newid)=mysql_fetch_row($dbh_res) )
    $ids[]=$newid;

  mt_srand((double)microtime()*1000000);
  for($i=0; $i<3; $i++ ) {
    $id = $ids[ mt_rand(0,count($ids)-1) ];
    $dbh_res = mysql_query( "select entry from data where id='$id'" );
    list($entry)=mysql_fetch_row($dbh_res);
    $quote[]=$entry;
  }

   */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <META NAME="description" CONTENT="Space Ninja Design: Affordable Quality Web Design">
  <META NAME="keywords" CONTENT="space, ninja, web, design, scott, vandehey, affordable, quality, html">
  <META NAME="authors" CONTENT="Space Ninja Design">
  <TITLE>Who Is Space Ninja Design?</TITLE>
  <STYLE TYPE="text/css">
    <!--
    body {
      background-color: #e9ecf6;
      color: black;
      margin: 0px;
    }

    a:link {
      color: #4d4dff;
    }

    a:active {
      color: #0000ff;
    }

    a:visited {
      color: #8f8fbd;
    }

    p,
    td {
      font-family: verdana, serif;
      font-size: 10pt;
    }

    .bang {
      height: 125px;
      background-image: url(bgh.gif);
    }

    .fullscreen {
      width: 100%;
      height: 100%;
    }
    -->
  </STYLE>
</HEAD>

<? include("random.image.php");
include("random.quote.php"); ?>

<body>

  <table border=0 cellpadding=0 cellspacing=0 width="100%">
    <tr>
      <td>&nbsp;

        <table border=0 cellpadding=0 cellspacing=0 width="100%">

          <tr>
            <td align=right width=175 class="bang"><img src="w.gif" alt="who is spaceninja design?"></td>
            <td class="bang">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign=top align=left>

              <table border=0 cellpadding=5 cellspacing=5 width=600>
                <tr>
                  <td colspan=3>
                    <FONT size=4><b>Who Is Space Ninja Design?</b></font>
                    <!--<br><i>this page generated at random. Hit reload for new quotes.</i>-->
                  </td>
                </tr>

                <TR>
                  <TD COLSPAN=3>&nbsp;</TD>
                </TR>

                <TR align=center valign=middle>

                  <TD width="33%"><? random_image("scott"); ?></TD>
                  <TD width="34%"><? random_image("miles"); ?></TD>
                  <TD width="33%"><? random_image("steve"); ?></TD>

                </TR>
                <TR align=left valign=top>

                  <TD>
                    <FONT SIZE=4><B>Scott Vandehey</B></FONT>
                    <P><I><? /* echo $quote[0]; */ ?>
                        "Don't hate the Media, become the Media!"
                        <br>-- Jello Biafra
                      </I>
                  </TD>

                  <TD>
                    <FONT SIZE=4><B>Miles Johnson</B></FONT>
                    <P><I><? /* echo $quote[1]; */ ?>
                        "Truth plus lies always equals lies."
                        <br>-- Bruce Sterling
                      </I>
                  </TD>

                  <TD>
                    <FONT SIZE=4><B>Steve Havelka</B></FONT>
                    <P><I><? /* echo $quote[2]; */ ?>
                        "We have art that we do not die of the truth."
                        <br>-- Nietzsche
                      </I>
                  </TD>

                </TR>

                <TR>
                  <TD COLSPAN=3>
                    <b>I'm Sold! How Do I Sign Up?</b>
                    <br>Just email us at <A HREF="mailto:accounts@spaceninja.com">accounts@spaceninja.com</A>.
                  </TD>
                </TR>

                <tr>
                  <td colspan=3><a href="index.html">&lt;&lt; back</a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>
        </TABLE>

      </TD>
    </TR>
  </TABLE>


</HTML>