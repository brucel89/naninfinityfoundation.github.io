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
                 <span class="alert1"> Message Sent! Thank you for contacting us.</span>
              </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span class="alert2">'.$e->getMessage().'</span>
              </div>';
  }
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food | Naninfinity Foundation</title>
    <meta name="description" content="Sponsorship Program For Kids At Agaram, Our Efforts to make a difference in the lives of the millions of children, for Children that remain untouched by Education.">
    <meta name="keywords" content="sponsor a child  monthly, sponsor a child in poverty, best site to sponsor a child, child sponsorship program, sponsor a child in chennai, sponsor a child donation, sponsor a child online, online charity, education sponsors, education for underprivileged children, NGO in India, NGO, Sponsor A Child In India, Donate for education, Sponsorship Program For Kids From India, Child Sponsorship">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="robot" CONTENT="index,follow">
    <link rel="manifest" href="manifest.json">
    <meta name="refresh" CONTENT="30">
    <meta name="copyright" CONTENT="Copyright © NanInfinity Foundation. All Rights Reserved.">
    <meta name="author" CONTENT="https://www.naninfinityfoundation.com">
    <meta name="generator" CONTENT="https://www.naninfinityfoundation.com">
    <meta name="language" CONTENT="English">
    <meta name="googlebot" content="all" />
    <meta name="Publisher" content=" Agaram Foundation " />
    <meta name="revisit-after" content="7 days" />
    <meta name="author" content="Agaram Foundation " />
    <meta name=distribution content=global />
    <meta http-equiv=content-language content=en-gb>
    <meta name=city content=Chennai />
    <meta name=geo.region content=IN />
    <meta name=state content="Tamil Nadu" />
    <link rel=publisher href=" https://www.naninfinityfoundation.com " />
    <link rel="shortcut icon" href="images/favicon.ico" type="img/x-icon">
    <link rel="icon" href="images/favicon.ico" type="img/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
    <link rel="stylesheet" href="styles/whatwedo.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
      <input type="radio" name="slider" id="donate-btn">
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

<!-- Food -->
<header class="main-header">
      <h1><span>Food</span> </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias,
        quam!
      </p>
    </header>

    <main class="container">
      <section class="card">
        <img src="https://i.ibb.co/VvC0vpN/paint-1.png" alt="" />
        <div>
          <h3>Nutritious Food</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.
          </p>          
        </div>
      </section>

      <section class="card" data-aos="fade-left">
        <img src="https://i.ibb.co/3NHjDcW/paint-2.png" alt="" />
        <div>
          <h3>Hygenic Food</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.
          </p>
          </div>
      </section>

      <section class="card" data-aos="fade-right">
        <img src="https://i.ibb.co/0VywMkW/paint-3.png" alt="" />
        <div>
          <h3>Food Drive</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.
          </p>
          </div>
      </section>

      <section class="card" data-aos="fade-left">
        <img src="https://i.ibb.co/5LkJFRP/paint-4.png" alt="" />
        <div>
          <h3>Annadanam</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.
          </p>
          </div>
      </section>

      <section class="card" data-aos="fade-right">
        <img src="https://i.ibb.co/61R8Q2y/paint-5.png" alt="" />
        <div>
          <h3>Food Supplements Distribution</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
            enim laudantium, animi veniam libero eveniet culpa unde perferendis
            illo fugit corporis, voluptatibus totam dolorum, maiores magnam
            officia. Ab, delectus.
          </p>
          </div>
      </section>
    </main>
<!-- Education -->
  <script src='https://unpkg.com/aos@next/dist/aos.js'></script><script  src="./scripts/whatwedo.js"></script>
<!-- parallax -->
<section>
<div class="parallax">
  <div class="parallaxtext">You can #Change the world by a little help
  </div>
</div>
</section>
<!-- parallax end -->
<!-- Social Share Icons -->
  <div class="social_box">
    <a href="#" class="share_icon"  class="request-loader">
      <span><i class="fas fa-share-alt"></i></span>
    </a>
    <ul class="social_links">
      <li><a href="https://www.facebook.com/naninfinityfoundation/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://www.instagram.com/naninfinityfoundation/" target="_blank"><i class="fab fa-instagram"></i></a></li>
      <li><a href="https://www.twitter.com/nan_foundation" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCyGcfZyOay9GyjsiLcR3NBA"target="_blank"><i class="fab fa-youtube"></i></a></li>
      <li><a href="https://www.linkedin.com/in/nan-infinity-foundation-a91a31225" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
  </div>
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

  <script src="./scripts/Javascript.js"></script>
</div>
</section>
<!-- top arrow end-->






<!-- Footer -->
<footer>
      <div class="main-content">
        <div class="left box">          
          <div class="content1">
            <img src="images/logonewtrans.jpg">
            <a href="https://www.facebook.com/naninfinityfoundation/" target="_blank"><img src="images/comlogo.jpg"></a>
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
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91 8124936800</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">info@naninfinityfoundation.com</span>
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
          <span class="credit">Created By <a href="">BKB</a> | </span>
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
