
const navbar = document.querySelector(".navbar");

// buttons //


const menuBtn = document.querySelector("#menu-btn")



menuBtn.addEventListener("click" , function(){
    navbar.classList.toggle("active");
    document.addEventListener("click", function(e){
        if(
            !e.composedPath().includes(menuBtn) &&
            !e.composedPath().includes(navbar)
        ){
            navbar.classList.remove("active");
        }

    });
});


document.getElementById("home-btn1").addEventListener("click", function() {
    window.location.href = "index.html";
});

document.getElementById("signin-btn").addEventListener("click", function() {
    window.location.href = "login.html";
});



$(document).ready(function(){
    $('.carousel').carousel();
  });

  function validateform() {
    var name = document.myform.name.value;
    var password = document.myform.password.value;

    if (name == null || name == "") {
        alert("Email alanı dolu olmalı");
        return false;
    } else if (password.length < 6) {
        alert("Parola en az 6 haneli olmalı.");
        return false;
    }
}  

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Form submitini engelle
    
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Kullanıcı adı ve şifre doğrulaması
    if (username === "b211210088" && password === "b211") {
        // Başarılı giriş
        window.location.href = "welcome.php"; // Yönlendirme yapabilirsiniz
    } else {
        // Hatalı giriş
        document.getElementById("error-message").innerText = "Hatalı kullanıcı adı veya şifre!";
    }
});

