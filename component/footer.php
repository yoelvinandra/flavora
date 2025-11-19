<!-- footer.php -->
<footer>
    <?php include 'footer-section/get-in-touch.php'; ?>
    <?php include 'footer-section/bottom-info-section.php'; ?>
    
    <div onclick="scrollToTop()" id="floating-top-btn" target="_blank">
       <!-- <i class="fab-icon bi bi-arrow-up-short"></i> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" 
        stroke="currentColor" 
            stroke-width="1" 
            class="bi bi-chevron-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
        </svg>
    </div>
    
    <a href="https://wa.me/6281138225758?text=Permisi, saya ingin bertanya mengenai Flavora." id="floating-whatsapp-btn" target="_blank">
       <i class="fab-icon bi bi-whatsapp"></i>
    </a>
</footer>

<script>
    const backToTopButton = document.getElementById("floating-top-btn");
    const waButton = document.getElementById("floating-whatsapp-btn");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        backToTopButton.classList.add("show");
        waButton.classList.add("show");
      } else {
        backToTopButton.classList.remove("show");
        waButton.classList.remove("show");
      }
    });
    
    function scrollToTop() {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
    }
</script>