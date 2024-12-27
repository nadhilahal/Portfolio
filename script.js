// toggle class active
const nav = document.querySelector(".nav");
// if klik then muncul
document.querySelector("#menu").onclick = () => {
  nav.classList.toggle("active");
};

// if klik luar then hilang
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !nav.contains(e.target)) {
    nav.classList.remove("active");
  }
});

const personalDiv = document.querySelector(".personal");
const leftButton = document.querySelector(".scroll-button-left");
const rightButton = document.querySelector(".scroll-button-right");

// Scroll ke kiri
leftButton.addEventListener("click", () => {
  personalDiv.scrollLeft -= 400; // Ganti 200 untuk mengatur jarak scroll
});

// Scroll ke kanan
rightButton.addEventListener("click", () => {
  personalDiv.scrollLeft += 400; // Ganti 200 untuk mengatur jarak scroll
});
