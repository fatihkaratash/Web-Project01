const apiKey = 'GAXUL624U6PUDBG4'; // Alpha Vantage API anahtarım

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
document.getElementById('getPriceButton').addEventListener('click', function() {
    getStockPrice('AAPL', 'applePrice');
    getStockPrice('MSFT', 'microsoftPrice');
    getStockPrice('GOOGL', 'googlePrice');
});

function updatePrice(elementId, text) {
    const element = document.getElementById(elementId);
    element.innerText = text;
    element.classList.add('animate');
    setTimeout(() => {
        element.classList.remove('animate');
    }, 1000);
}




//api*2

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
       
       
       //api-3//

       async function fetchData(){

        try{
    
            const pokemonName = document.getElementById("pokemonName").value.toLowerCase();
            const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`);
    
            if(!response.ok){
                throw new Error("Could not fetch resource");
            }
    
            const data = await response.json();
            const pokemonResmi = data.sprites.front_default;
            const imgElement = document.getElementById("pokemonResmi");
    
            imgElement.src = pokemonResmi;
            imgElement.style.display = "block";
        }
        catch(error){
            console.error(error);
        }
    }