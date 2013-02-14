 <?php get_header(); ?>   
    <div class="clearfix">   
		<section class="main">
			<!--<img src="wp-content/themes/weektwo/images/hero.jpg" />-->
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg" />
			<?php if ( have_posts() ) : while ( have_posts () ) : the_post(); ?>
			
			<section>
				<a href="<?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1></a>
				<?php the_content(); ?>
					<!--<p>Orange Peel is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
					<p>We also make smoothies on the side.</p>-->
			</section>
			
			<?php endwhile; else :?>
				<p><?php _e('Sorry, there is no content at the moment'); ?></p>
			<?php endif; ?>
		</section>
		<!-- add declaration to get sidebar-->
		<?php get_sidebar(); ?>
	</div>
 <?php get_footer(); ?>  
