const collegeAPI = () => {
  const create = null;
  const read = `${APP_URL}college/get-forms`;
  const update = null;
  const destroy = null;

  return { create, read, update, destroy }
}

export default collegeAPI;
