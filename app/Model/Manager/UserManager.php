<?php

namespace Model\Manager;

use Model\Db;
use PDO;


class UserManager
{
// METTRE EN PLACE INSCRIPTION ET AUTHENTIFICATION
  public function createUser(Login $username)
  {
    $sql = "INSERT INTO users (username, pwd, email)
            VALUES (:username, :pwd, :email)";

    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":username", $username->getUsername() );
    $stmt->bindValue(":pwd", $pwd->getPwd());
    $stmt->bindValue(":email", $email->getEmail());
    $stmt->execute();

  }

  public function deleteUser(Login $username)
  {
    $sql = "DELETE
            FROM users
            WHERE username = :username";

    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":username", $username->getUsername());
    $stmt->execute();

  }

  public function findByUsername(Login $username)
  {
    $sql = "SELECT *
            FROM users
            WHERE username = :username";

    $dbh = Db::getDbh();

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":username", $username->getUsername());
    $stmt->execute();
    $results = $stmt->fetchObject('\Model\Entity\Demo');

    return $results;

  }

  public function findByEmail(Login $email)
  {
    $sql = "SELECT *
            FROM users
            WHERE email = :email";

    $dbh = Db::getDbh();

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":email", $email->getEmail());
    $stmt->execute();
    $results = $stmt->fetchObject('\Model\Entity\Demo');

    return $results;

  }

}
