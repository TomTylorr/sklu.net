<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fasadmg
 */
get_header();
?>
    <main class="any-page-container">

            <section class="search-result">
                <ul class="search-result__items">
                    <?php
                    if (have_posts()) {
                    while (have_posts()) {
                        ?>

                        <?php the_post(); ?>
                        <li class="search-result__item">
                            <a class="search-result__link" href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'search-result__img')); ?>
                                <h2 class="search-result__title"><?php the_title(); ?></h2>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <?php
                } else {
                    echo wpautop('По вашему запросу ничего не найдено');
                }
                ?>
                <?php the_posts_pagination(); ?>
            </section>

    </main>

<?php
get_footer();
