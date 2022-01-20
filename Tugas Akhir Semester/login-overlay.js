document.querySelector("#show-login").addEventListener("click", function () {
  document.querySelector(".container-popup").classList.add("active");
});
document.querySelector(".container-popup .close-button").addEventListener("click", function () {
  document.querySelector(".container-popup").classList.remove("active");
});
