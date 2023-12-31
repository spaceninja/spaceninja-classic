---
title: 'How to Get Your Most Recent Twitter Posts Using PHP with Caching'
date: 2009-07-01
categories:
  - professional
tags:
  - api
  - cache
  - howto
  - php
  - twitter
authors:
  - scott
---

When we started redesigning the Pop Art blog, one of the chief requirements was to integrate everyone's Twitter feeds into the site. In addition to the Pop Art Twitter feed in the sidebar, we wanted to add individual twitter feeds on the profile pages. The problem is that the javascript code that Twitter provides can only be called once in a single page, or it gets confused.

Since we were switching to Wordpress, I checked out a bunch of Twitter plugins, but ultimately found them all to be unreliable or just missing features. In the end, I hacked together one of my own, based heavily on code by [Ryan Barr](http://spookyismy.name/old-entries/2009/1/25/latest-twitter-update-with-phprss-part-three.html). His PHP script was very nearly perfect, but I ran into three problems.

First, his script echoed out the exact date and time of the tweet, but I wanted the fancy "2 hours ago" style dates. To do that, I used a chunk of code from [Stack Overflow](http://stackoverflow.com/questions/11/how-do-i-calculate-relative-time/501415#501415). Now, I'm far from an advanced PHP programmer, so I'm sure that this code could be cleaned up and condensed down to something like 12 characters, but I like this because it works, and it's very easy for a mid-level programmer like myself to understand.

```php
/*
  Relative Time Function
  based on code from http://stackoverflow.com/questions/11/how-do-i-calculate-relative-time/501415#501415
  For use in the "Parse Twitter Feeds" code below
*/
define("SECOND", 1);
define("MINUTE", 60 * SECOND);
define("HOUR", 60 * MINUTE);
define("DAY", 24 * HOUR);
define("MONTH", 30 * DAY);
function relativeTime($time) {
  $delta = strtotime('+2 hours') - $time;
  if ($delta < 2 * MINUTE) { return "1 min ago"; }
  if ($delta < 45 * MINUTE) { return floor($delta / MINUTE) . " min ago"; }
  if ($delta < 90 * MINUTE) { return "1 hour ago"; }
  if ($delta < 24 * HOUR) { return floor($delta / HOUR) . " hours ago"; }
  if ($delta < 48 * HOUR) { return "yesterday"; }
  if ($delta < 30 * DAY) { return floor($delta / DAY) . " days ago"; }
  if ($delta < 12 * MONTH) {
    $months = floor($delta / DAY / 30);
    return $months <= 1 ? "1 month ago" : $months . " months ago";
  } else {
    $years = floor($delta / DAY / 365);
    return $years <= 1 ? "1 year ago" : $years . " years ago";
  }
}
```

Secondly, and most important, Ryan's code didn't cache the results. That's obviously bad form, but I didn't really think about trying to fix it until [Apple's WWDC traffic drove Twitter to a standstill](http://twitter.com/spaceninja/status/2079700468) while I was testing our new site. Realizing that our Twitter feeds would die anytime anything big happened on the internet motivated me, and I was able to integrate some caching code from [Kien Tran](http://wiki.kientran.com/doku.php?id=projects:twitterbadge) and [Snipplr](http://snipplr.com/view/8156/twitter-cache/) that meshed well with Ryan's existing code.

When I was done, I had a fully functional script that created a cache file for each twitter feed, and only tried to update it every ten minutes. I was especially pleased to discover that it worked when Twitter again ground to a halt due to the Iran elections and Michael Jackson's death in the last few weeks.

So here's the final code that we're using on the Pop Art blog. It looks pretty overwhelming, but it's basically broken down into three sections. First, it checks to see if the cache file exists, and whether it needs to be updated. Second, it parses the XML from the cache file to create a series of variables. Finally, it echos out a chunk of HTML for each tweet, or an error message if there aren't any.

```php
<?php
/*
  Parse Twitter Feeds
  based on code from http://spookyismy.name/old-entries/2009/1/25/latest-twitter-update-with-phprss-part-three.html
  and cache code from http://snipplr.com/view/8156/twitter-cache/
  and other cache code from http://wiki.kientran.com/doku.php?id=projects:twitterbadge
*/
function parse_cache_feed($usernames, $limit) {
  $username_for_feed = str_replace(" ", "+OR+from%3A", $usernames);
  $feed = "http://search.twitter.com/search.atom?q=from%3A" . $username_for_feed . "&rpp=" . $limit;
  $usernames_for_file = str_replace(" ", "-", $usernames);
  $cache_file = dirname(__FILE__).'/cache/' . $usernames_for_file . '-twitter-cache';
  $last = filemtime($cache_file); $now = time();
  $interval = 600; // ten minutes
  // check the cache file
  if ( !$last || (( $now - $last ) > $interval) ) {
    // cache file doesn't exist, or is old, so refresh it
    $cache_rss = file_get_contents($feed);
    if (!$cache_rss) {
      // we didn't get anything back from twitter
      echo "<!-- ERROR: Twitter feed was blank! Using cache file. -->";
    } else {
      // we got good results from twitter
      echo "<!-- SUCCESS: Twitter feed used to update cache file -->";
      $cache_static = fopen($cache_file, 'wb');
      fwrite($cache_static, serialize($cache_rss));
      fclose($cache_static);
    }
    // read from the cache file
    $rss = @unserialize(file_get_contents($cache_file));
  } else {
    // cache file is fresh enough, so read from it
    echo "<!-- SUCCESS: Cache file was recent enough to read from -->";
    $rss = @unserialize(file_get_contents($cache_file));
  }
  // clean up and output the twitter feed
  $feed = str_replace("&amp;", "&", $rss);
  $feed = str_replace("&lt;", "<", $feed);
  $feed = str_replace("&gt;", ">", $feed);
  $clean = explode("<entry>", $feed);
  $clean = str_replace("&quot;", "'", $clean);
  $clean = str_replace("&apos;", "'", $clean);
  $amount = count($clean) - 1;
  if ($amount) {
    // are there any tweets?
    for ($i = 1; $i <= $amount; $i++) {
      $entry_close = explode("</entry>", $clean[$i]);
      $clean_content_1 = explode("<content type='html'>", $entry_close[0]);
      $clean_content = explode("</content>", $clean_content_1[1]);
      $clean_name_2 = explode("<name>", $entry_close[0]);
      $clean_name_1 = explode("(", $clean_name_2[1]);
      $clean_name = explode(")</name>", $clean_name_1[1]);
      $clean_user = explode(" (", $clean_name_2[1]);
      $clean_lower_user = strtolower($clean_user[0]);
      $clean_uri_1 = explode("<uri>", $entry_close[0]);
      $clean_uri = explode("</uri>", $clean_uri_1[1]);
      $clean_time_1 = explode("<published>", $entry_close[0]);
      $clean_time = explode("</published>", $clean_time_1[1]);
      $unix_time = strtotime($clean_time[0]);
      $pretty_time = relativeTime($unix_time);
?>
  <blockquote>
    <p class="tweet">
      <?php echo $clean_content[0]; ?><br />
      <small><?php echo $pretty\_time; ?></small>
    </p>
  </blockquote>
<?php
    }
  } else {
    // if there aren't any tweets
?>
  <blockquote>
    <p class="tweet">
      I have been terribly busy recently shoveling pixels and clearing
      out the tubes that make up the Internet, so I haven’t had a chance
      to tweet recently. I am truly very sorry about this, so with just
      a bit more prodding I’ll update as soon as possible.
    </p>
  </blockquote>
<?php
  }
}
?>
```

You'll notice that I'm creating more variables than I actually need, noticeably the ones for the user names. On the Pop Art blog, we're always showing just one person's tweets at a time, but the code is built to allow you to pass a list of twitter accounts, and it'll pull them all in. We used that code on another website, and I just left it in place here in case I wanted to use it at some point in the future. Since the variables already exist, I would just need to add them to the output HTML and they would show up.

Which brings me to the final problem I ran into. Ryan's script uses the Twitter search API, which is great because it gives you the option of pulling in multiple twitter accounts. The downside of the search API is that it will only return recent tweets (the documentation says 7 days, but it looks like it actually returns two weeks).

I did some digging into the API documentation, and there's no way around this. Twitter has two APIs, the search API and the REST API. The search API is more full-featured, including search operators and automatic link highlighting, with the downside that it only searches recent tweets. The REST API will return all tweets for a user, but it won't highlight links, merge multiple twitter feeds, and worst of all, it requires a login.

Given those restrictions, I left the code using the search API, despite the restriction. To make the best of the situation, we wrote a funny error message for users with no tweets, and asked everyone linking their Twitter account to post at least once a week.

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/author/scottvandehey/), and I'm re-posting it here for archival purposes.
