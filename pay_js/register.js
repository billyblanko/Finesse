'use strict';

//declaring the input fields as variables

$('#user').click(function() {
  let fullname = $('#fullname').val()
  let username = $('#username').val()
  let email = $('#email').val()
  let address = $('#address').val()
  let telephone = $('#telephone').val()
  let birthday = $('#bday').val()
  let password = $('#password').val()
  let conpassword = $('#conpassword').val()  
  let message = $('#message')[0]
23
    // this function is to detect the length of password set at 6
    function isValidPassword(password) {
        return password.length >= 6;
    }

    //this function is to validate gender button
    function isValidRadio(gender) {
        var radios = document.getElementsByName(gender);
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return true;
            }
        }
        return false;
    }

    if (!isValidRadio("gender")) {
        message.textContent = 'Kindly input the fields !';
        message.style.color = 'red';
        return false;
    }
    

    // the if statement here is to valdate the input field

  if(fullname == null || fullname == ""){
      message.textContent = 'fullname required';
      message.style.color = 'red';
      return false;
  }
  if(username == null || username == ""){
      message.textContent = 'username required';
      message.style.color = 'red';
      return false;
  }
  if(email == null || email == ""){
      message.textContent = 'email required <i class="fa-solid fa-circle-xmark"></i>';
      message.style.color = 'red';
      return false;
  }
  if(address == null || address == ""){
      message.textContent = 'address required';
      message.style.color = 'red';
      return false;
  }
  if(telephone == null || telephone == ""){
      message.textContent = 'telephone required';
      message.style.color = 'red';
      return false;
  }
  if(birthday == null || birthday == ""){
      message.textContent = 'date of birth required';
      message.style.color = 'red';
      return false;
  }
  if(password == null || password == ""){
      message.textContent = 'password required';
      innerHTML
      message.style.color = 'red';
      return false;
  }
  if(!isValidPassword(password)) {
        message.textContent = 'Password must be at least 6 characters long!';
        message.style.color = 'red';
        return false;
    }
  if(conpassword == null || conpassword == ""){
      message.textContent = 'conpassword required';
      message.style.color = 'red';
      return false;
  }else{
      window.location.href = '/finesse/user.php'
  }
})

//for type effect

var typed = new Typed(".auto-type", {
    strings: ["Payola Service", "Global Transactions" , "Blockchain Network" , "Advance Security"],
    typeSpeed: 150,
    backspeed: 150,
    loop: true
})

// loader effect

window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    loader.classList.add("loader-hidden");

    loader.addEventListener("transitionend" , () =>{
        document.body.removeChild("loader");
    })
})