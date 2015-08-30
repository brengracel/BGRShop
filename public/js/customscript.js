document.getElementById("foot01").innerHTML =
"<p>&copy;  "
+ new Date().getFullYear() 
+ " BGR Online Shop. All rights reserved.</p>";

jQuery(document).ready(function(){
   jQuery('#nav_bar').containedStickyScroll();
});

jQuery(window).scroll(function(){
   if (jQuery(window).scrollTop > 0  ){
       jQuery('#header').css('display','none');
   }
   else if(jQuery(window).scrollTop === 0 ) {
       jQuery('#header').css('display','static');
   }
});
