<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <title>Photo Page</title>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <style type="text/css">
    <!--
    body {
      background: #779977;
      color: black;
      text-align: center;
    }

    div.float {
      float: left;
      padding: 10px;
    }

    div.float img {
      border: 1px solid black;
    }

    div.float p {
      text-align: center;
      font: 9px verdana;
    }

    .clear {
      clear: both;
    }
    -->
  </style>
</head>

<body>

  <div id="container">

    <?

    $dh = opendir(".");
    while ($f = readdir($dh)) {

      if (eregi(".+lt\..+", $f)) {
        continue;
      } elseif (ereg("(\.gif|\.jpg)", $f)) {
        $flt = eregi_replace("([^[:space:]]+)(\.gif|\.jpg)", "\\1lt\\2", $f);
        show($f);
      }
    }

    function show($f)
    {
      global $flt;
      echo "<div class=\"float\"><a href=\"$f\"><img src=\"$flt\" border=\"0\" alt=\"$f\" /></a><p>$f</p></div>";
    }

    ?>

  </div>


</html>