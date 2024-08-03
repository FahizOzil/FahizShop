//li dropdown 

let dropdown = document.querySelector(`.dropdown`);
let dropdownAll = document.querySelectorAll(`.dropdown`);

dropdownAll.forEach(function(dropdown) {
      dropdown.addEventListener('click', function(event) {   
        let menu = this.querySelector('.dropdown-menu');
        menu.classList.toggle('show');
      });
})


// register User 

let registerForm = document.querySelector('#register-form');

if (registerForm) {
registerForm.addEventListener('submit', function(e) {
  e.preventDefault();
  console.log(registerForm);
 let full_name = document.querySelector(`#name`);
 let username = document.querySelector(`#username`);
 let email = document.querySelector(`#email`);
 let password = document.querySelector(`#password`);
 let phone = document.querySelector(`#phone_number`);
 let address = document.querySelector(`#address`);
  
 let responce = axios.post(`/api/register`,
  JSON.stringify({
    name: full_name.value,
    username: username.value,
    email: email.value,
    password: password.value,
    phone_number: phone.value,
    address: address.value
  }),
  {
    headers: {
      'Content-Type': 'application/json'
    }
  }
 )
  .then(function(response) {
     if (response.status == 200) {
       window.location.href='/login';
     }
   })

  this.reset();
});

}



