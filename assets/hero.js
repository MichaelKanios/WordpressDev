document.addEventListener("DOMContentLoaded", function() {
  console.log("Hero JS loaded");

  // Staggered fade-in για τίτλους και paragraph
  gsap.from(".hero h1, .hero h2, .hero p", {
    opacity: 0,
    y: 50,
    duration: 1,
    stagger: 0.3,
    ease: "power3.out"
  });

  // Image scale-in
  gsap.from(".hero img", {
    opacity: 0,
    scale: 0.5,
    duration: 1,
    delay: 0.5,
    ease: "power3.out"
  });

  // Background gradient animation (προαιρετικό)
  gsap.to(".hero", {
    background: "linear-gradient(135deg, #13FFAA, #DD335C)",
    duration: 8,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut"
  });
});
