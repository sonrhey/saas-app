const forms = () => {
  const collegeInformations = {
    college_details: {
      name: null,
      address: null,
      registered_name: null,
      owner: null
    },
    college_credentials: {
      username: null,
      email: null,
      password: null
    }
  }

  const collegeFormObject = {
    college_id: null,
    form_data: null,
    type: null
  }

  return { collegeInformations, collegeFormObject }
}

export default forms;
