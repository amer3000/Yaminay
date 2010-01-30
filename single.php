<?php get_header(); ?>

<div id="content">
	<?php query_posts($query_string . "&orderby=title&order=ASC"); ?>
	<?php if(have_posts()) {
			while(have_posts()) {
				the_post();
			?>
			<div class="navigation">
				<ul>
					<li id="previous">
						<?php posts_nav_link(' ', '<img src="' . get_bloginfo('template_directory') .'/img/left.gif" />', ' '); ?>
					</li>
					<li id="next">
						<?php posts_nav_link(' ', ' ', '<img src="' . get_bloginfo('template_directory') .'/img/right.gif" />'); ?>
					</li>
				</ul>
			</div>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?></a>
				</h2>
				<div class="entry">
					<?php the_content(); ?>
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				</div>
				<?php the_tags( $before, $separator, $after ); ?>
			</div>
		<?php } ?>

	<?php } ?>
</div> <!-- closing div for content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
