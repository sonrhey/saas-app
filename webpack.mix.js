let mix = require('laravel-mix');
const jsResourcesPath = 'resources/js';
const cssResourcesPath = 'resources/css';
const publicMasterPath = 'public/js/master';
const publicCollegePath = 'public/js/college';
const publicStudentPath = 'public/js/student';
const jsPublicPath = 'public/js';
const cssPublicPath = 'public/css';

mix.babelConfig({
  plugins: ['@babel/plugin-syntax-dynamic-import'],
});

mix.browserSync('localhost');

mix.js(`${jsResourcesPath}/app.js`, `${jsPublicPath}/app.js`)
.js(`${jsResourcesPath}/test.js`, `${jsPublicPath}/test.js`)
.js(`${jsResourcesPath}/master/college/index.js`, `${publicMasterPath}/college/index.js`)
.js(`${jsResourcesPath}/master/college/form-creation/index.js`, `${publicMasterPath}/college/form-creation/index.js`)
.js(`${jsResourcesPath}/master/college/form-creation/student.js`, `${publicMasterPath}/college/form-creation/student.js`);