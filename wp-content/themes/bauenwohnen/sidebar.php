<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<h2>Suche</h2>
<p>
<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
	<input type="submit" id="search_submit" value="Suchen" />
</form>
</p>
<h2>Kategorien</h2>
<ul class="sidebar">
   <?php wp_list_categories('orderby=name&order=ASC&title_li='); ?>
</ul>
 
<h2>Archiv</h2>
<ul class="sidebar">
   <?php wp_get_archives('type=monthly'); ?>
</ul>
 
<h2>Blogroll</h2>
<ul class="sidebar">
   <?php wp_list_bookmarks(); ?>
</ul>

<?php endif; ?>