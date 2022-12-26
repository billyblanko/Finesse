$('#user').click(function() {
  let firstname = $('#firstname').val()
  let lastname = $('#lastname').val()
  let username = $('#username').val()
  let email = $('#email').val()
  let telephone = $('#telephone').val()
  let password = $('#password').val()
  let conpassword = $('#conpassword').val()  
  let message = $('#message')[0]

  if(firstname == null || firstname == ""){
      message.textContent = 'firstname required';
      message.style.color = 'red';
      return false;
  }
  if(lastname == null || lastname == ""){
      message.textContent = 'lastname required';
      message.style.color = 'red';
      return false;
  }
  if(username == null || username == ""){
      message.textContent = 'username required';
      message.style.color = 'red';
      return false;
  }
  if(email == null || email == ""){
      message.textContent = 'email required';
      message.style.color = 'red';
      return false;
  }
  if(telephone == null || telephone == ""){
      message.textContent = 'telephone required';
      message.style.color = 'red';
      return false;
  }
  if(password == null || password == ""){
      message.textContent = 'password required';
      message.style.color = 'red';
      return false;
  }
  if(conpassword == null || conpassword == ""){
      message.textContent = 'conpassword required';
      message.style.color = 'red';
      return false;
  }else{
      window.location.href = '/user.html'
  }
})

//for type effect

var typed = new Typed(".auto-type", {
    strings: ["Payola Service", "Global Transactions" , "Blockchain Network" , "Advance Security"],
    typeSpeed: 150,
    backspeed: 150,
    loop: true
})