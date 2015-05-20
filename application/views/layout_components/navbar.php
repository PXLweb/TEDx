<div class="navbar-wrapper">
    <?php $cssStyleTag = 'nav {display: hidden;}'; ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
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
                <li><a href="<?php echo $navbar->getContactRoute(); ?>"><?php echo $navbar->getMenuContact(); ?></a></li>
                <li><a href="<?php echo $navbar->getLoginRoute(); ?>"><?php echo $navbar->getMenuLogin(); ?></a></li>
                <li><a href="<?php echo $navbar->getRegisterRoute(); ?>"><?php echo $navbar->getMenuRegister(); ?></a></li>
                <li><form method="post" action="<?php echo base_url() ?>zoekresultaten.php/index"><input type="text" name="search"><button type="submit">Search</button></form></li>
            </ul>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
                echo '<ul class="nav navbar-nav pull-right">';
                echo '<li><a href="' . $navbar->getProfileRoute() . '">' .
                $_SESSION['username'] . ' ingelogd</a></li>';
                echo '<li><a href="' . site_url('/home/logout/') . '">' .
                'Uitloggen</a></li>';
                echo '</ul>';
            }
            ?> 
        </div>
    </nav>
</div>

<!--                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>-->