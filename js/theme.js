/**
 * Created by exact on 7/1/2017.
 */
(function($){
    $(function(){
		$('.sidenav').sidenav();
        $('.parallax').parallax();

    }); // end of document ready

    // main dropdown initialization
	jQuery(".nav-item-dropdown-button").dropdown({constrainWidth: true});
	jQuery(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false});
	
	
	
})(jQuery); // end of jQuery name space