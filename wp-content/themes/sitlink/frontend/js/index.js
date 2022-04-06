const NavElements = {
  sidebar: document.querySelector('#mobile-nav'),
  openBtn: document.querySelector('#hamburger-menu'),
  closeBtn: document.querySelector('#close-mobile-nav'),
}

NavElements.openBtn.addEventListener('click', () => {
  NavElements.sidebar.classList.add('mobile-nav--open');
});

NavElements.closeBtn.addEventListener('click', () => {
  NavElements.sidebar.classList.remove('mobile-nav--open');
});

