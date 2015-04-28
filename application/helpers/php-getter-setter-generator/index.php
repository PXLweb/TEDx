<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Mutator (getter, setter) generator for PHP variables</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Mutator (getter, setter) generator for PHP variables">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

        <script src="jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="bootstrap.min.js"></script>

        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-16170446-1']);
            _gaq.push(['_setDomainName', 'flowl.info']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

        <style>
            body {
                padding-top: 20px;
                padding-bottom: 40px;
            }

            .container-narrow {
                margin: 0 auto;
                max-width: 700px;
            }
        </style>

        <script>
            $(document).ready(function () {
                $('#generate').click(function () {
                    $.post(
                            'generate.php',
                            {
                                fluent: $('#inputFluent').is(':checked'),
                                indent: $('#inputIndent').val(),
                                input: $('#input').val()
                            },
                    function (data, stat) {
                        $('#output').val(data);
                    }
                    )
                });
                $('#generate').click();
            });
        </script>
    </head>
    <body>
    <center>
        <p>
            <script type="text/javascript"><!--
            google_ad_client = "ca-pub-8599698371237282";
                /* flowl_large_leaderboard */
                google_ad_slot = "2028977224";
                google_ad_width = 970;
                google_ad_height = 90;
                //-->
            </script>
            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
        </p>
    </center>

    <div class="container-narrow">
        <div>
            <h3 class="muted">Mutator (getter, setter) generator for PHP variables</h3>
            <p>supports options, fluent returns and Zend code style</p>
            <p>
                &bull; <a href="#usage">Class usage</a><br>
                &bull; <a href="Mutator.zip">Script download (zip)</a>
            </p>
        </div>

        <hr>

        <div class="alert alert-info">
            <p><strong>paste your variables</strong></p>
            <p>
                <textarea class="input-block-level" rows="12" id="input">
    private $outputTimeZone;
    private $alert = array();
    var $simpleTrigger = "trigger";
    $sample;
    $sample2 = 2;
                </textarea>
            </p>
        </div>

        <div class="alert alert-info">
            <p><strong>options</strong></p>
            <p>
            <form class="form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="inputEmail">line indent</label>
                    <div class="controls">
                        <input type="text" id="inputIndent" placeholder="    " value="    ">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" checked="checked" id="inputFluent" value="true"> fluent classes
                        </label>
                        <button type="button" class="btn" id="generate">generate getters and setters</button>
                    </div>
                </div>
            </form>
            </p>
        </div>

        <div class="alert alert-info">
            <p><strong>output</strong></p>
            <p>
                <textarea rows="12" class="input-block-level" id="output"></textarea>
            </p>
        </div>

        <div class="alert alert-info">
            <p><strong><a name="usage"></a>usage</strong></p>
            <p>
            <pre>
// Usage:
include_once('Mutator.php');

$str = '
    private $newline = "\r\n";
    private $fluent  = true;
    private $ucFirst = true;
    private $scope   = "public";
    private $indent  = "    ";
    private $input;
';

$out = new Mutator($str);

$out->setFluent(true)
    ->setIndent("    ")
    ->setNewline("\r\n")
    ->setScope("public")
    ->setUcFirst(true);

echo $out->output();
            </pre>
        </div>
    </body>
</html>
