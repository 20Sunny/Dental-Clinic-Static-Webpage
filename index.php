<?php

$conn = mysqli_connect('localhost','root','','dr') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Villlage Dental || Minor Project</title>
   <link rel="shortcut icon" type="image/x-icon" href="https://www.villagedentaldtc.com/wp-content/uploads/2021/11/cropped-favicon-village-dental-192x192.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
   <div id="preloader"></div>
<a class="Top" data-aos="fade-up"
     data-aos-anchor-placement="center-center" id="Top" href="#home"><p id="arrow"></p></a>




<!-- header section starts  -->
<section class="project">
<div class="content" data-aos="fade-right">
   <div class="wrapper">
   <div class="typing-demo">
      WELCOME! TO VILLAGE DENTAL
   </div></div>
      <h3>LET US BRIGHTEN YOUR SMILE</h3>
      <p>AT </p><p>vILLaGe <span> deNTaL</span></p>
         <h5>our doctors are recognized by leading industry organizations, and work with the best clinical partners, labs, and safety technology <br>to provide you top-notch dental care</h5>
</div>
   <div class="down"></div>
 <video autoplay muted loop class="back-video" id="home" >
            <source type="video/mp4" src="https://www.villagedentaldtc.com/wp-content/uploads/2021/09/banner-video-village-dental-v2.mp4" /> 
         </video>
      </section>

<header class="header fixed-top">
   <div class="container" data-aos="fade-down">
      <div class="row align-items-center justify-content-between">

         <a href="" class="logo" type="text/javascript" onclick="content()">vILLaGe  <span>  deNTaL</span></a>
         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#footer">contact us</a>
         </nav>
   <a href="#contact" type="button" class="button">
  <span class="button__text">Make Appointment</span>
  <span class="button__icon">
    <ion-icon name="today-outline"></ion-icon>
  </span>
</a>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
         <div id="menu-btn" class="fas fa-bars">
          </div>
      </div>
   </div>
  <!-- refresh section starts -->
<script type="text/javascript">
   function content() {
      location.reload();}
 // refresh section ends
</script>
<span class="et_pb_scroll_top et-pb-icon et-hidden" style="display: inline;"></span>
</header>
</div>







<!-- header section ends -->
<!-- about section starts  -->

<section class="about">
   <div class="container" id="about">
      <div class="row align-items-center">
         <div class="hover-effect" data-aos="fade-right">
            <img src="images/about-bg.jpg" class="img-front" alt="">
            <img src="images/about-img.jpg" class="img-back" alt="">
         </div>
         <div class="col-md-6 content">
            <h4><b>about us</h4>
            <h2>True Healthcare For Your Family</h2>
            <h6>We’re a group of energetic, values-driven dental clinicians dedicated to caring for all people — young to young at heart. Since 2022, we’ve been combining exciting technology with a warm and friendly team to deliver exceptional dentistry in Greenwood Village.
<br>Find all the dental care you need (and then some) here in our beautiful office, designed for your comfort and rejuvenation.</h6>
         <a id="open-popup-btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Read More . . .
         </a><a class="fa-solid fa-address-card" href="dctr.php"></a>
         <div class="popup-overlay"></div>
         <div class="popup">
            <h4> ABOUT </h4>
            <h1>Doctor's Profile </h1>
<p>Dental Care is promoted by Dr Savneet Kaur who is a qualified Dentist (BDS) with 15 years of experience in the profession. She has worked for 12 years in New Delhi before moving to Mumbai in the year 2012. She is currently practising at Dental Care in Sion & Mantunga She specializes in cosmetic dentistry, extractions, root canals, crowns and bridges and dentures. She has a lot of experience with children and has done many complicated cases in pedodontics. The clinic is ultra modern, state of art with the best of the industry equipment. It is properly sterlized and clean hygenic environment is maintained for the well being of the patients. Serving the humanity is our motto. Clean teeth is good health.<p>
<h1>Our Team</h1>
<p>As dental health professionals committed to excellence, our clinics have provided patients and their families with the finest dental care treatments since our inception. making us one of the most trusted dental clinics in the world. We place high value on delivering a unique experience to our patients by creating a calm and friendly ambience replete with personalized care and minimally invasive treatments. Our 15 years of experience, clinical expertise and best-in-class hospitality have gained us highly acclaimed professional recognition in the dental community throughout the world. With professionals and clinics at-par with the best in the world, we have been known in the medical tourism community for our cost-effective and quality health care.</p>

            <div class="popup-close-btn"><i class="fa-solid fa-circle-xmark"></i></div>
         </div>
      </div>
      </div>
      </div>
   </div>
