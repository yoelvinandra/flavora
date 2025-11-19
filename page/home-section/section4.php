<!-- <section class="offering py-5 text-center">
  <div class="container">
    <h1 class="mb-5">What We Offer</h1>
    <div class="d-flex justify-content-evenly">
      <div class="col-md-4">
        <div class="d-flex justify-content-between">
          <div class="mt-3 ">
            <i class="bi bi-chat-left-quote fs-1 text-warning"></i>
          </div>
          <div class="text-start ms-3">
            <h5 class="mt-3">Need a Custom Quote?</h5>
            <p>Get personalized pricing for bulk orders and connect with our sales team.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex justify-content-between">
          <div class="mt-3">
            <i class="bi bi-truck fs-1 text-warning"></i>
          </div>
          <div class="text-start ms-3">
            <h5 class="mt-3">Looking for Flexible Shipping?</h5>
            <p>Take advantage of our flat-rate LTL shipping or arrange your own freight for flexibility.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="d-flex justify-content-evenly">
      <div class="col-md-4">
        <div class="d-flex justify-content-between">
          <div class="mt-3">
            <i class="bi bi-shield-check fs-1 text-warning"></i>
          </div>
          <div class="text-start ms-3">
            <h5 class="mt-3">Need Quality Assurance?</h5>
            <p>Instantly access all essential quality documents for wholesale ingredients.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex justify-content-between">
          <div class="align-middle">
            <i class="bi bi-search fs-1 text-warning"></i>
          </div>
          <div class="text-start ms-3">
            <h5 class="mt-3">Want Product Details?</h5>
            <p>Review full product specifications upfront to ensure the right fit before you buy.</p>
          </div>
        </div>
      </div>

    </div>
    
  </div>

</section> -->
<?php include 'section4-component/certificate-modal.php'; ?>
<?php include 'section4-component/product-spec-modal.php'; ?>
<section class="offering text-center">
  <div class="container">

    <div class="d-flex justify-content-center">
      <div class="row mb-5 mt-5" style="width:1320px; text-align:center;"> <!-- adjust width as needed -->
        <div class="title-separator" style="margin-left:15px;"></div>
        <h1 class="text-left mb-5"><?=$_SESSION['lang']['what-we-offer']?></h1>
        
        <div class="col-12 col-md-4">
          <div class="mx-auto" style="text-align:left; border-radius:20px; border:1px solid var(--head-brown); padding:20px;">
              <div class="d-flex text-start">
                <i><img class="icon-offer" src="assets/home/tips-1.webp"></i>
                <div class="ms-3">
                  <h5><?=$_SESSION['lang']['custom-quote']?></h5>
                </div>
              </div>
              <p><?=$_SESSION['lang']['custom-quote-detail']?></p>
              <a href="product.php#section-product-forms" class="btn primary fullrounded" style="width:100%;"><?=$_SESSION['lang']['custom-quote-button']?></a>
          </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mx-auto"  style="text-align:left; border-radius:20px; border:1px solid var(--head-brown); padding:20px;">
              <div class="d-flex text-start">
                <i><img class="icon-offer" src="assets/home/tips-2.webp"></i>
                <div class="ms-3">
                  <h5><?=$_SESSION['lang']['flexible-shipping']?></h5>
                </div>
              </div>
              <p><?=$_SESSION['lang']['flexible-shipping-detail']?></p>
              <a href="mailto:sales@floresflavora.com" class="btn primary fullrounded" style="width:100%;"><?=$_SESSION['lang']['flexible-shipping-button']?></a>
             </div>
        </div>

        <div class="col-12 col-md-4" >
            <div class="mx-auto"  style="text-align:left; border-radius:20px; border:1px solid var(--head-brown); padding:20px; ">
              <div class="d-flex text-start">
                <i><img class="icon-offer" src="assets/home/tips-3.webp"></i>
                <div class="ms-3">
                  <h5><?=$_SESSION['lang']['quality-assurance']?></h5>
                </div>
              </div>
              <p><?=$_SESSION['lang']['quality-assurance-detail']?></p>
              <a onclick="openCertificateModal()" class="btn primary fullrounded" style="width:100%;"><?=$_SESSION['lang']['quality-assurance-button']?></a>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>
