import 'formBuilder';
import college from './../apis';
import forms from './../forms';
import constants from './../../../constants/index';

const { modalCollegeList, collegeForms } = college();
const { collegeFormObject } = forms();
const { FORM_TYPE_COLLEGE } = constants();

const loadCollegeList = modalCollegeList({
  type: FORM_TYPE_COLLEGE
});


const formB = (() => {
  $('.form-builder').formBuilder({
    disabledActionButtons: ['data'],
    onSave: (evt, formData) => saveForm(formData),
  });
})();

const saveForm = async (formData) => {
  collegeFormObject.form_data = formData;
  collegeFormObject.type = 'college';
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
