
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-content">
    <div class="title-separator"></div>
    <div class="hero-caption">
    <h1><?=$_SESSION['lang']['title']?></h1>
    <p>
     <?=$_SESSION['lang']['subtitle']?>
     <ul style="margin-top:-27px; padding-left:15px;">
         <li><?=$_SESSION['lang']['subtitle-1']?></li>
         <li><?=$_SESSION['lang']['subtitle-2']?></li>
         <li><?=$_SESSION['lang']['subtitle-3']?></li>
         <li><?=$_SESSION['lang']['subtitle-4']?></li>
     </ul>
    </p>
    <div class="">
      <a href="#" class="btn primary fullrounded"><?=$_SESSION['lang']['get-quote']?></a>
      <a href="#" class="btn primary fullrounded"><?=$_SESSION['lang']['chat-wa']?> <i class="bi bi-whatsapp"></i></a>
    </div>
    </div>
  </div>    
</section>

<script>
  const bg = document.querySelector('.hero-bg');
  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    bg.style.transform = `translateY(${scrollY * 0.7}px)`;
  });
</script>

