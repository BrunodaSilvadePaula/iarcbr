
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
$(document).ready(function(){
  $("#new-notice").click(function(){
    $("#createNoticia").modal('toggle');     
  });
  $('textarea').wysihtml5();
  $('.icon-list').addClass('fa fa-list');
  $('.icon-th-list').addClass('fa fa-th-list');
  $('.icon-indent-right').addClass('fa fa-align-right');
  $('.icon-indent-left').addClass('fa fa-align-left');
  $('.icon-share').addClass('fa fa-search');
  $('.icon-picture').addClass('fa fa-picture-o');
});
