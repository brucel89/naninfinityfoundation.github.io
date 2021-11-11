<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  // $name = $_POST['name'];
  // $number = $_POST['number'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info.naninfinityfoundation@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Admin89_'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('info.naninfinityfoundation@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('custinfo.naninfinityfoundation@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Footer)';
    $mail->Body = "<h3>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span id="alert1"> Message Sent! Thank you for contacting us.</span>
              </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span id="alert2">'.$e->getMessage().'</span>
              </div>';
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Naninfinity Foundation</title>
    <meta name="description" content="Sponsorship Program For Kids At NanInfinty, Our Efforts to bring a change in the lives of the millions of children, for Children that remain unlightened by Education. and to provide high qualitative medical services to all.">
    <meta name="keywords" content="Sponsor a child, sponsor a child in poverty, best site to sponsor a child, child sponsorship program, sponsor a child in chennai, sponsor a child donation, sponsor a child onlin, online charity, Sponsor for food,sponsor for people in poverty, best site to sponsor for poor people, poor people sponsorship program, sponsor food in chennai,sponsor a food donation, sponsor for food distribution, sponsor for food to needy people onlin, online charity, education sponsors, Food sponsors, education for underprivileged children, NGO in India, NGO, Sponsor A Child In Indi, Donate for education, Donate for food, Sponsorship Program For Kids From India, Child Sponsorship, Food Sponsorship, Donate for medicines, Donate for medical camp, Sponsorship Program For medical aid, medical camp Sponsorship, medical aid Sponsorship">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robot" CONTENT="index,follow">
    <meta name="refresh" CONTENT="30">
    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "NanInfinity Foundation",
           
            "telephone" : "+91 8124936800",
            "email" : "info@naninfinityfoundation.com",
            "address" : {
              "@type" : "PostalAddress",
              "addressLocality" : "Korattur,Chennai",
              "addressRegion" : "Tamilnadu",
              "addressCountry" : "India",
              "postalCode" : "600099"
                        
            }
        }
</script>
<script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "NanInfinity Foundation",
            "description": "Sponsorship Program For Kids At NanInfinty, Our Efforts to bring a change in the lives of the millions of children, for Children that remain unlightened by Education. and to provide high qualitative medical services to all.",
            "openingHours": "Mo, Tu, We, Th, Fri, Sat, Sun",
            "telephone": "+91 8124936800",
           "image" :
        "https://www.naninfinityfoundation.com/images/agaram_logonewtrans.jpg",
              "address" : {
              "@type" : "PostalAddress",
              "addressLocality" : "Korattur, Chennai",
              "addressRegion" : "Tamilnadu",
              "addressCountry" : "India",
              "postalCode" : "600099"
             
              },
         "sameAs": [ 
         
         "https://www.facebook.com/naninfinityfoundation/",
         "https://www.twitter.com/nan_foundation/",
         "https://www.linkedin.com/in/nan-infinity-foundation-a91a31225/"
         ]}
        }
        }
