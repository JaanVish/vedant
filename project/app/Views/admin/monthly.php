<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Monthly Form
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
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/monthly'); ?>">
              <i class="material-icons">library_books</i>
              <p>Monthly</p>
            </a>
          </li>
          <li class="nav-item ">
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
            <a class="navbar-brand" href="javascript:;">Monthly</a>
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
                  <h4 class="card-title">Monthly</h4>
                  <p class="card-category">Monthly Form</p>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/month_save'); ?>" method="post">
                  <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                  <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                  <?php endif ?>

                  <?php if(!empty(session()->getFlashdata('success'))) : ?>
                  <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                  <?php endif ?>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Select Month</label>&nbsp;&nbsp;&nbsp;
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="month" id="month" name="month">
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'month') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Newsletter Published</label>&nbsp;&nbsp;&nbsp;
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="newsletter" value="yes" > Yes
                          <input type="radio" name="newsletter" value="no" > No
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'newsletter') : '' ?></span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantity(if yes)</label>&nbsp;&nbsp;&nbsp;
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="news_q" class="form-control" value="<?= set_value('news_q');?>">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'news_q') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Global Grant Applied</label>&nbsp;&nbsp;&nbsp;
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="radio" name="g_grant" value="yes" > Yes
                          <input type="radio" name="g_grant" value="no" > No
                        </div>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'newsletter') : '' ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Grand ID (if yes)</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="text" name="grand" class="form-control" value="<?= set_value('grand');?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title (if yes)</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="text" name="global" class="form-control" value="<?= set_value('global');?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Amount (if yes)</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="number" name="global_p" class="form-control" value="<?= set_value('global_p');?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">TRF contribution by club (Rs)</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="number" name="trf_club" class="form-control" value="<?= set_value('trf_club');?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'trf_club') : '' ?></span>                        
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TRF contribution by member</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="radio" name="contribution" value="yes" > Yes
                        <input type="radio" name="contribution" value="no" > No
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantity (if yes)</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="number" name="trf_member" class="form-control" value="<?= set_value('trf_member');?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">PHE added</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="radio" name="phe" value="yes" > Yes
                        <input type="radio" name="phe" value="no" > No
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantity (if yes)</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="number" name="phe_q" class="form-control" value="<?= set_value('trf_member');?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">MPHF added</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" name="mphf" class="form-control" value="<?= set_value('mphf');?>">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'mphf') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Major Donored added</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" name="maj" class="form-control" value="<?= set_value('maj');?>">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'maj') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">AKS added (Rs)</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" name="aks" class="form-control" value="<?= set_value('aks');?>">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'aks') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Asha Kiran added (Rs)</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" name="asha" class="form-control" value="<?= set_value('asha');?>">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'asha') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">New Member added</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" name="new" class="form-control" value="<?= set_value('new');?>">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'new') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Member Terminated</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" name="mem_term" class="form-control" value="<?= set_value('mem_term');?>">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'mem_term') : '' ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Any another Head</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="radio" name="head" value="yes" > Yes
                        <input type="radio" name="head" value="no" > No
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Head Title</label>
                          <input type="text" name="h_title" class="form-control" value="<?= set_value('h_title');?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Head Amount</label>
                          <input type="text" name="h_price" class="form-control" value="<?= set_value('h_price');?>">
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div> -->
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