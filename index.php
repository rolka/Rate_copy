<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kurs To Text</title>
<link href="css/reset.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.3.2.js" type="text/javascript"></script>
<script src="js/jquery.countdown.js" type="text/javascript"></script>
<script src="js/coda.js" type="text/javascript"></script>
<script src="js/jquery.thumbhover.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Aller_400-Aller_700.font.js" type="text/javascript"></script>
<script src="js/Bebas_Neue_400.font.js" type="text/javascript"></script>
<!-- Fonts from Google -->
<link href='http://fonts.googleapis.com/css?family=Gorditas:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:900italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Mrs+Saint+Delafield' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Faster+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Stoke:400,300' rel='stylesheet' type='text/css'>

<script type="text/javascript">
//cufon
Cufon.replace('h3,h4,h5,h6',{ fontFamily: 'Aller'});
Cufon.replace('h1',{ fontFamily: 'Bebas Neue' });
			
//thumbover
$(function(){
	$("img[src*='_s.jpg']").thumbPopup({
		imgSmallFlag: "_s",
		imgLargeFlag: "_l"
	});
});
//countdown
$(function () {
			$('#defaultCountdown').countdown({
				until: new Date(2012, 12 - 1, 05, 0, 0, 0), 
				format: 'DHMS',
				layout: 
							'<div id="vals">'+
								'<div id="d" class="numbers">{dnn}</div>'+
								'<div id="h" class="numbers">{hnn}</div>'+
								'<div id="m" class="numbers">{mnn}</div>'+
								'<div id="s" class="numbers">{snn}</div>'+
													
						         '</div>'
				});
		});
//tracker

</script>
</head>
<body>
<div id="header_top">
  <div id="header">
    <!-- <div id="logo"><a href="#"><img src="images/NewLogo.png" width="150" height="139" alt="company symbol" style=" margin-top: 20px;" /></a></div> -->

    <div id="logo"><a href="#"><img src="images/logo3smaller.png" width="150" height="97" alt="company symbol" style=" margin-top: 20px;" /></a></div>

<!-- logo4.png -->

    <div id="ribbon">

      <h5>Free<br/>
        Live <br/>
        Kurs<br/>
        On <span style="font-size: 18px;"></span><span style="color:#fff000; font-size: 18px;">Mobile</span></h5>
    </div>
    <div class="clear"></div>
  </div>
  <!--header ends-->
</div>
<!--header top ends-->
<div id="event_disply">
  <div id="event_disply_left">
    <h2 id="gfont">Free Live Kurs On Your Mobile</h2>
    <h6>Rate is quoted on: <span style="font-size:22px; "><?php include 'includes/date.php' ?></span></h6>
    <p>Receive daily 'Free SMS' of the highest exchange rate of GBP/PLN currency. A handy tool for those who work or study in the UK and are concerned about the daily exchange rate.</p>
    <p>Zloty Live Rate brings, right on your mobile screen, the HIGHEST exchange rate available in the UK.</p>

    <table class="table1">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th scope="col" abbr="Starter">Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="best">
                        <th  scope="row">EasySend</th>
                        <td>5.19</td>
                    </tr>
                    <tr>
                        <th scope="row">Przelewy24.co.uk</th>
                        <td>5.16</td>
                    </tr>
                    <tr>
                        <th scope="row">Western Union</th>
                        <td>5.15</td>
                    </tr>
                    <tr>
                        <th scope="row">MoneyGram</th>
                        <td>5.13</td>
                    </tr>
                    <tr>
                        <th scope="row">Ria</th>
                        <td>5.10</td>
                    </tr>
                    <tr>
                        <th scope="row">England.pl</th>
                        <td>5.10</td>
                    </tr>
                    <tr>
                        <th scope="row">TONIO</th>
                        <td>5.09</td>
                    </tr>
                </tbody>
            </table>
  </div>
  <!--event_display_left ends-->
  <div id="event_disply_right">
    <h2>To receive Free Rate Update please type in your mobile number</h2>
    
	<input type="text" class="input_subscribe" value="Enter your mobile number" onblur="if (this.value == '') {this.value = 'Enter your mobile number';}" onfocus="if (this.value == 'Enter your mobile number') {this.value = '';}">
		
	<p class="between">We value your privacy</p>
    
      <input type="text" class="input_subscribe" value="Enter your email (optional)" onblur="if (this.value == '') {this.value = 'Enter your email (optional)';}" onfocus="if (this.value == 'Enter your email (optional)') {this.value = '';}">
      

    </div>
    <div id="button1">
      <h1><a href="#">Register Now</a></h1>
    </div>
    
    <div class="image1">
	<img src="images/ID-10086816.jpg">
    </div>
    
  </div>
  <!--event_display right ends-->
  <div class="clear"></div>
