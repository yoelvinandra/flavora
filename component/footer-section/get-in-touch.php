<section id="get-in-touch">
    <div id="contactModal" class="modal">
        <div class="modal-content">
          <h1 style="color:#6b2f1f;"><?=$_SESSION['lang']['get-in-touch']?> 
          <span class="close" id="closeBtn">&times;</span></h1>
          
            <label style="margin-top:20px;" for="firstName"><?=$_SESSION['lang']['first-name']?></label>
            <input type="text" id="firstName" name="firstName" required>
    
            <label style="margin-top:20px;" for="lastName"><?=$_SESSION['lang']['last-name']?></label>
            <input type="text" id="lastName" name="lastName" required>
    
            <label style="margin-top:20px;" for="email"><?=$_SESSION['lang']['email-address']?></label>
            <input type="email" id="email" name="email" required>
    
            <label style="margin-top:20px;" for="company"><?=$_SESSION['lang']['company']?></label>
            <input type="text" id="company" name="company">
    
            <label style="margin-top:20px;" for="country"><?=$_SESSION['lang']['country']?></label>
            <input type="text" id="country" name="country">
    
            <label style="margin-top:20px;" for="message"><?=$_SESSION['lang']['how-can-we-help-you']?></label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button id="submit-get-in-touch" onclick="submitMessage()" style="width:100%; margin-top:20px;" class="btn primary fullrounded" type="submit"><?=$_SESSION['lang']['submit']?></button>

        </div>
    </div>
</section>
<script>
function openMessage(){
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
  
   // Regex sederhana untuk validasi email
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Validasi input
  if (firstname === "") {
    alert("First name cannot be empty");
    return;
  }
  if (lastname === "") {
    alert("Last name cannot be empty");
    return;
  }
  if (email === "") {
    alert("Email cannot be empty");
    return;
  }
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address");
    return;
  }
  
  fetch("mail.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: "firstname=" + firstname+"&lastname=" + lastname+"&email=" + email+"&company=" + company+"&country=" + country+"&message=" + message,
      credentials: "same-origin"   
    })
    .then(res => res.text())
    .then(data => {
      var modal = document.getElementById("contactModal");
      modal.style.display = "none";
      alert(data);
  });  
}
</script>