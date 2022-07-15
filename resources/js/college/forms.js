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

  return { studentRegistration }
}

export default forms;
