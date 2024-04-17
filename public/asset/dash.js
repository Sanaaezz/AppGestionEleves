// console.log("it works");

async function connexion() {
 
  let inputEmail = document.getElementById("email").value;
  let inputPassword = document.getElementById("password").value;
  
  let user = {
    email_utilisateur: inputEmail,
    password_utilisateur: inputPassword,
  };
  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(user),
  };
  fetch("/login", params)
  .then((res) => res.json())
  .then((data) => {
    console.log(data);
    // if (data.status === 201) {
    //    window.location.href= "../src/Views/dashbord.php"
        
    //   }
    // })
    // .catch((error) => console.error("Error:", error));
  
  });

}

//Lire une donnée complexe (objet)
// let obj = JSON.parse(localStorage.getItem("key"));


// let accueilTab = document.getElementById("accueil-tab");
// let accueilSection = document.getElementById("accueilSection");
// accueilTab.addEventListener("click", () => {
//   accueilSection.style.display = "block";
// });



// ______________changement de div dans le dashboard____________________

// const accueil = document.getElementById("accueil");
// const promo = document.getElementById("promotions");
// const utilisateurs = document.getElementById("utilisateurs");

// const btnAccueil = document.getElementById("accueil-tab");
// const btnPromo = document.getElementById("promo-tab");
// const btnUtilisiteurs = document.getElementById("utilisateurs-tab");

// btnAccueil.addEventListener("click", () => {
  
//   accueil.style.display = "block";
//   promo.style.display = "none";
//   utilisateurs.style.display = "none";
// });

// btnPromo.addEventListener("click", () => {
//   accueil.style.display = "none";
//   promo.style.display = "block";
//   utilisateurs.style.display = "none";
// });

// btnUtilisiteurs.addEventListener("click", () => {
//   accueil.style.display = "none";
//   promo.style.display = "none";
//   utilisateurs.style.display = "block";
// });


