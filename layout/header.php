<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
      <title>Design Pioneer Studio | Web Design Agency</title>

</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="MOUDpoxwWxAWuXiDtiOvKcy2oO4ZIwQ0_0vO8upY5J4" />

<link rel="icon" href="" sizes="32x32" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/assest/npm/swiper/swiper-bundle.min.css" />
<link href="assest/css/bootstrap.min.css" rel="stylesheet">
<link href="assest/css/plugin.min.css" rel="stylesheet">
<link href="assest/css/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">


<link href="assest/css/font-poppins?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="assest/css/font-poppins" rel="stylesheet">

<link href="css/style.min.css" rel="stylesheet">
<link href="assest/css/responsive.min.css" rel="stylesheet">
<link href="assest/css/jquery.topbar.min.css" rel="stylesheet">

 <?php include 'config.php';?>

 <?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
</head>
<style>
   .topbar-default {
      /*background-color: linear-gradient(to right, #ea007a 6%, #5a3aff 60%, #3101b7 100%);*/
      background: linear-gradient(to right, #ea007a 6%, #5a3aff 60%, #3101b7 100%);
   }

   .topbar-email a {
      color: #fff;
      padding-right: 10px;
      padding-left: 5px;
   }

   .topbar-text {
      width: 60%;
   }

   .topbar-email {
      width: 40%;
      text-align: end;
   }

   .topbar-email i {
      padding-left: 10px;
   }

   a.headerchat {
      border-right: none;
      color: #fff !important;
      font-weight: bold;
      animation: blink 1s linear infinite;
   }

   @keyframes blink {
      0% {
         opacity: 0;
      }

      50% {
         opacity: .5;
      }

      100% {
         opacity: 1;
      }
   }

   @media (max-width: 1500px) {
      .topbar-text {
         width: 40% !important;
         text-align: end;
      }

      .topbar-email {
         width: 45% !important;
      }
   }

   @media (max-width: 1400px) {
      .topbar-text {
         width: 40% !important;
      }

      .topbar-email {
         width: 45% !important;
      }
   }

   @media (max-width: 1300px) {
      .topbar-text {
         width: 40% !important;
      }

      .topbar-email {
         width: 45% !important;
      }
   }

   @media (max-width: 1200px) {
      .topbar-text {
         width: 35% !important;
      }

      .topbar-email {
         width: 50% !important;
      }
   }

   @media (max-width: 1024px) {
      .topbar-email a {
         font-size: 14px;
      }
   }

   @media (max-width: 768px) {
      div#mynotification {
         display: none;
      }
   }

   .topbar {
      font-size: 16px;
      color: #fff;
      line-height: 28px;
   }

   .topbar-box {
      display: flex;
      align-content: center;
      justify-content: center;
      /*align-items: center;*/
      gap: 20px;
      margin: 0;
      padding-top: 5px;
   }
   /* img.mega-white-logo {
    filter: brightness(47.5);
} */
</style>


