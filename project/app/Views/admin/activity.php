<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Activity Form
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url('assets/css/material-dashboard.css?v=2.1.2')?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('assets/demo/demo.css')?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= base_url('assets/img/sidebar-1.jpg')?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          <?=session('club'); ?>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <center>
                <a class="nav-link" >
                    <p>Hi, <?=session('name'); ?></p>
                </a>
            </center>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url('admin/'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url('admin/monthly'); ?>">
              <i class="material-icons">library_books</i>
              <p>Monthly</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/activity'); ?>">
              <i class="material-icons">unarchive</i>
              <p>Activity</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url('admin/'); ?>">
              <i class="material-icons">content_paste</i>
              <p>Reports</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?= base_url('admin/monthly'); ?>">Monthly</a>
                  <a class="dropdown-item" href="<?= base_url('admin/activity'); ?>">Activity</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Activity </h4>
                  <p class="card-category">Complete your activity</p>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/activity_save'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Project Type</label>&nbsp;&nbsp;&nbsp;
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="project" value="new" > One Time Project
                          <input type="radio" name="project" value="old" > Ongoing Project
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'project') : '' ?></span>
                      </div>
                    </div>
                    <b>One Time Project</b>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Is this project a joint project with any other rotary club</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="ongoing" value="yes" > Yes
                          <input type="radio" name="ongoing" value="no" > No
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'ongoing') : '' ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Club Role</label>&nbsp;&nbsp;&nbsp;
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="role" value="head" > Head Club
                          <input type="radio" name="role" value="co_host" > Co-Host Club
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'role') : '' ?></span>
                      </div>
                    </div>
                    <b>Ongoing Project</b>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Is this project a joint project with any other rotary club</label>&nbsp;&nbsp;&nbsp;
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="rotary" value="yes" > Yes
                          <input type="radio" name="rotary" value="no" > No
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'ongoing') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                        <label>Activity Date: </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">From</label>
                          <input type="date" class="form-control" name="date_from">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'date_from') : '' ?></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">To</label>
                          <input type="date" class="form-control" name="date_to">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'date_to') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Activity Title</label>
                          <input type="text" class="form-control" name="title">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'title') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Activity Description</label>
                          <textarea class="form-control" rows="5" name="description"></textarea>
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'description') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Activity Impact on Community</label>
                          <input type="text" class="form-control" name="impact">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'impact') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program Type</label>
                          <input type="text" class="form-control" name="program_type">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'program_type') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Activity Class</label>
                          <input type="text" class="form-control" name="activity_class">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'activity_class') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Activity Type</label>
                          <input type="text" class="form-control" name="activity_type">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'activity_type') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Area of Focus</label>
                          <input type="text" class="form-control" name="area_of_focus">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'area_of_focus') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                          <input type="text" class="form-control" name="category">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'category') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub Category</label>
                          <input type="text" class="form-control" name="sub_category">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'sub_category') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost</label>
                          <input type="text" class="form-control" name="cost">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cost') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Funding Paid by Clubs</label>
                          <input type="text" class="form-control" name="funding">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'funding') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">In kind Contribution</label>
                          <input type="text" class="form-control" name="contribution">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'contribution') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Rotarians #</label>
                          <input type="text" class="form-control" name="rotarians">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'rotarians') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Rotarian Hrs</label>
                          <input type="text" class="form-control" name="rotarian_hrs">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'rotarian_hrs') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Volunteers #</label>
                          <input type="text" class="form-control" name="volunteers">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'volunteers') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Volunteer Hrs</label>
                          <input type="text" class="form-control" name="volunteer_hrs">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'volunteer_hrs') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Speaker #</label>
                          <input type="text" class="form-control" name="speaker">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'speaker') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Rotaractors #</label>
                          <input type="text" class="form-control" name="rotaractors">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'rotaractors') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Rotaractor Hrs</label>
                          <input type="text" class="form-control" name="rotaractor_hrs">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'rotaractor_hrs') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Direct Beneficiaries</label>
                          <input type="text" class="form-control" name="direct">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'direct') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Has it been covered in Print Media</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="media" value="yes" > Yes
                          <input type="radio" name="media" value="no" > No
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'media') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Has it been displayed on Facebook</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="facebook" value="yes" > Yes
                          <input type="radio" name="facebook" value="no" > No
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'facebook') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Has it been displayed on Rotary ShowCase</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="showcase" value="yes" > Yes
                          <input type="radio" name="showcase" value="no" > No
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'showcase') : '' ?></span>
                      </div>
                    </div>                    
                    <div class="row">
                      <div class="col-md-6">
                      <label class="bmd-label-floating">Upload Picture 1</label>
                        <input type="file" id="picture_1" name="picture_1">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'picture_1') : '' ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Picture 1 Description</label>
                          <input type="text" class="form-control" name="p1_desc"> 
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'p1_desc') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <label class="bmd-label-floating">Upload Picture 2</label>
                        <input type="file" id="picture_2" name="picture_2">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'picture_2') : '' ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Picture 2 Description</label>
                          <input type="text" class="form-control" name="p2_desc"> 
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'p2_desc') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <label class="bmd-label-floating">Upload Picture 3</label>
                        <input type="file" id="picture_3" name="picture_3">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'picture_3') : '' ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Picture 3 Description</label>
                          <input type="text" class="form-control" name="p3_desc"> 
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'p3_desc') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <label class="bmd-label-floating">Upload Picture 4</label>
                        <input type="file" id="picture_4" name="picture_4">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'picture_4') : '' ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Picture 4 Description</label>
                          <input type="text" class="form-control" name="p4_desc"> 
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'p4_desc') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <label class="bmd-label-floating">Upload Picture 5</label>
                        <input type="file" id="picture_5" name="picture_5">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'picture_5') : '' ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Picture 5 Description</label>
                          <input type="text" class="form-control" name="p5_desc"> 
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'p5_desc') : '' ?></span>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/js/core/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/js/core/popper.min.js')?>"></script>
  <script src="<?= base_url('assets/js/core/bootstrap-material-design.min.js')?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?= base_url('assets/js/plugins/moment.min.js')?>"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?= base_url('assets/js/plugins/sweetalert2.js')?>"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?= base_url('assets/js/plugins/jquery.validate.min.js')?>"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?= base_url('assets/js/plugins/jquery.bootstrap-wizard.js')?>"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?= base_url('assets/js/plugins/bootstrap-selectpicker.js')?>"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?= base_url('assets/js/plugins/bootstrap-datetimepicker.min.js')?>"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?= base_url('assets/js/plugins/jquery.dataTables.min.js')?>"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?= base_url('assets/js/plugins/bootstrap-tagsinput.js')?>"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?= base_url('assets/js/plugins/jasny-bootstrap.min.js')?>"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?= base_url('assets/js/plugins/fullcalendar.min.js')?>"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?= base_url('assets/js/plugins/jquery-jvectormap.js')?>"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url('assets/js/plugins/nouislider.min.js')?>"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?= base_url('assets/js/plugins/arrive.min.js')?>"></script>
  <!-- Chartist JS -->
  <script src="<?= base_url('assets/js/plugins/chartist.min.js')?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url('assets/js/plugins/bootstrap-notify.js')?>"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/js/material-dashboard.js?v=2.1.2')?>" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url('assets/demo/demo.js')?>"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>