</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-down">special services</h1>

   <div class="box-container container">

      <div class="box" data-aos="fade-right">
         <div class="box-img" alt="">
            <img src="images/image-1.png">
         </div>
         <div class="box-content">
            <h3>Cosmetic dentistry</h3>
            <p>White (tooth) colored fillings have come a long way and can now be used to help recontour, re-enhance and restore front teeth! With dozens of shades and hues to choose from, cosmetic composites can mimic the lifelike appearance of natural teeth and keep things conservativ</p>
         </div>
      </div>

            <div class="box" data-aos="fade-up">
         <div class="box-img" alt="">
            <img src="images/image-2.png">
         </div>
         <div class="box-content">
            <h3>Dental Implants</h3>
            <p>Dental implants are metal posts that are surgically positioned into the jawbone beneath your gums to provide stable support for artificial teeth. Some people who have lost bone in their jaw can still get implants, but first the bone must be augmented with a bone graft</p>
         </div>
      </div>

            <div class="box" data-aos="fade-right">
         <div class="box-img" alt="">
            <img src="images/image-3.png">
         </div>
         <div class="box-content">
            <h3>Mouth and Sports Guards</h3>
            <p>who unintentionally bite down too hard when they sleep can cause pain and damage to their teeth.We can custom fit a nightguard for you to help protect your teeth and resolve issues that you may be having with grinding, clenching, or snoring at night. There is no need to suffer with pain or lose sleep due to a snoring spouse.</p>
         </div>
      </div>

      <div class="box" data-aos="fade-right">
         <div class="box-img" alt="">
            <img src="images/image-4.png">
         </div>
         <div class="box-content">
            <h3>Tooth Colored Fillings</h3>
            <p>When you develop a cavity, we carefully removes the decayed areas of the tooth, then fills the space with a durable dental composite material. If you’re like most patients, you may choose white composite fillings or fillings that match your natural teeth color, instead of silver fillings because of their improved esthetics and lack of mercury.</p>
         </div>
      </div>

            <div class="box" data-aos="fade-up">
         <div class="box-img" alt="">
            <img src="images/image-5.png">
         </div>
         <div class="box-content">
            <h3>TMJ Therapy</h3>
            <p>TMJ stands for temporal-mandibular joint, which is vital in the function and movement of the jaw.  Complications in this joint may be caused by misalignment of the teeth, trauma, or excessive muscle tension.  Problems in the TMJ can cause headaches, earaches, popping of the jaw, pain in the jaw muscles, and soreness in the area that may extend to the face.</p>
         </div>
      </div>

            <div class="box" data-aos="fade-left">
         <div class="box-img" alt="">
            <img src="images/image-6.png">
         </div>
         <div class="box-content">
            <h3>Dental Implants</h3>
            <p>Dental implants are metal posts that are surgically positioned into the jawbone beneath your gums to provide stable support for artificial teeth. Some people who have lost bone in their jaw can still get implants. Dentures and bridges mounted to dental implants won’t slip or shift in your mouth, which will make you feel more comfortable about eating</p>
         </div>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->
