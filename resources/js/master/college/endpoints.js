const collegeAPI = () => {
  const create = `${APP_URL}master/college/create`;
  const read = `${APP_URL}master/college/college-list`;
  const update = null;
  const destroy = null;
  const collegeForm = `${APP_URL}master/college/college-form`;
  const noCreatedFormsColleges = `${APP_URL}master/college/no-form-created-colleges`;

  return { create, read, update, destroy, collegeForm, noCreatedFormsColleges }
}

export default collegeAPI;
