<div class="container">
    <h1 class="text-center"><?php echo $lang->getSubjects(); ?></h1>

    <div class="row ">

        <!--Sidebar/form-->
        <div class="col-sm-5 blog-sidebar">
            <!--Start form-->
            <?php
            echo form_open('forum/postTopic', [
                'class' => 'form-signin',
                'data-toggle' => 'validator',
                'role' => 'form',
                'id' => 'myForm'
            ]);
            ?>

            <!--Title-->
            <div class="form-group">
                <label for="subject"><?php echo $lang->getTitleLabel(); ?></label>
                <input type="text" class="form-control" name="subject" id="subject"/>
                <div class="help-block with-errors"></div>
            </div>

            <!--Comment-->
            <div class="form-group">
                <label for="content"><?php echo $lang->getCommentLabel(); ?></label>
                <textarea rows="6" class="form-control" name="content" id="content" data-error="<?php echo $lang->getCommentWarning(); ?>" required></textarea>
                <div class="help-block with-errors"></div>
            </div>

            <!--New button-->
            <?php
            if ($_SESSION['guest'] == TRUE || $_SESSION['role_name'] == 'Banned') {
                $_SESSION['route_previous_page'] = 'forum/category/' . $_SESSION['category_id'];
                echo '<p my-error">' . $lang->getOnlyUsersWarning() . '</p>';
                echo '<p><a class="btn btn-lg btn-danger" href="' . site_url('login') . '">' . $lang->getLoginButton() . '</a></p>';
            } else {
                echo '<p>' .
                '<input type="submit" class="btn btn-lg btn-danger" value="' . $lang->getNewButton() . '" /></p>';
            }
            ?>
            </form>
        </div>

        <!--Topics dashboard-->
        <div class="col-sm-7 blog-main">
            <!--<h3><a>test</a></h3><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>-->
            <?php
            $forumActionLink = site_url('forum') . '/posts/';
            if (empty($topics)) {
                echo '<h3 class="text-center">Geen onderwerpen. Schrijf de eerste!</h3>';
            }

            foreach ($topics as $topic) {
                echo '<h3 style="display: inline;"><a href="' . $forumActionLink . $topic['topic_id'] . '">' . $topic['subject'] . '</a></h3>';
                if (array_key_exists('username', $_SESSION) && $topic['username'] === $_SESSION['username']) {
                    echo '<a href="' . site_url('forum') . '/editTopic/' . $topic['topic_id'] . '"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>'
                    . '<a href="' . site_url('forum') . '/deleteTopic/' . $topic['topic_id'] . '" "><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                }
                echo '<p>' . $lang->GetPostedBy() . $topic['username'] . $lang->GetPostedOn() . $topic['date_time'] . '.</p>';
            }
            ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
