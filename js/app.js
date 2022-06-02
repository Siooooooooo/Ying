$(function() {
    init();
});
function init() {
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
