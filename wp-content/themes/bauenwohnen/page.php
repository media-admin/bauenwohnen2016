<?php get_header(); ?>

<div class="inner">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
	<div class="main">
    <h1 class="page"><?php the_title(); ?></h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="entry page1">
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

 	<div class="sidebar color">
      <?php get_sidebar(); ?>
   	</div><!-- sidebar -->
	<div style="clear:left;"></div>
   	</div><!-- main -->

<div style="clear:left;"></div>
</div>
<?php get_footer(); ?>