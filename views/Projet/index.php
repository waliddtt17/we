
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "crud");
function make_query($connect)
{
 $query = "SELECT * FROM pub where pos =1";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_query2($connect)
{
 $query = "SELECT * FROM pub where pos =2";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_query3($connect)
{
 $query = "SELECT * FROM pub where pos =3";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img id ="skip253" src="template back end/'.$row["im"].'" alt="'.$row["pos"].'" />
   <div class="carousel-caption">
    
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}
function make_slides2($connect)
{
 $output = '';
 $count = 0;
 $result = make_query2($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img id ="skip253" src="template back end/'.$row["im"].'" alt="'.$row["pos"].'" />
   <div class="carousel-caption">
    
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

function make_slides3($connect)
{
 $output = '';
 $count = 0;
 $result = make_query3($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img id ="skip253" src="template back end/'.$row["im"].'" alt="'.$row["pos"].'" />
   <div class="carousel-caption">
    
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <style type="text/css">
    #pop{ 
       
        height: 200px;
     width: 900px;
        bottom: 40%;
     right: 15%;
     

position: absolute;


    }

  #skip253{
     height: 200px;
     width: 900px;
     
  }
  #pop2{
          height: 200px;
     width: 900px;
        bottom: -260%;
     right: 18%;
     position: absolute;
  }
    #pop3{
          height: 200px;
     width: 900px;
        
     right: 18%;
     position: absolute;
  }
  #toR{
right: 18%;

  }
  </style>
    <title>Muscle - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!----------------------------------------------------------------------->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="css/bootstrap_acc.min.css" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider_acc.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style_acc.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!---------------------------------------------------------------------------->

    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
         <a  href="index.php"><img src="images\logo.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item "><a href="program.html" class="nav-link">Program</a></li>
            <li class="nav-item "><a href="coaches.html" class="nav-link">Coaches</a></li>
            <li class="nav-item"><a href="schedule.html" class="nav-link">Schedule</a></li>
            <li class="nav-item"><a href="produit_Promo.php" class="nav-link">Produits</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          
          </ul>
        <li style="list-style-type:none;" class="main-nav-list"><a href="panier.html" class="nav-link"><img  src="images\icons\panier1.png" style="width:40px"></li>
            <li style="list-style-type:none;" class="main-nav-list"> <a data-toggle="collapse" href="#Cat2"  > <img style="position: absolute; top: 47px; right: 7%" id="myImage" src="images\acc.png" style="width:30px"></a>
              <ul class="collapse" id="Cat2" data-toggle="collapse" > 
                <li ><a href="#"  > <span FONT face="Times New Roman">ACCOUNT </span></a></li>
                <li ><a  href="login.html"><span FONT face="Times New Roman">LOGIN </span></a> <span> / </span> <a href='index.php'  onclick="document.getElementById('myImage').src='images\acc.png'"> <span FONT face="Times New Roman">LOGOUT </span> </a> </li>
               
              </ul>
            </li>

            
        </div>

      </div>
      <br><br>

    </nav>

    <!-- END nav -->
  
  

    <section class="home-slider js-fullheight owl-carousel ftco-degree-bottom">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-6 ftco-animate text-center">
              <h1 class="mb-4">Fuel Your Body Fitness</h1>
              <h2 class="subheading">Be One Of Us</h2>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-7 ftco-animate text-center">
              <h1 class="mb-4">Challenge Yourself</h1>
              <h2 class="subheading">Get Your Body Fit</h2>
            </div>

          </div>
        </div>
      </div>
    </section> 
    <br>
    <br>



<div id="pop">

<button id="close "  class="btn-danger btn" onclick="document.getElementById('pop').style.display='none'">x</button>
  PUB
   <br>

   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

 
  </div>
   <form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" type="submit" name="done"> Like </button>
</form>
</div>
     
 




    <section class="ftco-section-services ftco-degree">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-xl-6 d-flex align-self-stretch">
            <div class="align-self-stretch"><img src="images/about.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-xl-6 align-self-stretch pt-5">
            <div class="row justify-content-center mb-3">
              
           
     </div><div class="col-md-12 heading-section ftco-animate">
                <h3 class="subheading">Shape Your Body</h3>
                <h2 class="mb-4">What We Do?</h2>
              </div>
            </div>
            <div class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-ruler"></span>
              </div>
              <div class="text ml-5">
                <h3>Analyze Your Goal</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
            </div>
            <div class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-gym"></span>
              </div>
              <div class="text ml-5">
                <h3>Work Hard On It</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
            </div>
            <div class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tools-and-utensils"></span>
              </div>
              <div class="text ml-5">
                <h3>Improve Your Performance</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
            </div>
            <div class="services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-abs"></span>
              </div>
              <div class="text ml-5">
                <h3>Achieve Your Perfect Body</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="5000">0</strong>
                    <span>Happy Customers</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="4560">0</strong>
                    <span>Perfect Bodies</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="570">0</strong>
                    <span>Working Hours</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="900">0</strong>
                    <span>Success Stories</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--pub2-->
  <div id="pop2">

<button id="close1 "class="btn-danger btn" onclick="document.getElementById('pop2').style.display='none'">x</button>
  PUB
   <br>

   <div id="dynamic_slide_show1" class="carousel slide" data-ride="carousel">
   

    <div class="carousel-inner">
     <?php echo make_slides2($connect); ?>
    </div>
    

 
  </div>
     <form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" type="submit" name="done1"> Like </button>
</form>
     </div> 

  

    <section class="ftco-section bg-light">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h3 class="subheading">Shape Your Body</h3>
            <h2 class="mb-1">Our Coaches</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 d-flex">
            <div class="coach align-items-stretch">
              <div class="img" style="background-image: url(images/trainer-1.jpg);"></div>
              <div class="text bg-white p-4 ftco-animate">
                <span class="subheading">Owner / Head Coach</span>
                <h3><a href="#">Mark Brook</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <ul class="ftco-social-media d-flex mt-4">
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                </ul>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex">
            <div class="coach d-md-flex flex-column-reverse align-items-stretch">
              <div class="img" style="background-image: url(images/trainer-2.jpg);"></div>
              <div class="text bg-white p-4 ftco-animate">
                <span class="subheading">Owner / Head Coach</span>
                <h3><a href="#">Sarah Henderson</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <ul class="ftco-social-media d-flex mt-4">
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                </ul>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex">
            <div class="coach align-items-stretch">
              <div class="img" style="background-image: url(images/trainer-3.jpg);"></div>
              <div class="text bg-white p-4 ftco-animate">
                <span class="subheading">Owner / Head Coach</span>
                <h3><a href="#">George Hump</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <ul class="ftco-social-media d-flex mt-4">
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                </ul>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex">
            <div class="coach d-md-flex flex-column-reverse align-items-stretch">
              <div class="img" style="background-image: url(images/trainer-4.jpg);"></div>
              <div class="text bg-white p-4 ftco-animate">
                <span class="subheading">Owner / Head Coach</span>
                <h3><a href="#">Victor Hump</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <ul class="ftco-social-media d-flex mt-4">
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                </ul>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gym Classes</h3>
            <h2 class="mb-1">Workout Classes</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-1.jpg);">
                <span>Learn More</span>
              </a>
              <div class="text mt-3">
                <h3><a href="#">Body Building</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-2.jpg);">
                <span>Learn More</span>
              </a>
              <div class="text mt-3">
                <h3><a href="#">Aerobic Classes</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-3.jpg);">
                <span>Learn More</span>
              </a>
              <div class="text mt-3">
                <h3><a href="#">Weight Lifting</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="package-program ftco-animate">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-4.jpg);">
                <span>Learn More</span>
              </a>
              <div class="text mt-3">
                <h3><a href="#">Yoga Classes</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-4 justify-content-center ftco-animate">
          <div class="col-md-4 text-center">
            <a href="#" class="btn-custom py-4">View More Program <span class="ion-ios-arrow-down ml-2"></span></a>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Pricing Tables</h3>
            <h2 class="mb-1">Membership Plans</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
              <h2 class="heading">One Day Training</h2>
              <span class="price"><sup>$</sup> <span class="number">7</span></span>
              <span class="excerpt d-block">100% free. Forever</span>
              <a href="#" class="btn btn-primary d-block px-2 py-4 mb-4">Get Started</a>
              
              <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
              
              <ul class="pricing-text">
                <li>Onetime Access To All Club</li>
                <li>Group Trainer</li>
                <li>Book A Group Class</li>
                <li>Fitness Orientation</li>
              </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
              <h2 class="heading">Pay Every Month</h2>
              <span class="price"><sup>$</sup> <span class="number">65</span></span>
              <span class="excerpt d-block">All features are included</span>
              <a href="#" class="btn btn-primary d-block px-3 py-4 mb-4">Get Started</a>
              
              <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
              
              <ul class="pricing-text">
                <li>Group Classes</li>
                <li>Discuss Fitness Goals</li>
                <li>Group Trainer</li>
                <li>Fitness Orientation</li>
              </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="text-center">
              <h2 class="heading">1 Year Membership</h2>
              <span class="price"><sup>$</sup> <span class="number">125</span></span>
              <span class="excerpt d-block">All features are included</span>
              <a href="#" class="btn btn-primary d-block px-3 py-4 mb-4">Get Started</a>
              
              <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
              
              <ul class="pricing-text">
                <li>Group Classes</li>
                <li>Discuss Fitness Goals</li>
                <li>Group Trainer</li>
                <li>Fitness Orientation</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Testimony</h3>
            <h2 class="mb-1">Successful Stories</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="ml-4">
                        <p class="name">Gabby Smith</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="ml-4">
                        <p class="name">Floyd Weather</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_3.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="ml-4">
                        <p class="name">James Dee</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="ml-4">
                        <p class="name">Lance Roger</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                    <p class="mb-4 pb-1 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(images/person_2.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="ml-4">
                        <p class="name">Kenny Bufer</p>
                        <span class="position">Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">

      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Articles</h3>
            <h2 class="mb-1">Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <div class="meta">
                  <div><a href="#">December 23, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Young Women Doing Abdominal</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <div class="meta">
                  <div><a href="#">December 23, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Young Women Doing Abdominal</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <div class="meta">
                  <div><a href="#">December 23, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Young Women Doing Abdominal</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-appointment">
      <div class="overlay"></div>
      <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
          <div class="col-md-6 d-flex align-self-stretch img" style="background-image: url(images/about-3.jpg);">
          </div>
          <div class="col-md-6 appointment ftco-animate">
            <h3 class="mb-3">Book a Appointment</h3>
            <form action="#" class="appointment-form">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" class="form-control appointment_date" placeholder="Date">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" class="form-control appointment_time" placeholder="Time">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
                </div>
              </div>
            </form>
          </div>          
        </div>
      </div>
    </section>
    
    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="gallery ftco-gradient d-flex justify-content-center align-items-center">
              <div class="row justify-content-center">
                <div class="col-md-12 heading-section ftco-animate text-center">
                  <h3 class="subheading">Gallery Photo</h3>
                  <h2 class="mb-1">Instagram</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-7.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-8.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">

              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Boost Your Body</a></li>
                <li><a href="#" class="py-2 d-block">Achieve Your Goal</a></li>
                <li><a href="#" class="py-2 d-block">Analyze Your Goal</a></li>
                <li><a href="#" class="py-2 d-block">Improve Your Performance</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    	       <div id="pop3">

<button id="close "class="btn-danger btn" onclick="document.getElementById('pop3').style.display='none'">x</button>
  PUB
   <br>

   <div id="dynamic_slide_show1" class="carousel slide" data-ride="carousel">
   

    <div class="carousel-inner">
     <?php echo make_slides3($connect); ?>
    </div>
    

 
  </div>
       <form method="POST" action="nblike.php">
  <button class="btn btn-primary btn-sm" type="submit" name="done2"> Like </button>
</form>
<br>
     </div> 
    </footer>
    
  

          
 
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>