CornerstoneWLA.org
=========================
Thanks for helping us build [CornerstoneWLA.org](http://cornerstonewla.org)! The structure of the site is based on the excellent [Skeleton WP Theme](https://github.com/simplethemes/skeleton_wp) from [SimpleThemes](http://simplethemes.com). It is built to be clean, intuitive, and responsive.

Here's what you need to do to get started...

Getting Started
-------------------------
If you're totally new to things, you'll first need to [set up Git](https://help.github.com/articles/set-up-git) & familiarize yourself with the basics somewhere like [Git Immersion](http://gitimmersion.com/) or [Pro Git](http://git-scm.com/book/en/Git-Basics). You'll also need to [sign up for an account on Github](https://github.com/signup/free) if you don't have one yet.

Once you've got everything set up, just clone our repository to your local machine: 
		
>```$ git clone git://github.com/CornerstoneWLA/cwla-site.git myproject --recursive```

Easy peasy!

Set Up WordPress
-------------------------
You'll need to run a local server like [MAMP](http://www.mamp.info/en/index.html) & a MySQL database to get WordPress running smoothly on your machine. If you need help with this, check out the [codex entry](http://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP) on the subject.

After you're created your database, all that's left is to create your local configuration file and add your database name to it. From your root directory:

>```$ cd config```

>```$ cp wp-config-sample.local.php wp-config.local.php```

Use a text editor to update the contents of `wp-config.local.php` to reflect the settings for your local database. Then create the `wp-config.salts.php` file:

>```$ cp wp-config-sample.salts.php wp-config.salts.php```

If you want, you can [update your salts using the automated WordPress tool](https://api.wordpress.org/secret-key/1.1/salt/), but this isn't necessary to run the site locally.

Once everything's up and running, just write some code and make your first commit!

>```$ git add .```

>```$ git commit -m "Initial commit"```

>```$ git push origin master```

Contributing
-------------------------
Once your changes have been pushed to your own Github repo, just [submit a pull request](https://help.github.com/articles/using-pull-requests) so that we can integrate your code with the official CWLA repository.

Alternatively, you can always just [send us your username](mailto:admin@cornerstonewla.org) if you want to be added as a member of the CWLA organization & be given push access for future updates.

Help Me!
-------------------------
Some places to go if you need help:
- [Skeleton Documentation](http://themes.simplethemes.com/skeleton/documentation)
- [Skeleton Forums](http://themes.simplethemes.com/skeleton/forums)
- [Stack Overflow](http://stackoverflow.com)
- [git-scm.com](http://git-scm.com/)
- [codex.wordpress.org](http://codex.wordpress.org/)
