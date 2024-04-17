<?php
include __DIR__ . "/Includes/header.php";
?>

<!-- <div class="navTablist">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="accueil-tab" data-toggle="tab" href="">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="promo-tab" data-toggle="tab" href="">Promotions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="">Utilisateurs</a>
    </li>
  </ul>
</div> -->

<!-- <div class="contentDash">
  <php
  switch ($section) {
    case 'dashboard':
      switch ($action) {
        case 'accueil':
          include_once __DIR__ . '/accueil.php';
          break;

        case 'promotions':
          include_once __DIR__ . '/promotions.php';
          break;

        case 'utilisateurs':
          include_once __DIR__ . '/utilisateurs.php';
          break;
      }
      break;

    default:

      break;
  }
  ?>
</div> -->


<?php
include_once __DIR__ . '/accueil.php';

include __DIR__ . "/promotions.php";
include __DIR__ . "/Includes/footer.php";
?>