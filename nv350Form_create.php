<?php 

include "db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
	
    <!--INTER-FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">




</head>
    
    <style>
      body{
          font-family: 'Inter';
      }
      .navbar{
          background-color: rgb(58, 44, 46);
          color: rgb(36, 32, 32);
      }

      .navbar-brand{
         font-family: 'Abril-fatface';
         font-size: 40px;
       
      }

      h3 {
          color: black;
          font-size: 40px;
      }

      .input-group-text{
          background-color: red;

      }

      div.button{
        text-align: center;
      }

      a.btn{
          width: 200px;
          background: red;
        
      }
      
      </style>

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
           
  <div class="container-fluid">
      
    <a class="navbar-brand"  href="#">
      <img src="logo.png" alt="" width="70" height="50" class="d-inline-block align-text-top">  
      Leo's Charter
  </a>
  </div>
</nav>

<!--ALL CARS FORMS DI PA TO NA INCLUDE YUNG JS SA FILTERED DATES   --- by: Mayang   -->
<body>

<div class="container-fluid vh-100" style="margin-top:100px">
      <div class="" style="margin-top: 50px">
          <div class="rounded d-flex justify-content-center">
              <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                  <div class="text-center">
                      <h3><b>Booking Form</b></h3>
                  </div>

                  <fieldset>
                  <form class="signup-form" action="nv350Form_customerDetails.php" method="post">
                      <div class="p-4">
                          <div class="row">

                            <div class="input-group col-md-4 col-sm-12 mb-3"> 
                                <span class="input-group-text"><i class="bi bi-truck text-white"></i></span>
                                
                                <input type="text" id="myInput" name="car_model" class="form-control" value="Nissan NV350 Van"required readonly>
                            </div>
                          
                            <div class="input-group col-md-4 col-sm-12 mb-3">
                              <span class="input-group-text"><i class="bi bi-file-person-fill text-white"></i></span>
                              <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required>
                          </div>
                          
                          <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-file-person-fill text-white"></i></span>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-plus-fill text-white"></i></span>
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-fill text-white"></i></span>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-house-fill text-white"></i></span>
                            <input type="text" id="addr" name="addr" class="form-control" placeholder="Address" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill text-white"></i></span>
                            <input type="date" id="date_start" name="date_start" class="form-control" placeholder="Date Start" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill text-white"></i></span>
                            <input type="date" id="date_end" name="date_end" class="form-control" placeholder="Date End" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-sort-numeric-up text-white"></i></span>
                            <input type="number" id="numDays" name="numDays" class="form-control" placeholder="Number of Days" required>
                         </div>

                          <div class="button pt-1 mb-4"> 
                              <input type ="submit" class ="btn btn-dark btn-lg mt-2 mv-3" value="Book Now" name="booking">
                              
                            </div>  

                            <center>
                            <a class="btn btn-danger btn-lg mt-2 mv-3" href="reservation.html" role="button">Cancel</a>
                            </center> 
                        </div>
                        </div>
                  </form>
                  </fieldset>
              </div>
          </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script scr="app_form.js"></script>

</body>
</html>
































