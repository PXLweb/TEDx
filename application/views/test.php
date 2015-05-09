<div class="background-img">
    <div class="container">

        <!--insertUser-->
        <?php
        // form_open(<action>, <array with attributes>) is a CodeIgniter helper class
        echo form_open('test/insertUser', [
            'class' => 'form-signin',
            'data-toggle' => 'validator',
            'role' => 'form',
            'id' => 'myForm'
        ]);
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">insertUser</button>
        </form>

        <!--getUser-->
        <?php
        echo form_open('test/getRoleId', [
            'class' => 'form-signin',
            'data-toggle' => 'validator',
            'role' => 'form',
            'id' => 'myForm'
        ]);
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">getRoleId</button>
        </form>
        </form>

        <!--getUsers-->
        <?php
        // form_open(<action>, <array with attributes>) is a CodeIgniter helper class
        echo form_open('test/getUsers', [
            'class' => 'form-signin',
            'data-toggle' => 'validator',
            'role' => 'form',
            'id' => 'myForm'
        ]);
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">getUsers</button>
        </form>

        <!--deleteUser-->
        <?php
        // form_open(<action>, <array with attributes>) is a CodeIgniter helper class
        echo form_open('test/deleteUser', [
            'class' => 'form-signin',
            'data-toggle' => 'validator',
            'role' => 'form',
            'id' => 'myForm'
        ]);
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">deleteUser</button>
        </form>

        <!--getTables-->
        <?php
        // form_open(<action>, <array with attributes>) is a CodeIgniter helper class
        echo form_open('test/getTables', [
            'class' => 'form-signin',
            'data-toggle' => 'validator',
            'role' => 'form',
            'id' => 'myForm'
        ]);
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">getTables</button>
        </form>


    </div> <!-- /container -->
</div>