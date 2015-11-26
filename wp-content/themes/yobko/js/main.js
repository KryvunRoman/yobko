"use strict";

(function($){

/******************
**
**  Sliders
**
******************/

    $(document).ready(function () {

        // Variables

        var sliderLeft = document.getElementById('carousel-left'),
            $sliderLeft = $(sliderLeft),
            sliderRight = document.getElementById('carousel-right'),
            $sliderRight = $(sliderRight),

            currentSlide = '.slick-active .slider-image',

            leftArrow1 = '.arrow-left-1',
            rightArrow1 = '.arrow-right-1',
            leftArrow2 = '.arrow-left-2',
            rightArrow2 = '.arrow-right-2';

        // Code

        $sliderLeft.slick( new SetSliderArgs(leftArrow1, rightArrow1) );
        $sliderRight.slick( new SetSliderArgs(leftArrow2, rightArrow2) );

        hideContentSlider();

        $sliderLeft.on('beforeChange', hideContentSlider);
        $sliderRight.on('beforeChange', hideContentSlider);
        $sliderLeft.on('afterChange', compareCurrentSlides);
        $sliderRight.on('afterChange', compareCurrentSlides);


        // Functions

        function SetSliderArgs(top, down) {
            return {
                prevArrow: top,
                nextArrow: down,
                infinite: true,
                speed: 800,
                slidesToShow: 1,
                slidesToScroll: 1,
                vertical: true,
                filtered: true,
                swipe: true,
                verticalSwiping: true
            };
        };

        function compareCurrentSlides() {
            if (getCurrentSlide($sliderLeft) === getCurrentSlide($sliderRight) ) {
                showContent();
            };
        }

        function getSlicIndex(parent, id){
            var element = parent.parentNode.querySelector('.slick-slide img[data-id="' + id + '"]');
            return !element ? false : $( element.parentNode ).data('slickIndex');
        };

        function getCurrentSlide(slider) {
            return slider.find(currentSlide).data('id');
        }

        function collectFullPictures(id) {
            collectImage(sliderLeft, $sliderLeft, id);
            return collectImage(sliderRight, $sliderRight, id);
        }
        function collectImage(slider, $slider, slideId) {
            return $slider.slick('slickGoTo', getSlicIndex(slider, slideId), true);
        }

/******************
**
**  Main Menu
**
******************/

        // Variables
        
        var popUpList = document.getElementById('pop-up-list'),
            $popUpList = $(popUpList),
            navMenuList = popUpList.querySelectorAll('li'),
            $navMainList = $popUpList.children(),

            btnMenu = document.getElementById('nav-menu-btn'),
            $btnMenu = $(btnMenu),

            navClass = "nav-menu-btn",
            isBtn = '';

        // Code
        
        $btnMenu.on('click', displayMenu);

        $(navMenuList).on('click', function(){
            collectFullPictures( $(this).data('slide-id') );
        })


        $(document).on('click', function(e){

            isBtn = isHasClass(e.target, navClass) || isHasClass(e.target.parentNode, navClass);

            if( !isBtn && isHasClass(popUpList, 'open') ) {
                hideMenu();
            }
        });

        // Functions

        function displayMenu() {
            return isHasClass(popUpList, 'open') ? hideMenu() : showMenu();
        }

        function hideMenu() {
            $popUpList.slideUp();
            return popUpList.classList.remove('open');
        }

        function showMenu() {
            $popUpList.slideDown();
            return popUpList.classList.add('open');
        }

        function isHasClass(element, className) {
            return element.classList.contains(className);
        }

        function showContent(slider) {
            return $('.slick-active .title, .slick-active .content').fadeIn(400);
        }
        function hideContentSlider() {
            return $('.title, .content').hide(0);
        }

    });
})(window.jQuery);

(function($){

    var arrow = '.green-arrow';
    
    function showNextQuote(){

        var self = $(this);

        self.parent().fadeOut(400, function(){
            $('.quote-' + self.data('to-quote') ).fadeIn(400);
        });
    };

    $(document).on('click', arrow, showNextQuote);

})(window.jQuery);