<?php
session_start();
if(isset($_POST['verzenden'])){
  $nagiri = $_POST['nagiri'];
  $sashimi = $_POST['sashimi'];
  $komkommer = $_POST['komkommer'];
  $tofu = $_POST['tofu'];
  $paiso = $_POST['paiso'];
  
  if(empty($nagiri) || empty($sashimi) || empty($komkommer) || empty($tofu) || empty($paiso)){
    echo "er is 1 of meerdere velden niet ingevuld";
  } else {
    if(!empty($nagiri) && !empty($sashimi) && !empty($komkommer) && !empty($tofu)){
      $nagifilter = filter_input(INPUT_POST, 'nagiri' , FILTER_SANITIZE_NUMBER_INT);
      $sashifilter = $nagifilter = filter_input(INPUT_POST, 'sashimi' , FILTER_SANITIZE_NUMBER_INT);
      $komkommerfilter = filter_input(INPUT_POST, 'komkommer' , FILTER_SANITIZE_NUMBER_INT);
      $tofufilter = filter_input(INPUT_POST, 'tofu' , FILTER_SANITIZE_NUMBER_INT);
      $paisofilter = filter_input(INPUT_POST, 'paiso' , FILTER_SANITIZE_NUMBER_INT);
      if($nagifilter === false && $sashifilter === false && $komkommerfilter === false && $tofufilter === false && $paisofilter){
        echo "je hebt een of meerdere items goed ingevult";
      } else {

        $_SESSION['sashimi'] = $sashifilter;
        $_SESSION['komkommer'] = $komkommerfilter;
        $_SESSION['tofu'] = $tofufilter;
        $_SESSION['paiso'] = $paisofilter;
        $_SESSION['nagiri'] = $nagifilter;
        header('Location: formgegevens.php');


      }
    }
  }




}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
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



<!-- image background  -->

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




<!--bestellijstje -->



<!-- <div class="container">
    <div class="row text-center">
    <h4>bestellijst </h4>
    <p>menu kaart </p>
    </div>


</div>

<div class="container">
    <div class="col-lg-12">


    <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected> menukaart sushi</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelect">aantal</label>
</div>

  
<div class="form-floating mt-3">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">filee</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelect">aantal</label>
</div>

  
<div class="form-floating mt-3">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelect">Aantal</label>
</div>

  
<div class="form-floating mt-3">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelect">aantal</label>
</div>




    </div>
</div>


 -->





<form method="POST" class="container mb-3">

<label for="nagiri">nagiri </label>
<input type="number" class="form-control" name="nagiri"><br>
<label for="sashimi">sashimi </label>
<input type="number" class="form-control" name="sashimi"><br>
<label for="komkommer">komkommer </label>
<input type="number" class="form-control" name="komkommer"><br>
<label for="tofu">tofu </label>
<input type="number" class="form-control" name="tofu"><br>
<label for="paiso">paiso </label>
<input type="number" class="form-control" name="paiso"><br>
<input type="submit" name="verzenden" value="submit">



</form>



























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