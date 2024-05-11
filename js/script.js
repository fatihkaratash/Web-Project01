
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


