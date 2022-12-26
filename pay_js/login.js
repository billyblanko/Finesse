
$('#user').click(function() {
    let username = $('#username').val()
    let password = $('#password').val()
    let message = $('#message')[0]

    if(username == null || username == ""){
        message.textContent = 'username required';
        message.style.color = 'red';
        return false;
    }
    if(password == null || password == ""){
        message.textContent = 'password required';
        message.style.color = 'red';
        return false;
    }else{
        window.location.href = '/user.html'
    }
});

//for type effect

var typed = new Typed(".auto-type", {
    strings: ["Payola Service", "Global Transactions" , "Blockchain Network" , "Advance Security"],
    typeSpeed: 150,
    backspeed: 150,
    loop: true
})