<?php

namespace Model\Manager;

use Model\Db;
use PDO;
use \Model\Entity\Demo;
use \Model\Entity\Users;


class UserManager
{
// METTRE EN PLACE INSCRIPTION ET AUTHENTIFICATION
  public function createUser($users)
  {
    $sql = "INSERT INTO users (username, pwd, email, token, role)
            VALUES (:username, :pwd, :email, :token, :role)";

    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":username", $users->getUsername() );
    $stmt->bindValue(":pwd", $users->getPwd());
    $stmt->bindValue(":email", $users->getEmail());
    $stmt->bindValue(":token", $users->getToken());
    $stmt->bindValue(":role", $users->getRole());
    return $stmt->execute();

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
