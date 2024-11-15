const floatingWindow = document.getElementById("floatingWindow");
let isDragging = false;
let offsetX, offsetY;

floatingWindow.querySelector(".header").addEventListener("mousedown", (e) => {
  isDragging = true;
  offsetX = e.clientX - floatingWindow.offsetLeft;
  offsetY = e.clientY - floatingWindow.offsetTop;
});

document.addEventListener("mousemove", (e) => {
  if (isDragging) {
    floatingWindow.style.left = `${e.clientX - offsetX}px`;
    floatingWindow.style.top = `${e.clientY - offsetY}px`;
  }
});

document.addEventListener("mouseup", () => {
  isDragging = false;
});

// Anexar ao canto
window.addEventListener("resize", () => {
  // Código para ajustar a posição se necessário
});

let fun = (a) => {
  let valorFormat = a.toLocaleString("pt-BR", {
    minimumFractionDigits: 2,
    maximumFrationDigits: 2,
  });

  return `R$${valorFormat}`;
};
console.log(fun(0.9999999999999991));
