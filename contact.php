<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/finesse/pay_css/style.css">
    <link rel="shortcut icon" href="/pay_assets/pay_img/favicon-32x32.png" type="image/x-icon">
    <title>Payola</title>
</head>
<body>
    <div class="top-contact">
        <div class="logo-contact">
            <a href="/finesse/index.php">
                <img src="/finesse/pay_assets/pay_img/payola.png" alt="">
                <p class="text-contact">ayola</p>
            </a>
        </div>
    </div>
    <div class="tap">
        <h1 class="contact-header">Tap In</h1>
        <p class="contact-header">Contact our support team below, leave a comment for review or complain. Thank You!</p>
        <div class="support">
            <form action="">
                <div class="input-group">
                    <input type="text" id="name" required>
                    <label for="name" class="label"><i class="fas fa-user"></i> Your Name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="number" required>
                    <label for="number" class="label"><i class="fas fa-phone-square-alt"></i> Phone No.</label>
                </div>
                <div class="input-group">
                    <input type="text" id="email" required>
                    <label for="email" class="label"><i class="fas fa-envelope"></i> Email</label>
                </div>
                <div class="input-group">
                    <textarea id="message" rows="0" required></textarea>
                    <label for="message" class="label"><i class="fas fa-comments"></i> Leave Message</label>
                </div>
                <button class="btn-send">SEND MESSAGE <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
      </div>
      <div class="faq">
        <h1 class="faq-header">FAQ</h1>
        <ul id="accordion">
            <li>
                <label for="first" class="label-one"> How to pay for advance plan <i class="fa-regular fa-plus"></i></label>
                <input type="radio" name="accordion" id="first" checked>
                <div class="content">
                    First step you register with payola you step up your account afterwards you navigate to the pricing section, select the advance plan. Then you pay from your card, payment services and cryptocurrency (bitcoin, Ethereum, Usdt.)
                </div>
            </li>
            <li>
                <label for="second">How do i set up my wallet <i class="fa-regular fa-plus"></i></label>
                <input type="radio" name="accordion" id="second">
                <div class="content">
                    First step you register with payola add your bank details to set up your wallet you verify your identity and enjoy our easy wallet make transactions any where.
                </div>
            </li>
            <li>
                <label for="third">Do i need to own a bank account to make transactions <i class="fa-regular fa-plus"></i></label>
                <input type="radio" name="accordion" id="third">
                <div class="content">
                    It is not mandatory to have a bank account, set up your wallet with that you can send and receive, for better experience upgrade to advance account to get your debit/credit card
                </div>
            </li>
            <li>
                <label for="fourth">What about our privacy <i class="fa-regular fa-plus"></i></label>
                <input type="radio" name="accordion" id="fourth">
                <div class="content">
                    Payola have agreements all their client to mantain a secured privacy policy, with our developing blockchain technology we create a safe, secured and efficient eco-system !
                </div>
            </li>
            <li class="last">
                <label for="fifth">How do i set up a business account <i class="fa-regular fa-plus"></i></label>
                <input type="radio" name="accordion" id="fifth">
                <div class="content">
                    We offer an efficient and supportive feature to make business transactions easy and convienent, to create an account add your business details & document to verify your business.
                </div>
            </li>
        </ul>
      </div>
      
    <!-- loader effect -->
    <div class="loader" id="loader"></div>
    <!-- loader effect end -->

    <!-- footer -->
    <?php require_once('footer.php'); ?>

</body>
<script src="/finesse/pay_js/loader.js"></script>
<script src="https://kit.fontawesome.com/15b7b8224a.js" crossorigin="anonymous"></script> 
<!-- <script src="/pay_js/all.js"></script> -->
</html>