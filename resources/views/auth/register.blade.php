<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php
	// dd($errors);
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://cdn1.myassignmenthelp.com/new-images/favicon.png">
	<title>Create an Account - Student Portal</title>
	<meta name="Description" content="">
	<meta name="keywords" content="">
	<link rel="dns-prefetch" href="https://myassignmenthelp.com/">
	<link rel="dns-prefetch" href="https://cdn1.myassignmenthelp.com/">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com/">
	<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link rel="prefetch" href="https://chatserver.comm100.com/fonts/SourceSansPro-Regular.woff" as="font" crossorigin="anonymous"></head>
<body>
	<!-- Logo Section Start -->
	<div class="container">
	 		<a href="<?= url('/') ?>" class="login-logo">
			<img src="https://cdn1.myassignmenthelp.com/new-images/login-logo.png" alt="myassignmenthelp.com" class="m-auto d-block">
			<span class="text-center d-block">World's No. 1 Assignment Help Company since 2007</span>
		</a>
	</div>
	<!-- Logo Section End -->
	<!-- Login Form Start -->
@extends('layouts.app')

@section('content')
	<section class="login-body">
		<div class="container">
			<div class="row">
				<div class="col-7">
					<h2>SIGN UP</h2>
					<p>Be a part of best academic help service</p>
					<span id="error_box" class="d-block text-center error-popup" style="display: none; opacity: 0.0984771;"></span>
					
					<form name="login-form" method="post" id="form-signup" action="{{ route('register') }}">
						{{ csrf_field() }}
						
						<input type="hidden" name="token" value="">
						<input type="hidden" name="referal" value="/Home/signup.php">
						<input type="hidden" name="Pre_Url" value="">
						<input type="hidden" name="signuptokenid" value="8375d356fb2485b18e9c5de4a0f82ee5">
						<div class="p-relative">
							<label class="d-block">Your Name</label>
							<input name="name" id="Student_Name" type="text" value="" onblur="nameBlur()">
							<div class="icon-w-h login-sprite icon9 icon-pos"></div>
						</div>
						<div class="p-relative">
							<label class="d-block">Your Email</label>
							<input id="Email" name="email" type="text" value="" onblur="emailBlur()">
							<div class="icon-w-h login-sprite icon5 icon-pos"></div>
						</div>
						<div class="p-relative">
							<label class="d-block">Password</label>
							<input id="Email" name="password" type="text" value="">
							<div class="icon-w-h login-sprite icon5 icon-pos"></div>
						</div>
						<div class="p-relative">
							<label class="d-block">Confirm Password</label>
							<input id="Email" name="password_confirmation" type="text" value="">
							<div class="icon-w-h login-sprite icon5 icon-pos"></div>
						</div>
						
						<!-- <div class="p-relative">
							<label class="d-block">Your Password</label>
							<input type="password" id="Password" name="Password" value="" onblur="passwordBlur()">
							<div class="icon-w-h login-sprite icon6 icon-pos"></div>
						</div>
						<div class="p-relative">
							<label class="d-block">Confirm Password</label>
							<input type="password" id="Confirm_Password" name="Confirm_Password" value="" onblur="cnfpasswordBlur()">
							<div class="icon-w-h login-sprite icon6 icon-pos"></div>
						</div> -->
						<button name="btnsignup" id="submit" type="submit">SIGNUP</button>
						<button type="submit" name="wait1" id="wait1" disabled="" class="hidden">Please Wait</button>
						<i class="d-block text-center p-relative">or</i>
						
						<ul class="text-center">
							<li>
								<a href="https://www.facebook.com/v2.5/dialog/oauth?client_id=1259765687404717&amp;state=781c40a9e7e2f3d91ffee0e0869a4844&amp;response_type=code&amp;sdk=php-sdk-5.6.2&amp;redirect_uri=https%3A%2F%2Fmyassignmenthelp.com%2FHome%2FFacebook-CallBack.php&amp;scope=email%2Cuser_likes"><div class="icon-w-h login-sprite icon7"></div> FACEBOOK</a>							</li>
							<li><a href="https://accounts.google.com/o/oauth2/v2/auth?scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.me&amp;redirect_uri=https%3A%2F%2Fmyassignmenthelp.com%2FHome%2Fsignup.php&amp;response_type=code&amp;client_id=1039447461028-33qpoljgpsrf96vns14f91ql8ur0hhvv.apps.googleusercontent.com&amp;access_type=online"><div class="icon-w-h login-sprite icon8"></div> GOOGLE</a></li>
						</ul>
						<span class="d-block text-center">Already have an account? Click here to <a href="https://myassignmenthelp.com/Home/login.php">Login</a></span>
					</form>
				</div>
				<div class="col-5">
					<h1 class="p-relative">WHY STUDENTS PREFER US?</h1>
					<ul class="p-relative">
						<li><div class="icon-w-h login-sprite icon10 float-left"></div> Best Quality Work</li>
						<li><div class="icon-w-h login-sprite icon11 float-left"></div> Best Price</li>
						<li><div class="icon-w-h login-sprite icon12 float-left"></div> Timely Delivery</li>
						<li><div class="icon-w-h login-sprite icon13 float-left"></div> 24/7 Support</li>
						<li><div class="icon-w-h login-sprite icon14 float-left"></div> 100% Privacy</li>
						<li><div class="icon-w-h login-sprite icon15 float-left"></div> Unlimited Revision</li>
					</ul>
					<div class="row"></div>
					<div class="row"></div>
					<div class="row text-center p-relative">
						<h1 class="col-12 p-relative">ORDER WITHOUT SIGNUP</h1>
						<a href="https://myassignmenthelp.com/Home/" class="d-block p-relative m-auto">ORDER NOW</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Login Form End -->	
	<!-- Login Form start -->	
	<div class="footer-top-mh"></div>
	<!-- Login Form End -->	
	<!-- Login Form Start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-6">
					 2018 © <a href="https://myassignmenthelp.com/Home/">Myassignmenthelp.com</a>. All rights reserved.
				</div>
				<div class="col-6">
					<div class="light-gray-1 float-right">
						<span class="dataItem"><img src="https://myassignmenthelp.com/assets/img/australia.svg" alt="AUSTRALIA">+61-3-4000-0033</span>
						<ul class="listItem">
						    <li class="country-phone-numbers" style="display: none;"><a><img src="https://myassignmenthelp.com/assets/img/australia.svg" class="achor-center" alt="AUSTRALIA">+61-3-4000-0033</a></li>
						    <li class="country-phone-numbers"><a><img src="https://myassignmenthelp.com/assets/img/united-kingdom.svg" class="achor-center" alt="UK">+44-121-285-4112</a></li>
						    <li class="country-phone-numbers"><a><img src="https://myassignmenthelp.com/assets/img/new-zealand.svg" class="achor-center" alt="NZ">+64-98880721</a></li>
						    <li class="country-phone-numbers"><a><img src="https://myassignmenthelp.com/assets/img/united-states.svg" class="achor-center" alt="US">+1-515-393-6211</a></li>
					  </ul> 
					</div>
				</div>
			</div>
		</div>
	</footer>
		<!--mobile-chat-->
        <style>
        .bottom-fix-area button{
        	background: #ec971f;
        }
        
          .bottom-fix-area{    
              position: fixed;
              bottom: 0px;
              left: 0px;
              padding: 5px;
              width: 100%;
              background: #4e4e4e;
              padding: 6px 25px;
              box-shadow: 0px -3px 20px 0px #949494a6;
              z-index: 999;}.dropup ul.chat_area{ display:none;position:absolute;bottom: 60px;background: white;
              padding:15px 30px;
              margin-left: 24px;
              margin-bottom: -10px;
              border: 1px solid orange;
              min-width: calc(100vw - 49px);} .dropup ul.chat_area li a{color:#373737} .dropup .chat_area .chat-form label.radio {
              font-size: 12px;
              font-weight: 500;
              cursor: pointer;
          }.dropup .chat_area .chat-form  label.radio span {
              font-size: 11px;
              font-weight: 400;
              color: #9e9e9e;
              cursor: pointer;
          }
          .dropup .chat_area input[type='radio']{
            position: static;
            visibility: visible;
            margin-right: 10px;
            vertical-align: -3px;
          }
          .dropup ul.chat_area{
            list-style: none;
                margin-left: 0;
          }
          .dropup .chat_area .chat-form label.radio span{
            display: block;
          }
          .hidden-desktop1{
          	display: none !important;
          }
         @media(max-width:767px){
          	.hidden-desktop1{
          		display: block !important;
          	}
          	footer{
          		margin-bottom: 58px;
          		text-align:center;
          	}
          	footer .light-gray-1{
          		float: none;
          		margin: 0 auto;
          	}
          	#support-chat-wrapper{
          		display:none;
          	}
          }
        </style>
        <div class="row hidden-desktop1">
          <div class="col-xs-12 dropup hidden-sm hidden-md hidden-lg bottom-fix-area">
                <button class="btn btn-block btn-warning dropdown-toggle" style="font-size:18px;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="width:19px;" src="data:image/svg+xml;base64,&#10;              PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNjAuMDE5IDYwLjAxOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjAuMDE5IDYwLjAxOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBjbGFzcz0iIj48Zz48Zz4KCTxwYXRoIGQ9Ik0yNC45MDUsMTEuMDFDMTEuNjE5LDExLjAxLDAuODEsMjEuODE4LDAuODEsMzUuMTA0YzAsNC4xNzcsMS4wODQsOC4yNzgsMy4xNCwxMS44OTNMMC4wNTEsNTguNjkzICAgYy0wLjExNiwwLjM0OS0wLjAzMiwwLjczMiwwLjIxOSwxQzAuNDYyLDU5Ljg5OCwwLjcyNyw2MC4wMSwxLDYwLjAxYzAuMDg1LDAsMC4xNy0wLjAxMSwwLjI1NS0wLjAzM2wxMi43ODgtMy4zNjUgICBjMy4zNDksMS42OTQsNy4wOTYsMi41ODgsMTAuODYyLDIuNTg4QzM4LjE5MSw1OS4xOTksNDksNDguMzksNDksMzUuMTA0UzM4LjE5MSwxMS4wMSwyNC45MDUsMTEuMDF6IE0xNCwzOS4wMSAgIGMtMi4yMDYsMC00LTEuNzk0LTQtNHMxLjc5NC00LDQtNHM0LDEuNzk0LDQsNFMxNi4yMDYsMzkuMDEsMTQsMzkuMDF6IE0yNSwzOS4wMWMtMi4yMDYsMC00LTEuNzk0LTQtNHMxLjc5NC00LDQtNHM0LDEuNzk0LDQsNCAgIFMyNy4yMDYsMzkuMDEsMjUsMzkuMDF6IE0zNiwzOS4wMWMtMi4yMDYsMC00LTEuNzk0LTQtNHMxLjc5NC00LDQtNHM0LDEuNzk0LDQsNFMzOC4yMDYsMzkuMDEsMzYsMzkuMDF6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjRkRGREZEIj48L3BhdGg+Cgk8cGF0aCBkPSJNNTkuODg4LDQ3LjUxNGwtMy44MzktMTEuNTE4YzIuMDU2LTMuNjE0LDMuMTQtNy43MTYsMy4xNC0xMS44OTNjMC0xMy4yODYtMTAuODA5LTI0LjA5NS0yNC4wOTUtMjQuMDk1ICAgYy04LjI0MiwwLTE1LjgyMyw0LjIyMy0yMC4yMTksMTEuMDA3YzMuMDg5LTEuMjkxLDYuNDc3LTIuMDA3LDEwLjAyOS0yLjAwN0MzOS4yOTQsOS4wMSw1MSwyMC43MTYsNTEsMzUuMTA0ICAgYzAsMy45OTYtMC45MDYsNy43ODMtMi41MTgsMTEuMTcybDEwLjI2MywyLjdjMC4wODUsMC4wMjIsMC4xNywwLjAzMywwLjI1NSwwLjAzM2MwLjAwNywwLDAuMDE0LDAsMC4wMiwwYzAuNTUzLDAsMS0wLjQ0NywxLTEgICBDNjAuMDE5LDQ3LjgzLDU5Ljk3Miw0Ny42NjEsNTkuODg4LDQ3LjUxNHoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiNGREZERkQiPjwvcGF0aD4KPC9nPjwvZz4gPC9zdmc+"> Chat Now

                </button>
              <ul class="dropdown-menu chat_area" aria-labelledby="dropdownMenu2">
                <li>    
                  <h5 style="font-weight: 600;margin-bottom: 0px;margin-top: 0px;">Have any Query?</h5>
                <h6 style="margin-top:2px;">Contact with us</h6>
                  <form class="chat-form">
                    <label for="sales1" class="radio"><input type="radio" id="sales1" onclick="chatclick();" name="chatType" checked="" value="New">Sales Chat <br>
                            <span>(New Assignment Inquiry)</span>
                            </label>
                    <label for="support1" class="radio"><input type="radio" id="support1" name="chatType" onclick="supportChat();" checked="" value="New">Support Chat 
                            <br>
                            <span>(Assignment Already Booked)</span>
                            </label>
            </form>
            </li>
         
            </ul>
          </div>
        </div>
        <!--mobile-chat end-->
		<!-- Login Form End -->
	<!-- <link rel="stylesheet" href="css/final.css"> -->
	<!-- <link rel="stylesheet" href="css/login-style-min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css"> -->
	<style>.login-logo{text-decoration:none;color:#ff8b00;font-size: 10px;}.hidden{display:none;}*{margin:0;padding:0}body{padding:25px 0 0;font-family:'Open Sans',sans-serif;line-height:26px}.d-block{display:block}.p-relative{position:relative}.m-auto{margin:0 auto}.text-center{text-align:center}.text-left{text-align:left}.float-right{float:right}.float-left{float:left}.error-popup{background-color:#e2654c;padding:3px 10px;border-radius:4px;color: #fff}.login-sprite{background-image:url(https://cdn1.myassignmenthelp.com/studentpanelhome/login-sprite.png);background-size:496px 96px;background-repeat:no-repeat}.logo-w-h{width:234px;height:96px}.login-body{margin-top:20px}.login-body .container{border:1px solid #ddd;border-radius:10px}.login-body .col-7{left:41.7%;padding:25px 50px 20px}.login-body .col-7 h2{color:#2d3030;font-weight:400;font-size:30px}.login-body .col-7 p{color:#707070;font-size:16px;margin-bottom:20px;margin-top:2px}.login-body .col-7 label,#fbModal > div label{color:#333;font-size:14px;line-height:20px;margin-bottom:5px}.login-body .col-7 input[type="text"],.login-body .col-7 input[type="password"],#fbModal > div input[type="email"],.login-body .col-7 input[type="email"],.login-body .col-7 input[type="tel"],.login-body .col-7 select{box-shadow:none;background-color:#f9f9f9;border:1px solid #ddd;width:100%;height:40px;margin-bottom:10px;border-radius:5px;padding:6px 40px 6px 12px}.login-body .col-7 select{width:25%;padding: 0 5px;}.login-body .col-7 input[type="tel"]{width:72%}.clearfix:before,.clearfix:after{content:"";display:table;}.clearfix:after{clear:both}.login-body .col-7 input[type="text"].error-border, .login-body .col-7 input[type="password"].error-border,#fbModal > div input[type="email"].error-border,.login-body .col-7 input[type="email"].error-border,.login-body .col-7 input[type="tel"].error-border,.login-body .col-7 select.error-border{border:1px dashed red}.login-body .col-7 input:focus,.login-body .col-7 select:focus{outline:none;background-color:transparent}.icon-pos{position:absolute;top:37px;right:10px;width:20px;height:20px}.icon9{background-position:-475px 0}.icon5{background-position:-424px 0}.icon16{background-position:-477px -43px}.icon6{background-position:-450px 0}[type=checkbox],[type=radio]{position:absolute;left:-9999px;visibility:hidden}[type=checkbox]+label,[type=radio]+label{position:relative;padding-left:25px;font-size:13px!important;cursor:pointer;display:inline-block;height:25px;line-height:18px!important}[type=checkbox]:checked+label:before{top:1px;left:0;width:7px;height:11px;border-color:transparent #fff #fff transparent}[type=checkbox]:not(:checked)+label:before{width:0;height:0;border-width:3px;border-color:transparent;left:6px;top:10px}[type=checkbox]+label:before{-webkit-transform:rotateZ(37deg);-ms-transform:rotate(37deg);transform:rotateZ(37deg);-webkit-transform-origin:100% 100%;-ms-transform-origin:100% 100%;transform-origin:100% 100%}[type=checkbox]+label:after,[type=checkbox]+label:before{content:"";left:0;position:absolute;-webkit-transition:border .25s,background-color .25s,width .2s .1s,height .2s .1s,top .2s .1s,left .2s .1s;transition:border .25s,background-color .25s,width .2s .1s,height .2s .1s,top .2s .1s,left .2s .1s;z-index:1;border-style:solid;border-width:1px}[type=checkbox]+label:after{border-radius:2px;height:15px;width:15px}[type=checkbox]:checked+label:after{top:0;border-color:#ff8b00;background-color:#ff8b00;z-index:0}.login-body .col-7 a{color:#ff8b00;font-size:13px}button{background-color:#282a2b;color:#fff;border:none;width:100%;padding:10px 15px;font-size:18px;margin-top:2px;border-radius:5px;transition:background .5s ease;cursor:pointer}#fbModal > div button{width:50%}button:hover{background-color:#111213}.login-body .col-7 i{color:#778087;font-size:18px;margin-bottom:10px;margin-top:10px}.login-body .col-7 i:before,.login-body .col-7 i:after{content:"";background-color:#ccc;height:1px;width:45%;position:absolute;left:0;top:15px}.login-body .col-7 i:after{left:auto;right:0}.login-body .col-7 ul li{list-style:none;width:49%;display:inline-block;margin-bottom:12px}.login-body .col-7 ul li a{text-decoration:none;color:#fff;font-size:15px;padding:8px 20px;transition:background .5s ease;border-radius:4px;display:block}.login-body .col-7 ul li a > div{display:inline-block;vertical-align:-7px}.icon7{background-position:-237px -36px;margin-right:0px}.icon8{background-position:-263px -38px;width:30px;margin-right:5px}.login-body .col-7 ul li:first-child a{background-color:#3b5998;margin-right:20px}.login-body .col-7 ul li:first-child a:hover{background-color:#173b88}.login-body .col-7 ul li:last-child a{background-color:#db402c}.login-body .col-7 ul li:last-child a:hover{background-color:#bb3625}.login-body .col-7 span{font-size:13px}.login-body .col-5{background-image:url(https://cdn1.myassignmenthelp.com/studentpanelhome/login-bg.jpg);background-repeat:no-repeat;color:#fff;background-size:cover;padding-top:50px;right:58.3%;padding-left:25px;border-radius:10px 0 0 10px}.login-body .col-5:before,.login-body .col-5 > .row:nth-of-type(3):before{content:"";background-color:rgba(0,0,0,0.5);height:100%;width:100%;position:absolute;top:0;left:0;border-radius:10px 0 0 10px}.login-body .col-5 h5{font-size:36px}.login-body .col-5 h1{font-size:22px;font-weight:400;margin-top:6px;margin-bottom:24px}.icon-w-h{width:24px;height:25px}.icon1{background-position:-239px 1px}.login-body .col-5 h3{font-size:26px;margin-top:5px}.login-body .col-5 h3 small{font-size:16px}.login-body .col-5 span{line-height:16px;font-size:13px}.icon2{background-position:-274px 1px}.icon3{background-position:-304px 1px;width:70px}.icon4{background-position:-382px 0;width:33px;height:33px}.login-body .col-5 > .row:nth-of-type(2){margin-top:35px}.login-body .col-5 > .row:nth-of-type(3){position:absolute;bottom:0;margin-top:40px;padding-top:15px;padding-bottom:25px}.login-body .col-5 > .row:nth-of-type(3):before{background-color:rgba(255,255,255,0.3);width:103%;left:-10px;border-radius:0 0 0 10px}.login-body .col-5 > .row:nth-of-type(3):after{background-color:rgba(255,255,255,0.1);content:"";position:absolute;top:-12px;left:-10px;width:103%;height:12px}.login-body .col-5 > .row:nth-of-type(3) h1{margin-bottom:12px}.login-body .col-5 > .row:nth-of-type(3) a{color:#fff;background-color:#00a501;text-decoration:none;font-size:18px;border-radius:5px;padding:8px 40px;width:230px;transition:background .5s ease}.login-body .col-5 > .row:nth-of-type(3) a:hover{background-color:#0e810f}.login-body .col-5 ul li{color:#fff;list-style:none;font-size:18px}.login-body .col-5 ul li > div{margin-right:15px;width:25px}.login-body .col-5 ul li + li{margin-top:10px}.icon10{background-position:-297px -41px}.icon11{background-position:-327px -39px}.icon12{background-position:-357px -38px}.icon13{background-position:-385px -37px}.icon14{background-position:-415px -40px}.icon15{background-position:-445px -38px}footer{background-color:#303030;color:#fff;padding:10px 0;margin-top:50px;font-size:13px}footer a{color:#fff;text-decoration:none}.light-gray-1{width:165px;cursor:pointer;}.light-gray-1 img{margin-top:-3px;width:28px;height:31px;vertical-align:top;margin-right:8px;}.listItem{padding:6px 10px!important;background-color:#303030;position:absolute;z-index:4;display:none;margin-left:0;width:200px;right:0;margin-top:-134px;margin-bottom:0;}.listItem li{cursor:pointer;list-style: none;padding:0 10px;}.country-phone-numbers a{vertical-align:middle;display:inline-block;float:left;}#fbModal{display:none;position:fixed;z-index:1;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgba(0,0,0,0.4);-webkit-animation-name:fadeIn;-webkit-animation-duration:0.4s;animation-name:fadeIn;animation-duration:0.4s}#fbModal > div{padding:44px;position:fixed;top:10%;background-color:#fff;width:513px;left:0;right:0;margin:0 auto;-webkit-animation-name:slideIn;-webkit-animation-duration:0.4s;animation-name:slideIn;animation-duration:0.4s;}.close{font-size:30px;top:-35px;right:-35px;cursor: pointer;}#fbModal > div h4{font-size:22px;font-weight:500;margin-bottom:28px}#fbModal > div h4 span{font-weight:bold;color:#3B5998}#fbModal > div h4 span.gmail{color:#bb3625;}#fbModal > div i{line-height:18px;color:red;margin-bottom:20px;font-size:14px}#fbModal > div h5{line-height:15px;color:#888;font-size:18px}#fbModal > div p{color:#888;font-size:15px}#fbModal > div b{color:green;font-size:14px;font-weight:normal;margin-bottom:40px;line-height:10px}@-webkit-keyframes slideIn{from{top:-300px;opacity:0}to{bottom:0;opacity:1}}@keyframes slideIn{from{top:-300px;opacity:0}to{top:0;opacity:1}}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}@media (min-width:768px){footer{position:fixed;width:100%;bottom:0}.footer-top-mh{min-height:100px}}@media (min-width:576px){.login-body .container,footer .container{max-width:95%}}@media (min-width: 992px){.login-body .container,footer .container{max-width:960px}}@media (min-width: 1200px){.login-body .container{max-width:900px}footer .container{max-width: 1140px}}@media(min-width:768px) and (max-width:991px){.login-body .col-7{padding-left:30px;padding-right:30px}.login-body .col-5 h1{font-size:20px}.login-body .col-7 select{width:30%}.login-body .col-7 input[type="tel"]{width:67%}}@media(max-width:767px){.login-body .container{border-radius:0}.login-body .col-5,.login-body .col-7,footer .col-6{flex:0 0 100%;max-width:100%;left:0;right:0}.login-body .col-7{padding-left:15px;padding-right:15px}.login-body .col-7 h2{font-size:26px}.login-body .col-7 p{margin-top:5px;font-size:15px}.login-body .col-5{border-radius:0;padding-top:40px;padding-left:15px}.login-body .col-5 h5{font-size:26px}.login-body .col-5 h1{font-size:16px}.login-body .col-5 h3{font-size:20px}.login-body .col-5 > .row:nth-of-type(3):before,.login-body .col-5 > .row:nth-of-type(3):after{width:100%;left:0}.login-body .col-5 > .row:nth-of-type(3){position:relative;}.login-body .col-5:before,.login-body .col-5 > .row:nth-of-type(3):before{border-radius:0}#fbModal > div{width:90%;padding:25px;top:5%}.close{top:-20px;right:-20px}}@media(max-width:900px) and (orientation:landscape){#fbModal > div{height:310px;overflow-y:scroll}#fbModal > div button{margin-bottom:20px;}footer{text-align:center;}.light-gray-1{float:none;margin:0 auto;}.listItem{left:0;margin:-160px auto 0!important;}}@media(max-width:400px){.login-body .col-7 ul li{width:100%}.login-body .col-7 ul li:first-child a{margin-right:0}footer{font-size:12px;}}@media(max-width:576px){.login-body .col-7 select,.login-body .col-7 input[type="tel"]{width:100%}.icon16{top:86px}}/*@media screen and (-webkit-min-device-pixel-ratio:0){@media (max-width:767px) and (orientation:landscape){.icon-pos{top:48px}}}*/
html{box-sizing:border-box;-ms-overflow-style:scrollbar}*,::after,::before{box-sizing:inherit}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col-1{-webkit-box-flex:0;-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-webkit-box-flex:0;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-webkit-box-flex:0;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-webkit-box-flex:0;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-webkit-box-flex:0;-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media screen and (-webkit-min-device-pixel-ratio:0){@media (max-width:767px) and (orientation:landscape){.icon-pos{position:relative;float:right;margin-top:-38px;top:0px}}}@media(min-width:1025px) and (max-width:1366px){body{zoom:0.9;}}</style>
	<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/api2/v1536180392857/recaptcha__en.js"></script><script type="text/javascript" async="" src="https://chatserver.comm100.com/livechat.ashx?siteId=20537"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script async="" src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		/* GOOGLE ANALYTICS CODE */
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-10891965-3', 'auto');
		ga('send', 'pageview');
		/* END GOOGLE ANALYTICS CODE */
	</script>

<script>
	/* FUNCTION TO CHECK NUMERIC KEYS */
	function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode != 32 &&((charCode < 48 || charCode > 57))))
			return false;
		return true;
    }
	/* END FUNCTION TO CHECK NUMERIC KEYS */

	/* INPUT EVENT FUNTION CODE */

	function nameBlur(){
		var un =document.getElementById("Student_Name").value;

		var classString  = document.getElementById("Student_Name").className;
		if((un!='')&&(un.match(/^[a-zA-Z ]*$/))) {
			if(classString.search('error-border') > 0)
				document.getElementById("Student_Name").className = " ";
		}else{
			if(classString.search('error-border') <= 0)
				document.getElementById("Student_Name").className += " " + "error-border";
		}

		return false;
	}

	function emailBlur(){
		var x  =document.getElementById("Email").value.trim();
		var emailString  = document.getElementById("Email").className;
		if(checkRegex(x)) {
			checkEmail(x);
			if(emailString.search('error-border') > 0)
				document.getElementById("Email").className = " ";
		}else{
			if(emailString.search('error-border') <= 0)
				document.getElementById("Email").className += " " + "error-border";
		}

		return false;
	}

	function isdChange(){
		var c = document.getElementById('ISD_Id');
		var isdString  = document.getElementById("ISD_Id").className;
		if(c != ''){
			if(isdString.search('error-border') > 0)
				document.getElementById("ISD_Id").className = " ";
		}
		else{
			if(isdString.search('error-border') <= 0)
				document.getElementById("ISD_Id").className += " " + "error-border";
		}
		return false;
	}

	function phoneBlur(){
		var c = document.getElementById('Phone_No').value;
		var re = /^[0-9-]+$/;
		var phoneString  = document.getElementById("Phone_No").className;
		if(c != '' && re.test(c) && (c.length <= 15 && c.length >= 5)){
			if(phoneString.search('error-border') > 0)
				document.getElementById("Phone_No").className = "float-right";
		}
		else{
			if(phoneString.search('error-border') <= 0)
				document.getElementById("Phone_No").className += " " + "error-border";
		}
		return false;
	}


	/*function passwordBlur(){
		var y  =document.getElementById("Password").value;
		var z  =document.getElementById("Confirm_Password").value;
		var x  =document.getElementById("Email").value;
		var un =document.getElementById("Student_Name").value;
		var passString 	 = document.getElementById("Password").className;
		if(y!=''){
			if(passString.search('error-border') > 0)
				document.getElementById("Password").className = " ";
		}else{
			if(passString.search('error-border') <= 0)
				document.getElementById("Password").className += " " + "error-border";
		}
	
		return false;
	}

	function cnfpasswordBlur(){
		var y  =document.getElementById("Password").value;
		var z  =document.getElementById("Confirm_Password").value;
		var x  =document.getElementById("Email").value;
		var un =document.getElementById("Student_Name").value;
		var cpassString = document.getElementById("Confirm_Password").className;
		if(z!='' && y==z){
			if(cpassString.search('error-border') > 0)
				document.getElementById("Confirm_Password").className = " ";
		}else{
			if(cpassString.search('error-border') <= 0)
				document.getElementById("Confirm_Password").className += " " + "error-border";
		}
		
		return false;
	}*/
	/*  END INPUT EVENT FUNTION CODE */

	/* LOGIN FORM VALIDATION */
	function formValidation(){
		var valid = true;
		//document.getElementById("submit").setAttribute('disabled','true');
		//document.getElementById("submit").innerHTML = "Please Wait...";
		var phone_regx = /^[0-9-]+$/;
		var name_regx  = /^[a-zA-Z ]*$/;
		var  emailStr = document.getElementById("Email").value.trim();
		var  nameStr  = document.getElementById("Student_Name").value.trim();
		var  phoneStr  = document.getElementById("Phone_No").value.trim();
		if(nameStr === ""  || ! name_regx.test(nameStr)){
			var nameElement  = document.getElementById("Student_Name");
			var nameString  = nameElement.className;
			if(nameString.search('error-border') <= 0)
				nameElement.className += " " + "error-border";
			valid = false;
		}
		if(emailStr === "" || ! checkRegex(emailStr)){
			var emailElement = document.getElementById("Email");
			var classString  = emailElement.className;
			if(classString.search('error-border') <= 0)
				emailElement.className += " " + "error-border";
			valid = false;
		}
		if(document.getElementById("ISD_Id").value.trim() === ''){
			var isdElement = document.getElementById("ISD_Id");
			var isdString  = isdElement.className;
			if(isdString.search('error-border') <= 0)
				isdElement.className += " " + "error-border";
			valid = false;
		}
		if(phoneStr == '' && ! phone_regx.test(phoneStr) && (phoneStr.length > 15 || phoneStr.length < 5)){
			var phoneElement = document.getElementById("Phone_No");
			var phoneString  = phoneElement.className;
			if(phoneString.search('error-border') <= 0)
				phoneElement.className += " " + "error-border";
			valid = false;
		}
		/*if(document.getElementById("Password").value.trim() === ''){
			var passwordElement = document.getElementById("Password");
			var passwordString  = passwordElement.className;
			if(passwordString.search('error-border') <= 0)
				passwordElement.className += " " + "error-border";
			valid = false;
		}
		if(document.getElementById("Confirm_Password").value.trim() === '' || document.getElementById("Confirm_Password").value.trim() != document.getElementById("Password").value.trim()){
			var passwordElement = document.getElementById("Confirm_Password");
			var passwordString  = passwordElement.className;
			if(passwordString.search('error-border') <= 0)
				passwordElement.className += " " + "error-border";
			valid = false;
		}*/
		/*if(! document.getElementById("Checkbox").checked){
			var checkElement = document.getElementById("Checkbox");
			var checkString  = checkElement.className;
			if(checkString.search('error-border') <= 0)
				checkElement.className += " " + "error-border";
			valid = false;
		}*/
		if(document.getElementById("g-recaptcha-response")){
			var recaptcha = document.getElementById("g-recaptcha-response").value;
	        if (recaptcha === "") {
	        	var list, index;
	        	list = document.getElementsByClassName("g-recaptcha");
	        	for (index = 0; index < list.length; ++index) {
				    list[index].setAttribute('style','border:1px dashed red');
				}
				valid = false;
	     	}  
		}
		if(valid){
     		document.getElementById("submit").style.display = 'none';
			document.getElementById("wait1").removeAttribute('class');
     	}
     	return valid;
	}
	/* END LOGIN FORM VALIDATION */

	/* CHECK REGULAR EXPRESSION */
	function checkRegex(value){
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(value);
	}
	/* END CHECK REGULAR EXPRESSION */

	/* FUNTION FOR CAPTCH */
	function recaptchaCallback() {
  		list = document.getElementsByClassName("g-recaptcha");
    	for (index = 0; index < list.length; ++index) {
		    list[index].setAttribute('style','border:none');
		}
	}
	/* END FUNTION FOR CAPTCH */

	/* FUNCTION TO CHECK EMAIL EXISTANCE */
	function checkEmail(email){
		var resp;
		var xmlhttp = new XMLHttpRequest(),
			method 	= 'POST',
			url 	= 'https://myassignmenthelp.com/Home/ajax/validate.php?tokken=',
			data 	= 'Type=Email&Email='+email+'&token=';
			xmlhttp.open(method, url, true);
			//Send the proper header information along with the request
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.setRequestHeader("x-requested-with",'XMLHttpRequest');
			xmlhttp.onreadystatechange = function () {
	  		if(xmlhttp.readyState === XMLHttpRequest.DONE && xmlhttp.status === 200) {
	  			resp = xmlhttp.responseText;
	  			if(resp.length > 0){
		  			var temp1 = resp.split('|g|');
		  			if(temp1[1].length > 0){
		  				var temp2 = temp1[1].split(',');
			  			if(temp2[0].length > 0){
			  				document.getElementById('error_box').setAttribute('style','display:block');
			  				document.getElementById('error_box').textContent = temp2[0];
			  				document.getElementById('submit').setAttribute('disabled','true');
			  				document.getElementById('Email').setAttribute('class','error-border');
			  				setTimeout(function() {
								 fade(document.getElementById('error_box'));
							}, 5000);
			  			}
		  			}
		  			else{
		  				document.getElementById('error_box').setAttribute('style','display:none');
		  				document.getElementById('submit').removeAttribute('disabled');
		  				document.getElementById('Email').removeAttribute('class');
		  			}
	  			}
	  			else{
	  				document.getElementById('error_box').setAttribute('style','display:none');
	  				document.getElementById('submit').removeAttribute('disabled');
	  				document.getElementById('Email').removeAttribute('class');
	  			}
	  		}
		}
		xmlhttp.send(data);
	}
	setTimeout(function() {
		fade(document.getElementById('error_box'));
	}, 5000);
	/* END FUNCTION TO CHECK EMAIL EXISTANCE */

	function fade(element) {
	    var op = 1;  // initial opacity
	    var timer = setInterval(function () {
	        if (op <= 0.1){
	            clearInterval(timer);
	            element.style.display = 'none';
	        }
	        element.style.opacity = op;
	        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
	        op -= op * 0.1;
	    }, 50);
	}
