<?php 

$sumber = 'Js & Json/test.json';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>

<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Jquaery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootsrap Icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" 
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- Library Animate Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style/style.css">

    <!-- my js -->
    <script src="js/script.js"></script>

    <title>DoCard</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Awal NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top" >
        <div class="container">
            <img src="src/dota 2 icon.jpg" alt="" width="50" height="50">
          <a class="navbar-brand ms-5" href="#" style="font-family: 'Luxurious Roman', cursive;" data-aos="fade-right"
              data-aos-offset="500"
              data-aos-easing="ease-in-sine" > DOCARD </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500"> Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#about" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500"> About Game </a>
              </li>
            <!-- Dropdown -->
          <div class="btn-group" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
              <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Info
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#character">Character</a></li>
                <li><a class="dropdown-item" href="#statscharacter"> Statistic Character </a></li>
                <li><a class="dropdown-item" href="#contacts">Contacts</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
          </div>
        </div>
      </div>
  </nav>
    <!-- Akhir NavBar -->

<!-- Awal -->

    <body>
      <div class="container10 justify-content-center">
        <div class="item header"><img src="src/dota 2 icon.jpg" alt="" width="400" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000"></div>
        <div class="item sidebar" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">DOTA CARD</div>
        <div class="item content"></div>
        <div class="item footer"> 
          
        <a href="https://store.steampowered.com/app/570/Dota_2/" target="_blank"> <img src="src/logo steam.png" alt="" width="100" height="100" data-aos="fade-right"> </a> 
        
        <a href="https://valvestore.forfansbyfans.com/title/dota-2.html" target="_blank" data-aos="fade-left"> <img src="src/logo valve.jpg" alt="" width="150" height="" > </a> 
      
      </div>
        <!-- <div class="item satu1">4</div> -->
        <!-- <div class="item dua2">5</div> -->
        <!-- <div class="item tiga3">6</div> -->
        <!-- <div class="item">7</div> -->
        <!-- <div class="item">8</div> -->
        <!-- <div class="item">9</div> -->
      </div>
<!-- Akhir Awal -->
      
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="about" ><path fill="#1f1b12" fill-opacity="1" d="M0,192L48,160C96,128,192,64,288,64C384,64,480,128,576,154.7C672,181,768,171,864,154.7C960,139,1056,117,1152,122.7C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#19160e;"  ></path></svg >

<!-- About Game -->
      <hr style="visibility: hidden;" >
      <div class=" text-center fs-2" >
        <div class="" style="font-family: 'Rubik', sans-serif;" data-aos="zoom-in">
          About Game
        </div>
      </div>

      <hr width="100%" height="100px" style="text-align:center;">

      <div class=" text-center fs-4">
        <div class="" style="font-family: 'Rubik', sans-serif;" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom"">
            Dota 2 adalah sebuah permainan arena pertarungan daring multipemain, dan merupakan sekuel dari Defense of the Ancients mod pada Warcraft 3: Reign of Chaos dan Warcraft 3: The Frozen Throne. DotA 2 dikembangkan oleh Valve Corporation, terbit juli 2013 dota 2 dapat dimainkan secara gratis pada sistem operasi Microsoft Windows, OS X and Linux. Dota 2 dapat dimainkan secara eksklusif melalui distributor resmi valve, Steam.

            Dota 2 dimainkan oleh 2 tim yang beranggota 5 orang pemain, setiap tim memiliki markas yang berada dipojok peta, setiap markas memiliki satu bangunan bernama "Ancient", Di mana tim harus berusaha menghancurkan "Ancient" tim lawan agar dapat memenangkan pertandingan. Setiap pemain hanya dapat mengontrol satu karakter "Hero" yang berfokus pada menaikan level, mengumpulkan gold, membeli item dan melawan tim lawan untuk menang.
            
            Pengembangan Dota 2 dimulai sejak tahun 2009. Ketika pengembang mod DotA, Icefrog, dipekerjakan oleh Valve sebagai lead designer. Dota 2 dipuji oleh kritikus karena gameplay-nya, kualitas pembuatan dan kesetiaan pada gameplay pendahulu DotA mod Warcraft 3. tetapi Dota 2 juga menuai kritik sebagai game yang susah dipelajari dan para pemain yang tidak ramah.Sampai pertengahan 2017 Dota 2 menjadi game yang memiliki aktivitas pemain paling banyak di Steam, dengan pucak 800,000 pemain online bersamaan setiap hari. Namun telah disusul game PUBG Player unknown's battle ground yang memiliki aktivitas pemain sampai 1 juta setiap harinya
        </div>
      </div>

