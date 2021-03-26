<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <!-- Bootstrap CSS -->
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>ggstr - Calculator</title>

  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm: "
    style = "background-color: hsl(152, 59%, 61%)">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Simple Calculator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <p class="nav-link active"" >Silinder</p>
              </li>
              <li class="nav-item">
                <p class="nav-link active" >Kerucut</p>
              </li>
              <li class="nav-item">
                <p class="nav-link active" >Bola</p>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- Navbar bawah-->
      <nav class="navbar fixed-bottom navbar-light bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="github_PNG15.png" alt="" width="140" height="60" class="d-inline-block align-text-top">
            
          </a>
          <p style="align-text-right">Gagas / 1402019041 </p>
        </div>
      </nav>
       <!-- Navbar bawah-->

      

    <!-- End of navbar -->
    <h1 class="text-center font-monospace" style = "color: rgba(0, 0, 0, 0.767);">Hello<span id="user">  </h1>

    <p class="text-center font-monospace" style="background-color:rgb(238, 255, 0)"> Selamat Datang di Kalkulator  Sederhana</p>

    <!-- Form / Row -->
    <div class="row">
        <div class="column-silinder" style="background-color:rgba(230, 27, 0, 0.541);">
            <h2 style="margin-bot: 40px" > Silinder</h2>
            <label for="input jari-jari">Jari Jari Silinder</label>
            <input type="text" class="form-control" id="jarijarisilinder"  placeholder="Jari-jari (m)">
            <label for="input silinder">Tinggi Silinder</label>
            <input type="text" class="form-control" id="tinggisilinder"  placeholder="Tinggi (m)">
            <button type="submit" style="margin-top: 75px" class="btn btn-primary" onclick="hitungSilinder()" style = "margin-top: 10px;"> Submit</button>
        </div>
        <div class="column-kerucut" style="background-color:rgba(194, 86, 221, 0.37);">
            <h2>Kerucut</h2>
            <label for="input jari-jari">Jari Jari Kerucut</label>
            <input type="text" class="form-control" id="jarijarikerucut"  placeholder="Jari-jari (m)">
            <label for="input kerucut">Garis Pelukis Kerucut</label>
            <input type="text" class="form-control" id="pelukiskerucut"  placeholder="Garis pelukis (m)">
            <label for="input kerucut">Tinggi Kerucut</label>
            <input type="text" class="form-control" id="tinggikerucut"  placeholder="Tinggi (m)">
            <button type="submit"  class="btn btn-primary" onclick="hitungKerucut()" style = "margin-top: 10px;"> Submit</button>
        </div>
        <div class="column-bola" style="background-color:rgba(253, 116, 3, 0.459);">
            <h2 style="margin-bot: 40px" > Bola</h2>
            <label for="input jari-jari">Jari Jari Bola</label>
            <input type="text" class="form-control" id="jarijaribola"  placeholder="Jari-jari (m)">
            <button type="submit" style="margin-top: 130px" class="btn btn-primary" onclick="hitungBola()" style = "margin-top: 10px;"> Submit</button>
        </div>
        <!-- Hasil -->

        <div class="column-hasil" style="background-color:#aaa;">
          <h2> Hasil Silinder</h2>
          <p id="luas-silinder">Luas Permukaan Silinder: </p>
          <p id="volume-silinder">Volume Silinder: </p>
          
      </div>
      <div class="column-hasil" style="background-color:#bbb;">
          <h2>Hasil Kerucut</h2>
          <p id="luas-kerucut">Luas Permukaan Kerucut: </p>
          <p id="volume-kerucut">Volume Silinder: </p>
         
      </div>
      <div class="column-hasil" style="background-color:#ccc;">
          <h2>Hasil Bola</h2>
          <p id="luas-bola">Luas Permukaan Bola: </p>
          <p id="volume-bola">Volume Bola: </p>
          
      </div>

        <!-- End of Hasil-->
        
      </div>
    
    <!-- End Of Row-->
    <script src="script.js"></script>

  </body>
</html>
