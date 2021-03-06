
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TRIP GURU-World's Best Tourist Site</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/activity.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/progressbar.css" rel="stylesheet">



    <script src="html5shiv.js"></script>
    <script src="respond.js"></script>
    <![endif]-->

    <style>


        body {

            background-image: url("imgs/back.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        .slide-image {
            width: 100%;
        }

        .carousel-holder {
            margin-bottom: 30px;
        }

        .carousel-control,
        .item {
            border-radius: 4px;
        }

        .caption {
            height: 130px;
            overflow: hidden;
        }

        .caption h4 {
            white-space: nowrap;
        }

        .thumbnail img {
            width: 100%;
        }

        .ratings {
            padding-right: 10px;
            padding-left: 10px;
            color: #d17325;
        }

        .thumbnail {
            padding: 0;
        }

        .thumbnail .caption-full {
            padding: 9px;
            color: #333;
        }

        footer {
            margin: 50px 0;
        }
    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="main.php">TRIP GURU</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>

                <li>
                    <a href="#">State-Wise</a>
                </li>
                <li>
                    <a href="#">Important Places</a>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="htimeline.php"><span class="glyphicon glyphicon-user"></span>MyActivity</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <p class="lead"></p>
            <div class="list-group">
                <a href="main.php" class="list-group-item">Home</a>
                <a href="calender.html" class="list-group-item">Voyage</a>
                <a href="#" class="list-group-item">Custom</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item">Help</a>
            </div>
        </div>

        <div class="col-md-9">

            <div style="display:inline-block;width:100%;overflow-y:auto;">
                <ul class="timeline timeline-horizontal">
                    <li class="timeline-item">
                        <div class="timeline-badge success"><i class="glyphicon glyphicon-ok"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">New Delhi</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>3 hrs 43 mins to reach Agra</small></p>
                            </div>
                            <div class="timeline-body">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Agra</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small>Not yet reached</p>
                            </div>
                            <div class="timeline-body">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Jaipur</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Not yet Reached</small></p>
                            </div>
                            <div class="timeline-body">
                                <p></p>
                            </div>
                        </div>
                    </li>
                                    </ul>
            </div>
            <h4 style="color:white;">Current Status</h4>
            <div class="col-md-9">


                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                                <div class="progress-value">
                                    <div class="row">&#9981 75%</div></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="progress pink">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                                <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                                <div class="progress-value">60%</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="progress blue">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                                <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                                <div class="progress-value">36%</div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-red">
                            <div class="panel-heading  text-center">
                                <h3>PRO PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$10 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-blue">
                            <div class="panel-heading arrow_box text-center">
                                <h3>DEV PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$20 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-info" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-green">
                            <div class="panel-heading arrow_box text-center">
                                <h3>FREE PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-grey">
                            <div class="panel-heading arrow_box text-center">
                                <h3>FREE PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-primary" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-white">
                            <div class="panel-heading arrow_box text-center">
                                <h3>FREE PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-white">
                            <div class="panel-heading arrow_box text-center">
                                <h3>FREE PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-white">
                            <div class="panel-heading arrow_box text-center">
                                <h3>FREE PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                        <!-- PRICE ITEM -->
                        <div class="panel price panel-white">
                            <div class="panel-heading arrow_box text-center">
                                <h3>FREE PLAN</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->


                    </div>


                </div>

            </div>

        </div>


            </div>

        </div>

    </div>

</div>

</div>
<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="timeline" href="#" onclick="$('#timeline').hide(); $('#timeline').show()">timeline</a></div>

</div>
<!-- /.container -->





    <!-- Footer -->
    <div class="container">
        <div class="navbar-header">


        </div>
    </div>
<footer>
    <div class="footerHeader" ></div>

    <div class="container">
        <nav class="navbar navbar-inverse navbar-bottom" role="navigation">
            <div class="col-md-4" >
                <h3>About us</h3>
                <h6>HAWKSHAW</h6>
            </div>

            <div class="col-md-4">
                <h3>Our Location </h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d433868.0837064906!2d35.66744174160663!3d31.836036762053016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5fb85d7981af%3A0x631c30c0f8dc65e8!2sAmman!5e0!3m2!1sen!2sjo!4v1499168051085" sytle="" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4" >
                <h3>Contact Us</h3>
                <ul>
                    <li>Phone : 123 - 456 - 789</li>
                    <li>E-mail : info@comapyn.com</li>
                    <li>Fax : 123 - 456 - 789</li>
                </ul>

                <ul class="sm">
                    <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
                    <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300" class="img-responsive" ></a></li>
                    <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive"  ></a></li>
                </ul>
            </div>
        </nav>
    </div>

</footer>

</div>
    </div>
</div>
</div>



</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>





















