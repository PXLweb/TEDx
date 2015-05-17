<div class="container">
    <?php
    echo form_open('login/valideren', [
        'class' => 'form-signin',
        'data-toggle' => 'validator',
        'role' => 'form',
        'id' => 'myForm'
    ]);
    ?>

    <h2 class="form-signin-heading">
        <?php echo $lang->getFormHeader(); ?>
    </h2>

    <?php
    if (isset($_SESSION['login_failed']) && $_SESSION['login_failed'] == true) {
        echo '<p class="help-block" style="color: #A94442;">' . $lang->getTryAgain() . '</p>';
        unset($_SESSION['login_failed']);
    }
    ?>

    <!--Username or e-mail-->
    <div class="form-group"> 
        <label for="userNameOrEmail" class="sr-only">
            <?php echo $lang->getUserNameOrEmail(); ?>
        </label>
        <input type="text" id="userName" name="userNameOrEmail" class="form-control" placeholder="<?php echo $lang->getUserNameOrEmail(); ?>" data-error="<?php echo $lang->getUserNameOrEmailWarning(); ?>" required autofocus />
        <div class="help-block with-errors"></div>
    </div>

    <!--Password-->
    <div class="form-group"> 
        <label for="password" class="sr-only">
            <?php echo $lang->getPassword(); ?>
        </label>
        <input type="password" id="password" name="password" class="form-control" placeholder="<?php echo $lang->getPassword(); ?>" data-error="<?php echo $lang->getPasswordWarning(); ?>" required />
        <div class="help-block with-errors"></div>
    </div>

    <!--Remember me-->
    <div class="checkbox">
        <label>
            <input type="checkbox" name="remember_me" value="yes"> <?php echo $lang->getRememberMe(); ?>
        </label>
    </div>

    <!--Submit-->
    <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lang->getLoginButton(); ?></button>
</form>
