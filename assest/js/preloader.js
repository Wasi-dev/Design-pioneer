(function ($) {
  "use strict";
  window.addEventListener("load", function () {
    var preloadpage = document.getElementById("page_loader");
    preloadpage.style.display = "none";
  });
})(jQuery);
$('.pkg_btn').click(function() { var gettitle = $(this).attr('data-sku');$(".pkg_nme").val(gettitle);console.log(gettitle);});