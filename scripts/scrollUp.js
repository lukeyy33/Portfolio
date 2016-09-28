/*
    Scroll up call
 */
$('#fullpage').fullpage({
    sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
});

//adding the action to the button
$(document).on('click', '#moveUp', function(){
    $.fn.fullpage.moveSectionUp();
});
