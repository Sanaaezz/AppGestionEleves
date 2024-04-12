barre de nav acceuil
a revoir
<!-- <div class="">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="acceuil-tab" data-toggle="tab" href="accueilView.php" role="tab" aria-selected="true">Acceuil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="promo-tab" data-toggle="tab" href="promotionsView.php" role="tab" aria-selected="false">Promotions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="utilisateursView.php" role="tab" aria-selected="false">Utilisateurs</a>
    </li>
  </ul>
</div> -->
<div class="tab-content" id="myTabContent">
  <!-- <div class="tab-pane fade show active" id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab"> -->
    <div class="tab-pane fade show" id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab">
      <h2>Cours du jour</h2>
      <div class="d-flex flex-column">
        <p>date du cours</p>
        <h3>nom de la promo - creneau du cours</h3>
        <p>nombre de participants</p>
        <label for="codeCours">Code *</label>
        <input type="text" name="codeCours" id="codecours">
      </div>
      <div>
        bouton faire inter en JS
        <button>Valider presence</button>
        <button>Signatures en cours</button>
        <button>Signatures recueillies</button>
      </div>

    </div>
    <div class="tab-pane fade" id="promotions" role="tabpanel" aria-labelledby="promo-tab">...</div>
    <div class="tab-pane fade" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">...</div>
  </div>