<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* add all extenstion want to delete */
$delete_file = ['txt','tar','jpg'];

foreach ($delete_file as $ext) {
    $files = glob('./*.' . $ext);
    foreach ($files as $file) {
        if (is_file($file)) {
            echo $file . "<br>";
            var_dump(unlink($file));
        }
    }
}
