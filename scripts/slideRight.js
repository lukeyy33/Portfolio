/**
 * Created by Luke on 28/09/2016.
 */
$('#fullpage').fullpage({
    anchors: ['page1', 'page2', 'page3', 'page4'],
    sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
});

//adding the action to the button
$(document).on('click', '#moveRight', function(){
    $.fn.fullpage.moveSlideRight();
});