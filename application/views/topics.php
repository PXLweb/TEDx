<div class="container">
    <h1 class="text-center"><?php echo $lang->getSubjects(); ?></h1>

    <div class="row">

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
                echo '<p class="text-center my-error">' . $lang->getOnlyUsersWarning() . '</p>';
                echo '<p class="text-center"><a class="btn btn-lg btn-primary" href="' . site_url('login') . '">' . $lang->getLoginButton() . '</a></p>';
            } else {
                echo '<p class="text-center">' . 
                        '<input type="submit" class="btn btn-lg btn-primary" value="' . $lang->getNewButton() . '" /></p>';
            }
           
            ?>
            </form>
        </div>

        <!--Topics dashboard-->
        <div class="col-sm-7 blog-main">
            <?php
            $forumActionLink = site_url('forum') . '/posts/';
            if (empty($topics)) {
                echo '<h3 class="text-center">Geen onderwerpen. Schrijf de eerste!</h3>';
            }

            foreach ($topics as $topic) {
                echo '<a href="' . $forumActionLink . $topic['topic_id'] . '"><h3>' . $topic['subject'] . '</h3></a>';
                echo '<p>' . $lang->GetPostedBy() . $topic['username'] . $lang->GetPostedOn() . $topic['date_time'] . '.</p>';
                if ($topic['username'] === $_SESSION['username']) {
                    echo '<div class="btn-group">';
                    echo '<button type="button" class="btn btn-default">' . $lang->getEditButton() . '</button>';
                    echo '<button type="button" class="btn btn-default">' . $lang->getDeleteButton() . '</button>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
