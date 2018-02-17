/**
 * Created by Marcin on 2018-02-17.
 */
$('.par1-stump').click(function () {
    alert("a");
});

function parallaxStump() {
    // create variables
    var $window = $(window);
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var $stump = $('.par1-stump');
    $stump.speed=5;
    $stump.bottompos=-200;

    // update positions
    $window.on('scroll resize', function() {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        var yPos =  (scrollTop / $stump.speed) +$stump.bottompos;

        $stump.css('bottom', yPos);
        console.log(scrollTop);
        console.log(yPos);
        console.log($stump.speed);
    });
    // triggers winodw scroll for refresh
    $window.trigger('scroll');
}
parallaxStump();
