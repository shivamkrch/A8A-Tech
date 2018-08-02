$(document).ready(function(){
    function expandNav(){
    var expand =document.getElementById("navexpand");
    if(expand.classList.contains('glyphicon-chevron-up')){
        expand.classList.remove('glyphicon-chevron-up');
        expand.classList.add('glyphicon-chevron-down');
    }
    else if(expand.classList.contains('glyphicon-chevron-down')){
        expand.classList.remove('glyphicon-chevron-down');
        expand.classList.add('glyphicon-chevron-up');
    }
}
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
        'alt+s': function(){
            $('#hotkeyModal').modal('hide');
            $('#subModal').modal('toggle');},
        'k': function(){
        $('#subModal').modal('hide');
        $('#hotkeyModal').modal('toggle');
         }
       
    });
});