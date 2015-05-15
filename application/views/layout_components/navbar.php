<div class="navbar-wrapper">
    <nav id="navi" class="navbar navbar-inverse navbar-fixed-top">
        <!--<div id="navi" class="container">-->
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
                    <li class="dropdown">
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
                    </li>
                    <li><a href="<?php echo $navbar->getContactRoute(); ?>"><?php echo $navbar->getMenuContact(); ?></a></li>
                    <li><a href="<?php echo $navbar->getAboutRoute(); ?>"><?php echo $navbar->getMenuAbout(); ?></a></li>
                    <li><a href="<?php echo $navbar->getLoginRoute(); ?>"><?php echo $navbar->getMenuLogin(); ?></a></li>
                    <li><a href="<?php echo $navbar->getRegisterRoute(); ?>"><?php echo $navbar->getMenuRegister(); ?></a></li>
                    <li><a href="<?php echo $navbar->getForumRoute(); ?>"><?php echo $navbar->getMenuForum(); ?></a></li>
                    <li><a href="<?php echo $navbar->getEventsRoute(); ?>"><?php echo $navbar->getMenuEvents(); ?></a></li>
                    <li><a href="<?php echo $navbar->getProfileRoute(); ?>" class="pull-right hidden"></a></li>
                </ul>
            </div>
        <!--</div>-->
    </nav>
</div></div></div></div>