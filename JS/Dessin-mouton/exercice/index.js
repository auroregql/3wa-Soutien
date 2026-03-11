const grid = document.getElementById("grid");
const colorPicker = document.getElementById("colorPicker");

const COLS = 50;
const ROWS = 50;

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


function sauvegarder() {
  const canvas = document.createElement("canvas");
  canvas.width = COLS;
  canvas.height = ROWS;
  const ctx = canvas.getContext("2d");

  const cells = document.querySelectorAll(".cell");
  cells.forEach((cell, index) => {
    const x = index % COLS;
    const y = Math.floor(index / COLS);
    ctx.fillStyle = cell.style.backgroundColor || "white";
    ctx.fillRect(x, y, 1, 1);
  });

  const link = document.createElement("a");
  link.download = "dessin.png";
  link.href = canvas.toDataURL();
  link.click();
}
