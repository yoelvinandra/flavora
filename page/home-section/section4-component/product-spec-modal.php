<section id="productSpec">
    <div id="productSpecModal" class="modal">
        <div class="modal-content" style="max-width:700px;">
          <h1 style="color:#6b2f1f;"><?=$_SESSION['lang']['product-spec']?> 
          <span class="close" id="closeBtnProductSpec">&times;</span></h1>
            <div class="container text-center" style="margin-top: 6vh; ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-6">
                        <a href="#" style="text-decoration:none;">
                            <img src="assets/product-spec/document.webp" alt="HSO" width="60%" class="img-fluid mb-2">
                            <h4 style="color: var(--dark-brown);">HSO 0802</h4>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-6">
                        <a href="assets/product-spec/GS1.pdf"  target="_blank" style="text-decoration:none;">
                            <img src="assets/product-spec/document.webp" alt="GS1" width="60%" class="img-fluid mb-2">
                            <h4 style="color: var(--dark-brown);">GS 1</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
   
function openProductSpecModal(){
    var modal = document.getElementById("productSpecModal");
    modal.style.display = "block";
    var closeBtn = document.getElementById("closeBtnProductSpec");
    
    // Close modal
    closeBtn.onclick = function() {
      modal.style.display = "none";
    }
    
    // Close when clicking outside content
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
}
</script>