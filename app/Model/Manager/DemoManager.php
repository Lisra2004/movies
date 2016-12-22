<?php

namespace Model\Manager;

use Model\Db;
use PDO;
use Model\Entity\Demo;
use Controller\DefaultController;

/**
 * Contient toutes les méthodes faisant des requêtes à la base de données
 */
class DemoManager
{
  public function findHomeMovie($page)
  {
    $numPerPage = 20; // nbr de film par page
    $offset = ($page-1) * $numPerPage; // on ne peut mettre que des vraies valeurs dans les requetes SQL // nbr de film a sauter par page
    // selection de tous les films par ordre de rang de note
    $sql = "SELECT * FROM movies ORDER BY rating DESC LIMIT $numPerPage OFFSET $offset";

    $dbh = Db::getDbh();

    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Demo');

  return $results;
  }

  public function findOne($search) // selection par mots cle
  {
  $sql = "SELECT * FROM movies
          WHERE title LIKE :search OR cast LIKE :search OR directors LIKE :search OR writers LIKE :search OR plot LIKE :search";

  $dbh = Db::getDbh();

  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(":search", $search); // on echange la variable de la requete sql
  $stmt->execute();
  $results = $stmt->fetchObject('\Model\Entity\Demo');

  return $results;
  }

  public function create(Demo $post)
  {
    $sql = "INSERT INTO movies (imdbId, title, year, cast, directors, writers, plot, runtime, trailerUrl, dateCreated, dateModified)
            VALUES (:imdbId, :title, :year, :cast, :directors, :writers, :plot, :runtime, :trailerUrl, NOW(), NOW() )";

    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":imdbId", $post->getImdbId() );
    $stmt->bindValue(":title", $post->getTitle() );
    $stmt->bindValue(":year", $post->getYear() );
    $stmt->bindValue(":cast", $post->getCast() );
    $stmt->bindValue(":directors", $post->getDirectors() );
    $stmt->bindValue(":writers", $post->getWriters() );
    $stmt->bindValue(":plot", $post->getPlot() );
    $stmt->bindValue(":runtime", $post->getRuntime() );
    $stmt->bindValue(":trailerUrl", $post->getTrailerUrl() );

    $stmt->execute();

    $bdh->lastInsertId();

    $sql = "INSERT INTO movies_genres (movieId, genreId)
            VALUES (:movieid, :genreId)";

    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":movieId", $post->getMovieId() );
    $stmt->bindValue(":genreId", $post->getGenreId() );

    $stmt->execute();
  }

  public function countAll() // pour avoir le nombre de page pour la pagination
  {
    $sql = "SELECT COUNT(*) FROM movies";
    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn(); // qd on recup 1 seule cellule

    return $count;

  }

  public function findMovieSelect( $id) // selection par mots cle
  {
  $sql = "SELECT imdbId, title, year, cast, directors, writers, plot, rating, votes, runtime, trailerUrl
          FROM movies
          WHERE id = $id";

  $dbh = Db::getDbh();
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchObject('\Model\Entity\Demo');

  return $results;
  }

  public function findGenderManager( $id) // selection par id ds le $_GET
  {
  $sql = "SELECT *
          FROM genres ge
          INNER JOIN movies_genres mg
          ON ge.id = mg.genreId
          INNER JOIN movies mv
          ON mg.genreId = mv.id
          WHERE mv.id = $id";

  $dbh = Db::getDbh();
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchObject('\Model\Entity\Demo');

  return $results;
  }

  public function findByGender( $genre) // pour la recherche par genre avec search ds le $_GET
  {
    $sql = "SELECT *
            FROM movies mv
            INNER JOIN movies_genres mg
            ON mv.id = mg.movieId
            INNER JOIN genres ge
            ON ge.id = mg.genreId
            WHERE ge.name = :gender
            ORDER BY rating DESC";

    $dbh = Db::getDbh();

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":gender", $genre->getGenre() );
    $stmt->execute();
    $results = $stmt->fetchObject('\Model\Entity\Demo');

    return $results;

  }

  public function findByYear( $year) // pour la recherche par annee
  {
    $sql = "SELECT *
            FROM movies
            WHERE year = :year
            ORDER BY rating DESC";

    $dbh = Db::getDbh();

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":year", $year->getYear() );
    $stmt->execute();
    $results = $stmt->fetchObject('\Model\Entity\Demo');

    return $results;
  }

  public function updateMovie() //$var a determiner
  {
    $sql = "UPDATE movies
            SET :column = :modif
            WHERE id = :id";

    $dbh = Db::getDbh();
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":column", $column->getColumn() ); // choix de la colonne a modifier
    $stmt->bindValue(":modif", $modif->getModif()); // modif a faire
    $stmt->bindValue(":id", $id); // id du film a modifier
    $stmt->execute();
  }

}
