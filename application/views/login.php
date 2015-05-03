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

        <title>TEDx inloggen</title>

        <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap-theme.css'); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" ></script>

        <link rel="stylesheet" href="<?php echo base_url('assets/css/signin.css'); ?>" />
        <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js'); ?>"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">
            <form class="form-signin" method="post" action="<?php echo base_url() . 'login/validate' ?>">
                <h2 class="form-signin-heading">
                    <?php echo $lang->getForm_header(); ?>
                </h2>
                <label for="inputEmail" class="sr-only">
                    <?php echo $lang->getEmail_placeholder(); ?>
                </label>

                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="<?php echo $lang->getEmail_placeholder(); ?>" required autofocus>

                <label for="inputPassword" class="sr-only">
                    <?php echo $lang->getPassword_placeholder(); ?>
                </label>

                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="<?php echo $lang->getPassword_placeholder(); ?>" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> <?php echo $lang->getRemember_me(); ?>
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lang->getSignin_button(); ?></button>
            </form>
        </div> <!-- /container -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
    </body>
</html>
