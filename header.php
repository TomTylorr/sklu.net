<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sklunetWC
 */

?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
              rel="stylesheet">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <title>Стінові панелі із ХДФ</title>
        <meta name="yandex-verification" content="be265ae9a67c85ac" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146471000-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-146471000-3');
        </script>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(68069776, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/68069776" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="main-header">
        <div class="main-header-container-main">
            <div class="main-header-container main-header-container--top-tablet">
                <a href="#" class="nav-icon__container" id="main-header-button">
                    <div class="nav-icon"></div>
                    <div class="nav-icon"></div>
                    <div class="nav-icon"></div>
                    <div class="nav-icon"></div>
                </a>
                <h1 class="main-header__description"><?php bloginfo( 'description' ); ?></h1>
                <button type="button" class="main-header__callback" id="main-header__callback-button">Замовити дзвінок</button>
                

                <div class="main-modal-callback-wrapper" id="main-modal-callback-wrapper">
                    <section class="main-modal-callback">

                        <h2 class="main-modal-callback__title">Замовлення зворотнього дзвінка</h2>
                        <p class="main-modal-callback__description">Будь ласка, заповніть коротку контактну інформацію.<br>
                            Наші співробітники зв'яжуться з Вами.
                        </p>


                        <?php echo do_shortcode('[contact-form-7 id="353" title="Обратная связь"]'); ?>
                        


                        <button class="main-modal-callback__close" type="button" data-action="hide-banner" data-type="panel"
                                title="Закрыть модальное окно" id="main-modal-callback__close"></button>
                    </section>
                    <script>
                        var mainModal = document.getElementById('main-modal-callback-wrapper');

                        var mainBtn = document.getElementById("main-header__callback-button");

                        mainBtn.onclick = function () {
                            mainModal.style.display = "block";
                        }

                        window.onclick = function (event) {
                            if (event.target == mainModal) {
                                mainModal.style.display = "none";
                            }
                        }
                    </script>
                </div>

<!--                Модальное окно заказать товар-->
                <div class="main-modal-make-order-wrapper" id="main-modal-make-order-wrapper">
                    <section class="main-modal-callback">

                        <h2 class="main-modal-callback__title">Замовити товар</h2>
<!--                        <p class="main-modal-callback__description">-->
<!--                            Заказ товара<br>-->
<!--                            Заказ товара-->
<!--                        </p>-->

                        <!-- <form class="main-modal__form" action="action_page.php">
                            <label for="main-name">
                                <p class="main-modal-callback__name">Назва організації:<span class="modal-order__star">*</span></p><input
                                        class="main-modal-callback__input" type="text" id="main-name" name="main-name">
                            </label>
                            <label for="main-phone">
                                <p class="main-modal-callback__phone">Телефон:<span class="modal-order__star">*</span></p>
                                <input class="main-modal-callback__input" type="text" class="input-text" id="main-phone"
                                       name="callback_tel" value="">
                            </label>
                            <label for="main-phone">
                                <p class="main-modal-callback__phone">Назва та кількість товару<span class="modal-order__star">*</span></p>
                                <textarea required class="make-order-area" name="list" placeholder="Назва та кількість товару"></textarea>
                            </label>
                            <input class="main-modal-callback__button" type="submit" value="Замовивши" name="send">


                        </form> -->
                        <?php echo do_shortcode('[contact-form-7 id="359" title="Заказать товар"]'); ?>
                        
                        <button class="main-modal-callback__close" type="button" data-action="hide-banner" data-type="panel"
                                title="Закрыть модальное окно" id="main-modal-callback__close"></button>
                    </section>

                </div>

            </div>

            <div class="main-header-container main-header-container--tablet-middle">
                <div class="main-header-container main-header-container--phone-tablet">
                    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img class="logo-img"src="<?php echo get_template_directory_uri()?>/assets/img/icons/logo_png.png" alt="Логотип sklu.net" width="100px" height="98px">
                    </a>
                    <div class="main-header__working-time--tablet-wrapper">
                        <p class="main-header__working-time">Час роботи: 8.00 - 16.30</p>
                        <p class="main-header__number-tablet">097-077-38-75</p>
                    </div>


                </div>
                <p class="main-header__number">097-077-38-75</p>
                <div class="main-header-container main-header-container--cart">
                    <ul class="main-header__cart-login">
                        <li class="main-header__cart-item">
                            <a class="main-header__cart-link" href="<?php echo get_page_link('9') ?>">
                                <span class="icon-login"></span>
                                <p class="icon-login_text">Увійти</p>
                            </a>
                        </li>
<!--                        <li class="main-header__cart-item">-->
<!--                            <a class="main-header__cart-link" href="--><?php //echo esc_url( wc_get_cart_url() ); ?><!--">-->
<!--                            <span class="icon-basket">-->
<!--                                <div class="icon-basket__count-wrapper">-->
<!--                                    <span class="icon-basket__count dropdown-cart">--><?php //echo WC()->cart->get_cart_contents_count() ?><!--</span>-->
<!--                                </div>-->
<!--                                   <div class="icon-basket__price-wrapper">-->
<!--                                        <span class="icon-basket__price">--><?php //echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?><!--</span>-->
<!--                                    </div>-->
<!--                            </span>-->
<!--                                <p class="icon-basket_text">Кошик</p>-->
<!---->
<!--                            </a>-->
<!---->
<!--                        </li>-->
                        <!--                    --><?php //woocommerce_mini_cart( ); ?>
                    </ul>
                </div>

            </div>
            <div class="main-header-container main-header-navigation--menu-wrapper">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_header_menu',
                    'menu' => '',
                    'container' => 'nav',
                    'container_class' => 'main-header-navigation--menu-wrapper',
                    'container_id' => '',
                    'menu_class' => 'main-header-navigation__items',
                    'walker' => new Main_Header_Menu(),
                ]);
                ?>
            </div>
            </div>


        <div class="modal-menu-container" id="modal-menu-container">
            <a class="modal-menu__close" id="modal-menu__close" href="#"><span class="modal-menu__close-img"></span></a>
            <?php
            wp_nav_menu([
                'theme_location' => 'main_header_menu',
                'menu' => '',
                'container' => 'nav',
                'container_class' => 'main-header-navigation',
                'container_id' => 'main-header-middle',
                'menu_class' => 'main-header-navigation__items',
                'walker' => new Main_Header_Menu(),
            ]);
            ?>

            <script>
                var modalMenuClose = document.getElementById("modal-menu__close");

                var menuModal = document.getElementById("modal-menu-container");

                // Get the button that opens the modal
                var menuBtn = document.getElementById("main-header-button");

                // Get the <span> element that closes the modal
                var mainClose = document.getElementsByClassName("main-modal__close")[0];

                // When the user clicks the button, open the modal
                menuBtn.onclick = function () {
                    menuModal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                modalMenuClose.onclick = function () {
                    menuModal.style.display = "none";
                }


                // When the user clicks on <span> (x), close the modal
                mainClose.onclick = function () {
                    searchModal.style.display = "none";
                }

            </script>

            <?php
            wp_nav_menu([
                'theme_location' => 'category_footer_menu',
                'menu' => '',
                'container' => false,
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'main-header-container categories_items',
                'walker' => new Category_Footer_Menu(),
            ]);
            ?>

            <div class="main-header-bottom" id="main-header-bottom">
                <form class="modal-search" role="search" method="get" id="searchform"
                      action="<?php echo home_url('/') ?>">
                    <label class="screen-reader-text visually-hidden" for="s">Пошук: </label>
                    <input class="search-block" type="text" value="" name="s" id="s" />
                    <input class="search-block-button" type="submit" id="searchsubmit" value="Пошук" />
                </form>
            </div>
        </div>

    </header>