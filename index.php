<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
	die("connection to this database failed due to " . mysqli_connect_error() );
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      .nav-link{
        font-size: 25px;
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
      }

      .display-4{
        text-align: center;
        font-family: "Comic Sans MS", cursive, sans-serif;
        color: #8A2BE2;

      }

      .btn-group{
        text-align: center;
        padding-left: 600px;
        size:50px;

      }

      .btn-1{
        
        background-color:#fbe084; 
        width:450px; 
        height: 130px; 
        border-radius:20px;
        margin-left: 320px;
        font-size:40px; 
        font-family: Times New Roman;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        border:1px solid #000;

      }
      .btn-1:hover {
            background-color: #7952b3;
            box-shadow: 0px 15px 20px rgba(121,82,179,0.6);
            color: white;
            transform: translateY(-7px);
          }

      .btn-2{
        background-color:#fbe084; 
        margin-left: 15px;
        width:450px; 
        height: 130px; 
        border-radius:20px;
        font-size:40px; 
        font-family: Times New Roman;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        border:1px solid #000;

      }
      .btn-2:hover {
            background-color:#7952b3;
            box-shadow: 0px 15px 20px rgba(121,82,179,0.6);
            color: white;
            transform: translateY(-7px);
          }

      
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>VD Bank</title>
  </head>
  <body style="background-color: #CEC9C9">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7952b3;" padding: px-2;>
  <a class="navbar-brand" href="index.php" style="max-width: 30%;">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/571f1e32122299.567022c95a29d.jpg" width="80" height="80" class="img-fluid">
 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: #ffeeba">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="users1.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display.php">Transactions</a>
      </li>
    </ul>
  </div>
</nav>

<!---------------------------------------------------------------------------------------------------------------------->

<div class="jumbotron">
  <h1 class="display-4">Welcome to VD Bank!</h1>
  <hr>
  <h2 class="display-4">Credit Management System</h2>
</div>

<br>
<div>
<button type="button" class="btn-1" onclick="location.href='users1.php';">Users</button>
<button type="button" class="btn-2" onclick="location.href='display.php';">Transaction History</button>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
