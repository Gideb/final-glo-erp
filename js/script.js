//added by gil

document.getElementById("year").innerHTML = new Date().getFullYear();

/* loading spinner */
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("loader-wrapper").style.display = "none";
});

window.addEventListener("load", function () {
  document.getElementById("loader-wrapper").style.display = "none";
});

/* back to top */

const backToTop = document.getElementById("back-to-top");

window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    backToTop.classList.add("show");
  } else {
    backToTop.classList.remove("show");
  }
});

backToTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

/* sidenav */

const hamburger = document.getElementById("bars");
const sidenav = document.querySelector(".sidenav");
const closebtn = document.getElementById("close");
const dropdown = document.querySelector(".dropdown-container");

hamburger.addEventListener("click", () => {
  sidenav.classList.toggle("open");
});

closebtn.addEventListener("click", () => {
  sidenav.classList.remove("open");
});

/* slideshow */

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

//attaching event listeners by gilbert
document.querySelector(".prev").addEventListener("click", () => plusSlides(-1));
document.querySelector(".next").addEventListener("click", () => plusSlides(1));

// Automatic slideshow
setInterval(function () {
  plusSlides(1);
}, 5000); // Change image every 5 seconds

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("carousel-slide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.opacity = "0";
  }
  slides[slideIndex - 1].style.opacity = "1";
}
