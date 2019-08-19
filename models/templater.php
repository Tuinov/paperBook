<?php

function templation($views, $params = []) {

    ob_start();
    extract($params);
    include 'views/' . $views . '.php';
    return ob_get_clean();
}