<section class="plant-tour-section mt-5 mb-5 text-center">
  <div class="container">
    <div class="row ">

      <!-- Text Column -->
      <div class="col-12 col-md-6 text-md-start mb-4 mb-md-0 " style="max-width: 1000px;">
        <div class="title-separator"></div>
        <h1 class=" mb-6"><?=$_SESSION['lang']['tour-our-plant']?></h1>
        <p style="margin-top:-20px; margin-bottom:-20px;">
          <?=$_SESSION['lang']['tour-our-plant-detail']?>
        </p>
        <a href="assets/compro/compro.pdf" class="btn primary fullrounded mt-5" target="_blank">
          <?=$_SESSION['lang']['tour-our-plant-button']?>
        </a>
      </div>

      <!-- Video Column -->
      <div class="col-12 col-md-6">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/viVDRP6E1dc" title="Plant Tour" allowfullscreen class="roundrectvideo"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>