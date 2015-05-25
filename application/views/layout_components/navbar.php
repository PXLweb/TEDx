
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                                      
            </button>
            <a class="navbar-brand" href="<?php echo $navbar->getHomeRoute(); ?>"><?php echo $navbar->getBrandName(); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">                
                <li><a href="<?php echo $navbar->getEventsRoute(); ?>"><?php echo $navbar->getMenuEvents(); ?></a></li>
                <li><a href="<?php echo $navbar->getForumRoute(); ?>"><?php echo $navbar->getMenuForum(); ?></a></li>
                <li><a href="<?php echo $navbar->getAboutRoute(); ?>"><?php echo $navbar->getMenuAbout(); ?></a></li>
                
                <?php
                if (isset($_SESSION['logged_in']) == FAlSE) {
                    echo '<li><a href="' . $navbar->getRegisterRoute() . '">' .
                    $navbar->getMenuRegister() . '</a></li>';                 
                                    }
                ?>          
                    
                
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li id="facebook"><a class="social facebook" href="https://www.facebook.com/TEDxUHasselt">Facebook</a></li>
                <li id="twitter"><a class="social twitter" href="https://twitter.com/TEDxUHasselt">Twitter</a></li>
                <li id="flickr"><a class="social flickr" href="http://www.flickr.com/photos/69639467@N06/">Flickr</a></li>
                <li>
                    <form class="navbar-form" action="http://localhost/tedx/search/execute_search" role="search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </li>
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
                    echo '<li><a href="' . $navbar->getProfileRoute() . '">' .
                    $_SESSION['username'] . '</a></li>';
                    echo '<li><a href="' . site_url('/home/logout/') . '">' .
                    'Log Out</a></li>';
                                    }
                else{
                   echo '<li><a href="' . $navbar->getLoginRoute() . '">' .
                    'Log in</a></li>';                    
                    
                }
                ?> 
            </ul>
        </div>
    </div>
</nav>







