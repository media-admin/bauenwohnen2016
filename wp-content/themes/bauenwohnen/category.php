<?php get_header(); ?>
<div class="inner">
	<h1 class="page">News & Aktuelles</h1>
    <div class="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="entry cat">    
	   	<?php if ( has_post_thumbnail()) { ?>    
    	<?php the_post_thumbnail('medium'); ?>
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    	
			<?php the_excerpt(); ?>
	    </div>
        <div style="clear:left;"></div>   
        <hr style="margin: 30px 0px;" />
     


    <?php } else { ?> 
    <div class="entry">       
    	<div class="blogleft">
    		
		    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-blog1'); ?></a>
    	</div>
    	<div class="blogright"><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    		<div class="post-info">
            	<span class="thetime">
				<i class="icon-calendar"></i>
				<?php the_time('d. M. Y') ?>
				</span>
				<span class="thecategory">
				<i class="icon-tags"></i>
				<?php the_category(', '); ?>
				</span>
			</div>
			<?php the_excerpt(); ?>

	    </div>
        </div>
	<div style="clear:left;"></div>        
    <div id="trenner"></div>
    <?php } ?>
	<?php endwhile; endif; ?>
    </div>
    </div><!-- main -->

 <div style="clear:left;"></div>
<?php get_footer(); ?>