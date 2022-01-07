<?php 

if(isset($_POST['submit'])){

    $to = "m.ezzekmi@compohub.com"; // this is your Email address

    $from = $_POST['emailID']; // this is the sender's Email address

    $partNumber = $_POST['partNumber'];

    $quantity = $_POST['quantity'];

	$dateCode = $_POST['dateCode'];

    $companyName = $_POST['companyName'];

    $companyType = $_POST['companyType'];

    $contactPerson = $_POST['contactPerson'];

    $country = $_POST['country'];

	$tel = $_POST['tel'];

	$email = $_POST['emailID'];

    $subject = "RFQ submission";

    $message = "You have recieved a new inquiry. \nCompany Name:".$companyName." Company Type:".$companyType."\nContact Person:".$contactPerson."\nCountry:".$country."\nTel:".$tel."\nPart Number:".$partNumber."\nDate Code:".$dateCode."\nQuantity:".$quantity."\n\nMessage:".$_POST['messageRfq'];

    

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

	$sent = 1;

    // You can also use header('Location: thank_you.php'); to redirect to another page.

    }

?>



<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->

<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Meta Tags -->

  <meta charset="utf-8">

  <title>CompoHub</title>

	<meta name="description" content="">

	<meta name="keywords" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--[if (gte IE 9)|!(IE)]>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

  <![endif]--> 



  <!-- Favicon -->

  <link href="img/favicon.ico" rel="icon" type="image/png">



  <!-- Styles -->

  <link href="css/styles.css" rel="stylesheet">

  <link href="css/bootstrap-override.css" rel="stylesheet">



  <!-- Font Avesome Styles -->

  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">

	<!--[if IE 7]>

		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">

	<![endif]-->



  <!-- FlexSlider Style -->

  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">



	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->

	<!--[if lt IE 9]>

		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<![endif]-->   



</head>       

<body>

  <!-- Header -->

  <header id="header">

  



    <div class="container">

      <div class="row t-container">

	  



			<div class="dropdown pull-right">

			  <div class="dropbtn"><i class="icon-phone"></i></div>

				  <div class="dropdown-content">

					<a href="tel:+1-703-348-8403">+1-703-348-8403</a>

					<a href="tel:+1-703-348-8404">+1-703-348-8404</a>

					<a href="tel:+1-703-348-8405">+1-703-348-8405</a>

			  </div>

			</div>

  

  

  

  

        <!-- Logo -->

        <div class="span3">

          <div class="logo">

            <a href="index.htm"><img src="img/logo-header.png" alt=""></a>

          </div>            

        </div>



        <div class="span9">

          <div class="row"></div>

		  



             <nav id="nav" role="navigation">

               	<a href="#nav" title="Show navigation">Show navigation</a>

	            <a href="#" title="Hide navigation">Hide navigation</a>

	            <ul class="clearfix">

	           	<li class="active"><a href="index.htm" title="">Home</a></li>

				<li><a href="products.htm" title=""><span>Products</span></a>

  			      <ul> <!-- Submenu -->

                      <li><a href="products.htm#active" title="">Active</a></li>

                      <li><a href="products.htm#passive" title="">Passive</a></li>

                      <li><a href="products.htm#electromechanical" title="">Electromechanical</a></li>

                 </ul> <!-- End Submenu -->      

               </li>                

				<li><a href="services.htm" title=""><span>Services</span></a>

  			      <ul> <!-- Submenu -->

                      <li><a href="services.htm#collapseOne" title="">Shortage & EOL</a></li>

                      <li><a href="services.htm#collapseTwo" title="">Global Market Pricing</a></li>

                      <li><a href="services.htm#collapseThree" title="">Excess Management</a></li>

                      <li><a href="services.htm#collapseFour" title="">Worldwide Procurement</a></li>

  		         </ul> <!-- End Submenu -->      

               </li>

				

				

				

				

			   <li><a href="news.htm" title="">News</a></li>

        <li><a href="about-us.htm" title=""><span>About Us</span></a>
            <ul> <!-- Submenu -->
              <li><a href="about-us.htm" title="">Information</a></li>
              <li><a href="CompoHubBrochure.pdf" target="_blank" title="">Brochure</a></li>
              <li><a href="about-us.htm#tandc" title="">Terms & Conditions</a></li>
            </ul> <!-- End Submenu -->      
         </li>

			   </ul>

          </nav>

		  

         </div> 

      </div>  

       <div class="row space40"></div>

  </div> 

</header><!-- Header End -->



<!-- Titlebar

================================================== -->

<section id="titlebar">

	<!-- Container -->

	<div class="container">

	

		<div class="eight columns">

			<h3 class="left">Request For Quotation</h3>

		</div>

		

		<div class="eight columns">

			<nav id="breadcrumbs">

				<ul>

					<li>You are here:</li>

					<li><a href="home.htm">Home</a></li>

					<li>RFQ</li>

				</ul>

			</nav>

		</div>



	</div>

	<!-- Container / End -->

