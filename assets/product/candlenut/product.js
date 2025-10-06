const candlenutType = document.getElementById("type-candlenut");

// function selectedType(button, type) {    
//     const tabLinks = document.querySelectorAll('.tab-type');  
//     const candlenutTabs = document.getElementById('type-candlenut');  
//     tabLinks.forEach(tab => tab.classList.remove('active'));    
//     button.classList.add('active');  
      
//     fetch("page/product/candlenut-section/product-type/" + type + ".php")
//       .then(response => response.text())
//       .then(html => {
//         candlenutTabs.innerHTML = html;
//       });
// }

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

function slideProcessStep(button, direction) {
  //0 = left
  //1 = right
}