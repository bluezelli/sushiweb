<?php
  function datumdeliv(){
    $bezorgingsTijd = date('H:i', strtotime('1 hour'));
    $datumVanVandaag = date('D');
    $dagen = date('w');
    if($dagen == 1){
      echo "Vandaag is het: <b> Maandag</b>. Wij bezorgen om: $bezorgingsTijd." ;
    } else if($dagen == 2){
      echo "Vandaag is het: <b> Dinsdag</b>. Wij bezorgen om: $bezorgingsTijd." ;
    } else if($dagen == 3){
      echo "Vandaag is het: <b> Woensdag</b>. Wij bezorgen om: $bezorgingsTijd.";
    } else if($dagen == 4){
      echo "Vandaag is het: <b>Donderdag</b>. Wij bezorgen om: $bezorgingsTijd.";
    } else if($dagen == 5){
      echo "Vandaag is het: <b>Vrijdag</b>. Wij bezorgen om: $bezorgingsTijd.";
    } else {
      
        echo "wij zijn gesloten het is weekend";
      
    }
  }

  











?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">    
<title>GoldenFish</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">GoldenFish</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="bestel.php">Bestellingen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="formgegevens.php">formgegevens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="mandje.php">mandje</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<div
  class="p-5 text-center bg-image"

        style="background-repeat:none;
        background-size:cover;

          background-image: url('./img/sush.webp');

          height: 200px;

        "

      >

        <div class="mask">

          <div class="d-flex justify-content-center align-items-center h-100">

            <div class="text-white">

              <h1 class="mb-3">Home</h1>

            </div>

          </div>

        </div>

      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col">
            <p class = "fs-4">
              <?php
             $alles = date("l jS \of F Y h:i:s A");
              $dagdelen = date("H");
              if($dagdelen >= 6 && $dagdelen < 12){
                echo "GoedeMorgen";
              } else if($dagdelen >=12 && $dagdelen < 18){
                echo "GoedeMiddag";
              } else if($dagdelen >= 18 && $dagdelen < 24){
                echo "Goedenavond"; }
              else if($dagdelen >= 6 && $dagdelen <= 12){
                echo "Goede Morgen";
              } else if($dagdelen >=12 && $dagdelen <= 18){
                echo "Goede Middag";
              } else if($dagdelen >= 18 && $dagdelen <= 24){
                echo "Goeden avond";
              } else {
                if($dagdelen > 24 && $dagdelen < 6){
                  echo "De winkel is gesloten";
                }
              }
              ?>
              
            Welkom bij sushi,</p>
            <p class = "fs-6">wij zijn gespecialiceerd in sushi</p>
            <p class = "fs-6">
             <?php 
            datumdeliv();
             ?>
            </p>
            <p class = "fs-6">hallo welkom bij sushi</p>
            <p class = "fs-6"></p>
            <br>
            <p class = "fs-6">

            </p>
            <p class = "fs-6">Bezorgtijd vanaf nu : <?php
              // echo datumdeliv();
              $string = strtotime("+1 hour");
            $time = date("H:i" , $string);
            // $time = $time;
              if($time > 12 && $time < 18){
                echo "Open";
              } else {
                echo "dicht";
              }

            echo $time;
            ?></p>
          </div>
        </div>
      </div>

 <?php
 $time = date("l jS \of F Y h:i:s A");
 $dagdelen = date("H");

/*
if($time > 12 && $time < 18){
  echo "Goedemiddag";
} else if($time >= 18 && < 24) {
  echo "Goedeavond";
} else {
  echo "Goedeavond";
}

*/ 


?>



      <div class="container">
        <h1 class="text-center"></h1>
      </div>


      <div class="container">
        <div class="row">

<div class="col">
<div class="card" style="">
  <img src="./img/images.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>




      

<div class="col">
<div class="card" style="">
  <img src="./img/images.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
      
      
      </div>
    </div>


<!-- 
      <section class="">

        <div class="container mt-3">
          
    <div class="row">

      <div class="col">
      <div class="card" style="">
      <img src="./img/images.jpg" class="card-img-top" alt="...">
  
      <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
  
  </div>
</div>

      </div>
    </div>
</div>


      </section -->



































    
</div>
    



<div class="container-fluid bg-dark text-light text-center">

<footer >

<div class="d-flex justify-content-around">

<div class="">
    <p><b>Contact gegevens </b></br>
    Adress: valentijnstraat 404 <br>
    TelefoonNummer: 0645454545 <br>
    Postadress: 2113 ww Denhaag </p>
</div>

<div class="">
    <p><b>Contact gegevens </b></br>
    Adress: valentijnstraat 404 <br>
    TelefoonNummer: 0645454545 <br>
    Postadress: 2113 ww Denhaag </p>
</div>

</div>




</footer>

</div>
    




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>