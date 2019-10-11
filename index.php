<?php
require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if(isset($_POST['crear'])){

//   ob_start();
//   require_once 'factura.php';
// require('factura.php');
//  echo "<script>window.location.replace('https://www.azkreation.com/nuevavistaweb/facture/factura.php');</script>";
//   $html = ob_get_clean();
  
  
  
  
//   $html2pdf = new Html2Pdf();
//   $html2pdf -> writeHTML($html);
//   $html2pdf -> output('facture.pdf');

}
?>
<!-- <script>

window.location.href="login.php";

</script> -->
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Vista Web Admin</title>

        <meta name="description" content="Vista Web">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                    <!-- Text for IE9 -->
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
 
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-mini">
                <!-- Alternative Sidebar -->
                <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
                    <!-- Toggle Alternative Sidebar Button (visible only in static layout) -->
                    <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>

                    <!-- Wrapper for scrolling functionality -->

                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Sidebar Brand -->
                    <div id="sidebar-brand" class="themed-background">
                        <a href="index.html" class="sidebar-title">
                            <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">Vista<strong> Web </strong></span>
                        </a>
                    </div>
                    <!-- END Sidebar Brand -->



                    <!-- Sidebar Extra Info -->
                    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                        <div class="push-bit">
                            <span class="pull-right">
                                <a href="javascript:void(0)" class="text-muted"><i class="fa fa-plus"></i></a>
                            </span>
                            <small><strong>78 GB</strong> / 100 GB</small>
                        </div>
                        <div class="progress progress-mini push-bit">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                        </div>
                        <div class="text-center">
                            <small>Dev <i class="fa fa-heart text-danger"></i> by Vista web</small><br>
                        </div>
                    </div>
                    <!-- END Sidebar Extra Info -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
