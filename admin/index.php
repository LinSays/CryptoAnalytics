<?php 
  if(isset($_GET["page"])){
    $page = $_GET["page"];
  }else{
    $page = 1;
  }
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "crypto_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT COUNT(*) as count FROM tokens";
  if ($result = $conn->query($sql)) {
      $result = $result->fetch_assoc();
      $count_crypto = $result['count'];
  } else {
    $count_crypto = 0;
  }
  $limit = 10;
  $total_pages = ceil($count_crypto / $limit); 
  $offset = ($page-1)*10;
  $sql = "SELECT * FROM tokens LIMIT $limit OFFSET $offset";
  $cryptos = array();
  if ($result = $conn->query($sql)) {
    while($row = $result->fetch_assoc()){
      array_push($cryptos, $row);
    }
  }else{
    die("error");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Crypto-Admin</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-glass page-header-inverse main-content-boxed">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
          <div class="content-header-section align-parent">
            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
              <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Side Overlay -->

            <!-- User Info -->
            <div class="content-header-item">
              <a class="img-link mr-5" href="be_pages_generic_profile.html">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar0.jpg" alt="">
              </a>
              <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
            </div>
            <!-- END User Info -->
          </div>
        </div>
        <!-- END Side Header -->

      </aside>
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
              <!-- Logo -->
              <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
              </span>
              <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
              </button>
              <!-- END Close Sidebar -->

              <!-- Logo -->
              <div class="content-header-item">
                <a class="link-effect font-w700" href="/index.php">
                  <i class="si si-fire text-primary"></i>
                  <span class="font-size-xl text-dual-primary-dark">Crypto</span><span class="font-size-xl text-primary">base</span>
                </a>
              </div>
              <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
              <!-- Visible only in mini mode -->
              <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar0.jpg" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="#">
                  <img class="img-avatar" src="assets/media/avatars/avatar0.jpg" alt="">
                </a>
                <ul class="list-inline mt-10">
                  <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="#">J. Smith</a>
                  </li>
                  <li class="list-inline-item">
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                      <i class="si si-drop"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark" href="../index.php">
                      <i class="si si-logout"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              <ul class="nav-main">
                <li class="open">
                  <a class="active" href="index.php">Cryptos</a>
                </li>
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Layout Options (used just for demonstration) -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-wrench"></i>
              </button>
              <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                <h6 class="dropdown-header">Color Themes</h6>
                <div class="row no-gutters text-center mb-5">
                  <div class="col-2 mb-5">
                    <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-2 mb-5">
                    <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-2 mb-5">
                    <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-2 mb-5">
                    <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-2 mb-5">
                    <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                  <div class="col-2 mb-5">
                    <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                      <i class="fa fa-2x fa-circle"></i>
                    </a>
                  </div>
                </div>
                <h6 class="dropdown-header">Header</h6>
                <div class="row gutters-tiny text-center mb-5">
                  <div class="col-6">
                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                  </div>
                </div>
                <h6 class="dropdown-header">Sidebar</h6>
                <div class="row gutters-tiny text-center mb-5">
                  <div class="col-6">
                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                  </div>
                </div>
                <div class="d-none d-xl-block">
                  <h6 class="dropdown-header">Main Content</h6>
                  <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                </div>
                <div class="dropdown-divider"></div>
              </div>
            </div>
            <!-- END Layout Options -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block">J. Smith</span>
                <i class="fa fa-angle-down ml-5"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">

                <a class="dropdown-item" href="../index.php">
                  <i class="si si-logout mr-5"></i> Sign Out
                </a>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
          <div class="content-header content-header-fullrow">
            <form action="be_pages_generic_search.html" method="post">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- Close Search Section -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-times"></i>
                  </button>
                  <!-- END Close Search Section -->
                </div>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
              <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo26@2x.jpg');">
          <div class="bg-black-op-75">
            <div class="content content-top content-full text-center">
              <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Cryptos</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">Lorem Ipsum ...</h2>
              </div>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
          <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
              <a class="breadcrumb-item" href="#">Admin</a>
              <span class="breadcrumb-item active">Cryptos</span>
            </nav>
          </div>
        </div>
        <!-- END Breadcrumb -->
        <!-- Page Content -->
        <div class="content">
          <!-- Overview -->
          <h2 class="content-heading">Overview</h2>
          <div class="row gutters-tiny">
            <!-- All Products -->
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                  <div class="block-options">
                    <div class="block-options-item">
                      <i class="fa fa-circle-o fa-2x text-info-light"></i>
                    </div>
                  </div>
                  <div class="py-20 text-center">
                    <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="<?=$count_crypto?>">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">All Cryptos</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- END All Products -->

            <!-- Add Product -->
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-link-shadow" href="new_crypto.php">
                <div class="block-content block-content-full block-sticky-options">
                  <div class="block-options">
                    <div class="block-options-item">
                      <i class="fa fa-archive fa-2x text-success-light"></i>
                    </div>
                  </div>
                  <div class="py-20 text-center">
                    <div class="font-size-h2 font-w700 mb-0 text-success">
                      <i class="fa fa-plus"></i>
                    </div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">New Crypto</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- END Add Product -->
          </div>
          <!-- END Overview -->

          <!-- Products -->
          <div class="content-heading">
            Cryptos (<?=$count_crypto?>)
          </div>
          <div class="block block-rounded">
            <div class="block-content">
              <!-- Products Table -->
              <table class="table table-borderless table-striped">
                <thead>
                  <tr>
                    <th style="width: 100px;">No</th>
                    <th class="d-none d-sm-table-cell">Name</th>
                    <th class="d-none d-sm-table-cell">Price</th>
                    <th>Total Supply</th>
                    <th class="d-none d-md-table-cell">Market Cap</th>
                    <th class="d-none d-md-table-cell">Logo</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    for($i=0;$i<count($cryptos);$i++){
                      ?>
                        <tr>
                          <td>
                            <span class="font-w600"><?=$i+1?></span>
                          </td>
                          <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success"><?=$cryptos[$i]['name']?></span>
                          </td>
                          <td class="d-none d-sm-table-cell">
                          <?=$cryptos[$i]['price']?></td>
                          <td>
                            <span ><?=$cryptos[$i]['total_supply']?></span>
                          </td>
                          <td class="d-none d-md-table-cell">
                            <span ><?=$cryptos[$i]['market_cap']?></span>
                          </td>
                          <td class="d-none d-md-table-cell">
                            <img src="<?='upload/'.$cryptos[$i]['logo']?>" width="100" height="100"/>
                          </td>
                          <td class="d-none d-md-table-cell">
                            <a class="action btn btn-info col-sm-6" style="margin-right:10px;margin-bottom:10px" href="edit_crypto.php?id=<?=$cryptos[$i]['id']?>"><i class="fa fa-edit" ></i></a>
                            <button class="action btn btn-danger col-sm-6" onclick="remove_crypto(`<?=$cryptos[$i]['id']?>`)"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                    } 
                  ?>
                  
                </tbody>
              </table>
              <!-- END Products Table -->

              <!-- Navigation -->
              <nav aria-label="Products navigation">
                <ul class="pagination justify-content-end">
                  <li class="page-item">
                    <?php 
                     $nextpage = $page+1;
                     $prevpage = $page-1;
                     if($prevpage<1)
                        $prevpage = 1;
                      if($nextpage > $total_pages)
                        $nextpage = $total_pages;
                    ?>
                    <a class="page-link" href="index.php?page=<?=$prevpage?>" aria-label="Previous">
                      <span aria-hidden="true">
                        <i class="fa fa-angle-left"></i>
                      </span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <?php 
                    $pageLink = "";
                    for ($i=1; $i<=$total_pages; $i++) {
                      if($page==$i)
                        $pageLink .= '<li class="page-item active"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';	
                      else
                        $pageLink .= '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';	
                    }       
                    echo $pageLink;
                   
                  ?>
                  <li class="page-item">
                    <a class="page-link" href="index.php?page=<?=$nextpage?>" aria-label="Next">
                      <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- END Navigation -->
            </div>
          </div>
          <!-- END Products -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
    <div class="modal" tabindex="-1" role="dialog" id="del_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h3>Do you really want to remove this crypto?</h3>
          </div>
          <div class="modal-footer">
            <input type="hidden" id="selected_crypto">
            <button type="button" class="btn btn-primary" onclick="confirm_del()">Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/codebase.core.min.js"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/codebase.app.min.js"></script>
    <script>
      function remove_crypto(id){
        $("#del_modal").modal('show');
        $("#selected_crypto").val(id);
      }
      function confirm_del(){
        $.ajax({
            url: '../controller.php',
            type: 'post',
            data: {id:$("#selected_crypto").val(),post_type:"remove_crypto"},
            success: function(result){
              if(result==true)
                location.href = "index.php";

            },
            error: function(err){

            }
        });
      }
    </script>
    
  </body>
  
</html>