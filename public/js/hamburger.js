var hamburgerButton = document.getElementById("hamburger");
var navItems = document.getElementById("nav-ham");
var header = document.getElementsByTagName("header")[0];
var barTop = document.querySelector(".bar-top");
var barMid = document.querySelector(".bar-mid");
var barBot = document.querySelector(".bar-bot");

hamburgerButton.addEventListener("click", function () {
  navItems.classList.toggle("nav-show");
  header.classList.toggle("header-show");

  barTop.classList.toggle("transition-bar-top");
  barMid.classList.toggle("transition-bar-mid");
  barBot.classList.toggle("transition-bar-bot");
});