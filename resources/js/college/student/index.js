import forms from "../forms";
import collegeApi from "../api";

const { studentRegistration } = forms();
const { studentRegister } = collegeApi();

$('#student-form').on('submit', function(e) {
  e.preventDefault();
  studentRegistration.studentDetails.name = $('[name="name"]').val();
  studentRegistration.studentDetails.address = $('[name="address"]').val();
  studentRegistration.studentCredentials.username = $('[name="username"]').val();
  studentRegistration.studentCredentials.email = $('[name="email"]').val();
  studentRegistration.studentCredentials.password = $('[name="password"]').val();
  studentRegister({
    data: studentRegistration
  });
});
