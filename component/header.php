<header class="p-3 border-bottom header-hidden" id="main-header">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo fw-bold"><img src="assets/logo.webp" alt="Logo" style="width: 8vh;"></div>
        <nav>
            <a href="aboutus.php" class="btn-hidden-sm text-decoration-none">About Us</a>
            <a href="#" class="btn-hidden-sm text-decoration-none">Products</a>
            <a href="#" class="btn btn-sm"><i class="bi bi-chat-fill"></i> Get in touch</a>
        </nav>
        <div class="btn-show-sm text-decoration-none" style="display:none; width:6vh;  color: var(--primary-brown);" onclick="openNav()"><i class="bi bi-list" style="font-size: 4vh;"></i></div>
        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="aboutus.php">About Us</a>
            <a href="#">Products</a>
          </div>
        </div>
    </div>
</header>

<script>
    /* Open when someone clicks on the span element */
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }
    
    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    } 
</script>