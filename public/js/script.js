function myFunction(e) {
  if (document.querySelector('#navList .nav.active') !== null) {
    document.querySelector('#navList .nav.active').classList.remove('active');
  }
  e.target.className = "active";
}