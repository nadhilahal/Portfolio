// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// if klik then muncul
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// if klik luar then hilang
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

function on() {
  document.getElementById("new-form").style.display = "block";
}

function off() {
  document.getElementById("new-form").style.display = "none";
}
