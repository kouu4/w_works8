<?php
/*
Template Name: businessIntroduction
*/
?>

<?php get_header(); ?>

    <main class="main container">

        <section class="commonFirstView">
            <div class="commonFirstView__inner">
                <h1 class="commonFirstView__ttl fadeInAndUp">
                    <span class="text__commonFirstView-ttl">
                        Business Introduction
                    </span>
                    <span class="text__commonFirstView-subttl">
                        事業紹介
                    </span>
                </h1>
                <div class="commonFirstView__breadcrumbs breadcrumbs">
                <?php if (function_exists('simple_breadcrumb')) {
                    simple_breadcrumb();
                }
                ?>
                </div>
                <!-- /.breadcrumbs -->
            </div>
            <!-- /.commonFirstView__filter -->
        </section>

        <section class="BI-nav">
            <nav class="BI-nav__frame fadeInAndUp-target">
                <ul class="BI-nav__list">
                    <li class="BI-nav__item">
                        <a href="#BI-influencer-marketing" class="BI-nav__link text__bi-nav">
                            インフルエンサー<br>マーケティング事業
                            <span class="BI-nav__link-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_arw_bottom.svg" alt="" class="BI-nav__link-icon-item">
                            </span>
                        </a>
                    </li>
                    <li class="BI-nav__item">
                        <a href="#BI-advertising-operation" class="BI-nav__link text__bi-nav">
                            広告運用事業
                            <span class="BI-nav__link-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_arw_bottom.svg" alt="" class="BI-nav__link-icon-item">
                            </span>
                        </a>
                    </li>
                    <li class="BI-nav__item">
                        <a href="#BI-creative-production" class="BI-nav__link text__bi-nav">
                            クリエイティブ<br>制作事業
                            <span class="BI-nav__link-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_arw_bottom.svg" alt="" class="BI-nav__link-icon-item">
                            </span>
                        </a>
                    </li>
                    <li class="BI-nav__item">
                        <a href="#BI-influencer-business" class="BI-nav__link text__bi-nav">
                            インフルエンサー事業<br>(comming soon)
                            <span class="BI-nav__link-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icon_arw_bottom.svg" alt="" class="BI-nav__link-icon-item">
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>

        <section class="BI-template" id="BI-influencer-marketing">
            <h2 class="BI-template__ttl">
                <span class="BI-template__ttl-main text__bi-template-ttl fadeInAndUp-target">
                    Marketing
                </span>
                <span class="BI-template__ttl-sub text__bi-template-subttl fadeInAndUp-target">
                    インフルエンサーマーケティング事業
                </span>
            </h2>
            <p class="BI-template__description text__bi-template-description fadeInAndUp-target">
                インフルエンサーとクライアントをかけ合わせてビジネスを加速させる。
            </p>
            <ul class="BI-template__figure-list fadeInAndUp-target">
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        インフルエンサー選定
                    </span>
                </li>
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        企画・ディレクション
                        <br>
                        進行
                    </span>
                </li>
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        データ分析
                    </span>
                </li>
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        インフルエンサー
                        <br>
                        マッチング
                        <br>
                        プラットフォーム運営
                    </span>
                </li>
            </ul>
            <div class="BI-template__probrem">
                <div class="BI-template__probrem-item BI-probrem-gray text__bi-template-probrem fadeInAndUp-target">
                    どのインフルエンサーが認知に適しているかわからない…
                </div>
                <!-- /.BI-template__probrem-item BI-probrem -->
                <div class="BI-template__probrem-item BI-probrem-blue text__bi-template-probrem fadeInAndUp-target">
                    認知だけではなく効果的に獲得ができるPR方法を採用したい…
                </div>
                <!-- /.BI-template__probrem-item BI-probrem -->
                <div class="BI-template__probrem-item BI-probrem-black text__bi-template-probrem fadeInAndUp-target">
                    SNSを使った集客がしたい。でもSNS運用は面倒…
                </div>
                <!-- /.BI-template__probrem-item BI-probrem -->
                <div class="BI-template__probrem-answer fadeInAndUp-target">
                    <div class="BI-ttemplate__probrem-answer-inner text__BI-probrem-answer">
                        <span>すべて、</span>
                        <span>弊社が解決します！</span>
                    </div>
                    <!-- /.BI-ttemplate__probrem-answer-inner text__BI-probrem-answer -->
                </div>
                <!-- /.BI-template__probrem-answer -->
            </div>
            <!-- /.BI-template__probrem -->
            <ul class="BI-template__content-list">
                <li class="BI-template__content-item fadeInAndUp-target">
                    <span class="BI-template__content-point text__BI-content-point">
                        Point1
                    </span>
                    <div class="BI-template__content-text-wrapper">
                        <h3 class="BI-template__content-headline text__BI-content-headline">
                            貴社に最適なインフルエンサーを選定・アサイン
                        </h3>
                        <p class="BI-template__content-text text__BI-content-text">
                            弊社とつながりのあるインフルエンサーはもちろん、PR目的に沿ったインフルエンサーを選定・アサインさせていただきます。
                        </p>
                    </div>
                    <!-- /.BI-template__content-text-wrapper -->
                </li>
                <li class="BI-template__content-item fadeInAndUp-target">
                    <span class="BI-template__content-point text__BI-content-point">
                        Point2
                    </span>
                    <h3 class="BI-template__content-headline text__BI-content-headline">
                        認知だけで終わらせない。獲得まで含めた企画・ディレクション
                    </h3>
                    <p class="BI-template__content-text text__BI-content-text">
                        経験豊かなメンバーが企画・ディレクションを行います。CPAを重視した施策には十分なナレッジを蓄えており、貴社のビジネス拡大に貢献いたします。
                    </p>
                </li>
            </ul>
            <div class="BI-template__picture fadeInAndUp-target">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/chp-PAKE2852_TP_V4.jpg" alt="" class="BI-template__picture-photo">
            </div>
            <!-- /.BI-template__picture -->
        </section>

        <section class="BI-template" id="BI-advertising-operation">
            <h2 class="BI-template__ttl">
                <span class="BI-template__ttl-main text__bi-template-ttl fadeInAndUp-target">
                    Advertising operation
                </span>
                <span class="BI-template__ttl-sub text__bi-template-subttl fadeInAndUp-target">
                    広告運用事業
                </span>
            </h2>
            <p class="BI-template__description text__bi-template-description fadeInAndUp-target">
                カスタマーとクライアントをかけ合わせてビジネスを加速させます。
            </p>
            <ul class="BI-template__figure-list fadeInAndUp-target">
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        広告運用
                    </span>
                </li>
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        データ分析
                    </span>
                </li>
                <!-- <li class="BI-template__figure-dummy">
                    <img src="" alt="" class="BI-template__figure-dummy-icon">
                </li>
                <li class="BI-template__figure-dummy">
                    <img src="" alt="" class="BI-template__figure-dummy-icon">
                </li> -->
            </ul>
            <ul class="BI-template__content-list">
                <li class="BI-template__content-item fadeInAndUp-target">
                    <span class="BI-template__content-point text__BI-content-point">
                        Point1
                    </span>
                    <h3 class="BI-template__content-headline text__BI-content-headline">
                        経験豊富な広告運用実績をもつスタッフが担当
                    </h3>
                    <p class="BI-template__content-text text__BI-content-text">
                        Google,Yahoo!をはじめとした検索広告、Meta広告といったディスプレイ広告を運用可能。豊富な経験を持つ運用者が貴社のサービス拡大をサポートします。
                    </p>
                </li>
                <li class="BI-template__content-item fadeInAndUp-target">
                    <span class="BI-template__content-point text__BI-content-point">
                        Point2
                    </span>
                    <h3 class="BI-template__content-headline text__BI-content-headline">
                        貴社御自身での運用のコンサルティングも可能
                    </h3>
                    <p class="BI-template__content-text text__BI-content-text">
                        貴社御自身での広告運用へのコンサルティングも可能です。豊富な経験を持ったスタッフが社内体制強化のお手伝いをいたします。
                    </p>
                </li>
            </ul>
            <div class="BI-template__picture fadeInAndUp-target">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/2inone0I9A7532_TP_V4.jpg" alt="" class="BI-template__picture-photo">
            </div>
            <!-- /.BI-template__picture -->
        </section>

        <section class="BI-template" id="BI-creative-production">
            <h2 class="BI-template__ttl">
                <span class="BI-template__ttl-main text__bi-template-ttl fadeInAndUp-target">
                    Creative production
                </span>
                <span class="BI-template__ttl-sub text__bi-template-subttl fadeInAndUp-target">
                    クリエイティブ制作事業
                </span>
            </h2>
            <p class="BI-template__description text__bi-template-description fadeInAndUp-target">
                クリエイティブがビジネスを加速させる。
            </p>
            <ul class="BI-template__figure-list fadeInAndUp-target">
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        バナー制作
                    </span>
                </li>
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        PR動画制作
                    </span>
                </li>
                <li class="BI-template__figure-item">
                    <span class="BI-template__figure-item-content text__bi-template-figure">
                        動画編集
                    </span>
                </li>
                <!-- <li class="BI-template__figure-dummy">
                    <img src="" alt="" class="BI-template__figure-dummy-icon">
                </li> -->
            </ul>
            <ul class="BI-template__content-list">
                <li class="BI-template__content-item fadeInAndUp-target">
                    <span class="BI-template__content-point text__BI-content-point">
                        Point1
                    </span>
                    <h3 class="BI-template__content-headline text__BI-content-headline">
                        広告用のビジュアル画像や動画バナーを制作
                    </h3>
                    <p class="BI-template__content-text text__BI-content-text">
                        商材や業界によって獲得プロセスは多様ですが、様々なサービスのナレッジを有するクリエイターによって最適なクリエイティブを製作可能です。
                    </p>
                </li>
                <li class="BI-template__content-item fadeInAndUp-target">
                    <span class="BI-template__content-point text__BI-content-point">
                        Point2
                    </span>
                    <h3 class="BI-template__content-headline text__BI-content-headline">
                        SNS投稿用の動画編集
                    </h3>
                    <p class="BI-template__content-text text__BI-content-text">
                        多彩な編集スキルを有するクリエイターによる動画編集が可能です。YouTubeやInstagramなど様々な媒体に対応できます。
                    </p>
                </li>
            </ul>
            <div class="BI-template__picture fadeInAndUp-target">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/p1488.jpg" alt="" class="BI-template__picture-photo">
            </div>
            <!-- /.BI-template__picture -->
        </section>

        <section class="BI-template" id="BI-influencer-business">
            <h2 class="BI-template__ttl">
                <span class="BI-template__ttl-main text__bi-template-ttl fadeInAndUp-target">
                    Influencer business
                </span>
                <span class="BI-template__ttl-sub text__bi-template-subttl fadeInAndUp-target">
                    インフルエンサー事業(coming soon)
                </span>
            </h2>
            <p class="BI-template__description text__bi-template-description fadeInAndUp-target">
                インフルエンサーがビジネスを加速させる。
            </p>
            <p class="BI-template__preparation fadeInAndUp-target">
                ただいまサービス開始に向けて準備中です。サービス開始までお待ちください。
            </p>
            <div class="BI-template__picture fadeInAndUp-target">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/chp-PAKE3154_TP_V4.jpg" alt="" class="BI-template__picture-photo">
            </div>
            <!-- /.BI-template__picture -->
        </section>

<?php get_footer(); ?>