<section class="process" id="work process">
   <h1 class="heading" data-aos="fade-down">work process</h1>
   <div class="box-container container">
   <div class="card" data-aos="flip-up">
      <div class="imgbox">
         <img src="images/1.png">
      </div>
      <div class="cntnt">
         <h2>Periodontists</h2>
         <p>is the specialty of dentistry that studies supporting structures of teeth, as well as diseases and conditions that affect them. The supporting tissues are known as the <span>Periodontists</span></p>
      </div>
   </div>

      <div class="card" data-aos="flip-up">
      <div class="imgbox">
         <img src="images/2.png">
      </div>
      <div class="cntnt">
         <h2>prosthodontists</h2>
         <p>It handles complex dental cases, including jaw surgery, dentures, implants, and more. <span>Prosthodontists</span> also offer veneers, crowns, and bridges to restore and replace teeth.</p>
      </div>
   </div>

      <div class="card" data-aos="flip-up">
      <div class="imgbox">
         <img src="images/3.png">
      </div>
      <div class="cntnt">
         <h2>Endodontists</h2>
         <p>repair tissues inside the tooth in intricate ways. They diagnose and treat complex causes of tooth pain, such as tooth abscess. <span>Endodontists</span> perform root canal treatments and other procedures to relieve pain.</p>
      </div>
   </div>

      <div class="card" data-aos="flip-up">
      <div class="imgbox">
         <img src="images/4.png">
      </div>
      <div class="cntnt">
         <h2>Family dentists</h2>
         <p>is concerned with addressing oral health at every stage of life, but particularly in kids and teenagers. <span>Family dentists</span> are quite similar to general dentists, but typically have more experience working with children.</p>
      </div>
   </div>

      <div class="card" data-aos="flip-up">
      <div class="imgbox">
         <img src="images/5.png">
      </div>
      <div class="cntnt">
         <h2>pediatric dentistry</h2>
         <p>also called <span>pedodontists</span>, specialize in treating dental problems in under 18. They focus on the dental issues :
           <li>Cavity removal</li>
           <li>Repair injuries like displaced teeth</li>
           <li>Oral health exams </li>
           <li>Teeth cleaning and fluoride treatments </li></p>
      </div>
   </div>

      <div class="card" data-aos="flip-up">
      <div class="imgbox">
         <img src="images/6.png">
      </div>
      <div class="cntnt">
         <h2>orthodontists</h2>
         <p> is a dentist trained to diagnose, prevent, and <span>treat teeth and jaw irregularities</span>. They correct existing conditions and are trained to identify problems that may develop in the future. they work with people of all ages.</p>
      </div>
   </div>
</div>
   </div>
</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading" data-aos="fade-down"> satisfied clients </h1>

   <div class="box-container container">
      <div data-tilt data-tilt-scale="1.2" data-tilt-glare data-tilt-max-glare="0.8">
      <div class="box" data-aos="zoom-out-right">
         <img src="images/pic-1.png" alt="">
         <p>It’s a pleasure to go to the dentist at Village Dental. The office is gorgeous, feels peaceful & clean. The staff has an upbeat attitude. Dr. Zervas is so kind & genuine.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sherryll K.</h3>
         <span>satisfied client</span>
      </div>
      </div>


      <div data-tilt data-tilt-scale="1.2" data-tilt-glare data-tilt-max-glare="0.8">
      <div class="box" data-aos="zoom-out">
         <img src="images/pic-2.png" alt="">
         <p>Everything about this office is excellent! The staff is friendly and attentive. The assistants make you feel comfortable. Probably the best dentist I have ever seen. Wonderful doctors!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lisa J.</h3>
         <span>satisfied client</span>
      </div>
   </div>


      <div data-tilt data-tilt-scale="1.2" data-tilt-glare data-tilt-max-glare="0.8">
      <div class="box" data-aos="zoom-out-left">
         <img src="images/pic-3.png" alt="">
         <p>Unlike other Greenwood Village dentists, Village Dental takes you where you’re at rather than chastising or shaming. I can’t recommend them highly enough. You will be well cared for!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>JoAnn B.</h3>
         <span>satisfied client</span>
      </div>
   </div>


      <div data-tilt data-tilt-scale="1.2" data-tilt-glare data-tilt-max-glare="0.8">
      <div class="box" data-aos="zoom-out-right">
         <img src="images/pic-4.png" alt="">
         <p>It’s a pleasure to go to the dentist at Village Dental. The office is gorgeous, feels peaceful & clean. The staff has an upbeat attitude. Dr. Zervas is so kind & genuine.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Tony Huber</h3>
         <span>satisfied client</span>
      </div>
   </div>


      <div data-tilt data-tilt-scale="1.2" data-tilt-glare data-tilt-max-glare="0.8">
      <div class="box" data-aos="zoom-out">
         <img src="images/pic-5.png" alt="">
         <p>Everything about this office is excellent! The staff is friendly and attentive. The assistants make you feel comfortable. Probably the best dentist I have ever seen. Wonderful doctors!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Kailyn Wilcox</h3>
         <span>satisfied client</span>
      </div>
   </div>


      <div data-tilt data-tilt-scale="1.2" data-tilt-glare data-tilt-max-glare="0.8">
      <div class="box" data-aos="zoom-out-left">
         <img src="images/pic-6.png" alt="">
         <p>Unlike other Greenwood Village dentists, Village Dental takes you where you’re at rather than chastising or shaming. I can’t recommend them highly enough. You will be well cared for!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Dean Morton</h3>
         <span>satisfied client</span>
      </div>
   </div>

   <script type="text/javascript" src="js/vanila-tilt.js"></script>
   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
   <div class="set">
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
   </div>
   <div class="set set2">
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
   </div>
   <div class="set set3">
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
      <div><img src="images/dt8.png"></div>
   </div>
   <h1 class="heading" data-aos="fade-down">make <span>APPOINTMENT</span></h1>
   <div class="box-1" data-aos="zoom-in">
   

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <span>Your Problem :</span>
      <textarea id="query" class="box" rows="1" name="query" placeholder="Write you’re problem here" required></textarea>
      <input type="submit" onclick="message()" value="make appointment" name="submit" class="link-btn">
      <a class="link-btn" id="check" href="table.php">Check</a>
   </form>

   
