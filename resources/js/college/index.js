import forms from './forms';
import college from './api';

const {
        getForms,
        collegeInformationData,
        studentInformationData
      } = college();

const loadColleges = getForms();

$( "#flexSwitchCheckDefault").on( "click", function(){
  const checked = $(this).prop('checked');

  if (checked) {
    $('.student-wrapper').fadeIn();
    return;
  }
  $('.student-wrapper').hide();
});

$(".college-form-submit").on("submit", function(e) {
  e.preventDefault();
  const data = {
    form_data: JSON.stringify($(this).serializeArray())
  }

  collegeInformationData({
    data: data
  });
});

$(".student-form-submit").on("submit", function(e) {
  e.preventDefault();
  const data = {
    form_data: JSON.stringify($(this).serializeArray())
  }

  studentInformationData({
    data: data
  });
});
