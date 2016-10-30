<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jackson State Community College</title>
    <link href="css/styles.css?v=2" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />  
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="theme-color" content="#00355A" />
    <link rel="icon" sizes="192x192" href="images/structure/logos/icon.png" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.slick/1.6/slick.css" media="screen" />
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.slick/1.6/slick-theme.css" media="screen" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XX']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body>
    <?php include ('include-header.php'); ?>
    <div class="container-fluid">
        <div class="row clearfix hidden-print">
            <div id="yamm-placeholder">
                <div class=" yamm">
                    <div class="container">
                        <nav role="navigation" id="navbar-collapse-1">
                            <?php include ('include-megamenu.php'); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ('include-slider.php'); ?>
    
    <div class="wrapper background-grey clearfix">
        <div class="container">
            <?php include ('include-subfeature.php'); ?>
        </div>
    </div>
    <div class="wrapper background-inverse-feature clearfix">
        <div class="container-fluid">
            <div class="background-action-list"><img src="images/stock/DSC_8776%202.jpg" alt="A woman walking on campus with a backpack" /></div>
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php //include ('include-action-list.php'); ?>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php //include ('include-events.php'); ?>
            </div>
            <div class="col-sm-8">
                <?php //include ('include-news.php'); ?>
            </div>
        </div>
        <div class="row subfeature-quicklinks-holder">
            <div class="col-sm-12 subfeature-quicklinks-box">
                <?php //include ('include-quicklinks.php'); ?>
            </div>
        </div>
    </div>
    <div class="wrapper background-grey clearfix buffer-top buffer-bottom">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <h2>Wide Section</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <hr>
                </div>
            </div>
            
            <div class="row ">
                <div class="col-sm-4"><ul>
                   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                   <li>Aliquam tincidunt mauris eu risus.</li>
                   <li>Vestibulum auctor dapibus neque.</li>
                </ul>
	           </div>
                <div class="col-sm-8"> 

                    <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

                    <h2>Header Level 2</h2>

                    <ol>
                       <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                       <li>Aliquam tincidunt mauris eu risus.</li>
                    </ol>

                    <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

                    <h3>Header Level 3</h3>

                    <ul>
                       <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                       <li>Aliquam tincidunt mauris eu risus.</li>
                    </ul>

                    <pre><code>
                    #header h1 a { 
                        display: block; 
                        width: 300px; 
                        height: 80px; 
                    }
                    </code></pre> 
                </div>
            </div>
        </div>
    </div>

<?php //include ('include-prefooter-social.php'); ?>
<?php include ('include-footer.php'); ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
var slider = $('.slick-slider');
$(window).load(function () {
    slider.slick({
        autoplay: true,
        arrows: false,
        speed: 1000,
        autoplaySpeed: 8000
    });
    $('.slick-slider .caption').each(function () {
        var $slide = $(this).parent();
        if ($slide.attr('aria-describedby') != undefined) { // ignore extra/cloned slides
            $(this).attr('id', $slide.attr('aria-describedby'));
        }
    });
    $('.slick-slider .slick-active').find('video').get(0).play();
});
$(function () {
    slider.on('afterChange', function (event, slick, currentSlide,
        nextSlide) {

        if ($('.slick-slider .slick-active').hasClass('vid')) {
            $('.slick-slider .slick-active').find('video').get(0).play();
        }
    });
});
</script>    
<script src="https://cdn.jsdelivr.net/polyfills/polyfill.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>