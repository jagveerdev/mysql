<?php

function pr( $e ) {
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}

function vd( $e ) {
    echo "<pre>";
    var_dump($e);
    echo "</pre>";
}

$all_subjects = array(
    'php' => 'PHP',
    'html' => 'HTML',
    'css' => 'CSS',
    'js' => 'Java Script',
    'jquery' => 'JQuery',
    'asp' => 'ASP.Net',
);