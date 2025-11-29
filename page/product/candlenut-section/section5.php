<section id="section-processing" class="processing-section">
  <div class="container">
    <div class="processing-header">
      <div class="title-separator"></div>
      <h2><?=$_SESSION['lang']['product-processing']?></h2>
      <p><?=$_SESSION['lang']['product-processing-detail']?></p>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" id="carousel-indicators-pause" onclick="pauseCarousel(this)">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
            <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
          </svg>
        </button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <div class="processing-tab-content">
            <div class="tab-pane fade show active">
              <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-7">
                  <h2><?=$_SESSION['lang']['product-processing-arrival']?></h2>
                  <p><?=$_SESSION['lang']['product-processing-arrival-detail']?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4 text-center mt-3 mt-md-0">
                  <img src="assets/product/candlenut/plantation.png" alt="Candlenut">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item " data-bs-interval="5000">
          <div class="processing-tab-content">
            <div class="tab-pane fade show active">
              <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-7">
                  <h2><?=$_SESSION['lang']['product-processing-cracking']?></h2>
                  <p><?=$_SESSION['lang']['product-processing-cracking-detail']?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4 text-center mt-3 mt-md-0">
                  <img src="assets/product/candlenut/cracking.png" alt="Candlenut">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item " data-bs-interval="5000">
          <div class="processing-tab-content">
            <div class="tab-pane fade show active">
              <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-7">
                  <h2><?=$_SESSION['lang']['product-processing-sortation']?></h2>
                  <p><?=$_SESSION['lang']['product-processing-sortation-detail']?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4 text-center mt-3 mt-md-0">
                  <img src="assets/product/candlenut/sortation.png" alt="Candlenut">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item " data-bs-interval="5000">
          <div class="processing-tab-content">
            <div class="tab-pane fade show active">
              <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-7">
                  <h2><?=$_SESSION['lang']['product-processing-arrival']?></h2>
                  <p><?=$_SESSION['lang']['product-processing-arrival-detail']?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4 text-center mt-3 mt-md-0">
                  <img src="assets/product/candlenut/plantation.png" alt="Candlenut">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item " data-bs-interval="5000">
          <div class="processing-tab-content">
            <div class="tab-pane fade show active">
              <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-7">
                  <h2><?=$_SESSION['lang']['product-processing-cracking']?></h2>
                  <p><?=$_SESSION['lang']['product-processing-cracking-detail']?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4 text-center mt-3 mt-md-0">
                  <img src="assets/product/candlenut/cracking.png" alt="Candlenut">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item " data-bs-interval="5000">
          <div class="processing-tab-content">
            <div class="tab-pane fade show active">
              <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="col-md-7">
                  <h2><?=$_SESSION['lang']['product-processing-sortation']?></h2>
                  <p><?=$_SESSION['lang']['product-processing-sortation-detail']?></p>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4 text-center mt-3 mt-md-0">
                  <img src="assets/product/candlenut/sortation.png" alt="Candlenut">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>

    <!-- <div class="processing-steps-wrapper">
      <button class="carousel-arrow prev" onclick="slideProcessStep(this, true)">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg>
      </button>

      <div class="processing-carousel">
        <div class="timeline-line"></div>
        <div class="processing-carousel-track">
          <div class="processing-carousel-content">
            <img src="assets/product/candlenut/plantation.png" alt="Arrival process">
            <div class="timeline-point"></div>
            <div class="step-text">
              <h3>Arrival</h3>
              <p>The candlenuts in shell arrive directly from our trusted farmers in Flores. Each sack is carefully weighed, inspected, and prepared</p>
            </div>
          </div>
          <div class="processing-carousel-content">
            <img src="assets/product/candlenut/cracking.png" alt="Cracking process">
            <div class="timeline-point"></div>
            <div class="step-text">
              <h3>Cracking</h3>
              <p>The nuts are cracked using modern machinery, this ensures that only the finest kernels are preserved</p>
            </div>
          </div>
          <div class="processing-carousel-content">
            <img src="assets/product/candlenut/sortation.png" alt="Arrival process">
            <div class="timeline-point"></div>
            <div class="step-text">
              <h3>Sortation</h3>
              <p>“After cracking, every nut is meticulously sorted. This grading process guarantees international export standards are met.</p>
            </div>
          </div>
          <div class="processing-carousel-content">
            <img src="assets/product/candlenut/plantation.png" alt="Arrival process">
            <div class="timeline-point"></div>
            <div class="step-text">
              <h3>Arrival</h3>
              <p>The candlenuts in shell arrive directly from our trusted farmers in Flores. Each sack is carefully weighed, inspected, and prepared</p>
            </div>
          </div>
          <div class="processing-carousel-content">
            <img src="assets/product/candlenut/cracking.png" alt="Cracking process">
            <div class="timeline-point"></div>
            <div class="step-text">
              <h3>Cracking</h3>
              <p>The nuts are cracked using modern machinery, this ensures that only the finest kernels are preserved</p>
            </div>
          </div>
          <div class="processing-carousel-content">
            <img src="assets/product/candlenut/sortation.png" alt="Arrival process">
            <div class="timeline-point"></div>
            <div class="step-text">
              <h3>Sortation</h3>
              <p>“After cracking, every nut is meticulously sorted. This grading process guarantees international export standards are met.</p>
            </div>
          </div>
        </div>

      </div>

      <button class="carousel-arrow next" onclick="slideProcessStep(this, false)">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
        </svg>
      </button>
    </div> -->

  </div>
</section>