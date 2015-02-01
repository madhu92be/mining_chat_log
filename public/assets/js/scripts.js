$('button.animate').on('click', function(){
    $('.sidebar').toggleClass('show');
    
    if ($('.sidebar').hasClass('show')) {
        ('i').removeClass('fa-navicon');
        ('i').addClass('fa-times');
    }
    else
    {
        ('button.animate > i').removeClass('fa-times');
        ('button.animate > i').addClass('fa-navicon');
    }
});

$('.expander h4').on('click', function(){
    $(this)
    .siblings('ul')
    .toggleClass('seen');
});
$('.expander li').on('click', function(){
    $(this).toggleClass('active').siblings('li').removeClass('active');
});

$('.wish-add').bind('click', function(e) {
  e.preventDefault();
  $('.wish-add a').toggleClass('added');
  $('.wishlist').toggleClass('toggled animate');
});

//Input label hide/show function
$('.form-group input').focus(function () {
    $(this).prev('label').removeClass('hide');
    $(this).prev('label').addClass('show');
})
.blur(function () {
    $(this).prev('label').removeClass('show');
    $(this).prev('label').addClass('hide');
});

//Google Api
new Maplace({
    locations: LocsB,
    map_div: '#gmap-list',
    controls_type: 'list',
    controls_title: 'Choose a location:'
}).Load();

//menu scrollspy

$('body').scrollspy({ target: '.nav-body' });

// Lazy Load Init and fade in effect
$("section.lazy").show().lazyload();
$("section.lazy").lazyload({
    effect : "fadeIn"
});

//ease in scrolling
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

//banner search go to search results page
$(function(){
 $(".banner-form input").keypress(function (e) {
    if (e.keyCode == 13) {
        // $("#header").show("slow");
        event.preventDefault();
        window.location.href = '#header';
    }
 });
});