 <?php include("savecontact.php"); ?>
 
 <!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="utf-8" />
    <title>Candi.ai</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <link
      rel="shortcut icon"
      href="images/Candi-AI-06.png"
      type="image/x-icon"
    />
    <link rel="icon" href="images/Candi-AI-06.png" type="image/x-icon" />
    <!--<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/clay/lib/css/atlas.css'><link rel="stylesheet" href="./style.css">-->
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
     <!-- New CSS File Added On 06-06-2022 -->
     <link href="new_responsive.css" rel="stylesheet" type="text/css" />
 
    <style>
    .text-center{
    text-align: center !important;
    border: 1px solid #FFA737;
    width: 30%;
    padding: 10px 25px;
    display: block;
    margin: 0px auto;
    border-radius: 10px;
    background: #FFA737;
    }
    .main-menu .navigation > li > a {
         color:#FFA737;
        }
         
    .main-menu .navigation > li > a:hover{
         color: #FFC217;
    }
    .work-block.-type-4:hover .icon-wrap{
        background-color: orange;
    }
       
         .row.counter {
    /*background: orange;*/
    border-radius: 22px;
    height: 85px;
        width: 500px;
}
.fun-fact-section .count-box{
        color: black;
        margin-top: 18px;
}
.fun-fact-section .counter-title{
        color: black;
    
}
.user-icon-color-9 {
  background-color: #FFF;
  box-shadow: 0 0 0 1px #E7E7ED;
  color: #fe8101;
}
.hover a:hover{
    background-color: orange !important;
} 
.banner-section-two{
    height:auto!important;
}
.banner-section-two:before {
    position: absolute;
    left: 0;
    /* top: 95px; */
    top: 0px;
    height: 350px!important;
    width: 100%;
    background-image: url(images/bg-01.png) !important;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    content: "";
}
   
   .contact-form{
        padding: 40px 20px 0px 20px;
        border: solid 1px #dfe3e4;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgb(0 0 0 / 5%);
        margin-top: 15px;
        background: url(images/background/pattern_light_top-left.svg) no-repeat left top,url(images/background/pattern_light_top-right.svg) no-repeat right -50px #fff;
        margin-top: 79px;
   }
   .contact-form label{
        font-size: 18px;
        width: 130px;
        color: #33475b;
        display: block;
        float: none;
        width: auto;
        font-weight: 500;
        line-height: 20px;
        padding-top: 10px;
        margin-bottom: 4px;
        font-family: 'Poppins';
   }
   .contact-form .form-control{
        display: inline-block;
        min-height: 40px;
        padding: 9px 10px;
        font-size: 18px;
        font-family: 'Poppins';
        font-weight: normal;
        line-height: 22px;
        color: #33475b;
        border: 1px solid #cbd6e2;
        box-sizing: border-box;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        
   }
   .contact-form input[type="radio"]{
        width: 20px;
        height: 20px;
        border-radius: 25px;
        min-height:auto;
   }
   .contact-form .btn-submit{
        font-family: 'Poppins';
        margin: 0;
        cursor: pointer;
        display: inline-block;
        font-weight: 700;
        line-height: 12px;
        position: relative;
        text-align: center;
        transition: all .15s linear;
        background-color: #ffa737;
        border-color: #ffa737;
        color: #fff;
        border-radius: 3px;
        border-style: solid;
        border-width: 1px;
        font-size: 14px;
        padding: 12px 24px;
   }
   .contact-containt{
       padding:10px 25px;
   }
   .contact-containt .site-info{
      width:100%;
   }
   .contact-containt .site-logo{
        width:40%;
        height:inherit;
   }
   .site-logo > div{
       height:100%;
   }
   .site-logo > div > img{
       height:inherit;
       margin-top:69px;
   }
   .contact-containt .contain-section{
       padding:10px 0px;
   }
   .contain-section h3{
       color:#ffa737;
       font-size:1.25rem;
   }
   .contain-section span, .contain-section span a{
       color:#33475b;
       font-size:16px;
   }

    </style>
  </head>

