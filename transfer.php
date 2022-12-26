<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pay_css/transfer.css">
    <link rel="shortcut icon" href="/pay_img/favicon-32x32.png" type="image/x-icon">
    <title>Payola</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="/pay_img/payola.png" alt="">
                <p class="text">ayola</p>
            </a>
        </div>
        <div class="notif">
            <a href="">
                <i class="fa fa-bell"></i>
            </a>
        </div>
    </div>
    <div class="parent">
        <div class="user">
            <h3>Hi Finesse</h3>
        </div>
        <div class="balance-card">
            <h3 class="acct-balance">
                My Payola Balance
            </h3>
            <p class="number">&#x24;2000.00</p>
        </div>
        <div class="card-history">
            <button id="btn-card-history">
                Pay History<i class="fa fa-angle-down"></i>
            </button>
        </div>
        <div class="first">
            <div class="mini-bar">
                <ul class="mini_list">
                    <li>
                        <a href="">
                            <i class="fa-solid fa-rotate"></i>
                            <span class="_name">Convert</span>
                        </a>
                        <span class="settip">Convert</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-credit-card"></i>
                            <span class="_name">Card</span>
                        </a>
                        <span class="settip">Card</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-wallet"></i>
                            <span class="_name">Wallet</span>
                        </a>
                        <span class="settip">Wallet</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="second">
            <div class="expenses">
                <div class="ex_top">
                    <h3>Expenses</h3>
                    <a href="">
                        <i class="fa-solid fa-filter"></i>
                    </a>
                </div>
                <div class="ex_list">
                    <ul>
                        <li><a href="">All</a></li>
                        <li><a href="">Family</a></li>
                        <li><a href="">Friends</a></li>
                        <li><a href="">Purchases</a></li>
                        <li><a href="">Bills</a></li>
                        <li><a href="">Travels</a></li>
                        <li><a href="">Tuition</a></li>
                        <li><a href="">Rent</a></li>
                    </ul>
                </div>
            </div>
            <div class="expenses1">
                <i class="fa-solid fa-bell-concierge"></i>
                <div class="indicator">
                    <h3>Restuarant</h3>
                    <p class="date">8th Nov 2022</p>
                </div>
                <p class="cost">-&#x24;15.00</p>
            </div>
            <div class="expenses2">
                <i class="fa-solid fa-plane"></i>
                <div class="indicator">
                    <h3>Travel</h3>
                    <p class="date">3rd Nov 2022</p>
                </div>
                <p class="cost">-&#x24;45.00</p>
            </div>
            <div class="expenses3">
                <i class="fa-solid fa-wrench"></i>
                <div class="indicator">
                    <h3>Repair</h3>
                    <p class="date">8th Nov 2022</p>
                </div>
                <p class="cost">-&#x24;55.00</p>
            </div>
        </div>
        <div class="third"> 
            <div class="payment">
                <h3>Choose Payment Method</h3>
            </div>
            <div class="payment-type">
                <ul>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-money-bill"></i><br>Fiat
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-bitcoin"></i><br>Cryptocurrency
                        </a>
                    </li>
                </ul>
            </div>
            <div id="form">
                <div class="txt_field">
                    <input type="text" id="amount" placeholder="enter amount" required>
                    <span></span>
                    <label class="label-one">Amount</label>
                </div>
                <div class="txt_field">
                    <input type="option" id="currency" placeholder="enter currency" required>
                    <span></span>
                    <label class="label-one">Currency</label>
                </div>
                <div class="txt_field">
                    <input type="text" id="userid" placeholder="enter user id" required>
                    <span></span>
                    <label class="label-one">User ID</label>
                </div>
                <div class="txt_field">
                    <input type="text" id="pin" placeholder="enter pin" required>
                    <span></span>
                    <label class="label-one">Pin</label>
                </div>
                <div class="recipient">
                    <h3>Recipient Details</h3>

                    <div class="txt_field">
                        <input type="text" id="UserID" placeholder="enter recipient id" required>
                        <span></span>
                        <label class="label-one">Recipient ID</label>
                    </div>  
                    <div class="txt_field">
                        <input type="text" id="UserID" placeholder="enter account number" required>
                        <span></span>
                        <label class="label-one">Recipient Acc/No.</label>
                    </div> 
                    <div class="txt_field">
                        <input type="text" id="UserID" placeholder="enter recipient bank" required>
                        <span></span>
                        <label class="label-one">Recipient Bank</label>
                    </div> 
                </div>
                <button id="btn-pay">Pay Now</button>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/15b7b8224a.js" crossorigin="anonymous"></script>
</html>
