<div class="container">
    <div class="blog-header">
        <h1 class="blog-title"><?php echo $_SESSION['topicSubject'] ?></h1>
<!--        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>-->
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php foreach ($posts as $post): ?>
                <div class="blog-post">
                    <h2 class="blog-post-title"><?= $post['title'] ?></h2>
                    <p class="blog-post-meta"><?= $post['date_time'] ?> door <a href="#"><?= $post['username'] ?></a></p> 
                    <p><?= $post['content'] ?></p>
                </div>   
            <?php endforeach ?>

            <nav>
                <ul class="pager">
                    <li><a href="#"><?php echo $lang->getPreviousButton(); ?></a></li>
                    <li><a href="#"><?php echo $lang->getNextButton(); ?></a></li>
                </ul>
            </nav>

            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $lang->getCommentTitle(); ?></h2>
                <p class="blog-post-meta"><?php echo $lang->getCommentMeta(); ?></p>
                <?php
                echo form_open('forum/postComment', [
                    'class' => 'form-group',
                    'data-toggle' => 'validator',
                    'role' => 'form',
                    'id' => 'myForm'
                ]);
                ?>
                <!--Name-->
                <div class="form-group">
                    <label for="name"><?php echo $lang->getNameLabel(); ?></label>
                    <input type="text" class="form-control" name="name" id="name" data-error="<?php echo $lang->getNameWarning(); ?>" required/>
                    <div class="help-block with-errors"></div>
                </div>

                <!--E-mail-->
                <div class="form-group">
                    <label for="email"><?php echo $lang->getEmailLabel(); ?></label>
                    <input type="email" class="form-control" name="email" id="email" data-error="<?php echo $lang->getEmailWarning(); ?>" required />
                    <div class="help-block with-errors"></div>
                </div>

                <!--Website-->
                <div class="form-group">
                    <label for="website"><?php echo $lang->getWebsiteLabel(); ?></label>
                    <input type="text" class="form-control" name="website" id="website" />
                </div>

                <!--Title-->
                <div class="form-group">
                    <label for="title"><?php echo $lang->getTitleLabel(); ?></label>
                    <input type="text" class="form-control" name="title" id="title"/>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!--Comment-->
                <div class="form-group">
                    <label for="comment"><?php echo $lang->getCommentLabel(); ?></label>
                    <textarea rows="6" class="form-control" name="comment" id="comment" data-error="<?php echo $lang->getCommentWarning(); ?>" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>

                <!--Submit-->
                <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="<?php echo $lang->getPostCommentButton(); ?>" id="myButton" />
            </div>   

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
 IE10 viewport hack for Surface/desktop Windows 8 bug 
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>-->