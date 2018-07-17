<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Batman</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->asset?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->asset?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php echo $this->asset?>css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top"  data-spy="scroll" data-target=".navbar-fixed-top">

     <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading shad">The Batman</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-custom navbar" role="navigation">
            <div class="container cont">
                <div class="navbar-header">
                    <!--<div class="bat navbar-brand">
        
                    </div>-->
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                   
                     <!--<a href="#" class="navbar-brand">
                        <img src="img/logo.png" class="img-responsive2">
                    </a>!-->
                   
                    <a class="navbar-brand page-scroll" id="battop" href="#about">
                        BatClub
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li>
                            <a href="#about">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#news">Notícias</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#videos">Videos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#galeria">Galeria</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#hqs">HQ'S</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo $this->base_url?>Contato">Contato</a>
                        </li>
                         <li>
                            <a class="page-scroll" href="<?php echo $this->base_url?>Admin">Batcaverna <i class="fa fa-sign-in"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        <!-- /.container -->
    </nav>