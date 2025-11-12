<section id="section-product-forms" class="product-forms-section">
  <div class="container">
    <div class="product-forms-header">
      <div class="title-separator"></div>
      <h2><?=$_SESSION['lang']['product-how-do-you-want']?></h2>
      <p><?=$_SESSION['lang']['product-detail-how-do-you-want']?></p>
    </div>
    <!-- <nav class="product-tabs">
      <button onclick="selectedType(this,'powder')" class="tab-link tab-type active">Powder</button>
      <button onclick="selectedType(this,'shelled')" class="tab-link tab-type">Shelled</button>
      <button onclick="selectedType(this,'oil')" class="tab-link tab-type">Oil</button>
    </nav>
    <div class="tab-content-wrapper">
      <div class="tab-content active" id="type-candlenut">
        <div class="product-form-image">
          <img src="assets/product/candlenut/candlenut-powder.png" alt="Candlenut Powder">
        </div>
        <div class="product-form-details">
          <div class="title-separator"></div>
          <h3>Powder</h3>
          <p>Hand selected whole kernels, carefully sun dried to maintain natural oil content and flavor.</p>
          <a href="#" class="btn primary fullrounded">Shop candlenut powder</a>
        </div>
      </div>
    </div> -->


  </div>
</section>

<section class="product-grid-section">
   <div class="product-grid">
        <div class="product-type-card">          
          <img src="assets/product/candlenut/candlenut-powder.webp" class="product-pict" alt="Seasoning icon">
          <h3><?=$_SESSION['lang']['product-powder']?></h3>
          <p><?=$_SESSION['lang']['product-powder-detail']?></p>
          <div class="product-shop-button">
            <a href="#section-packaging-forms" class="btn primary"><?=$_SESSION['lang']['product-more-detail']?></a>
            <a href="https://wa.me/6281138225758?text=Permisi, saya ingin bertanya mengenai Bubuk Kemiri Flavora. Bisa jelaskan kepada saya ?" class="btn secondary"><?=$_SESSION['lang']['product-shop-now']?></a>
          </div>
        </div>
        <div class="product-type-card">          
          <img src="assets/product/candlenut/candlenut-shelled.webp" class="product-pict" alt="Seasoning icon">
          <h3><?=$_SESSION['lang']['product-shelled']?></h3>
          <p><?=$_SESSION['lang']['product-shelled-detail']?></p>
          <div class="product-shop-button">
            <a href="#section-packaging-forms" class="btn primary"><?=$_SESSION['lang']['product-more-detail']?></a>
            <a href="https://wa.me/6281138225758?text=Permisi, saya ingin bertanya mengenai Kemiri Kupas Flavora. Bisa jelaskan kepada saya ?" class="btn secondary"><?=$_SESSION['lang']['product-shop-now']?></a>
          </div>
        </div>
        <div class="product-type-card">          
          <img src="assets/product/candlenut/candlenut-oil.webp" class="product-pict" alt="Seasoning icon">
          <h3><?=$_SESSION['lang']['product-oil']?></h3>
          <p><?=$_SESSION['lang']['product-oil-detail']?></p>
          <div class="product-shop-button">
            <a href="#section-packaging-forms" class="btn primary"><?=$_SESSION['lang']['product-more-detail']?></a>
            <a href="https://wa.me/6281138225758?text=Permisi, saya ingin bertanya mengenai Minyak Kemiri Flavora. Bisa jelaskan kepada saya ?" class="btn secondary"><?=$_SESSION['lang']['product-shop-now']?></a>
          </div>
        </div>
        
      </div>
</section>

<section id="section-packaging-forms" class="product-packaging-section-bg">
  <div class="product-packaging-section">
    <div class="packaging-header">
      <div class="title-separator"></div>
      <h2><?=$_SESSION['lang']['product-packaging']?></h2>
    </div>
    <div class="packaging-wrapper">
      <button class="packaging-arrow prev" onclick="slidePackaging(this, true)">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
          <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
        </svg>
      </button>

      <div class="packaging-carousel">
        <div class="packaging-carousel-track">
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>30 gr</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Cracking process">
            <div class="packaging-text">
              <h3>60 gr</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>100 gr</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>200 gr</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Cracking process">
            <div class="packaging-text">
              <h3>500 gr</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>1.000 gr</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>2.500 gr</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>25.000 gr</h3>
            </div>
          </div>
        </div>

      </div>

      <button class="packaging-arrow next" onclick="slidePackaging(this, false)">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
        </svg>
      </button>
    </div>
  </div>
</section>

<section id="section-nutrition" class="nutrition-section">
  <div class="container">
    <div class="nutrition-content">
      <div class="nutrition-title">
        <div class="title-separator"></div>
        <h2><?=$_SESSION['lang']['product-nutrition']?></h2>
        <h3>(per 100 gram)</h3>
      </div>
      <div class="nutrition-table">
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Crude Protein</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">23,25%</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Fat</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">46,05%</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Natural Fibet</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">18,8%</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Carbohydrate</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">4,48%</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Calories</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">525,37 Cal</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Potassium (K)</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">1.0007,40 ppm</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Calcium (Ca)</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">314,54 ppm</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title">Phosporus (P)</span>
          <span class="nutrition-data-separator"></span>
          <span class="nutrition-data-caption">1.252,58 ppm</span>
        </div>
        <div class="nutrition-data-wrapper">
          <span class="nutrition-data-title" style="color:red">Total Aflatoxin</span>
          <span class="nutrition-data-separator" style="border-bottom: 2px dotted red"></span>
          <span class="nutrition-data-caption" style="color:red">0,0823 ppb</span>
        </div>
      </div>
    </div>
  </div>
</section>