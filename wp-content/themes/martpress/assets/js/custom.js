(function($) {
  'use strict';
    $( document ).ready(function() {
		 // Our Product Carousel
        var owlProducts = $(".vf-our-products.products-carousel .woocommerce .products");
        owlProducts.each(function () {
            $(this).addClass('owl-carousel owl-theme');
        });
        owlProducts.owlCarousel({
            rtl: $("html").attr("dir") == 'rtl' ? true : false,
            loop: false,
            rewind: true,
            nav: false,
            dots: false,
            margin: 26,
            mouseDrag: true,
            touchDrag: true,
            autoplay: true,
            autoplayTimeout: 12000,
            stagePadding: 18,
            autoHeight: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 4
                }
            }
        });
        $( '.vf-our-products.products-carousel .owl-filter-bar' ).on( 'click', '.item', function() {
          var $item = $(this);
          var filter = $item.data( 'owl-filter' )
          owlProducts.owlcarousel2_filter( filter );
        });
    });

}(jQuery));
