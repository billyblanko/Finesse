'use strict';

$('#user-one').click(function() {
    let email = $('#email').val()
    let password = $('#password').val()
    let message = $('#message')[0]

    if(email == null || email == ""){
        message.textContent = 'email required';
        message.style.color = 'red';
        return false;
    }
    if(password == null || password == ""){
        message.textContent = 'password required';
        message.style.color = 'red';
        return false;
    }else{
        window.location.href = '/finesse/user.php'
    }
});

//for type effect

var typed = new Typed(".auto-type2", {
    strings: ["Payola Service", "Global Transactions" , "Blockchain Network" , "Advance Security"],
    typeSpeed: 150,
    backspeed: 150,
    loop: true
})