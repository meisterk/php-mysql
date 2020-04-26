<?php
// Create database and user
$rootpassword = 'mysql';

$dbname = 'testdb';
$dbuser = 'testuser';
$dbpassword = 'test123';

try {
    // CONNECTION
    echo '1. Try to connect to MySQL ...<br>';
    $connection = new PDO(
        "mysql:host=localhost",
        'root',
        $rootpassword
    );
    echo 'Connection is ok.<br><br>';

    // CREATE DATABASE
    echo "2. Try to create database '$dbname' ...<br>";
    $sql = "CREATE DATABASE $dbname";
    $connection->exec($sql);
    echo "Database '$dbname' created successfully.<br><br>";

    // CREATE USER
    echo "3. Try to create user '$dbuser' ...<br>";
    $sql = "CREATE USER '$dbuser'@'localhost' IDENTIFIED BY '$dbpassword'";
    $connection->exec($sql);
    echo "User '$dbuser' created successfully.<br><br>";

    // SET RIGHTS
    echo "4. Try to set rights for user '$dbuser' ...<br>";
    $sql = "GRANT ALL PRIVILEGES ON $dbname.* TO '$dbuser'@'localhost'";
    $connection->exec($sql);
    echo "Rights for '$dbuser' set successfully.<br><br>";

    // CLOSE CONNECTION
    $connection = null;
    echo "5. Connection to MySQL closed.<br><br>";
} catch (PDOException $e) {
    echo 'Verbindung fehlgeschlagen:<br>' .
        $e->getMessage();
}