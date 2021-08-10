$(document).ready(function(){
    $(".hamburger").click(function(){
        $(".header__nav").slideToggle();
    })



    var owl = $('#tech');

    $("#tech").owlCarousel({
        loop: true,
		center: true,
		items: 3,
		margin: 30,
		autoplay: true,
		dots:false,
    nav:false,
		autoplayTimeout: 8500,
		smartSpeed: 450,
  	navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive: {
			0: {
				items: 2
			},
			768: {
				items: 5
			},
			1170: {
				items: 7
			}
		}
    });
})