<?php

namespace Model\Entity;

class Demo
{
	private $id; 					//clef primaire

	private $validationErrors = []; //contient les erreurs de validation

	private $imdbId; // affiche du film
	private $title; // titre des films
	private $year; // annee de sortie
	private $cast; // casting du film
	private $directors;
	private $writers;
	private $plot;
	private $rating;
	private $votes;
	private $runtime;
	private $trailerUrl;
	private $genre;
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
	 * Retourne un booléen en fonction de si l'entité est valide pour une insertion en bdd
	 */
	public function isValid()
	{
		$isValid = true;

		if (empty($this->title)) {
			$isValid = false;
			$this->validationErrors[] = "Veuillez mettre un titre svp !";
		}
		if (empty($this->imdbld)) {
			$isValid = false;
			$this->validationErrors[] = "Veuillez selectionner une affiche svp !";
		}
		if (empty($this->plot)) {
			$isValid = false;
			$this->validationErrors[] = "Veuillez renseigner un synopsis svp !";
		}


		//valider les données de l'instance ici

		return $isValid;
	}

	/**
	 * getter pour les erreurs de validation
	 */
	public function getValidationErrors()
	{
		return $this->validationErrors;
	}

	/**
	 * Pas besoin de setter pour l'id, MySQL s'en charge
	 */
	public function getId()
	{
		return $this->id;
	}



    public function getImdbId()
    {
        return $this->imdbId;
    }


    public function setImdbld($imdbId)
    {
        $this->imdbId = $imdbId;

        return $this;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }


    public function getYear()
    {
        return $this->year;
    }


    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }


    public function getCast()
    {
        return $this->cast;
    }


    public function setCast($cast)
    {
        $this->cast = $cast;

        return $this;
    }


    public function getDirectors()
    {
        return $this->directors;
    }


    public function setDirectors($directors)
    {
        $this->directors = $directors;

        return $this;
    }


    public function getWriters()
    {
        return $this->writers;
    }


    public function setWriters($writers)
    {
        $this->writers = $writers;

        return $this;
    }


    public function getPlot()
    {
        return $this->plot;
    }


    public function setPlot($plot)
    {
        $this->plot = $plot;

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


		public function getVotes()
		{
				return $this->votes;
		}


		public function setVotes($votes)
		{
				$this->votes = $votes;

				return $this;
		}


    public function getRuntime()
    {
        return $this->runtime;
    }


    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }


    public function getTrailerUrl()
    {
        return $this->trailerUrl;
    }


    public function setTrailerUrl($trailerUrl)
    {
        $this->trailerUrl = $trailerUrl;

        return $this;
    }


    public function getGenre()
    {
        return $this->genre;
    }


    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

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

		public function getIdMovieUser()
    {
        return $this->idMovieUser;
    }


    public function setIdMovieUser($idMovieUser)
    {
        $this->idMovieUser = $idMovieUser;

        return $this;
    }

		public function getRatingUser()
    {
        return $this->ratingUser;
    }


    public function setRatingUser($ratingUser)
    {
        $this->ratingUser = $ratingUser;

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

		public function getRole()
    {
        return $this->role;
    }


    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

		public function getToken()
    {
        return $this->token;
    }


    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }



}
