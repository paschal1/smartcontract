<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Securedgainers is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ ('html-userpanel/images/favicon.png') }}">
    <!-- Site Title  -->
    <title>Account | User Center - Securedgainers</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('html-userpanel/assets/css/vendor.bundle.css?ver=110') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('html-userpanel/assets/css/style.css?ver=110')}}">
</head>

<body class="user-dashboard">
    <!-- Topbar -->
    <div class="topbar">
        <div class="topbar-md d-lg-none">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#" class="toggle-nav">
                        <div class="toggle-icon">
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                            <span class="toggle-line"></span>
                        </div>
                    </a><!-- .toggle-nav -->
                    <div class="site-logo">
                        <a href="{{ url('index')}}" class="site-brand">
                            <img src="{{ asset('main-html/images/logo.png')}}" alt="logo" srcset="{{ asset('main-html/images/logo.png')}}">
                        </a>
                    </div><!-- .site-logo -->
                    <div class="dropdown topbar-action-item topbar-action-user">
                        <a href="#" data-bs-toggle="dropdown"> <img class="icon" src="{{ asset('main-html/images/logo.png')}}" alt="thumb"> </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="user-dropdown">
                                <div class="user-dropdown-head">
                                    <h6 class="user-dropdown-name">{{ Auth::user()->name }} <span>(IXIA1A105)</span></h6>
                                    <span class="user-dropdown-email">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="user-dropdown-balance">
                                    <h6>Securedgainers BALANCE</h6>
                                    <h3>120,000,000 USDT</h3>
                                    <ul>
                                        <li>1.240 BTC</li>
                                        <li>19.043 ETH</li>
                                        <li>6,500.13 USD</li>
                                    </ul>
                                </div>
                                <ul class="user-dropdown-btns btn-grp guttar-10px">
                                    <li><a href="#" class="btn btn-xs btn-warning">Confirm Email</a></li>
                                    <li><a href="kyc.html" class="btn btn-xs btn-warning">KYC Pending</a></li>
                                </ul>
                                <div class="gaps-1x"></div>
                                <ul class="user-dropdown-links">
                                    <li><a href="account.html"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                    <li><a href="security.html"><i class="ti ti-lock"></i>Security</a></li>
                                    <li><a href="activity.html"><i class="ti ti-eye"></i>Activity</a></li>
                                </ul>
                                <ul class="user-dropdown-links">
                                    <li><a href="login.html"><i class="ti ti-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- .toggle-action -->
                </div><!-- .container -->
            </div><!-- .container -->
        </div><!-- .topbar-md -->
        <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="topbar-lg d-none d-lg-block">
                    <div class="site-logo">
                        <a href="index.html" class="site-brand">
                            <img src="{{ asset('main-html/images/logo.png')}}" alt="logo" srcset="{{ asset('main-html/images/logo.png')}} 2x">
                        </a>
                    </div><!-- .site-logo -->
                </div><!-- .topbar-lg -->
                <div class="topbar-action d-none d-lg-block">
                    <ul class="topbar-action-list">
                        <li class="topbar-action-item topbar-action-link">
                            <a href="{{ url('home')}}"><em class="ti ti-home"></em> Go to main site</a>
                        </li><!-- .topbar-action-item -->
                        <li class="dropdown topbar-action-item topbar-action-language">
                            <a href="{{ url('home')}}" data-bs-toggle="dropdown"> EN <em class="ti ti-angle-down"></em> </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('home')}}">FR</a></li>
                                <li><a href="{{ url('home')}}">JY</a></li>
                                <li><a href="{{ url('home')}}">CH</a></li>
                            </ul>
                        </li><!-- .topbar-action-item -->
                        <li class="dropdown topbar-action-item topbar-action-user">
                            <a href="{{ url('home')}}" data-bs-toggle="dropdown"> <img class="icon" src="{{ asset('main-html/images/icon.png')}}" alt="thumb"> </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="user-dropdown">
                                    <div class="user-dropdown-head">
                                        <h6 class="user-dropdown-name">Stefan Harary <span>(IXIA1A105)</span></h6>
                                        <span class="user-dropdown-email">useremail@example.com</span>
                                    </div>
                                    <div class="user-dropdown-balance">
                                        <h6>ICO TOKEN BALANCE</h6>
                                        <h3>120,000,000 IC0X</h3>
                                        <ul>
                                            <li>1.240 BTC</li>
                                            <li>19.043 ETH</li>
                                            <li>6,500.13 USD</li>
                                        </ul>
                                    </div>
                                    <ul class="user-dropdown-links">
                                        <li><a href="{{ url('home')}}"><i class="ti ti-id-badge"></i>My Profile</a></li>
                                        <li><a href="{{ url('home')}}"><i class="ti ti-lock"></i>Security</a></li>
                                        <li><a href="{{ url('home')}}"><i class="ti ti-eye"></i>Activity</a></li>
                                    </ul>
                                    <ul class="user-dropdown-links">
                                        <li><a href="{{ url('home')}}"><i class="ti ti-power-off"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li><!-- .topbar-action-item -->
                    </ul><!-- .topbar-action-list -->
                </div><!-- .topbar-action -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- TopBar End -->
    <div class="user-wraper">
        <div class="container">
            <div class="d-flex">
                <div class="user-sidebar">
                    <div class="user-sidebar-overlay"></div>
                    <div class="user-box d-none d-lg-block">
                        <div class="user-image">
                            <img src="{{ asset('html-userpanel/images/user-thumb-lg.png')}}" alt="thumb">
                        </div>
                        <h6 class="user-name">{{ Auth::user()->name }}</h6>
                        <div class="user-uid">Unique ID: <span>IXIA1A105</span></div>
                        <ul class="btn-grp guttar-10px">
                            <li><a href="#" class="btn btn-xs btn-warning">Email: {{ Auth::user()->email }}</a></li>
                            <li><a href="kyc.html" class="btn btn-xs btn-warning">{{ Auth::user()->token }}</a></li>
                        </ul>
                    </div><!-- .user-box -->
                    <ul class="user-icon-nav">
                        <li><a href="{{ url('home')}}"><em class="ti ti-dashboard"></em>Dashboard</a></li>
                        <li><a href="{{ url('fundAcc')}}"><em class="ti ti-files"></em>Fund your Account</a></li>
                        <li><a href="{{ url('withdraw')}}"><em class="ti ti-pie-chart"></em>Withdraw Funds</a></li>
                        <li><a href="{{ url('transaction')}}"><em class="ti ti-control-shuffle"></em>Transactions</a></li>
                        <li><a href="{{ url('refer')}}"><em class="ti ti-infinite"></em>Referral</a></li>
                        <li><a href="{{ url('investment')}}"><em class="ti ti-user"></em>Investment</a></li>
                        <li><a href="{{ url('support')}}"><em class="ti ti-lock"></em>Support</a></li>
                    </ul><!-- .user-icon-nav -->
                    <div class="user-sidebar-sap"></div><!-- .user-sidebar-sap -->
                    <ul class="user-nav">
                        <li><a href="{{ url('privacy')}}">How to invest?</a></li>
                        <li><a href="{{ url('faq')}}">Faqs</a></li>
                        <li><a href="{{ url('home')}}">Whitepaper</a></li>
                        <li>Contact Support<span>info@Securedgainers.com</span></li>
                    </ul><!-- .user-nav -->
                    <div class="d-lg-none">
                        <div class="user-sidebar-sap"></div>
                        <div class="gaps-1x"></div>
                        <ul class="topbar-action-list">
                            <li class="topbar-action-item topbar-action-link">
                                <a href="{{ url('home')}}"><em class="ti ti-home"></em> Go to main site</a>
                            </li><!-- .topbar-action-item -->
                            <li class="dropup topbar-action-item topbar-action-language">
                                <a href="{{ url('home')}}" data-bs-toggle="dropdown" aria-haspopup="true"> EN <em class="ti ti-angle-up"></em> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">FR</a></li>
                                    <li><a href="#">JY</a></li>
                                    <li><a href="#">CH</a></li>
                                </ul>
                            </li><!-- .topbar-action-item -->
                        </ul><!-- .topbar-action-list -->
                    </div>
                </div><!-- .user-sidebar -->
                <div class="user-content">
                    <div class="user-panel">
                        <h2 class="user-panel-title">Enter Amount on the Form Below</h2>
                        <form action="#">
                            <h5 class="user-panel-subtitle">01. Select the payment method and make payment</h5>
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
                                            
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                                            <label for="paylightcoin">
                                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="{{ asset('html-userpanel/images/tron-icon.jpg')}}" alt="icon"></div>
                                                <span class="payment-cur">Tron</span>
                                            </label>
                                            
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                                            <label for="paybtc">
                                                <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                                <span class="payment-cur">Bitcoin</span>
                                            </label>
                                            
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                                            <label for="payusd">
                                                <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                                <span class="payment-cur">US Dollar</span>
                                            </label>
                                            
                                        </div>
                                    </div><!-- .col -->

                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="payusdt" name="payOption" value="tranxUSDT" checked>
                                            <label for="payusdt">
                                                <div class="payment-icon payment-icon-eth"><img src="{{ asset('html-userpanel/images/usdt-icon.jpg')}}" alt="icon"></div>
                                                <span class="payment-cur">USDT</span>
                                            </label>
                                            
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paysol" name="payOption" value="tranxLTC">
                                            <label for="paysol">
                                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="{{ asset('html-userpanel/images/sol-icon.jpg')}}" alt="icon"></div>
                                                <span class="payment-cur">SOL</span>
                                            </label>
                                            
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paypal" name="payOption" value="tranxBTC">
                                            <label for="paypal">
                                                <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-paypal"></em></div>
                                                <span class="payment-cur">Paypal</span>
                                            </label>
                                            
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="payment-item">
                                            <input class="payment-check" type="radio" id="paystripe" name="payOption" value="tranxUSD">
                                            <label for="paystripe">
                                                <div class="payment-icon payment-icon-usd"><em class="payment-icon fab fa-stripe"></em></div>
                                                <span class="payment-cur">Stripe</span>
                                            </label>
                                            
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .payment-list -->
                            <div class="gaps-1x"></div>
                            <h5 class="user-panel-subtitle">02. Set amount of Securedgainers investment package you would like to purchase</h5>
                            <p>To become a part of the Securedgainers project and an investor in Securedgainers will only be possible after payment made and receving an approval. As you like to participate our project, please select payment method and enter the amount you wish to invest. You can invest using ETH, BTC, LTC or USD. </p>
                            <div class="gaps-1x"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="payment-calculator">
                                        {{-- <div class="payment-get">
                                            <label for="paymentGet">Tokens to Purchase</label>
                                            <div class="payment-input">
                                                <input class="input-bordered" type="text" id="paymentGet" value="1200">
                                                <span class="payment-get-cur payment-cal-cur">icox</span>
                                            </div>
                                        </div>
                                        <em class="ti ti-exchange-vertical"></em> --}}
                                        <div class="payment-from">
                                            <label for="paymentFrom">Payment Amount</label>
                                            <div class="payment-input">
                                                <input class="input-bordered" type="text" id="paymentFrom" value="eg. 600">
                                                <span class="payment-from-cur payment-cal-cur">usd</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gaps-2x d-md-none"></div>
                                </div><!-- .col -->
                                <div class="col-md-4">
                                    <div class="payment-bonus">
                                        <h6 class="payment-bonus-title">Current Bonus</h6>
                                        <span class="payment-bonus-amount">20% <span>on pre-sales</span></span>
                                        <span class="payment-bonus-time">End at - 09 Jul, 2024</span>
                                    </div>
                                    <div class="gaps-1x d-md-none"></div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <div class="gaps-1x"></div>
                            <div class="payment-calculator-note"><i class="fas fa-info-circle"></i>The payment is secured one, once you make payment send your proof of payment.</div>
                            <div class="gaps-3x"></div>
                            <div class="payment-summary">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-final">
                                            <h6 class="payment-summary-title">Final Payment</h6>
                                            <div class="payment-summary-info">
                                                <span class="payment-summary-amount"></span> <span>usd</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-bonus">
                                            <h6 class="payment-summary-title">Received Bonus</h6>
                                            <div class="payment-summary-info">
                                                <span>+</span> <span class="payment-summary-amount"></span> <span>usdt</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="payment-summary-item payment-summary-tokens">
                                            <h6 class="payment-summary-title">Received</h6>
                                            <div class="payment-summary-info">
                                                <span class="payment-summary-amount"></span> <span>usd</span>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .payment-summary -->
                            <a href="#" class="btn btn-primary payment-btn" data-bs-toggle="modal" data-bs-target="#tranxETH">Purchase Tokens</a>
                        </form><!-- form -->
                    </div><!-- .user-panel -->
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
    <div class="modal fade" id="tranxETH" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details ETH</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>SECUOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>the amount paid on your account</strong> Dashboard (incl. bonus of 450 usd) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address" value="0xEB00e9b25b6951B69Ed6DB6EB21eE244561fe424" disabled>
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="0xEB00e9b25b6951B69Ed6DB6EB21eE244561fe424"><em class="ti ti-files"></em></button>
                        </div><!-- .tranx-payment-info -->
                        <!-- updated on v1.0.1 -->
                        <ul class="tranx-info-list">
                            <li><span>SET GAS LIMIT:</span> 120 000</li>
                            <li><span>SET GAS PRICE:</span> 95 Gwei</li>
                        </ul><!-- .tranx-info-list -->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <span>OR Scan bellow QR Code to pay</span>
                                    <img class="tranx-info-qrimg" src="{{ asset('html-userpanel/images/etherum.jpeg')}}" alt="qr">
                                    <div class="gaps-4x"></div>
                                    <ul class="btn-grp guttar-20px">
                                        <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In case you send a different amount ETH, the number amount you paid will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="modal fade" id="tranxLTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details Tron</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>SECUOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>the amount paid on your account</strong> Dashboard (incl. bonus of 450 usd) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address" value="TSLCKHqspvB4BTEafkfxfvZ1YgTZp9zk2A" disabled>
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="TSLCKHqspvB4BTEafkfxfvZ1YgTZp9zk2A"><em class="ti ti-files"></em></button>
                        </div><!-- .tranx-payment-info -->
                        <!-- pdated on v1.0.1 -->
                        <div class="gaps-3x"></div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <span>OR Scan bellow QR Code to pay</span>
                                    <img class="tranx-info-qrimg" src="{{ asset('html-userpanel/images/tron.jpg')}}" alt="qr">
                                    <div class="gaps-4x"></div>
                                    <ul class="btn-grp guttar-20px">
                                        <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="modal fade" id="tranxBTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details BTC</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>SECUOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>the amount paid on your account</strong> Dashboard (incl. bonus of 450 usd) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address copy-address" value="bc1qjsnt4az5jv5e0rssqkqrqjgv46ymxezj4gh9p6" disabled>
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="bc1qjsnt4az5jv5e0rssqkqrqjgv46ymxezj4gh9p6"><em class="ti ti-files"></em></button>
                        </div><!-- .tranx-payment-info -->
                        <!-- updated on v1.0.1 -->
                        <div class="gaps-3x"></div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <span>OR Scan bellow QR Code to pay</span>
                                    <img class="tranx-info-qrimg" src="{{ asset('html-userpanel/images/bitcoin.jpg')}}" alt="qr">
                                    <div class="gaps-4x"></div>
                                    <ul class="btn-grp guttar-20px">
                                        <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->

    <!-- UserWraper End -->
    <div class="modal fade" id="tranxUSDT" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details USDT</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>SECUOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>the amount paid on your account</strong> Dashboard (incl. bonus of 450 usd) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        <div class="tranx-payment-info">
                            <span class="tranx-copy-feedback copy-feedback"></span>
                            <em class="fab fa-ethereum"></em>
                            <input type="text" class="tranx-payment-address" value="0xEB00e9b25b6951B69Ed6DB6EB21eE244561fe424" disabled>
                            <button class="tranx-payment-copy copy-clipboard-modal" data-clipboard-text="0xEB00e9b25b6951B69Ed6DB6EB21eE244561fe424"><em class="ti ti-files"></em></button>
                        </div><!-- .tranx-payment-info -->
                        <!-- updated on v1.0.1 -->
                        <ul class="tranx-info-list">
                            <li><span>SET GAS LIMIT:</span> 120 000</li>
                            <li><span>SET GAS PRICE:</span> 95 Gwei</li>
                        </ul><!-- .tranx-info-list -->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="tranx-info-qr">
                                    <span>OR Scan bellow QR Code to pay</span>
                                    <img class="tranx-info-qrimg" src="{{ asset('html-userpanel/images/etherum.jpeg')}}" alt="qr">
                                    <div class="gaps-4x"></div>
                                    <ul class="btn-grp guttar-20px">
                                        <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                        <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-7">
                                <div class="note note-info">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="note note-danger">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In case you send a different amount ETH, the number of secured will update accordingly.</p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <div class="modal fade" id="tranxUSD" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details USD</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>SECUOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>the amount paid on your account</strong> Dashboard (incl. bonus of 450 usd) once paid.</p>
                        <h6>Please make your Payment with your credit card</h6>
                        <form action="#">
                            <div class="input-item input-with-label">
                                <label for="full-name" class="input-item-label">Name On Card</label>
                                <input class="input-bordered" type="text" id="full-name" name="full-name" placeholder="Ex : Jhone Smith">
                            </div>
                            <div class="input-item input-with-label">
                                <label for="card-number" class="input-item-label">Card Number</label>
                                <input class="input-bordered" type="text" id="card-number" name="card-number" placeholder="ex : 378 2822 4631 0005">
                            </div>
                            <div class="d-sm-flex guttar-30px">
                                <div>
                                    <div class="auto-width input-item input-with-label">
                                        <label for="expiration-date" class="input-item-label">Expiration Date</label>
                                        <div class="d-flex guttar-8px">
                                            <div>
                                                <select class="input-bordered" name="expiration-month" id="expiration-month">
                                                    <option value="mnth">MM</option>
                                                    <option value="mnth-01">01</option>
                                                    <option value="mnth-02">02</option>
                                                    <option value="mnth-03">03</option>
                                                    <option value="mnth-04">04</option>
                                                    <option value="mnth-05">05</option>
                                                    <option value="mnth-06">05</option>
                                                    <option value="mnth-07">07</option>
                                                    <option value="mnth-08">08</option>
                                                    <option value="mnth-09">09</option>
                                                    <option value="mnth-10">10</option>
                                                    <option value="mnth-11">11</option>
                                                    <option value="mnth-12">12</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="input-bordered" name="expiration-year" id="expiration-year">
                                                    <option value="yer">YYYY</option>
                                                    <option value="yer-18">2022</option>
                                                    <option value="yer-19">2019</option>
                                                    <option value="yer-20">2020</option>
                                                    <option value="yer-21">2021</option>
                                                    <option value="yer-22">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-item input-with-label w100px">
                                        <label for="card-number" class="input-item-label">CCV</label>
                                        <input class="input-bordered" type="text" id="card-number" name="card-number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="gaps-2x"></div>
                            <ul class="btn-grp guttar-20px">
                                <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-bs-dismiss="modal">I Don't Want This</a></li>
                            </ul>
                        </form>
                    </div><!-- .tranx-payment-details -->
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <span class="footer-copyright">Copyright 2023, <a href="#">Securedgainers</a>. All Rights Reserved.</span>
                </div><!-- .col -->
                <div class="col-md-5 text-md-end">
                    <ul class="footer-links">
                        <li><a href="policy.html">Privacy Policy</a></li>
                        <li><a href="policy.html">Terms of Sales</a></li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- FooterBar End -->
    <!-- JavaScript (include all script here) -->
    <script src="{{ asset('html-userpanel/assets/js/jquery.bundle.js?ver=110')}}"></script>
    <script src="{{ asset('html-userpanel/assets/js/script.js?ver=110')}}"></script>
</body>

</html>