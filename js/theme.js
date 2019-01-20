/**
 * Created by exact on 7/1/2017.
 */
(function($){
    $(function(){
		$('.sidenav').sidenav();
        $('.parallax').parallax();

    }); // end of document ready

    // main dropdown initialization
    $('.dropdown-button.main-menu-item').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: true, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });
    // nested dropdown initialization
    $('.dropdown-button.sub-menu-item').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: ($('.dropdown-content').width() * 3) / 3.05 + 3, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });
	
	
	
})(jQuery); // end of jQuery name space