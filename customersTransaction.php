<?php
require('db.php');
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="logo.png" sizes="937x937" type="image/png">

    <! INTER-FONT >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    
    
    <! ABRIL-FATFACE-FONT >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <! BITTER-FONT >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@800&family=Lobster&family=Merienda+One&family=Praise&display=swap" rel="stylesheet">

    <! Amiri-FONT >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">



    <style>
        body{
            font-family: 'Inter';
            font-size: 20px;

        }
        .navbar{
            background-color: rgb(58, 44, 46);
            color: white;
        }

        .navbar-brand{
           font-family: 'Abril-fatface';
           font-size: 40px;
         
        }

        .text-break{
            text-align: justify;
            text-indent: 10%;
            
        }
        
       h1{
           font-family: 'Bitter';
           font-size: 40px;
           color: maroon;
       }

       .form{
         text-align: center;
       }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
  <a class="navbar-brand"  href="#">
               <img src="logo.png" alt="" width="70" height="50" class="d-inline-block align-text-top">  
               Leo's Charter
           </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="customersTransaction.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transaction Records
          </a>
          <ul class="dropdown-menu " style ="background-color: #990F02" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" style="color: white" href="stradaForm_view.php"> Mitsubishi Strada</a></li>
            <li><a class="dropdown-item" style="color: white" href="wigoForm_view.php">Toyota Wigo</a></li>
            <li><a class="dropdown-item" style="color: white" href="rushForm_view.php">Toyota Rush</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" style="color: white" href="nv350Form_view.php">Nissan NV350 Van</a></li>
            <li><a class="dropdown-item" style="color: white" href="commuterForm_view.php">Toyota Commuter Van</a></li>
          </ul>
        </li>

        <li class="nav-item">

                   <a class="nav-link " style="color: red;" href="logout.php"><b>Log Out</b></a>

               </li>
      </ul>

    </div>
  </div>
</nav>

</div>
</div>
    

<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Welcome to Admin Page</p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>