</script>
<script src="https://myassignmenthelp.com/assets/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown-toggle").click(function(){
        $('.chat_area').toggle();
    });
});
</script>
<script>
  /* Country List Dropdown */
if ($(window).width() > 992) {
    $('li.country-phone-numbers a').removeAttr('href');
}

$(function(){
  var listItem = $('ul.listItem');
    var activeData = $('span.dataItem');
    var Drop = $('span.dropDown-list');
    var childlist = listItem.children('li');
    //console.log(childlist);
    var ancnhor = childlist.find('a');
    childlist.each(function(){
      if($(this).attr('data-active') == 'true') {
        //  alert('hello');
        console.log($(this));
        $(this).css('display', 'none');
         var activeCountry = $(this);
         var countryAc = activeCountry.children().clone();
         Drop.html('<i class="fa fa-angle-down xs-pull-right rotate" aria-hidden="true"></i>');
         activeData.html(countryAc);
      }
    })
})

   // var activeCountry = childlist.first().attr('data-active', true);
   


function countryToggle(currentElement, activeDataView) {
    currentElement.attr('data-active', true).css({
        'display': 'none'
    }).siblings().attr('data-active', false).css({
        'display': 'block'
    });
    var currentActive = currentElement.children().clone();
    activeDataView.html(currentActive);
    currentElement.attr('data-active', true).css({
        'display': 'none'
    });
    /*console.log(activeDataView);*/
}
$('.light-gray-1').on('click', function () {
    $(this).toggleClass('be-active');
    $(this).find('ul.listItem').stop().slideToggle();
});
$('ul.listItem li').on('click', function () {
    var currentElement = $(this);
    var activeDataView = $(this).parent().siblings('span.dataItem');
    countryToggle(currentElement, activeDataView);
});
$(document).mouseup(function (e) {
    var elementClick = $('ul.listItem');
    e.stopPropagation();
    if (!elementClick.is(e.target) && elementClick.has(e.target).length === 0) {
        elementClick.stop().slideUp();
    }
});
/* End Country List dropdown */
</script>
<div id="comm100-button-5000034"></div>
<script type="text/javascript">
    var Comm100API = Comm100API || new Object;
    Comm100API.chat_buttons = Comm100API.chat_buttons || [];
    var comm100_chatButton = new Object;
    comm100_chatButton.code_plan = 5000034;
    comm100_chatButton.div_id = 'comm100-button-5000034';
    Comm100API.chat_buttons.push(comm100_chatButton);
    Comm100API.site_id = 20537;
    Comm100API.main_code_plan = 5000034;

    var comm100_lc = document.createElement('script');
    comm100_lc.type = 'text/javascript';
    comm100_lc.async = true;
    comm100_lc.src = 'https://chatserver.comm100.com/livechat.ashx?siteId=' + Comm100API.site_id;
    var comm100_s = document.getElementsByTagName('script')[0];
    comm100_s.parentNode.insertBefore(comm100_lc, comm100_s);

    setTimeout(function() {
        if (!Comm100API.loaded) {
            var lc = document.createElement('script');
            lc.type = 'text/javascript';
            lc.async = true;
            lc.src = 'https://hostedmax.comm100.com/chatserver/livechat.ashx?siteId=' + Comm100API.site_id;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(lc, s);
        }
    }, 5000)
