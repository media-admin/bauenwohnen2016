<?php 
/*
Template Name: Team
*/
get_header(); ?>
<div class="pageheading">
	<div class="inner">
	<h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="inner">
	<div class="main team">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="entry page">
         	<?php the_post_thumbnail('full'); ?>
            <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>
      <?php
         /*
          * Kommentare sind auf Seiten deaktiviert.
          * Möchtest du die Kommentarfunktion auf Seiten aktivieren, entferne einfach die beiden "//"-Zeichen vor "comments_template();"
          */
 
         //comments_template();
      ?>
 
   </div><!-- main -->
 
   <div class="sidebar">
      <?php get_sidebar(); ?>
   </div><!-- sidebar --> 
<div style="clear:left;"></div>
</div>
<?php get_footer(); ?>