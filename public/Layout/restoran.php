<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Restoran</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="#" class="logo" >Mangan<span>Bootcamp</span></a>
          <!--logo end-->
          
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">
                          <span class="username">Admin</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="restoran.php">
                          <i class="fa fa-bars"></i>
                          <span>Daftar Restoran</span>
                      </a>
                  </li>
                  <li>
                      <a href="menu.php">
                          <i class="fa fa-list-ul"></i>
                          <span>Daftar Menu</span>
                      </a>
                  </li>
                  <li>
                      <a href="keyword.php">
                          <i class="fa fa-font"></i>
                          <span>Keyword Restoran</span>
                      </a>
                  </li>
                  <li>
                      <a href="kurir.php">
                          <i class="fa fa-circle-o"></i>
                          <span>Kurir</span>
                      </a>
                  </li>
                  <li>
                      <a href="promo.php">
                          <i class="fa fa-usd"></i>
                          <span>Promo</span>
                      </a>
                  </li>
                  <li>
                      <a href="searching.php">
                          <i class="fa fa-search"></i>
                          <span>Searching</span>
                      </a>
                  </li>
                  <li>
                      <a href="slider.php">
                          <i class="fa fa-angle-double-right"></i>
                          <span>Slider</span>
                      </a>
                  </li>
                  <li>
                      <a href="transaksi.php">
                          <i class="fa fa-money"></i>
                          <span>Transaksi</span>
                      </a>
                  </li>
                  <li>
                      <a href="user.php">
                          <i class="fa fa-user"></i>
                          <span>user</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              	  <div class="row">
                      <div class="col-lg-12" align="center"> <h3>Input Data Restoran</h3></div>
                        <section class="panel">                       
                         <div class="col-lg-8">
                            <header class="panel-heading">
                              Silahkan inputkan data Restoran
                            </header>
                          <div class="panel-body">
                               <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="nmresto" class="col-lg-4 control-label">Nama Restoran</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="nmresto" placeholder="Masukkan nama restoran nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="alamat" class="col-lg-4 control-label">Alamat</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="notelepon" class="col-lg-4 control-label">No Telepon</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="notelepon" placeholder="Masukkan no telepon nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="gambar" class="col-lg-4 col-sm-2 control-label">Gambar</label>
                                      <div class="col-lg-8">
                                          <input type="file" class="form-control" id="gambar" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="kategori" class="col-lg-4 control-label">Kategori</label>
                                      <div class="col-lg-8">
                                          <select class="form-control" id="kategori">
                                              <option>Cafe & Resto</option>
                                              <option>Dessert</option>
                                          </select>
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label for="ktbuka" class="col-lg-4 control-label">Keterangan Buka</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="ktbuka" placeholder="Masukkan keterangan buka nya">
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label for="ktresto" class="col-lg-4 control-label">Keterangan Restoran</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="ktresto" placeholder="Masukkan keterangan restoran nya">
                                      </div>
                                   </div>
                                  	<div class="form-group">
                                      <label for="tginput" class="col-lg-4 control-label">Tanggal Input</label>
                                      <div class="col-lg-8">
                                          <input id="tginput" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                      </div>
                                   </div>
                              		<div class="form-group">
                                      <label for="jmrating" class="col-lg-4 control-label">Jumlah Rating</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="jmrating" placeholder="Masukkan jumlah rating nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="keyword" class="col-lg-4 control-label">Keyword </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="keyword" placeholder="Masukkan keyword nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="rating" class="col-lg-4 control-label">Rating </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="rating" placeholder="Masukkan rating nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="timrating" class="col-lg-4 control-label">Rating Tim </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="timrating" placeholder="Masukkan rating nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="revtim" class="col-lg-4 control-label">Review Tim </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="revtim" placeholder="Masukkan review nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="map" class="col-lg-4 control-label">Map </label>
                                   </div>
                                   <div class="form-group">
                                      <label for="maplat" class="col-lg-4 control-label">Latitude </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="maplat" placeholder="Masukkan latitude nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="maplong" class="col-lg-4 control-label">Longtitude </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="maplong" placeholder="Masukkan longtitude nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label  class="col-lg-4 control-label">Reviewer</label>
                                   </div>
                                   <div class="form-group">
                                      <label for="foto" class="col-lg-4 control-label">Foto </label>
                                      <div class="col-lg-8">
                                          <input type="file" class="form-control" id="foto" >
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="nama" class="col-lg-4 control-label">Nama </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="nama" placeholder="Masukkan nama nya">
                                      </div>
                                   </div>

                                  	

                                  <div class="form-group">
                                      <div class="col-lg-8">
                                          <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Simpan </button>
                                      </div>
                                  </div>
                              </form>

                          </div>
                          </section>

                          <section class="panel">                       
                         <div class="col-lg-12">
                            <header class="panel-heading">
                              Data Restoran
                            </header>
                              <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-shopping-cart"></i> Restoran</th>
                                  <th><i class="fa fa-book"></i> Alamat</th>
                                  <th><i class="fa fa-mobile"></i> No Telpon</th>
                                  <th><i class="fa fa-picture-o"></i> Gambar</th>
                                  <th><i class="fa fa-archive"></i> Kategori</th>
                                  <th><i class="fa fa-desktop"></i> Keterangan Buka</th>
                                  <th><i class="fa fa-desktop"></i> Keterangan Restoran</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">Vector Ltd</a></td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">Adimin co</a>
                                  </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#"> boka soka</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                 <td> <a href="#">Salba lib</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#">Adimin Co</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#"> adimin coM</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#">Vector</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#"> Admin Lte</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                          </section>
                  </div>
                  </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
             
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 &copy; ManganBootcamp Summer.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
  
    <!--this page plugins-->

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>
  </body>
</html>
