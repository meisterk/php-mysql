<?php
interface SchuelerDAO
{
    function create(Schueler $schueler);
    function findAll();
    function findById($id);
    function update(Schueler $schueler);
    function delete(Schueler $schueler);
}