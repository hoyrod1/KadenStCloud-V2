/*------------------------------------------------------------------*/
// OPEN AND CLOSE MENU
const menuIcon = document.querySelector(".btn-mobil-nav");
const menuHeader = document.querySelector(".header");

menuIcon.addEventListener("click", function () {
  menuHeader.classList.toggle("nav-open");
});
/*------------------------------------------------------------------*/
// CLOSE MOBILE NAVAGATION
const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
  link.addEventListener("click", function (event) {
    // event.preventDefault();
    if (link.classList.contains("main-nav-link")) {
      // console.log(menuHeader);
      menuHeader.classList.toggle("nav-open");
    }
  });
});
/*------------------------------------------------------------------*/
console.log(" Sanity Check for mobile.js ");
