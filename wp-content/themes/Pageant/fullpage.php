<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 Template name: Fullpage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="sub-header">
	<div class="container">
		<div class="row">
			<header class="page-header col-md-12">
				<h2 class="page-title"> <?php the_title(); ?> </h2>
			</header><!-- .page-header -->			
		</div>
	</div>
</div>
<div class="container"> <div class="row"> 
	<div class="col-md-12"> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

</div></div>
<?php get_footer(); ?>
