<?php 
<<<<<<< HEAD
 session_start();

 $_SESSION['email'] = $_POST['emails'];
 $_SESSION['fname'] = $_POST['fname'];
 $_SESSION['lname'] = $_POST['lname'];
 $_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['adress'] = $_POST['adress'];
 

=======
session_start();


$_SESSION
>>>>>>> ea9f4cd29c1dc329edf2a8ee8c22e128fff668e1


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
          <a class="nav-link text-light" href="#">Bestellingen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Pricing</a>
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

<!-- klantbestand-->


<<<<<<< HEAD
<div class="container my-3 justify-content-center d-flex flex-column align-self-center gap-3">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Bestelling</h1>
      <p class="card-text">Zet hier de bestelling van de klant neer met PHP</p>
      <p class="card-text">Totaal $: </p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Klantgegevens</h1>
 
 
      <p class="card-text">Zet hier de gegevens van de klant met PHP <?php echo $_SESSION['email']; 
       echo $_SESSION['fname'];
       echo $_SESSION['lname'];
       echo $_SESSION['adress'];
       echo $_SESSION['zipcode'] . "<br>";

    
    ?></p>
    </div>
  </div>
 
</div>



=======
>>>>>>> ea9f4cd29c1dc329edf2a8ee8c22e128fff668e1












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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>