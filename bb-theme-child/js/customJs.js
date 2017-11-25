// This is the custom JS file

$j=jQuery.noConflict();

$j(document).ready(function(){
//Custom Footer Logo
	$j('.fl-page-footer-wrap').before('<div id="footerLogoWrap"><img class="footerLogoImg" src="http://groupevolution.bedevious.co.uk/wp-content/uploads/2017/11/Group_Evolution_Logo.png" alt="Group Evolution" /></div>');

//Custom Logo Click
	$j('#footerLogoWrap').click(function() {
	  //alert( "Handler for .click() called." );
	  window.location.href='http://groupevolution.bedevious.co.uk';
	});

// Pagination wrapall

//$j( "ul.wpv-pagination-nav-links-container" ).wrapAll( "<div class='pagNewWrapper' />");

});