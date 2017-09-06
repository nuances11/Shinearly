<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main file for Template.
 * Don't change the file name
 */
?>

<?php echo doctype('html5')?>

<html lang="<?php echo $this->session->userdata('fronlang_iso') ?>">

<head>
    <?php echo $meta_tags?>
    <?php echo link_tag('templates/shinearly/images/logo.jpg', 'shortcut icon', 'image/ico');?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teacher </title>

    <!-- Bootstrap -->
    <link 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
        crossorigin="anonymous">
    <!-- Font Awesome -->
    <link 
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        rel="stylesheet" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
        crossorigin="anonymous">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>templates/teacher/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href=".<?php echo base_url()?>templates/teacher/css/yellow.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url()?>templates/teacher/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url()?>templates/teacher/css/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>templates/teacher/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>templates/teacher/css/custom.min.css" rel="stylesheet">
</head>

<?php if($this->session->userdata('user_admin_id') && $this->session->userdata('admin_email')){ ?>
        <?php $users = $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id'));  /* Get admin user information */?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo base_url()?>teacher" class="site_title"><img src="<?php echo base_url()?>templates/shinearly/images/logo.png" alt="" width="50px" height="50px"> <span>Sample Msg</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <?php if ($users->picture) { ?>
                                <img src="<?php echo base_url() . 'photo/profile/' . $users->picture; ?>" class="img-circle profile_img" alt="Profile Photo">
                            <?php } else { ?>
                                <img src="<?php echo base_url() . 'photo/no_image.png'; ?>" class="img-circle profile_img" alt="Profile Photo" >
                            <?php } ?>
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo ($users->name) ? $users->name : '-'; ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url()?>teacher"><i class="fa fa-home"></i> Home </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url() ?>teacher/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url() ?>templates/teacher/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                        <span class="image"><img src="<?php echo base_url() ?>templates/teacher/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <a>
                        <span class="image"><img src="<?php echo base_url() ?>templates/teacher/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <a>
                        <span class="image"><img src="<?php echo base_url() ?>templates/teacher/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <a>
                        <span class="image"><img src="<?php echo base_url() ?>templates/teacher/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- Start For Content -->
                <?php echo $content; ?>
                <!-- End For Content -->
            </div>

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Shinearly Learning Academy &copy; <?php echo date("Y") ?>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
        <?php }else{ ?>
            <!-- Main content -->
            <?php echo $content; ?>
            <!-- /.content -->
        <?php } ?>
    </div>


   <!-- jQuery -->
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>templates/teacher/js/bootstrap.min.js"></script>

    <?php echo $core_js?>

    <script src="<?php echo base_url()?>templates/teacher/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>templates/teacher/js/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url()?>templates/teacher/js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url()?>templates/teacher/js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url()?>templates/teacher/js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>templates/teacher/js/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url()?>templates/teacher/js/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url()?>templates/teacher/js/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.vmap.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()?>templates/teacher/js/moment.min.js"></script>
    <script src="<?php echo base_url()?>templates/teacher/js/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>templates/teacher/js/custom.min.js"></script>
</body>
</html>