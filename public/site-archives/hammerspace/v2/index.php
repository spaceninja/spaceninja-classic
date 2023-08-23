<html>
<!--

This design came online in February 2000, and stayed up until the server crash in April 2004. In September 2005, the site was re-launched with a new design, and this was one retired with four years of service under its belt.

-->

<head>
  <title>H A M M E R S P A C E</title>
</head>

<? include("random.image.php"); ?>

<body bgcolor="#6a776a" background="bg1.gif" text=white link=white vlink=white alink=white>

  <table border=0 width=100% height=100%>
    <tr>
      <td align=right valign=bottom>
        <table border=0 cellpadding=50>
          <tr>
            <td align=right>

              <a href="main.php"><? random_img_tag("big", "border=0"); ?></a>
              <br>
              <font size=1 face="verdana, arial, helvetica">Site updated <?= date("F j Y", filemtime("toc.php")); ?></font>

            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>


</html>