
<h1><?= $movie->getTitle(); ?></h1>
<div>
    <img src="<?= BASE_URL ?>public/posters/<?= $movie->getImdbId() ?>.jpg" />
</div>
<div class="ratingvote">
  Rating: <?= $movie->getRating(); ?><br>
  Votes: <?= $movie->getVotes(); ?><br>
</div>

<p>
  <div class="yearruntime">
    Date de sortie: <?= $movie->getyear(); ?>
    Runtime: <?= $movie->getRuntime(); ?><br>
    <!--Genres: ?= $genre->getGenre(); ?>  A FINIR DE METTRE EN PLACE-->
  </div>
</p>

<p>
  <div class="cast">
    Casting: <?= $movie->getCast(); ?>
  </div>
</p>

<p>
  <div class="directors">
    Directors: <?= $movie->getDirectors(); ?>
  </div>
</p>

<p>
  <div class="writers">
    Writers: <?= $movie->getWriters(); ?>
  </div>
</p>

<p>
  <div class="plot">
    Plot:
      <div> <?= $movie->getPlot(); ?> </div>
  </div>
</p>

  <div class="trailerUrl">
    TrailerUrl: <a href="<?= $movie->getTrailerUrl(); ?>">Movie_Link</a>
  </div>
</p>
