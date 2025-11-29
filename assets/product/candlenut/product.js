const candlenutType = document.getElementById("type-candlenut");

function selectedType(button, type) {
  const tabLinks = document.querySelectorAll('.tab-type');
  const candlenutTabs = document.getElementById('type-candlenut');

  // Update active state
  tabLinks.forEach(tab => tab.classList.remove('active'));
  button.classList.add('active');

  // Add slide-out animation
  candlenutTabs.classList.add('slide-out');

  // Wait for animation to finish before replacing content
  candlenutTabs.addEventListener('animationend', function handleAnimation() {
    candlenutTabs.removeEventListener('animationend', handleAnimation);

    fetch("page/product/candlenut-section/product-type/" + type + ".php")
      .then(response => response.text())
      .then(html => {
        candlenutTabs.innerHTML = html;

        // Switch from slide-out to slide-in
        candlenutTabs.classList.remove('slide-out');
        candlenutTabs.classList.add('slide-in');

        // Remove 'slide-in' after animation finishes (to reset)
        candlenutTabs.addEventListener('animationend', function resetAnim() {
          candlenutTabs.classList.remove('slide-in');
          candlenutTabs.removeEventListener('animationend', resetAnim);
        });
      });
  });
}

let currentIndex = 0; // track the current "slide" position

function slideProcessStep(btn, isPrev) {
  const wrapper = btn.closest(".processing-steps-wrapper");
  const track = wrapper.querySelector(".processing-carousel-track");
  const cards = track.querySelectorAll(".processing-carousel-content");

  let visibleCount = 0; // how many visible at once
  let totalCount = 0;
  let cardWidth = 0; // width + gap
  let maxIndex = 0;

  if (window.matchMedia("(max-width: 768px)").matches) {
    visibleCount = 1; // how many visible at once
    totalCount = cards.length;
    cardWidth = cards[0].offsetWidth; // width + gap
    maxIndex = totalCount - visibleCount;
  } else {
    visibleCount = 3; // how many visible at once
    totalCount = cards.length;
    cardWidth = cards[0].offsetWidth + cards[0].offsetWidth * 0.5; // width + gap
    maxIndex = totalCount - visibleCount;
  }

  if (isPrev) {
    currentIndex = Math.max(currentIndex - 1, 0);
  } else {
    currentIndex = Math.min(currentIndex + 1, maxIndex);
  }
  track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

let currPckgIdx = 0;

function slidePackaging(btn, isPrev) {
  const wrapper = btn.closest(".packaging-wrapper");
  const track = wrapper.querySelector(".packaging-carousel-track");
  const cards = track.querySelectorAll(".packaging-carousel-content");

  let visibleCount = 0; // how many visible at once
  let totalCount = 0;
  let cardWidth = 0; // width + gap
  let maxIndex = 0;

  if (window.matchMedia("(max-width: 768px)").matches) {
    visibleCount = 1; // how many visible at once
    totalCount = cards.length;
    cardWidth = cards[0].offsetWidth; // width + gap
    maxIndex = totalCount - visibleCount;
  } else {
    visibleCount = 4; // how many visible at once
    totalCount = cards.length;
    cardWidth = cards[0].offsetWidth + cards[0].offsetWidth * 0.5; // width + gap
    maxIndex = totalCount - visibleCount;
  }


  if (isPrev) {
    currPckgIdx = Math.max(currPckgIdx - 1, 0);
  } else {
    currPckgIdx = Math.min(currPckgIdx + 1, maxIndex);
  }
  track.style.transform = `translateX(-${currPckgIdx * cardWidth}px)`;
}
// Change 1: Set default state to false (CYCLING/PLAYING)
let isPaused = false; 
const carouselElement = document.querySelector('#carouselExampleIndicators');

const carousel = new bootstrap.Carousel(carouselElement, {
  interval: 5000,
  pause: false 
});

// --- INITIAL CYCLE ON LOAD ---
document.addEventListener('DOMContentLoaded', () => {
  const pauseButton = document.getElementById('carousel-indicators-pause');
  const activeIndicator = carouselElement.querySelector('.carousel-indicators .active');
  
  // 1. Initial Cycle (Bootstrap)
  // By default, Bootstrap carousels start cycling when initialized 
  // without the data-bs-ride="carousel" attribute, so calling cycle() 
  // here is technically redundant but ensures it's running.
  carousel.cycle(); 

  // 2. Initial Progress Bar State
  // Ensure any previous pause state is cleared, allowing the CSS animation to run immediately.
  if (activeIndicator) {
    activeIndicator.classList.remove('paused-animation');
  }

  // 3. Initial Button Icon (Set to Pause/Stop icon)
  // Since it is cycling, the user should see the PAUSE button to stop it.
  if (pauseButton) {
    pauseButton.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
        <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
      </svg>
    `;
  }
});
// -----------------------------


function pauseCarousel(button) {

  isPaused = !isPaused;
  const activeIndicator = carouselElement.querySelector('.carousel-indicators .active');

  if (isPaused) {
    // --- PAUSE STATE ---
    
    // 1. Stop the carousel's internal timer
    carousel.pause();
    
    // 2. Pause the CSS animation exactly where it is
    if (activeIndicator) {
      activeIndicator.classList.add('paused-animation');
      carouselElement.classList.add('paused-animation');
    }

    // 3. Update button icon
    button.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
      </svg>
    `;

  } else {
    // --- RESUME/CYCLE STATE ---

    // 1. Force the progress bar animation to reset to 0% and restart
    if (activeIndicator) {
        
        // A. Add reset class (sets width/animation: none)
        activeIndicator.classList.add('reset-animation');
        
        // B. Force a repaint/reflow to apply the reset instantly
        void activeIndicator.offsetWidth; 
        
        // C. Remove reset class and pause class to restart the animation from 0%
        activeIndicator.classList.remove('reset-animation');
        activeIndicator.classList.remove('paused-animation');

        carouselElement.classList.add('reset-animation');
        
        // B. Force a repaint/reflow to apply the reset instantly
        void carouselElement.offsetWidth; 
        
        // C. Remove reset class and pause class to restart the animation from 0%
        carouselElement.classList.remove('reset-animation');
        carouselElement.classList.remove('paused-animation');
    }
    
    // 2. Start the carousel's internal timer from the beginning (synchronous with the animation)
    carousel.cycle();

    // 3. Update button icon
    button.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
        <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
      </svg>
    `;
  }
}

