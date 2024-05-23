<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

    <main class="main container">

        <section class="commonFirstView">
            <div class="commonFirstView__inner">
                <h1 class="commonFirstView__ttl fadeInAndUp">
                    <span class="text__commonFirstView-ttl">
                        Contact
                    </span>
                    <span class="text__commonFirstView-subttl">
                        お問合せ
                    </span>
                </h1>
                <div class="commonFirstView__breadcrumbs breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item">
                            <a href="<?php echo home_url(); ?>" class="breadcrumbs__link text__breadcrumbs">HOME</a>
                        </li>
                        <li class="breadcrumbs__currentPage">
                            <span class="text__breadcrumbs">お問合せ</span>
                        </li>
                    </ul>
                </div>
                <!-- /.breadcrumbs -->
            </div>
            <!-- /.commonFirstView__filter -->
        </section>

        <section class="Con-guide">
            <h2 class="Con-guide__headline text__Con-headline fadeInAndUp-target">
                私たちのビジネスにご興味頂けましたらまずはお気軽にお問い合わせください
            </h2>
            <div class="Con-guide__description fadeInAndUp-target">
                <p class="text__Con-guide-description">
                    ２～３営業日以内に確認のご連絡をさせていただきいます
                </p>
                <p class="text__Con-guide-description">
                    万が一、２～３営業日が立ちましても返答がない場合はメールトラブルの可能性がございます
                </p>
                <p class="text__Con-guide-description">
                    その際は、お電話でのご連絡をお願いいたします
                </p>
            </div>
            <!-- /.Con-guide__description -->
        </section>

        <section class="Con-form fadeInAndUp-target">
            <form action="[EXAMPLE.PHP]" class="Con-form__wrapper">
                <div class="Con-form__body">
                    <div class="Con-form__param">
                        <span class="Con-form__param-name text__Con-param">
                            お問合せ属性
                        </span>
                        <span class="Con-form__param-required text__Con-param-required">
                            必須
                        </span>
                    </div>
                    <!-- /.Con-form__param -->
                    <div class="Con-form__param-wrapper">
                        <span class="Con-form__param-item">
                            <input type="radio" name="fruits" id="label-co">
                            <label for="label-co" class="Con-form__param-caption text__Con-param-item">企業の方</label>
                        </span>
                        <!-- /.Con-form__param-item -->
    
                        <!-- /.Con-form__param -->
                        <span class="Con-form__param-item">
                            <input type="radio" name="fruits" id="label-influencer">
                            <label for="label-influencer"
                                class="Con-form__param-caption text__Con-param-item">インフルエンサーの方</label>
                        </span>
                        <!-- /.Con-form__param-item -->
    
                        <!-- /.Con-form__param -->
                        <span class="Con-form__param-item">
                            <input type="radio" name="fruits" id="laber-applicant">
                            <label for="laber-applicant" class="Con-form__param-caption text__Con-param-item">採用希望の方</label>
                        </span>
                        <!-- /.Con-form__param-item -->
                    </div>
                    <!-- /.Con-form__param-wrapper -->

                </div>
                <!-- /.Con-form__body -->
                <div class="Con-form__body">
                    <div class="Con-form__param">
                        <span class="Con-form__param-name text__Con-param">
                            お名前
                        </span>
                        <span class="Con-form__param-require text__Con-param-required">
                            必須
                        </span>
                    </div>
                    <!-- /.Con-form__param -->
                    <label class="Con-form__label">
                        <input type="text" class="Con-form__input">
                    </label>
                </div>
                <!-- /.Con-form__body -->
                <div class="Con-form__body">
                    <div class="Con-form__param">
                        <span class="Con-form__param-name text__Con-param">
                            フリガナ
                        </span>
                        <span class="Con-form__param-required text__Con-param-required">
                            必須
                        </span>
                    </div>
                    <!-- /.Con-form__param -->
                    <label class="Con-form__label">
                        <input type="text" class="Con-form__input">
                    </label>
                </div>
                <!-- /.Con-form__body -->
                <div class="Con-form__body">
                    <div class="Con-form__param">
                        <span class="Con-form__param-name text__Con-param">
                            貴社名
                        </span>
                    </div>
                    <!-- /.Con-form__param -->
                    <label class="Con-form__label">
                        <input type="text" class="Con-form__input">
                    </label>
                </div>
                <!-- /.Con-form__body -->
                <div class="Con-form__body text__Con-param">
                    <div class="Con-form__param">
                        <span class="Con-form__param-name">
                            メールアドレス
                        </span>
                        <span class="Con-form__param-required text__Con-param-required">
                            必須
                        </span>
                    </div>
                    <!-- /.Con-form__param -->
                    <label class="Con-form__label">
                        <input type="email" class="Con-form__input">
                    </label>
                </div>
                <!-- /.Con-form__body -->
                <div class="Con-form__body">
                    <div class="Con-form__param">
                        <span class="Con-form__param-name text__Con-param">
                            メールアドレス確認用
                        </span>
                        <span class="Con-form__param-required text__Con-param-required">
                            必須
                        </span>
                    </div>
                    <!-- /.Con-form__param -->
                    <label class="Con-form__label">
                        <input type="email" class="Con-form__input">
                    </label>
                </div>
                <!-- /.Con-form__body -->
                <div class="Con-form__body">
                    <div class="Con-form__param">
                        <span class="Con-form__param-name text__Con-param">
                            ご要件内容
                        </span>
                        <span class="Con-form__param-required text__Con-param-required">
                            必須
                        </span>
                    </div>
                    <!-- /.Con-form__param -->
                    <label class="Con-form__label">
                        <textarea class="Con-form__textarea"></textarea>
                    </label>
                </div>
                <!-- /.Con-form__body -->
                <span class="Con-form__PI text__Con-form-PI">
                    弊社の<a href="<?php echo get_permalink(get_page_by_path('privacyPolicy')); ?>" class="text__Con-form-PI-link">個人情報保護方針</a>に同意し、お問合せ内容に同意のうえ情報を送信する。
                </span>
                <button class="Con-form__btn">
                    <span class="Con-form__btn-message-small text__Con-form-btn-s">
                        個人情報保護方針に同意し
                    </span>
                    <span class="Con-form__btn-message text__Con-form-btn-m">
                        お問合せ内容を送信する
                    </span>
                </button>
            </form>
        </section>


<?php get_footer(); ?>