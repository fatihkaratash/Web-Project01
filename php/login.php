<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit=no">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="boostrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1922f4bd30.js" crossorigin="anonymous"></script>

</head>

<body id="anasayfa1">

    <!--Menu Kismi-->
    <header class="header">
        <a href="#" class="logo">
            <img src="images\logo.jpg" alt="logo">
        </a>
        <nav class = "navbar">
            <a href="index.html"  > Ana Menu </a>
            <a href="sehir.html" > Şehrim </a>
            <a href="miras.html" > Mirasımız </a>
            <a href="about.html" class="active" > İlgi Alanlarım </a>
            <a href="contact.html" > İletişim </a>
            <a href="cv.html" > Hakkımda </a>
            <a href="login.html"> Login</a>
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

    <div class="admin">
        <div class="row">
            <div class="col adminIletisimTablo">
                <?php if ($_POST["name"] == "B211210088@sakarya.edu.tr" && $_POST["password"] == "B211210088") {
                    echo "Hoşgeldin " . $_POST["name"];
                    echo "<br>Girişin Onaylandı.";
                } else {
                    echo "Kullanıcı epostası yada şifre hatalı";
                    header("refresh:2; login.html");
                }
                ?>
            </div>
        </div>
    </div>

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
            <a href="index.html"  > Ana Menu </a>
            <a href="sehir.html" > Şehrim </a>
            <a href="miras.html" > Mirasımız </a>
            <a href="about.html"  > İlgi Alanlarım </a>
            <a href="contact.html" > İletişim </a>
            <a href="cv.html" > Hakkımda </a>
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