const forms = () => {
  const studentRegistration = {
    studentDetails: {
      name: null,
      address: null,
    },
    studentCredentials: {
      username: null,
      email: null,
      password: null
    }
  }

  const informationSubmit = {
    form_data: null,
    student_id: null
  }

  return { studentRegistration, informationSubmit }
}

export default forms;
