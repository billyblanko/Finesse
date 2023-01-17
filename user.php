<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/finesse/pay_css/user.css">
    <link rel="shortcut icon" href="/finesse/pay_assets/pay_img/favicon-32x32.png" type="image/x-icon">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <title>Payola</title>
</head>
<body>
    <div class="sidebar">
        <div class="icon_content">
            <div class="icon">
                <i class="fa fa-bars" id="btn"></i>
            </div> 
        </div>
        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span class="link_name">User</span>
                </a>
                <span class="tooltip">Personal</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span class="link_name">Business</span>
                </a>
                <span class="tooltip">Business</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-chart-simple"></i>
                    <span class="link_name">Chart</span>
                </a>
                <span class="tooltip">Chart</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-wallet"></i>
                    <span class="link_name">Mobile Wallet</span>
                </a>
                <span class="tooltip">Wallet</span>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-bitcoin"></i>
                    <span class="link_name">Cryptocurrency</span>
                </a>
                <span class="tooltip">Cryptocurrency</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-coins"></i>
                    <span class="link_name">Rewards</span>
                </a>
                <span class="tooltip">Rewards</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span class="link_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li class="history">
                <a href="#">
                    <i class="fa fa-clock-rotate-left"></i>
                    <span class="link_name">History</span>
                </a>
                <span class="tooltip">History</span>
            </li>
            <li>
                <a href="/finesse/index.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="link_name">Log Out</span>
                </a>
                <span class="tooltip">Log Out</span>
            </li>
        </ul>
    </div>
    <div class="home_content">
        <div class="property">
            <a href="/finesse/index.php">
                <img src="/finesse/pay_assets/pay_img/payola.png" alt="">
                <p class="text-logo">ayola</p>
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
            <h3 class="user-name">
                Hi Finesse
            </h3>
            <div class="options">
                <button id="btn-money">
                    <i class="fa fa-circle-plus"></i><br>
                    Add Money
                </button>

                <button id="btn-history">
                    <i class="fa fa-clock-rotate-left"></i><br>
                    History
                </button>
            
                <button id="btn-card">
                    <i class="fa-solid fa-credit-card"></i><br>
                    Add Card
                </button>
            </div>
        </div>
        <div class="balance-card">
            <h3 class="acct-balance">
                My Payola Balance
            </h3>
            <p class="number">&#8358;2000.00</p>
        </div>
        <div class="option2"> 
            <button id="btn-send">
                <i class="fa fa-paper-plane"></i><br>
                Transfer
            </button>
        
            <button id="btn-receive">
                <i class="fa-solid fa-check-to-slot"></i><br>
                Receive
            </button>
        
            <button id="btn-asset">
                <i class="fa-solid fa-rotate"></i><br>
                Convert
            </button>
        </div>
    </div>
    <div class="footer">
        <div class="emblem">
            <select id="country" onchange="country_code()">
                <option value="uk">&#x1F1EC;&#x1F1E7; United Kingdom</option>
                <option value="us">&#x1F1FA;&#x1F1F8; United States of America</option>
                <option value="afg">&#x1F1E6;&#x1F1EB; Afghanistan</option>
                <option value="al">&#x1F1E6;&#x1F1F1; Albania</option>
                <option value="an">&#x1F1E6;&#x1F1F4; Angola</option>
                <option value="arg">&#x1F1E6;&#x1F1F7; Argentina</option>
                <option value="am">&#x1F1E6;&#x1F1F2;  Armenia</option>
                <option value="aus">&#x1F1E6;&#x1F1FA; Australia</option>
                <option value="at">&#x1F1E6;&#x1F1F9; Austria</option>
                <option value="bel">&#x1F1E7;&#x1F1EA; Belgium</option>
                <option value="bra">&#x1F1E7;&#x1F1F7; Brazil</option>
                <opton value="ivr">&#x1F1E8;&#x1F1EE; Côte d'Ivoire</opton>
                <option value="cmr">&#x1F1E8;&#x1F1F2; Cameroon</option>
                <option value="cnd">&#x1F1E8;&#x1F1E6; Canada</option>
                <option value="chl">&#x1F1E8;&#x1F1F1; Chile</option>
                <option value="ch">&#x1F1E8;&#x1F1F3; China</option>
                <option value="col">&#x1F1E8;&#x1F1F4; Colombia</option>
                <option value="csr">&#x1F1E8;&#x1F1F7; Costa Rica</option>
                <option value="cr">&#x1F1ED;&#x1F1F7; Croatia</option>
                <option value="cb">&#x1F1E8;&#x1F1FA; Cuba</option>
                <option value="cyp">&#x1F1E8;&#x1F1FE; Cyprus</option>
                <option value="czr">&#x1F1E8;&#x1F1FF; Czech Republic</option>
                <option value="den">&#x1F1E9;&#x1F1F0; Denmark</option>
                <option value="dmr">&#x1F1E9;&#x1F1F4; Dominican Republic</option>
                <option value="ecr">&#x1F1EA;&#x1F1E8; Ecuador</option>
                <option value="egy">&#x1F1EA;&#x1F1EC; Egypt</option>
                <option value="els">&#x1F1F8;&#x1F1FB; El Salvador</option>
                <option value="fin">&#x1F1EB;&#x1F1EE; Finland</option>
                <option value="fr">&#x1F1EB;&#x1F1F7; France</option>
                <option value="deu">&#x1F1E9;&#x1F1EA; Germany</option>
                <option value="gh">&#x1F1EC;&#x1F1ED; Ghana</option>
                <option value="gr">&#x1F1EC;&#x1F1F7; Greece</option>
                <option value="hgr">&#x1F1ED;&#x1F1FA; Hungary</option>
                <opton value="ice">&#x1F1EE;&#x1F1F8; Iceland</opton>
                <option value="in">&#x1F1EE;&#x1F1F3; India</option>
                <option value="ind">&#x1F1EE;&#x1F1E9; Indonesia</option>
                <opton value="irn">&#x1F1EE;&#x1F1F7; Iran</opton>
                <option value="irq">&#x1F1EE;&#x1F1F6; Iraq</option>
                <option value="ire">&#x1F1EE;&#x1F1EA; Ireland</option>
                <option value="isr">&#x1F1EE;&#x1F1F1; Israel</option>
                <option value="it">&#x1F1EE;&#x1F1F9; Italy</option>
                <option value="jam">&#x1F1EF;&#x1F1F2; Jamaica</option>
                <option value="jpn">&#x1F1EF;&#x1F1F5; Japan</option>
                <option value="kw">&#x1F1F0;&#x1F1FC; Kuwait</option>
                <option value="lb">&#x1F1F1;&#x1F1FE; Libya</option>
                <option value="lch">&#x1F1F1;&#x1F1EE; Liechtenstein</option>
                <option value="my">&#x1F1F2;&#x1F1FE; Malaysia</option>
                <option value="ml">&#x1F1F2;&#x1F1F1; Mali</option>
                <option value="mlt">&#x1F1F2;&#x1F1F9; Malta</option>
                <option value="mx">&#x1F1F2;&#x1F1FD; Mexico</option>
                <option value="mrc">&#x1F1F2;&#x1F1E6; Morocco</option>
                <option value="nd">&#x1F1F3;&#x1F1F1; Netherlands</option>
                <option value="nz">&#x1F1F3;&#x1F1FF; New Zealand</option>
                <option value="ng">&#x1F1F3;&#x1F1EA; Niger</option>
                <option value="ngn">&#x1F1F3;&#x1F1EC; Nigeria</option>
                <option value="nw">&#x1F1F3;&#x1F1F4; Norway</option>
                <option value="prg">&#x1F1F5;&#x1F1FE; Paraguay</option>
                <option value="pr">&#x1F1F5;&#x1F1EA; Peru</option>
                <option value="ph">&#x1F1F5;&#x1F1ED; Philippines</option>
                <option value="pol">&#x1F1F5;&#x1F1F1; Poland</option>
                <option value="por">&#x1F1F5;&#x1F1F9; Portugal</option>
                <option value="qr">&#x1F1F6;&#x1F1E6; Qatar</option>
                <option value="rm">&#x1F1F7;&#x1F1F4; Romania</option>
                <option value="ru">&#x1F1F7;&#x1F1FA; Russia</option>
                <option value="rw">&#x1F1F7;&#x1F1FC; Rwanda</option>
                <option value="sau">&#x1F1F8;&#x1F1E6; Saudi Arabia</option>
                <option value="sng">&#x1F1F8;&#x1F1F3; Senegal</option>
                <option value="srb">&#x1F1F7;&#x1F1F8; Serbia</option>
                <option value="sg">&#x1F1F8;&#x1F1EC; Singapore</option>
                <option value="slk">&#x1F1F8;&#x1F1F0; Slovakia</option>
                <option value="slv">&#x1F1F8;&#x1F1EE; Slovenia</option>
                <option value="za">&#x1F1FF;&#x1F1E6; South Africa</option>
                <option value="sk">&#x1F1F0;&#x1F1F7; South Korea</option>
                <option value="sp">&#x1F1EA;&#x1F1F8; Spain</option>
                <option value="sri">&#x1F1F1;&#x1F1F0; Sri Lanka</option>
                <option value="sw">&#x1F1F8;&#x1F1EA; Sweden</option>
                <option value="sui">&#x1F1E8;&#x1F1ED; Switzerland</option>
                <option value="tz">&#x1F1F9;&#x1F1FF; Tanzania</option>
                <option value="th">&#x1F1F9;&#x1F1ED; Thailand</option>
                <option value="tg">&#x1F1F9;&#x1F1EC; Togo</option>
                <option value="tun">&#x1F1F9;&#x1F1F3; Tunisia</option>
                <option value="tur">&#x1F1F9;&#x1F1F7; Turkey</option>
                <option value="ug">&#x1F1FA;&#x1F1EC; Uganda</option>
                <option value="ukr">&#x1F1FA;&#x1F1E6; Ukraine</option>
                <option value="uae">&#x1F1E6;&#x1F1EA; United Arab Emirates</option>
                <option value="ugy">&#x1F1FA;&#x1F1FE; Uruguay</option>
                <option value="ven">&#x1F1FB;&#x1F1EA; Venezuela</option>
                <option value="vn">&#x1F1FB;&#x1F1F3; Vietnam</option>
                <option value="zim">&#x1F1FF;&#x1F1FC; Zimbabwe</option>
            </select>
            <div class="bxf">
                <a href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="">
                    <i class='fab fa-meta'></i>
                </a>
                <a href="">
                    <i class='fab fa-google' ></i>
                </a>
                <a href="">
                    <i class='fab fa-amazon' ></i>
                </a>
            </div>
        </div>
    </div>
</body>
<script src="/finesse/pay_bts/dist/js/jquery-3.2.1.min.js"></script>
<script src="/finesse/pay_js/user.js"></script>
<script src="https://kit.fontawesome.com/15b7b8224a.js" crossorigin="anonymous"></script> 
</html>