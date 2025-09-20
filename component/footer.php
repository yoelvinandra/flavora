<!-- footer.php -->
<footer>
    <?php include 'footer-section/bottom-info-section.php'; ?>
    
    <div onclick="scrollToTop()" id="floating-top-btn" target="_blank">
       <i class="fab-icon bi bi-arrow-up-short"></i>
    </div>
    
    <a href="#" id="floating-whatsapp-btn" target="_blank">
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