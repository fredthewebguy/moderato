// smooth scrolling
$('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 400);
            return false;
        }
    }
});  

//open external links automatically in new tab
$('a').each(function() {
   var a = new RegExp('/' + window.location.host + '/');
   if(!a.test(this.href)) {
       $(this).click(function(event) {
           event.preventDefault();
           event.stopPropagation();
           window.open(this.href, '_blank');
       });
   }
});

// toggle search
$('#toggleSearch').click(function(){
    $('#searchBar').toggleClass('open');
    $("#searchBar input").focus();
    return false;
});

// close search
$('#closeSearch').click(function(){
    $('#searchBar').toggleClass('open');
    return false;
});

// toggle mobile menu
$('#toggleMenu').click(function(){
    $('nav').toggleClass('openNav');
    return false;
});

// close search
$('#closeNav').click(function(){
    $('nav').toggleClass('openNav');
    return false;
});

// show promo panel
//setTimeout(function(){$('#promoPanel').addClass('openPanel');}, 4000);

// hide promo panel
//$('#closePromoPanel').click(function(){
//    $('#promoPanel').removeClass('openPanel');
//    return false;
//});