<!-- About Game -->

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="character"><path fill="#1f1b12" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,117.3C384,139,480,213,576,240C672,267,768,245,864,218.7C960,192,1056,160,1152,122.7C1248,85,1344,43,1392,21.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#19160e;"></path></svg>

<!-- Navbar Role Character -->

      <div class="" style="background-color: #1f1b12; ">
        <div class="row justify-content-center">
          <div class="col-md-8"  >
            
              <h1 class="text-center text-light" data-aos="fade-up"
     data-aos-duration="500"> Character </h1>

              <div class="input-group mb-3" data-aos="fade-up"
     data-aos-duration="500">

                <input type="text" class="form-control" placeholder="Character" id="search-input" >

                <button class="btn btn-dark" type="button" id="search-button">Search</button>
              </div>
          </div>
        </div>

        <div class="row" id="movie-list">

        </div>
      </div>

<!-- Akhir Navbar Role Character -->

<!-- Card -->

      <section class="services" >
        <?php foreach ($data['result'] as $row) {
            # code...
           ?>
              <div class="service" data-aos="fade-up"
     data-aos-duration="500">
  
                  <div class="icon"> <img width="256px" height="144px" class="img-fluid float-start" src="<?php echo $row['img'] ?>" class="card-img-top" alt="..."> </div>
                      <h3 class="text-light" style="font-family: 'Luxurious Roman', cursive;">
                      <img src="  <?php echo $row['icon'] ?> " alt="" >  <?php echo $row['localized_name'] ?> 
                      </h3>
  
                      <div>
                        
                      </div>
  
                      <a href="page 2" target="_blank" class="btn btn-dark" > Preview </a>
                      
                        
  
                            </div>
                          </div>
                        </div>
          <?php }?>
                      </section>

<!-- Akhir Card -->

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="statscharacter"><path fill="#1f1b12" fill-opacity="1" d="M0,288L0,288L36.9,288L36.9,192L73.8,192L73.8,64L110.8,64L110.8,192L147.7,192L147.7,256L184.6,256L184.6,192L221.5,192L221.5,256L258.5,256L258.5,64L295.4,64L295.4,96L332.3,96L332.3,160L369.2,160L369.2,64L406.2,64L406.2,96L443.1,96L443.1,96L480,96L480,192L516.9,192L516.9,160L553.8,160L553.8,96L590.8,96L590.8,192L627.7,192L627.7,192L664.6,192L664.6,128L701.5,128L701.5,160L738.5,160L738.5,64L775.4,64L775.4,32L812.3,32L812.3,160L849.2,160L849.2,288L886.2,288L886.2,32L923.1,32L923.1,192L960,192L960,224L996.9,224L996.9,96L1033.8,96L1033.8,224L1070.8,224L1070.8,32L1107.7,32L1107.7,288L1144.6,288L1144.6,96L1181.5,96L1181.5,320L1218.5,320L1218.5,128L1255.4,128L1255.4,256L1292.3,256L1292.3,64L1329.2,64L1329.2,64L1366.2,64L1366.2,288L1403.1,288L1403.1,128L1440,128L1440,0L1403.1,0L1403.1,0L1366.2,0L1366.2,0L1329.2,0L1329.2,0L1292.3,0L1292.3,0L1255.4,0L1255.4,0L1218.5,0L1218.5,0L1181.5,0L1181.5,0L1144.6,0L1144.6,0L1107.7,0L1107.7,0L1070.8,0L1070.8,0L1033.8,0L1033.8,0L996.9,0L996.9,0L960,0L960,0L923.1,0L923.1,0L886.2,0L886.2,0L849.2,0L849.2,0L812.3,0L812.3,0L775.4,0L775.4,0L738.5,0L738.5,0L701.5,0L701.5,0L664.6,0L664.6,0L627.7,0L627.7,0L590.8,0L590.8,0L553.8,0L553.8,0L516.9,0L516.9,0L480,0L480,0L443.1,0L443.1,0L406.2,0L406.2,0L369.2,0L369.2,0L332.3,0L332.3,0L295.4,0L295.4,0L258.5,0L258.5,0L221.5,0L221.5,0L184.6,0L184.6,0L147.7,0L147.7,0L110.8,0L110.8,0L73.8,0L73.8,0L36.9,0L36.9,0L0,0L0,0Z" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#19160e;"></path></svg>

