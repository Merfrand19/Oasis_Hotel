let link = document.getElementById("link");
let burger = document.getElementById("burger");
let ul = document.querySelector("ul");
link.addEventListener("click", function (e) {
  e.preventDefault();
  burger.classList.toggle("open");
  ul.classList.toggle("open");
});

let date = new Date();
let output =
  String(date.getDate()).padStart(2, "0") +
  "/" +
  String(date.getMonth() + 1).padStart(2, "0") +
  "/" +
  date.getFullYear();
console.log(output);

// Pour les restrictions d'input des dates de reservation

let inputDate = document.querySelectorAll('input[type="date"]');

inputDate[0].addEventListener("input", function () {
  let timestamp = Date.parse(inputDate[0].value) + 3600 * 24 * 1000;

  let date = new Date(timestamp);
  console.log(date);

  date =
    date.getFullYear() +
    "-" +
    toTwo(date.getMonth() + 1) +
    "-" +
    toTwo(date.getDate());

  inputDate[1].min = date;
  inputDate[1].disabled = false;
  function toTwo(a) {
    if (a < 10) {
      a = "0" + a;
    }
    return a;
  }

  // Pour l'affichage du prix

  let prix = document.querySelector(".price");
  let prix2 = document.querySelector(".prixTotal");
  let jour = document.querySelector(".nbrJour");
  let prixDeBase = prix.innerHTML;
  inputDate[1].addEventListener("input", function () {
    let timestamp =
      (Date.parse(inputDate[1].value) - Date.parse(inputDate[0].value)) / 1000;

    let nbrJour = timestamp / (3600 * 24);

    prix.innerHTML = prixDeBase * nbrJour;
    prix2.value = prixDeBase * nbrJour;
    jour.value = nbrJour;
  });
});

// Pour gérer le nombre de personnes qui viennent

let inputNumber = document.querySelectorAll('input[type="number"]');
let capacite = parseInt(document.querySelector(".capacite").innerHTML);
let btn = document.querySelector('input[type="submit"]');

inputNumber[0].addEventListener("input", function () {
  let somme = parseInt(inputNumber[0].value) + parseInt(inputNumber[1].value);
  if (somme <= capacite && somme > 0) {
    btn.disabled = false;
  } else {
    btn.disabled = true;
  }
});

inputNumber[1].addEventListener("input", function () {
  let somme = parseInt(inputNumber[0].value) + parseInt(inputNumber[1].value);
  if (somme <= capacite && somme > 0) {
    btn.disabled = false;
  } else {
    btn.disabled = true;
  }
});
