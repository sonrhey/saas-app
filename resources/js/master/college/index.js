import forms from './forms';
import college from './apis';

const { collegeInformations } = forms();
const { createCollege } = college();

$('#college-form').on('submit', function(e) {
  e.preventDefault();
  collegeInformations.college_credentials.username = $('[name="username"]').val();
  collegeInformations.college_credentials.email = $('[name="email"]').val();
  collegeInformations.college_credentials.password = $('[name="password"]').val();

  collegeInformations.college_details.name = $('[name="name"]').val();
  collegeInformations.college_details.address = $('[name="address"]').val();
  collegeInformations.college_details.owner = $('[name="owner"]').val();
  collegeInformations.college_details.registered_name = $('[name="registered_name"]').val();
  
  createCollege({
    data: collegeInformations
  });
});