<?php 

include "db.php";

    if (isset($_POST['update'])) {
        

        $car_model = $_POST['car_model'];

        $user_id = $_POST['user_id'];

        $first_name = $_POST['first_name'];

        $last_name = $_POST['last_name'];

        $phone = $_POST['phone'];

        $email = $_POST['email'];

        $addr = $_POST['addr'];

        $date_start = $_POST['date_start'];

        $date_end = $_POST['date_end'];

        $numDays = $_POST['numDays'];

    
        $query=mysqli_query($con,"UPDATE `strada_form` SET  `car_model`='$car_model',`first_name`='$first_name',`last_name`='$last_name',`phone`='$phone',`email`='$email' ,`addr`='$addr' ,`date_start`='$date_start' ,`date_end`='$date_end' ,`numDays`='$numDays' WHERE `id`='$user_id'");

        if ($query == TRUE) {

            echo "Record updated successfully.";
            header('Location: stradaForm_view.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $query=mysqli_query($con,"SELECT id, car_model, first_name, last_name, phone, email, addr, date_start, date_end, numDays from strada_form WHERE `id`='$user_id'");


    if ($query->num_rows > 0) {        

        while ($row = $query->fetch_assoc()) {

            $car_model = $row['car_model'];

            $first_name = $row['first_name'];

            $last_name = $row['last_name'];

            $phone = $row['phone'];

            $email = $row['email'];

            $addr  = $row['addr'];

            $date_start = $row['date_start'];
            $date_end = $row['date_end'];

            $numDays = $row['numDays'];

            $id = $row['id'];

        } 

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
      
      div.cancel{
        text-align: center;
        
      }

      .btn-cancel{
        background-color: rgb(176, 42, 42);
          color: white;
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

        <form action="" method="post">


          <div class="container-fluid vh-100" style="margin-top:100px">
      <div class="" style="margin-top: 50px">
          <div class="rounded d-flex justify-content-center">
              <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                  <div class="text-center">
                      <h3><b>Update Form</b></h3>
                  </div>

                  <fieldset>
                  <form class="signup-form" action="stradaForm_customerDetails" method="post">
                      <div class="p-4">
                          <div class="row">

                            <div class="input-group col-md-4 col-sm-12 mb-3"> 
                                <span class="input-group-text"><i class="bi bi-truck text-white"></i></span>
                                
                                <input type="text" id="myInput" name="car_model" class="form-control" value="Toyota Commuter Van"required readonly>
                            </div>

                            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                          
                            <div class="input-group col-md-4 col-sm-12 mb-3">
                              <span class="input-group-text"><i class="bi bi-file-person-fill text-white"></i></span>
                              <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $first_name; ?>" required>
                          </div>
                          
                          <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-file-person-fill text-white"></i></span>
                            <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $last_name; ?>" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-plus-fill text-white"></i></span>
                            <input type="number" id="phone" name="phone" class="form-control" value="<?php echo $phone; ?>" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-fill text-white"></i></span>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-house-fill text-white"></i></span>
                            <input type="text" id="addr" name="addr" class="form-control" value="<?php echo $addr; ?>" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill text-white"></i></span>
                            <input type="date" id="date_start" name="date_start" class="form-control" value="<?php echo $date_start; ?>" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill text-white"></i></span>
                            <input type="date" id="date_end" name="date_end" class="form-control" value="<?php echo $date_end; ?>" required>
                         </div>

                         <div class="input-group col-md-4 col-sm-12 mb-3">
                            <span class="input-group-text"><i class="bi bi-sort-numeric-up text-white"></i></span>
                            <input type="number" id="numDays" name="numDays" class="form-control" value="<?php echo $numDays; ?>" required>
                         </div>

                          <div class="button pt-1 mb-4"> 
                              <input type ="submit" class ="btn btn-dark btn-lg mt-2 mv-3" value="Update Details" name="update">
                              
                            </div>  
                            <div class="cancel pt-1 mb-4">
                            <a href="stradaForm_view.php" class="btn-cancel  btn-lg mt-2 mv-3 ">Cancel</a>
                            </div>
                        </div>
                        </div>
                  </form>

              </div>
          </div>
      </div>
  </div>

          </fieldset>

        </form> 


    <?php

    } else{ 
        
        

    } 


}

?> 

</body>

</html> 