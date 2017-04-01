<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-pink.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <?php require_once ("include/head.php"); ?>
    <body>
        <?php require_once ("include/header.php"); ?>

        <section id="main">
            <?php require_once("include/sidebar.php"); ?>
        </section>
                
        <section id="content">
            <style>
                .mdl-card {
                    width: 512px;
                    position:fixed;
                    right:auto;
                    bottom:auto;
                    left:auto;
                    top:15%;
                    width:80%;
            </style>
}
            <div class="container">
                   <div class="mdl-card">
                       <div class="mdl-card__title">
                           <a><h2 class="mdl-card__title-text">Store Name</h2><img src="" alt="img" width="20" height="20"/></a>
                       </div> 
                       <div class="mdl-card__supporting-text">
                           <a><h5>Offers:</h5></a>
                           <a><h5>Tag:</h5></a>
                           <a><h5>Expiry:</h5></a>
                           <a><h5>Promo Code:</h5></a>
                           
                       </div> 
                    </div>
            </div>  
        </section>

        <?php require_once("include/footer.php"); ?>

        <?php require_once("include/preloader.php"); ?>

       <?php require_once("include/old_ie.php"); ?>

        <?php require_once("include/js.php"); ?>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/app.min.js"></script>
    </body>
  </html>