</div>
</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer" id="footer">

   <div class="box-container container" data-aos="fade-up">
      
      <div class="box">
         <a href="tel:7061101670" class="fas fa-phone"></a>
         <h3>phone number</h3>
         <p>+91 913*69*544</p>
         <p>+91 626*04*061</p>
      </div>
      
<!--       <div class="box">
         <a class="fa fa-map-marker-alt" href="https://www.google.co.in/maps/dir/26.260707156786,+78.21780540929356/@26.2607825,78.2173576,152m/data=!3m1!1e3!4m5!4m4!1m3!2m2!1d78.2178054!2d26.2607072"></a>
         <h3>our address</h3>
         <p>City Center,Gwalior(M.P.),INDIA - 474001</p>
      </div> -->

      <div class="box">
         <a class="fa fa-clock" href=""></a>
         <h3>opening hours</h3>
         <p>10:00am to 05:00pm</p>
      </div>

      <div class="box">
         <a class="fa fa-envelope" href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRqhsQdgPNjHTMmkvShlLswGSztMkjBbCtSgsbFvHfhFqHVrRbqKShCgLbkXskhffvdlKJg"></a>
         <h3>email address</h3>
         <p>SunnySharma7601@outlook.com</p>
         <p>SunnySharma7601@gmail.com</p>
      </div>

      <div class="box">
         <a class="fa-solid fa-code" href="use.php"></a>
         <h3>Language's</h3>
         <p>Contribution</p>
      </div>

      <div class="box">
         <a class="fa-brands fa-instagram" href="https://www.Instagram.com"></a>
         <h3>Follow Us</h3>
         <p>On Instagram</p>
      </div>

      <div class="box">
         <a class="fa-brands fa-youtube" href="https://www.Youtube.com"></a>
         <h3>For Latest Update</h3>
         <p>Subscribe Our Youtube Channel</p>
      </div>

      <div class="box">
         <a class="fa-brands fa-twitter" href="https://www.Twitter.com"></a>
         <h3>For More Update</h3>
         <p>Follow Us On Twitter</p>
      </div>

      <div class="box">
         <a class="fa-brands fa-facebook-f" href="https://www.Facebook.com"></a>
         <h3>Connect With Us</h3>
         <p>On Facebook</p>
      </div>

   </div>

   <div class="col-sm-12" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.029412755383!2d78.21559331466348!3d26.260708794175603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c1273e3c14e9%3A0x17301bfd69162e2a!2sPrestige+Institute+of+Management!5e0!3m2!1sen!2sin!4v1524190134604" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    
                    </div>

    <div class="credit"><center><a href=""><img src="https://www.villagedentaldtc.com/wp-content/uploads/2021/11/cropped-favicon-village-dental-32x32.png"></a></center> Dentist Website (Minor Project)<?php echo date('d/m/y'); ?> by <a href="doctor.php"><span>Sunny Sharma</span></a> </div>
</div>
</section>


<!-- footer section ends -->
<!-- custom js file link  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>





<script src="js/script.js"></script>

<script>
   var loader = document.getElementsById("preloader");
   window.addEventListener("load",function(){
      loader.style.display = "none";
   })
</script>






</body>
</html>