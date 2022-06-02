$(function() {
    init();
});
function init() {
    $("article img:not(.noImageLightBox)").each(function(i) {
        if (!this.parentNode.href) {
            $(this).wrap('<a class="post-imgLink" href="' + this.src + '" data-caption="' + this.alt + '"></a>');
        }
    });
    $("article .photosets").each(function() {
        var count = $(this).find("a.post-imgLink").length;
        switch (count) {
        case 1:
            $(this).addClass("photosets-1");
            break;
        case 2:
            $(this).addClass("photosets-2");
            break;
        case 4:
            $(this).addClass("photosets-4");
            break;
        default:
            $(this).addClass("photosets-3");
        }
    });
    if ($(".post-imgLink").length > 0) {
        lightGallery(document.getElementsByTagName('article')[0], {
            selector: '.post-imgLink',
            share: false,
            showThumbByDefault: false,
            autoplayControls: false
        });
    }
    if($("#tcomment").length > 0){
        twikoo.init({
            envId: 'https://xiaoblog.vercel.app/',
            el: '#tcomment'
          })
    }
    // to-top
    $(document).ready((function (_this) {
      return function () {
        let bt
        bt = $('#to_top')
        if ($(document).width() > 480) {
          $(window).scroll(function () {
            let st
            st = $(window).scrollTop()
            if (st > 30) {
              return bt.css('display', 'block')
            } else {
              return bt.css('display', 'none')
            }
          })
          return bt.click(function () {
            $('body,html').animate({
              scrollTop: 0,
            }, 800)
            return false
          })
        }
      }
    })(this))
}
