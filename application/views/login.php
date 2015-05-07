<div class="container">
    <form class="form-signin" method="post" action="<?php echo base_url() . 'login/validate' ?>">
        <h2 class="form-signin-heading">
            <?php echo $lang->getForm_header(); ?>
        </h2>
        <label for="inputEmail" class="sr-only">
            <?php echo $lang->getEmail_placeholder(); ?>
        </label>

        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="<?php echo $lang->getEmail_placeholder(); ?>" required autofocus />

        <label for="inputPassword" class="sr-only">
            <?php echo $lang->getPassword_placeholder(); ?>
        </label>

        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="<?php echo $lang->getPassword_placeholder(); ?>"  required />
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> <?php echo $lang->getRemember_me(); ?>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lang->getSignin_button(); ?></button>
    </form>
</div> <!-- /container -->