<body
    data-anm=".anm"
    style="background-image: url(./images/featured_jobs.jpg)"
  >

  <div class="page-wrapper">

    <!-- Preloader -->
  

    <!-- Main Header-->
         <header class="main-header alternate -type-14">
        <div class="auto-container">
          <!-- Main box -->
          <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer w-100 justify-content-between">
              <div class="logo-box">
                <div class="logo">
                  <a href="index.html"
                    ><img src="images/Candi-AI-07.png"
                      alt=""
                      title=""
                      style="height: 65px; width: 239.3px"
                  /></a>
                </div>
              </div>

              <nav class="nav main-menu" >
                <ul class="navigation" id="navbar" >
                  <li class="dropdown has-mega-menu"  >
                    <a href="index.html">Home</a>
                  </li>
                  <li class="dropdown">
                  <a href="javascript:void(0);">About Us</a>
                  <ul>
                    <li><a href="overview.html">Overview</a></li>
                    <!--<li><a href="">Vision</a></li>-->
                    <!--<li><a href="">Values</a></li>-->
                    <!--<li><a href="">Media</a></li>-->
                    <!--<li><a href="blog.html">Blogs</a></li>-->
                    
                  </ul>
                </li>

               
                   <li class="dropdown has-mega-menu" >
                    <a href="product.html">Product</a>
                  </li>
                   
               
                  
                  <li class="dropdown">
                  <a href="javascript:void(0);">Services</a>
                  <ul>
                    <li><a href="services.html#staff">Staffing Solutions</a></li>
                    <li><a href="services.html#rpo">RPO</a></li>
                    <li><a href="services.html#project">Project Consulting</a></li>
                    
                  </ul>
                </li>
                  <li >
                    <a href="contact.php"><span>Contact Us</span></a>
                  </li>
                  
                  <li>
                     <div class="dropdown user-btn show">
                         <button class="btn p-0 rounded-circle " id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <div class="sticker sticker-circle sticker-light user-icon-color-9 sticker-lg" style="padding: 4px 0px;border-radius: 50px;width: 45px;height: 45px;font-size: 25px;background: #fe8101;color: #ffffff;">
                                 <i class="fa fa-user"></i>
                             </div>
                         </button>

                         <div class="dropdown-menu dropdown-menu-personal-menu user-ul d-none show" ref="menu">
                             <div class="hover">
                                 <ul>
                                     <li><a class="dropdown-item" href="https://main.solicitous.cloud/candi2/portal/superio/login.php">Login as Jobseeker</a></li>
                                     <li><a class="dropdown-item" href="https://main.solicitous.cloud/portal/page-login.php">Login as Employer</a></li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                 </li>
                  
                  
                  
                  <!--<li><a href="" class="call-modal icon-user-dash"></a></li>-->
                  <!-- Only for Mobile View -->
                 
                </ul>
              </nav>
              <!-- Main Menu End-->
            </div>

            <!-- <div class="outer-box">
              
              <div class="btn-box">
                <a
                  href="login-popup.html"
                  class="theme-btn btn-style-six call-modal"
                  >Login / Register</a
                >
                <a
                  href="dashboard-post-job.html"
                  class="theme-btn btn-style-five"
                  ><span class="btn-title">Job Post</span></a
                >
              </div>
            </div> -->
          </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
          <div class="logo">
            <a href="index.html"><img src="images/Candi-AI-07.png" alt="" title="" /></a>
          </div>

          <!--Nav Box-->
          <div class="nav-outer clearfix">
            <div class="outer-box">
              <!-- Login/Register -->
              <div class="login-box">
                <a href="#" class="call-modal"
                  ><span class="icon-user"></span
                ></a>
              </div>

              <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"
                ><i class="fa fa-bars" aria-hidden="true"></i>
