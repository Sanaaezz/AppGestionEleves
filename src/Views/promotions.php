<?php

use src\Repositories\PromoRepository;

$promoRepo = new PromoRepository;

?>
<section class="promoSection">
  <div class="navTablist">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link " id="acceuil-tab" data-toggle="tab" href="" role="tab" aria-selected="false">Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" id="promo-tab" data-toggle="tab" href="" role="tab" aria-selected="true">Promotions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="" role="tab" aria-selected="false">Utilisateurs</a>
      </li>
    </ul>
  </div>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade " id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab">...</div>
    <div class="tab-pane fade show active" id="promotions" role="tabpanel" aria-labelledby="promo-tab">


      <!-- _________toutes les promotions tableau des promotions de Simplon -->
      <div>
        <div>
          <h2>Toutes les promotions</h2>
          <p>tableau des promotions de Simplon</p>
        </div>
        <table class="table">

          <thead>
            <tr>
              <th scope="col">Promotion</th>
              <th scope="col">Début</th>
              <th scope="col">Fin</th>
              <th scope="col">Places</th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <?php
          $promos = $promoRepo->getAllPromos();
          foreach ($promos as $promo) {
            $ID_promo = $promo->getIdPromo();
            $promoRepo = new PromoRepository;
          ?>
            <tbody>
              <tr>
                <td><?= $promo->getNomPromo() ?></td>
                <td><?= $promo->getDateDebutPromo() ?></td>
                <td><?= $promo->getDateFinPromo() ?></td>
                <td><?= $promo->getNombrePromo() ?></td>
                <td>
                  <a href=" "> Voir </a>
                  <a href=""> Editer </a>
                  <a href="" >Supprimer </a>
                </td>
              </tr>

            </tbody>
          <?php };
          ?>
        </table>
      </div>




      <!-- ______________creation d'une promotion ___________-->
      <div class="d-flex flex-column CreaPromo">
        <h2>Creation d'une promotion</h2>

        <label for="">Nom de la promotion</label>
        <input type="text">

        <label for="">Date de début</label>
        <input type="date">

        <label for="">Date de fin</label>
        <input type="date">

        <label for="">Place(s) disponible(s)</label>
        <input type="nomber">


      </div>



    </div>
    <div class="tab-pane fade" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">...</div>
  </div>
</section>