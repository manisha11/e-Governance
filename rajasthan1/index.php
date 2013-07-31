<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
	
    <title>E-Governance at ur Fingertips&middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    
    <style>
    
    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
       }
      .cont {
	        
                width: 90%;
	        margin: 20px auto;
	        background-color: White ;
	        padding: 20px;
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
        font-size: 10px;
        line-height: 1.5;
      }

    }
    </style>

    
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]

    Fav and touch icons--->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("pot-holder.jpg");
</script>
<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	
          <a class="brand" href="./index.php">COMMUNITY SERVICE CENTERS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="#home">Home</a>
              </li>
              <li class="active">
                <a href="#about">About</a>
              </li>
              <li class="">
                <a href="#corevalue">Core Values</a>
              </li>
              <li class="">
                <a href="#corepurpose">Core Purpose</a>
              </li>
              <li class="">
                <a href="#achiev">Achievements</a>
              </li>
             <li class="">
                <a href="#Team">Our Team</a>
              </li>
	     
            </ul>
          </div>
        </div>
      </div>
    </div>


    


    <!-- Carousel
    ================================================== -->
   <section id="home">  
   <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          
          <img src="assets/img/examples/8.jpeg" alt="" >
          <div class="container">
            <div class="carousel-caption">
              <h1> Election & Vote Counting Webcasting</h1>
            
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/examples/1.jpeg" alt="">
         
        </div>
        <div class="item">
          <img src="assets/img/examples/2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>AANGANWADI</h1>
            
            </div>
          </div> 
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    </section>
    
   





<div class="cont">
<h2 class="the-head"><h2 style="color: #B8860B; font-weight:500px; font-size:35px;">To know services of RAJASTHAN CSC select DISTRICT<text-align :center> </text align></h2>
 <div align="center">


 <form method="post" action="query.php">
<select name = "InputDistrict">

<option value ="AJMER"> AJMER </option>
<option value ="ALWAR"> ALWAR </option>
<option value ="BANSWARA"> BANSWARA </option>
<option value ="BARAN"> BARAN </option>
<option value ="BARMER"> BARMER </option>
<option value ="BHARATPUR"> BHARATPUR </option>
<option value ="BHILWARA"> BHILWARA </option>
<option value ="BIKANER"> BIKANER </option>
<option value ="BUNDI"> BUNDI </option>
<option value ="CHITTAURGARH"> CHITTAURGARH </option>
<option value ="CHURU"> CHURU </option>
<option value ="DAUSA"> DAUSA </option>
<option value ="DHOLPUR"> DHOLPUR </option>
<option value ="DUNGARPUR">  DUNGARPUR </option>
<option value ="HANUMANGARH"> HANUMANGARH </option>
<option value ="JAIPUR"> JAIPUR </option>
<option value ="JAISALMER"> JAISALMER </option>
<option value ="JALORE"> JALORE </option>
<option value ="JHALAWAR"> JHALAWAR </option>
<option value ="JHUNJHUNU"> JHUNJHUNU </option>
<option value ="JODHPUR"> JODHPUR </option>
<option value ="KARAULI"> KARAULI </option>
<option value ="KOTA"> KOTA </option>
<option value ="NAGAUR"> NAGAUR </option>
<option value ="PALI"> PALI </option>
<option value ="PRATAPGARH"> PRATAPGARH </option>
<option value ="RAJSAMAND"> RAJSAMAND </option>
<option value ="SAWAIMADHOPUR"> SAWAIMADHOPUR </option>
<option value ="SIKAR"> SIKAR </option>
<option value ="SIROHI"> SIROHI </option>
<option value ="SRIGANGANAGAR"> SRIGANGANAGAR </option>
<option value ="TONK"> TONK </option>
<option value ="UDAIPUR"> UDAIPUR </option>
<input type ="submit" value=submit>
</form>

</div>
</div>

<!-- START THE other state container -->
      <!-- OTHER STATE
    ================================================== --> 
<div class="cont">
<h2 class="the-head"><h2 style="color: #B8860B; font-weight:500px; font-size:35px;">For other states please enter CSC info of your Village:<text-align :center> </text align></h2>
 <div align="center">

