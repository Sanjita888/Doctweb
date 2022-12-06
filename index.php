<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctweb</title>
    <link rel="stylesheet" href="Style.Css">
    <link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
        <!-- navbar -->
        <nav>
            <a href="index.html"><img src="image/download.jpg" ></a>
            <div class="nav-links" id="navlinks">
                  <ul>
                <li><a href="Doctor.php">DOCTOR</a></li>  
                <li><a href="Services.php">SERVICES </a></li> 
                <li><a href="">DOCTOR NEAR YOU</a></li>
                <li><a href="admin_page.php">LOGIN</a></li>
                 
                
            </ul>
        </div>
    </div>
        </nav>

        <div class="text-box">
            <h1> Doctor Appoinment Website</h1>
            <p>By streamlining the appointment process and having patients scheduled ahead of time decreases patient wait time and  satisfaction.<br> who's coming in ahead of time lets staff verify that they're eligible for insurance.<br>Verify your office has all the information needed to process the patient quickly.
            </p>
        <a href=""class="hero-btn">Visit Us To Know More</a>
        </div>

    </section>
    <!-- Benefits of online consulation -->
    <section class="About">
        <h1> Benifits of online consulation</h1>
        <p>You can see what are the benefits that are you gain by online consulation.</p>
        <div class="row">
            <div class="benefits">
                <h3>100% SAFE CONSULATION</h3>
                <p>Be assured that your online consultation will be fully private and secured.</p>
            </div>
        <div class="benefits">
            <h3>FREE FOLLOW-UP</h3>
            <p>Get a valid digital prescription and a 7-day, free follow-up for further clarifications..</p>
        </div>
        <div class="benefits">
            <h3>EASY DIGITAL PRESCRIPTION</h3>
            <p>Get a prescription without physically traveling to a doctor.</p>
        </div>
        </div>
</section>
    <!-- feature -->
    <section id="feature">
        <div class="title-text">
            <p>FEATURES</8 p>
            <h1> Why choose us?</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Experienced Doctors</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>A trusted, patient focused and experienced locum doctor with a long history of serving patients by successfully diagnosing, treating and also managing their illnesses and diseases having rich experience of 7+ years as a surgeon.</p>
                    </div>
                </div>
                <h1>Electronic prescriptions</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p>This e-prescription feature enables patients to request refills directly from your app. Why is this important? It saves time for both you and your patients. They can now avoid traveling to your clinic, and you can write prescriptions faster. Refills are then available at in-network pharmacies.</p>
                </div>
                </div>
                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div class="feature-text">
                        <p>The cost is afforadble, We provide some discount to those patient who use our website more than 3 times.</p>
                    </div>
                </div>
            </div>
            <div class="feature-img">
                <img src="image/image_original.webp" height="400px">
            </div>
        </div>
    </section>
    <script>
        var navlinks= document.getElementById("navlinks");
        function Showmenu(){
            navlinks.style.right="0";
        }
        function hidemenu(){
            navlinks.style.right="-200px";
        }
    </script>
    <!-- Footer -->
    <section id="Footer">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>To know more about us</h1>
 </div>
 <div class="footer-row">
    <div class="footer-left">
        <h3>Opening Hours</h3>
         <p><i class="fa fa-clock-o"></i>24hrs our service available</p>
         </div>
    <div class="footer-right">
        <h3>Get in touch with us</h3>
        <p>Goldhunga, Kathmandu,<i class="fa fa-map-marker"></i></p>
        <p>doctweb@gmail.com<i class="fa fa-paper-plane"></i></p>
        <p>+977 9849467895<i class="fa fa-phone"></i></p>
        </div>
 </div>
    </section>
    