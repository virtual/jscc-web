<?php include('include-topnav.php');?>
    <header class="wrapper" id="header" role="banner">
        <div class="container" id="banner">
            <img alt="Jackson State Community College" class="visible-print" height="63"
            src="images/structure/logos/spc-logo.png" width="250">
            <div class="row clearfix hidden-print">
                <!--[if IE 8]><span style="display: none" id="ie8-flag"></span><![endif]-->
                <div class="col-sm-12 cf">
                    <!-- no cf -->
                    <div class="row">
                        <!-- End -->
                        <div class="sitelogo">
                            <a href="http://www.jscc.edu/" ><div class="sm">
    <div class="svg-icon">
    <div class="svg-container">
        <?php if($_SERVER["REQUEST_URI"] == "/jscc/" || $_SERVER["REQUEST_URI"] == "/jscc/index.php")
   echo "<h1>"; ?>
        <img src="_resources/images/logo/fullcolor-logo.jpg" alt="Jackson State Community College"/>
             <?php if($_SERVER["REQUEST_URI"] == "/jscc/" || $_SERVER["REQUEST_URI"] == "/jscc/index.php")
   echo "</h1>"; ?>
        </div></div></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>