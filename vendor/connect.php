<?php
    $connect = mysqli_connect('localhost', 'root', '', 'testi');
    if (!$connect){
        die('Error connect to database');
    }