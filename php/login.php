<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>İletişim</title>
    <link rel="stylesheet" href="/website/Web-Project01/styles/style.css"/>
</head>
<body >

    <!--Menu Kismi-->
    <header class="header">
        <a href="#" class="logo">
            <img src="/website/Web-Project01/images\logo.jpg" alt="logo">
        </a>
        <nav class = "navbar">
        <a href="/website/Web-Project01/index.html"  > Ana Menu </a>
            <a href="/website/Web-Project01/sehir.html" > Şehrim </a>
            <a href="/website/Web-Project01/miras.html" > Mirasımız </a>
            <a href="/website/Web-Project01/about.html"  > İlgi Alanlarım </a>
            <a href="/website/Web-Project01/contact.html" > İletişim </a>
            <a href="/website/Web-Project01/cv.html"> Hakkımda </a>
            <a href="/website/Web-Project01/login.html" class="active"> Login</a>
        </nav>

        <div class = "buttons">
            <button id="signin-btn">
                <i class="fas fa-sign-in"> </i>
            </button>
            <button id="home-btn1">
                <i class="fas fa-home"> </i>
            </button>
            <button id="menu-btn">
                <i class="fas fa-bars"> </i>
            </button>
        </div>

        <div class="home-button">

        </div>

    </header>
    <!--Menu kismi-->

    <section>
    <div class="admin">
        <div class="row">
            <div class="adminIletisimTablo">

            <?php
session_start();

if (isset($_POST["name"]) && isset($_POST["password"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifre kontrolü
    if ($name === "b211210088@sakarya.edu.tr" && $password === "b211210088" || $name === "B211210088@sakarya.edu.tr" && $password === "B211210088") {
        // Başarılı giriş
        echo "Hoşgeldin " . $name . "<br>Girişin Onaylandı.";
    } else {
        // Hatalı giriş
        echo "Kullanıcı epostası veya şifre hatalı";
        //header("refresh:10; url=/website/Web-Project01/login.html"); 
       // exit(); // Kodun daha fazla çalışmasını engelle
    }
} else {
    // Kullanıcı adı veya şifre yoksa
    echo "Kullanıcı adı veya şifre eksik";
  //  header("refresh:10; url=/website/Web-Project01/login.html"); 
   // exit(); // Kodun daha fazla çalışmasını engelle
}
?>
            <
        </div>
    </div>


    </section>

    <section class="footer">
        <div class="search">
            <input type="text"
            class="search-input" placeholder="Search"/>
            <button class="btn btn-primary">Search</button>
        </div>

        <div class="share">
            <a href="https://github.com/fatihkaratash" class="fab fa-github"></a>
            <a href="https://www.linkedin.com/in/fatihkaratash" class="fab fa-linkedin"></a>
        </div>

        <div class="link">
        <a href="/website/Web-Project01/index.html"  > Ana Menu </a>
            <a href="/website/Web-Project01/sehir.html" > Şehrim </a>
            <a href="/website/Web-Project01/miras.html" > Mirasımız </a>
            <a href="/website/Web-Project01/about.html"  > İlgi Alanlarım </a>
            <a href="/website/Web-Project01/contact.html" > İletişim </a>
            <a href="/website/Web-Project01/cv.html"> Hakkımda </a>
            <a href="/website/Web-Project01/login.html" class="active"> Login</a>
        </div>

        <div class="credit">
            Created by <span>M.Fatih Karataş</span> | all rights reserved
        </div>


    </section>


    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>


    <script src="script.js"></script>
</body>

</html>