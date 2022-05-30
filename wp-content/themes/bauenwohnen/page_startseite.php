
<?php 
/*
Template Name: startseite
*/
get_header(); ?>
	<div class="slideshow">
        <?php echo do_shortcode("[rev_slider alias='startseite'][/rev_slider]"); ?>
    </div>
    <div id="welle"></div>

	<div class="inner" style="margin-top: -250px; position:relative; z-index:102;">
	<div class="main">
    <div class="button">
    <?php
if(is_active_sidebar('button')){
dynamic_sidebar('button');
}
?>
    </div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="entry">
            <?php the_content(); ?>
         </div>
    <?php endwhile; endif; ?>
    </div>
	</div>
	<div style="clear:left;"></div>
    </div>

    

<?php get_footer(); ?>