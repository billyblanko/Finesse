<?php 
    require_once('../finesse/includes/function.php'); 

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        print_r($_POST);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/finesse/pay_css/style.css?<?php echo time(); ?>">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="shortcut icon" href="/finesse/pay_assets/pay_img/favicon-32x32.png" type="image/x-icon">
    <title>Payola</title>
</head>
<body> 
    <div class="top-client">
        <div class="logos-client">
            <a href="/finesse/index.php">
                <img src="/finesse/pay_assets/pay_img/payola.png" alt="">
                <p class="name-client">ayola</p>
            </a>
        </div>
    </div>
    <div class="intro">
        <h1 class="fixed">Welcome to <span class="auto-type "></span></h1>
    </div>
    <div class="register">
        <h5>Register</h5>
        <form id="myForm" method="POST" disabled>
            <div class="txt_written">
                <input type="text" id="fullname" placeholder="enter fullname" name="fullname" required>
                <span></span>
                <label class="label-one"><i class="fa-sharp fa-solid fa-user"></i> Fullname</label>
            </div>

            <div class="txt_written">
                <input type="text" id="username" placeholder="enter username" name="username" required>
                <span></span>
                <label class="label-two"><i class="fa-sharp fa-solid fa-user"></i> Username</label>
            </div>
            <div class="txt_written">
                <input type="email" id="email" placeholder="enter email" name="email" required>
                <span></span>
                <label class="label-one"><i class='fa fa-envelope'></i> Email</label>
            </div>
            <div class="txt_written">
                <input type="address" id="address" placeholder="enter address" name="address" required>
                <span></span>
                <label class="label-one"><i class="fa-solid fa-location-dot"></i> Address</label>
            </div>
            <div class="txt_written">
                <input type="tel" id="telephone" placeholder="enter phone no." name="telephone" required>
                <span></span>
                <label class="label-one"><i class="fa fa-phone"></i> Phone No.</label>
            </div>
            <div class="txt_written">
                <input type="date" required>
                <span></span>
                <label class="label-date">Date Of Birth</label>
            </div>
            <div class="txt_written">
                <input type="password" id="password" placeholder="enter password" name="password" required>
                <span></span>
                <label class="label-one"><i class="fa-solid fa-lock"></i> Password</label>
            </div>
            <div class="txt_written">
                <input type="password" id="conpassword" placeholder="re-enter password" required>
                <span></span>
                <label class="label-one"><i class="fa-solid fa-lock"></i> Confirm Password</label>
            </div>
            <div class="sign-business">
                <h4>Do You Own A Business</h4>
                <p>
                    <input type="radio" name="gender">Yes
                    <input type="radio" name="gender">No
                </p>
            </div>
            <div class="sign-check">
                <p>
                <input type="checkbox">I agree to the collection and processing of my personal data, in with the data regulations described in <a href="" class="policy">Payola Privacy Policy</a>
                </p>
            </div>
            <div id="message"></div>
            <button type="submit" value="login" id="user">Register</button>
        </form>
    </div>
    <div class="login-link">
        Already have an account ?<a href="/finesse/login.php">Login</a>
    </div>
    <!-- for footer -->
    <?php require_once('footer.php'); ?>

</body>
<script src="/finesse/pay_assets/dist/js/jquery-3.2.1.min.js"></script>
<script src="https://kit.fontawesome.com/15b7b8224a.js" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="/finesse/pay_js/register.js"></script>
</html>