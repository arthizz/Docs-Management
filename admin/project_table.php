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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="https:cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <script type="text/javascript">
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
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
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        

                        
                    </div>
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

        

        <div class="content mt-3">
           
           <table class="table" id="myTable">
              <thead>
                <tr>
                  <th colspan="5" class="text-center">Project Table</th>
                </tr>
                <tr>
                  <th scope="col">Project Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Author</th>
                  <th scope="col">Availability</th>
                  <th scope="col">Category</th>
                  <th scope="col">Operate</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = $conn->prepare("SELECT * FROM item_tbl");
                $sql->execute();

                while($row = $sql->fetch(PDO::FETCH_ASSOC)){

                ?>

                <tr>
                  <td><?=$row['cItem_name']?></td>
                  <td><?=$row['cDescription']?></td>
                  <td><?=$row['cAuthor']?></td>
                  <td><?=$row['cAvailability']?></td>
                  <td><?=$row['cCategory']?></td>
                  <td>

                    <a href="../api/delete_project.php?id=<?=$row['cID']?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>

                <?php
            }
                ?>
              </tbody>
            </table>


           


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
