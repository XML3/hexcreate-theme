// src/js/gsap-hero.js
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function initHeroReveal() {
  const heroSection = document.querySelector(".hero-section");
  if (!heroSection) return;

  const xLogo = document.querySelector(".fixed-logo");
  if (!xLogo) return;

  // Set initial state on ALL screens
  gsap.set(xLogo, { scale: 0.5, opacity: 1 });

  // On mobile: stop here (no animation, but logo is visible with correct scale)
  if (window.innerWidth < 1280) {
    return;
  }

  // Desktop: add scroll animation
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: heroSection,
      start: "top top",
      end: "+=100%",
      scrub: 1,
      pin: true,
      invalidateOnRefresh: true,
    },
  });

  tl.to(
    xLogo,
    {
      scale: 1.8,
      opacity: 1,
      duration: 2,
      ease: "back.out(0.3)",
    },
    0,
  );
}

document.addEventListener("DOMContentLoaded", () => {
  initHeroReveal();
  ScrollTrigger.refresh();
});

window.addEventListener("resize", () => {
  ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
  initHeroReveal();
  ScrollTrigger.refresh();
});
