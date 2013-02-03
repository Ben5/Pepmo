$(document).ready(function() {
    $('.expander').click(function() {
        var isVisible = ($(this).html() == '-');
        var id = $(this).attr('projectName'); 

        $('#'+id).toggle('slow');

        var newSign = '-';
        if (isVisible)
        {
            // no longer visible, make it a minus!
            newSign = '+';
        }

        $(this).html(newSign)
    });
});