</a>
            </div>
          </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
      </header>
      <!--End Main Header -->

    <!-- Banner Section-->
         <section class="banner-section-two" id="about">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 banner">
             <div class="auto-container">
                 <div class="row">
                     <div class="content-column col-lg-12 col-md-12 col-sm-12">
                         <div class="inner-column wow fadeInUp">
                             <div class="title-box">
                                  <h3 class="heading-title-h2" > Contact Us </h3>
                                  </div>
                            </div>
                             </div>


                     <!--<div class="image-column col-lg-5 offset-xl-1 col-md-12">-->
                     <!--    <div class="image-box">-->
                     <!--        <figure class="main-image anm" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2">-->
                     <!--            <img src="images/" alt="" />-->
                     <!--        </figure>-->
                     <!--    </div>-->
                     <!--</div>-->
                 </div>
             </div>
            </div>
          </div>
         </div>
         </section>

    


    <!--contact-->
      <section class="layout-pt-120 layout-pb-120 py-3" id="5">
        <div class="auto-container">
        <br>
          <center>
            <div class="sec-title mt-4">
              <h2 class="heading-title-h2" style="margin-top:10px"></h2>
              <!--<div class="text">-->
              <!--  Lorem ipsum dolor sit amet elit, sed do eiusmod tempor-->
              <!--</div>-->
            </div>
          </center>
          <div class="row justify-content-center py-3">
            <!-- Image Column -->
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="inner-column pt-0 pb-0 wow fadeInRight">
                <!-- Contact Form -->
                <div class="contact-form">
                  <!--Contact Form-->
                  <form method="post" action="#" id="email-form">
                    <div class="row append-section">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <!--<div class="response"></div>-->
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>First Name</label>
                        <input type="text" name="first" class="form-control" placeholder="First Name" required />
                      </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>Last Name</label>
                        <input type="text" name="last" class="form-control" placeholder="Last Name" required />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="Your Phone" required />
                      </div>

                      <!--<div class="col-lg-12 col-md-12 col-sm-12 form-group">-->
                      <!--  <label>Subject</label>-->
                      <!--  <input type="text" name="subject" class="form-control" placeholder="Subject " required />-->
                      <!--</div>-->
                      
                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>How can we help you?*</label>
                        <label>
                            <input type="radio" name="subject" num="1" class="radio-subject" value="I'd like a product demo/free trial" required > I'd like a product demo/free trial
                        </label>
                        <label>
                            <input type="radio" name="subject" num="2" class="radio-subject" value="I want to talk to sales" required > I want to talk to sales
                        </label>
                        <label>
                            <input type="radio" name="subject" num="3" class="radio-subject" value="I need platform support" required > I need platform support
                        </label>
                        <label>
                            <input type="radio" name="subject" num="4" class="radio-subject" value="I have a product integration suggestion" required > I have a product integration suggestion
                        </label>
                        <label>
                            <input type="radio" name="subject" num="5" class="radio-subject" value="I  have a general comment/question" required > I  have a general comment/question
                        </label>
                      </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                             <div class="text-center"><button type="submit" style="color: #FFFFFF;">Send Message</button></div>
                            
                          </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column contact-containt">
                    <div class="site-info">
                        <div class="site-logo">
                            <div>
                                <img src="images/Candi-AI-07.png">
                            </div>
                        </div>
                        <div class="site-other">
                            
                        </div>
                    </div>
                    <div class="contain-section">
                        <h3 style="font-family: 'Poppins';">A Product of Candisource Technology Solutions Pvt. Ltd.</h3>
                    </div>
                    <div class="contain-section">
                        <h3 style="font-family: 'Poppins';"><i class="fa fa-envelope"></i> Sales & Marketing</h3>
                        <span>
                            <a href="mailto:sales@candi.ai" style="font-family: 'Poppins';">sales@candi.ai</a>
                        </span>
                        <address></address>
                    </div>
                    <div class="contain-section">
                        <h3 style="font-family: 'Poppins';"><i class="fa fa-handshake" ></i>Support</h3>
                        <span>
                            <a href="mailto:support@candi.ai" style="font-family: 'Poppins';">support@candi.ai</a>
                        </span>
                        <address></address>
                    </div>
                    <div class="contain-section">
                        <h3 style="font-family: 'Poppins';"><i class="fa fa-phone fa-flip-horizontal"></i> Contact No</h3>
                        <span>
                            <a href="tel:+910000000000" style="font-family: 'Poppins';">+91 00000 00000</a>
                        </span>
                        <address></address>
                    </div>
                    <div class="contain-section">
                        <h3 style="font-family: 'Poppins';"><i class="fa fa-map-marker"></i> Address</h3>
                        <span></span>
                        <address style="font-family: 'Poppins';">Delhi - India | Delaware - US State.</address>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!--end contact-->
      

    
      <!-- Main Footer -->
    <footer class="main-footer style-two">
        <div class="container-fluid">
            <!--Widgets Section-->
            <div class="widgets-section" style="padding-top:50px">
                <div class="row">
                    <div class="big-column col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-column d-flex float-right links-widget-2">
                            <div class="logo">
                                <img src="images/Candi-AI-07.png" style="width:150px;" />
                            </div>
                        </div>
                    </div>
                    <div class="big-column col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-column">
                            <div class="footer-widget links-widget links-widget-2">
                                <div class="footer-widget">
                                    <h4 class="widget-title" style="color:#FFA737">Important Links</h4>
                                    <div class="widget-content">
                                        <div class="widget-content d-flex">
                                            <ul class="list">
                                                <li><a href="#">Terms & Conditions </a></li>
                                                <li><a href="#">FAQ's</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Disclaimer</a></li>
                                                <li><a href="#">Subscribe</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="big-column col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-column">
                            <div class="footer-widget links-widget links-widget-2">
                                <div class="footer-widget">
                                    <h4 class="widget-title" style="color:#FFA737">Quick Links</h4>
                                    <div class="widget-content">
                                        <div class="widget-content d-flex">
                                            <ul class="list">
                                                <li><a href="overview.html">About Us</a></li>
                                                <li><a href="employer-landing.html">Employer</a></li>
                                                <li><a href="landing.html">Jobseeker</a></li>
                                                <!--<li><a href="#">Blogs</a></li>-->
                                                <li><a href="product.html">Pricing</a></li>
                                                <li><a href="services.html">Services</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="big-column col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-detail links-widget-2">
                            <div class="phone-num">
                                <h5 class="widget-title" style="color:#FFA737">Contact Us</h5>
                                <a class="mail" href="#">
                                    <i class="fas fa-envelope"></i> Sales & Marketing<br>
                                    <span class="spn-mail">sales@candi.ai</span>
                                </a>
                                <a class="mail" href="#">
                                    <i class="fas fa-envelope"></i> Support<br>
                                    <span class="spn-mail">support@candi.ai</span>
                                </a>
                                 <!--<a href="#"><i class="fa fa-phone"> </i></a>-->
                            </div>
                            <div class="address">
                                <div class="social-linkss">
                                    <a href="https://www.facebook.com/Candiai-105940091947032/" style="padding-right:20px;color:#ffa737">
                                        <i class="fab fa-facebook-f fa-2x"></i>
                                    </a>
                                    <a href="https://www.instagram.com/candi.ai/"  style="padding-right:20px;color:#ffa737">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/candi-ai-03ab95228/"  style="padding-right:20px;color:#ffa737">
                                        <i class="fab fa-linkedin-in fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="big-column col-xl-12 mt-4">
                        <div class="row">
                            <div class="col-xl-8 col-md-8 col-sm-7 col-xs-12 app-detail">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p style="color:#999;padding-left:10px">
                                            Download Mobile App
                                        </p>
                                    </div>
                                    <div class="col-md-6 app-download-images">
                                        <div>
                                            <a href="javascript:void(0);" data-wow-duration="2s" data-wow-delay="0.2s">
                                                <img src="images/android.png">
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" data-wow-duration="3s" data-wow-delay="0.3s">
                                                <img src="images/applestore.png">
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-5 col-xs-12 text-right">
                                <div class="inq-btn">
                                    <a href="./contact.php" type="button" class="theme-btn btn-style-one" style="">
                                        <i class="fas fa-envelope"></i>&nbsp;Inquiry Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="auto-container">
                        <div class="outer-box">
                            <div class="row">
                                <!--
                                <div class="col-lg-4">
                                    <div class="copyright-text">
                                        <p>Copyright &#169; 2021 - 2022. Candi.AI is a CandiSource Technology Solutions. All right reserved</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="social-links text-center">
                                        <small style="color:rgba(255,255,255,0.5)">Terms And Condition</small>
                                    </div>
                                </div>
                                <div class="col-lg-4 "></div>
                                <div class="col-lg-4 ">
                                    <button type="button" class="theme-btn btn-style-one" style="background:#fe8101; color:white; height:10px;float: right;  padding: 18px 35px 15px 4px;">
                                        <a href="./contact.html" style="color:white;">
                                            Inquiry Now
                                        </a>
                                    </button>
                                </div>
                                -->
                                <center>
                                    <p style="padding-top: 20px;color: white;font-size: 14px;letter-spacing: 0.5px; text-align: center;">
                                        Copyright &#169; 2021 - 2022. Candi.AI is a product of CandiSource Technology Solutions. All right reserved
                                    </p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Bottom-->
        <!--<div class="footer-bottom">-->
        <!--  <div class="auto-container">-->
        <!--    <div class="outer-box">-->
        <!--      <div class="copyright-text">-->
        <!--        <center>-->
        <!--          <p>-->
        <!--            <a href="http://solicitousbusiness.com/"-->
        <!--              >Powered with-->
        <!--              <i class="fa fa-heart" style="color: red"></i> By</a-->
        <!--            ><a href="http://solicitousbusiness.com/"> Solicitous</a>-->
        <!--          </p>-->
        <!--        </center>-->
        <!--      </div>-->
        <!--      <div class="social-links"><p>Terms And Condition</p>-->
        <!--        <a href="https://www.facebook.com/Candiai-105940091947032/"-->
        <!--          ><i class="fab fa-facebook-f"></i-->
        <!--        ></a>-->
        <!--        <a href="https://www.instagram.com/candi.ai/"-->
        <!--          ><i class="fab fa-instagram"></i-->
        <!--        ></a>-->
        <!--        <a href="https://www.linkedin.com/in/candi-ai-03ab95228/"-->
        <!--          ><i class="fab fa-linkedin-in"></i-->
        <!--        ></a>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="scroll-to-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </div>
    </footer>
    <!-- End Main Footer -->
     </div>
     <!-- End Page Wrapper -->

     <script src="js/jquery.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/chosen.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.fancybox.js"></script>
     <script src="js/jquery.modal.min.js"></script>
     <script src="js/mmenu.polyfills.js"></script>
     <script src="js/mmenu.js"></script>
     <script src="js/appear.js"></script>
     <script src="js/anm.min.js"></script>
     <script src="js/ScrollMagic.min.js"></script>
     <script src="js/rellax.min.js"></script>
     <script src="js/owl.js"></script>
     <script src="js/wow.js"></script>
     <script src="js/script.js"></script>
     <script>
        $( ".radio-subject" ).change(function() {
            var html = '';
            var e = this;
            var num = parseInt($(e).attr('num'));
            
            $('.added-div').remove();
            
            if(num == 3)
            {
                html += '<div class="col-lg-12 col-md-12 col-sm-12 form-group added-div">';
                html += '   <label>Product Support</label>';
                html += '   <select class="form-control" name="option" required>';
                html += '       <option value="ats">ATS</option>';
                html += '       <option value="workforce">WorkForce</option>';
                html += '   </select>';
                html += '</div>';
            }
            
            if(num == 4)
            {
                html += '<div class="col-lg-12 col-md-12 col-sm-12 form-group added-div">';
                html += '   <label>Product Webiste</label>';
                html += '   <input type="text" class="form-control" name="product-website" required>';
                html += '   </select>';
                html += '</div>';
                html += '<div class="col-lg-12 col-md-12 col-sm-12 form-group added-div">';
                html += '   <label>Briefly describe the product & how it integrates with CEIPAL:</label>';
                html += '   <input type="text" class="form-control" name="integrates" required>';
                html += '   </select>';
                html += '</div>';
            }
            
            
            if(num == 1 || num == 2 || num == 3 || num == 5)
            {
                html += '<div class="col-lg-12 col-md-12 col-sm-12 form-group added-div">';
                html += '   <label>Your Message</label>';
                html += '   <textarea class="form-control" name="message" placeholder="Write your message..." required="" rows="4"></textarea>';
                html += '</div>';
            }
            $('.append-section').append(html);
        });
     </script>
 </body>
 </html>