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
   	<?php echo do_shortcode('[go_portfolio id="Startseite"]'); ?>

    <div style="clear:left;"></div>
	</div><!-- main -->

<div style="clear:left;"></div>
</div>
<?php get_footer(); ?>