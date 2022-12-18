
/*--
    Boostrap Menu 
    -----------------------------------*/
// Add slideDown animation to Bootstrap dropdown when expanding.
$('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown(400);
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp(300);
            $(this).toggleClass('open');       
        }
    );
});



 /*--
    Menu Stick
    -----------------------------------*/
    var header = $('.sticker');
    var win = $(window);
    
    win.on('scroll', function() {
        var scroll = win.scrollTop();
        if (scroll < 20) {
            header.removeClass('stick');
        } else {
            header.addClass('stick');
        }
    });
    
 



// sliderjs
//  var carouselContainer = $('.carousel');
//   var slideInterval = 5000;

// function toggleH(){
//     $('.toggleHeading').hide()
//     var caption = carouselContainer.find('.active').find('.toggleHeading').addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
//         function (){
//         $(this).removeClass('animated fadeInRight')});
// caption.slideToggle();
// }

// function toggleC(){
//     $('.toggleCaption').hide()
//     var caption = carouselContainer.find('.active').find('.toggleCaption').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
//         function (){
//         $(this).removeClass('animated fadeInUp')
// });
// caption.slideToggle();
// }
//   carouselContainer.carousel({
//   interval: slideInterval, cycle: true, pause: "hover"})
//  .on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel')
//  .on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');

//Group slider
// $(document).ready(function() {
//     $('#Carousel').carousel({
//         interval: 5000
//     })
// });


//media slider

// $(document).ready(function() {
//   $('#media').carousel({
//     pause: true,
//     interval: false,
//   });
// });


