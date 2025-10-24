 // Fade-out effect bij scrollen
window.addEventListener("scroll", function () {
  const hero = document.querySelector(".hero");
  const scrollTop = window.scrollY;
  const fadeSpeed = 0.0025; // pas dit aan voor meer/minder fade
  const newOpacity = Math.max(1 - scrollTop * fadeSpeed, 0);
  hero.style.opacity = newOpacity;
});