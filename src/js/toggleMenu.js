function toggleMenu() {
  // Add a small delay to ensure DOM is fully ready
  setTimeout(() => {
    const hamburgerButton = document.getElementById("hamburger-menu");
    const mobileMenu = document.getElementById("mobile-menu");
    const openIcon = document.querySelector(".open");
    const closeIcon = document.querySelector(".close");

    if (!hamburgerButton || !mobileMenu || !openIcon || !closeIcon) {
      return;
    }

    const toggle = () => {
      const isOpening = mobileMenu.classList.contains("hidden");
      mobileMenu.classList.toggle("hidden");
      openIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
      document.body.classList.toggle("overflow-hidden");

      // Ensure z-index is always set when opening
      if (isOpening) {
        mobileMenu.style.zIndex = "12500";
        mobileMenu.style.pointerEvents = "auto";
        hamburgerButton.style.zIndex = "12501";
        hamburgerButton.style.pointerEvents = "auto";
      }
    };

    // Remove existing event listeners to prevent duplicates
    hamburgerButton.replaceWith(hamburgerButton.cloneNode(true));
    const newHamburgerButton = document.getElementById("hamburger-menu");

    newHamburgerButton.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      e.stopImmediatePropagation();
      toggle();
    });

    // Close when clicking links inside menu
    mobileMenu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        if (!mobileMenu.classList.contains("hidden")) toggle();
      });
    });

    // Close when clicking outside
    document.addEventListener("click", (e) => {
      if (
        !mobileMenu.contains(e.target) &&
        !newHamburgerButton.contains(e.target) &&
        !mobileMenu.classList.contains("hidden")
      ) {
        toggle();
      }
    });

    // Prevent overlay from blocking clicks
    document
      .querySelectorAll(".fullscreen-overlay, .fullscreen-overlay")
      .forEach((overlay) => {
        overlay.style.pointerEvents = "none";
      });
  }, 100);
}

// More robust DOM ready check
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", toggleMenu);
} else {
  toggleMenu();
}
