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


// (() => {
//     GoogleMaps API
//    var input = document.getElementById('searchInput');
//    var options = {
//       types: ['geocode'],
//       componentRestrictions: { country: 'np' },
//       bounds: new google.maps.LatLngBounds(
//          new google.maps.LatLng(27.6038, 85.3037), // Kathmandu southwest corner
//          new google.maps.LatLng(27.7489, 85.4622)  // Kathmandu northeast corner
//       )
//    };
//    var autocomplete = new google.maps.places.Autocomplete(input, options);
// })();