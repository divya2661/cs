
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IITJ-Counselling Service</title>
   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

    <link href="css/newstyle.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/form.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>

  <body><br><br>
    <?php include 'process-form.php'; ?>
<div class="container-fluid">
<div class="row-fluid">
  <div class="span1">
    <a href='http://iitj.ac.in'><img src="images/iitjlogo44.png" class="img-rounded"></a>
  </div>
  <div class="span10">
    
    <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <a class="brand" href="#">IITJ Counselling Sevice</a>
    <ul class="nav">
    <li><a href="http://cs.iitj.ac.in/">Home</a></li>
 
       <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Life at IITJ
      <b class="caret"></b>
      </a>
        <ul class="dropdown-menu">
          
          <li><a href="http://cs.iitj.ac.in/schod.html">SCHoD</a></li>
          <li><a href="http://cs.iitj.ac.in/fests.html">Fests</a></li>
          <li><a href="http://cs.iitj.ac.in/campus.html">Testimonials</a></li>
        </ul>
    </li>
   <li><a href="http://cs.iitj.ac.in/team.html">Counselling Team</a></li>
     <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      FAQs
      <b class="caret"></b>
      </a>
        <ul class="dropdown-menu">
          <li><a href="http://cs.iitj.ac.in/faq.html">General FAQs</a></li>
          <li><a href="http://cs.iitj.ac.in/faq1.html">Academics</a></li>
          <li><a href="http://cs.iitj.ac.in/faq2.html">Counselling Service</a></li>
          <li><a href="http://cs.iitj.ac.in/faq3.html">Residential Campus</a></li>
        </ul>
    </li>


       <li><a href="http://cs.iitj.ac.in/gallery.html">Gallery</a></li>
    <li class="active"><a href="dropbox.html">Contact Us</a></li>
    </ul>
    </div>
    </div>
    <div class="wrapper clearfix">

    <div id="contact-wrapper" class="clearfix">

        <div class="form-wrapper clearfix">

            <h2>Contact Us</h2>

            <div class="message">
            <?php echo !empty($error_list) ? $error_list : ''; ?>
            </div>

            <form id="contact-form" action="" method="POST">

                <fieldset>

                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" autofocus required
                               title="Your first and last name">
                    </div>

                    <div class="field" title="sadfsadf">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required title="We will respond to this address">
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" title="If you prefer a phone call">
                    </div>


                    <div class="field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" cols="15" rows="5" required
                                ></textarea>
                    </div>

                    <div class="field submit">
                        <input type="submit" value="Submit"/>
                    </div>

                </fieldset>

            </form>
        </div>

        <div class="address-wrapper clearfix">
            <!-- This is the container for the map -->
            <div class="street-address">IIT Jodhpur</div>
            <div id="map-outer">
                <div id="map">&nbsp;</div>
            </div>
            <a href="#" class="get-directions-button" rel="#map-overlay">Get Directions</a>
        </div>



<span id="company-street-address"><?php echo $company_address;?></span>
</div>
</div>
</div>    
    

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>


  </body>
</html>
