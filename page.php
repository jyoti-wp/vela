<?php
/**
 * Single page.
 */

get_header();
?>
<div class="site">
	<?php get_template_part( 'template-parts/home/hero' ); ?>
	<div class="row">
		<div class="columns large-8 medium-12 small-12">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					// Display post content
					?>
					<article>
						<h1><?php the_title(); ?></h1>
						<div><?php the_content(); ?></div>
					</article>
					<?php
				endwhile;
			endif;
			?>
		</div>
		<div class="columns large-3 medium-12 small-12">
			<aside>
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</div>

<?php
get_footer();
?>
