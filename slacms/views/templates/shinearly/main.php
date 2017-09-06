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
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom Theme files -->
    <link href="<?php echo base_url()?>/templates/shinearly/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="<?php echo base_url()?>/templates/shinearly/stylesheet" href="css/jquery.countdown.css" />

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>
    

    <!-- Javascript -->
    
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
    <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous">
        </script>
    <!-- <script src="<?php echo base_url()?>templates/shinearly/js/jquery.min.js"></script> -->
    

    <script>
            jQuery(function ($) {
                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });
    </script>
    </body>

</head>
<body>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
				  
			<a href="index.php" alt="ShinEarly Learning Academy"><img src="<?php echo base_url()?>/templates/shinearly/images/test.png"  class="img-responsive" alt="ShinEarly Learning Academy" width="400" height="100" href="index.php" /> </a> 
         
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav" style="margin-top: 25px; ">
                <li class="dropdown">
                    <a href="<?php echo base_url()?>login"><i class="fa fa-user"></i><span>Login</span></a>
                </li>
				<!--<li class="dropdown">
                    <a href="pricing.php"><i class="fa fa-dollar"></i><span>Pricing</span></a>
                </li>-->		
				<li class="dropdown">
                    <a href="<?php echo base_url()?>services"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Programs</span></a>
                </li>				
					<li class="dropdown">
                    <a href="<?php echo base_url()?>about/#teacher"><i class="fa fa-users" aria-hidden="true"></i><span>Teachers</span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <li><a href="<?php echo base_url()?>">Home</a></li>
                <li><a href="<?php echo base_url()?>about">About</a></li>
                <li><a href="<?php echo base_url()?>services">Services</a></li>
                <li><a href="<?php echo base_url()?>blog">Blog</a></li>
                <li class="last"><a href="<?php echo base_url()?>contact">Contacts</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<!-- Start For Content -->
<?php echo $content; ?>
<!-- End For Content -->

<div class="footer">
    <div class="container">
        <div class="col-md-4 grid_4">
            <h3>About Us</h3>
            <p>ShinEarly Learning Academy is a newly founded company that launched its operation this year with highly qualified,
                professional English teachers. We aim to provide quality education through any form of online classes.
                Come and learn English with us!<br/><a href="about.php">See More...</a> </p>
            <ul class="social-nav icons_2 clearfix">
                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/ShinEarlyLA/" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="col-md-4 grid_4">
            <h3>Contact Us</h3>
            <address>
                <strong>For Inquiries: </strong>
                <br>
                <span>Tel: &nbsp;</span>(047)602-7381
                <br>
                <span>Phone: &nbsp;</span>0920-927-3922 / 0956-944-7693
                <br>
                <span>Kakao Talk: &nbsp;</span>0956-944-7693
                <br>
                <span>Email: &nbsp;</span> <a href="mailto@example.com">sla.educ.oc@gmail.com</a>
            </address>
			<br>
			
			<div class="fb-like" data-href="https://www.facebook.com/ShinEarlyLA/?ref=br_rs" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
        </div>
        <div class="col-md-4 grid_4">
            <h3>Working Hours</h3>
            <table class="table_working_hours">
                <tbody>
                <tr class="opened_1">
                    <td class="day_label">monday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">tuesday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">wednesday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">thursday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">friday</td>
                    <td class="day_value">9:30 am - 3.00 pm</td>
                </tr>
                <tr class="closed">
                    <td class="day_label">saturday</td>
                    <td class="day_value closed"><span>Closed</span></td>
                </tr>
                <tr class="closed">
                    <td class="day_label">sunday</td>
                    <td class="day_value closed"><span>Closed</span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
        <div class="copy">
            <p>Copyright © 2017</p>
        </div>
    </div>
</div>
<div id="fb-root"></div>

<!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->  
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <!-- <script src="<?php echo base_url()?>templates/shinearly/js/jquery.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- <script src="<?php echo base_url()?>templates/shinearly/js/script.js"></script> -->
        <?php echo $core_js?>
        <script type="text/javascript">
        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top'
        });
        </script>
        <?php 
            if($additional_js){ 
        ?> 
            <script type="text/javascript"> 
                <?php echo $additional_js?> 
            </script>  
        <?php 
            } 
        ?>  

<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</html>