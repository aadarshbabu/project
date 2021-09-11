
import senddata from "./auth.js";

(
 

  function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          let pas1= form.querySelector("#inputPassword5");
          let pas3= form.querySelector("#inputPassword6");
          let ms=  form.querySelector("#msg")
          
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation();
          }
          // if()
          if(form.checkValidity()){
            if(pas1.value!==pas3.value || pas1.value.length < 8){
              event.preventDefault()
              event.stopPropagation()
              ms.innerHTML="password not be same Or Greater Then Charector";
              pas1.classList.remove('form-control');
              pas3.classList.remove('form-control');
            }
          else{
            ms.innerHTML=""
              pas1.classList.add('form-control');
              pas3.classList.add('form-control');
            event.preventDefault()
            event.stopPropagation()
            const data = new FormData(this); 
            senddata(data);
          }
          }
          form.classList.add('was-validated');
         
        }, false)
      })
  })()

