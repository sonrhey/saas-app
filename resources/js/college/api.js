import axios from "axios";
import collegeAPI from "./endpoint";
import commonServices from "./../commonServices";
import DataTable from 'datatables.net';
import 'datatables.net-dt/css/jquery.dataTables.css';
import formBuilder from "./form-builder";

const { create, read, update, destroy, register } = collegeAPI();
const { loader, getHeaders, toastNotification, datatablesHeaders, serverSuccessResponse, clientErrorResponse } = commonServices();
const { show, hide } = loader();
const { build } = formBuilder();

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

  return { getForms, studentRegister }
}

export default college;
