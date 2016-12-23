<?php

namespace Model\Entity;



/**
 *
 */
class Users
{
  private $iduser;
  private $username;
  private $pwd;
  private $email;
  private $idMovieUser;
  private $ratingUser;
  private $idWatchlist;
	private $role;
	private $token;


    /**
     * Get the value of Iduser
     *
     * @return mixed
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set the value of Iduser
     *
     * @param mixed iduser
     *
     * @return self
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get the value of Username
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of Username
     *
     * @param mixed username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of Pwd
     *
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of Pwd
     *
     * @param mixed pwd
     *
     * @return self
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Id Movie User
     *
     * @return mixed
     */
    public function getIdMovieUser()
    {
        return $this->idMovieUser;
    }

    /**
     * Set the value of Id Movie User
     *
     * @param mixed idMovieUser
     *
     * @return self
     */
    public function setIdMovieUser($idMovieUser)
    {
        $this->idMovieUser = $idMovieUser;

        return $this;
    }

    /**
     * Get the value of Rating User
     *
     * @return mixed
     */
    public function getRatingUser()
    {
        return $this->ratingUser;
    }

    /**
     * Set the value of Rating User
     *
     * @param mixed ratingUser
     *
     * @return self
     */
    public function setRatingUser($ratingUser)
    {
        $this->ratingUser = $ratingUser;

        return $this;
    }

    /**
     * Get the value of Id Watchlist
     *
     * @return mixed
     */
    public function getIdWatchlist()
    {
        return $this->idWatchlist;
    }

    /**
     * Set the value of Id Watchlist
     *
     * @param mixed idWatchlist
     *
     * @return self
     */
    public function setIdWatchlist($idWatchlist)
    {
        $this->idWatchlist = $idWatchlist;

        return $this;
    }

    /**
     * Get the value of Role
     *
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of Role
     *
     * @param mixed role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of Token
     *
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of Token
     *
     * @param mixed token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

}
