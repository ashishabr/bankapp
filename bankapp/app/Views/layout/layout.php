<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url(); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dialog/dialog.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/jquery.dataTables.min.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?= base_url(); ?>/assets/img/logo/banklogo.png" width="80" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Deposit</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Withdraw</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Transfer</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Statement</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="<?= base_url('login/logout'); ?>">Logout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php $uri = service('uri'); $tag = $uri->getSegment(1); $tag2 = $uri->getSegment(2); ?>
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li <?php if ($tag == 'dashboard') { ?> class="active" <?php } ?>  ><a href="<?= base_url('dashboard'); ?>"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li <?php if ($tag2 == NULL && $tag == 'deposit') { ?> class="active" <?php } ?>><a href="<?= base_url('deposit'); ?>"><i class="notika-icon notika-up-arrow"></i> Deposit</a>
                        </li>
                        <li <?php if ($tag2 == 'withdraw') { ?> class="active" <?php } ?>><a href="<?= base_url('deposit/withdraw'); ?>"><i class="notika-icon notika-down-arrow"></i> Withdraw</a>
                        </li>
                        <li<?php if ($tag2 == 'transfer') { ?> class="active" <?php } ?>><a href="<?= base_url('deposit/transfer'); ?>"><i class="notika-icon notika-refresh"></i> Transfer</a>
                        </li>
                        <li<?php if ($tag == 'statement') { ?> class="active" <?php } ?>><a href="<?= base_url('statement'); ?>"><i class="notika-icon notika-form"></i> Statement</a>
                        </li>
                        <li><a href="<?= base_url('login/logout'); ?>"><i class="notika-icon notika-next"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    


<?= view($main_content); ?>


<!-- Start Footer area-->
   <!--  <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>/assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url(); ?>/assets/js/flot/curvedLines.js"></script>
    <script src="<?= base_url(); ?>/assets/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/knob/jquery.knob.js"></script>
    <script src="<?= base_url(); ?>/assets/js/knob/jquery.appear.js"></script>
    <script src="<?= base_url(); ?>/assets/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/wave/waves.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/wave/wave-active.js"></script>

    <script src="<?= base_url(); ?>/assets/js/dialog/sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dialog/dialog-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/chat/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <!-- Data Table JS
        ============================================ -->
    <script src="<?= base_url(); ?>/assets/js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/data-table/data-table-act.js"></script>
</body>
<?php   
if (isset($transaction)) {    
    if ($transaction == 1) { ?>
    <script type="text/javascript">
      
         swal({   
                title: "Deposit Success!",   
                timer: 1500
            });
    </script>
<?php 
    }   
    elseif ($transaction == 2) { ?>
    <script type="text/javascript">
      
         swal({   
                title: "Withdraw Success!",   
                timer: 1500
            });
    </script>
<?php 
    }
    elseif ($transaction == 3) { ?>
    <script type="text/javascript">
      
         swal({   
                title: "Transfer Success!",   
                timer: 1500
            });
    </script>
<?php 
    }
    elseif ($transaction == 4) { ?>
    <script type="text/javascript">
      
         swal({   
                title: "Insufficient Balance!",   
                timer: 1500
            });
    </script>
<?php 
    }
    elseif ($transaction == 5) { ?>
    <script type="text/javascript">
      
         swal({   
                title: "User Doesn't Exists!",   
                timer: 1500
            });
    </script>
<?php 
    }
} ?>
</html>