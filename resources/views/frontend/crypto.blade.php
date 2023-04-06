@extends('layouts.app')
@section('content')
<main class="nk-pages">
            <section class="section bg-white">
                <div class="container">
                    <h3 class="title title-md">Exchange</h3>
                    <form action="#" class="form-validate">
                       

                     
                      
                       
                        <!-- Copy from here -->
                        <section class="section bg-light">
                            <div class="container">
                                <!-- Block @ -->

                                <div class="nk-block nk-block-text-grp mgb-m30">
                                    <div class="row">
                                         <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <p>$0.00</p>
                                                <h4 class="title title-md">Account Balance</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 BTC</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 ETH</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 LTC</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 LINK</h4>
                                                <p>$0.00</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 BNB</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 ADA</h4>
                                                <p>$0.00</p>

                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 AAVE</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 USDT</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 BCH</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 XRP</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="feature feature-s5 card">
                                                <h4 class="title title-md">0 XLM</h4>
                                                <p>$0.00</p>
                                                
                                            </div>
                                        </div>
                                       
                                    </div><!-- .row -->
                                </div><!-- .block @ -->
                            </div>
                        </section>
                        <!-- Stop here -->
                         <div class="field-item">
                            <label class="field-label">Source Account</label>
                            <div class="field-wrap">

                                <select name="" id="" class="input-bordered">
                                    <option value="">BTC</option>
                                    <option value="">LINK</option>
                                    <option value="">BNB</option>
                                    <option value="">ADA</option>
                                    <option value="">AAVE</option>
                                    <option value="">XLM</option>
                                    <option value="">XRP</option>
                                    <option value="">LTC</option>
                                    <option value="">BCH</option>
                                    <option value="">ETH</option>
                                    <option value="">USDT</option>
                                    <option value="">USD</option>
                                </select>
                                
                            </div>
                            
                        </div>

                         <div class="field-item">
                            <label class="field-label">Destination Account</label>
                            <div class="field-wrap">

                                <select name="" id="" class="input-bordered">
                                    <option value="">USD</option>
                                    <option value="">LINK</option>
                                    <option value="">BNB</option>
                                    <option value="">ADA</option>
                                    <option value="">AAVE</option>
                                    <option value="">XLM</option>
                                    <option value="">XRP</option>
                                    <option value="">LTC</option>
                                    <option value="">BCH</option>
                                    <option value="">ETH</option>
                                    <option value="">USDT</option>
                                    <option value="">BTC</option>
                                </select>
                                
                            </div>
                            <p>NOTE:USD is your account balance.</p>
                        </div>

                         <div class="field-item">
                            <label class="field-label">Amount</label>
                            <div class="field-wrap">

                                <input type="text" class="input-bordered" placeholder="Enter amount of btc">
                                
                            </div>
                            
                        </div>

                            <div class="field-item">
                            <label class="field-label">You will get</label>
                            <div class="field-wrap">

                                <input type="text" class="input-bordered" placeholder="Quantity of usd">

                                
                                
                            </div>
                            
                        </div>

                        <div class="field-item">
                            <label class="field-label"><p>Fees = 2%</p></label>
                            <div class="field-wrap">

                                <input type="submit" class="btn btn-success" value="Exchange">
                                
                            </div>
                            
                        </div>
                        
                        
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