// src/js/dev-page.js
import gsap from "gsap";
import { SplitText } from "gsap/SplitText";
import { ScrambleTextPlugin } from "gsap/ScrambleTextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(SplitText, ScrambleTextPlugin, ScrollTrigger);

function initHeroDev() {
  // ADD THIS CHECK - Disable only the scroll animation on mobile
  if (window.innerWidth < 1280) return;

  // subtitle animation (existing)
  const devSubtitleElement = document.querySelector(".hero-dev-subtitle");
  if (devSubtitleElement) {
    const devSubtitleSplit = SplitText.create(devSubtitleElement, {
      type: "words",
      onSplit(self) {
        return gsap.from(self.words, {
          duration: 0.6,
          y: 100,
          autoAlpha: 0,
          stagger: 0.2,
          ease: "power2.out",
          delay: 0.2,
        });
      },
    });
  }
}

function initScrambleText() {
  // Scramble text works on mobile - NO mobile check
  const element = document.querySelector(".scramble-text");
  if (!element) return;

  const binaryText = "01001100 01001111 01010110 01000101";
  const targetText =
    element.dataset.target || "We are not here to engineer a spaceship to Mars";

  element.textContent = binaryText;

  gsap.to(element, {
    duration: 2.5,
    scrambleText: {
      text: targetText,
      chars: "01",
      revealDelay: 0.5,
      speed: 0.3,
    },
    scrollTrigger: {
      trigger: ".hero-scramble-container",
      start: "top 80%",
      toggleActions: "play none none reverse",
    },
  });
}

// p5.js sphere - works on mobile, NO mobile check
// p5.js sphere - reusable for multiple containers/colors
function createSphereInitializer({
  containerId,
  fillColor,
  strokeColor,
  strokeWeight = 0.5,
}) {
  let p5Instance = null; // track instance so we can avoid duplicates

  return function initSphere() {
    const container = document.getElementById(containerId);
    if (!container) return;

    // Prevent double-init (important for pageshow refresh)
    if (p5Instance) {
      p5Instance.remove();
      p5Instance = null;
    }

    import("p5")
      .then((p5Module) => {
        const p5 = p5Module.default;

        const sphereSketch = (p) => {
          p.setup = () => {
            const canvas = p.createCanvas(200, 200, p.WEBGL);
            canvas.parent(container);
          };

          p.draw = () => {
            p.background(15, 15, 26, 0);
            p.fill(...fillColor);
            p.strokeWeight(strokeWeight);
            p.stroke(...strokeColor);
            p.rotateX(p.millis() / 2000);
            p.rotateY(p.millis() / 2000);
            p.sphere(80, 24, 24);
          };
        };

        p5Instance = new p5(sphereSketch);
      })
      .catch((err) => {
        console.error(`Failed to load p5.js for ${containerId}:`, err);
      });
  };
}

// --- Create the two initializers with different colors ---
const initP5SphereA = createSphereInitializer({
  containerId: "p5-sphere-container",
  fillColor: [15, 15, 15],
  strokeColor: [100, 100, 100],
});

const initP5SphereB = createSphereInitializer({
  containerId: "p5-sphere-container-2",
  fillColor: [0, 79, 93],
  strokeColor: [204, 204, 204],
  strokeWeight: 1,
});

// Keep an array so the pageshow handler can refresh them all
const sphereInitializers = [initP5SphereA, initP5SphereB];

// Fix for back/forward navigation
window.addEventListener("pageshow", function (event) {
  if (event.persisted) {
    setTimeout(() => {
      sphereInitializers.forEach((fn) => fn());
      if (typeof ScrollTrigger !== "undefined") {
        ScrollTrigger.refresh();
      }
    }, 100);
  }
});

// Initialize everything when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  initHeroDev();
  initScrambleText();
  sphereInitializers.forEach((fn) => fn());
});
