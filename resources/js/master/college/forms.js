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
  
  return { collegeInformations }  
}

export default forms;