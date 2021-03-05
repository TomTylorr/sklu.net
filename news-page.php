<?php
get_header();
/*
  Template Name: Новина
 */
?>

    <main class="any-page-container">

        <ul>
            <?php $query = new WP_Query( [ 'category_name' => 'news' ] );?>
            <?php while ( $query->have_posts() ) { ?>

            <li class="post-item">
                <?php $query->the_post();?>
                <div class="post-left">
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('medium', array('class' => '')); ?>
                        <time datetime="2020-09-23" class="post-time"><?php the_time("j F Y"); ?></time>
                    </a>

                </div>
                <div class="post-right">
                    <a href="<?php the_permalink();?>">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <div class="post-description"><?php the_excerpt(); ?></div>
                    </a>
                    <a class="btn" href="<?php the_permalink();?>">Докладно</a>
                </div>
               <?php } ?>
            </li>
        </ul>










    </main>

<?php
get_footer();
