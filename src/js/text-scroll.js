import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function initVerticalTextScroll() {
  // ADD THIS LINE - Skip animation on mobile/tablet
  if (window.innerWidth < 1280) return;

  // Prevent double initialization
  if (window._verticalTextScrollInitialized) return;
  window._verticalTextScrollInitialized = true;
  const textElements = document.querySelectorAll(".vertical-text-scroll");

  // Clear any existing scroll memory
  ScrollTrigger.clearScrollMemory();

  textElements.forEach((element, index) => {
    // Set initial state
    gsap.set(element, {
      y: 150,
      opacity: 0,
    });

    // Animation with scrollTrigger
    gsap.to(element, {
      y: 0,
      opacity: 1,
      duration: 1,
      ease: "power2.out",

      scrollTrigger: {
        trigger: element,
        start: "top 85%",
        end: "top 30%",
        scrub: false,
        toggleActions: "play none none reverse",

        // Prevent extra scroll space
        invalidateOnRefresh: true,
        refreshPriority: -1, // Lower priority to avoid affecting layout
      },
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  initVerticalTextScroll();

  // Force refresh after a short delay
  setTimeout(() => {
    ScrollTrigger.refresh();
  }, 50);
});

window.addEventListener("resize", () => {
  ScrollTrigger.refresh();
});

// Also add this to remove any extra padding
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const body = document.body;
    if (body.style.paddingTop || body.style.paddingBottom) {
      body.style.paddingTop = "";
      body.style.paddingBottom = "";
    }
  }, 100);
});
