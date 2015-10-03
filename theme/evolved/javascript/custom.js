var elementPosition = $('#page-header').offset();
var visHead = $('#page-header').is(':visible');

$(window).scroll(function(){
        if($(window).scrollTop() > elementPosition.top+255){
              $('#page-header').addClass('stickyHeader');
        } else {
            $('#page-header').removeClass('stickyHeader');
        }    
});

function checkVisible(){
if(visHead==true) {$('#page-content').addClass('hasHeader');}
}
checkVisible();