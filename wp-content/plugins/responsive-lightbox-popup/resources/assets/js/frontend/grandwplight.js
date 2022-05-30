jQuery(document).ready(function(){
   var customGalleries = jQuery('.responsive-lightbox-popup'),
       selector = 'a[href$=".gif"][rel!="noopener"], a[href$=".jpg"][rel!="noopener"], a[href$=".png"][rel!="noopener"], a[href$=".bmp"][rel!="noopener"], a[href*="youtube"][rel!="noopener"], a[href*="youtu.be"][rel!="noopener"], a[href*="vimeo.com"][rel!="noopener"]',
       galleryOptions = { selector: selector };

    /**
     * If there are custom elements defined as lightbox galleries, initialize the lightGallery on each gallery separately,
     * otherwise initialize it on whole page
     */
    if(customGalleries.length){
        customGalleries.lightGallery(galleryOptions);
    }else{
        jQuery('body').lightGallery(galleryOptions);
    }

});