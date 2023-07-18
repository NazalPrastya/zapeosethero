import "./bootstrap";
import "flowbite";
// import "boxicons";

// navbar fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

// Hamburger

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// Preloader

// const preLoader = document.querySelector("#preloader");
// window.addEventListener("load", function () {
//     preLoader.style.display = "none";
// });

// hidden password