</script>
<script>
function chatclick() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var a = $(document).width();
	   a < 767 ? window.open('https://chatserver.comm100.com/ChatWindow.aspx?planId=5000034&visitType=1&byHref=1&partnerId=-1&siteid=20537','popUpWindow','height=400,width=600,left=10,top=10,,scrollbars=yes,menubar=no') : $("#comm100-float-button-2").click()
	   
    } else {
        var b = $(window).width();
        b < 767 ? window.location.href = "https://chatserver.comm100.com/ChatWindow.aspx?planId=5000034&visitType=1&byHref=1&partnerId=-1&siteid=20537" : $("#comm100-float-button-2").click()
    }
}

</script>
<!-- new chat box--design starts-->
<style>#support-chat-wrapper{    width: 220px;
    position: fixed;
    top: 36.5%;
    right: -194px;
    height: 100px;
    -webkit-transition: all 1.0s ease-in-out;
    -moz-transition: all 1.0s ease-in-out;
    -o-transition: all 1.0s ease-in-out;
    transition: all 0.3s ease-in;
    z-index: 9999;}.support_chat_now_btn{   /*  display: inline-block;
    padding: 3px 13px;
    background: #ff8d00;
    color: white!important;
    text-decoration: none!important;
    border: 1px solid #ff8d00;
    font-size: 18px;*/} .btn-rotated{    /* -webkit-transform: rotate(270deg); 
    -moz-transform: rotate(270deg);
    -o-transform: rotate(270deg);*/
    /* position: relative; */
    left: -7px;
    /* top: 48px; */
    position: absolute;
    /* left: -16px; */
    top: -34px;
    /* width: 100px; */
}.open-chat{right:0px!important; -webkit-transition:all 1.0s ease-in-out;
  -moz-transition:all 1.0s ease-in-out;
  -o-transition:all 1.0s ease-in-out;
  transition:all 1.0s ease-in-out;}.chat-options-wrapper{ margin-left: 29px;
    padding: 10px 10px;
    background: white;
    margin-top: -34px; border:1px solid #e38d13; border-right:none;} #support-chat-wrapper .chat-form{margin-left: 5px;
    background: none;
    margin-top: 0px;
    overflow: visible;
    clear: both;}
    
   /*#support-chat-wrapper .chat-options-wrapper label.radio span{font-size: 11px;
    font-weight: 400;color:#9e9e9e;cursor:pointer;}*/
  #support-chat-wrapper .chat-options-wrapper label.radio{font-size: 12px;display: block;
    font-weight: 500; cursor:pointer;}
    #support-chat-wrapper .chat-form [type=checkbox],
    #support-chat-wrapper .chat-form [type=radio]{
    	position: static;
    	visibility: visible;
    	margin-right: 8px;
    	vertical-align: -3px;
    }
    </style>
    
