<?php
include __DIR__ . "/Includes/header.php";
?>
<div class="navTablist">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <!-- <a class="nav-link active" id="acceuil-tab" data-toggle="tab" href="accueil.php" role="tab" aria-selected="true">Acceuil</a> -->

      <a class="nav-link" id="accueil-tab" data-toggle="tab" href="" role="tab" aria-selected="true">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="promo-tab" data-toggle="tab" href="" role="tab" aria-selected="false">Promotions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="" role="tab" aria-selected="false">Utilisateurs</a>
    </li>
  </ul>
</div>

<?php
include __DIR__ . "/Includes/footer.php";
?>