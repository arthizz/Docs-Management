<?php
  require_once 'includes/connection.php';
  session_start();
  if(isset($_SESSION['user'])){
    
   echo "<script>window.open('studentpage/homepage.php','_self')</script>";

  }else{
     
  }
?>
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.11.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/ccswshadow-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Index</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rFE5MS5Xx1" once="menu" id="menu2-3">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-4" href="index.html">CCS WAR ROOM</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-primary display-4" href="index.html#features5-h">About</a></li><li class="nav-item"><a class="nav-link link text-primary display-4" href="index.html#slider1-6">Inside</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-primary display-4" href="index.html#features15-a">
                        Team</a>
                </li><li class="nav-item"><a class="nav-link link text-primary display-4" href="index.html#footer1-e">Contact</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4" data-toggle="modal" data-target="#exampleModal"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Login</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/m">site design templates</a></section><section class="header6 cid-rFEbPcrFHN mbr-fullscreen" id="header6-f">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(91, 62, 131);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">DOCUMENT MANAGEMENT SYSTEM OF CCS WAR ROOM</h1>
                
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-white-outline display-4" href="index.html#features5-h"><span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>LEARN MORE</a></div>
            </div>
        </div>
    </div>

    
</section>

<section class="features5 cid-rFHfLwyESu" id="features5-h">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-protect"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        BACKUP</h4>
                    <p class="mbr-text mbr-fonts-style display-7">The Document Management System secures and archives all of the projects of students.</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-file"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        BROWSE</h4>
                    <p class="mbr-text mbr-fonts-style display-7">You can browse the student and alumni's projects made throughout the years.<br><a href="index.html#slider1-6">Check it out.</a></p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-to-local-drive"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        BORROW</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Everyone in CCS has access to browse and borrow projects.</p>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="carousel slide cid-rFE6654NcW" data-interval="false" id="slider1-6">

    

    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="3000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-6" class=" active" data-slide-to="3"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/a-2000x1500.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.4;"></div><img src="assets/images/a-2000x1500.jpg" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"><strong>CERTIFICATES</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">Certificates of Recognition awarded to The College of Computer Studies<br></p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/b-2000x1500.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.4;"></div><img src="assets/images/b-2000x1500.jpg" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"><strong>TROPHIES</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">Accomplishments of the department in school events</p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/d-2000x1500.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.4;"></div><img src="assets/images/d-2000x1500.jpg" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"><strong>SAD</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">Projects submitted in partial fulfillment of the requirements</p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/c-2000x1500.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.4;"></div><img src="assets/images/c-2000x1500.jpg" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"><strong>THESIS</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">Projects submitted by graduating students.</p></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-6"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-6"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="features15 cid-rFE72aBEeB" id="features15-a">

    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">THE TEAM</h2>
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style">Students of The College of Computer Studies - Columban College, Olongapo-INC.<br>Bachelor of Science in Information Technology</h3>

        <div class="media-container-row container pt-5 mt-2">

            <div class="col-12 col-md-6 mb-4 col-lg-4">
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <img src="assets/images/tiffy-660x887.jpeg" alt="Mobirise" title="">
                    </div>
                    <div class="card_back card_cont">
                        <h4 class="card-title display-5 py-2 mbr-fonts-style">
                            Tiffy Aquino</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            The Writer - She deals with all the documentation of the Project.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4 col-lg-4">
                
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <img src="assets/images/img-1233-802x1069.jpeg" alt="Mobirise" title="">
                    </div>
                    <div class="card_back card_cont">
                        <h4 class="card-title py-2 mbr-fonts-style display-5">
                            Janro Lazaro</h4>
                        <p class="mbr-text mbr-fonts-style display-7">The Designer - He is in charge of designing the UI of the System.<br></p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 mb-4 col-lg-4">
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <img src="assets/images/marvin-714x960.jpeg" alt="Mobirise" title="">
                    </div>
                    <div class="card_back card_cont">
                        <h4 class="card-title py-2 mbr-fonts-style display-5">
                            Marvin Mantes</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            The Coder - He deals with the back end of the System.&nbsp;</p>
                    </div>
                </div> 
            </div>

            
        </div>
</div></section>

<section class="cid-rFE7WyZlRJ" id="footer1-e">

    

    <div class="mbr-overlay" style="background-color: rgb(91, 62, 131); opacity: 0.4;"></div>

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.co/">
                        <img src="assets/images/ccswshadow-192x192.png" alt="Mobirise" title="CCS War Room">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address</h5>
                <p class="mbr-text">Main Campus<br>1 First Street, New Asinan,<br>Olongapo City</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contact</h5>
                <p class="mbr-text">
                    Email: janrolazaro@gmail.com<br>Telephone: (047) 222-3329<br>Fax: (047) 222-7781<a href="mailto:janrolazaro@gmail.com" class="text-white"><br></a><br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"></h5>
                <p class="mbr-text"><br><br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 CCS - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: 430px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="api/login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" placeholder="Username" name="txtusername">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"></label>
            <input type="password" class="form-control" placeholder="Password" name="txtpassword">
          </div>
          <button type="submit" class="btn btn-primary btn-block mx-auto">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/mbr-flip-card/mbr-flip-card.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>