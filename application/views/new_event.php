 <?php
        // form_open(<action>, <array with attributes>) is a CodeIgniter helper class
        echo form_open('events/create', [
            'class' => 'form-signin',
            'data-toggle' => 'validator',
            'role' => 'form',
            'id' => 'myForm'
        ]);// 
        
        ?>
 <div class="form-group"> 
            <label for="eventname" class="sr-only">
                <?php echo $lang->getEventname(); ?>
            </label>
            <input type="text" id="eventname" name="eventname" class="form-control" placeholder="<?php echo $lang->getEventname(); ?>" required autofocus>
            <div class="help-block with-errors"></div>
        </div>