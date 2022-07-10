import axios from "axios";
import collegeAPI from "./endpoints";
import commonServices from "../../commonServices";
import DataTable from 'datatables.net';
import 'datatables.net-dt/css/jquery.dataTables.css';

const { create, read, update, destroy } = collegeAPI();
const { loader, getHeaders, toastNotification, datatablesHeaders } = commonServices();
const { show, hide } = loader();

const college = () => {
  const createCollege = async ({
    data: data
  }) => {
    try {
      show();
      const requests = await axios.post(create, data, getHeaders());
      const response = await requests.data;
      hide();
      if (response.success) {
        toastNotification({
          message: response.data,
          background: 'linear-gradient(to right, #00b09b, #96c93d)',
        });

        return;
      }

      toastNotification({
        message: response.data,
        background: 'linear-gradient(to bottom right, #CE1D4F, #E2886A',
      });
      
    } catch (error) {
      hide();
      toastNotification({
        message: error.message,
        background: 'linear-gradient(to bottom right, #CE1D4F, #E2886A',
      })  
    }
  }

  const showCollegeList = async () => {
    const collegeList = new DataTable('#college-list', {
      ajax: {
        url: read,
        type: 'GET',
        dataType: 'json',
        headers: datatablesHeaders()
      },
      order : [ 0, 'desc' ],
      columns: [
        { data: "college_id"},
        { data: "name"},
        { data: "registered_name"},
        { data: "address"}
      ],  
      columnDefs: [
        {
          targets: 4,
          render : function ( data, type, row ) {
            const action_buttons = `
              <button type="button" class="btn btn-primary btn-view-data"><i class='fa fa-edit'></i></button>
              <button type="button" class="btn btn-danger btn-edit-data"><i class='fa fa-trash'></i></button>
            `;
            return action_buttons;
          }
        }
      ]
    });

    return collegeList;
  }

  return { createCollege, showCollegeList }
}

export default college;