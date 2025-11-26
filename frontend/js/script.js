let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

/* guard in case selectors are missing */
if (menu && navbar) {
  menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
  };

  /* close menu when user scrolls */
  window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
  };
}
var swiper = new Swiper('.home-slider', {
    loop:true,
    grabCursor: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
   autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  a11y: {
    prevSlideMessage: 'Previous slide',
    nextSlideMessage: 'Next slide',
  },
});

window.addEventListener("scroll", function() {
  const header = document.querySelector(".header");
  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});
var swiper = new Swiper(".reviews-slider", {
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
  breakpoints: {
    640: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});

// Initialize the map
var map = L.map('map').setView([30.7333, 76.7794], 13);  // Chandigarh default

// Add OpenStreetMap Tiles
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
}).addTo(map);

// Add a marker
L.marker([30.7333, 76.7794])
  .addTo(map)
  .bindPopup("Chandigarh, India")
  .openPopup();
