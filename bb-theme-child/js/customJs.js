// This is the custom JS file

// <a href="http://groupevolution.bedevious.co.uk/" itemprop="url"><img class="fl-logo-img" itemscope="" itemtype="http://schema.org/ImageObject" src="http://groupevolution.bedevious.co.uk/wp-content/uploads/2017/11/Group_Evolution_Logo.png" data-retina="" alt="Group Evolution"><img class="sticky-logo fl-logo-img" itemscope="" itemtype="http://schema.org/ImageObject" src="http://groupevolution.bedevious.co.uk/wp-content/uploads/2017/11/Group_Evolution_Logo.png" alt="Group Evolution"><meta itemprop="name" content="Group Evolution"></a>
// 
// 

$j=jQuery.noConflict();


$j(document).ready(function(){
  //alert('test');

//Custom Footer Logo
$j('.fl-page-footer-wrap').before('<div id="footerLogoWrap"><img class="footerLogoImg" src="http://groupevolution.bedevious.co.uk/wp-content/uploads/2017/11/Group_Evolution_Logo.png" alt="Group Evolution" /></div>');

//Custom Logo Click

$j('#footerLogoWrap').click(function() {
  //alert( "Handler for .click() called." );
  window.location.href='http://groupevolution.bedevious.co.uk';
});

});