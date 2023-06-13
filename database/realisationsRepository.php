<?php

require_once 'pdo.php';

class realisationsRepository
{
    public function findAll()
    {
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM realisations');
        $query->execute();
        $realisations = $query->fetchAll(PDO::FETCH_ASSOC);

        return $realisations;
    }

    public function find($id)
    {
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM realisations WHERE id = :id');
        $query->execute(['id' => $id]);
        $realisation = $query->fetch(PDO::FETCH_ASSOC);

        return $realisation;
    }
}