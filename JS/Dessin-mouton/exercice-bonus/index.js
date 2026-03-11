const grid = document.getElementById("grid");
const colorPicker = document.getElementById("colorPicker");

const COLS = 100;
const ROWS = 100;

let isMouseDown = false;
let gomme = false; // mode gomme

// Suivi du clic
document.addEventListener("mousedown", () => isMouseDown = true);
document.addEventListener("mouseup", () => isMouseDown = false);

// Création de la grille
for (let i = 0; i < COLS * ROWS; i++) {
  const cell = document.createElement("div");
  cell.className = "cell";

  // clic simple
  cell.addEventListener("mousedown", () => {
    cell.style.backgroundColor = gomme ? "white" : colorPicker.value;
  });

  // clic maintenu (glisser)
  cell.addEventListener("mouseover", () => {
    if (isMouseDown) {
      cell.style.backgroundColor = gomme ? "white" : colorPicker.value;
    }
  });

  // clic droit = effacer
  cell.addEventListener("contextmenu", (e) => {
    e.preventDefault(); // bloque le menu contextuel
    cell.style.backgroundColor = "white";
  });

  grid.appendChild(cell);
}

// Fonctions pour changer de mode
function activerGomme() {
  gomme = true;
}

function activerPinceau() {
  gomme = false;
}