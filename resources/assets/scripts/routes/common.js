export default {
  init() {
    // JavaScript to be fired on all pages
    document.getElementById('hamburger').onclick = function toggleMenu() {
      const navToggle = document.getElementsByClassName('toggle');
      for (let i = 0; i < navToggle.length; i++) {
        navToggle.item(i).classList.toggle('hidden');
      }
    };
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
