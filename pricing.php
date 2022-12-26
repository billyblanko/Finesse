<?php require_once('header.php'); ?>

    <div class="pricing">
        <div class="text-p">
            <h1 class="pricing-header">Payola Pricing</h1>
            <span class="writeup">We offer an option for users for a Personal or Business account</span>
        </div>
        <div class="first">
            <h1>Personal Account</h1>
            <div class="price-row">
                <div class="price-col-one">
                    <p>Free</p>
                    <sub>payola plan</sub>
                    <h3 class="header-tag">$0</h3>
                    <ul>
                        <li><i class="fa fa-check"></i> Free Account</li>
                        <li><i class="fa fa-check"></i> Enjoy Rewards</li>
                        <li><i class="fa fa-check"></i> Make Transactions To Selected Locations</li>
                        <li><i class="fa fa-check"></i> 24/7 Support</li>
                        <li><i class="fa fa-circle"></i> Limited Transaction per Amount</li>
                        <li><i class="fa fa-circle"></i> Limited Blockchain Access</li>
                        <li><i class="fa fa-circle-xmark"></i> No Debit/Credit Card</li>
                    </ul>
                    <a href="/register.php" class="btn-plan">
                        Register Now
                    </a>
                </div>        
                <div class="price-col">
                    <p>Paid</p>
                    <sub>payola plan</sub>
                    <h3 class="header-tag">$50</h3>
                    <ul>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Unlimited Transactions per Amount</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Unlimited Blockchain Access</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Issues Debit/Credit Card</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Make Transactions Globally</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Additional Payment Method (Barter)</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Gold Level User</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Reports & Analytics</li>
                    </ul>
                    <a href="#" class="btn-plan-p">Get Plan</a>
                </div>
            </div>
        </div>
        <div class="second">
            <h1>Business Account</h1>
            <div class="price-row">
                <div class="price-col-one">
                    <p>Free</p>
                    <sub>payola plan</sub>
                    <h3 class="header-tag">$0</h3>
                    <ul>
                        <li><i class="fa fa-check"></i> Free Account</li>
                        <li><i class="fa fa-check"></i> Easy SetUp</li>
                        <li><i class="fa fa-check"></i> Make Transactions To Selected Locations</li>
                        <li><i class="fa fa-check"></i> 24/7 Support</li>
                        <li><i class="fa fa-circle"></i> Limited Transaction per Amount</li>
                        <li><i class="fa fa-circle"></i> Limited Blockchain Access</li>
                        <li><i class="fa fa-circle-xmark"></i> No Debit/Credit Card</li>
                    </ul>
                    <a href="/register.php" class="btn-plan">Register Now</a>
                </div>
                <div class="price-col-p">
                    <p>Paid</p>
                    <sub>payola plan</sub>
                    <h3 class="header-tag">$50</h3>
                    <ul>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Unlimited Transactions per Amount</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Unlimited Blockchain Access</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Issues Debit/Credit Card</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Make Transactions Globally</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Additional Payment Method (Barter & Wire Transfer)</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Gold Level User</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Dedicated Virtual Accounts (DVA)</li>
                        <li><i class="fa-sharp fa-solid fa-star"></i>  Reports & Analytics</li>
                    </ul>
                    <a href="#" class="btn-plan">Get Plan</a>
                </div>
            </div>
        </div>
      </div>
      <div class="footer">
        <div class="emblem">
            <select id="country" onchange="country_code()">
                <option value="uk">&#x1F1EC;&#x1F1E7; United Kingdom</option>
                <option value="us">&#x1F1FA;&#x1F1F8; United States of America</option>
                <option value="arg">&#x1F1E6;&#x1F1F7; Argentina</option>
                <option value="am">&#x1F1E6;&#x1F1F2;  Armenia</option>
                <option value="aus">&#x1F1E6;&#x1F1FA; Australia</option>
                <option value="at">&#x1F1E6;&#x1F1F9; Austria</option>
                <option value="bel">&#x1F1E7;&#x1F1EA; Belgium</option>
                <option value="bra">&#x1F1E7;&#x1F1F7; Brazil</option>
                <option value="cnd">&#x1F1E8;&#x1F1E6; Canada</option>
                <option value="ch">&#x1F1E8;&#x1F1F3; China</option>
                <option value="col">&#x1F1E8;&#x1F1F4; Colombia</option>
                <option value="fr">&#x1F1EB;&#x1F1F7; France</option>
                <option value="deu">&#x1F1E9;&#x1F1EA; Germany</option>
                <option value="it">&#x1F1EE;&#x1F1F9; Italy</option>
                <option value="ng">&#x1F1F3;&#x1F1EA; Niger</option>
                <option value="ngn">&#x1F1F3;&#x1F1EC; Nigeria</option>
                <option value="nw">&#x1F1F3;&#x1F1F4; Norway</option>
                <option value="pol">&#x1F1F5;&#x1F1F1; Poland</option>
                <option value="por">&#x1F1F5;&#x1F1F9; Portugal</option>
                <option value="qr">&#x1F1F6;&#x1F1E6; Qatar</option>
                <option value="rm">&#x1F1F7;&#x1F1F4; Romania</option>
                <option value="ru">&#x1F1F7;&#x1F1FA; Russia</option>
                <option value="sg">&#x1F1F8;&#x1F1EC; Singapore</option>
                <option value="za">&#x1F1FF;&#x1F1E6; South Africa</option>
                <option value="sk">&#x1F1F0;&#x1F1F7; South Korea</option>
                <option value="sp">&#x1F1EA;&#x1F1F8; Spain</option>
                <option value="sw">&#x1F1F8;&#x1F1EA; Sweden</option>
                <option value="sui">&#x1F1E8;&#x1F1ED; Switzerland</option>
                <option value="tur">&#x1F1F9;&#x1F1F7; Turkey</option>
                <option value="ukr">&#x1F1FA;&#x1F1E6; Ukraine</option>
                <option value="uae">&#x1F1E6;&#x1F1EA; United Arab Emirates</option>
                <option value="vn">&#x1F1FB;&#x1F1F3; Vietnam</option>
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
<script src="https://kit.fontawesome.com/15b7b8224a.js" crossorigin="anonymous"></script>
</html>