</section>



  <!-- Content -->

  <div id="content">

    <div class="container">



      <div class="row">

        <div class="span12">

                      <div class="row space80"></div> 

<form name="rfqForm" role="form" action="" method="post" id="rfqForm">

	

    <div class="span12 well">

<?php

if ($sent == 1){

echo '<h3 id="mailSent">Email was sent successfully.</h3><a href="index.htm">Home</a>';

}

?>

	<p>Request For Quote:</p>

	<div class="f-center">

          <input type="text" class="form-control" name="partNumber" id="partNumber" placeholder="MFG Part Number*" required>

          <input type="text" class="form-control" id="dateCode" name="dateCode" placeholder="Date Code*" required>

          <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity*" required>

		  

		  <div id="rfq">

          <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name*" required>

          <select name="companyType" required>

			  <option value="">Company Type*</option>

			  <option value="OEM">OEM</option>

			  <option value="CEM">CEM</option>

			  <option value="Broker">Broker</option>

			  <option value="ID">Independent Distributor</option>

			  <option value="FD">Franchised Distributor</option>

		  </select>

          <input type="text" class="form-control" id="contactPerson" name="contactPerson" placeholder="Contact Person*" required>	</br>

          <input type="text" class="form-control" name="country" id="country" placeholder="Country">

          <input type="text" class="form-control" id="tel" name="tel" placeholder="Telephone No.*" required>

          <input type="email" class="form-control" name="emailID" placeholder="E-Mail" required>	</br>	  

		  <textarea name="messageRfq" class="form-control" rows="5" placeholder="Message"></textarea>

		  

		  </div>

       <button type="button" class="btn  pull-right" id="next">Next</button>

      

	  <input type="submit" name="submit" id="submitR" value="Submit" class="btn btn-info pull-right">

    </div>

	</div>

  </form>

			  

			  

          <div class="row space80"></div>  

		         <div class="f-hr"></div>

				 <div class="row space80"></div> 

        </div>

      </div>

    </div>

  </div>

  <!-- Content End -->

  

  <!-- Footer -->

  <footer id="footer" class="rfqFooter">

    <div class="container">

      <div class="row">

        <div class="span5">

        <h3>Contact Form</h3>

        <div>         

          <form class="form-main" name="ajax-form" id="ajax-form" action="contactForm.php" method="post">

            <div id="ajaxsuccess">E-mail was successfully sent.</div> 

            <div class="error" id="err-name">Please enter name</div>

            <input name="name" id="name" type="text" value="Name" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">

            

            <div class="error" id="err-email">Please enter e-mail</div>

		        <div class="error" id="err-emailvld">E-mail is not a valid format</div>

            <input  name="email" id="email" type="text" value="E-mail" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">



            <div class="error" id="err-message">Please enter message</div>

            <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea><br>

            <div>

            	<div class="error" id="err-form">There was a problem validating the form please check!</div>

            	<div class="error" id="err-timedout">The connection to the server timed out!</div>

            	<div class="error" id="err-state"></div>

            </div>

            <button id="send" class="btn f-right">Send Message <i class="icon-ok"></i></button>

          </form>

        </div>

        </div>

        <div class="span3 offset3">

		<div id="address" onclick="location.href=href='http://maps.google.com/?q=4601North Fairfax Drive Suite 1200 Arlington Virginia'">

          <h3>Address</h3>

          CompoHub<br>

          4601 North Fairfax Drive<br>

          Suite 1200<br>

          Arlington, Vigrinia 22203<br>

		  USA<br><br>

		 </div>

          <i class="icon-phone"></i>+1 703 348 8403<br>

		  <i class="icon-phone"></i>+1 703 348 8404<br>

		  <i class="icon-phone"></i>+1 703 348 8405<br>

		  Fax: +1 703 871 5081<br>

          <i class="icon-envelope"></i><a href="mailto:info@compohub.com">info@compohub.com</a><br>

          <i class="icon-home"></i><a href="www.compohub.com">www.compohub.com</a>

          

          <div class="row space40"></div>  



<!--           <a href="#" class="social-network sn2 behance"></a>

          <a href="#" class="social-network sn2 facebook"></a>

          <a href="#" class="social-network sn2 pinterest"></a>

          <a href="#" class="social-network sn2 flickr"></a>

          <a href="#" class="social-network sn2 dribbble"></a>

          <a href="#" class="social-network sn2 lastfm"></a>

          <a href="#" class="social-network sn2 forrst"></a>

          <a href="#" class="social-network sn2 xing"></a>  -->     

        </div>

      </div>

      

      <div class="row space50"></div>

      <div class="row">

        <div class="span6">

          <div class="logo-footer">

            

          </div>                       

        </div>

        <div class="span6 right">

          &copy; 2016. All rights reserved.

        </div>

      </div>



    </div>

  </footer>

  <!-- Footer End -->



  <!-- JavaScripts -->

  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 

  <script type="text/javascript" src="js/bootstrap.min.js"></script>  

  <script type="text/javascript" src="js/functions.js"></script>

  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>



</body>

</html>

  