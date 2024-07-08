<?php get_header(); ?>

<main class="main container">

    <section class="firstView">
        <div class="firstView__siteImage">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/top_logo.svg" alt="" class="firstView__siteImage-logo">
            <p class="firstView__siteImage-copy text__firstView-siteImage-copy">SNSマーケティングの力で、</p>
            <p class="firstView__siteImage-copy text__firstView-siteImage-copy">あなたのビジネスを加速する。</p>
        </div>
        <!-- /.firstView__siteImage -->
        <video class="firstView__bgVideo" autoplay muted loop>
            <source src="<?php echo get_template_directory_uri(); ?>/src/img/854228-hd_1920_1080_30fps.mp4" type="video/mp4">
            お使いのブラウザはビデオをサポートしていません。
        </video>
    </section>

    <section class="aboutUs aboutUs--bg">

        <h2 class="aboutUs__ttl text__headline-gl fadeInAndUp-target">
            About us
        </h2>
        <h3 class="aboutUs__subttl-sp text__headline-bm fadeInAndUp-target">
            マーケティングの力をかけ合わせて、ビジネスを加速させる
        </h3>
        <h3 class="aboutUs__subttl-pc text__headline-bm fadeInAndUp-target">
            マーケティングの力をかけ合わせて、
            <br>ビジネスを加速させる
        </h3>
        <p class="aboutUs__description text__description fadeInAndUp-target">
            ビジネスにおけるSNSの応用の可能性を追求すべく2024年に設立いたしました。SNSと様々なサービスの掛け算によるマーケティングの力で、お客様とともに明るい未来を創出してまいります。
        </p>
        <a href="<?php echo get_permalink(get_page_by_path('aboutUs')); ?>" class="aboutUs__btn btn fadeInAndUp-target">
            <span class="btn__1">About us</span>
        </a>
    </section>

    <section class="businessContent">

        <h2 class="businessContent__ttl text__headline-gl fadeInAndUp-target">
            Business
            <br>introduction
        </h2>

        <ul class="businessContent__list">

            <li class="businessContent__item businessCard fadeInAndUp-target">
                <div class="businessCard__body">
                    <div class="businessCard__bodyInner">
                        <div class="businessCard__label text__label text--vertical">
                            01 Marketing
                        </div>
                        <!-- /.text__label text--vertical -->
                        <div class="businessCard__description">
                            <h3 class="businessCard__descriptionTitle text__headline-blm">
                                インフルエンサー
                                <br>マーケティング事業
                            </h3>
                            <p class="businessCard__descriptionContent text__description-gs">
                                お客様のビジネス戦略に適したインフルエンサーを選出・アサインさせていただきます。社内独自のノウハウから認知施策にとどまることのないゴール達成のための獲得戦略でビジネスを後押しします。
                            </p>
                        </div>
                        <!-- /.businessCard__description -->
                    </div>
                    <!-- /.businessCard__bodyInner -->
                    <a href="<?php echo get_permalink(get_page_by_path('businessIntroduction')); ?>#BI-influencer-marketing" class="businessCard__bodyLink btn btn--btn2decoration">
                        <span class="btn__2">Read More</span>
                    </a>
                </div>
                <!-- /.businessCard__body -->
                <div class="businessCard__thumb">
                    <img class="businessCard__image" src="<?php echo get_template_directory_uri(); ?>/src/img/chp-PAKE2852_TP_V4.jpg" alt="">
                </div>
                <!-- /.businessCard__thumb -->
            </li>

            <li class="businessContent__item businessCard fadeInAndUp-target">
                <div class="businessCard__body">
                    <div class="businessCard__bodyInner">
                        <div class="businessCard__label text__label text--vertical">
                            02 Advertising operation
                        </div>
                        <!-- /.text__label text--vertical -->
                        <div class="businessCard__description">
                            <h3 class="businessCard__descriptionTitle text__headline-blm">
                                広告運用事業
                            </h3>
                            <p class="businessCard__descriptionContent text__description-gs">
                                第一線で経験を積んできたスタッフがGoogleやYahoo!の検索広告、およびMetaのディスプレイ広告まで運用。また、貴社のマーケティング力を底上げする社内教育コンサルティングも実施。ビジネスの加速をサポートします。
                            </p>
                        </div>
                        <!-- /.businessCard__description -->
                    </div>
                    <!-- /.businessCard__bodyInner -->
                    <a href="<?php echo get_permalink(get_page_by_path('businessIntroduction')); ?>#BI-advertising-operation" class="businessCard__bodyLink btn btn--btn2decoration">
                        <span class="btn__2">Read More</span>
                    </a>
                </div>
                <!-- /.businessCard__body -->
                <div class="businessCard__thumb">
                    <img class="businessCard__image" src="<?php echo get_template_directory_uri(); ?>/src/img/2inone0I9A7532_TP_V4.jpg" alt="">
                </div>
                <!-- /.businessCard__thumb -->
            </li>

            <li class="businessContent__item businessCard fadeInAndUp-target">
                <div class="businessCard__body">
                    <div class="businessCard__bodyInner">
                        <div class="businessCard__label text__label text--vertical">
                            03 Creative production
                        </div>
                        <!-- /.text__label text--vertical -->
                        <div class="businessCard__description">
                            <h3 class="businessCard__descriptionTitle text__headline-blm">
                                クリエイティブ制作
                                <br>事業
                            </h3>
                            <p class="businessCard__descriptionContent text__description-gs">
                                バリエーション豊かな制作実績を持つクリエイターによる商材別・業界別に適したクリエイティブを作成いたします。もちろん動画サービスにも対応。これにより、各種SNSでのビジネス拡大をサポートします。
                            </p>
                        </div>
                        <!-- /.businessCard__description -->
                    </div>
                    <!-- /.businessCard__bodyInner -->
                    <a href="<?php echo get_permalink(get_page_by_path('businessIntroduction')); ?>#BI-creative-production" class="businessCard__bodyLink btn btn--btn2decoration">
                        <span class="btn__2">Read More</span>
                    </a>
                </div>
                <!-- /.businessCard__body -->
                <div class="businessCard__thumb">
                    <img class="businessCard__image" src="<?php echo get_template_directory_uri(); ?>/src/img/p1488.jpg" alt="">
                </div>
                <!-- /.businessCard__thumb -->
            </li>

            <li class="businessContent__item businessCard fadeInAndUp-target">
                <div class="businessCard__body">
                    <div class="businessCard__bodyInner">
                        <div class="businessCard__label text__label text--vertical">
                            04 Influencer business
                        </div>
                        <!-- /.text__label text--vertical -->
                        <div class="businessCard__description">
                            <h3 class="businessCard__descriptionTitle text__headline-blm">
                                インフルエンサー事業
                                <br>(Comming Sonn)
                            </h3>
                            <p class="businessCard__descriptionContent text__description-gs">
                                ただいまサービス開始に向けて準備中です。
                                <br>サービス開始までお待ちください。
                            </p>
                        </div>
                        <!-- /.businessCard__description -->
                    </div>
                    <!-- /.businessCard__bodyInner -->
                    <a href="<?php echo get_permalink(get_page_by_path('businessIntroduction')); ?>#BI-influencer-business" class="businessCard__bodyLink btn btn--btn2decoration">
                        <span class="btn__2">Read More</span>
                    </a>
                </div>
                <!-- /.businessCard__body -->
                <div class="businessCard__thumb">
                    <img class="businessCard__image" src="<?php echo get_template_directory_uri(); ?>/src/img/chp-PAKE3154_TP_V4.jpg" alt="">
                </div>
                <!-- /.businessCard__thumb -->
            </li>

        </ul>

    </section>

    <section class="news" id="news">
        <h2 class="news__ttl text__headline-gl fadeInAndUp-target">
            News
        </h2>
        <ul class="news__list">
            <?php
            $args = array(
                'post_type'      => 'custom_type_news', // カスタムポストタイプのスラッグ
                'posts_per_page' => 3,     // 表示する投稿の数（-1は無制限）
                'orderby'        => 'date', // 日付で並べ替え
                'order'          => 'DESC'  // 降順で表示
            );
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
                    <li class="news__item fadeInAndUp-target">
                        <a href="<?php the_permalink(); ?>" class="news__link">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="news__itemtime text__newstime">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>
                            <h3 class="news__itemttl text__newsttl">
                                <?php the_title(); ?>
                            </h3>
                            <p class="news__itemdesc text__newsdesc">
                                <?php the_excerpt(); ?>
                            </p>
                        </a>
                    </li>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </ul>
        <div class="news__moreItem">
            <div>
                <a href="<?php echo get_post_type_archive_link('custom_type_news'); ?>" class="news__moreItemLink fadeInAndUp-target">
                    Read More
                </a>
            </div>

        </div>
        <!-- /.news__moreItem -->
    </section>


    <?php get_footer(); ?>