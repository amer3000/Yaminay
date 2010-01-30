<?php get_header(); ?>

<div id="content">
	<?php query_posts($query_string . "&orderby=title&order=ASC"); ?>
	<?php if(have_posts()) {
			while(have_posts()) {
				the_post();
			?>

			<?include('navigation_arrows.php');?>

			<div class="post">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?></a>
				</h2>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php } ?>
	<?php } ?>
</div> <!-- closing div for content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
