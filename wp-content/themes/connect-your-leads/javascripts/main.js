 // Attach FastClick to remove the 300ms tap delay on touch browsers
// $(function() {
//     FastClick.attach(document.body);
// });

$(document).ready(function() {
    $("#nav-toggle").on("click", function() {
        $('.top-nav ul.menu').toggleClass('open');
        $(this).toggleClass('close-icon');
        return false;
    });

      $('#get-a-quote input[type="text"]').jvFloat();
      $('li.menu-item-has-children').append('<a href="#" aria-haspopup="true" aria-expanded="false" class="sub-menu-toggle"></a>');
       
    $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() >= 992) {
            // if larger or equal

        } else {
            // if smaller
           $(".menu-item").on("click", function() {
            $(this).children('ul.sub-menu').toggleClass('expanded');
            $(this).children("a.sub-menu-toggle").toggleClass('opened');
            // return false;
    });

        }
    }).resize(); // This will simulate a resize to trigger the initial run.




    $('.results-tbl a.disclaimer').click(function(){
        $(this).parents('tr').next().toggle();

        return false;
    });

    // disclaimer text modal
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });    

    
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });    

});

  $('#menu-main-menu').append('<li style="width: 100px;"><div data-id="4b30207a01" class="livechat_button"><a href="https://www.livechatinc.com/?partner=lc_8068871&amp;utm_source=chat_button">live chat software</a></div></li>');
  var placeSearch;
  var autocomplete = [];

  var componentForm = {
       street_number: 'short_name',
       route: 'long_name',
       locality: 'long_name',
       administrative_area_level_1: 'long_name',
       country: 'long_name',
       postal_code: 'short_name'
  };

  $('.search-button').click(function(){
      $('#search-form').submit();
  })


  function suite_selector(selector){
      var toggle = 0;
      if(toggle < 1){
        $("#address").animate({}, 1000, function(){
            $("#address").after('<input id="testing" class="testing input address-autocomplete" type="form-control" name="search" placeholder="Enter address" style="width: 0px; margin-left: 5px;" autocomplete="off"></input>');
            $('#testing').animate({width: '20%'}, 1000);
        });
        toggle++;
      }
  }