<div id="support-chat-wrapper" class=" visible-sm visible-md visible-lg">
<a href="javascript:void(0)" class="support-chat-toggle support_chat_now_btn btn-rotated" onclick=""><img style="width: 36px;" src="https://cdn1.myassignmenthelp.com/new-images/chatnow-orange.png"></a>

<div class="chat-options-wrapper">
    <h5 style="font-weight: 600;margin-bottom: 0px;margin-top: 0px;">Have any Query?</h5>
  
      <form class="chat-form">
        <label for="sales" class="radio"><input type="radio" id="sales" name="chatType" onclick="salesInitiate();" value="New">Sales Chat <br>
                <span>(New Assignment Inquiry)</span>
                </label>
        <label for="support" class="radio"><input type="radio" id="support" onclick="supportChat();" name="chatType" value="New">Support Chat 
                <br>
                <span>(Assignment Already Booked)</span>
                </label>
</form>
</div>
</div>


<input type="hidden" id="cb_visitorId" value="">
<input type="hidden" id="cb_visitorName" value="">
<input type="hidden" id="cb_session_id" value="94e878f1f8cd76e5cf6140d70ac7d5c1">
<input type="hidden" id="cb_total_orders" value="">
<input type="hidden" id="cb_total_paid_orders" value="">
<input type="hidden" id="cb_success" value="">

