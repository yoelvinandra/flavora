<?php include 'lang.php'; ?>
<header class="p-4 border-bottom header-hidden" id="main-header">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="mockup.php"  class="logo fw-bold"><img src="assets/logo.webp" alt="Logo" style="width: 9vh;"></a>
        <nav>
            <a href="aboutus.php" class="btn-hidden-sm text-decoration-none">About Us</a>
            <a href="#" class="btn-hidden-sm text-decoration-none">Products</a>
            <a href="#" class="btn-hidden-sm text-decoration-none">News & Event</a>
            <a href="#" class="btn btn-sm"><i class="bi bi-chat-fill"></i> Get in touch</a>
        </nav>
        <div class="lang-switcher ms-3 btn-hidden-sm">
          <a href="#" id="EN" class="lang-data text-decoration-none active">EN</a> | 
          <a href="#" id="ID" class="lang-data text-decoration-none">ID</a>
        </div>
        <div class="btn-show-sm text-decoration-none" style="display:none; width:6vh;  color: var(--primary-brown);" onclick="openNav()"><i class="bi bi-list" style="font-size: 4vh;"></i></div>
        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="mockup.php"  class="logo fw-bold"><img src="assets/logo-white.webp" alt="Logo" style="width: 10vh;"></a>
            <a href="aboutus.php">About Us</a>
            <a href="#">Products</a>
            <a href="#">News & Event</a>
            <div class="lang-switcher-mobile ms-3">
              <a href="#" id="EN" class="lang-data-mobile text-decoration-none active">EN</a> | 
              <a href="#" id="ID" class="lang-data-mobile text-decoration-none">ID</a>
            </div>
          </div>
        </div>
    </div>
</header>

<script>
    
    allBoxes = document.getElementsByClassName('lang-data');
    Array.from(allBoxes).forEach(box => {
      box.classList.remove("active");
    });
    
    let boxSelected = document.getElementById('<?=$language?>');
    boxSelected.classList.add("active");
  
    /* Open when someone clicks on the span element */
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }
    
    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    } 
    
    let scrollOld = 0; 
    window.addEventListener('scroll', function() {
      const header = document.getElementById('main-header');
      const scrollThreshold = 400; 
      if (window.scrollY > scrollThreshold) header.classList.remove('header-hidden');
      else header.classList.add('header-hidden');
      
      const backToTopButton = document.getElementById("floating-top-btn");
      const waButton = document.getElementById("floating-whatsapp-btn");
      if(window.innerWidth < 715)
      {
          if (window.scrollY < scrollOld) {
              scrollOld = window.scrollY;
              header.classList.add('header-scroll-down');
              header.classList.remove('header-scroll-top');
              backToTopButton.classList.add('footer-scroll-down');
              backToTopButton.classList.remove('footer-scroll-top');
              waButton.classList.add('footer-scroll-down');
              waButton.classList.remove('footer-scroll-top');
          }
          else 
          {
              scrollOld = window.scrollY;
              header.classList.add('header-scroll-top');
              header.classList.remove('header-scroll-down');
              backToTopButton.classList.add('footer-scroll-top');
              backToTopButton.classList.remove('footer-scroll-down');
              waButton.classList.add('footer-scroll-top');
              waButton.classList.remove('footer-scroll-down');
          }
      }
    });
</script>