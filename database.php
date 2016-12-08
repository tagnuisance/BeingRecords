<?php
/**
 * Created by PhpStorm.
 * User: n0195014
 * Date: 10/10/16
 * Time: 10:01 AM
 */

$dsn = 'mysql:host=beingrex.db.7344358.hostedresource.com;dbname=beingrex';
$hostname = 'beingrex.db.7344358.hostedresource.com';
$username = 'beingrex';
$password = 'Howling1!';

try {
    $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}

?>


