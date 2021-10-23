$(document).ready(function(){
    $(".sticky__enquiry").fadeOut();

    const mediaQuery = window.innerWidth;

    //modal 
    $(".modal__open").click(function(){
       var header = $(this).attr("data-button");
       var name = $(this).attr("data-name");

       $(".modal-title").text(header);
       $(".modal-submit").attr("name", name)
    // alert(name);
    })


    // media query
    if(mediaQuery < 768){
        //small device
        $(".hamburger").click(function(){
            $(".header__nav").slideToggle();
        });

        $(".nav__link").click(function(){
            $(".header__nav").slideUp();
        });

        $(window).scroll(function () {
            var height = $(window).height();
            var height = height;
        
            if ($(window).scrollTop() > height) {
                // $(".body__header").removeClass("non__fixed-header");
                // $(".body__header").addClass("fixed-header");

                $(".sticky__enquiry").fadeIn();
                // console.log(1000);
            } else {
                // $(".body__header").removeClass("fixed-header");
                // $(".body__header").addClass("non__fixed-header");
                $(".sticky__enquiry").fadeOut();
                // console.log(2000);
            }
        });
    } else {
        // large device
        $(window).scroll(function () {
            var height = $(window).height();
            var height = height / 2;
        
            if ($(window).scrollTop() > height) {
                $(".body__header").removeClass("non__fixed-header");
                $(".body__header").addClass("fixed-header");

                $(".sticky__enquiry").fadeIn();
                // console.log(1000);
            } else {
                $(".body__header").removeClass("fixed-header");
                $(".body__header").addClass("non__fixed-header");
                $(".sticky__enquiry").fadeOut();
                // console.log(2000);
            }
        });
    }

})