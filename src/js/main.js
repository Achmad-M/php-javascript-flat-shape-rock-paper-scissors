// ABRIR/FECHAR MODAL
const openModal = () =>
  document.getElementById("jendela-bangun").classList.add("active");

const closeModal = () => {
  document.getElementById("jendela-bangun").classList.remove("active");
};
document.getElementById("tombol").addEventListener("click", openModal);
document
  .getElementById("jendela-bangunClose")
  .addEventListener("click", closeModal);
//

// ALTERAR NOME DA FIGURA GEOMÉTRICA DINAMICAMENTE NO BOTÃO
const getShapeName = (event) => {
  let shapeName;
  shapeName = event.target.dataset.shapename;
  document.getElementById("nama-bentuk-geometri").textContent = shapeName;
};
const radios = document.querySelectorAll(".radio");
radios.forEach((radios) => radios.addEventListener("click", getShapeName));
//
