<?php

include_once('Mutator.php');

$str    = htmlspecialchars($_POST['input']);
$indent = htmlspecialchars($_POST['indent']);
$fluent = ($_POST['fluent'] == 'true') ? true : false;

$out = new Mutator($str);

$out->setFluent($fluent)
    ->setIndent($indent)
    ->setNewline("\r\n")
    ->setScope("public")
    ->setUcFirst(true);

echo $out->output();