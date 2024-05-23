//アニメーションさせたい要素に
// .fadeInAndUp-target
//を指定する。

//アニメーション内容自体は、
//_keyframes.scssで管理している。


jQuery(document).ready(function(){
    const offset = 100;

    function checkAndAnimateElements() {
        const windowBottom = jQuery(window).scrollTop() + window.innerHeight;

        jQuery('.fadeInAndUp-target').each(function(){
            const elemTop = jQuery(this).offset().top;

            if (elemTop + offset < windowBottom) {

                jQuery(this).addClass('fadeInAndUp');
            }
        })
    }

    jQuery(window).on('scroll', checkAndAnimateElements);
})