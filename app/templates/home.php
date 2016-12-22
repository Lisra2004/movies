<h1>Accueil !</h1>

<div>
  <a href="?page=<?= ($currentpage-1) ?>">préc</a>
  <a href="?page=<?= ($currentpage+1) ?>">suiv</a>
</div>

<?php foreach ($movies as $movie ):  ?>
  <a class="movie" href="<?= BASE_URL ?>movie?id=<?= $movie->getId() ?>">
    <img src="<?= BASE_URL ?>public/posters/<?= $movie->getImdbId() ?>.jpg" class="img-thumbnail"/>
  </a>
<?php endforeach; ?>
