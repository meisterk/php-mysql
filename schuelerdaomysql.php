<?php
require_once('schuelerdao.php');

class SchuelerDAOMySQL implements SchuelerDAO
{
    private $connection;

    function __construct()
    {
        $dbname = 'testdb';
        $dbuser = 'testuser';
        $dbpassword = 'test123';
        $this->connection = new PDO(
            "mysql:host=localhost;dbname=$dbname",
            $dbuser,
            $dbpassword
        );
    }

    function create(Schueler $schueler)
    {
        $vorname = $schueler->getVorname();
        $nachname = $schueler->getNachname();
        $sql = "INSERT INTO schueler
                SET vorname = '$vorname',
                nachname = '$nachname'";
        $this->connection->exec($sql);
    }

    function findAll()
    {
    }

    function findById($id)
    {
    }

    function update(Schueler $schueler)
    {
    }

    function delete(Schueler $schueler)
    {
    }
}