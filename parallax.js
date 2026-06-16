(function () {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  // Positions de base : synchronisées avec background-position du body dans app.scss
  const layers = [
    { baseX: 0, baseY: 0, speed: 0.50 },
    { baseX: 130, baseY: 90, speed: 0.35 },
    { baseX: 60, baseY: 300, speed: 0.65 }
  ];

  let ticking = false;
  function update() {
    const y = window.scrollY;
    document.body.style.backgroundPosition = layers
      .map(l => `${l.baseX}px ${l.baseY + y * l.speed}px`)
      .join(', ');
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(update);
      ticking = true;
    }
  }, { passive: true });
})();
