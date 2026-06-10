import gsap from "gsap";
import { SplitText } from "gsap/SplitText";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger, SplitText);

function initSectionTitles() {
  // ADD THIS LINE - Skip animation on mobile/tablet
  if (window.innerWidth < 1280) return;

  const sectionTitles = document.querySelectorAll(".section-title");
  if (sectionTitles.length === 0) return;

  sectionTitles.forEach((titleElement) => {
    SplitText.create(titleElement, {
      type: "chars",
      onSplit(self) {
        gsap.set(self.chars, {
          x: -0,
          autoAlpha: 0,
        });
        return gsap.to(self.chars, {
          y: 0,
          autoAlpha: 1,
          duration: 0.8,
          stagger: 0.1,
          ease: "power2.out",
          scrollTrigger: {
            trigger: titleElement,
            start: "top 80%",
            toggleActions: "play none none reverse",
          },
        });
      },
    });
  });

  //SUBTITLES
  const sectionSubtitles = document.querySelectorAll(".section-subtitle");
  if (sectionSubtitles.length === 0) return;

  sectionSubtitles.forEach((subtitleElement) => {
    SplitText.create(subtitleElement, {
      type: "words",
      onSplit(self) {
        gsap.set(self.words, {
          y: 100,
          autoAlpha: 0,
        });
        return gsap.to(self.words, {
          y: 0,
          autoAlpha: 1,
          duration: 0.8,
          stagger: 0.1,
          ease: "power2.out",
          scrollTrigger: {
            trigger: subtitleElement,
            start: "top 80%",
            toggleActions: "play none none reverse",
          },
        });
      },
    });
  });
}

document.addEventListener("DOMContentLoaded", initSectionTitles);
