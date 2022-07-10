import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";

const commonServices = () => {
  const loader = () => {
    const show = () => {
      $('html, body').waitMe({
        effect : 'rotateplane',
        text : '',
        bg : 'rgba(255,255,255,0.1)',
        color : '#000',
        maxSize : '',
        waitTime : -1,
        textPos : 'vertical',
        fontSize : '',
        source : '',
      });
    }
    const hide = () => {
      $('html, body').waitMe("hide");
      resetForm();
    }

    return { show, hide }
  }

  const getHeaders = () => {
    const headers = {
        headers: {
        'Authorization': `Bearer ${token}`,
      }
    }
    return headers;
  }

  const datatablesHeaders = () => {
    const headers = {
      'Authorization': `Bearer ${token}`,
    }
    return headers;
  }

  const toastNotification = ({
    message: message,
    background: background
  }) => {
    Toastify({
      text: message,
      duration: 3000, 
      newWindow: true,
      close: false,
      gravity: "top", // `top` or `bottom`
      position: "center", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: background,
      },
    }).showToast();
  }

  const resetForm = () => {
    $('form').trigger('reset');
  }

  return { loader, getHeaders, toastNotification, datatablesHeaders }
}

export default commonServices;