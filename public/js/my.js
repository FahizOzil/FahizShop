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


// login User
let loginForm = document.querySelector('#login-form');

if (loginForm) {
  loginForm.addEventListener('submit', function(event) {
    event.preventDefault();
    let email = document.querySelector(`#email`).value;
    let password = document.querySelector(`#password`).value;
    let responce = axios.post(`/api/login`,
      JSON.stringify({
        email:email,
        password: password
      }),
      {
        headers: {
          'Content-Type': 'application/json'
        }
      }
    )
     .then(function(response) {
      if (response.status === 200) {
        localStorage.setItem('token', response.data.token);
        window.location.href = '/';
      }else{
        let error = document.querySelector(`#error`);
           error.classList.add(`text-danger`);
          error.innerHTML = response.data.message;
      }
       
      })
  })
}




// view product

document.addEventListener(`click`,function(e){
   if (e.target.id == "viewproduct") {
      let productId = e.target.getAttribute(`data-pid`);
      let responce = axios.get(`/api/product/${productId}`,
        {
          headers: {
            'Authorization': `Bearer ${localStorage.getItem('token')}`
          }
        }
      );
    responce.then( (product)=>{
      console.log(product);
    })
   }
})
