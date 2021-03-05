<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sklunetWC
 */

get_header();
?>

	<main id="primary" class="site-main any-page-container">

        <h1 class="page-404">404</h1>

        <p class="page-404__subtitle">Вибачте, запитувана сторінка не знайдена.</p>

        <p class="page-404__description">Можливо вона була видалена або навіть ніколи не існувала.<br>
            Щоб знайти потрібну інформацію, рекомендуємо перейти </p>
        <a class="page-404__to-index" href="<?php echo esc_url( home_url( '/' ) ); ?>">На головну сторінку</a>
	</main><!-- #main -->

<?php
get_footer();
