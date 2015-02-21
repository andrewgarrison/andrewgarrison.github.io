$(document).ready(function() {
  $('a.popup-window').click(function() {
    var popupBox = $(this).attr('href');
    $(popupBox).fadeIn(400);

    var popMargTop = ($(popupBox).height() + 24) / 2;
    var popMargLeft = ($(popupBox).width() + 24) / 2;

    $(popupBox).css({
      'margin-top' : -popMargTop,
      'margin-left' : -popMargLeft
    });
    $("#mask").fadeIn(400);
    return false;
  });
    $('body').append('<div id="mask"></div>');

  /* Close the dialog box by clicking close button, or anywhere outside the box, or esc key */
  $(document).on('click', '#mask, button.close', function() {
    $('#mask, .popupInfo').fadeOut(400, function() {
      $('#mask').remove();
    });
  });
  $(document).keyup(function(e) {
    if(e.keyCode === 27) {
      $('#mask, .popupInfo, #popup-box').fadeOut(400, function(){
        $('#mask').remove()
      });
    }
  });
});
