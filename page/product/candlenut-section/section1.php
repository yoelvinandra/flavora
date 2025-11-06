<section id="section-product-intro" class="product-intro-section">
  <div class="container">
    <div class="breadcrumb">
      <a class="breadcrumb-home" href="mockup.php"><?= $_SESSION['lang']['home'] ?></a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="#"><?= $_SESSION['lang']['products'] ?></a>
    </div>

    <div class="product-intro-content">
      <div class="product-intro-text">
        <div class="title-separator"></div>
        <h1 class="product-title"><?=$_SESSION['lang']['candlenut']?></h1>
        <p class="product-description"><?=$_SESSION['lang']['product-detail']?></p>
        <div class="product-buttons">
          <a href="#" class="btn primary fullrounded"><?=$_SESSION['lang']['contact-us']?></a>
          <a href="#" class="btn secondary fullrounded"><?=$_SESSION['lang']['product-quotation']?></a>
        </div>
      </div>

      <div class="product-intro-media">
        <div>
          <iframe class="video-thumbnail"
            src="https://www.youtube.com/embed/dJCFFSd1kN8">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>