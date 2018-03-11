const hamburgerButton = document.getElementById("hamburger");
const navItems = document.getElementById("nav-ham");
const header = document.getElementsByTagName("header")[0];
const barTop = document.querySelector(".bar-top");
const barMid = document.querySelector(".bar-mid");
const barBot = document.querySelector(".bar-bot");

hamburgerButton.addEventListener("click",()=>{
  navItems.classList.toggle("nav-show");
  header.classList.toggle("header-show");

  barTop.classList.toggle("transition-bar-top");
  barMid.classList.toggle("transition-bar-mid");
  barBot.classList.toggle("transition-bar-bot");
});
