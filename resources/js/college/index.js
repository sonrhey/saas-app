import forms from './forms';
import college from './api';

const { getForms } = college();

const loadColleges = getForms();

$( "#flexSwitchCheckDefault").on( "click", function(){
  const checked = $(this).prop('checked');

  if (checked) {
    $('.student-wrapper').fadeIn();
    return;
  }
  $('.student-wrapper').hide();
});
