
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector("#menu-btn")


window.onload = function(){

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

//js kontrolleri
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
//js kontrolleri bitti

 //api//

 document.getElementById('getPriceBtn').addEventListener('click', function() {
    fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,solana&vs_currencies=usd')
        .then(response => response.json())
        .then(data => {
            const bitcoinPrice = data.bitcoin.usd;
            const ethereumPrice = data.ethereum.usd;
            const solanaPrice = data.solana.usd;

            updatePrice('bitcoinPrice', `Bitcoin Fiyatı: $${bitcoinPrice}`);
            updatePrice('ethereumPrice', `Ethereum Fiyatı: $${ethereumPrice}`);
            updatePrice('solanaPrice', `Solana Fiyatı: $${solanaPrice}`);
        })
        .catch(error => {
            console.error('Hata:', error);
            updatePrice('bitcoinPrice', 'Bitcoin fiyatı alınamadı.');
            updatePrice('ethereumPrice', 'Ethereum fiyatı alınamadı.');
            updatePrice('solanaPrice', 'Solana fiyatı alınamadı.');
        });
});

function updatePrice(elementId, text) {
    const element = document.getElementById(elementId);
    element.innerText = text;
    element.classList.add('animate');
    setTimeout(() => {
        element.classList.remove('animate');
    }, 1000);
}
//api//


const apiKey = 'GAXUL624U6PUDBG4'; // Alpha Vantage API anahtarım
document.getElementById('getPriceButton').addEventListener('click', function() {
    getStockPrice('AAPL', 'applePrice');
    getStockPrice('MSFT', 'microsoftPrice');
    getStockPrice('GOOGL', 'googlePrice');
});

function getStockPrice(symbol, elementId) {
    fetch(`https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=${symbol}&apikey=${apiKey}`)
        .then(response => response.json())
        .then(data => {
            const price = data['Global Quote']['05. price'];
            updatePrice(elementId, `${symbol} Fiyatı: $${price}`);
        })
        .catch(error => {
            console.error('Hata:', error);
            updatePrice(elementId, `${symbol} fiyatı alınamadı.`);
        });
}

//api bitti
};