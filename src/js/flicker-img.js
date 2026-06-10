const images = [
  "/wp-content/themes/hexcreate/src/images/flicker-img/hexcreate-flicker-one.png",
  "/wp-content/themes/hexcreate/src/images/flicker-img/woble-multi.png",
  "/wp-content/themes/hexcreate/src/images/flicker-img/hexcreate-flicker-two-dev.png",
  "/wp-content/themes/hexcreate/src/images/flicker-img/wobbles-wobbles-22.png",
];

let currentIndex = 0;
// Change this line - target the mask div, not hero-background
const heroMask = document.querySelector(".hero-logo-mask");
if (!heroMask) {
  console.log("hero-logo-mask not found on this page");
} else {
  function changeBackground() {
    heroMask.style.backgroundImage = `url('${images[currentIndex]}')`;
    currentIndex = (currentIndex + 1) % images.length;
  }

  setInterval(changeBackground, 200);
  changeBackground();
}
