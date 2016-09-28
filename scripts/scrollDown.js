/**
 * Created by Luke on 28/09/2016.
 */

/*
 Scroll down call
 */
$('#fullpage').fullpage({
    sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
});

//adding the action to the button
$(document).on('click', '#moveDown', function(){
    $.fn.fullpage.moveSectionDown();
});