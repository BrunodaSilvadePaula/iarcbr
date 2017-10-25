$(document).ready(function(){
  $(".scroll").click(function(event){        
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
  });
  var posicaoApp = $('#app').position().top;
  var posicaoService = $('#servicos').position().top;
  var posicaoCliente = $('#clientes').position().top;
  var posicaoNoticia = $('#noticias').position().top;
  var posicaoContato = $('#contato').position().top;
  $(document).scroll(function () { // oscultador de scroll
    var posicaoScroll = $(document).scrollTop(); // obtem a quantidade de scroll no momento
    if (posicaoApp < posicaoScroll){
      $('.navbar-default').addClass('menu-fixed');
      $('.menu-app').addClass('active');
      $('.menu-service').removeClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-contato').removeClass('active');
    }else{
      $('.navbar-default').removeClass('menu-fixed');
    }
    if (posicaoService <= posicaoScroll){
      $('.menu-service').addClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-contato').removeClass('active');
    }
    if (posicaoCliente <= posicaoScroll){
      $('.menu-cliente').addClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-service').removeClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-contato').removeClass('active');
    }
    if (posicaoNoticia <= posicaoScroll){
      $('.menu-notice').addClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-service').removeClass('active');
      $('.menu-contato').removeClass('active');
    }
     if (posicaoContato <= posicaoScroll){
      $('.menu-contato').addClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-service').removeClass('active');
    }   
  });
  $(function(){
    $(window).scroll(function(){
      var window_scrolltop = $(this).scrollTop();

      // Passa por cada elemento com a classe .parallax
      $('.parallax').each(function(){
        var obj = $(this);

        // Garante que apenas trabalhemos no elemento que está visível na tela
        if ( window_scrolltop >= obj.position().top - obj.height() 
            && window_scrolltop <= obj.position().top + obj.height()) {

          // O atributo data-divisor vai definir a velocidade do efeito
          var divisor = typeof obj.attr('data-divisor') == 'undefined' ? 4 : obj.attr('data-divisor');

          // Corrige a diferença do primeiro elemento
          if ( obj.is(':first-child') ) {
            var bg_pos = ( window_scrolltop - obj.position().top ) / divisor;
          } else {
            var bg_pos = ( window_scrolltop - obj.position().top + ( obj.height() - 100 ) ) / divisor;
          }

          // Modifica a posição do bg
          obj.css({
            'background-position' : '50% -' + bg_pos + 'px'
          });

          // Animação do primeiro texto
          obj.children('.text').css({
            'bottom' : ( window_scrolltop - obj.position().top + 100 ) + 'px'
          });

        } // Garante que apenas trabalhemos no elemento que está visível na tela
      }); // $('.parallax').each(function(){ ...
    }); // $(window).scroll(function(){ ...
    }); // jQuery
    });

