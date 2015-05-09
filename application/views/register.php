<div class="background-img">
    <div class="container">
        <!--Start form-->
        <?php
        // form_open(<action>, <array with attributes>) is a CodeIgniter helper class
        echo form_open('registreren/uitvoeren', [
            'class' => 'form-signin',
            'data-toggle' => 'validator',
            'role' => 'form',
            'id' => 'myForm'
        ]);
        ?>

        <!--Form header-->
        <h2 class="form-signin-heading">
            <?php echo $lang->getFormHeader(); ?>
        </h2>

        <!--Errors (if there are error)-->
        <?php
        echo '<span style="color: #A94442; font-weight: bold;">';
        if (isset($userExistsError)) {
            echo $userExistsError . '<br />';
        }
        if (isset($emailExistsError)) {
            echo $emailExistsError;
        }
        echo '<div class="help-block with-errors"></div></span>';
        ?>

        <!--Username input-->
        <div class="form-group"> 
            <label for="userName" class="sr-only">
                <?php echo $lang->getUserName(); ?>
            </label>
            <input type="text" id="userName" name="userName" class="form-control" placeholder="<?php echo $lang->getUserName(); ?>" data-error="<?php echo $lang->getUserNameWarning(); ?>" required autofocus>
            <div class="help-block with-errors"></div>
        </div>

        <!--E-mail input-->
        <div class="form-group"> 
            <label for="email" class="sr-only">
                <?php echo $lang->getEmail(); ?>
            </label>
            <input type="email" id="email" name="email" class="form-control" data-error="<?php echo $lang->getEmailWarning(); ?>" placeholder="<?php echo $lang->getEmail(); ?>" required>
            <div class="help-block with-errors"></div>
        </div>

        <!--Password input-->
        <div class="form-group">
            <label for="password" class="sr-only control-label"></label>
            <div class="form-group">
                <input type="password" data-minlength="6" class="form-control" id="password" name="password" placeholder="<?php echo $lang->getPwd(); ?>" required>
                <span class="help-block"><?php echo $lang->getMinimalPwdCharacters(); ?></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="passwordRepeat" name="passwordRepeat" data-match="#password" data-match-error="<?php echo $lang->getPwdUniqueWarning(); ?>" placeholder="<?php echo $lang->getRepeatPwd(); ?>" required oninvalid="this.setCustomValidity('<?php echo $lang->getPwdWarning() ?>')" onchange="this.setCustomValidity('')">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <!--Firstname input-->
        <label for="firstName" class="sr-only">
            <?php echo $lang->getFirstName(); ?>
        </label>
        <input type="text" id="firstName" name="firstName" class="form-control no-help-block" placeholder="<?php echo $lang->getFirstName(); ?>">
        <div class="help-block with-errors"></div>

        <!--Lastname input-->
        <label for="lastName" class="sr-only">
            <?php echo $lang->getLastName(); ?>
        </label>
        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="<?php echo $lang->getLastName(); ?>">
        <div class="help-block with-errors"></div>

        <!--Tel input-->
        <label for="tel" class="sr-only">
            <?php echo $lang->getTel(); ?>
        </label>
        <input type="text" id="tel" name="tel" class="form-control" placeholder="<?php echo $lang->getTel(); ?>">
        <div class="help-block with-errors"></div>

        <!--Cell input-->
        <label for="cell" class="sr-only">
            <?php echo $lang->getCell(); ?>
        </label>
        <input type="text" id="cell" name="cell" class="form-control" placeholder="<?php echo $lang->getCell(); ?>">
        <div class="help-block with-errors"></div>

        <!--Role input-->
        <div class="form-group">
            <select class="form-control" id="role" name="role">
                <?php foreach ($lang->getRoles() as $role): ?>
                    <option><?= $role ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!--RememberMe input-->
        <div class="checkbox">
            <label>
                <input type="checkbox" name="rememberMe"> <?php echo $lang->getRememberMe(); ?>
            </label>
        </div>
        
                <!--Hidden input-->
        <div class="hide">
                <input type="text" name="language" value="<?php echo $lang->getLanguage(); ?>">
        </div>

        <!--Submit-->
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lang->getRegisterBtn(); ?></button>
        </form>
    </div> <!-- /container -->
</div>