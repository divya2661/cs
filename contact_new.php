<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IITJ-Counselling Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
     <link href="css/jinank.css" rel="stylesheet">
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/form.js"></script>
     <!--[if lt IE 9]>
    <link href="css/ie.css" media="screen" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <style>
        body{
            background:#fafafa;
        }

        .wrapper{
            
            padding:36px;
            border:1px solid #ddd;
            border-radius:6px;
            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            background:#fff;
            min-height:450px;
        }
       
    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>
</head>
<body>

<?php include 'process-form1.php'; ?>


    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-u need to debug nowinner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.html">IITJ Counselling Service</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="sample.html">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Life at IITJ
      <b class="caret"></b>
      </a>
        <ul class="dropdown-menu">
          <li><a href="facilities.html">Facilities</a></li>
          <li><a href="schod.html">SCHoD</a></li>
          <li><a href="fests.html">Fests</a></li>
          <li><a href="campus.html">Testimonials</a></li>
        </ul>
    </li>

   <li><a href="team.html">Counselling Team</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      FAQs
      <b class="caret"></b>
      </a>
        <ul class="dropdown-menu">
          <li><a href="faq.html">General FAQs</a></li>
          <li><a href="faq1.html">Academics</a></li>
          <li><a href="faq2.html">Counselling Service</a></li>
          <li><a href="faq3.html">Residential Campus</a></li>
        </ul>
    </li>

       <li><a href="gallery.html">Gallery</a></li>
    <li><a href="dropbox.html">Contact Us</a></li>
    </ul>

            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

 <div class="erb-image-wrapper">
    <img src="images/iitlog44.png" />
</div> 
<div id="jin">
<div class="wrapper clearfix">

    <div id="contact-wrapper" class="clearfix">

        <div class="form-wrapper clearfix">

            <h2>Contact Us</h2>

            <div class="message">
            <?php echo !empty($error_list) ? $error_list : ''; ?>
            </div>

            <form id="contact-form" action="" method="POST">

                <fieldset>

                    <div class="field well">
                        <label for="name"><b>Name</b></label>
                        <input type="text" id="name" name="name" autofocus required
                               placeholder="Your first and last name">
                    </div>

                    <div class="field well">
                        <label for="roll"><b>Roll No.</b></label>
                        <input type="text" id="roll" name="roll" autofocus
                               placeholder="Enter your IIT-J roll number here...">
                    </div>

                    <div class="field well">
                        <label for="year"><b>Year</label></b><br><br>
                        <input type="radio" name="year" value="bt1" id="year"> B.Tech 1st Year<br>
                        <input type="radio" name="year" value="bt2" id="year"> B.Tech 2nd Year<br>
                        <input type="radio" name="year" value="bt3" id="year"> B.Tech 3rd Year<br>
                        <input type="radio" name="year" value="bt4" id="year"> B.Tech 4th Year<br>
                        <input type="radio" name="year" value="mte" id="year"> M.Tech<br>
                        <input type="radio" name="year" value="phd" id="year"> Ph.D.<br>
                    </div>


                    <div class="field well">
                        <label for="branch"><b>Branch/Department</b></label><br><br>
                        <input type="radio" name="branch" value="me" id="branch">Mechanical Engg.<br>
                        <input type="radio" name="branch" value="cs" id="branch">Computer Sc. and Engg.<br>
                        <input type="radio" name="branch" value="ee" id="branch">Electrical Engg.<br>
                        <input type="radio" name="branch" value="ss" id="branch">System Science<br>
                        <input type="radio" name="branch" value="bi" id="branch">B.I.S.S.<br>
                        <input type="radio" name="branch" value="ic" id="branch">ICT<br>
                        <input type="radio" name="branch" value="en" id="branch">Energy<br>
                    </div>



                    <div class="field well" title="sadfsadf">
                        <label for="email"><b>Email</b></label>
                        <input type="email" id="email" name="email" required placeholder="We will respond to this address">
                    </div>

                    <div class="field well">
                        <label for="phone"><b>Phone</b></label>
                        <input type="text" id="phone" name="phone" placeholder="If you prefer a phone call">
                    </div>

                    <div class="field well">
                        <label for="nature"><b>Nature</b></label><br><br>
                        <input type="radio" name="nature" value="acad" id="nature">Academics/Career<br>
                        <input type="radio" name="nature" value="nonacad" id="nature">Non-Academic/Others<br>
                    </div>

                    <div class="field well">
                        <label for="urgency"><b>Urgency</b></label><br><br>
                        <input type="radio" name="urgency" value="hig" id="urgency">High<br>
                        <input type="radio" name="urgency" value="mid" id="urgency">Medium<br>
                        <input type="radio" name="urgency" value="low" id="urgency">Low<br>                        
                    </div>


                    <div class="field  well">
                        <label for="message"><b>Query</b></label>
                        <textarea id="message" name="message" cols="25" rows="5" required
                                placeholder="Please mention your queries/doubts/issues !!"></textarea>
                    </div>

                    <div class="field submit">
				<input type="submit" value="Submit"/>
                    </div>

                </fieldset>

            </form>
        </div>
</div>
        </div>

<span id="company-street-address"><?php echo $company_address;?></span>

</body>
</html>
