<?php
// $page_title will be used in <title></title> inside forum-header.php
$page_title = basename(__FILE__);

// includes helpers/bootstrap-includes.php
require '../layout_components/forum-header.php';
?>

<div class="col-md-4">
    <div class="cliente">Category name</div></div>
<div class="col-md-8">Topic subject</div>
<div class="col-md-4">Sprekers</div>
<div class="col-md-8">Spreker aanvragen</div>
<?php
//echo '<tr>';
//echo '<td class="leftpart">';
//echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
//echo '</td>';
//echo '<td class="rightpart">';
//echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
//echo '</td>';
//echo '</tr>';
?>


<?php
require '../layout_components/forum-footer.php';
