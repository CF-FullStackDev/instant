
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });


$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 150) {
    $('.sub-navbar').stop().fadeIn();
  } else {
    $('.sub-navbar').stop().hide();
  }
});

if ($('#back-to-top').length) {
    var scrollTrigger = 150,
    backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
            $('#back-to-top').addClass('show');
        } else {
            $('#back-to-top').removeClass('show');
        }
    };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $(document).on("click","#back-to-top",function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

$(document).on("click","#target-reviews",function() {
    $('html, body').animate({
        scrollTop: $("#section-reviews").offset().top
    }, 700);
});

$(document).on("click","#target-reviews-comment",function() {
    $('html, body').animate({
        scrollTop: $("#section-reviews").offset().top
    }, 700);
    $("#toggle-review-form").collapse();
});

// $('#modal-newsletter').modal();

$(document).on("click","#target-main-search",function(e) {
    e.preventDefault();
    e.stopPropagation();
    if ($(".search-panel").hasClass('slide-up-fade-in')) {
        $(this).removeClass('fa-close');
        $(this).addClass('fa-search');
        $(".search-panel").removeClass('slide-up-fade-in');
        $(".search-panel").addClass('slide-up-fade-out');
    }
    else {
        $(this).removeClass('fa-search');
        $(this).addClass('fa-close');
        $(".search-panel").addClass('slide-up-fade-in');
        $(".search-panel").removeClass('slide-up-fade-out');
    }
});

$(document).on("click",".main-search-container",function(e) {
    e.stopPropagation();
});

$(window).click(function(e) {
    var panel = $(".search-panel");
    if (panel.hasClass('slide-up-fade-in')) {
        $('#target-main-search').removeClass('fa-close');
        $('#target-main-search').addClass('fa-search');
        panel.removeClass('slide-up-fade-in');
        panel.addClass('slide-up-fade-out');
    }
});
