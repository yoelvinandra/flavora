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