</script>
    <meta name="copyright" CONTENT="Copyright © NanInfinity Foundation. All Rights Reserved.">
    <meta name="author" CONTENT="https://www.naninfinityfoundation.com">
    <meta name="generator" CONTENT="https://www.naninfinityfoundation.com">
    <meta name="language" CONTENT="English">
    <meta name="googlebot" content="all" />
    <meta name="Publisher" content=" NanInfinity Foundation " />
    <meta name="revisit-after" content="7 days" />
    <meta name="author" content="NanInfinity Foundation " />
    <meta name=distribution content=global />
    <meta http-equiv=content-language content=en-gb>
    <meta name=city content=Chennai />
    <meta name=geo.region content=IN />
    <meta name=state content="Tamil Nadu" />
    <meta property=og:locale content=en_US />
    <meta property=og:type content=article />
    <meta property=og:title content=" Sponsor a child |sponsor a child in poverty | best site to sponsor a child |child sponsorship program | sponsor a child in chennai |sponsor a child donation | sponsor a child online|online charity | Sponsor for food |sponsor for people in poverty | best site to sponsor for poor people | poor people sponsorship program | sponsor food in chennai |sponsor a food donation | sponsor for food distribution | sponsor for food to needy people online| online charity | education sponsors | Food sponsors | education for underprivileged children | NGO in India | NGO | Sponsor A Child In Indi | Donate for education | Donate for food | Sponsorship Program For Kids From India | Child Sponsorship | Food Sponsorship | Donate for medicines | Donate for medical camp | Sponsorship Program For medical aid | medical camp Sponsorship | medical aid Sponsorship." />
    <meta property=og:description content=" Sponsor a child |sponsor a child in poverty | best site to sponsor a child |child sponsorship program | sponsor a child in chennai |sponsor a child donation | sponsor a child online|online charity | Sponsor for food |sponsor for people in poverty | best site to sponsor for poor people | poor people sponsorship program | sponsor food in chennai |sponsor a food donation | sponsor for food distribution | sponsor for food to needy people online| online charity | education sponsors | Food sponsors | education for underprivileged children | NGO in India | NGO | Sponsor A Child In Indi | Donate for education | Donate for food | Sponsorship Program For Kids From India | Child Sponsorship | Food Sponsorship | Donate for medicines | Donate for medical camp | Sponsorship Program For medical aid | medical camp Sponsorship | medical aid Sponsorship." />
    <meta property=og:url content=" https://www.NanInfinity.com " />
    <meta property=og:site_name content=NanInfinity Foundation />
    <meta property=article:section content="NGO" />
    <meta name="twitter:title" content=" Sponsor a child |sponsor a child in poverty | best site to sponsor a child |child sponsorship program | sponsor a child in chennai |sponsor a child donation | sponsor a child online|online charity | Sponsor for food |sponsor for people in poverty | best site to sponsor for poor people | poor people sponsorship program | sponsor food in chennai |sponsor a food donation | sponsor for food distribution | sponsor for food to needy people online| online charity | education sponsors | Food sponsors | education for underprivileged children | NGO in India | NGO | Sponsor A Child In Indi | Donate for education | Donate for food | Sponsorship Program For Kids From India | Child Sponsorship | Food Sponsorship | Donate for medicines | Donate for medical camp | Sponsorship Program For medical aid | medical camp Sponsorship | medical aid Sponsorship. " />
    <meta name="twitter:url" content=" https://www.twitter.com/nan_foundation" />
    <meta name="twitter:card" content="NanInfinity" />
    <meta name="facebook:url" content="https://www.facebook.com/naninfinityfoundation" />
    <meta name="facebook:card" content="NanInfinity Foundation" />
    <link rel=publisher href=" https://www.naninfinityfoundation.com " />
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">
    <link rel="icon" href="images/favicon.ico" type="img/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
</head>
<body>

<?php echo $alert; ?>


<!-- Navbar -->
<section>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.php"><img src="images/logonewtrans.jpg"></a></div>
      <div class="logoext"><a href="index.php"><img src="images/logonewtrans.jpg"></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>

        <li><a href="index.php">Home</a></li>
        <li>
          <a href="#" class="desktop-item">Who We are</a>
          <input type="checkbox" id="showDrop1">
          <label for="showDrop1" class="mobile-item">Who We are</label>
          <ul class="drop-menu1">
            <li><a href="aboutus.php#Vision">Our Vision</a></li>
            <li><a href="aboutus.php#Mission">Our Mission</a></li>
            <li><a href="aboutus.php#Chairperson's Message">Chairperson's Message</a></li>
            <li><a href="aboutus.php#endpoints">President's Message</a></li>
            <li><a href="aboutus.php#objectives">Objectives</a></li>
            </ul>
        </li>
        <li>
          <a href="#" class="desktop-item">What We Do</a>
          <input type="checkbox" id="showDrop2">
          <label for="showDrop2" class="mobile-item">What We Do</label>
          <ul class="drop-menu2">
            <li><a href="education.php">Education</a></li>
            <li><a href="health.php">Health</a></li>
            <li><a href="Food.php">Food</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Contact US</a></li>
        <li><a href="donate.php" id="donate-btn">Donate</a></li>

        </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</section>
<!-- navbar end-->



