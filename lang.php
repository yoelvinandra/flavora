<div id="flavora-loader">
  <div class="candlenut"></div>
</div>
<script>

    let loader = document.getElementById("flavora-loader");
    document.body.style.display = 'none';
    
    if(localStorage.getItem('load') == null){
        localStorage.setItem('load','true');
    }
    const urlParams = new URLSearchParams(window.location.search);
    
    if(urlParams.get('lang') != undefined)
    {
        localStorage.setItem('lang',urlParams.get('lang'));
    } 
    else if(localStorage.getItem('lang') == null)
    {
        localStorage.setItem('lang','EN');
    }
    if(localStorage.getItem('load') == 'false'){
        document.body.style.display = 'block';
        loader.style.display = "none";
        localStorage.removeItem('load');
    }
    if(localStorage.getItem('load') == 'true')
    {
        '<?php session_destroy(); ?>';
        fetch("setLang.php", {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: "lang=" + localStorage.getItem("lang"),
          credentials: "same-origin"   
        })
        .then(res => res.text())
        .then(data => {
          localStorage.setItem('load','false');
          window.location.reload();
        });
    }
</script>