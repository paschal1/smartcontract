@extends('layouts.userpanel')
@section('content')
<main class="nk-pages">
            <section class="section bg-white">
                <div class="container">
                    <h3 class="title title-md">Enter Amount</h3>
                    <form action="#" class="form-validate">
                        <div class="field-item">
                            
                            <div class="field-wrap">
                                <input name="inputname1" type="text" class="input-bordered" id="input-text-2" placeholder="Enter Amount" required>
                            </div>
                            <label class="field-label">Choose Payment Method from the list below</label>
                        </div>

                     <!-- .user-sidebar -->
                <div class="user-content">
                    <div class="user-panel">
                        <h2 class="user-panel-title">Buy Tokens</h2>
                        <form action="#">
                            <h5 class="user-panel-subtitle">01. Select the payment method and calculate token price</h5>
                            <div class="gaps-1x"></div>
                            <div class="payment-list">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH" checked>
                                            <label for="payeth">
                                                <div class="payment-icon payment-icon-eth"><img src="{{ asset('html-userpanel/images/icon-ethereum.png')}}" alt="icon"></div>
                                                <span class="payment-cur">Ethereum</span>
                                            </label>
                                            <span>@ 0.1 ETH</span>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                            <label for="paylightcoin">
                                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="{{ asset('html-userpanel/images/icon-lightcoin.png')}}" alt="icon"></div>
                                                <span class="payment-cur">Litecoin</span>
                                            </label>
                                            <span>@ 0.1 LTC</span>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                            <label for="paybtc">
                                                <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                <span class="payment-cur">Bitcoin</span>
                                            </label>
                                            <span>@ 0.05 BTC</span>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                            <label for="payusd">
                                                <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                <span class="payment-cur">US Dollar</span>
                                            </label>
                                            <span>@ 0.5 USD</span>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                      
                       
                        <!-- Copy from here -->
                        <section class="section bg-light">
                            <div class="container">
                                <!-- Block @ -->

                                <div class="nk-block nk-block-text-grp mgb-m30">
                                    <div class="row">
                                         <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Paypal</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Paystack</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Stripe</h4>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Doge</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Bank Transfer</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Litecoin</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Ethereum</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">Bitcoin</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">USDT</h4>
                                                
                                            </div>
                                        </div>
                                       
                                    </div><!-- .row -->
                                </div><!-- .block @ -->
                            </div>
                        </section>
                        <!-- Stop here -->
                        <div class="field-item">
                            <div class="field-wrap">
                                <textarea name="textarea1" id="textarea" class="input-line input-textarea" required></textarea>
                                <label class="field-label field-label-line">About to make payment</label>
                            </div>
                            <p>Use <code> .link above </code> to make payment with payment gateway of your choice</p>
                        </div>
                        <button class="btn btn-grad">Procced to Payment</button>
                    </form>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="nk-footer bg-theme-grad">
            <section class="section section-footer tc-light bg-transparent">
                <div class="container">
                    <!-- Block @ -->
                    <div class="nk-block block-footer">
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 mb-4 mb-sm-0">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title">Company</h6>
                                    <div class="wgs-body">
                                        <ul class="wgs-links">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Meet Our Team</a></li>
                                            <li><a href="#">Advisors</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Insights</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-2 col-sm-4 mb-4 mb-sm-0">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title">Legal</h6>
                                    <div class="wgs-body">
                                        <ul class="wgs-links">
                                            <li><a href="#">Terms &amp; Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms of Sales</a></li>
                                            <li><a href="#">Whitepaper</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-2 col-sm-4 mb-4 mb-sm-0">
                                <div class="wgs wgs-menu">
                                    <h6 class="wgs-title">Quick Links</h6>
                                    <div class="wgs-body">
                                        <ul class="wgs-links">
                                            <li><a href="#">Ecosystems</a></li>
                                            <li><a href="#">Tokens</a></li>
                                            <li><a href="#">Roadmaps</a></li>
                                            <li><a href="#">Faqs</a></li>
                                            <li><a href="#">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-6 mb-4 mb-lg-0 order-lg-first">
                                <div class="wgs wgs-text">
                                    <div class="wgs-body">
                                        <a href="./" class="wgs-logo">
                                            <img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo">
                                        </a>
                                        <p>Copyright &copy; 2023 Securedgainers. <br>ABN: 2018AD947. All rights reserved. </p>
                                       
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @ -->
                </div>
            </section>
            <div class="nk-ovm shape-b"></div>
        </footer>
@endsection