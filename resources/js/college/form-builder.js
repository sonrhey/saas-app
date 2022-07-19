import constants from './../constants/index';

const { FORM_TYPE_COLLEGE, FORM_TYPE_STUDENT } = constants();

const formBuilder = () => {
  const build = ({
    data: data
  }) => {
    const studentForm = data.find(q => q.type === FORM_TYPE_STUDENT);
    const collegeForm = data.find(q => q.type === FORM_TYPE_COLLEGE);

    const college_form_data = JSON.parse(collegeForm.form_data);
    const student_form_data = JSON.parse(studentForm.form_data);

    buildCollegeForm({
      college_form_data: college_form_data
    });

    studentCollegeForm({
      student_form_data: student_form_data
    });
  }

  const buildCollegeForm = ({
    college_form_data: college_form_data
  }) => {
    let button = null;
    let input = null;

    college_form_data.forEach((item) => {
      if (item.type === 'button') {
        $('.college-form-submit').append(`
          <div class="mb-3">
            <button type="${item.subtype}" class="${item.className}">${item.label}</button>
          </div>
        `);
      } else {
        $('.college-form-submit').append(`
          <div class="mb-3">
            <label class="form-label">${item.label}</label> ${checkRequired(item).indicator}
            <input type=${item.subtype} ${checkPlaceHolder(item)} name="${item.name}" class="${item.className}" ${checkRequired(item).required}>
          </div>
        `);
      }
    });
  }

  const studentCollegeForm = ({
    student_form_data: student_form_data
  }) => {
    student_form_data.forEach((item) => {
      if (item.type === 'button') {
        $('.student-form-submit').append(`
          <div class="mb-3">
            <button type="${item.subtype}" class="${item.className}">${item.label}</button>
          </div>
        `);
      } else {
        $('.student-form-submit').append(`
          <div class="mb-3">
            <label class="form-label">${item.label}</label> ${checkRequired(item).indicator}
            <input type=${item.subtype} ${checkPlaceHolder(item)} name="${item.name}" class="${item.className}" ${checkRequired(item).required}>
          </div>
        `);
      }
    });
  }

  const checkPlaceHolder = (item) => {
    let placeholder = null;
    if (item.placeholder) {
      placeholder = `placeholder="${item.placeholder}"`;
    }

    return placeholder;
  }

  const checkRequired = (item) => {
    let required = null;
    let indicator = null;
    if (item.required) {
      required = `required="${item.required}"`;
      indicator = `<span style="color: red">*</span>`;
    }
    return { required, indicator };
  }

  return { build }
}

export default formBuilder;
