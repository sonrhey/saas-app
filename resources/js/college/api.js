import axios from "axios";
import collegeAPI from "./endpoint";
import commonServices from "./../commonServices";
import DataTable from 'datatables.net';
import 'datatables.net-dt/css/jquery.dataTables.css';
import formBuilder from "./form-builder";

const {
        create,
        read,
        update,
        destroy,
        register,
        collegeFormData,
        studentFormData,
        studentListData
      } = collegeAPI();

const {
        loader,
        getHeaders,
        toastNotification,
        datatablesHeaders,
        serverSuccessResponse,
        clientErrorResponse
      } = commonServices();

const {
        show,
        hide
      } = loader();

const {
        build
      } = formBuilder();

const college = () => {
  const getForms = async () => {
    try {
      show();
      const requests = await axios.get(read, getHeaders());
      const response = await requests.data;
      hide();
      build({
        data: response.data
      });
      $('.my-forms-control').fadeIn();
    } catch (error) {
      hide();
      clientErrorResponse({
        error: error
      });
    }
  }

  const studentRegister = async ({
    data: data
  }) => {
    try {
      show();
      const requests = await axios.post(register, data, getHeaders());
      const response = await requests.data;
      hide();
      serverSuccessResponse({
        response: response
      });
    } catch (error) {
      hide();
      clientErrorResponse({
        error: error
      });
    }
  }

  const collegeInformationData = async ({
    data: data
  }) => {
    try {
      console.log(data);
      show();
      const requests = await axios.post(collegeFormData, data, getHeaders());
      const response = await requests.data;
      hide();
      serverSuccessResponse({
        response: response
      });
    } catch (error) {
      hide();
      clientErrorResponse({
        error: error
      });
    }
  }

  const studentInformationData = async ({
    data: data
  }) => {
    try {
      show();
      const requests = await axios.post(studentFormData, data, getHeaders());
      const response = await requests.data;
      hide();
      serverSuccessResponse({
        response: response
      });
    } catch (error) {
      hide();
      clientErrorResponse({
        error: error
      });
    }
  }

  const studentList = () => {
    const collegeList = new DataTable('#student-list', {
      ajax: {
        url: studentListData,
        type: 'GET',
        dataType: 'json',
        headers: datatablesHeaders()
      },
      order : [ 0, 'desc' ],
      columns: [
        { data: "student_id"},
        { data: "name"},
        { data: "address"}
      ]
    });

    return collegeList;
  }

  return { getForms, studentRegister, collegeInformationData, studentInformationData, studentList }
}

export default college;
