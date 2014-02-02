<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>
            <?php bloginfo('name'); ?>
            <?php wp_title(); ?>
        </title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/highlight.js/styles/bebber.css" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/tbebber_icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/tbebber_icon_ipad.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/tbebber_icon_iphone4.png" />
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr-latest.js"></script>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-756452-14']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="myHeader">
                <h1><span>TONY</span>BEBBER</h1>
                <ul id="nav">
                    <li class="home"><a href="http://tonybebber.com">Home</a></li>
                    <li>/</li>
                    <li class="about"><a href="http://tonybebber.com/about/">About</a></li>
                    <li>/</li>
                    <li class="blog"><a href="http://tonybebber.com/category/blog/">Blog</a></li>
                    <li>/</li>
                    <li class="projects"><a href="http://tonybebber.com/category/projects/">Projects</a></li>
                    <li>/</li>
                    <li class="resume"><a href="http://tonybebber.com/resume/">Resume</a></li>
                    <li class="lastSlash">/</li>
                    <li class="searchButton">Search</li>
                </ul>
            </div>
            <div id="searchContainer">
                <p>Search the site...</p>
                <div id="searchWrap">
                    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                </div>
            </div>