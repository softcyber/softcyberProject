document.addEventListener('DOMContentLoaded', () => {
  const toggles = document.querySelectorAll('.active');

  toggles.forEach(toggle => {
    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      const parent = this.closest('.dropdown');
      parent.classList.toggle('open');

      // Close other dropdowns
      document.querySelectorAll('.dropdown').forEach(drop => {
        if (drop !== parent) {
          drop.classList.remove('open');
        }
      });
    });
  });

  // Close dropdowns on outside click
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown').forEach(drop => drop.classList.remove('open'));
    }
  });
});




