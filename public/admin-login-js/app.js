$(document).ready(function(){
	// mobile-menu (290617)
	$(".menuMobIcon").click(function(){
		$(".menuMobIcon > span").toggleClass("cross");
		$(".nav-link").slideToggle();
	});

	$(".signup-btn").click(function(){
		$("#login-pop").slideUp();
		$("#signup-pop").slideDown();
	});

	$(".login-btn").click(function(){
		$("#signup-pop").slideUp();
		$("#login-pop").slideDown();
	});

    $(".carrier-box > h6 > .button").click(function(){

        $("#signup-pop").slideUp();

        $("#login-pop").slideUp();

        $("#carrier-pop").slideDown();

        // alert("Working on it!")

    });

    $("#close").click(function(){

        $("#carrier-pop").slideUp();

        $("#login-pop").slideDown();



    });

	/*$(".map-btn").click(function(){
		$(".map-box").slideToggle();
	});*/

	/* Rates-booking-modal (280617)-start */
	$(".book-btn").click(function(){
		$(".modal-bg").modal("show");
	});
	/* Rates-booking-modal (280617)-end */

	/* Rates-Address-modal (280617)-start */
	$(".address-link").click(function(){
		$(".address-modal").modal("show");
	});
	/* Rates-Address-modal (280617)-end */

	/* Rates-booking-result-modal (280617)-start */
	$(".booking-close-btn").click(function(){
		$(".book-result-modal").modal("show");
	});
	$(".modify-btn").click(function(){
		$(".book-result-modal").modal("hide");
	});
	/* Rates-booking-result-modal (280617)-end */

	/*Switch-button (030717)-start */
    $("#impexp-btn").switchButton({
        on_label: 'Import',
        off_label: 'Export',
        width: 100,
        height: 30,
        button_width: 50
    });
	/*Switch-button (030717)-end */

});
