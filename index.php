<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jackson State Community College</title>
    <link href="css/legacy.css?v=2" rel="stylesheet" />
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
    

    <?php include ('include-slider.php'); ?>
    
    <div class="wrapper background-grey clearfix">
        <div class="container">
            <?php include ('include-subfeature.php'); ?>
        </div>
    </div>
   
    <main class="container" role="main">
        <div class="row">
            <div class="col-sm-6">
                <?php include ('include-news.php'); ?>
            </div>
            <div class="col-sm-6">
                <?php include ('include-events.php'); ?>
            </div>
            
        </div>
        <div class="row subfeature-quicklinks-holder">
            <div class="col-sm-12 subfeature-quicklinks-box">
                <?php //include ('include-quicklinks.php'); ?>
            </div>
        </div>
    </main>
    <div class="wrapper background-grey clearfix buffer-top buffer-bottom">
        <div class="container">
            
        </div>
    </div>

<?php include ('include-prefooter.php'); ?>
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

});

</script>    
<script src="scripts/script.js"></script>
</body>
</html>