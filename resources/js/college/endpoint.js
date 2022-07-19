const collegeAPI = () => {
  const create = null;
  const read = `${APP_URL}college/get-forms`;
  const update = null;
  const destroy = null;
  const register = `${APP_URL}college/register-student`;
  const collegeFormData = `${APP_URL}college/college-form-data`;
  const studentFormData = `${APP_URL}college/student-form-data`;

  return { create, read, update, destroy, register, collegeFormData, studentFormData }
}

export default collegeAPI;