<script type="text/javascript" src="https://expertchatonline.com/chatbot/socket.io/socket.io.js"></script><iframe id="comm100-iframe" style="display: none;"></iframe><div id="comm100-container"><div><div></div><div></div><div><div></div></div></div><div id="comm100-float-button-2"><div style="position: fixed; z-index: 2147483642; font-size: 0px; right: 0%; top: 50%; transform: translateY(-50%);"><a href="https://chatserver.comm100.com/ChatWindow.aspx?siteId=20537&amp;planId=5000034"><img src="https://chatserver.comm100.com/DBResource/DBImage.ashx?imgId=5000114&amp;type=2&amp;siteId=20537" alt="chat button" style="border: none;"></a></div></div></div>
<script type="text/javascript" src="https://expertchatonline.com/chatbot/javascripts/jquery.md5.js"></script>
<script type="text/javascript">



    $(document).ready(function(){
        $(".support-chat-toggle").click(function(){
          //  $("#support-chat-wrapper").animate({
            //                width: "-400"
            //            });
            $("#support-chat-wrapper").toggleClass("open-chat");

        });
    });

    function studentdata(tutorid) {
      $.ajax({
        url:  'https://HOSTNAME/assets/model/studentData.php?Student_Id='+tutorid,
        //url: 'http://dev.citeall.com/devuser/sadmin/assets/model/studentData.php?Student_Id='+tutorid,
        //url: 'https://myassignmenthelp.com/assets/model/studentData.php?Student_Id='+tutorid,
        dataType: 'json',
        success: function(data) {
            $('#cb_total_orders').val(data.TotalOrders);
            $('#cb_total_paid_orders').val(data.TotalPaidOrders);
            $('#cb_success').val(data.Success);
        }
      });
    }
  

    

    function makeStudentId(id){
        var stuStr = '$_' + $.md5(btoa('!@#$^&_CHATBOT_&^$#@!')) + id + $.md5(btoa('chatBot_&^$#@!_!@#$^&')) + '_$';
        return stuStr;
    }    
    //code for support chat window open

    function eco_deleteCookie(name) { 
      document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;'; 
    }
    function eco_readCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
    }
    function eco_createCookie(name, value, hours) {
      if (hours) {
        var date = new Date();
        date.setTime(date.getTime()+(hours*60*60*1000));
        var expires = "; expires="+date.toGMTString();
      } else {
        var expires = "";
      }
      document.cookie = name+"="+value+expires+"; path=/";
    }

    function makeid() {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (var i = 0; i < 35; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    }
        
    function supportChat(){

      //set unique key start
      var uk = eco_readCookie('unique_key');
      if(uk==null || uk=="null"){
        var random_k = makeid();
        eco_createCookie('unique_key', random_k, 12);
      }

      var uk1 = eco_readCookie('unique_key')

      var uk1 = (uk1!=null) ? uk1 : '';
      

              window.open('https://expertchatonline.com:3003/visitor?chatType=normal&url='+window.location.href+'&userid=0000&orderid=<p><b> User Agent</b>: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.81 Safari/537.36</p>&username=Guest&dept=supportchat&question=Hi&currentOrder=0000&studentId=0000&tutor_level=543&site_id=1005&unique_key='+uk1, 'mahchat', 'width=480,height=600,resizable=0,menubar=no,location=no').focus();
        
$("#support-chat-wrapper").removeClass("open-chat");
    }
</script>
<input type="hidden" id="Support_Chat_Link" value="https://myassignmenthelp.com/?chat=sc">
<script type="text/javascript">
  
        var uk = eco_readCookie('unique_key');
          if(uk!=null || uk!="null"){
            var socket = io.connect('https://expertchatonline.com:3003');
              setTimeout(function(){
                
                if(socket.connected){
                   
                  socket.emit('student_details',{
                    s_id : '',
                    s_name : '',
                    s_total_orders : '',
                    s_total_paid_orders : '',
                    session_id : '' ,
                    page_url : window.location.href.split('#')[0],
                    unique_key : (uk!=null) ? uk : ''
                  });
                    
                  }
                },5000);
          }

          </script>
<script>function salesInitiate(){ 
//code for comm100 open on sales chat click
let height = $('#chat_window_container').contents().height();
console.log(height);
if (height != null) {
console.log("chat is open");

if (height < 250) {
console.log("now run maximize chat window code");
$('#chat_window_container').contents().find('a.chatButton')[0].click();
     $("#support-chat-wrapper").removeClass("open-chat");
}
} else {

console.log("run chat window open code");
$('#comm100-container').find('a')[0].click();
     $("#support-chat-wrapper").removeClass("open-chat");
}
}
$(window).scroll(function() {
let height = $('#chat_window_container').contents().height();
if (height != null) {
if (height > 250) {
	$('#chat_window_container').contents().find('.icon-minimize').trigger( "click" );
}
}
});
</script>
<style>#comm100-float-button-2,#comm100-float-button-3{display:none!important;}@media(min-width:991px){iframe#chat_window_container {

}}</style>
<!--new-chatbox-design ends-->


</body></html>