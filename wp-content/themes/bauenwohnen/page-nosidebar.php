
<?php 
/*
Template Name: Ohne Seitenleiste
*/
get_header(); ?>
<div class="inner">
	<div class="main">
    <h1 class="page"><?php the_title(); ?></h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="entry">
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
 
	<div style="clear:left;"></div>
   	</div><!-- main -->

<div style="clear:left;"></div>
</div>
<?php get_footer(); ?>