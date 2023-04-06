@extends('layouts.app')

@section('content')
 <div class="header-banner bg-theme-alt">
                    <div class="nk-banner">
                        <div class="banner banner-fs-lg banner-y-pd">
                            <div class="banner-wrap">
                                <div class="container">
                                    <div class="row align-items-center justify-content-center justify-content-lg-between">
                                        <div class="col-lg-5 col-mb-7 order-lg-last">
                                            <div class="banner-gfx banner-gfx-re-s3 my-0 animated" data-animate="fadeInUp" data-delay="1.1">
                                                <img src="{{ asset('main-html/images/header/gfx-g.png')}}" alt="header">
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-lg-6 col-sm-10 col-mb-10 text-center text-lg-start">
                                            <div class="banner-caption cpn cpn-s2 tc-light">
                                                <div class="cpn-head">
                                                    <h1 class="title title-lg animated" data-animate="fadeInUp" data-delay="1.2">Welcome {{ Auth::user()->name }} to your Secured <br class="d-none d-md-block">Dashboard</h1>
                                                </div>
                                                <div class="cpn-text cpn-text-s3">
                                                    <p class="lead lead-s3 animated" data-animate="fadeInUp" data-delay="1.3">Manage all kind of Cryptocurrency by one secure app.</p>
                                                </div>
                                                <div class="cpn-action">
                                                    <div class="cpn-btns animated" data-animate="fadeInUp" data-delay="1.4">
                                                        <ul class="btn-grp btn-grp-s2">
                                                            <li><a href="#" class="btn-download google-play"><img src="{{ asset('main-html/images/qr-apple.png') }}" alt="img"></a></li>
                                                            <li><a href="#" class="btn-download app-store"><img src="{{ asset('main-html/images/qr-apple.png') }}" alt="img"></a></li>
                                                            <li class="qr-code"><img src="{{ asset('main-html/images/icon-wallet.png') }}" alt="img">
                                                                <span class="qr-list">
                                                                    <img src="{{ asset('main-html/images/qr-apple.png') }}" alt="img">
                                                                    <img src="{{ asset('main-html/images/qr-android.png') }}" alt="img">
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-banner -->
                    <div class="nk-ovm mask-d mask-contain-bottom shape-x"></div>
                    <!-- Place Particle Js -->
                    <!-- <div id="particles-bg" class="particles-container particles-bg"></div> -->
                </div>
                <!-- .header-banner -->
            </header>
            @foreach ($tran as $transact)
            <main class="nk-pages">
                <section class="section section-m over-lg-up pdb-0">
                    <div class="container">
                        <!-- Block  -->
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">
                                <span class="" ><i class="fa-solid fa-dollar-sign bg-dark" style="color: aliceblue; padding:10px; margin-right:2px; border:solid;"></i></span>
                                <div>
                                <p>@if ($tran) ${{$transact->amount}} @else $0.00 @endif
                                <br/> Account Balance
                                </p>
                                 <hr>
                                </div>
                            </ul>
                        </div>
                        <!-- Block -->
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">
                                <div class="payment-icon payment-icon-ltc" style="color: aliceblue; padding:10px; margin-right:2px; border:solid; width:60px;"><img class="payment-icon" src="{{ asset('main-html/images/payment/profit.jpg')}}" alt="icon"></div>
                                <div>
                                <p>$0.00<br/>Total Profit
                                 </p>
                                 <hr>
                                </div>
                            </ul>
                        </div>
                        {{-- block --}}
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">
                                <div class="payment-icon payment-icon-ltc" style="color: aliceblue; padding:10px; margin-right:2px; border:solid; width:60px;"><img class="payment-icon" src="{{ asset('main-html/images/payment/bonus.jpg')}}" alt="icon"></div>
                                 <div>
                                <p>$0.00<br/>
                                 Total Bonus</p>
                                 <hr>
                                </div>
                            </ul>
                        </div>
                        {{-- block --}}
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">
                                <div class="payment-icon payment-icon-ltc" style="color: aliceblue; padding:10px; margin-right:2px; border:solid; width:60px;"><img class="payment-icon" src="{{ asset('main-html/images/payment/referral.jpg')}}" alt="icon"></div>
                                <div>
                                <p>$0.00<br/>Total <br/>Referral Bonus</p>
                                <hr>
                                </div>
                            </ul>
                        </div>
                        {{-- block --}}
                        {{-- block --}}
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">
                               <div class="payment-icon payment-icon-ltc" style="color: aliceblue; padding:10px; margin-right:2px; border:solid; width:60px;"><img class="payment-icon" src="{{ asset('main-html/images/payment/invest.jpg')}}" alt="icon"></div>
                                <div>
                                <p>0 <br/>Total <br/>Investment Plans</p>
                                <hr>
                                </div>
                            </ul>
                        </div>
                        {{-- block --}}
                        {{-- block --}}
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">
                               <div class="payment-icon payment-icon-ltc" style="color: aliceblue; padding:10px; margin-right:2px; border:solid; width:60px;"><img class="payment-icon" src="{{ asset('main-html/images/payment/vector-a.png')}}" alt="icon"></div>
                                <div>
                                <p>0<br/>Active <br/>Investment Plans</p>
                                <hr>
                                </div>
                            </ul>
                        </div>
                        {{-- block --}}
                        {{-- block --}}
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">
                               <div class="payment-icon payment-icon-ltc" style="color: aliceblue; padding:10px; margin-right:2px; border:solid; width:60px;"><img class="payment-icon" src="{{ asset('main-html/images/payment/icon-national-id-color.png')}}" alt="icon"></div>
                                <div>

                                <p>$0.00<br/> Total Deposit</p>
                                <hr>
                                </div>
                            </ul>
                        </div>
                        {{-- block --}}
                        {{-- block --}}
                        <div class="nk-block block-partners partner-box">
                            <ul class="partner-list flex-lg-nowrap mb-0 animated" data-animate="fadeInUp" data-delay=".1">

                                <div class="payment-icon payment-icon-ltc" style="color: aliceblue; padding:10px; margin-right:2px; border:solid; width:60px;"><img class="payment-icon" src="{{ asset('main-html/images/payment/withdraw.jpg')}}" alt="icon"></div>
                                <div>
                                    
                                <p>$0.00<br/>
                                 Total <br/>Withdrawals</p>
                                 <hr>
                                </div>
                            </ul>
                        </div>
                        {{-- block --}}
                    </div>
                </section>

                @endforeach
                <!-- // -->
                <section class="section ov-h">
                    <!-- Block  -->
                    <div class="nk-block nk-block-features">
                        <div class="container">
                            <div class="row align-items-center gutter-vr-30px">
                                <div class="col-lg-5">
                                    <div class="nk-block-text">
                                        <h2 class="title title-thin title-dark animated" data-animate="fadeInUp" data-delay=".1">Meet Our Best <strong class="text-primary-alt">Features</strong> <br>for Securedgainers</h2>
                                        <p class="animated" data-animate="fadeInUp" data-delay=".1">We have many more feature that impress you. <br class="d-none d-lg-block">Don’t be late to <a href="#" class="link link-primary link-thin link-underline">download</a> our app.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <div class="feature card card-s2 ov-h animated" data-animate="fadeInUp" data-delay=".3">
                                                <div class="feature-text">
                                                    <h5 class="title title-md">All coin control</h5>
                                                    <p>You can make an investment with any kind of coin you have, as our secured platform accept it.</p>
                                                </div>
                                                <div class="feature-icon feature-icon-bg">
                                                    <img src="{{ asset('main-html/images/icons/icon-o.png') }}" alt="feature">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="feature card card-s2 ov-h animated" data-animate="fadeInUp" data-delay=".2">
                                                <div class="feature-text">
                                                    <h5 class="title title-md">Currencies simplified</h5>
                                                    <p>When trading with Securedgainers, you have nothing to worry about as our experts take care of all your risks. </p>
                                                </div>
                                                <div class="feature-icon feature-icon-bg">
                                                    <img src="{{ asset( 'main-html/images/icons/icon-p.png') }}" alt="feature">
                                                </div>
                                            </div>
                                            <div class="feature card card-s2 ov-h animated" data-animate="fadeInUp" data-delay=".4">
                                                <div class="feature-text">
                                                    <h5 class="title title-md">Multiple currency</h5>
                                                    <p>We transact and trade on Multiple crypto currency</p>
                                                </div>
                                                <div class="feature-icon feature-icon-bg">
                                                    <img src="{{ asset( 'main-html/images/icons/icon-q.png') }}" alt="feature">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .block  -->
                    <!-- .block  -->
                    <div class="nk-block nk-block-about">
                        <div class="container">
                            <div class="row align-items-center gutter-vr-30px justify-content-lg-between justify-content-center">
                                <div class="col-lg-6 col-mb-9">
                                    <div class="nk-block-img text-center gfx-md m-auto animated" data-animate="fadeInUp" data-delay=".1">
                                        <img src="{{ asset('main-html/images/gfx/gfx-h.png')}}" alt="gfx">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-mb-9">
                                    <div class="nk-block-text">
                                        <h2 class="title title-thin title-dark animated" data-animate="fadeInUp" data-delay=".2">Invest &  Earn Popular <strong class="text-primary-alt">Cryptocurrency</strong> Easily with Our Expects</h2>
                                        <p class="animated" data-animate="fadeInUp" data-delay=".3">You can invest on all popular cryptocurrency with our Cryrpto Proffessionals easily. You can also sell all popular Cryptocurrency and FIAT Currency.</p>
                                        <p class="animated" data-animate="fadeInUp" data-delay=".4"><strong>Such as:</strong> ETH, BTC, BCH, LTC, XRP, USDT, EUR, XLM, BNB TRX, RUB, TRY, CAD, NGN, VND</p>
                                        <p class="animated" data-animate="fadeInUp" data-delay=".5">Don’t wast your time anymore. <a href="#" class="link link-primary link-thin link-underline">Invest</a> and get started now.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .block @-->
                    <div class="nk-ovm shape-y"></div>
                </section>
                <!-- // -->
                <section class="section bg-theme-alt tc-light ov-h">
                    <div class="container">
                        <!-- Section Head @ -->
                        <div class="section-head text-center wide-sm">
                            <h2 class="title title-thin animated" data-animate="fadeInUp" data-delay=".1">Spend <strong>Cryptocurrency</strong> in online and in-store</h2>
                        </div>
                        <!-- Section Head @ -->
                        <!-- Block -->
                        <div class="nk-block nk-block-text-grp mgb-m30">
                            <div class="row gutter-vr-30px">
                                <div class="col-lg-6">
                                    <div class="feature feature-inline feature-s11 card bg-dark-opacity animated" data-animate="fadeInUp" data-delay=".2">
                                        <div class="feature-icon feature-icon-lg-s3">
                                            <img src="{{ asset('main-html/images/icons/icon-r.png')}}" alt="feature">
                                        </div>
                                        <div class="feature-text">
                                            <h4 class="title title-lg title-thin">Your Local Area</h4>
                                            <p>Securedgainers, A global crypto traders, we know your locals and deliver in respective of where ever you are in the Globe </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature feature-inline feature-s11 card bg-dark-opacity animated" data-animate="fadeInUp" data-delay=".3">
                                        <div class="feature-icon feature-icon-lg-s3">
                                            <img src="{{ asset('main-html/images/icons/icon-s.png')}}" alt="feature">
                                        </div>
                                        <div class="feature-text">
                                            <h4 class="title title-lg title-thin">Online Shop</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .block  -->
                    </div>
                    <div class="nk-ovm shape-x-2"></div>
                </section>
                <!-- // -->
@endsection
