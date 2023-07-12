import $ from 'jquery';

const $ = require('jquery');
// using CommonJS syntax for importing jQuery module.

$(document).ready(function() {
    // Aplicar efecto de desvanecimiento al cargar la página
    $('body').hide().fadeIn(1000);
  
    // Aplicar efecto de barrido al recorrer la página
    $(window).scroll(function() {
      $('.elemento-a-animar').each(function() {
        var posicionElemento = $(this).offset().top;
        var posicionScroll = $(window).scrollTop();
        var ventanaAltura = $(window).height();
  
        if (posicionScroll > posicionElemento - ventanaAltura + 100) {
          $(this).addClass('animar');
        }
      });
    });
  });
  