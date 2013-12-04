$(window).load(function() {
    $('.flexslider').flexslider({
        animation: 'slide',
        controlNav: false,
        
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
});

jQuery(document).ready(function(){
});