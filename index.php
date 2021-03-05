<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sklunetWC
 */

get_header();
?>

    <main class="main-container">
        <section class="slider">
            <img class="slider-img" src="<?php echo get_template_directory_uri();?>/assets/img/bg/pg13.jpg" alt="Фотография кухни">
            <div class="slider-text-container">
                <h2 class="slider-text-title">Скіналі для кухні</h2>
                <p class="slider-text-title2">Зручний каталог з більш ніж 140 зображень</p>
                <p class="slider-text">Зверніть увагу: через індивідуальні налаштування вашого <br>
                    монітора можливі розбіжності в точності передачі кольорів!</p>
                <a class="btn" href="https://drive.google.com/drive/folders/1tzQMgdf4RnzEGJi9CZmM6lf6sKliwmGh">Відкрити каталог</a>

            </div>
<!--            <h2 class="visually-hidden">Слайдер</h2>-->
<!--            <ul class="slider-container">-->
<!--                <li class="slider-item">-->
<!--                    <a class="slider-item_link" href="#">-->
<!--                        <img class="slider-item__img" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/slider/slider1.jpg" alt="">-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
        </section>

        <section class="kitchen-gallery">
            <h1 class="news__title">Наші фартухи в кухнях</h1>
            <div class="owl-carousel owl-theme">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/1.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/2.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/3.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/4.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/5.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/6.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/7.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/8.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/9.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/10.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/11.jpg" alt="фото кухни с фартуком">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-kitchen/12.jpg" alt="фото кухни с фартуком">
            </div>
        </section>

    <section class="advantages">
        <h2 class="advantages-title">Онови робочу зону кухні за годину!</h2>
        <div class="advantages-container">

            <div class="advantages-left-container">
                <img class="advantages-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages/kitchen2.jpg" alt="">
            </div>
            <div class="advantages-right-container">
                <p class="advantages-title2">Кухонні панелі з хдф - <br>
                    це новий матеріал високої міцності,<br>
                    надійніший за мдф і дешевше плитки
                </p>
                <p class="advantages-title3">Переваги</p>
                <ul class="advantages-lists">
                    <li class="advantages-item">витримує високі температури</li>
                    <li class="advantages-item">стійкі до стирання, корозії і грибків</li>
                    <li class="advantages-item">ідеальні розміри (можливо підрізати
                        під Вашу кухню)</li>
                    <li class="advantages-item">яскраві дизайни</li>
                    <li class="advantages-item">легкість установки : одразу клеїмо на
                        стіну чи стару плитку</li>
                    <li class="advantages-item">зручно вирізати отвори під розетку</li>
                    <li class="advantages-item">доступна вартість</li>
                </ul>
                <div class="advantages-description">
                    <p>Ціна панелі для фіз. осіб, меблевих компаній і дизайнерів є індивідуальною.</p>
                </div>
            </div>

        </div>
    </section>

        <section class="category">
            <h2 class="news__title">Серія фартуха</h2>
            <ul class="category-items">
                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('18') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pg/pg4.jpg" alt="">
                        <h3 class="category-item__title">PG
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>


                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('19') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/bs/BS48.jpg" alt="">
                        <h3 class="category-item__title">BS
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>
                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('20') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pl/pl04.jpg" alt="">
                        <h3 class="category-item__title">PL
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>
                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('21') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/vip/vip13.jpg" alt="">
                        <h3 class="category-item__title">VIP
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>
                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('22') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top11.jpg" alt="">
                        <h3 class="category-item__title">TOP
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>
                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('24') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/mg/mg13.jpg" alt="">
                        <h3 class="category-item__title">MG
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>
                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('25') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp/sp035.jpg" alt="">
                        <h3 class="category-item__title">SP
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>
                <li class="category-item">
                    <a class="category-item__link" href="<?php echo get_category_link('23') ?>">
                        <img class="category-item__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/splida/splida010.jpg" alt="">
                        <h3 class="category-item__title">SP-lida
                            <!-- <span class="category-item__price--tablet">1560 гривен</span> -->
                        </h3>
                        <!-- <p class="category-item__price">1560 гривен</p> -->
                    </a>
                </li>
            </ul>
        </section>

        <section class="news">
            <h1 class="news__title">Новина</h1>

            <ul class="news-items">

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
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <div class="post-description"><?php the_excerpt(); ?></div>
                        </a>
                        <a class="btn" href="<?php the_permalink();?>">Докладно</a>
                    </div>
                    <?php } ?>

            </ul>
        </section>

<?php
get_footer();
