<?php
  require_once '../includes/connection.php';
  session_start();
  if(isset($_SESSION['user'])){
    
   

  }else{
     echo "<script>window.open('../index.php','_self')</script>";
  }
?>
  
?>


<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../assets/images/ccswshadow-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Homepage</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<style type="text/css">
    a.card:hover{
        background-color: #C69FCA;
    }
    .mbr-fullscreen{
        min-height: 50vh;
    }

</style>
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
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-4" href="homepage.php">CCS WAR ROOM</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php

              $stmt = $conn->prepare("SELECT * FROM account_tbl Where cID = :id");
              $stmt->bindparam(":id", $_SESSION['user']);
              $stmt->execute();

              $row = $stmt->fetch(PDO::FETCH_ASSOC);

              if($row['cLevel'] == 1){
             ?>
            <div class="navbar-buttons mbr-section-btn"><a href="../admin/index.php" class="btn btn-sm btn-primary-outline display-4"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Go To Admin Page</a></div>
            <?php
          }else{
          ?>


          <?php
        }
          ?>
            <div class="navbar-buttons mbr-section-btn"><a href="../api/logout.php" class="btn btn-sm btn-primary-outline display-4"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Logout</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/m">site design templates</a></section><section class="header6 cid-rFEbPcrFHN mbr-fullscreen" id="header6-f">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(91, 62, 131);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1" style="margin-top: 70px;">DOCUMENT MANAGEMENT SYSTEM OF CCS WAR ROOM</h1>
                
            </div>
        </div>
    </div>

    
</section>

<section class="features5 cid-rFHfLwyESu" id="features5-h">
    
    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2" style="color: #5b3e83;">PROJECTS</h2>
        <div class="media-container-row">

          <?php
          $tags = "projects";
          $tags2 = "certificate";
          $stmt = $conn->prepare("SELECT * FROM category_tbl WHERE tags = :tags");
          $stmt->bindparam(":tags",$tags);
          $stmt->execute();

          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          ?>

            <a href="table.php?id=<?=$row['cID']?>" class="card p-3 col-12 col-md-6 col-lg-4" style="border: solid 1px;">
                <div class="card-img pb-3">
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-2">
                        <?=$row['cCategory']?></h4>
                    <p class="mbr-text mbr-fonts-style display-7"><?=$row['description']?></p>
                </div>
            </a>

            <?php
          }
            ?>


            
        </div>
    </div>


    <div class="container pt-5">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2" style="color: #5b3e83;">CERTIFICATES</h2>
        <div class="media-container-row">

    <?php
    $stmt = $conn->prepare("SELECT * FROM category_tbl WHERE tags = :tags2");
    $stmt->bindparam(":tags2",$tags2);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    ?>

            <a href="table_certificate.php?id=<?=$row['cID']?>" class="card p-3 col-12 col-md-6 col-lg-4" style="border: solid 1px;">
                <div class="card-img pb-3">
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-2">
                       <?=$row['cCategory']?></h4>
                    <p class="mbr-text mbr-fonts-style display-7"><?=$row['description']?></p>
                </div>
            </a>

            <?php

          }

          ?>


            
        </div>
    </div>
</section>



<section class="cid-rFE7WyZlRJ" id="footer1-e">

    

    <div class="mbr-overlay" style="background-color: rgb(91, 62, 131); opacity: 0.4;"></div>

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.co/">
                        <img src="../assets/images/ccswshadow-192x192.png" alt="Mobirise" title="CCS War Room">
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
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary btn-block mx-auto">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/popper/popper.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../assets/dropdown/js/nav-dropdown.js"></script>
  <script src="../assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="../assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="../assets/tether/tether.min.js"></script>
  <script src="../assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="../assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="../assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="../assets/mbr-flip-card/mbr-flip-card.js"></script>
  <script src="../assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="../assets/theme/js/script.js"></script>
  <script src="../assets/slidervideo/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>