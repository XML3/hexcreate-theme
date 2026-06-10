// src/js/SEO
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function initHorizontalScroll() {
  // ADD THIS LINE - Skip animation on mobile/tablet
  if (window.innerWidth < 1280) return;

  const scrollSection = document.querySelector(".horizontal-scroll-screen");
  const scrollContainer = document.querySelector(".optimization-scroll");

  if (!scrollSection || !scrollContainer) return;

  // Auto-calculate total scroll distance including padding
  function getScrollDistance() {
    const scrollWidth = scrollContainer.scrollWidth;
    const containerWidth = scrollContainer.clientWidth;
    return scrollWidth - containerWidth;
  }

  let scrollDistance = getScrollDistance();

  if (scrollDistance > 0) {
    // Kill existing ScrollTrigger to avoid conflicts
    ScrollTrigger.getAll().forEach((trigger) => {
      if (trigger.vars.trigger === scrollSection) {
        trigger.kill();
      }
    });

    gsap.to(scrollContainer, {
      x: -scrollDistance,
      ease: "none",
      scrollTrigger: {
        trigger: scrollSection,
        start: "top top",
        end: () => `+=${scrollDistance + 200}`,
        scrub: 1,
        pin: scrollSection,
        invalidateOnRefresh: true,
      },
    });
  }
}

// Initialize after everything loads
window.addEventListener("load", () => {
  setTimeout(initHorizontalScroll, 100);
});

// Recalculate on resize
window.addEventListener("resize", () => {
  ScrollTrigger.refresh();
});

document.addEventListener("DOMContentLoaded", initHorizontalScroll);