<!-- Carousel -->
<section>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="donate.php"><img src="images/40.jpg" alt="" class="d-block w-100"></a>
    </div>
    <div class="carousel-item">
      <a href="donate.php"><img src="images/41.jpg" alt="" class="d-block w-100"></a>
    </div>
    <div class="carousel-item">
      <a href="donate.php"><img src="images/42.jpg" alt="" class="d-block w-100"></a>
    </div>
    <div class="carousel-item">
      <a href="donate.php"><img src="images/43.jpg" alt="" class="d-block w-100"></a>
    </div>
    <div class="carousel-item">
      <a href="donate.php"><img src="images/44.jpg" alt="" class="d-block w-100"></a>
    </div>
    <div class="carousel-item">
      <a href="donate.php"><img src="images/45.jpg" alt="" class="d-block w-100"></a>
    </div>     
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</section>
<!-- carousel end -->




<!-- vision -->
<section>
  <div class="container-fluid vision">
    <div class="vision text">
    <center><h6 >Vision</h6></center>    
    <p>To bring about a significant positive change in the socio-economic status of the rural society by offering quality education to the deserving individual.</p>
  </div>
</div>
</section>
<!-- vision end -->




<!-- about us -->
<section class="my-1 aboutusinfo">
    <div class="py-3">

    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/founder.png" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-8 col-md-8 col-12 aboutfounder">
          <h5 class="abtfndr">Founder's Message</h5>
          <br>
          <p>Mr. Pitchumani, Founder, NanInfinity Foundation.</p>
          <p>"When working closely with rural areas he had learned another challenge that the rural people faced lack of Education, Health.
          In case of Emergency rural people did not have much health care facilities and many are illiterate and they don’t have healthy environment. In order to avoid it we framed this organization to support the needy and help them in education and make them to protect natural resources.
          HEE – Health, Education and Environment is the main Goal of Nan infinity foundation."
          </p>
          <a href="aboutus.php" title="" class="btn btn-success">Know more</a>
        </div>
      </div>
    </div>
</section>
<!-- about us end-->

<!-- parallax -->
<section>
<div class="parallax">
  <div class="parallaxtext">You can #Change the world by a little help
  </div>
</div>
</section>
<!-- parallax end -->

<strong id="warning" hidden>IntersectionObserver is not supported by your browser, so you can't see the effect. Check its browser support <a href="https://caniuse.com/#feat=intersectionobserver" target="_blank">here</a>.</strong>

<!-- video -->
<div class="videobox">
  <center>
    <!-- <h3>Video title</h3> -->
    <div class="video-player">
      <video
        src="images/video.mp4"
        poster=""
        class="video">
      </video>

      <div class="player-controls">
        <div class="video-progress">
          <div class="video-progress-filled"></div>
        </div>

        <div class="inner-player-controls">

          <button class="play-button" title="Play">►</button>

          <div class="time">
              <span class="current">00:00</span> / <span class="duration">00:00</span>
            </div>

          <button class="mute control-button" aria-label="mute">
            <div class="slash"></div>
            <i class="fas fa-volume-up"></i>
          </button>

          <input
            type="range"
            class="volume"
            min="0"
            max="1"
            step="0.01"
            value="1"
          />
          <div class="video-hidden-progress">
          <div class="video-hidden-progress-filled"></div>
        </div>  

          <button class="fullscreen control-button" aria-label="fullscreen">
            <i class="fas fa-expand"></i>
          </button>            
        </div>
      </div>
    </div>
    </center>
    </div>
    <script src="./scripts/video.js"></script>
  <script>
      if(!!window.IntersectionObserver){
        let video = document.querySelector('video');
        let isPaused = false; /* flag for auto-pausing of the video */
        let observer = new IntersectionObserver((entries, observer) => { 
          entries.forEach(entry => {
            if(entry.intersectionRatio!=1  && !video.paused){
              video.pause(); isPaused = true;
            }
            else if(isPaused) {video.play(); isPaused=false}

          });
        }, {threshold: 1});
        observer.observe(video) ;
      }

      else document.querySelector('#warning').style.display = 'block';
  </script>    

<!-- video end -->



