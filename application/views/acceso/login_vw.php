<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->

        <title>LOGIN</title>

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>css/HirCasa.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= base_url(); ?>css/acceso.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <form method="post" class="form-signin" role="form">
                <h2 class="form-signin-heading text-center">
                	<div>
                		<h3><?= AMBIENTE; ?></h3>
                        <img src="<?= base_url(); ?>images/logo_HIRCASA.png" style="width: 300px;"/>
                    </div>
                </h2>
                <?php if (@$error_login) { ?>
                    <div class="alert alert-danger">Usuario inválido</div>
                    <input type="email" class="form-control" value="<?php echo $_POST['usr']; ?>" name="usr" placeholder="email" required autofocus>
                    <input type="password" class="form-control" value="<?php echo $_POST['pass']; ?>" name="pass" placeholder="Password" required>
                <?php } else { ?>
                    <input type="email" class="form-control" name="usr" placeholder="email" required autofocus> 
                    <input type="password" class="form-control" name="pass" placeholder="Password" required> 
                <?php } ?>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Accesar</button>
            </form>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
    </body>
</html>