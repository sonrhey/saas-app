import axios from "axios";
import collegeAPI from "./endpoints";
import commonServices from "../../commonServices";
import DataTable from 'datatables.net';
import 'datatables.net-dt/css/jquery.dataTables.css';

const { create, read, update, destroy, collegeForm, noCreatedFormsColleges } = collegeAPI();
const { loader, getHeaders, toastNotification, datatablesHeaders, serverSuccessResponse, clientErrorResponse } = commonServices();
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
        { data: "address"},
        { data: "is_college_form_created",
          render: function ( data, type, row ) {
            if (row.is_college_form_created) {
              return '<span class="badge bg-success">Yes</span>'
            }
            return '<span class="badge bg-warning">No</span>'
          }
        },
        { data: "is_student_form_created",
          render: function ( data, type, row ) {
            if (row.is_student_form_created) {
              return '<span class="badge bg-success">Yes</span>'
            }
            return '<span class="badge bg-warning">No</span>'
          }
        }
      ],
      columnDefs: [
        {
          targets: 6,
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

  const modalCollegeList = ({
    type: type
  }) => {
    const collegeList = new DataTable('#college-list', {
      ajax: {
        url: noCreatedFormsColleges,
        type: 'GET',
        data: { type: type },
        dataType: 'json',
        headers: datatablesHeaders()
      },
      order : [ 0, 'desc' ],
      columns: [
        { data: "college_id"},
        { data: "name"},
        { data: "registered_name"},
        { data: "address"}
      ]
    });

    return collegeList;
  }

  const collegeForms = async ({
    data: data
  }) => {
    try {
      show();
      const requests = await axios.post(collegeForm, data, getHeaders());
      const response = await requests.data;
      hide();
      serverSuccessResponse({
        response: response
      });
      location.reload();
    } catch (error) {
      hide();
      clientErrorResponse({
        error: error
      });
    }
  }

  return { createCollege, showCollegeList, modalCollegeList, collegeForms }
}

export default college;
