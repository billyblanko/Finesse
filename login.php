<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/finesse/pay_css/style.css?<?php echo time(); ?>">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="shortcut icon" href="/finesse/pay_assets/pay_img/favicon-32x32.png" type="image/x-icon">    <title>Payola</title>
</head>
<body>
    
    <div class="top-clients">
        <div class="logos-clients">
            <a href="/finesse/index.php">
                <img src="/finesse/pay_assets/pay_img/payola.png" alt="">
                <p class="name-clients">ayola</p>
            </a>
        </div>
    </div>
    <div class="intro2">
        <h1 class="fixed2">Welcome to <span class="auto-type2"></span></h1>
    </div>
    <div class="form-two">
        <h5>Login</h5>
        <form id="myForm" disabled>
            <div class="txt_field">
                <input type="text" id="email" placeholder="enter Email" name="email" required>
                <span></span>
                <label class="label-first"><i class="fa-sharp fa-solid fa-user"></i> Email</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" placeholder="enter password" required>
                <span></span>
                <label class="label-first"><i class="fa-solid fa-lock"></i> Password</label>
            </div>
            <a href="#" class="pass">Forgot Password</a><br>
            <div id="message"></div>
            
            <button type="submit" id="user-one" value="login">Submit</button>
            
            <div class="signup-link">
                Don't have account ?<a href="/finesse/register.php">Register</a>
            </div>
        </form>
    </div>

    <!-- loader effect -->
    <div class="loader" id="loader"></div>
    <!-- loader effect end -->
    
     <!-- for footer -->
     <?php require_once('footer.php'); ?>

</body>
<script src="/finesse/pay_assets/dist/js/jquery-3.2.1.min.js"></script>
<script src="https://kit.fontawesome.com/15b7b8224a.js" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="/finesse/pay_js/login.js"></script>
</html>