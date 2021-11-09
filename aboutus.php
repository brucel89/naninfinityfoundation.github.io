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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US | Naninfinity Foundation</title>
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
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">
    <link rel="icon" href="images/favicon.ico" type="img/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
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





<main class="main-scroll-up">
        <nav class="section-nav">
            <ol>
                <li><a href="#Vision"><i class="far fa-lightbulb"></i> Our Vision</a></li><br><br><br>
                <li><a href="#Mission"><i class="far fa-chart-bar"></i> Our Mission</a></li><br><br><br>
                <li><a href="#Chairperson's Message"><i class="fab fa-readme"></i> Chairperson's Message</a></li><br><br><br>
                <li><a href="#endpoints"><i class="fas fa-hands-helping"></i> President's Message</a></li>       
            </ol>
        </nav>
        <div>
            <section class="content-height" >
                <h2 id="Vision">Our Vision</h2>
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/vision.jpg" class="img-fluid aboutusimg">
                </div>                
                <div class="col-lg-6 col-md-6 col-12 text">                
                <div id="aboutustext">
                <h6>Health</h6>
                <p>To provide every individual to access healthcare easily and quickly in case of an emergency.</p>
                <h6>Education</h6>
                <p>To Identify the skill set of every individual and train them to achieve the goals.</p>
                <h6>Environment</h6>
                <p>To Create environmental awareness and conservation of natural resources in Surrounding.</p>
              </div>
              </div>
              </div>
              </div>
            </section>
            <br>
            <br><br>
            <section class="content-height" >
                <h2 id="Mission">Our Mission</h2>
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-12 text">
                <p>To distribute the available resources from “who have it to who need it”</p></div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/mission.jpg" class="img-fluid aboutusimg">
                </div>
                </div>
              </div>
            </section>
            <br><br>
            <section class="content-height">
                <h2  id="Chairperson's Message">Chairperson's Message</h2>
                <div class="container-fluid">
                <div class="row">                              
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/foundersmessage.jpg" class="img-fluid aboutusimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12 text">
                <p><br>
                We put human beings at the forefront of everything we do, ensuring our ideas and plans are culturally rich and consumer-led.   We approach strategy with practicality, humility and empathy. We believe that brands today can’t rely on a single, generic message served to a mass audience, the most effective way to drive relevance and growth is by speaking specifically and differently to people based on who they are, by listening and understanding.While the industry has been built on reach and efficiency, we’re upending the model, to understand attention, relevance and results.While the industry has been built on reach and efficiency, we’re upending the model, to understand attention, relevance and results.</p></div>
              </div>
            </div>
            </section>
            <br>
            <section class="content-height" >
                <h2 id="endpoints">President's Message</h2>
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-12 text">                                          
                <p>Deep-dive into the current state of consumer attention and immerse your team in emerging areas of culture to gain an in-depth understanding of what it takes to drive relevance in today’s landscape. You’ll work alongside some of the most seasoned, progressive and consumer-obsessed strategists, creators and media platform specialists in the industry to unlock modern solutions to your biggest business challenges. Walk away with a volume of actionable ideas that can be put into market and a robust, strategic roadmap for how to build sustainable relevance for your brand across a broad spectrum of consumers.While the industry has been built on reach and efficiency, we’re upending the model, to understand attention, relevance and results.While the industry has been built on reach and efficiency, we’re upending the model, to understand attention, relevance and results.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="presidentsmessage.jpg" class="img-fluid aboutusimg">
                </div>
                </div>
              </div>
            </section>
            <section class="content-height" >
                <center><h2 id="Objectives">Objectives</h2></center>
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <img src="images/objectives1.jpg" class="img-fluid aboutusimg">
                </div>
                <div class="col-lg-12 col-md-12 col-12 text">                                          
                <p><ol>The Nan Infinity Charitable Trust shall perform and operate for the benefit and welfare of the needy people, pauper, marginalized, homeless, handicapped, students and strive for the upliftment of such needy people with the following activities as an object of the trust:-<br>
                <li>Nan Infinity Foundation is a Charitable Trust without any object of profit-making and shall operate/ render services throughout India regardless of caste, colour or creed.</li>
                <li>To promote and carry on health care by establishing and maintaining hospitals or clinics or by rendering other, medical assistance and to undertake and assist other types of medical work including the training of doctors, nurses and paramedical workers</li>
                <li>To engage as far as possible in emergency social activities such as famine and relief work, helping the victims of natural calamities and other activities which will help and uplift the needy and underprivileged in our community.</li>
                <li>To spread, promote and provide education, and for that purpose to open, found, establish, support and maintain Schools, Colleges, Institutions and to grant certificates, diplomas and degrees of the Trust.</li>
                <li>To provide relief and assistance to handicapped, poor or needy persons and for that purpose to establish, maintain or support charitable institutions, which have the same or similar objects.</li>
                <li>To establish and maintain welfare hostels, ashrams, dharamshalas, skill training centres and as such to render assistance to the poor, marginalised, minority groups, handicapped, widows, orphans, street children, homeless, aged and victims of disaster and calamities.</li>
                <li>To offer and provide consultative, technical and professional services to medical, educational and other institutions.</li>
                <li>To arrange and conduct meetings, classes, seminars, workshops, conferences, campaigns, demonstrations, events, and lectures and to provide opportunities for study and research and to make the findings available to anyone who can use them for the benefit of mankind.</li>
                <li>To offer cooperation and assistance to benevolent schemes which are in accordance with the objects of the Trust, whether such schemes are undertaken by the State or Central Government, by public or private agencies, by religious or philanthropic organisations/ bodies.</li>
                <li>To offer cooperation to and actively engage in educational instruction, spiritual development and promote cultural understanding and to offer assistance and support to such Trusts or Societies and to respond to their invitation to help in all possible ways in keeping with the objects of the Trust.</li>
                <li>To raise funds through donations, by request, by public subscription, by issuing appeals and by accepting contributions from State or Central Government, individuals, philanthropic bodies, religious bodies, institutions, local bodies and industrial concerns, limited or private, whosesoever situated in the Union of India or abroad to fulfil the objects of the Trust.</li>
                <li>To grant scholarships, stipends or subsidy to needy persons, institutions and organisations in keeping with the object of the Trust.</li>
                <li>To subscribe or give donations and to financially or otherwise aid educational, benevolent, spiritual, charitable institutions, works and activities of other Trust or Society whose objects coincide or promote all or some of the said objects of the Trust.</li>
                <li>To hold, lease or acquire of any kind moveable or immovable or property and sell or exchange the same and utilise the proceeds for the benefit of the Trust.</li>
                <li>To invest or deposit money of the Trust, not immediately required for the purpose of the Trust, in a manner specified by the relevant rules in force from time to time.</li>
                <li>To open and maintain offices, banking, telephones and other services in any part of the Union of India for carrying out the objects of the Trust.</li>
                <li>To start printing, publishing firms and other media to undertake the printing and distribution of material which is relevant to the objects of the Trust.</li>
                <li>To start or use television, radio, literature, internet, correspondence courses, satellite dish etc. with the purpose to educate society in understanding of welfare, community health, development, spiritual, family life, human rights and lifestyle that may help improve the society.</li>                 
                <li>To establish and maintain contact and cooperate with other institutions, organisations in and outside India, having similar objects of this Trust and if the need arises then to take over such institutions, organisations and carry out affairs of such bodies under the banner of this trust.</li>
                <li>To bring together scholars from around the globe and provide a forum for healthcare, academic and social development.</li>
                <li>To receive Indian or foreign volunteers with various skills to assist, help, aid and participate and help fulfil the objects of the Trust.</li>
                <li>To establish associations, foundations and any other societies or organisations as may be deemed necessary by the governing body of the Trust.</li>
                <li>To take up any other activities which may be decided by the Board of Trustees from time to time, which are not against the objects and basic principles of this Trust as mentioned in this Trust deed.</li>
                <li>To do all such other lawful acts as may be necessary, incidental to or conducive to the attainment of the above aims and objects.</li></ol>
                </p>
                </div>                
                </div>
              </div>
            </section>
        </div>
    </main>
    <script src="./scripts/aboutus.js"></script>



<!-- parallax -->
<div class="parallax">
  <div class="parallaxtext">#You can change the world by a little help
  </div>
</div>
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

  <script src="scripts/Javascript.js"></script>
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


</body>
</html>