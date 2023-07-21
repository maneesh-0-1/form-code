<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>Contact</title>
   <link rel="icon" type="image/x-icon" href=".\images\logos\Fav-32x32.png">

      <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style-nursing.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive-nursing.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

</head>

<body>
   <div class="body-inner">
      <!-- Header start -->
      <header id="header" class="header header-transparent">
         <?php include 'Nav.php';?>
      </header>
      <!--/ Header end -->

      <div id="page-banner-area" class="page-banner-area" style="background-image:url(./images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Welcome</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Home /</a>
                  </li>
                  <li>
                     Contact Us
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->

      <!-- ts intro start -->
      <section class="ts-contact">
         <div class="container">
            <div class="row">
                           
               <div class="col-lg-5">
                  <h2 class="section-title text-center">Contact Information</h2>
                  <div class="single-intro-text single-contact-feature">
                     <h3 class="ts-title">Tickets info</h3>
                     <p><strong>Office Address:</strong><br>
                        47 Kent View Road<br>
                        Basil Road<br>
                        Basildon England<br>
                        SS16 4JX<br>
                        United Kingdom.
                     </p>
                     <p><strong>Phone:</strong> 009-215-5595</p>
                     <p><strong>Email:</strong> info@example.com</p>
                     <p><strong>Website:</strong> https://worldconferenceseries.uk</p>


                     <span class="count-number fa fa-info-circle"></span>
                  </div><!-- single intro text end-->
                  <div class="border-shap left"></div>
               </div><!-- col end-->

               <div class="col-lg-7">
                  <h2 class="section-title text-center">Send Message</h2>
                     <form id="contact-form" class="contact-form" action="contact-form.php" method="post">
                        <div class="error-container"></div>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input class="form-control form-control-name" placeholder="First Name" name="name" id="f-name"
                                 type="text" required>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input class="form-control form-control-name" placeholder="Last Name" name="name" id="l-name"
                                 type="text" required>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control form-control-email" placeholder="Email" name="email" id="email"
                                 type="email" required>
                           </div>
                        </div>

                        <div class="col-md-6">
                                 <select class="form-control">
                                    <option class="hidden" >Select Conference</option>
                                    <option>Nursing Health Care</option>
                                 </select>
                           
                        </div>


                         <div class="form-group col-md-12">
                           <textarea class="form-control form-control-message" name="message" id="message" placeholder="Leave Your Message"
                           rows="8" cols="5" required></textarea>
                        </div>

                        <div class="text-center col-md-8">
                           <br>
                           <div id="uc_border_btn_effect_elementor19693" type="submit"> <a href="" class="btn-lg"><span id="uc_style_border_btn_effect_elementor_txt">Send Message</span></a></div>
                        </div>

                        

                     </div>
                     </form>   
                         
               </div>
</div>
               
               

            </div><!-- row end-->
         </div><!-- container end-->

         <div class="speaker-shap">
               <img class="shap2" src="images/shap/home_schedule_memphis1.png" alt="">
            </div>
      </section>
      <div class="speaker-shap">
            <img class="shap1" src="images/shap/home_schedule_memphis2.png" alt="">
         </div>

      
      <!-- ts contact end-->

      
      
		<!-- ts footer area start-->
		<?php include 'Footer.php';?>
		<!-- ts footer area end-->

     

      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>

      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>
      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>

      <!-- Template custom -->
      <script src="js/main.js"></script>

   </div>
   <!-- Body inner end -->
</body>

</html>