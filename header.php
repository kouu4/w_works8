<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&amp;family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet" media="all" onload="this.media='all'">
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="dist/css/style.css"> -->
    <title>X marketing</title>

    <?php wp_head(); ?>

</head>


<body>

    <header class="header">

        <h1 class="alwaysVisible__logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/header_logo.svg" alt="Logo">
            </a>
        </h1>
        <!-- /.alwaysVisible__logo -->




        <div class="alwaysVisible__menu openbtn">
            <button id="openbtn" class="openbtn__content"><span></span><span></span><span></span></button>
        </div>
        <!-- /.alwaysVisible__menu -->
        <div id="overlay" class="overlay">
            <div class="overlay__anchor">
                <div class="overlay__elem overlayMenu">
                    <nav class="overlayMenu__nav">
                        <ul class="overlayMenu__list">
                            <li class="overlayMenu__item">
                                <a href="<?php echo home_url(); ?>" class="overlayMenu__link text__hamburgerMenu">
                                    Top
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="<?php echo get_permalink(get_page_by_path('aboutus')); ?>" class="overlayMenu__link text__hamburgerMenu">
                                    About us
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">会社情報</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="<?php echo get_permalink(get_page_by_path('businessIntroduction')); ?>" class="overlayMenu__link text__hamburgerMenu">
                                    Business introduction
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">事業紹介</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="<?php echo get_permalink(get_page_by_path( 'news' ) ); ?>" class="overlayMenu__link text__hamburgerMenu">
                                    News
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">お知らせ</span>
                                </a>
                            </li>
                            <li class="overlayMenu__item">
                                <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="overlayMenu__link text__hamburgerMenu">
                                    Contact
                                    <span class="overlayMenu__subTxt text__hamburgerMenu-sub">お問合せ</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="overlayMenu__snsIcons snsIcons__list">
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
                <!-- /.overlay__elem.overlayMenu -->
            </div>
            <!-- /.overlay__anchor -->
        </div>
        <!-- /#overlay.overlay -->




        <nav class="alwaysVisible__snsIcons snsIcons">
            <ul class="snsIcons__list">

                <li class="snsIcons__item">
                    <a href="https://instagram.com" class="snsIcons__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_instagram_b.png" alt="Instagram" class="snsIcons__image">
                    </a>
                </li>
                <li class="snsIcons__item">
                    <a href="https://facebook.com" class="snsIcons__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_facebook_b.svg" alt="Facebook" class="snsIcons__image">
                    </a>
                </li>
                <li class="snsIcons__item">
                    <a href="https://tiktok.com" class="snsIcons__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_tiktok_b.svg" alt="TikTok" class="snsIcons__image">
                    </a>
                </li>
                <li class="snsIcons__item">
                    <a href="https://youtube.com" class="snsIcons__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_youtube_b.svg" alt="YouTube" class="snsIcons__image">
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <!-- /.header -->