<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=rajasthan', '****', '****');
 $objDb->exec('SET CHARACTER SET utf8');

 $sql = "SELECT DISTINCT State 
  FROM `statewise`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?>    

<form  method="POST" action="mynew.php">

	<select name="State" id="State" class="update">
        <option value="">Select State</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['State']; ?>">
                    <?php echo $row['State']; ?>
                </option>
            <?php } ?>
        <?php } ?>
         </select>	

	<select name="District" id="District" class="update">
	    <option value="">Select District</option>
	</select>
       
        


    
<input type="submit" name="submitButton" value="Submit" />
</form>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
<script src="ajax.js" type="text/javascript"></script>
  
</div>
</div>

      <!-- START THE FEATURETTES -->
      <!-- ABOUT
    ================================================== -->
      <section id="about" >
	<div class="cont">
	    
     <!--<hr class="featurette">
      
      <div class="featurette">-->
        
        <h2 class="featurette-heading"><h2 style="color: #B8860B; font-weight:500px; font-size:37px;">About...</h2>
       
        <p class="lead">This Application provides services provided by a paticular Community Service Center(CSC) along with basic specifications of Commmunity Service Center.</p>
        <img class="featurette-image pull-right" src="assets/img/examples/mo.jpg">
       <p class="lead">Common Service Centers (CSCs) have been conceptualized as the front end service delivery outlets enabling smooth and transparent governance at village level which will provide all government, private and social sector services through a single window. The CSCs are not merely service delivery windows- they are positioned as change agents that will promote rural entrepreneurship, build rural capacities, and enable community participation and effect collective action for social change through a bottom up model which focuses on the rural citizen.
          

	<p class="lead">One kiosk will serve a cluster of 5-6 villages.This application provides the details of CSCs of rajasthan and for other states it is collecting the data .</p>
      </div>
      </section>
      <!-- CORE VALUES
    ================================================== -->
      <section id="corevalue">
      <div class="cont">
     <!--<hr class="featurette-divider">
-->
      <div class="featurette">
        <img class="featurette-image pull-left" src="assets/img/examples/corevalues_icons.png">
        <h2 class="featurette-heading"><h2 style="color: #B8860B; font-weight:500px; font-size:37px;" >Core Values...</h2>
        <p class="lead">Our flexible attitude and ability to offer a gamut of services based on our own
