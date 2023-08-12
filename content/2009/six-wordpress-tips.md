---
title: "Six Wordpress Tips from the Pop Art Blog Redesign"
created: 2009-07-10
categories: 
  - professional
tags: 
  - atom
  - excerpts
  - feeds
  - gravatars
  - markup
  - php
  - profiles
  - rss
  - tips
  - twitter
  - wordpress
authors: 
  - scott
---

When we converted the Pop Art Blog to use Wordpress, I learned some clever tricks that I would like to share with you. If you like what we've done around here, you might be interested in some of these techniques for your own site.

### Use RSS Excerpts to Strip All HTML

\[php\] /\* just like the\_excerpt, but really strips all the HTML, including BR tags \*/ <p><?php the\_excerpt\_rss(); ?></p> \[/php\]

We wanted to display a post excerpt on most pages. Normally, I would just use wordpress' `the_excerpt` function. It automatically displays the post excerpt if it exists, and if not, then it grabs the first 50 words of the post, and even strips the HTML! Sounds great, right? Except for one thing -- it doesn't strip line breaks, so instead of a page full of single-paragraph excerpts, I had several posts with two small paragraphs displaying. Not a big deal, but it was messing up our design.

After doing a little digging in the [wordpress documentation](http://codex.wordpress.org/), I found that `the_excerpt_rss` does exactly what I was looking for. It's intended to be used in RSS templates, but you can use it in your regular pages and it works just as well. The only hiccup is that you'll need to wrap it in a `<p>` yourself.

### Use the Nickname Field for Job Titles

\[php\] <?php the\_author\_meta('nickname'); ?> \[/php\]

Our design shows the job title under everyone's name. There's no "job title" field in the user accounts, but I was able to repurpose the nickname field. To display it in the site, just use the code shown above in your post templates. Remember, the people looking at your site won't know that you're using the "wrong" database field! (You know, unless you tell them, like I'm doing.)

### Bit.ly Shortener for Twitter Links

\[php\] /\* Bit.ly URL Shortener Automatically shorten a URL using the Bit.ly API based on code from http://davidwalsh.name/bitly-php \*/ function make\_bitly\_url($url) { $login = 'YOUR BIT.LY LOGIN'; $appkey = 'YOUR BIT.LY API KEY'; $format = 'xml'; $version = '2.0.1'; $bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format; $response = file\_get\_contents($bitly); //parse depending on desired format if(strtolower($format) == 'json') { $json = @json\_decode($response,true); return $json\['results'\]\[$url\]\['shortUrl'\]; } else { //xml $xml = simplexml\_load\_string($response); return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash; } } \[/php\]

Adding a "retweet this" link at the bottom of every post is pretty easy. You just link to twitter.com and pass a "status" query string in the URL with whatever you want their tweet to include -- namely, the URL to the post they're retweeting. But our URLs can get pretty lengthy, since they include the post title. Obviously, with Twitter's 140-character limit, every character counts. To get around this, I found some code by [David Walsh](http://davidwalsh.name/bitly-php) to make a [bit.ly](http://bit.ly/) short URL. It works great, but you'll need to register for an API key on their site to use it. This code goes in your `functions.php` file, and then you can call it from any post loop like this:

\[php\] <?php echo make\_bitly\_url(get\_permalink()); ?> \[/php\]

### Use a Custom Default Gravatar

\[php\] /\* Add new default avatars based on code from http://wpengineer.com/add-avatar-to-wordpress-default/ \*/ if ( !function\_exists('fb\_addgravatar') ) { function fb\_addgravatar( $avatar\_defaults ) { $stormtrooper = get\_bloginfo('template\_directory').'/images/avatar.png'; $avatar\_defaults\[$stormtrooper\] = 'Storm Trooper'; return $avatar\_defaults; } add\_filter( 'avatar\_defaults', 'fb\_addgravatar' ); } \[/php\]

Wordpress' built-in support for gravatars in comments is fantastic, but if your commenters don't have a gravatar account, the default avatar will be displayed. Wordpress lets you choose between a simple gray silhouette or several dynamically generated icons, none of which really fit our design. Luckily, I found this code that lets you add your own default avatar to the list -- in our case, a lovely photo of a storm trooper. This code goes in your `functions.php` file, and it adds a new option to the default gravatar list in your admin area.

### Use HTML in User Profiles

\[php\] /\* Turn off HTML filter for user profiles \*/ remove\_filter('pre\_user\_description', 'wp\_filter\_kses'); \[/php\]

Our [fancy profile pages](http://blogs.popart.com/author/scottvandehey/) use the "Biographical Info" field in the user profiles. The only problem is that by default, wordpress strips any HTML from it. You can disable that feature by adding this bit of code to your `functions.php` file.

### Add More RSS Feeds

\[php\] <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Full Posts" href="<?php bloginfo('atom\_url'); ?>" /> <?php // add comments feed on single-post pages if (is\_single()) { while (have\_posts()) : the\_post(); if ('open' == $post->comment\_status) : /\* If comments are open \*/ ?> <link rel="alternate" type="application/atom+xml" title="Comments on <?php the\_title(); ?>" href="<?php bloginfo('url'); ?>/index.php?feed=atom&amp;p=<?php the\_ID(); ?>" /> <?php endif; endwhile; rewind\_posts(); // add category feed on category archives } else if (is\_category()) { $category = get\_the\_category(); ?> <link rel="alternate" type="application/atom+xml" title="Posts in the <?php echo $category\[0\]->cat\_name; ?> category" href="<?php echo get\_category\_feed\_link( $category\[0\]->cat\_ID, 'atom' ); ?>" /> <?php // add tag feed on tag archives } else if (is\_tag()) { ?> <link rel="alternate" type="application/atom+xml" title="Posts tagged with <?php single\_tag\_title(); ?>" href="<?php echo get\_tag\_feed\_link( get\_query\_var('tag\_id'), 'atom' ); ?>" /> <?php // add author feed on author pages } else if (is\_author()) { if(isset($\_GET\['author\_name'\])) : $curauth = get\_userdatabylogin($author\_name); else : $curauth = get\_userdata(intval($author)); endif; $authorfeedlink = get\_author\_feed\_link( $curauth->ID, 'atom' ); ?> <link rel="alternate" type="application/atom+xml" title="Posts by <?php echo $curauth->display\_name; ?>" href="<?php echo $authorfeedlink; ?>" /> <?php } ?> \[/php\]

Finally, one of the best (and relatively unknown) features of wordpress is that you can get an RSS feed for just about every page on the site, just by adding `/feed/` to the end of the URL. I wanted to take advantage of this feature to add `link` elements for those special feeds on different pages -- for example, a feed for an author's posts on their profile page, or for comments on a post on that post's page. The above code is a little convoluted, but it includes all the logic to add the following feeds on the appropriate pages:

- Complete blog feed on every page
- Comments feed on individual post pages
- Category feeds on category pages
- Tag feeds on tag pages
- Author feeds on author profile pages

Note that I've set this up to provide Atom feeds, but you can change it by replacing every instance of `atom` with `rss2`. This code goes in your `header.php` file, near the rest of your `meta` and `link` elements.

**Note:** This was originally posted on [my work blog](http://blogs.popart.com/author/scottvandehey/), and I'm re-posting it here for archival purposes.
