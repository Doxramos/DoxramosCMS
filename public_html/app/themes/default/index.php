<!--TODO
Setup Javascript module loaders
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo SiteName; ?></title>
    <?php LoadCSS(ThemePath); ?>
    <!-- Bootstrap core CSS -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo SiteName; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php Navigation(); ?>
            </ul>
            <?php UserMenu(); ?>
        </div><!--/.nav-collapse -->

    </div>

</nav>

<div class="container">

    <div class="starter-template">
        <h1><?php echo PageDetail("title");  ?></h1>
        <p class="lead">
            <?php echo PageDetail("content"); ?>
    </div>

</div><!-- /.container -->
<style>
    html {
        position: relative;
        min-height: 100%;
    }
    //*{ border: 1px solid red; }*//


    .full {
        width: 100%;
    }
    .gap {
        width: 100%;
        clear: both;
    }
    footer {
        display:none;
        position: absolute;
        left: 0;
        bottom: 0;
        height: auto;
        width: 100%;
    }
    .footer {
        background: #EDEFF1;
        height: auto;
        position: relative;
        width: 100%;
        border-bottom: 1px solid #CCCCCC;
        border-top: 1px solid #DDDDDD;
    }
    .footer p {
        margin: 0;
    }
    .footer img {
        max-width: 100%;
    }
    .footer h3 {
        border-bottom: 1px solid #BAC1C8;
        color: #54697E;
        font-size: 18px;
        font-weight: 600;
        line-height: 27px;
        padding: 40px 0 10px;
        text-transform: uppercase;
    }
    .footer ul {
        font-size: 13px;
        list-style-type: none;
        margin-left: 0;
        padding-left: 0;
        margin-top: 15px;
        color: #7F8C8D;
    }
    .footer ul li a {
        padding: 0 0 5px 0;
        display: block;
    }
    .footer a {
        color: #78828D
    }
    .supportLi h4 {
        font-size: 20px;
        font-weight: lighter;
        line-height: normal;
        margin-bottom: 0 !important;
        padding-bottom: 0;
    }
    .newsletter-box input#appendedInputButton {
        background: #FFFFFF;
        display: inline-block;
        float: left;
        height: 30px;
        clear: both;
        width: 100%;
    }
    .newsletter-box .btn {
        border: medium none;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -o-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        display: inline-block;
        height: 40px;
        padding: 0;
        width: 100%;
        color: #fff;
    }
    .newsletter-box {
        overflow: hidden;
    }
    .bg-gray {
        background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
        box-shadow: 0 1px 0 #B4B3B3;
    }
    .social li {
        background: none repeat scroll 0 0 #B5B5B5;
        border: 2px solid #B5B5B5;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        float: left;
        height: 36px;
        line-height: 36px;
        margin: 0 8px 0 0;
        padding: 0;
        text-align: center;
        width: 36px;
        transition: all 0.5s ease 0s;
        -moz-transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
        -ms-transition: all 0.5s ease 0s;
        -o-transition: all 0.5s ease 0s;
    }
    .social li:hover {
        transform: scale(1.15) rotate(360deg);
        -webkit-transform: scale(1.1) rotate(360deg);
        -moz-transform: scale(1.1) rotate(360deg);
        -ms-transform: scale(1.1) rotate(360deg);
        -o-transform: scale(1.1) rotate(360deg);
    }
    .social li a {
        color: #EDEFF1;
    }
    .social li:hover {
        border: 2px solid #2c3e50;
        background: #2c3e50;
    }
    .social li a i {
        font-size: 16px;
        margin: 0 0 0 5px;
        color: #EDEFF1 !important;
    }
    .footer-bottom {
        background: #E3E3E3;
        border-top: 1px solid #DDDDDD;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .footer-bottom p.pull-left {
        padding-top: 6px;
    }
    .payments {
        font-size: 1.5em;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <!--<div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>-->
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Contribute </h3>
                    <ul>
                        <li> <a href="https://github.com/Doxramos/DoxramosCMS" target="_blank"><i class="fa fa-github"></i>Github </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Legal </h3>
                    <ul>
                        <li> <a href="#"> Terms of Service </a> </li>
                        <li> <a href="https://www.apache.org/licenses/LICENSE-2.0" target="_blank"> Apache License V 2.0 </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>

                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Subscribe </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Subscribe to our Newsletter <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © <?php echo SiteName; ?>. All rights reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<?php LoadScript("js","bootstrap.min.js"); ?>
<script>
    function footerAlign() {
        $('footer').css('display', 'block');
        $('footer').css('height', 'auto');
        var footerHeight = $('footer').outerHeight();
        $('body').css('padding-bottom', footerHeight);
        $('footer').css('height', footerHeight);
    }


    $(document).ready(function(){
        footerAlign();
    });

    $( window ).resize(function() {
        footerAlign();
    });
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