<!-- Social Share Icons -->
  <div id="share_icon">
    <ul class="fixedsocial bottomLeft">
    <li class="share right">
      <a href="javascript:void(0);" class="intro-banner-video-play-btn orangeBg" aria-label="social">
        <i class="fa fa-share-alt whiteText" aria-hidden="true"></i>
        <span class="ripple_social orangeBg"></span>
        <span class="ripple_social orangeBg"></span>
        <span class="ripple_social orangeBg"></span>
      </a>
      <ul class="submenu">
        <li><a href="https://www.facebook.com/naninfinityfoundation/" target="_blank" rel="noopener" class="facebook" aria-label="NanInfinity facebook"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li><a href="https://www.linkedin.com/in/nan-infinity-foundation-a91a31225/" target="_blank" rel="noopener" class="linkedin" aria-label="NanInfinity linkedin"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="https://www.instagram.com/naninfinityfoundation/" target="_blank" rel="noopener" class="instagram" aria-label="NanInfinity instagram"><i class="fab fa-instagram"></i></a></li>    
        <li><a href="https://www.youtube.com/channel/UCyGcfZyOay9GyjsiLcR3NBA/" target="_blank" rel="noopener" class="youtube" aria-label="NanInfinity youtube"><i class="fab fa-youtube"></i></a></li>
        <li><a href="https://www.twitter.com/nan_foundation/" target="_blank" rel="noopener" class="twitter" aria-label="NanInfinity twitter"><i class="fab fa-twitter"></i></a></li>
        
      </ul>
    </li>
    </ul>
