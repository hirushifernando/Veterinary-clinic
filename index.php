<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die ('connection failed');
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)VALUES('$name','$email','$number','$date')") or die ('query failed');
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
    <title>Veterinary Website</title>
    <link rel="icon" href="logo1.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
          
           <a href="#home" class="logo"><span>Vetale</span> PetCare.</a>
           
           <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#reviews">Reviews</a>
            <a href="#contact">Contact Us</a>
            </nav>
            <a href="#contact" class="link-btn">make appointment<a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>
</header>
<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Your pet's health is our top priority.</h3>
                <p>At Vetale Veterinary, your pet's health is our top priority. We understand that your furry companions are family, and we're dedicated to providing them with the highest quality care. Our experienced team ensures your pets receive comprehensive medical attention, personalized treatment plans, and compassionate service. From routine check-ups to advanced procedures, we're here to support your pet's well-being every step of the way. Trust us to keep your pets happy, healthy, and thriving.</p>
                <a href="#contact" class="link-btn">make appointment<a>
            </div>
        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="2.jpg" class="w-80 mb-4 mb-md-0" alt="">
            </div>
            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Petcare for Your Pet</h3>
                <p>At Vetale Veterinary, we provide comprehensive care for pets of all sizes, ensuring their health and happiness. Our services range from regular check-ups to emergency care, addressing all aspects of your pet's well-being. With a dedicated team of experienced veterinarians and staff, we are committed to offering the highest quality care tailored to your pet's unique needs. Whether it's preventive care, diagnostics, or treatment, we are here for you and your pet every step of the way. Trust Vetale Veterinary to keep your beloved companions healthy and thriving.</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>
    </div>
</section>
<section class="services" id="services">
    <h1 class="heading">our services</h1>
    <div class="box-container container">
        <div class="box">
            <img src="p.png" alt="">
            <h3>Wellness Exams</h3>
            <p>Regular check-ups to monitor and maintain your pet's health, including vaccinations, parasite control, and overall wellness assessments.</p>
        </div>
        <div class="box">
            <img src="p1.png" alt="">
            <h3>Dental Care</h3>
            <p>Comprehensive dental services including cleanings, exams, and treatments to ensure your pet's oral health is in top condition.</p>
        </div>
        <div class="box">
            <img src="p5.png" alt="">
            <h3>Emergency Care</h3>
            <p>Immediate and compassionate care for urgent health issues and emergencies, available to provide your pet with timely medical attention.</p>
        </div>
        <div class="box">
            <img src="p6.png" alt="">
            <h3>Surgical Services</h3>
            <p>A wide range of surgical procedures performed with the utmost care and precision, from routine spaying and neutering to complex surgeries.</p>
        </div>
        <div class="box">
            <img src="p4.png" alt="">
            <h3>Diagnostic Services</h3>
            <p>Advanced diagnostic tools and techniques, such as X-rays, ultrasounds, and laboratory testing, to accurately diagnose and treat your pet's health issues.</p>
        </div>
        <div class="box">
            <img src="p7.png" alt="">
            <h3>Nutritional Counseling</h3>
            <p>Personalized dietary recommendations and nutrition plans to support your pet's overall health, weight management, and specific medical conditions.</p>
        </div>
        
    </div>
</section>
<section class="process">
 <h1 class="heading">work process</h1>
 <div class="box-container container">
    <div class="box">
        <img src="21.png" alt="">
        <h3>Appointment Scheduling</h3>
        <p>Easily book appointments online or by phone to ensure timely and convenient visits for your pet's health needs.</p>
    </div>
    <div class="box">
        <img src="25.png" alt="">
        <h3>Comprehensive Examination</h3>
        <p>During each visit, our veterinarians conduct thorough physical exams and discuss your pet's health history to provide personalized care plans.</p>
    </div>
    <div class="box">
        <img src="24.png" alt="">
        <h3>Follow-Up and Support</h3>
        <p>After treatment or check-ups, we offer follow-up consultations and ongoing support to monitor your pet's recovery and maintain their well-being.</p>
    </div>
 </div>
</section>
<section class="reviews" id="reviews">
    <h1 class="heading">satisfied clients</h1>

    <div class="box-container container">

        <div class="box">
            <img src="33.jpg" alt="">
            <p>"Exceptional care for our beloved pets! Vetale Veterinary's dedication and expertise have consistently impressed us. Highly recommended!" </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Michael Johnson</h3>
            <span>satisfied</span>
        </div>
        <div class="box">
            <img src="31.jpg" alt="">
            <p>"Vetale Veterinary's dedication to pet care is unmatched. Their expertise and compassion shine through in every visit. Highly recommended!" </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <h3>Nick Deon</h3>
            <span>satisfied</span>
        </div>
        <div class="box">
            <img src="32.jpg" alt="">
            <p>"I'm consistently impressed by the level of care Vetale Veterinary provides. They've become our go-to for all our pet's needs. Thank you!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
            </div>
            <h3> Sarah Smith</h3>
            <span>satisfied</span>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <h1 class="heading">make appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">'.$message.'</p>';
                }   
            }
        ?>
        
        <span>your name :</span>
        <input type="text" name="name" placeholder="Enter your name" class="box" required>
        <span>your email :</span>
        <input type="email" name="email" placeholder="Enter your email" class="box" required>
        <span>your number :</span>
        <input type="number" name="number" placeholder="Enter your number" class="box" required>
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
</section>
<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>
        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>No25, Silva road, Colombo03</p>
        </div>
        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>08.00am to 9.00pm</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>vetale@gmail.com</p>
            <p>vpetcare@gmail.com</p>
        </div>
    </div>
    <div class="credit"> 
        &copy; copyright @ <?php echo date('Y'); ?> by <span>hirushi-web designer & developer</span>
    </div>
</section>
<script src="script.js"></script>

</body>
</html>