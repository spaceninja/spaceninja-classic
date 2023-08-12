---
title: "How to Convert Your Old Wordpress Database to UTF8"
created: 2009-10-27
tags: 
  - characterencoding
  - databases
  - howto
  - latin1
  - mysql
  - upgrades
  - utf8
  - wordpress
authors: 
  - scott
---

When I upgraded my Wordpress installation recently, I ran into a chracter encoding problem. Long story short, it turns out that older Wordpress installations like mine tend to have been created in `latin1`, but the data is actually being saved in `UTF8`. If you update your `wp-config` file to a newer version, it adds a `DB_CHARSET` option, which will cause your site to puke, because the database character set doesn't match the data that's actually stored in it.

Thankfully, the fix is relatively simple, if a bit of a hassle:

1. From your command line, use the `mysqldump` command to export your database in `latin1` format. Since MySQL sees your database is already in `latin1` format, it won't re-encode it (which would break the `UTF8` data in the database). The command should look something like this:
    
    \[sql wraplines="true"\]mysqldump -u username -p --add-drop-table --default-character-set=latin1 databasename > databasename.sql\[/sql\]
    
    **Note:** You must do this from the command line, because PHPMyAdmin doesn't allow you to specify the characterset of the export file, so you will end up with re-encoded data, that will get scrambled and kill your database.
2. Copy that dump file somewhere safe for a backup, in case something goes wrong.
3. Using a text editor, open the MySQL dump file and replace all instances of `latin1` with `utf8`. There should be one reference in each `CREATE TABLE` line.
4. Import the database over the top of your existing one. Since you did a complete dump, with the `add-drop-table` option, this will drop all your existing tables, and recreate them. And since you changed the character sets, this will effectively update your database to `UTF8`. The command will look something like this:
    
    \[sql\]mysql -u username -p databasename < databasename.sql\[/sql\]

Now, if you're anything like me, those instructions are terrifying. But trust me that there is relatively little risk. The very first thing you're going to do is make a backup. If anything goes wrong, the worst case scenario is that you restore your backup, and you're back to square one. I can't tell you that it's totally safe, but I can assure you that I did this to two of my databases, and it went off without a hitch.