</div>
<style> 
    .whiteText{
        color: #fff;
    }
    .fixedsocial{
        z-index: 999;
        position: fixed;
        padding: 0;
        margin: 0;
        list-style-type: none;
    }
    .fixedsocial .share i.fa, .fixedsocial .share i.fab{
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        border-radius: 50%}
    .fixedsocial .share i.fa{
        line-height: 50px;
    }
    .fixedsocial .submenu i.fa{
        background-color: #fff;
    }
    .fixedsocial .share:hover.right .submenu li:nth-child(1){
        opacity: 1;
        top: -80px;
        left: 0px;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-transition-delay: 80ms;
        -o-transition-delay: 80ms;
        transition-delay: 80ms;
    }
    .fixedsocial .share:hover.right .submenu li:nth-child(2){
        opacity: 1;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-transition-delay: .16s;
        -o-transition-delay: .16s;
        transition-delay: .16s;
        top: 80px;
        left: 0px;
    }
    .fixedsocial .share:hover.right .submenu li:nth-child(3){
        opacity: 1;
        top: -55px;
        left: 55px;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-transition-delay: .24s;
        -o-transition-delay: .24s;
        transition-delay: .24s;
    }
    .fixedsocial .share:hover.right .submenu li:nth-child(4){
        opacity: 1;
        top: 55px ;
        left: 55px;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-transition-delay: .32s;
        -o-transition-delay: .32s;
        transition-delay: .32s;
    }
    .fixedsocial .share:hover.right .submenu li:nth-child(5){
        opacity: 1;
        top: ;
        left: 75px;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-transition-delay: .4s;
        -o-transition-delay: .4s;
        transition-delay: .4s;
    }
    .fixedsocial .submenu{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .fixedsocial .submenu li{
        -webkit-transition: all ease-in-out .5s;
        -o-transition: all ease-in-out .5s;
        transition: all ease-in-out .5s;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        opacity: 0;
    }
    .fixedsocial .submenu li a{
        color: #fff;
        font-size: 20px;
    }
    .fixedsocial .submenu li a:hover i.fa{
        color: #fff;
    }
    .fixedsocial .submenu li a.facebook i.fab{
        background-color: #3b5999;
    }
    .fixedsocial .submenu li a.twitter i.fab{
        background-color: #006aff;
    }
    .fixedsocial .submenu li a.linkedin i.fab{
        background-color: #0e76a8;
    }
    .fixedsocial .submenu li a.youtube i.fab{
        background-color: #c70707;
    }
    .fixedsocial .submenu li a.instagram i.fab{
        background-color: #e4405f;
    }
    .fixedsocial.bottomLeft{
        bottom: 50%;
        left: 10px;
    }
    .orangeBg{
        background-color: linear-gradient(to top, #ff5722 0, #f39900 100%);
        background-image: -webkit-gradient(linear, left bottom, left top, from(#ff5722), to(#f39900));
        background-image: -o-linear-gradient(bottom, #ff5722 0, #f39900 100%);
        background-image: linear-gradient(to top, #ff5722 0, #f39900 100%);
    }
    .intro-banner-video-play-btn{
        height: 50px;
        width: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50% -50%);
        -ms-transform: translate(-50% -50%);
        transform: translate(-50% -50%);
        text-align: center;
        margin: 0;
        border-radius: 100px;
        z-index: 1;
    }
    .intro-banner-video-play-btn i{
        line-height: 50px;
        font-size: 20px;
    }
    .intro-banner-video-play-btn .ripple_social{
        position: absolute;
        width: 80px;
        height: 80px;
        z-index: -1;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50% -50%);
        -ms-transform: translate(-50% -50%);
        transform: translate(-50% -50%);
        opacity: 0;
        margin: -40px 0 0 -40px;
        border-radius: 100px;
        -webkit-animation: ripple_social 1.8s infinite;
        animation: ripple_social 1.8s infinite;
    }
    @-webkit-keyframes ripple_social{
        0%{
          opacity: 1;
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        100%{
          opacity: 0;
          -webkit-transform: scale(1);
          transform: scale(1);
        }
    }
    @keyframes ripple_social{
        0%{
          opacity: 1;
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        100%{
          opacity: 0;
          -webkit-transform: scale(1);
          transform: scale(1);
        }
    }
    .intro-banner-video-play-btn .ripple_social:nth-child(2){
        animation-delay: .3s;
        -webkit-animation-delay: .3s;
    }
    .intro-banner-video-play-btn .ripple_social:nth-child(3){
        animation-delay: .6s;
        -webkit-animation-delay: .6s;
    }
</style>

  <!-- social share icons end-->

<!-- donation icon-->
  <div class="Donation_box">
      <a href="donate.php" class="donation_icon">
        <i class="fas fa-hand-holding-heart"></i>
      </a>
  </div>  
<!-- donation end -->



  <!--top arrow  -->
<section>
<div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

  <script >
    //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    
  </script>
</div>
</section>
<!-- top arrow end-->






<!-- Footer -->
<footer>
      <div class="main-content">
        <div class="left box">          
          <div class="content1">
            <img src="images/logonewtrans.jpg">
            <a href="https://g.co/kgs/eUCGwB" target="_blank"><img src="images/comlogo.jpg"></a>
            <p>NanInfinty Foundation was registered in the year 2021.</p>
            <div class="social">
              <a href="https://www.facebook.com/naninfinityfoundation/" target="_blank"><span class="fab fa-facebook-f"></span></a>
              <a href="https://www.twitter.com/nan_foundation" target="_blank"><span class="fab fa-twitter"></span></a>
              <a href="https://www.instagram.com/naninfinityfoundation/" target="_blank"><span class="fab fa-instagram"></span></a>
              <a href="https://www.youtube.com/channel/UCyGcfZyOay9GyjsiLcR3NBA" target="_blank"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Korattur,Chennai,Tamilnadu,India</span>
            </div>
            <div class="phone">
              <a href="tel:+91 8124936800"><span class="fas fa-phone-alt"></span></a>
              <a href="tel:+91 8124936800"><span class="text">+91 8124936800</span></a>
            </div>
            <div class="email">
              <a href = "mailto: info@naninfinityfoundation.com"><span class="fas fa-envelope"></span></a>
              <a href = "mailto: info@naninfinityfoundation.com"><span class="text">info@naninfinityfoundation.com</span></a>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form class="contact" action="" method="post">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" name="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea name="message" rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit" name="submit" class="send-btn" value="Send">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By <a href="https://www.instagram.com/krishnabharadwaj98/" target="_blank">BKB</a> | </span>
          <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
        </center>
      </div>
</footer>

<script>
   setTimeout(function(){
       $('.alert-success').removeClass("alert-success");
       $('#alert1').remove();
       $('.alert-error').removeClass("alert-error");
       $('#alert2').remove();
       },5000);
</script>



<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>
</html>