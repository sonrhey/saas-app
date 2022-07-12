const response = () => {
  const RESPONSE_SUCCESS = 'linear-gradient(to right, #00b09b, #96c93d)';
  const RESPONSE_ERROR = 'linear-gradient(to bottom right, #CE1D4F, #E2886A';

  const FORM_TYPE_COLLEGE = 'college';
  const FORM_TYPE_STUDENT = 'student';

  return { RESPONSE_SUCCESS, RESPONSE_ERROR, FORM_TYPE_COLLEGE, FORM_TYPE_STUDENT }
}

export default response;