<body class="glassmorphism">



   <!--Start Header -->
   <header class="header-pr nav-bg-b main-header navfix fixed-top menu-white">
      <div class="container-fluid m-pad">
         <div class="menu-header">
            <div class="dsk-logo">
               <a class="nav-brand" href="index.php">
                  <img src="assest/images/logo-lite.png" alt="Design Pioneer Studio Logo White" class="mega-white-logo">
                  <img src="assest/images/logo-dark.png" alt="Design Pioneer Studio Logo Dark" class="mega-darks-logo">
               </a>
            </div>

            <div class="custom-nav" role="navigation">
               <ul class="nav-list">
                  <li class="sbmenu">
                     <a href="index.php" class="menu-links">Home</a>
                  </li>
                  <li class="sbmenu">
                     <a href="javascript:;" class="menu-links">Services</a>
                     <div class="nx-dropdown">
                        <div class="sub-menu-section">
                           <div class="container">
                              <div class="col-md-12">
                                 <div class="sub-menu-center-block">
                                    <div class="sub-menu-column">
                                       <div class="menuheading">
                                          <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                             <img src="assest/images/icons/menu-icons/web.png" alt="service">
                                          </div>
                                          <h1><a href="website-development.php">Website Development</a></h1>
                                       </div>
                                       <ul>
                                          <li><a href="wordpress-website-development.php">Wordpress Development</a></li>
                                          <li><a href="front-end-development.php">Front End Development</a></li>
                                          <li><a href="php-development.php">PHP Development</a></li>
                                          <li><a href="back-end-development.php">Back End Development</a></li>
                                          <li><a href="drupal-development.php">Drupal Development</a></li>
                                          <li><a href="open-source-development.php">Open Source Development</a></li>
                                          <li><a href="cms-development.php">CMS Development</a></li>
                                       </ul>


                                       <div class="menuheading">
                                          <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                             <img src="assest/images/icons/menu-icons/branding.png" alt="service">
                                          </div>
                                          <h1><a href="logo-design.php">Logo & Branding</a></h1>
                                       </div>
                                       <ul>
                                          <li><a href="logo-design.php">Logo Design</a></li>
                                          <li><a href="brand-identity.php">Brand Identity</a></li>
                                          <li><a href="ux-&-ui-design.php">UX & UI Design</a></li>
                                          <li><a href="website-design.php">Website Design</a></li>

                                       </ul>



                                    </div>

                                    <div class="sub-menu-column">
                                       <div class="menuheading">
                                          <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                             <img src="assest/images/icons/menu-icons/ecom.png" alt="service">
                                          </div>
                                          <h1><a href="ecommerce.php">Ecommerce Solutions</a></h1>
                                       </div>
                                       <ul>
                                          <li><a href="woocommerce-development.php">Woocommerce Development</a></li>
                                          <li><a href="shopify.php">Shopify Development</a></li>
                                          <li><a href="opencart.php">Opencart Development</a></li>
                                          <li><a href="magento.php">Magento Development</a></li>

                                       </ul>
                                       <div class="menuheading">
                                          <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                             <img src="assest/images/icons/menu-icons/marketing.png" alt="service">
                                          </div>
                                          <h1><a href="explainer-video-animation.php">Video Animation</a></h1>
                                       </div>
                                       <ul>
                                          <li><a href="explainer-video-animation.php">Explainer Video Animation</a></li>
                                          <li><a href="animated-title-trailer.php">Animated Title & Trailer</a></li>
                                          <li><a href="animated-video-ad.php">Animated Video Ad</a></li>
                                          <li><a href="marketing-promo-video-animation.php">Marketing/Promo Video Animation</a></li>

                                       </ul>
                                    </div>
                                    <div class="sub-menu-column">
                                       <div class="menuheading">
                                          <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                             <img src="assest/images/icons/menu-icons/smartphone.png" alt="service">
                                          </div>
                                          <h1><a href="android-development.php">Mobile Application</a></h1>
                                       </div>
                                       <ul>
                                          <li><a href="ios-development.php">IOS Development</a></li>
                                          <li><a href="game-development.php">Game Development</a></li>
                                          <li><a href="android-development.php">Android Development</a></li>
                                          <li><a href="vr-app-development.php">AR/VR App Development</a></li>
                                       </ul>


                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="sbmenu">
                     <a href="portfolio.php" class="menu-links">Portfolio</a>
                  </li>
                  <li class="sbmenu">
                     <a href="packages.php" class="menu-links">Pricing</a>
                  </li>
                  <li class="sbmenu">
                     <a href="about-us.php" class="menu-links">About us</a>
                  </li>
                  <li class="sbmenu">
                     <a href="contact-us.php" class="menu-links">Contact</a>
                  </li>
               </ul>

               <ul class="nav-list right-end-btn">
                  <li class="hidemobile">
                     <a href="tel:<?php echo $phone_link ?>" class="btn-round- btn-br bg-btn2">
                        <i class="fas fa-phone-alt"></i></a>
                  </li>
                  <li class="hidemobile"><a href="#offcanvasExample" data-bs-toggle="offcanvas" data-sku="Request A Quote" class="pkg_btn btn-br bg-btn3 btshad-b2 lnk">Request A Quote
                        <span class="circle"></span></a> </li>

                  <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>
                  <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
               </ul>
            </div>
         </div>

         <!--Mobile Menu-->
         <nav id="main-nav">
            <ul class="first-nav">
               <li><a href="index.php">Home</a></li>
               <li><a href="website-development.php">Website Design</a></li>
               <li><a href="ecommerce.php">Ecommerce Solutions</a></li>
               <li><a href="logo-design.php">Logo & Branding</a></li>
               <li><a href="wordpress-website-development.php">WordPress Development</a></li>
               <li><a href="portfolio.php">Portfolio</a></li>
               <li><a href="packages.php">Pricing</a></li>
               <li><a href="about-us.php">About Us</a></li>
               <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
          </nav>
      </div>
   </header>


   
   <!--End Header -->


     <!--Start sidebar -->
     <div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
      <div class="offcanvas-body">
         <div class="cbtn animation">
            <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
         </div>
         <div class="form-block sidebarform">
            <div class="popups-heading-sec">
               <div class="popup-header">
                  <div class="pop-up-heading">
                     <h2>Looking For An <span> Amazing </span>OFFER?</h2>
                     <h4>Price starting from $99 OFFER?</h4>
                  </div>
                  <div class="popup-bird-img">
                     <img src="assest/images/poptin-bird-flying.gif" />
                  </div>
               </div>
               <!--<div class="form-group col-sm-12 price">-->
               <!--       <h4>Price starting from $99 offer?</h4>-->
               <!--   </div>-->
            </div>
                        <form action="mail.php" method="post" class="shake mt20">
                        <input type="hidden" class="pkg_nme" name="package">
                      <input type="hidden" name="link" value="<?php echo $link ?>">
 
               <div class="row">
                  <div class="form-group col-sm-12">
                     <div class="form-header">
                        <div class="form-heading">
                           <h2>Get Your Design Now</h2>
                           <h1>Limited Time Offer</h1>
                        </div>
                        <div class="form-price">
                           <h3><span>50<sup>%</sup></span>Off</h3>
                        </div>
                        <div class="form-group-img">
                           <img src="assest/images/percentage.png">
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 mt-30">
                     <input type="text" name="name" placeholder="Enter Name" required="">
                     <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-sm-12">
                     <input type="email" name="email" placeholder="Enter Email" required="">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-sm-12">
                     <input type="tel" name="phone" placeholder="Enter Phone Number" required="">
                     <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-sm-12">
                     <textarea type="text" name="msg" placeholder="Message" required=""></textarea>
                     <div class="help-block with-errors"></div>
                  </div>

               </div>
               <input type="submit" name="submit"  class="btn lnk btn-main bg-btn sidebar-btn sum-btn" value="Request A Quote">
               <p class="trm new"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
               <div id="msgSubmit" class="h3 text-center hidden"></div>
               <div class="clearfix"></div>
            </form>
         </div>
         <!--<div class="getintouchblock mt30">-->
         <!--   <h4>Get In Touch</h4>-->
         <!--   <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to-->
         <!--      share with us.</p>-->
         <!--   <div class="media mt15">-->
         <!--      <div class="icondive"><img src="assest/images/icons/call.svg" alt="icon"></div>-->
         <!--      <div class="media-body getintouchinfo">-->
         <!--         <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--   <div class="media mt15">-->
         <!--      <div class="icondive"><img src="assest/images/icons/whatsapp.svg" alt="icon"></div>-->
         <!--      <div class="media-body getintouchinfo">-->
         <!--         <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>-->
         <!--      </div>-->
         <!--   </div>-->

         <!--</div>-->

      </div>
   </div>
   <!--end sidebar -->    
