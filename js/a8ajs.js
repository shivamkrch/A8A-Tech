$(document).ready(function(){
    $("[data-toggle='popover']").popover('show');
    
    $('#google_translate_element2').hover(function(){
        $(this).addClass('bg-light');
    });
    $('#google_translate_element2').mouseleave(function(){
        $(this).removeClass('bg-light');
    });
    var value = 0;
    $('#collapsibleNavbar').on("hide.bs.collapse",function(){
        $('.navbar-toggler').attr("title","Expand");
        value+=180;
        $("#navtoggle").rotate({animateTo:value});
//        $('#navtoggle').removeClass('fa-chevron-up');
//        $('#navtoggle').addClass('fa-chevron-down');
    });
    $('#collapsibleNavbar').on("show.bs.collapse",function(){
        $('.navbar-toggler').attr("title","Collapse");
        value+=180;
        $("#navtoggle").rotate({animateTo:value});
//        $('#navtoggle').removeClass('fa-chevron-down');
//        $('#navtoggle').addClass('fa-chevron-up');
        
    });
    $('#pagenav').click(function(){
        var page=$('#pageip').val();
        if(page!="" && $('#pageip').checkValidity())
        document.location.href=window.location.pathname+ '?page=' + page;
    else
        document.location.href="#";
    });
    
    $('.navbar-toggler').on('click',function(){
       $(this).fadeIn(1000); 
    });
    $('#subBtn').click(function(){
        $('#collapsibleNavbar').collapse('hide');
        
    });
    $(".shadow-sm").mouseover(function(){
    	$(this).addClass("shadow");
    });
    $(".shadow-sm").mouseleave(function(){
    	$(this).removeClass("shadow");
    });
    //Google Translate
      $('#google_translate_element').on("click", function () {

                // Change font family and color
                $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div") //, .goog-te-menu2 *
                .css({
                    'color': '#544F4B',
                    'background-color': '#EFEFF1',
                    'font-family': 'Consolas !important'
                });

                // Change hover effects  #e3e3ff = white
                $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
                    $(this).css('background-color', '#17548d').find('span.text').css('color', '#EFEFF1');
                }, function () {
                    $(this).css('background-color', '#EFEFF1').find('span.text').css('color', '#544F4B');
                });

                // Change Google's default blue border
                $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #17548d');

                $("iframe").contents().find('.goog-te-menu2').css('background-color', '#EFEFF1');

                // Change the iframe's box shadow
                $(".goog-te-menu-frame").css({
                    '-moz-box-shadow': '0 3px 8px 2px #666666',
                    '-webkit-box-shadow': '0 3px 8px 2px #666',
                    'box-shadow': '0 3px 8px 2px #666'
                });
            });  
    $('#collapsibleNavbar').on('show.bs.collapse',function(){
        $('.slideanim0').addClass('slide');
    });
    $(document).ready(function(){
        $('.slideanim1').addClass('slide');
        $('.slideanim0').addClass('slide');
    });
    
    $(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;
    var winTop = $(window).scrollTop();
    if($(window).innerWidth()>=768){
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }}else{
        if (pos < winTop + 850) 
            $(this).addClass("slide");
    }
  });
});
// Add smooth scrolling to top link in footer
function smoothScroll() {
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 600, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
  }
  $("#toTop").on('click', smoothScroll);
  var x=setInterval(function(){
        $("#gtop").slideUp(200).slideDown(200);
        $("#gtop").slideUp(200).slideDown(200);
    },3000);
    $('[data-toggle="tooltip"]').tooltip();
    //Shortcuts using Mousetrap
    Mousetrap.bind({
        'h': function(){ document.location.href="index.php";},
        'm': function(){document.location.href="mobiles.php";},
        'p': function(){document.location.href="pcs.php";},
       's': function(){document.location.href="socialmedia.php";},
       'o': function(){document.location.href="others.php";},
       'a': function(){document.location.href="aboutus.php";},
       't': function(){document.location.href="#banner";},
       'b': function(){document.location.href="#gtop";},
        'k': function(){
        $('#subModal').modal('hide');
        $('#hotkeyModal').modal('toggle');
         }
    });
    
 
    $('#pageip').keyup(function(){
        if($('#pageip').val!=""){
            $('#pagenav').removeClass('disabled');
        }else
            $('#pagenav').addClass('disabled');
    });
});

