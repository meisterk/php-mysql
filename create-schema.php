<?php
// Create schema
$dbname = 'testdb';
$dbuser = 'testuser';
$dbpassword = 'test123';

try {
    // CONNECTION
    echo '1. Try to connect to MySQL ...<br>';
    $connection = new PDO(
        "mysql:host=localhost;dbname=$dbname",
        $dbuser,
        $dbpassword
    );
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection is ok.<br><br>';

    // CREATE TABLE
    echo "2. Try to create table ...<br>";
    $sql =
        "CREATE TABLE schueler (
            id INT PRIMARY KEY AUTO_INCREMENT,
            vorname CHAR(20),
            nachname CHAR(20)
        )";
    $connection->exec($sql);
    echo 'Created table.<br><br>';

    // CLOSE CONNECTION
    $connection = null;
    echo "3. Connection to MySQL closed.<br><br>";
} catch (Exception $e) {
    echo 'Database error:<br>' .
        $e->getMessage();
}