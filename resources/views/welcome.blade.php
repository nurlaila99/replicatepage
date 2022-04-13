<!DOCTYPE html>
<html lang="en"><head>
	<title>KALIF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Portal Event Kalif">
 	<meta name="keywords" content="Kalif Event">
	<meta name="author" content="Kalif">
	
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/kalif_no_bg.png')}}">
	
	<link rel="stylesheet" type="text/css" href="https://kalif.id/frontend/theme/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="https://kalif.id/frontend/theme/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://kalif.id/frontend/theme/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://kalif.id/frontend/theme/assets/css/lightcase.css">
	<link rel="stylesheet" type="text/css" href="https://kalif.id/frontend/theme/assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="https://kalif.id/frontend/theme/assets/css/style.css">
	
	<style type="text/css">
		.preloader {
		    position: fixed;
		    top: 0;
		    left: 0;
		    z-index: 999999999;
		    width: 100%;
		    height: 100%;
		    background: #57aa9f;
		}

		.style-2 .header-top {
		    background: #57aa9f;
		    overflow: hidden;
		}

		.btn-defult {
	    padding: 16px 40px;
	    background: #57aa9f;
	  }

	  .btn-warning {
		    color: #212529;
		    background-color: #FF9F43;
		    border-color: #FF9F43;
		    border: 1px solid transparent;
		    border-radius: 0.25rem;
		}

		.btn-warning:hover {
		    color: #212529;
		    background-color: #FF9F43;
		    border-color: #FF9F43;
		    border: 1px solid transparent;
		    border-radius: 0.25rem;
		}
	</style>	
    <style type="text/css">
		.detail_ticket {
		  /* The image used */
		  background-image: url("{{ asset('assets/img/ticket_bg.jpg')}}");

		  /* Full height */
		  height: 100%;

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}
	</style>
<style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style></head>

