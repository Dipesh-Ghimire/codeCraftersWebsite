(() => {
   // Navbar
   const toggleButton = document.getElementById("toggle-button");
   const navbarLinks = document.getElementsByClassName("navbar-links")[0];
   toggleButton.addEventListener("click", () => {
      navbarLinks.classList.toggle("active");
   })
})();


(() => {
   // Scroll to top
   const toTop = document.querySelector(".to-top");
   window.addEventListener("scroll", () => {
      if (window.pageYOffset > 100) {
         toTop.classList.add("active")
      } else {
         toTop.classList.remove("active")
      }
   })
})();