$(document).ready(function() {

    $('#accordion').accordion({
        collapsible: true,
        heightStyle: "content"
        });

  //  $('.expanderClickable').click(function() {
  //      var isVisible = ($(this).html() == '-');
  //      var id = $(this).parent().children('.expander').attr('projectName'); 

  //      $('#'+id).toggle('slow');

  //      var newSign = '-';
  //      if (isVisible)
  //      {
  //          // no longer visible, make it a minus!
  //          newSign = '+';
  //      }

  //      $(this).parent().children('.expander').html(newSign)
  //  });
});
