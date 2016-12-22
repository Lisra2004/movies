<?php

namespace Model\Manager;

use Model\Db;
use PDO;


class YearManager // class permettant de prndre toutes les annees issus de la table movies de la BDD
{
  public function findAllYear()
  {
    $sql = "SELECT DISTINCT year FROM movie";
    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $years = $stmt->fetchAll();
    return $years;
  }
}
