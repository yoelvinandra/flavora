<?php include 'lang.php'; ?>
<header class="p-4  header-hidden" id="main-header">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="mockup.php"  class="logo fw-bold"><img src="assets/logo.webp" alt="Logo" style="width: 9vh;"></a>
        <nav>
            <a href="aboutus.php" class="btn-hidden-sm text-decoration-none"><?=$_SESSION['lang']['about-us']?></a>
            <a href="product.php" class="btn-hidden-sm text-decoration-none"><?=$_SESSION['lang']['products']?></a>
            <a href="#" class="btn-hidden-sm text-decoration-none"><?=$_SESSION['lang']['news-event']?></a>
            <a class="btn btn-sm"  onclick="openMessage();"><i class="bi bi-chat-fill"></i> <?=$_SESSION['lang']['get-in-touch']?></a>
        </nav>
        <div class="lang-switcher ms-3 btn-hidden-sm">
          <a href="?lang=EN" id="EN" class="lang-data text-decoration-none active">EN</a> | 
          <a href="?lang=ID" id="ID" class="lang-data text-decoration-none">ID</a>
        </div>
        <div class="btn-show-sm text-decoration-none" id="burger-menu" onclick="openNav()"><i class="bi bi-list" style="font-size: 4vh;"></i></div>
        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="menu closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a class="menu" href="mockup.php"  class="logo fw-bold"><img src="assets/logo-golden.webp" alt="Logo" style="width: 14vh;"></a>
            <a class="menu" href="aboutus.php"><?=$_SESSION['lang']['about-us']?></a>
            <a class="menu" href="product.php"><?=$_SESSION['lang']['products']?></a>
            <a class="menu" href="#"><?=$_SESSION['lang']['news-event']?></a>
          </div>
          <div class="lang-switcher-mobile">
            <a href="?lang=EN" id="EN-mobile" class="lang-data-mobile text-decoration-none active">EN</a>&nbsp;&nbsp;|&nbsp;
            <a href="?lang=ID" id="ID-mobile" class="lang-data-mobile text-decoration-none">ID</a>
          </div>
        </div>
    </div>
</header>

<script>
    let allBoxes = document.getElementsByClassName('lang-data');
    Array.from(allBoxes).forEach(box => {
      box.classList.remove("active");
    });
    
    let boxSelected = document.getElementById(localStorage.getItem('lang'));
    boxSelected.classList.add("active");
    
    
    let allBoxesMobile = document.getElementsByClassName('lang-data-mobile');
    Array.from(allBoxesMobile).forEach(box => {
      box.classList.remove("active");
    });
    
    let boxSelectedMobile = document.getElementById(localStorage.getItem('lang')+'-mobile');
    boxSelectedMobile.classList.add("active");
  
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