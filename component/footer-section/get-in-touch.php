<section id="get-in-touch">
    <div id="contactModal" class="modal">
        <div class="modal-content">
          <h1 style="color:#6b2f1f;"><?=$_SESSION['lang']['get-in-touch']?> 
          <span class="close" id="closeBtn">&times;</span></h1>
          
            <label style="margin-top:20px; margin-bottom:10px;" for="firstName"><?=$_SESSION['lang']['first-name']?></label>
            <input type="text" autocomplete="off" id="firstName" name="firstName" required>
    
            <label style="margin-top:20px; margin-bottom:10px;" for="lastName"><?=$_SESSION['lang']['last-name']?></label>
            <input type="text" autocomplete="off" id="lastName" name="lastName" required>
    
            <label style="margin-top:20px; margin-bottom:10px;" for="email"><?=$_SESSION['lang']['email-address']?></label>
            <input type="email" autocomplete="off" id="email" name="email" required>
    
            <label style="margin-top:20px; margin-bottom:10px;" for="company"><?=$_SESSION['lang']['company']?></label>
            <input type="text" autocomplete="off" id="company" name="company">
    
            <label style="margin-top:20px; margin-bottom:10px;" for="country"><?=$_SESSION['lang']['country']?></label>
            <input type="text" autocomplete="off" id="country" name="country">
    
            <label style="margin-top:20px; margin-bottom:10px;" for="message"><?=$_SESSION['lang']['how-can-we-help-you']?></label>
            <textarea id="message" autocomplete="off" name="message" rows="8" required></textarea>
            
            <div class="g-recaptcha" style="margin-top:20px;" data-sitekey="6LdXgdQrAAAAAF_snZ5m5ZZ55owmdvS20L-tCOYT"></div>
            <button id="submit-get-in-touch" onclick="submitMessage()" style="width:100%; margin-top:20px;" class="g-recaptcha btn primary fullrounded" type="submit"><?=$_SESSION['lang']['submit']?></button>
            
        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
   
function openMessage(){
    grecaptcha.reset(); //
    var firstname = document.getElementById('firstName').value = "";
    var lastname = document.getElementById('lastName').value = "";
    var email = document.getElementById('email').value = "";
    var company = document.getElementById('company').value = "";
    var country = document.getElementById('country').value = "";
    var message = document.getElementById('message').value = "";
     // Get modal elements
    var modal = document.getElementById("contactModal");
    modal.style.display = "block";
    var closeBtn = document.getElementById("closeBtn");
    
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
function submitMessage(){
  var firstname = document.getElementById('firstName').value;
  var lastname = document.getElementById('lastName').value;
  var email = document.getElementById('email').value;
  var company = document.getElementById('company').value;
  var country = document.getElementById('country').value;
  var message = document.getElementById('message').value;
  var catpcha = document.getElementById('g-recaptcha-response').value;
  
   // Regex sederhana untuk validasi email
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Validasi input
  if (firstname === "") {
    alert('<?=$_SESSION['lang']['alert-first-name'];?>');
    return;
  }
  if (lastname === "") {
    alert('<?=$_SESSION['lang']['alert-last-name'];?>');
    return;
  }
  if (email === "") {
    alert('<?=$_SESSION['lang']['alert-email'];?>');
    return;
  }
  if (!emailRegex.test(email)) {
    alert('<?=$_SESSION['lang']['alert-email-valid'];?>');
    return;
  }
  
  if(catpcha == "")
  {
     return;
  }
  
  fetch("mail.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: "firstname=" + firstname+"&lastname=" + lastname+"&email=" + email+"&company=" + company+"&country=" + country+"&message=" + message+"&captcha="+catpcha+"&bahasa="+localStorage.getItem('lang'),
      credentials: "same-origin"   
    })
    .then(res => res.json()) 
    .then(data => {
      if (data.success) {
        alert(data.message);
        var modal = document.getElementById("contactModal");
        modal.style.display = "none";
      } else {
        alert("Error: " + data.message);
      }
  });  
}
</script>