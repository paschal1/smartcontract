<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="E6FAL35ouGxXTIaS1hUckb9zG9Q7PYudaYrdW6NB">
        <title>SECUREDGAINERS | Welcome to SECUREDGAINERS</title>
        
        <meta name="description"
            content="We are online">
        
        <!-- Google / Search Engine Tags -->
        <meta iletrop="name" content="SECUREDGAINERS - Welcome to SECUREDGAINERS">
        <meta iletrop="description"
            content="We are online">
        <meta iletrop="image" content="{{ asset('frontend/images/logo1.png') }}">
        
        <link rel="icon" href="storage/app/public/photos/8eIdz2index.html" type="image/png"/>
                    
           <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,300,400,700,800,900" rel="stylesheet">
    
    


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/bootstrap.min.css') }}">
        <!-- owl-carousel CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/owl-carousel/owl.carousel.css') }}" />
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('frontend/let/css/magnific-popup/magnific-popup.css') }}" />
        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/animate.css') }}" />
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/font-awesome.min.css') }}" />
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/export.css') }}" />
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/line-awesome.min.css') }}" />
        <!-- media element player -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/mediaelementplayer.min.css') }}" />
        <!-- Timeline CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/timeline.min.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/responsive.css') }}">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/let/css/custom.css') }}">

        

    </head>
    <body>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        {tawk to codess}
        </script>

        <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class='loader loader2'>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loading End -->
    <!-- Header -->


    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="{{ url('/')}}"> <img
                                src="{{ asset('frontend/images/logo1.png')}}"
                                alt="SECUREDGAINERS" class="img-fluid" > </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> <i class="la la-bars"></i> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                                <li class="nav-item"> <a class="nav-link active" href="{{ url('/')}}">Home</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#about">About us</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#services">Our Services</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#howitworks">How it Works</a> </li>
                                <li > <a  id="google_translate_element"></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">Contact Us</a> </li>
                            </ul>
                        </div>
                        <ul class="nav justify-content-end">
                            <li class="nav-item iq-mlr-0"> <a class="nav-link button" href="{{ route('login') }}">Login</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header END -->

        <!--End of Tawk.to Script-->
           <div >
            <main class="py-4">
            @yield('content')
        </main>
           </div>
 <!-- Footer -->
    <footer id="contact" class="iq-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 iq-mtb-60">
                        <div class="logo"> <img id="logo_img_2" class="img-fluid"
                                 src="{{ asset('frontend/images/logo.png')}}"
                                alt="SECUREDGAINERS">
                            <div class="iq-font-white iq-mt-15 ">SECUREDGAINERS is a firm dealing and
                                investing in high growth
                                capital market and delivering sustainable profit.</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 iq-mtb-60 footer-menu">
                        <h5 class="small-title iq-tw-5 iq-font-white">Menu</h5>
                        <ul class="iq-pl-0">
                            <li><a href="{{ url('/')}}">Home</a></li>
                            <li><a href="{{ url('terms')}}">Terms & Conditions</a></li>
                            <li><a href="{{ url('faq')}}">Faqs</a></li>
                            <li><a href="{{ url('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 iq-contact iq-mtb-60">
                        <h5 class="small-title iq-tw-5 iq-font-white">Contact SECUREDGAINERS</h5>
                        <div class="iq-mb-30">
                            <div class="blog "><i class="ion-ios-email-outline"></i>
                                <div class="content ">
                                    <div class="iq-tw-6 title ">Mail</div>
                                    <a href="mailto:support@SECUREDGAINERS.com"
                                        class="__cf_email__">support@securedgainers.com</a>
                                </div>
                            </div><br />
                             <div class="blog"><i class="ion-ios-location-outline"></i>
                            <div class="content ">
                                <div class="iq-tw-6 title ">WhatsApp Only</div>
                                +1(903) 326-3407
                            </div>
                        </div>
                        </div>
                        <div class="blog"><i class="ion-ios-location-outline"></i>
                            <div class="content ">
                                <div class="iq-tw-6 title ">Address</div>
                                BOWLING GREEN,NY1004
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mb-60">
                        <div class="call-back">
                            <h5 class="small-title iq-tw-5 iq-font-white">Request a Call Back</h5>

                            

                            <form action="#" method="POST">
                                <div class="form-group iq-mb-20">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="username"
                                        required>
                                </div>

                                <div class="form-group iq-mb-20">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group iq-mb-20">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject"
                                        required>
                                </div>
                                <div class="form-group iq-mb-20">
                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"
                                        required></textarea>
                                    <input type="hidden" name="_token" value="E6FAL35ouGxXTIaS1hUckb9zG9Q7PYudaYrdW6NB">
                                </div>
                                <div>
                                    <button type="submit" class="button"> Send </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom iq-ptb-20 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <div class="iq-copyright iq-font-white"> &copy; Copyright 2023
                                &nbsp;<strong> SECUREDGAINERS &nbsp;</strong> All Rights Reserved.</div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
    Footer -->
    <!-- back-to-top -->
    <div id="back-to-top"> <a class="top" id="top" href="#top"><i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </a> </div>
    <!-- back-to-top End -->
    <!-- bubbly -->
    <canvas id="canvas1"></canvas>
    <!-- bubbly End -->
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ asset('frontend/let/js/jquery-min.js') }}"></script>
    <!-- popper JavaScript -->
    <script src="{{ asset('frontend/let/js/popper.min.js') }}"></script>
    <!-- canvas -->
    <script src="{{ asset('frontend/let/js/canvas/canvas2.js') }}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('frontend/let/js/bootstrap.min.js') }}"></script>
    <!-- All-plugins JavaScript -->
    <script src="{{ asset('frontend/let/js/all-plugins.js') }}"></script>
    <!-- timeline JavaScript -->
    <script src="{{ asset('frontend/let/js/timeline.min.js') }}"></script>
    <!-- canvas JavaScript -->
    <script src="{{ asset('frontend/let/js/lib/canvasjs.min.js') }}"></script>
    <script src="{{ asset('frontend/let/js/lib/particles1.min.js') }}"></script>
    <script src="{{ asset('frontend/let/js/lib/app.js') }}"></script>
    <script src="{{ asset('frontend/let/js/lib/stats.js') }}"></script>
    <!-- amcharts -->
    <script src="{{ asset('frontend/let/js/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('frontend/let/js/amcharts/serial.js') }}"></script>
    <script src="{{ asset('frontend/let/js/amcharts/export.min.js') }}"></script>
    <script src="{{ asset('frontend/let/js/amcharts/none.js') }}"></script>
    <script src="{{ asset('frontend/let/js/amcharts/pie.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('frontend/let/js/custom.js') }}"></script>

    <script src="//code.tidio.co/9dewlkwmezmu64ecodaihpkgancyyj3x.js" async></script>
    <script data-cfasync="false" src="#"></script>
   <style type="text/css">
			.mgm {
				border-radius: 7px;
				position: fixed;
				z-index: 90;
				bottom: 45%;
				right: 50px;
				background: #fff;
				padding: 10px 27px;
				box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
			}

			.mgm a {
				font-weight: 700;
				display: block;
				color: #1c8e51;
			}

			.mgm a,
			.mgm a:active {
				transition: all .2s ease;
				color: #1c8e51;
			}
		</style>
	</p>

	<div class="mgm" style="display: none;">
		<div class="txt" style="color:black;"></div>
	</div>

    <script data-cfasync="false" src="#"></script>
    <script type="text/javascript">
      var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa', 'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa', 'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
      var listPlans = ['$500', '$1,500', '$1,000', '$10,000', '$2,000', '$3,000', '$4,000', '$600', '$700', '$2,500'];
      var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];
      let interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
      var run = setInterval(request, interval);

      function request() {
        clearInterval(run);
       let interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var transtype = transarray[Math.floor(Math.random() * transarray.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'Someone from <b>' + country + '</b> ' + transtype + ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + '</a>';
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(300);
        window.setTimeout(function () {
          $(".mgm").stop(true).fadeOut(300);
        }, 10000);
        run = setInterval(request, interval);
      }
    </script>
    
    <script type="text/javascript">
		
	function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	
	(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
	function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
	if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
	
	</script>

    <script src="../code.tidio.co_443/vyvfoiwefipdfvt72sunceuubyavwavo.js" async></script>

       

    </body>


</html>
