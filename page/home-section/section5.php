<section class="plant-tour-section mb-5 text-center">
  <div class="container">
    <h1 class=" mb-6"><?=$_SESSION['lang']['tour-our-plant']?></h1>
    <div class="row ">

      <!-- Text Column -->
      <div class="col-12 col-md-5 text-md-start mb-4 mb-md-0" style="max-width: 1000px;">
        <p>
          <?=$_SESSION['lang']['tour-our-plant-detail']?>
        </p>
        <a href="assets/compro.pdf" class="btn primary mt-5">
          <?=$_SESSION['lang']['tour-our-plant-button']?>
        </a>
      </div>

      <!-- Video Column -->
      <div class="col-12 col-md-7">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/viVDRP6E1dc" title="Plant Tour" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
</section>