<section id="certificate">
    <div id="certificateModal" class="modal">
        <div class="modal-content" style="max-width:700px;">
          <h1 style="color:#6b2f1f;"><?=$_SESSION['lang']['quality-assurance']?> 
          <span class="close" id="closeBtnCert">&times;</span></h1>
            <div class="container text-center" style="margin-top: 6vh; ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-4">
                        <a href="#"  target="_blank">
                            <img src="assets/certificate/halal-cert-brown.webp" alt="Halal Certification" width="65%" class="img-fluid mb-2">
                            <!--<br>AC12641-->
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-4">
                        <a href="assets/certificate/Sucofindo Analysis.pdf"  target="_blank">
                            <img src="assets/certificate/sucofindo-cert-brown.webp" alt="Sucofindo Certification" width="100%" class="img-fluid mb-2">
                            <!--<br>AC12641-->
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-4">
                        <a href="assets/certificate/PSAT-PDUK-1.pdf"  target="_blank">
                            <img src="assets/certificate/psat-cert-brown.webp" alt="PSAT Certification" width="80%" class="img-fluid mb-2">
                            <!--<br>AC12641-->
                        </a>
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