<!-- Stats -->

<h1 class="text-center" data-aos="fade-up"
     data-aos-duration="2000"> Statistic Character </h1>
 <div class="container mt-5 border">

<div class="row row-cols-12 border" data-aos="fade-up"
     data-aos-duration="500">
    <div class="col">Icon</div>
    <div class="col">Name Hero</div>
    <div class="col">Attack Range</div>
    <div class="col">Projectile Speed</div>
    <div class="col">Attack Rate</div>
    <div class="col">Base Health Regen</div>
    <div class="col">Int Gain</div>
    <div class="col">primary Attr</div>
    <div class="col">Attack Type</div>
    <div class="col">Base Int</div>
    <div class="col">Base Attack Max</div>
    <div class="col">Base Attack Min</div>
</div>

<!-- <div class="container mt-5"> -->

<?php foreach ($data['result'] as $row) {
  # code...
 ?>
<div class="row row-cols-12" data-aos="fade-up"
     data-aos-duration="7000">
    <div class="col border" ><img src="  <?php echo $row['icon'] ?> " alt="" ></div>
    <div class="col border"><h3 class="text-dark" style="Font-size: 15px; font-family: 'Luxurious Roman', cursive;">
            <?php echo $row['localized_name'] ?> 
            </h3>
            </div>
    <div class="col border"> <?php echo $row['attack_range'] ?></div>
    <div class="col border"><?php echo $row['projectile_speed'] ?></div>
    <div class="col border"><?php echo $row['attack_rate'] ?></div>
    <div class="col border"><?php echo $row['base_health_regen'] ?></div>
    <div class="col border"><?php echo $row['int_gain'] ?></div>
    <div class="col border"><?php echo $row['primary_attr'] ?></div>
    <div class="col border"><?php echo $row['attack_type'] ?></div>
    <div class="col border"><?php echo $row['base_int'] ?></div>
    <div class="col border"><?php echo $row['base_attack_max'] ?></div>
    <div class="col border"><?php echo $row['base_attack_min'] ?></div>
</div>

<?php }?>
</div>

<!-- Akhir Stas -->

<!-- Transisi -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1f1b12" fill-opacity="1" d="M0,224L0,160L45,160L45,288L90,288L90,96L135,96L135,256L180,256L180,192L225,192L225,64L270,64L270,192L315,192L315,256L360,256L360,128L405,128L405,288L450,288L450,192L495,192L495,64L540,64L540,32L585,32L585,224L630,224L630,160L675,160L675,288L720,288L720,256L765,256L765,160L810,160L810,128L855,128L855,256L900,256L900,96L945,96L945,32L990,32L990,224L1035,224L1035,288L1080,288L1080,128L1125,128L1125,0L1170,0L1170,0L1215,0L1215,288L1260,288L1260,288L1305,288L1305,288L1350,288L1350,32L1395,32L1395,256L1440,256L1440,320L1395,320L1395,320L1350,320L1350,320L1305,320L1305,320L1260,320L1260,320L1215,320L1215,320L1170,320L1170,320L1125,320L1125,320L1080,320L1080,320L1035,320L1035,320L990,320L990,320L945,320L945,320L900,320L900,320L855,320L855,320L810,320L810,320L765,320L765,320L720,320L720,320L675,320L675,320L630,320L630,320L585,320L585,320L540,320L540,320L495,320L495,320L450,320L450,320L405,320L405,320L360,320L360,320L315,320L315,320L270,320L270,320L225,320L225,320L180,320L180,320L135,320L135,320L90,320L90,320L45,320L45,320L0,320L0,320Z" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#19160e;"></path></svg>
<!-- Transisi -->

      <div class="padbot">
      </div>
  </body>
</html>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>