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
                <?php if (function_exists('simple_breadcrumb')) {
                    simple_breadcrumb();
                }
                ?>
                </div>
                <!-- /.breadcrumbs -->
            </div>
            <!-- /.commonFirstView__inner -->
        </section>


        <?php
        // ここからカスタムポストタイプ 'custom_type_news' の特定の記事を取得するループ
        $slug = get_query_var('name');  // URLからスラッグを取得

        $args = array(
            'post_type' => 'custom_type_news',
            'posts_per_page' => 1,
            'name' => $slug  // 動的にスラッグを設定
        );
        $news_query = new WP_Query($args);
        
        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
                ?>
                <article class="News-article">
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="text__News-time">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <h2 class="News-article__headline text__News-headline">
                        <?php the_title(); ?>
                    </h2>
                    <p class="News-article__content text__News-content">
                        <?php the_content(); ?>
                    </p>
                </article>
                <?php
            endwhile;
        else:
            echo '<p>該当する記事が見つかりません。</p>';
        endif;
        wp_reset_postdata();
        ?>

<?php get_footer(); ?>