<body>
	<!-- mobile-nav section start here -->
	<div class="mobile-menu">
		<nav class="mobile-header primary-menu d-lg-none nav-up sticky-nav" style="">
			<div class="header-logo">
				<a href="" class="logo">
					<img src="{{ asset('assets/img/kalif_no_bg.png')}}" alt="logo" style="max-height: 50px;">
				</a>
			</div>
			<div class="header-bar" id="open-button">
	            <span></span>
	            <span></span>
	            <span></span>
	        </div>
		</nav>
		<div class="menu-wrap">
			<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
					<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"></path>
				<desc>Created with Snap</desc><defs></defs></svg>
			</div>
			<nav class="menu nav-up">
				<div class="mobile-menu-area d-lg-none">
			        <div class="mobile-menu-area-inner" id="scrollbar">
		                <div class="header-bar m-menu-bar">
		                    <a href="" class="logo">
		                    	<img src="{{ asset('assets/img/kalif_no_bg.png')}}" alt="logo" style="max-height: 50px;">
		                    </a>
		                    <div class="close-button" id="close-button"></div>
		                </div>
			            <ul class="m-menu">
			                <li><a href="">Home</a></li>
			                <li><a href="">Event</a></li>
			                <li><a href="">Contact Us</a></li>
			                <li><a href="">Register</a></li>
							<li><a href="">Login</a></li>
										            </ul>
		                <ul class="social-link-list d-flex flex-wrap">
		                    <li><a href="" class="facebook"><i class=" fab fa-facebook-f"></i></a></li>
		                    <li><a href="" class="google"><i class="fab fa-instagram"></i></a></li>
		                    <li><a href="" class="google"><i class="fab fa-youtube"></i></a></li>
		                    <li><a href="" class="google"><i class="fab fa-google"></i></a></li>
		                </ul>
			        </div>
			    </div>
			</nav>
		</div>
	</div>
	<!-- mobile-nav section ending here -->

	<!-- header section start here -->
	<div class="header-section style-2 d-none d-lg-block">
		
		<div class="header-top">
			<div class="container container-1310">
				<div class="htop-area row no-gutters">
					<ul class="htop-left">
					</ul>
					<ul class="htop-right">
						<li><a href="">Register</a></li>
						<li><a href="">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<nav class="primary-menu nav-up sticky-nav">
				<div class="container container-1310">
					<div class="menu-area">
						<div class="row no-gutters justify-content-between align-items-center">
							<a href="" class="logo">
								<img src="{{ asset('assets/img/kalif_no_bg.png')}}" alt="logo" style="max-height: 50px;">
								<img src="{{ asset('assets/img/kalif_no_bg.png')}}" alt="logo" style="max-height: 50px;">
							</a>
							<ul class="main-menu d-flex align-items-center">
								<li class="active">
									<a href="">Home</a>
								</li>
								<li><a href="">Event</a></li>
								<li class="head-contact d-none d-xl-block"><a href=""><i class="fas fa-phone"></i> Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- header section ending here -->
	<!-- page header section start here  -->
    <section id="page-header-section" class="page-header-section post-title style-2 style-4" style="background-image: url('{{ asset('assets/img/top_home.png')}}')">
        <div class="overlay">
        	<div class="page-header-content">
	            <div class="container container-1310">
	                <div class="page-title">
	            		<h2 id="judul" class="text-ellipsis max-row-3"></h2>
	                </div>
	            </div>
	        </div>
        </div>
    </section>
    <!-- page header section ending here -->

    <!-- conference-schedule section start here -->
    <section class="conference-section style-1">
	    <div class="container container-1310">
	    	<div class="section-wrapper">
	    		<div class="conference-schedule">
					<div class="conference-item">
						<div class="conference-thumb">
							<img src="{{ asset('assets/img/ic_date.png')}}" alt="conference">
						</div>
						<div class="conference-content">
							<h5 id="tgl"></h5>
	                        <p id="jam"></p>
						</div>
					</div>
					<div class="conference-item">
						<div class="conference-thumb">
							<img src="{{ asset('assets/img/ic_location.png')}}" alt="conference">
						</div>
						<div class="conference-content">
							<h5>Alamat</h5>
	                        <p id="alamat"></p>
						</div>
					</div>
					<div class="conference-item">
						<div class="conference-content">
							<h2>Tiket</h2>
	                        <a href="#register-section"><i class="fas fa-chevron-right"></i> Beli Tiket Sekarang</a>
						</div>
					</div>
				</div>
	    	</div>
	    </div>
	</section>
    <!-- conference-schedule section ending here -->

    <!-- event with sidebar section start here -->
    <div class="event-with-sidebar-section">
	    <div class="container container-1310">
	    	<div class="section-wrapper">
			    <div class="row">
				    <div class="col-lg-12">
				    	<div class="event-main-part">
						    <!--  business-conference section start here -->
						    <section class="business-conference style-1">
						    	<div class="container container-1310 p-0 p-md-auto">
						    		<div class="section-wrapper">
						    			<div class="conference-header">
						    				<div class="row align-items-center">
						    					<div class="col-lg-12">
						    						<div class="conference-item">
						    							<div class="conference-content">
							    							<img id="event-image" class="pointer" src="{{ asset('assets/img/220318121143-KSR%201443%20H.jpeg')}}">
							    							<h2 id="judul2"></h2>
							    							<p id="deskripsi" style="white-space: pre-line">
							    								
							    							</p>
							    						</div>
						    						</div>
						    					</div>
						    				</div>
						    			</div>
						    		</div>
						    	</div>
						    </section>
						    <!--  business-Conference section ending here -->

							<!-- register section start here -->
							<div id="register-section">
								
								<section class="register-section style-1 padding-tb" id="tiket">
									
								</section>
							</div>
							<!-- register section ending here -->

							</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- event with sidebar section ending here -->

    <!-- contact section -->
    <section class="contact-section padding-tb bg-ash">
        <div class="container container-1310">
            <div class="section-header wow fadeInDown animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s;">
                <h2>Ingin berkolaborasi dengan Kami?</h2>
            </div>
            <div class="section-wrapper row">
	            <div class="col-lg-12">
            		<div class="contact-info wow fadeInRight mb-0 animated" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
            			<p>Anda ingin berkolaborasi event dengan kami? Dapatkan kemudahan dalam hal registrasi, virtual payment, inbox link kelas online dan kemudahan lainnya. Isi form pada link berikut ini : <a style="color: #FF9F43;"><u>Form Kerjasama</u></a> atau Hubungi kami untuk mendapatkan informasi lebih lanjut</p>
            			<ul class="newevent-right-list">
							<li>
								<div class="newevent-icon"><i class="fas fa-phone-square"></i></div>
								<div class="newevent-addres">6285158381772</div>
							</li>
							<li>
								<div class="newevent-icon"><i class="far fa-envelope"></i></div>
								<div class="newevent-addres">kalif.idn@gmail.com</div>
							</li>
						</ul>
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- footer section start here -->
    <section class="footer-section">
    	<div class="footer-top padding-tb" style="background-image: url({{ asset('assets/img/footer.jpg')}}); background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;">
	    	<div class="container container-1310">
	    		<div class="row">
	    			<div class="col-12 col-md-12 col-lg-12 wow fadeInUp animated" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s;">
	    				<div class="footer-content">
	    					<div class="footer-title">
	    						<h5 style="color: #000;">KALIF – Platform Edukasi Keluarga Indonesia.</h5>
	    					</div>
	    					<div class="footer-newsletter">
	    						<p style="color: #000;">Temukan berbagai macam bahasan penting dalam kehidupan dari berbagai Narasumber (Pakar dan Praktisi) yang terpercaya dibidangnya.</p>
								<a href=""><button type="submit" name="submit"><i class="fab fa-google-play"></i> Download Now</button></a>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <div class="footer-bottom bg-ash">
	    	<div class="container container-1310">
				<div class="row justify-content-lg-between justify-content-center align-items-center">
	    			<div class="copyright wow fadeInLeft animated" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
	    				<p>©  2020 <a href="">KALIF</a></p>
	    			</div>
	    			<div class="footer-social">
	    				<ul class="social-media d-flex flex-wrap mb-0">
	    					<li class="wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;"><a href=""><i class="fab fa-facebook-f"></i></a></li>
	    					<li class="wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;"><a href=""><i class="fab fa-instagram"></i></a></li>
	    					<li class="wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;"><a href=""><i class="fab fa-youtube"></i></a></li>
	    					<li class="wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;"><a href=""><i class="fab fa-google"></i></a></li>
	    				</ul>
	    			</div>
	    		</div>
	    	</div>
	    </div>
    </section>
    <!-- footer section ending here -->	
	<script src="https://kalif.id/frontend/theme/assets/js/jquery.js"></script>
    <script src="https://kalif.id/frontend/theme/assets/js/snap.svg-min.js"></script>
    <script src="https://kalif.id/frontend/theme/assets/js/classie.js"></script>
    <script src="https://kalif.id/frontend/theme/assets/js/main3.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/bootstrap.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/fontawesome.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/jquery.counterup.min.js"></script>
	<script src="https://kalif.id/frontend/theme/assets/js/jquery.easing.js"></script> 
  	<script src="https://kalif.id/frontend/theme/assets/js/parallax.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/swiper.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/lightcase.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/circular-countdown.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/jquery.countdown.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/jQuery.scrollSpeed.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/jquery.jticker.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/waypoints.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/isotope.pkgd.min.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/functions.js"></script>
  	<script src="https://kalif.id/frontend/theme/assets/js/wow.min.js"></script>
    <script src="https://kalif.id/frontend/theme/assets/js/theia-sticky-sidebar.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){        
			getIndex();
			getIndex2();
		});

		function getIndex(){
			$.ajax({
				type : 'get',
				url : 'http://localhost:8000/data',
				dataType : 'json',
				success : function(data){              
					$(data).each(function(x,y){
						console.log(data);
						document.getElementById("judul").innerHTML = y.nama_paket;
						document.getElementById("judul2").innerHTML = y.nama_paket;
						document.getElementById("tgl").innerHTML = y.tanggal_kajian;
						document.getElementById("jam").innerHTML = y.waktu_kajian+' WIB';
						document.getElementById("alamat").innerHTML = y.tempat;
						document.getElementById("deskripsi").innerHTML = y.deskripsi;
						document.getElementById("tiket").innerHTML =
						'<div class="container container-1310 p-0 p-md-auto">' +
							'<div class="section-wraper">' +
								'<div class="register detail_ticket">' +
									'<h4 style="color: #000;">'+y.nama_paket+'</h4>' +
									'<p style="color: #000; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">'
									+y.detail_paket+'</p>' +
									'<br>' +
									'<p style="color: #000;">'+'Stok : '+y.stok_tiket+'</p>'+
									'<p style="color: #000;">'+
											'Tgl Pembelian : '+y.tgl_beli_tiket+' s/d '+y.tgl_penutupan_tiket+
									'</p>'+
									'<a href="#" class="btn-defult">'+'Beli Tiket Rp '+y.harga_tiket+'</a>'+
								'</div>'+
							'</div>'+
						'</div>'+
						'<br>';
					});            
				},
			});
		}

	</script>

</body></html>