communication infrastructure effectively provides a tailored service, catering
to all our individual clients’ requirements – be they LSP Level Entrepreneurs,
Corporate or Government.</p>
      </div>
      </div>
      </section>
      <!-- CORE PURPOSE
    ================================================== -->
      <section id="corepurpose">
      <div class="cont"> 
   <!--  <hr class="featurette-divider">-->
      <div class="featurette">
        <img class="featurette-image pull-right" src="assets/img/examples/csc1.jpg">
        <h2 class="featurette-heading"><h2 style="color: #B8860B; font-weight:500px; font-size:37px;">Core Purpose...</h2>
        <p class="lead">Empowering rural India using SCA's world class ICT enabled infrastructure led by an inspired team of village entrepreneurs and engaged employees for delivering both Government and consumer products and services.</p>
      </div>
      </div>
    <!-- <hr class="featurette-divider">-->
      </section>
      <!-- ACHIEVEMENTS
    ================================================== -->
       <section id="achiev">
       <div class="cont">
      <!--<hr class="featurette-divider">-->

      <div class="featurette">
        <img class="featurette-image pull-left" src="assets/img/examples/url.jpeg">
        <h2 class="featurette-heading"><h2 style="color:#B8860B; font-weight:500px; font-size:37px;">Achievements...</h2>
        <p class="lead">The factors responsible in weaving a new Rural India :</p>
        <p class="lead">1. 1900 CSC rolled out in 11 designated districts of CMS CSC Andhra Pradesh project and covering nearly 12000 villages.</p>

        <p class="lead">2. Offering several G2C and B2C routine and frequently used services like utility bill collection, mobile bill payment, Insurance premium collection etc. by the CSCs at the convenience of citizens where, no other options were available in the past in rural areas of Andhra Pradesh .<p>
        <p class="lead">3. Due to increased depth of roll out and improved service basket monthly 4-5 lacs citizens coming to CSC to avail various services. The count is increasing exponently month after month.</p>
        <p class="lead">4. The average monthly income of VLE has reached a sustainable bracket of Rs 2000-10000. In last financial year more than 190 times VLEs have earned Rs 10000.00 a month from CSC project service offering as commission.</p>

        <p class="lead">5. VLE of CMS Computers Ltd has been awarded as the Best VLE from Janupally center, East Godavari, Andhra Pradesh at Bhuvaneshwar Conference, and one more VLE was awarded as Best VLE for his Meeseva Center and received Sub Collector’s Rolling Trophy at Nizamabad, on15th Aug 2012.</p>
          
      </div>
	 </div>
	

         <section id="Team">
         <div class="cont">

        
      <!--<hr class="featurette-divider"-->
      
       <div class="featurette">
       <h2 class="featurette-heading"><h2 style="color:#B8860B; font-weight:500px; font-size:37px;">OUR TEAM...</h2>
       <div class="span12">
                  			 <!--<div class="thumbnail thumbnail-1" style="background-color:white;">-->
        					<center><h3 style="color:#B8860B; font-weight:250px; font-size:20px;">Idea Person</h3></center>
						
        					<center><p>Rashmi Sharma<br>
							Content at National Informatics Center<br>
						        New Delhi<br>
							e-mail- rashs.86@gmail.com
							<a href="idea.pdf">View Idea PDF</a></p></center>
					
					</div>
					</center><br><br><br><br><br><br>
                                        <div class="span12"><center><h3 style="color:#B8860B; font-weight:250px; font-size:20px text-align:center;">Mentors</h3></center></div>
					<ul >
 					
 					
<div class="span4"><img src="assets/img/examples/rusabh.jpg" class="img-circle" height="200" width="200"><a href="https://plus.google.com/u/0/112866716004962042309/about "><h5 style="text-align:center;" >Rushabh Mehta</a></div>
<div class="span4"><img src="assets/img/examples/subu.jpg" class="img-circle" height="200" width="200"><a href="http://in.linkedin.com/in/subhranusekhar"><h5 style="text-align:center;" >Subhranshu Sekhar</a></div>
<div class="span3"><img src="assets/img/examples/nasr.jpg" class="img-circle" height="200" width="200"><a href="http://in.linkedin.com/in/nasrhadi"><h5 style="text-align:center;" >Nasr-ul-Hadi</a></div>


<br><br>
</ul>
                  			<div class="span12"><center><h3 style="color:#B8860B; font-weight:250px; font-size:20px;">Special Thanks</h3></center>
                  			<div class="span3"><img src="assets/img/examples/satya.jpg" class="img-circle"height="200" width="200"><a href="http://in.linkedin.com/in/satyaakam "><h5 style="text-align:center;" >Satyaakam Goswami</a></div>
  <div class="span6"><h6 style="color: Black; font-family: 'Armata', sans-serif; font-weight:400; font-size:100%; word-spacing:7px;" > <br><br>We are extremely grateful to Mr. Satyakam Goswami for providing such a nice support and guidance though he had busy schedule managing the company affairs.

  His sacrifices of valuable time for this commitment has made this possible indeed.
  A heartly thanks to him.</h6></div>                			
                  		       </div>
 <div class="span12"><center><h3 style="color:#B8860B; font-weight:250px; font-size:20px text-align:center;">Team Members</h3></center></div>
<p> <div class="span4"><h5 style="text-align:pull-left ;color:#4169E1;">Apeksha Sood <br /></div>
    <div class="span4"><h5 style="color:#4169E1;">Manisha Choudhary <br /></div>
    <div class="span3"><h5 style="color:#4169E1;">Jyoti Yadav       <br /></div>
</p>

                  </div>
</div>
    <!--  <hr class="featurette-divider">-->
       </div>
      </section>
      </div>
       <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <!--<p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>-->
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="assets/js/holder/holder.js"></script>
  </body>
</html>
