<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=mh449';
    $username = 'mh449';
    $password = 'P8a5oOaq';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
