<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootsmooth-wordpress-uikit
 */

get_header(); ?>
<div id="content" class="site-content  uk-container uk-container-center uk-margin-top">
	<div id="primary" class="content-area uk-grid">
		<main id="main" class="site-main uk-width-medium-3-4" role="main">
		
		<?php
		if ( have_posts() ) :
		?>

			<h1>People</h1>
			
			<div class="uk-grid" data-uk-grid="{controls: '#grid-filters'}">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>

				<div class="uk-width-small-1-2 uk-width-medium-1-3">
					<div class="uk-panel uk-panel-box">
						<?php
							$image = get_field('image');
							if( !empty($image) ):
						?>
							<img class="uk-border-circle" src="<?php echo $image['url']; ?>" />
						<?php endif; ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_field('job_title'); ?></p>
					</div>
				</div>
			<?php endwhile;?>
			</div>
			
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<div class="uk-width-medium-1-4">
			<?php get_sidebar(); ?>
		</div><!-- #sidebar -->
	</div><!-- #primary -->
</div>
<?php 
get_footer();
