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

        <!--Username or e-mail-->
        <label for="userNameOrEmail" class="sr-only">
            <?php echo $lang->getUserNameOrEmail(); ?>
        </label>
        <input type="text" id="userNameOrEmail" name="userNameOrEmail" class="form-control" placeholder="<?php echo $lang->getUserNameOrEmail(); ?>" required autofocus />

        <!--Password-->
        <label for="password" class="sr-only">
            <?php echo $lang->getPassword(); ?>
        </label>
        <input type="password" id="password" name="password" class="form-control" placeholder="<?php echo $lang->getPassword(); ?>"  required />

        <!--Remember me-->
        <div class="checkbox">
            <label>
                <input type="checkbox" value="rememberMe"> <?php echo $lang->getRememberMe(); ?>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lang->getLoginButton(); ?></button>
    </form>
</div> <!-- /container -->