</div>
<div class="clear"></div>
<!--event_display ends-->
<div id="contact">
  <div id="contact_inner">
    <ul>
      <li><span style="font-weight:bold; font-size: 20px;">Totally free service to your family and friends.</span></li>
      <li><span style="font-weight:bold">mail : </span><a href="mailto:info@kurstotext.com">info@kurstotext.com</a> </li>
      <li><span style="font-weight:bold">call : </span> + (123) 456 789</li>
    </ul>
  </div>
  <div class="clear"></div>
</div>
<!--contact ends-->
<div id="content">
  <div id="content_left">
    <h3>Stay Informed With Mobile Alerts</h3>
    <h5>'Mobile Kurs Alerts' allow you to stay informed with highest available GBP/PLN Kurs information that's relevant to you. Get daily Kurs alert notifications by text message.</h5>
  </div>
  <!--content_left ends-->
  <div id="content_middle">
    <img src="images/ID-5.png">
  </div>
  <!--content_middle ends-->
  <div id="content_right">
	
	  <div id="subscribe">
    <h4>Stay tuned for announcements!</h4>
    <ul>
      <li>Lorem ipsum dolor sit amet consectetuer adipiscing elit</li>
      <li>Lorem ipsum dolor sit amet consectetuer adipiscing elit</li>
      <li>Lorem ipsum dolor sit amet consectetuer adipiscing elit</li>
    </ul>
    <!-- <h4>Join our mailing list!</h4> -->
    <form action="" method="post">
      <input class="input_unsubscribe" type="text" value="Enter your e-mail address" onblur="if (this.value == '') {this.value = 'Enter your e-mail address';}" onfocus="if (this.value == 'Enter your e-mail address') {this.value = '';}" />
      <input class="btn_unsubscribe" type="submit" value="Unsubscribe" />
    </form>
  </div>

	
    <!--<h3>Kurs Alerts</h3>
    <h5>Simply select YES, we'll once a day 7 days a week notify you by text message - allowing you to take action and SAVE money. You can always unsubscribe your number without hesitation.</h5>-->

    </div>
    <!--bubbleinfo ends-->
    <div class="clear"></div>
  </div>
  <!--content_right_ends-->
  <div class="clear"></div>
</div>
<!--content ends-->
<div id="sponsors">
  <!--sponsors_inner ends-->
  <div class="clear"></div>
</div>
<!--sponsors ends-->
<!--  <div id="information">
<div id="gallery">
    <div class="image"> <img src="images/ID-1.png" width="160" height="95" align="left" alt="img" style=" margin-right: 15px; float:left; border: 5px solid #eeeded;"  />
      <h6>Lorem ipsum dolor sit amet</h6>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    </div>
    <div class="image"> <img src="images/ID-2.png" width="160" height="95" align="left" alt="img" style=" margin-right: 15px; float:left;  border: 5px solid #eeeded;"  />
      <h6>Lorem ipsum dolor sit amet</h6>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    </div>
  </div>
 <!--gallery ends-->
  <!--subscribe ends-->
  <div class="clear"></div>
</div>

<!--information ends-->
<div id="footer">
  <div id="footer_inner">
    <div id="copyright">
      <p>Copyright 2012 KursToText.com - All rights reserved</p>
    </div>
    <div id="social">
      <ul>
        <li><a href="#"><img alt="twitter" src="images/twitter.png" /></a></li>
        <li><a href="#"><img alt="facebook" src="images/facebook.png" /></a></li>
        <li><a href="#"><img alt="linkedin" src="images/linkedin.png" /></a></li>
        <li><a href="#"><img alt="delicious" src="images/delicious.png" /></a></li>
      </ul>
    </div>
  </div>
</div>
<!--footer ends-->
<div class="clear"></div>
</body>
</html>
