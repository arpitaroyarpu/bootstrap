<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<h1> welcome ". $_SESSION['username']. " to menu page!</h1><br>";
    echo "<br><a href = 'logout.php'><input type = 'button' value='logout' name='logout'></a>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Food Menu</title>
  </head>
  <body>
    <div class="container">
<div class="bg-primary text-center p-3">
    <h1>Food Menu</h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
        <h5 class="text-center"> Price : 50$ </h5>
        <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
    </div>

    <div class="col-lg-3 col-md-6">
        <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
        <h5 class="text-center"> Price : 50$ </h5>
        <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
    </div>

    <div class="col-lg-3 col-md-6">
        <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
        <h5 class="text-center"> Price : 50$ </h5>
        <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
    </div>

    <div class="col-lg-3 col-md-6">
        <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
        <h5 class="text-center"> Price : 50$ </h5>
        <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
            <h5 class="text-center"> Price : 50$ </h5>
            <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
        </div>
    
        <div class="col-lg-3 col-md-6">
            <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
            <h5 class="text-center"> Price : 50$ </h5>
            <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
        </div>
    
        <div class="col-lg-3 col-md-6">
            <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
            <h5 class="text-center"> Price : 50$ </h5>
            <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
        </div>
    
        <div class="col-lg-3 col-md-6">
            <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
            <h5 class="text-center"> Price : 50$ </h5>
            <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
        </div>

        
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                <h5 class="text-center"> Price : 50$ </h5>
                <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
            </div>
        
            <div class="col-lg-3 col-md-6">
                <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                <h5 class="text-center"> Price : 50$ </h5>
                <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
            </div>
        
            <div class="col-lg-3 col-md-6">
                <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                <h5 class="text-center"> Price : 50$ </h5>
                <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
            </div>
        
            <div class="col-lg-3 col-md-6">
                <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                <h5 class="text-center"> Price : 50$ </h5>
                <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
            </div>

            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                    <h5 class="text-center"> Price : 50$ </h5>
                    <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
                </div>
            
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                    <h5 class="text-center"> Price : 50$ </h5>
                    <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
                </div>
            
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                    <h5 class="text-center"> Price : 50$ </h5>
                    <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
                </div>
            
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid img-thumbnail" src="img/noddles.jpg">
                    <h5 class="text-center"> Price : 50$ </h5>
                    <button class="btn btn-danger d-block m-auto px-5">Add to Cart</button>
                </div>
            


</div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

</html>
