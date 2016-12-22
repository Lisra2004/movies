<?php

namespace Model\Entity;

use Controller\Sanitized;


class Login
{
  private $iduser;
  private $username;
  private $pwd;
  private $email;
  private $idMovie;
  private $rating;
  private $idWatchlist;

  // $_POST = sanitize($_POST); //  voir l'emplacement pour le lancer


    public function getIduser()
    {
        return $this->iduser;
    }


    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    public function getPwd()
    {
        return $this->pwd;
    }


    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getIdMovie()
    {
        return $this->idMovie;
    }


    public function setIdMovie($idMovie)
    {
        $this->idMovie = $idMovie;

        return $this;
    }


    public function getRating()
    {
        return $this->rating;
    }


    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }


    public function getIdWatchlist()
    {
        return $this->idWatchlist;
    }


    public function setIdWatchlist($idWatchlist)
    {
        $this->idWatchlist = $idWatchlist;

        return $this;
    }

}
