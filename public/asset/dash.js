const accueil = document.getElementById("accueil");
const promo = document.getElementById("promotions");
const utilisateurs = document.getElementById("utilisateurs");

const btnAccueil = document.getElementById("accueil-tab");
const btnPromo = document.getElementById("promo-tab");
const btnUtilisiteurs = document.getElementById("utilisateurs-tab");

btnAccueil.addEventListener("click", () => {
  accueil.style.display = "block";
  promo.style.display = "none";
  utilisateurs.style.display = "none";
});

btnPromo.addEventListener("click", () => {
  accueil.style.display = "none";
  promo.style.display = "block";
  utilisateurs.style.display = "none";
});

btnUtilisiteurs.addEventListener("click", () => {
  accueil.style.display = "none";
  promo.style.display = "none";
  utilisateurs.style.display = "block";
});

console.log("kjhfgljkhkg");