<section id="certificate">
    <div id="certificateModal" class="modal">
        <div class="modal-content" style="max-width:700px;">
          <h1 style="color:#6b2f1f;"><?=$_SESSION['lang']['quality-assurance-title']?> 
          <span class="close" id="closeBtnCert">&times;</span></h1>
            <div class="container text-center" style="margin-top: 6vh; ">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-6" style="border-radius:20px; border:1px solid var(--head-brown); padding:20px; margin:20px; width:100%;">
                        <img src="assets/certificate/halal-cert-brown.webp" alt="Halal Certification" width="120px" class="img-fluid mb-2">
                        <br> <br>
                        <a href="#" class="btn primary fullrounded" style="width:100%;"><?=$_SESSION['lang']['quality-assurance-button']?></a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-6" style="border-radius:20px; border:1px solid var(--head-brown); padding:20px; margin:20px; width:100%;">
                        <img src="assets/certificate/sucofindo-cert-brown.webp" alt="Sucofindo Certification" width="150px" class="img-fluid mb-2">
                        <br>
                        <a href="assets/certificate/Sucofindo Analysis.pdf" target="_blank" class="btn primary fullrounded" style="width:100%;"><?=$_SESSION['lang']['quality-assurance-button']?></a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-6" style="border-radius:20px; border:1px solid var(--head-brown); padding:20px; margin:20px; width:100%;">
                        <img src="assets/certificate/psat-cert-brown.webp" alt="PSAT Certification" width="150px" class="img-fluid mb-2">
                        <br>
                        <a href="assets/certificate/PSAT-PDUK-1.pdf" target="_blank" class="btn primary fullrounded" style="width:100%;"><?=$_SESSION['lang']['quality-assurance-button']?></a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-6" style="border-radius:20px; border:1px solid var(--head-brown); padding:20px; margin:20px; width:100%;">
                        <img src="assets/certificate/gs1.webp" alt="GS1" width="150px" class="img-fluid mb-2">
                        <br>
                        <a href="assets/certificate/GS1.pdf" target="_blank" class="btn primary fullrounded" style="width:100%;"><?=$_SESSION['lang']['quality-assurance-button']?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
   
function openCertificateModal(){
    var modal = document.getElementById("certificateModal");
    modal.style.display = "block";
    var closeBtn = document.getElementById("closeBtnCert");
    
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