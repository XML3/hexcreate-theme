// src/js/gsap-cards.js
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function initCards() {
  const cards = document.querySelectorAll(".card");
  if (cards.length === 0) return;

  // Define color schemes for each card
  const colorSchemes = [
    {
      bg: "#0A1931",
      text: "#fff",
      accent: "#ff5050",
      image:
        "url('/wp-content/themes/hexcreate/src/images/solutions/hexcreate-solutions-navy.png')",
    },
    {
      bg: "#d4c4b0",
      text: "#000",
      accent: "#1e1e1e",
      image:
        "url('/wp-content/themes/hexcreate/src/images/solutions/hexcreate-solutions-two.png')",
    },
    {
      bg: "#ff5050",
      text: "#ffffff",
      accent: "#ffffff",
      image:
        "url('/wp-content/themes/hexcreate/src/images/solutions/hexcreate-black-tri.png')",
    },
    {
      bg: "#0f0f0f",
      text: "#ffffff",
      accent: "#ff5050",
      image:
        "url('/wp-content/themes/hexcreate/src/images/solutions/hexcreate-solutions-orange.png')",
    },
    {
      bg: "#616060",
      text: "#fff",
      accent: "#f5b342",
      image:
        "url('/wp-content/themes/hexcreate/src/images/solutions/hexcreate-solutions-four.png')",
    },

    {
      bg: "#004f5d",
      text: "#ffffff",
      accent: "#ff5050",
      image:
        "url('/wp-content/themes/hexcreate/src/images/solutions/hexcreate-solutions-six-two.png')",
    },
  ];

  // Apply color schemes to each card BEFORE animation
  cards.forEach((card, index) => {
    const scheme = colorSchemes[index % colorSchemes.length];

    // Set background color - DON'T touch positioning
    if (scheme.bg) {
      card.style.backgroundColor = scheme.bg;
    }

    // Set background image if exists
    if (scheme.image) {
      card.style.backgroundImage = scheme.image;
      card.style.backgroundSize = "80%";
      card.style.backgroundPosition = "center";

      const overlay = document.createElement("div");
      overlay.style.position = "absolute";
      overlay.style.inset = "0";
      overlay.style.backgroundColor = scheme.bg || "#000";
      overlay.style.opacity = "0.4"; // Adjust this for background darkness
      overlay.style.zIndex = "1";
      card.insertBefore(overlay, card.firstChild);

      // Ensure content is above overlay
      const content = card.querySelector(".relative");
      if (content) content.style.zIndex = "2";
    }

    // Update text colors
    const title = card.querySelector("h2");
    const subtitle = card.querySelector("h3");
    const content = card.querySelector(".font-inter");
    const number = card.querySelector(".text-accent");

    if (title) title.style.color = scheme.text;
    if (subtitle) subtitle.style.color = scheme.text;
    if (content) content.style.color = scheme.text;
    if (number) number.style.color = scheme.accent;
  });

  const isMobileOrTablet = window.innerWidth <= 1024;
  if (isMobileOrTablet) {
    document.querySelectorAll(".card").forEach((card) => {
      card.style.opacity = "1";
      card.style.transform = "none";
    });
    return;
  }

  // Set initial state - cards hidden (preserving their colors)
  gsap.set(cards, { opacity: 0, y: 100 });

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".cards-stack",
      start: "top top",
      end: "+=200%",
      pin: true,
      scrub: 1,
      invalidateOnRefresh: true,
    },
  });

  // Stack cards as you scroll
  cards.forEach((card, i) => {
    tl.to(
      card,
      {
        opacity: 1,
        y: i * -20,
        duration: 1,
        ease: "power2.out",
      },
      i * 3,
    );
  });
}

window.addEventListener("resize", () => {
  ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
  initCards();
});

document.addEventListener("DOMContentLoaded", initCards);
