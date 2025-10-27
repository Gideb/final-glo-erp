/* demo video */
const videoContainer = document.getElementById("video-container");
const iframe = document.getElementById("videoframe");

videoContainer.addEventListener("click", () => {
  videoContainer.querySelector(".play-button").style.display = "none";
  videoContainer.querySelector(".thumbnail").style.display = "none";

  iframe.src = "https://www.youtube.com/embed/lC5AaodvEgU?autoplay=1&mute=0";
  iframe.style.display = "block";
});
