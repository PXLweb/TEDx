<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo basename(__FILE__); ?></title>
        <link rel="stylesheet" href="../css/navbar.css">
        <?php include '../helpers/bootstrap-includes.php'; ?>
        <style>
            #brand{
                font-weight: bold;
                color: red;
            }
        </style>
    </head>
    <body>
        <!--navbar-static-top removed the rounded corners-->
        <!--classes are unknown because the include of bootstrap.css etc. happens at the resultpage-->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid"> <!-- fluid fills to total width -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="brand" href="#">TEDx</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li>
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>  
                        </li>
                    </ul>                    
                </div>
            </div>
        </nav>
        <!--This switches the active class between for "nav a"-->
        <script type="text/javascript">
            $(".nav a").on("click", function () {
                $(".nav").find(".active").removeClass("active");
                $(this).parent().addClass("active");
            });
        </script>
    </body>
</html>