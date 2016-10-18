<?php
/**
 * Created by PhpStorm.
 * User: n0195014
 * Date: 10/10/16
 * Time: 10:01 AM
 */

$dsn = 'mysql:host=localhost;dbname=beingRecords';
$username = 'root';
$password = 'root';

try {
    $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>