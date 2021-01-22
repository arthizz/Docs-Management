<?php
  require_once '../includes/connection.php';
  session_start();
  if(isset($_SESSION['user'])){
    
   

  }else{
     echo "<script>window.open('../index.php','_self')</script>";
  }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <meta name="description" content="Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse pt-5">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="fas fa-tachometer-alt"></i> Dashboard </a>
                    </li>
                    <h3 class="menu-title">Operate</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="account_table.php" class="dropdown-toggle"> <i class="fas fa-table"></i> Account</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="project_table.php" class="dropdown-toggle"> <i class="fas fa-table"></i> Project</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="add_projects.php" class="dropdown-toggle" > <i class="fas fa-plus-circle"></i> Add Projects </a>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="add_certificate.php" class="dropdown-toggle" > <i class="fas fa-plus-circle"></i> Add Certificate </a>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="add_account.php" class="dropdown-toggle" > <i class="fas fa-plus-circle"></i> Add Account</a>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="results.php" class="dropdown-toggle"> <i class="fas fa-share-square"></i> Logs</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="borrow_history.php" class="dropdown-toggle"> <i class="fas fa-share-square"></i> Borrow History</a>
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area float-right">
                      <button class="btn btn-primary btn-xs" style="border-radius: 5px;" onClick="window.open('../studentpage/homepage.php', '_self',); window.close();">Go To Client Page</button>
                        <button class="btn btn-danger btn-xs" style="border-radius: 5px;" onClick="window.open('../api/logout.php', '_self',); window.close();">Sign Out</button>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM user_tbl Where cID = :id");
        $stmt->bindparam(":id",$id);
        $stmt->execute();

        $ROW = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

         <div class="content mt-3">
            <div class="col-md-12">
                <div class="container mx-auto">
                    <div class="card">
                      <div class="card-header">
                        Edit Flight
                      </div>
                      <div class="card-body">
                        <div class="col-md-6">
                            <form action="../api/edit-process.php" method="post">
                              <div class="form-group">
                                <input type="hidden" class="form-control" name="id" required value="<?=$ROW['cID']?>">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="txtfname" required value="<?=$ROW['cFname']?>">
                              </div>
                              <div class="form-group">
                                <input placeholder="Last Name" class="textbox-n form-control" type="text" name="txtlname" value="<?=$ROW['cLname']?>">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Course" name="txtcourse" value="<?=$ROW['cCourse']?>">
                              </div>
                              <?php
                              $stmt1 = $conn->prepare("SELECT * FROM account_tbl WHERE cID = :id");
                              $stmt1->bindparam(":id", $id);
                              $stmt1->execute();
                              $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
                              ?>

                              <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="txtlevel">
                                      <option value="" disabled selected hidden>Account Level</option>
                                      <option value="Student">Student</option>
                                      <option value="Admin">Admin</option>
                                    </select>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="txtusername" value="<?=$row1['cUsername']?>">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="txtpassword" value="<?=$row1['cPassword']?>">
                              </div>
                              
                        </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                      </div>
                      <div class="card-footer text-muted">
                      </div>
                    </div>
                </div>
            </div>
           


           


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    

</body>
</html>
