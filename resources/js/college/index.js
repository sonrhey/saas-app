import forms from './forms';
import college from './api';


const { informationSubmit } = forms();

const {
        getForms,
        collegeInformationData,
        studentInformationData,
        studentList
      } = college();

const loadColleges = getForms();
const loadStudents = studentList();

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
  informationSubmit.form_data = JSON.stringify($(this).serializeArray());
  collegeInformationData({
    data: informationSubmit
  });
});

$(".student-form-submit").on("submit", function(e) {
  e.preventDefault();
  informationSubmit.form_data = JSON.stringify($(this).serializeArray());
  studentInformationData({
    data: informationSubmit
  });
});

$('#student-list tbody').on('dblclick', 'tr', function () {
  const data = loadStudents.row($(this)).data();
  informationSubmit.student_id = data.student_id
  $('[name="student_name"]').val(data.name);
  $('#student-list-modal').modal('hide');
  $('.my-forms').removeClass('d-none');
});
