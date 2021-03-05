<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sklunetWC
 */

?>
<footer class="main-footer">
    <div class="main-header-container-main">
        <div class="main-header-container">
            <a class="logo main-footer-logo--color" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo-img"src="<?php echo get_template_directory_uri()?>/assets/img/icons/logo_png.png" alt="Логотип sklu.net" width="100px" height="98px">
            </a>
            <p class="main-footer__adres"> м.Житомир вул. М.Грушевського, 93</p>
            <p class="main-footer__callback">Зворотній зв'язок: <a class="main-footer__callback-link"
                                                                href="mailto:ua@sklu.net">ua@sklu.net</a></p>
        </div>

        <?php
        wp_nav_menu([
            'theme_location' => 'main_foter_menu',
            'menu' => '',
            'container' => 'nav',
            'container_class' => 'main-footer__navigation-container main-header-container',
            'container_id' => 'main-header-middle',
            'menu_class' => 'main-footer__navigation-items',
            'walker' => new Main_Footer_Menu(),
        ]);
        ?>

        <nav class="main-footer__container">
            <h2 class="visually-hidden">Рубрики товарів</h2>
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

            <div class="main-footer__social">
                <ul class="main-header-container main-footer_social-items">
                    <li>
                        <a class="main-footer_social-link" href="https://www.facebook.com/profile.php?id=100044344762906&ref=bookmarks">
                            <span class="icon-facebook"></span>
                            <p class="visually-hidden">Facebook</p>

                        </a>
                    </li>
                    <li>
                        <a class="main-footer_social-link" href="https://www.instagram.com/marinasklu/">
                            <span class="icon-instagram"></span>
                            <p class="visually-hidden">Instagram</p>

                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
        <div class="main-footer__bottom">
            <div class="main-header-container developed_by--container">
                <p class="all-right-reserved">©2020 ФОП Шевчук М,П <br>
                    Всі права захищені</p>
                <p >
                    <a class="developed_by" href="mailto:tomtylorr@gmail.com">Розроблений: Tom Tylor</a>
                </p>
            </div>
            <div class="main-header-container main-footer__bottom-information">
                <p>Інтернет-вітрина <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link_sklu-net">sklu.net</a></p>
                <p class="main-footer__bottom-registration">Реєстраційний номер в торговому реєстрі Україна
                    000000 от 00.00.0000<br>
                    Свідоцтво про реєстрацію №000000000 видано м.Житомир 00.00.0000</p>
            </div>


        </div>


</footer>



</main>

<?php wp_footer(); ?>
</body>

</html>
