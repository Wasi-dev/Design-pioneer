<?php include 'layout/header.php';?>
  

     <!--Breadcrumb Area-->
     <section class="breadcrumb-area banner-3" style="background-image:url('../assest/images/service/ecommerce/ecom-bg.png');">
			<!--<div class="niwaxheroscroll">-->
			<!--	<img src="assest/images/shape/shape-a.png" class="niwax nxhs1" alt="icon" data-rellax-speed="4">-->
			<!--	<img src="assest/images/shape/shape-b.png" class="niwax nxhs2" alt="icon" data-rellax-speed="-3">-->
			<!--	<img src="assest/images/shape/shape-f.png" class="niwax nxhs3" alt="icon" data-rellax-speed="1">-->
			<!--	<img src="assest/images/shape/shape-d.png" class="niwax nxhs4" alt="icon" data-rellax-speed="-5">-->
			<!--	<img src="assest/images/shape/shape-e.png" class="niwax nxhs5" alt="icon" data-rellax-speed="-2">-->
			<!-- </div>-->
			<!-- <div class="gradient-bg">-->
				<!--Add Your Content Here-->
			<!--	 </div>-->
          <div class="text-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 v-center">
                  <div class="bread-inner">
                    <div class="bread-title">
                      <h2>Have Questions?<br> Let Our Team Help You</h2>
					  <p>All it takes is a single call or email to get started. You'll speak directly with a qualified professional who will listen carefully to your goals and aspirations before giving you advice and guidance to help you succeed. We offer a free consultation and quote without obligation, so there's no risk to you.</p>
						 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--End Breadcrumb Area-->

 <!-- form -->
 <section class="enquire-form pad-tb">
	<div class="container">
	<div class="row light-bgs">
	<div class="col-lg-6">
	<div class="common-heading text-l">
	<span>Contact Now</span>
	<h2 class="mt0">Have Question?<br> Write a Message</h2>
	</div>
	<div class="form-block">
	    	<form action="mail.php" method="post" name="feedback-form">
			<input type="hidden" class="pkg_nme" name="package">
 <input type="hidden" name="link" value="<?php echo $link ?>">
		<div class="fieldsets row">
			<div class="col-md-6"><input type="text" placeholder="Full Name" name="name" required=""></div>
			<div class="col-md-6"><input type="email" placeholder="Email Address" name="email" required=""></div>
		</div>
		<div class="fieldsets row">
			<div class="col-md-12"><input type="tel" placeholder="Contact Number" name="phone" required=""></div>
		</div>
		<div class="fieldsets"><textarea placeholder="Message" name="msg" required=""></textarea></div>

		<div class="fieldsets mt20">
		    <input type="submit" name="submit3" data-sku="Contact Now ~ Form"   class="pkg_btn lnk btn-main bg-btn sum-btn" value="Submit">
	    </div>
		<p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
	</form>
	</div>
	</div>
	<div class="col-lg-6 v-center">
	<div class="enquire-image">
	<img src="assest/images/about/hellopic.png" alt="enquire" class="img-fluid">
	</div>
	</div>
	</div>
	</div>
				</section>
			 <!-- form -->  
   
             <section class="contact-location pad-tb bglight">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="common-heading">
                                        <span>Our Locations</span>
                                        <h2>Our office</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center upset shape-numm">
                                <div class="col-lg-6 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="office-card">
                                        <div class="skyline-img">
                                            <img src="../A1/assest/images/contact/usa.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="office-text">
                                            <h4><img src="../A1/assest/images/contact/usa-1.png" alt=""> USA</h4>
                                            <h6>Registered Office</h6>
                                             
                                            <p>30 N Gould St Ste R Sheridan, <br>WY 82801</p>
                                            <p><span class="contact-head">Email:</span> <?php echo $email ?></p>
                                            <p><span class="contact-head">Phone:</span> <?php echo $phone ?></p>
                                        </div>
                                    </div>
                                </div>
                            
                             
                            </div>
                        </div>
                    </section>

   
   <!--Start Footer-->
   <?php include 'layout/footer.php';?>
