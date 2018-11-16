"use strict";

(function ($, silly) {
  $(function () {
    $('.anonymize').each(function (i, el) {
      var $this = $(el);
      var hash = String($this.attr('data-anonymize'));
      var j = 0;

      var generator = function generator() {
        var hashVal = hash.substr(4 * j++, 4);
        var val = parseInt(hashVal, 16); // console.log({
        //   "hash": hash,
        //   "hashVal": hashVal,
        //   "j": j - 1,
        //   "val": val / 0x10000
        // });

        return val / 0x10000;
      };

      $this.empty().text(silly(generator));
    });
  });
})(jQuery, sillyName);
