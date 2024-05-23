jQuery(document).ready(function () {
    var $pagetop = jQuery('#pagetop');
    var $pagetopTextPc = jQuery('.pagetop__text-pc');
    var $pagetopTextSp = jQuery('.pagetop__text-sp');
    var $footer = jQuery('.footer');

    function updateSizes() {
        var windowWidth = jQuery(window).width();
        var windowHeight = window.innerHeight;
        var footerTop = $footer.offset().top;
        var appearLine = windowHeight + 100;

        updateClasses(windowWidth, footerTop, appearLine);
    }

    function updateClasses(windowWidth, footerTop, appearLine) {
        var touchOnFooterClass = windowWidth < 768 ? 'pagetop-touchOnFooter--SP' : 'pagetop-touchOnFooter--PC';
        var displayTextPc = windowWidth < 768 ? 'none' : 'block';
        var displayTextSp = windowWidth < 768 ? 'block' : 'none';

        $pagetopTextPc.css('display', displayTextPc);
        $pagetopTextSp.css('display', displayTextSp);

        $pagetop.removeClass('pagetop-touchOnFooter--SP pagetop-touchOnFooter--PC');
        $pagetop.addClass(touchOnFooterClass);

        adjustVisibility(footerTop, appearLine, touchOnFooterClass);
    }

    function adjustVisibility(footerTop, appearLine, touchOnFooterClass) {
        var windowBottom = jQuery(window).scrollTop() + window.innerHeight;

        if (windowBottom < appearLine) {
            $pagetop.addClass('pagetop-fadeOutFromWindow');
        } else if (windowBottom >= appearLine && windowBottom < footerTop) {
            $pagetop.addClass('pagetop-visibleInWindow').removeClass('pagetop-fadeOutFromWindow ' + touchOnFooterClass);
        } else {
            $pagetop.addClass(touchOnFooterClass).removeClass('pagetop-visibleInWindow');
        }
    }

    jQuery(window).on('resize scroll', function () {
        updateSizes();
    });

    updateSizes(); // Initial call to set everything up
});
