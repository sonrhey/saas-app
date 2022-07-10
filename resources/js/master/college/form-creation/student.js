import 'formBuilder';

const formB = (() => {
  $('.form-builder').append('<textarea name="formBuilder" id="formBuilder"></textarea>');
  $('textarea').formBuilder({
    disabledActionButtons: ['data'],
    onSave: (evt, formData) => console.log(formData),
  });
})();