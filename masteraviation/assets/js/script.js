$(document).ready(function(){


    /*=======================================

        Scroll bar functiion
    
    =========================================*/ 

        var backToTop           = document.getElementById("back-to-top");
        var footerFixedButton   = document.getElementById("footer-fixed-button");
        var bodyHeader          = document.getElementById("body-header");   

        // run function after 200px scrolly 
        var myScrollFunc = function () {
            var y = window.scrollY;

            if (y >= 200) {
                backToTop.className = "back__to-top d__show";
                footerFixedButton.className  = "footer__fix-button d__show";
                bodyHeader.classList.add("body__header-fixed");
            } else {
                backToTop.className = "back__to-top d__hide";
                footerFixedButton.className  = "footer__fix-button d__hide";
                bodyHeader.classList.remove("body__header-fixed");

            }
        };

        // back to top button
        $("#back-to-top").on('click', function() {
            $('html, body').animate({
            scrollTop: $('html, body').offset().top,
            }, 1000);
        });

        window.addEventListener("scroll", myScrollFunc);

    /*==========================================
    
        End  of Scroll Bar Functions
    
    ============================================*/
    
    
    // write condition for mobile and desktop
    var windowHeight =  window.window.innerHeight;
    var windowWidth =  window.window.innerWidth;

    if(windowWidth <= 684){
        $(".hamburger").click(function(){
            $('.main__nav').slideToggle(300);
        })

        $(".nav__parent").click(function(){
            $(this).find('.sub__nav').slideToggle(300);
        })
        AOS.init();

    } else if (685 <= windowWidth){

        //navigation
        $(".nav__parent").hover(function(){
            $(this).find('.sub__nav').slideToggle(500);
        })

        AOS.init();
        

    }


    /*===========================================
    
        active navigation
    
    =============================================*/ 
        const navLi = document.querySelectorAll('.nav__link');
        const sections = document.querySelectorAll('.section__wrap');

        // window scroll function
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                let sectionTop = section.offsetTop;

                console.log(sectionTop);
                if (scrollY >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });
            navLi.forEach(li => {
                li.classList.remove('active__nav');
                document.querySelector('.nav__link[href*= ' + current + ']').classList.add('active__nav');
            });
        });
})