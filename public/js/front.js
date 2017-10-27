/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 37);
/******/ })
/************************************************************************/
/******/ ({

/***/ 37:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(38);


/***/ }),

/***/ 38:
/***/ (function(module, exports) {

$(document).ready(function () {
  $(".scroll").click(function (event) {
    event.preventDefault();
    $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 800);
  });
  $('#phone').mask("(99) 9999-9999?9").ready(function (event) {
    var target, phone, element;
    target = event.currentTarget ? event.currentTarget : event.srcElement;
    phone = target.value.replace(/\D/g, '');
    element = $(target);
    element.unmask();
    if (phone.length > 10) {
      element.mask("(99) 99999-999?9");
    } else {
      element.mask("(99) 9999-9999?9");
    }
  });
  var posicaoApp = $('#app').position().top;
  var posicaoService = $('#servicos').position().top;
  var posicaoCliente = $('#clientes').position().top;
  var posicaoNoticia = $('#noticias').position().top;
  var posicaoContato = $('#contato').position().top;
  $(document).scroll(function () {
    // oscultador de scroll
    var posicaoScroll = $(document).scrollTop(); // obtem a quantidade de scroll no momento
    if (posicaoApp < posicaoScroll) {
      $('.navbar-default').addClass('menu-fixed');
      $('.menu-app').addClass('active');
      $('.menu-service').removeClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-contato').removeClass('active');
    } else {
      $('.navbar-default').removeClass('menu-fixed');
    }
    if (posicaoService <= posicaoScroll) {
      $('.menu-service').addClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-contato').removeClass('active');
    }
    if (posicaoCliente <= posicaoScroll) {
      $('.menu-cliente').addClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-service').removeClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-contato').removeClass('active');
    }
    if (posicaoNoticia <= posicaoScroll) {
      $('.menu-notice').addClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-service').removeClass('active');
      $('.menu-contato').removeClass('active');
    }
    if (posicaoContato <= posicaoScroll) {
      $('.menu-contato').addClass('active');
      $('.menu-notice').removeClass('active');
      $('.menu-cliente').removeClass('active');
      $('.menu-app').removeClass('active');
      $('.menu-service').removeClass('active');
    }
  });
  $(function () {
    $(window).scroll(function () {
      var window_scrolltop = $(this).scrollTop();

      // Passa por cada elemento com a classe .parallax
      $('.parallax').each(function () {
        var obj = $(this);

        // Garante que apenas trabalhemos no elemento que está visível na tela
        if (window_scrolltop >= obj.position().top - obj.height() && window_scrolltop <= obj.position().top + obj.height()) {

          // O atributo data-divisor vai definir a velocidade do efeito
          var divisor = typeof obj.attr('data-divisor') == 'undefined' ? 4 : obj.attr('data-divisor');

          // Corrige a diferença do primeiro elemento
          if (obj.is(':first-child')) {
            var bg_pos = (window_scrolltop - obj.position().top) / divisor;
          } else {
            var bg_pos = (window_scrolltop - obj.position().top + (obj.height() - 100)) / divisor;
          }

          // Modifica a posição do bg
          obj.css({
            'background-position': '50% -' + bg_pos + 'px'
          });

          // Animação do primeiro texto
          obj.children('.text').css({
            'bottom': window_scrolltop - obj.position().top + 100 + 'px'
          });
        } // Garante que apenas trabalhemos no elemento que está visível na tela
      }); // $('.parallax').each(function(){ ...
    }); // $(window).scroll(function(){ ...
  }); // jQuery
});

/***/ })

/******/ });