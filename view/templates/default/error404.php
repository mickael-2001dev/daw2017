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
<body>
	<section id="error404" class="content-section text-center">
            <div class="container">
             <div class="error-section bgParallax" >
                    <div class="col-lg-10 col-lg-offset-1">
                         <h1>ERRO 404:</h1>
                         <h2>Página não encontrada!</h2><h3>Batman está confuso...</h3>
                         <div class="col-lg-6 col-lg-offset-3"> 
                              <img src="<?php echo $this->asset?>/img/batmanconfuso.gif" class="img-responsive"><br>
                             <a href="javascript:window.history.back()
" class="btn btn-default btn-lg btn-block">Voltar</a>
                             <br>
                         </di>
                    </div>
                </div>
            </div>
</section>
</body>	
</html>
