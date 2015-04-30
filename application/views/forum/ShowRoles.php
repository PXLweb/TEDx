<?php
// $page_title will be used in <title></title> inside forum-header.php
$page_title = basename(__FILE__);

// includes helpers/bootstrap-includes.php
require 'application/views/layout_components/forum-header.php';
?>

<?php foreach ($roles as $r): ?>
    <div class="row">
        <p class="col-md-6 col-sm-6 col-xs-6 text-left"><?= $r->role_id ?></p>
        <p class="col-md-6 col-sm-6 col-xs-6 text-left"><?= $r->role_name ?></p>
    </div>
<?php endforeach; ?>


<?php
require 'application/views/layout_components/forum-footer.php';

//    echo '<div class="row">';
//    echo '<p class="col-md-6 col-sm-6 col-xs-6 text-left">' . $r->role_id . '</p><p class="col-md-6 col-sm-6 col-xs-6 text-left">' . $r->role_name . '</p>';
//    echo '</div>';