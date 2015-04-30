<!DOCTYPE html>
<html lang="en">
    <head>
        <title>tabs</title>
        <!-- https://gist.github.com/mnewt/4228037 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/navbar_tabs.css" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <style>
            a:focus {
                outline: none;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div id="content">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                    <li><a href="#events" data-toggle="tab">Events</a></li>
                    <li><a href="#forum" data-toggle="tab">Forum</a></li>
                    <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
                    <li><a href="#green" data-toggle="tab">Green</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <h1>Home</h1>
                        <p>Hier komt de homepage</p>
                    </div>
                    <div class="tab-pane fade" id="events">
                        <h1>Events</h1>
                        <p>hier komen de events</p>
                    </div>
                    <div class="tab-pane fade" id="forum">
                        <h1>Forum</h1>
                        <p>hier komt het forum</p>
                    </div>
                    <div class="tab-pane fade" id="yellow">
                        <h1>Yellow</h1>
                        <p>yellow yellow yellow yellow yellow</p>
                    </div>
                    <div class="tab-pane fade" id="green">
                        <h1>Green</h1>
                        <p>green green green green green</p>
                    </div>
                    
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function ($) {
                    $('#tabs').tab();
                });
            </script>    


        </div> <!-- container -->

        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    </body>
</html>

<!--            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $('#tabs').tab();
                });
            </script>  -->