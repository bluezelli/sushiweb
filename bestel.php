<?php 
session_start();



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


<div class="container formulier mt-3 mb-5">
    <div class="row p-3 mb-5">

        <div class="col text-center">


        <h1>Klantformulier</h1>
            <form method="POST" action="formgegevens.php">
               
                <div class="form-group row my-2">
                    <label for="colFormFname" class="col-sm-2 col-form-label">Voornaam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormFname" name="fname" placeholder="Voornaam" value="" <?php echo $_POST['fname'] ?>>
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="colFormLname" class="col-sm-2 col-form-label">Achternaam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormLname" name="lname" placeholder="Achternaam">
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="colFormAddress" class="col-sm-2 col-form-label">Adres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormAddress" name="address" placeholder="Adres">
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="colFormAddress" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormAddress" name="emails" placeholder="Adres">
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="colFormCity" class="col-sm-2 col-form-label">Woonplaats</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormCity" name="city" placeholder="Woonplaats">
                    </div>
                </div>
                <div class="form-group row my-2">
                    <label for="colFormZipcode" class="col-sm-2 col-form-label">Postcode</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="colFormZipcode" name="zipcode" placeholder="Postcode">
                    </div>
                </div>


                <input class="btn btn-primary" type="submit" name="verzenden" value="Naar Sushi's" > </input>

            </form>


        </div>
    </div>

</div>




<?php

if(isset($_POST['verzenden'])){

  $name = $_POST['fname'];
  $lname = $_POST['lname'];
  $adress = $_POST['address'];
  $city = $_POST['city'];
  $zipcode = $_POST['zipcode'];


  echo "formulier is verzonden". "<br>";

  // if(!empty($_POST['fname']) && !empty($lname) && !empty($adress) && !empty($city) && !empty($zipcode)){
 
    if(!empty($name) && !empty($lname) && !empty($adress) && !empty($city) && !empty($zipcode)){
  // $name = filter_input(INPUT_POST, "$name", FILTER_VALIDATE_STRING);
  $adress = filter_input(INPUT_POST, "$adress", FILTER_VALIDATE_EMAIL);
  

  if($name === false && $lname === false){
    echo "je hebt het veld ingevuld maar je hebt niet de juiste characters gebruikt";
  } else {
    echo "je naam is: " .$name . " en je achternaam is: " . $lname . "<br>";
    
    echo "je adress is: " . $adress . "<br>";
    echo "je woont in: " . $city . " en je postcode is: " . $zipcode;
  
    $name = "";
    $adress = "";
    $city = "";
    $lname = "";

  }

  
}


}





?>












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








































