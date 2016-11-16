<?php include('include-topnav.php');?>
<header class="wrapper" id="header" role="banner">
    <div class="container">
        <img alt="Jackson State Community College" class="visible-print" height="63" src="images/structure/logos/spc-logo.png" width="250">
        <div class="row clearfix hidden-print flex-header">
            <!--[if IE 8]><span style="display: none" id="ie8-flag"></span><![endif]-->

            <!-- End -->
            <div class="sitelogo">
                <a href="http://www.jscc.edu/"> 
    <?php if($_SERVER["REQUEST_URI"] == "/jscc/" || $_SERVER["REQUEST_URI"] == "/jscc/index.php")
echo "<h1>"; ?>
    <img src="_resources/images/logo/logo-j.png" alt="Jackson State Community College"/>
         <?php if($_SERVER["REQUEST_URI"] == "/jscc/" || $_SERVER["REQUEST_URI"] == "/jscc/index.php")
echo "</h1>"; ?>
</a>

            </div>

            <div id="yamm-placeholder">
                <div class=" yamm">

                    <nav role="navigation" id="navbar-collapse-1">
                        <?php include ('include-megamenu.php'); ?>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>