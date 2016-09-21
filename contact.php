
<?php
if($_POST["message"]) {
    mail("egarciarpm@gmail.com", "Form to email message", $_POST["message"], "From: Contact@auctionrpm.com");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AuctionRPM Software-Contact</title>

    <!-- Bootstrap -->
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
   <link href="stylesheets/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/index.js"></script>
    </head>
    <body>

<!--NAVBAR-->
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.html">AuctionRPM Software</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Add-Ons<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cloud.html">AuctionRPM on Cloud</a></li>
            <li><a href="mobile.html">RPM Mobile Apps</a></li>
           
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Downloads<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="trial.html">Free Trial</a></li>
            <li><a href="utilities.html">Drivers &amp; Utilities</a></li>
           
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="prices.html">Prices</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Support<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tips.html">Tips &amp; Tricks</a></li>
            <li><a href="video.html">Video Tutorials</a></li>
           
          </ul>
        </li>
         <li class="active"><a href="contact.html">Contact Us<span class="sr-only">(current)</span></a></li>
         <li><a href="cart.html">Shopping Cart</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!--/NAVBAR-->




<!--HEADER-->
<header>
  <div class="jumbotron" id="defaulthead">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">

          <h1 class="text-center headerdesc">Contact Us</h1>
          <p class="text-center text-muted">AuctionRPM Software Suite</p>
          <p>&nbsp;</p>
          <p class="text-center"><a class="btn btn-primary btn-lg" href="trial.html" role="button">Free Trial</a> </p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- / HEADER --> 

<!--PROMOTION-->
<div class="row">
  <div class="container">
    <img class="promo img img-responsive" src="images/promo.png">
    <div class="well promodesc">
      <h2 class="text-center">Tuesday's Children</h2>
      <h4 class="text-center">Please join us September and October 2016 in a special fundraiser for our friends at Tuesday’s Children. Any product you purchase during these two months, we will contribute 20% of those sales to a group of great people making a difference helping families of Firefighters, Law Enforcement and any first responders.<a target="0" href="http://www.tuesdayschildren.org/support/"> Click here</a> for details about their important work. If you would like to make a straight donation, you can do so by clicking on our<a href="cart.html"> Shopping Cart</a>.</h4>
    </div>
  </div>
</div>
<!--/PROMOTION-->


<div class="row well">
<!--CONTACTS-->
<div class="col-md-4 col-sm-12">
    <h3 class="page-header">General Information</h3>
    
    <p>Mike - General Manager</p>
    <p>Phone - (209)588-1232 <i> ex-1004</i></p>
    <a  href="mailto:info@auctionrpm.com">info@auctionrpm.com</a>
    <hr>
</div>
<div class="col-md-4 col-sm-12">
    <h3 class="page-header">Technical Support</h3>
   
    <p>Eli - Support Manager</p>
    <p>Phone - (209)588-1232 <i> ex-1002</i></p>
    <a  href="mailto:support@auctionrpm.com">support@auctionrpm.com</a>
     <hr>
</div>
<div class="col-md-4 col-sm-12">
    <h3 class="page-header">Sales</h3>
    
    <p>John - Sales Manager </p>
    <p>Phone - (209)588-1232 <i> ex-1001</i></p>
    <a  href="mailto:sales@auctionrpm.com">sales@auctionrpm.com</a>
    <hr>
</div>
<!--/CONTACTS-->
</div>


<!--CONTACTFORM-->
<div class="container col-xs-10 col-xs-offset-1">
    <h2 class="page-header">Send our team a message.</h2>
  <form method="post" action="contact.php">
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-10">
        <input name="message" type="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name:</label>
      <div class="col-sm-10">
        <input name="message" type="text" class="form-control" id="inputName" placeholder="Name">
      </div>
    </div>
     <div class="form-group row">
      <label for="inputPhone" class="col-sm-2 col-form-label">Phone:</label>
      <div class="col-sm-10">
        <input name="message" type="tel" class="form-control" id="inputPhone" placeholder="Phone">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputCname" class="col-sm-2 col-form-label">Company Name:</label>
      <div class="col-sm-10">
        <input name="message" type="tel" class="form-control" id="inputCname" placeholder="Company Name">
      </div>
    </div>
    <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
</div>
    <fieldset class="form-group row">
        <div class="form-group row">
      <label class="col-sm-2">PreRegister-</label>
      <hr>
      <div class="col-sm-10 center-block">
        <div class="form-check">
          <label class="form-check-label">
            <input name="message" class="form-check-input" type="checkbox"> RPM on Cloud
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input name="message" class="form-check-input" type="checkbox"> RPM for Android
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input name="message" class="form-check-input" type="checkbox"> RPM for Ipad
          </label>
        </div>
      </div>
    </div>
    </fieldset>
  
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
<!--/CONTACTFORM-->












<!--TEST/BLOG-->
<div class="row">
<!--TESTIMONIAL-->


  <div class="container col-sm-6 col-xs-12"
      <div class="col-lg-12 page-header text-center">
        <h2 class="testhead">TESTIMONIALS</h2>
       <hr>
    
    <div class="row testdesc">
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>In the few months that I’ve used Auction RPM and ZumBid you have given me back some of my life. It seems that a lot of lost time has been restored. I wish I would have found you years ago. You would have saved me many late nights and LOTS of headaches!</p>
          <small>Rick Sammons<cite title="Source Title">- <img src="images/bullseye.png" width="64"></cite></small> 
          
          </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>Quaker City Auctioneers has been with Auction RPM since 2004 and we are very happy by the quick response and attentiveness to all of our needs. Thanks for your help and support over the years and we hope to continue our relationship into the future.</p>
          <small>Brandt Wolf <cite title="Source Title">- <img src="images/quaker city.png" width="64"></cite></small> 
          
          </blockquote>
      </div>
      
  
    
  </div>
</div>

<!--/TESTIMONIAL-->
<!--BLOG-->



    <div class="container well well-lg well-inverse col-sm-6 col-xs-12">

 <h1 class="blog-title bloghead">RPM Newsletter</h1>

        <p class="lead blog-description bloghead">Find recent and upcoming information by clicking here.</p>
        <div class="col-sm-12 blog-main">
 <hr>
          

          <div class="blog-post blogdesc">
            <h2 class="blog-post-title">Welcome to AuctionRPM</h2>
            <p class="blog-post-meta">September 15, 2016 by <a href="contact.html">John Serpa- Sales Manager</a></p>

            <p>Hello fellow AuctionRPM clients, auctioneers, and newcomers. We are thrilled to announce and celebrate the launch of our brand new website. We have so many new things to tell you about and to share with you. Here is a new list of some of the features we will be offering soon:
            </p>
            <ul>
              <li>AuctionRPM on the cloud as a main database or as a backup</li>
              <li>AuctionRPM Mobile Apps(iPad and Android devices)</li>
              
              <li>Business Customer Web design and Maintenance</li>
              <li>Advertisement/discount trade</li>
              <li>RPM News Letter</li>
            </ul>
            <p>All of these features and our flagship software AuctionRPM for outright purchase or for monthly rental as well as our top tier yearly or monthly tech support are available. Please register for any of these at the bottom of this page.</p>
            <br>
            <p>Be sure to share us with your friends and fellow auctioneers because we're sure they're going to love our program too. Also, please remember to watch our website for special promotions.</p>
          <br>
            <p>Keep an eye on this page and sign up for our RPM News Letter. We have new and informative material here every month where you can learn more about us and other events in the Auction community.</p>
            <br>
            <p>Lastly we would just like to ask everyone to give us their questions and suggestions by messaging us on Facebook or by emailing us at:<a href="mailto:info@auctionrpm.com"> info@auctionrpm.com</a></p>
            <br>
            <p>Thanks everybody! Happy Auctioneering!</p>
            <br>
            <p><i>~ The AuctionRPM Team</i></p>
          </div><!-- /.blog-post -->

        
        </div>


<!--/BLOG-->
</div>
</div>
<!--/TEST/BLOG-->


<!--FOOTER-->


<hr>
<footer id="foot" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
      <img class="pull-left" src="images/logo.png" width="128" alt="logo">
      
      <img src="images/naa-site-logo.png" height="32" alt="logo">
      <img src="images/proxiBid.png" height="32" alt="logo">
      <img src="images/liveAuctioneers.png" height="32" alt="logo">
	  <img src="images/TV.svg" height="32" alt="logo">
        <p>Copyright © AuctionRPMSoftware.com All rights reserved.</p>
        </div>
      </div>
    </div>
 
</footer>

<!--/FOOTER-->


</body> 
</html>

    </body>
</html>