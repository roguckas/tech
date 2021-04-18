
$( document ).ready(function() {

  $("#block-tpk-main-menu").append($("#block-kalboskeitiklis"));
  $(".social-media-links").insertAfter( $(".footer-logo .logo") );
  if ( document.documentElement.lang.toLowerCase() === "en" ) {
    $( ".hello" ).remove();
  }

  if(window.matchMedia("(max-width: 767px)").matches){
    // The viewport is less than 768 pixels wide
    $(".navbar-header").append( $("#navbar-collapse .logo") );
    $(".navbar div .navbar-collapse .container nav ul").append( $(".navbar div .navbar-collapse .region-navigation-collapsible .language-switcher-language-url") );
    $("#block-tpk-main-menu").append($("#block-kalboskeitiklis"));

  } else{
    // The viewport is at least 768 pixels wide
    $("#block-tpk-main-menu").append($("#block-kalboskeitiklis"));
  }

});
