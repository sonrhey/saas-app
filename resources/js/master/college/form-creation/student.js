import 'formBuilder';
import college from './../apis';
import forms from './../forms';

const { modalCollegeList, collegeForms } = college();
const { collegeFormObject } = forms();

const loadCollegeList = modalCollegeList();

const formB = (() => {
  $('.form-builder').append('<textarea name="formBuilder" id="formBuilder"></textarea>');
  $('textarea').formBuilder({
    disabledActionButtons: ['data'],
    onSave: (evt, formData) => saveForm(formData),
  });
})();

const saveForm = async (formData) => {
  collegeFormObject.form_data = formData;
  collegeFormObject.type = 'student';
  collegeForms({
    data: collegeFormObject
  });
}

$('#college-list tbody').on('dblclick', 'tr', function () {
  const data = loadCollegeList.row($(this)).data();
  collegeFormObject.college_id = data.college_id;
  $('[name="college_name"]').val(data.name);
  $('#college-list-modal').modal('hide');
});
