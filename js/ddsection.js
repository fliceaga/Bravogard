import $ from 'jquery';

$(document).ready(function() {
  $('a[data-section]').click(function(e) {
    e.preventDefault(); // Evita el comportamiento predeterminado del enlace

    var target = $(this).data('section'); // Obtiene el valor del atributo 'data-section'
    var offset = $('#' + target).offset().top; // Obtiene la posición de la sección en relación con la parte superior de la página

    $('html, body').animate({ scrollTop: offset }, 500); // Realiza el desplazamiento suave
  });
});
