
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->asset ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $this->asset ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->asset ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->asset ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="body-login">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default custom-panel">
                    <div class="panel-heading panel-custom">
                        <h3 class="panel-title title-custom">Login</h3>
                    </div>
                    <div class="panel-body custom-panel">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control form-custom" placeholder="Nome" name="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-custom" placeholder="Senha" name="senha" type="password" value="">
                                </div>
                                 <div class="form-group open">
                                    <input type="checkbox" name="remeber">
                                    <label style="font-weight: normal">Continuar Conectado </label>
                                    &nbsp; <a href="#" id="ferrou">Esqueceu sua senha?</a>
                                </div>
                                        <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="login" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <?php if(isset($data['msg'])): ?>
                <div class="alert alert-danger">
                    <?php echo $data['msg'] ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo $this->asset ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->asset ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $this->asset ?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->asset ?>dist/js/sb-admin-2.js"></script>

</body>

</html>
