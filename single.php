<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sklunetWC
 */

get_header();
?>

	<main id="primary" class="any-page-container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
    ?>
        <div class="single-pagination">
            <?php
            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle single-pagination-post">' . esc_html__( 'Попередній:', 'sklunetwc' ) . '</span> <span class="nav-title single-pagination-post-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle single-pagination-post">' . esc_html__( '
наступна:', 'sklunetwc' ) . '</span> <span class="nav-title single-pagination-post-title">%title</span>',
                )
            );

            ?>
        </div>

<?php
			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
