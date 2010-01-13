<?php get_header(); ?>

<div id="content">
	<?php if(have_posts()) {  
			while(have_posts()) { 
				the_post();                                                  
			?>
			<div class="post">
				<div class="entry">
					<?php the_content(); ?>
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				</div>
			</div>
		<?php } ?> 
	<?php } ?>
</div> <!-- closing div for content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?> 
