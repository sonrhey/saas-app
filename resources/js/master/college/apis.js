import axios from "axios";
import collegeAPI from "./endpoints";
import commonServices from "../../commonServices";

const { create, read, update, destroy } = collegeAPI();
const { loader, getHeaders, toastNotification } = commonServices();
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

  return { createCollege }
}

export default college;