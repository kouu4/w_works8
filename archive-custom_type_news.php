<?php get_header(); ?>

<main class="main container">

    <section class="commonFirstView">
        <div class="commonFirstView__inner">
            <h1 class="commonFirstView__ttl fadeInAndUp">
                <span class="text__commonFirstView-ttl">
                    News
                </span>
                <span class="text__commonFirstView-subttl">
                    X marketingからのお知らせ
                </span>
            </h1>
            <div class="commonFirstView__breadcrumbs breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="<?php echo home_url(); ?>" class="breadcrumbs__link text__breadcrumbs">HOME</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="<?php echo home_url(); ?>#news" class="breadcrumbs__link text__breadcrumbs">News</a>
                    </li>
                </ul>
            </div>
            <!-- /.breadcrumbs -->
        </div>
        <!-- /.commonFirstView__inner -->
    </section>

    <section class="news" id="news">
        <h2 class="news__ttl text__headline-gl fadeInAndUp-target">
            News
        </h2>
        <ul class="news__list">
            <?php
            $args = array(
                'post_type'      => 'custom_type_news', // カスタムポストタイプのスラッグ
                'posts_per_page' => -1,     // 表示する投稿の数（-1は無制限）
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
            else :
                echo '<p>現在ニュース記事はありません。</p>';
            endif;
            wp_reset_postdata();
            ?>
        </ul>
    </section>

</main>


<?php get_footer(); ?>