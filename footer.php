<section class="contact contact-bg">
            <p class="contact__message--sp text__contact">
                サービスやご協業、ご相談など
                <br>お気軽にご連絡ください。
            </p>
            <p class="contact__message--pc text__contact">
                サービスやご協業、ご相談などお気軽にご連絡ください。
            </p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="contact__link btn__contact">
                <span class="btn__contactText">
                    Contact
                </span>
            </a>
        </section>

    </main>




    <footer class="footer pagetop__anchor">
        <div class="container">

            <div class="footer__inner">
                <div class="footer__left">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/footer_logo_w.svg" alt="Logo">
                    </a>
                    <div class="footer__MailingAddress text__footer-m">
                        <div class="footer__postCode">
                            〒〇〇〇-△△△△
                        </div>
                        <!-- /.footer__postCode -->
                        <div class="footer__Address">
                            東京都港区六本木〇-〇-〇-△△△△号
                        </div>
                        <!-- /.footer__Address -->
                    </div>
                    <!-- /.footer__MailingAddress -->
                    <div class="footer__contactAddress text__footer-l">
                        <div class="footer__telephone">
                            03-1234-5678
                        </div>
                        <!-- /.footer__telephoneNumber -->
                        <div class="footer__email">
                            Email:abcd@efg.co.jp
                        </div>
                        <!-- /.footer__email -->
                    </div>
                    <!-- /.footer__contactAddress -->
                </div>
                <!-- /.footer__left -->

                <div class="footer__right">
                    <div class="footer__companyInfo companyInfo">
                        <ul class="companyInfo__list text__footer-m">
                            <li class="companyInfo__item">
                                <a href="<?php echo get_permalink(get_page_by_path('aboutUs')); ?>" class="companyInfo__link">会社情報</a>
                            </li>
                            <li class="companyInfo__item">
                                <a href="<?php echo get_permalink(get_page_by_path('businessIntroduction')); ?>" class="companyInfo__link">事業内容</a>
                            </li>
                            <li class="companyInfo__item">
                                <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="companyInfo__link">お問合せ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.footer__companyInfo -->

                    <ul class="footer__snsLinks snsIcons__list">
                        <li class="snsIcons__item">
                            <a href="https://instagram.com" class="snsIcons__link">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_instagram_w.png" alt="Instagram" class="snsIcons__image">
                            </a>
                        </li>
                        <li class="snsIcons__item">
                            <a href="https://facebook.com" class="snsIcons__link">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_facebook_w.svg" alt="Facebook" class="snsIcons__image">
                            </a>
                        </li>
                        <li class="snsIcons__item">
                            <a href="https://tiktok.com" class="snsIcons__link">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_tiktok_w.svg" alt="TikTok" class="snsIcons__image">
                            </a>
                        </li>
                        <li class="snsIcons__item">
                            <a href="https://youtube.com" class="snsIcons__link">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_youtube_w.svg" alt="YouTube" class="snsIcons__image">
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- /.footer__left -->

            </div>
            <!-- /.footer__inner container -->

            <div class="footer__legalInfo legalInfo">
                <div class="footer__privacyPolicy">
                    <a href="<?php echo get_permalink(get_page_by_path('privacyPolicy')); ?>" class="legalInfo__privacyPolicy text__footer-m">個人情報保護方針</a>
                </div>
                <!-- /.footer__privacyPolicy -->
                <div class="footer__copyright">
                    <small class="text__footer-m">&copy; 2024 X marketing Inc.</small>
                </div>
                <!-- /.footer__copyright -->
            </div>
            <!-- /.footer__legalInfo -->
        </div>
        <!-- /.container -->

        <a href="#" id="pagetop" class="pagetop">
            <span class="pagetop__text-sp">Page<br>Top</span>
            <span class="pagetop__text-pc text--vertical">PageTop</span>
        </a>

    </footer>

    <?php wp_footer(); ?>
</body>

</html>