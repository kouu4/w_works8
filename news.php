<?php
/*
Template Name: news
*/
?>

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
            <!-- /.commonFirstView__filter -->
        </section>

        <article class="News-article">
            <time datetime="2024-04-02" class="text__News-time">2024.04.02</time>
            <h2 class="News-article__headline text__News-headline">
                ホームページ公開のお知らせ
            </h2>
            <p class="News-article__content text__News-content">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                <br>テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="News-article__content text__News-content">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
        </article>


<?php get_footer(); ?>