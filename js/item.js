// Nombre d'éléments à afficher par page
const itemsPerPage = 5;

// Référence à la liste d'éléments
const itemsList = document.querySelector(".art-container");

// Récupérer tous ls éléments de la liste
const items = itemsList.children;

// Calculer le nombre de pages nécessaires
const numberOfPages = Math.ceil(items.length / itemsPerPage);

// Compteur pour la page actuelle
let currentPage = 1;

const pageNumber = document.createElement("span");

// Afficher les éléments pour la première page
showPage(currentPage);

// Générer les boutons de navigation
const pagination = document.createElement("div");
pagination.classList.add("pagination");
const prevButton = document.createElement("button");
prevButton.classList.add("soumettre");
prevButton.innerText = "Précédent";
prevButton.disabled = true;
prevButton.addEventListener("click", () => {
  showPage(--currentPage);
  prevButton.disabled = currentPage === 1;
  nextButton.disabled = false;
});
const nextButton = document.createElement("button");
nextButton.classList.add("soumettre");
nextButton.innerText = "Suivant";
nextButton.disabled = false;
nextButton.addEventListener("click", () => {
  showPage(++currentPage);
  prevButton.disabled = false;
  nextButton.disabled = currentPage === numberOfPages;
});
pagination.appendChild(prevButton);
pageNumber.innerText = `Page ${currentPage} of ${numberOfPages}`;
pagination.appendChild(pageNumber);
pagination.appendChild(nextButton);
itemsList.after(pagination);

// Fonction pour afficher une page donnée
function showPage(page) {
  // Calculer les index de départ et de fin pour les éléments à afficher
  const startIndex = (page - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  // Boucle pour cacher tous les éléments
  for (let i = 0; i < items.length; i++) {
    items[i].style.display = "none";
  }

  // Boucle pour afficher les éléments pour la page donnée
  for (let i = startIndex; i < endIndex; i++) {
    if (items[i]) {
      items[i].style.display = "flex";
    }
  }

  // Mettre à jour le numéro de page
  pageNumber.innerText = `Page ${currentPage} of ${numberOfPages}`;
}
