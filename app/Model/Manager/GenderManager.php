<?php

namespace Model\Manager;

use Model\Db;
use PDO;


class GenderManager // class permettant de prndre tous les genres issus de la table genres de la BDD
{
  public function findAll()
  {
    $sql = "SELECT * FROM genres";
    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $genres = $stmt->fetchAll();
    return $genres;
  }
}
