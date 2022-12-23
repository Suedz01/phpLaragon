// 'use strict'

// let photo = document.getElementById('imgPhoto');
// let file = document.getElementById('FlImage');

// photo.addEventListener('click', ()=> {
//     file.click();
// });

// file.addEventListener('change', () => {

//     if(file.files.length <=0){
//         return;
//     }

//     let reader = new FileReader();

//     reader.onload = () => {
//         photo.rsc = reader.result;
//     }

//     reader.readAsDataURL(file.files[0]);

// });

function previewFile() {
    const preview = document.getElementById('imgPhoto');
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();
  
    reader.addEventListener("load", () => {
      // convert image file to base64 string
      preview.src = reader.result;
    }, false);
  
    if (file) {
      reader.readAsDataURL(file);
    }
  }