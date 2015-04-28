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
                    <li class="active"><a href="#red" data-toggle="tab">Red</a></li>
                    <li><a href="#orange" data-toggle="tab">Orange</a></li>
                    <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
                    <li><a href="#green" data-toggle="tab">Green</a></li>
                    <li><a href="#blue" data-toggle="tab">Blue</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane fade in active" id="red">
                        <h1>Red</h1>
                        <p>red red red red red red</p>
                    </div>
                    <div class="tab-pane fade" id="orange">
                        <h1>Orange</h1>
                        <p>orange orange orange orange orange</p>
                    </div>
                    <div class="tab-pane fade" id="yellow">
                        <h1>Yellow</h1>
                        <p>yellow yellow yellow yellow yellow</p>
                    </div>
                    <div class="tab-pane fade" id="green">
                        <h1>Green</h1>
                        <p>green green green green green</p>
                    </div>
                    <div class="tab-pane fade" id="blue">
                        <h1>Blue</h1>
                        <p>blue blue blue blue blue</p>
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