import axios from 'axios';
import commonServices from './commonServices';
import Swal from 'sweetalert2';
import nImport from './noimport';
import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";
import api from './test-api';

const { loader } = commonServices();
const { show, hide } = loader();
const { file } = nImport();
const { test } = api();

$('.btn-save').on('click', function() {
  Toastify({
    text: "This is a toast",
    duration: 3000,
    destination: "https://github.com/apvarun/toastify-js",
    newWindow: true,
    close: true,
    // gravity: "top", // `top` or `bottom`
    position: "center", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    style: {
      background: "red",
    },
    onClick: function(){} // Callback after click
  }).showToast();
  show();
  test();
  hide();
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'success',
    title: 'Signed in successfully'
  })
});