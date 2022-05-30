<?php get_header(); ?>

<div class="slideshow"><?php
			$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array
?>

         	<div class="newsimage-cat" style="background-image:url(<?php echo $imgURL ?>);"></div></div>
    <div id="welle"></div>

	<div class="inner" style="margin-top: -250px; position:relative; z-index:102;">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
	<div class="main pro">
 <h1 class="page"><?php the_title(); ?></h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

<div style="clear:left;"></div>
</div>
<?php get_footer(); ?>