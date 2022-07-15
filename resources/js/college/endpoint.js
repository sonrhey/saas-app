const collegeAPI = () => {
  const create = null;
  const read = `${APP_URL}college/get-forms`;
  const update = null;
  const destroy = null;
  const register = `${APP_URL}college/register-student`

  return { create, read, update, destroy, register }
}

export default collegeAPI;
