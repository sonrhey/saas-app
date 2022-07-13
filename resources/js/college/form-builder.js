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
            <button type="${item.type}" class="${item.className}">${item.label}</button>
          </div>
        `);
      } else {
        $('.college-form-submit').append(`
          <div class="mb-3">
            <label class="form-label">${item.label}</label>
            <input type=${item.type} placeholder="${item.placeholder}" class="${item.className}">
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
            <button type="${item.type}" class="${item.className}">${item.label}</button>
          </div>
        `);
      } else {
        $('.student-form-submit').append(`
          <div class="mb-3">
            <label class="form-label">${item.label}</label>
            <input type=${item.type} placeholder="${item.placeholder}" class="${item.className}">
          </div>
        `);
      }
    });
  }

  return { build }
}

export default formBuilder;
