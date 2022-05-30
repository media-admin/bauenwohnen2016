<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" lang="de">
<head profile="https://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'> -->



<?php wp_head(); ?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->

<script>
jQuery(document).ready(function(){
        jQuery.each($(".column"), function(i, val) {
            var queryString = ".column:nth(" + i + ") a[rel^='prettyPhoto']";
            jQuery(queryString).prettyPhoto({animation_speed:'normal',theme:'light_square', social_tools: false});
        });
    });
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62149649-1', 'auto');
  ga('send', 'pageview');

</script>
-->

</head>

<body>
  <!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=73151553091&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->
<div id="wrapper">

	<div id="header">

		<div class="inner1">
    		<div id="logo">
            	<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>
            </div>

            <div id="hauptnavi">
    			<?php wp_nav_menu('depth=2'); ?>
			</div>

            <div style="clear:left;"></div>

        </div>

	</div>