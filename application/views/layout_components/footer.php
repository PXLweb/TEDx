<!--FOOTER-->
<footer class="footer">
    <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php echo date("Y"); ?>  TEDx PXL &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </div>
</footer>

<!--SCRIPTS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="<?php echo site_url('assets/docs/assets/js/vendor/holder.min.js') ?>"></script>
<!--IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo site_url('assets/docs/assets/js/ie10-viewport-bug-workaround.js') ?>"></script>

<?php
if ($lang->getViewName() == 'register' ||
        $lang->getViewName() == 'login' ||
        $lang->getViewName() == 'forum') {
    ?>
    <script src="<?php echo site_url('assets/js/validator.js'); ?>"></script>
<?php } ?>

<!--This switches the active class for "nav a"-->
<script type="text/javascript">
    $(".nav a").on("click", function () {
        $(".nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->




</body>

</html>