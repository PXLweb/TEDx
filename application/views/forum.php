<?php

foreach ($categories as $category) {
    echo 'Id: ' . $category['cat_id'] . '<br />';
    echo 'Name: ' . $category['name'] . '<br />';
    echo 'Description: ' . $category['description'] . '<br /><br />';
}
