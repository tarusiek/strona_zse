//ZNIKANIE PRELOADERA//
$(function(){
    setTimeout(function(){
        $("#preloader").fadeOut(1500);}, 2000);
});


//PRZESUWANIE ZDJĘCIA NA WRAPPERZE//
var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 5000);



//DODAWANIE I USUWANIE HAMBURGERKA

jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww < 940) {
      $('.navbar_main_mobile').removeClass('menu_hamburger_close');
      
      //console.log("dodana, szerokosc: " + ww);

    } else if (ww >= 940) {
      $('.navbar_main_mobile').addClass('menu_hamburger_close');
      //console.log("usunieta, szerokosc: " + ww);
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  alterClass();
});

//POKAZUJE LISTE PO KLIKNIECIU W HAMBURGERKA
function show_hamburger_list() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


//DODAWANIE KLASY BOX-SHADOW DO NAVBAR//
$(window).scroll(function() {    
  var scroll = $(window).scrollTop();
  
  if(scroll >=40 && ww<940) {
      $(".navbar").addClass("add_box_shadow");
  } else {
      $(".navbar").removeClass("add_box_shadow");
  }
});


//GDZIEKOLWIEK SIĘ NIE KLIKNIE TO HAMBURGEREK REAGUJE
function click_whole_box_hamburger(){
  $(".ham").toggleClass("active ");
}


//OTWIERA STRONE DZIENNIKA
function otworz_dziennik(){
  window.open('www.dziennik.zse-zdwola.pl', '_blank');
}