+                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Header Link -->
                            <li class="hidden-xs animation-fadeInQuick">
                                <a href=""><strong>Dashboard</strong></a>
                            </li>
                            <!-- END Header Link -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Search Form -->
 
                            <!-- END Search Form -->

                            <!-- Alternative Sidebar Toggle Button -->
  
                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/placeholders/avatars/avatar.jpg" alt="avatar">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">
                                        <strong>ADMINISTRATOR</strong>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-power-off fa-fw pull-right"></i>
                                            Logout
                                        </a>
                                    </li>
                                    

                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Page Header -->
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>Vista web - Facture</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Category</li>
                                            <li><a href="">Page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Page Header -->

                        <!-- Example Block -->
                        <div class="block">
                            <!-- Example Title -->
                            <div class="block-title">

                                <h2>Facture</h2>
                            </div>
                            <!-- END Example Title -->

                            <!-- Example Content -->




                            <div class="block">
                            <?php   
                            if( isset($_GET["eliminar"])) {
                                reset($_POST);                                
                            }else{                                
                                if ($_POST){
                                    //Incrementamos el valor
                                        $conta = $_POST["conta"] + 1;                                    
                                    }
                                    else{
                                    //Valor inicial
                                         $conta = 1;                                     
                                    }
                            }
                                
                            ?>
                     
                     <div class="row">
                     <div class="col-md-12">
                     <form name="f1" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                            <input type="hidden" name="conta" value="<?=$conta?>">                                                        
                            <button type="submit" name="Incrementar" class="btn btn-effect-ripple btn-primary generar-factura">Agregar</button>                            
                      </form>

                      <form name="f2" action="<?=$_SERVER["PHP_SELF"]?>" method="get">                                                    
                            <input type="hidden" name="eliminar">                                                            
                            <button type="submit" name="Limpiar" class="btn btn-effect-ripple btn-danger">Limpiar</button>
                      </form>                       
                     
                                        
                     </div>
                     
                     </div>
                      <hr>
                      <form style="padding:10px;" action="factura.php"   method="post" class="form-horizontal form-bordered">
                      
                                    <?php for($i = 1; $i <= $conta; $i++){ ?>
                                    <div class="row bloque-items">
                                    <div class="col-md-3">
                                        <label for="example-nf-email"><?php echo "Items".$i; ?> </label>
                                        <input type="text" placeholder="<?php echo "item".$i; ?>" name="item<?php echo $i; ?>" class="form-control item" >
                                    </div>
                                    <div class="col-md-3">
                                    <label for="example-nf-email"><?php echo "Quantity".$i; ?> </label>
                                            <input type="text" placeholder="<?php echo $i; ?>" name="quantity<?php echo $i; ?>" class="form-control item" >
                                    </div>                                    
                                    <div class="col-md-3">
                                    <label for="example-nf-email"><?php echo "Price".$i; ?> </label>
                                        <input type="text" placeholder="<?php echo $i; ?>" name="price<?php echo $i; ?>" class="form-control item" >
                                    </div>
                                    <div class="col-md-3">
                                    <label for="example-nf-email"><?php echo "Amount".$i; ?> </label>
                                        <input type="text" placeholder="<?php echo $i; ?>"  name="amount<?php echo $i; ?>" class="form-control item" >
                                    </div>
                                </div>
                                    <?php } ?>
                                <br>
                                    <div class="form-group">
                                        <div class="col-xs-4">
                                            <label for="example-nf-email">Bill to </label>
                                            <input type="text" name="billto" class="form-control billto" >
                                            <input type="hidden" name="count" value="<?php echo $conta ?>" >
                                        </div>

                                        <div class="col-xs-4">
                                            <label for="example-nf-email">Nom</label>
                                            <input type="text" name="nom" class="form-control nom" >
                                        </div>

                                        <div class="col-xs-4">
                                            <label for="example-nf-email">Email</label>
                                            <input type="text" name="email" class="form-control email" >
                                        </div>





                                        
                                    
                                            <div class="col-md-3">
                                                    <label for="example-nf-email">Estimate date:	</label>
                                                    <input type="text" id="example-datepicker" name="estimatedate" class="form-control input-datepicker estimatedate" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                            </div>


                                            <div class="col-md-3">
                                                    <label for="example-nf-email">Expires On:	</label>
                                                    <input type="text" id="example-datepicker" name="expireson" class="form-control input-datepicker expireson" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                            </div>

                                            <div class="col-xs-6">
                                                    <label for="example-nf-email">Estimate number</label>
                                                    <input type="text" name="estimatenumber" class="form-control estimatenumber" >
                                                    <label for="example-nf-email">Grand Total (CAD):	</label>
                                                    <input type="text" name="grandtotal" class="form-control grandtotal" >
                                                </div>
                                    </div>



                                    <div class="form-group form-actions">
                                        <div class="col-xs-12">
                                            <button type="submit" name="crear" class="btn btn-effect-ripple btn-primary generar-factura">Generate</button>
                                            <button type="button" class="btn btn-effect-ripple btn-danger">Clear</button>
                                        </div>
                                    </div>
                                </form>



                                <!-- END Flexible Grid Content -->
                            </div>

                            <!-- END Example Content -->
                        </div>
                        <!-- END Example Block -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>




<script>
/*
$(document).ready(function () {
 
   $('.generar-factura').click(function (e) { 
       e.preventDefault();

       var data = {
           billto :  $('.billto').val().trim(),
           nom : $('.nom').val().trim(),
           email : $('.email').val().trim(),
           estimatedate : $('.estimatedate').val().trim(),
           expireson : $('.expireson').val().trim(),
           estimatenumber : $('.estimatenumber').val().trim(),
           grandtotal : $('.grandtotal').val().trim()

        }
        
        if(data.billto == ""){
            alert('TODO');
        }else{
            window.location.href="factura.php?billto="+data.billto+
            "&nom="+data.nom+
            "&email="+data.email+
            "&estimatedate="+data.estimatedate+
            "&expireson="+data.expireson+
            "&estimatenumber="+data.estimatenumber+
            "&grandtotal="+data.grandtotal
        }




    }); 
    




});
*/

                                         
    
</script>


    </body>
</html>
