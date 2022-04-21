<?php 

include "db.php";

$query=mysqli_query($con,"SELECT id, car_model, first_name, last_name, phone, email, addr, date_start, date_end, numDays from commuter_form");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVC Records</title>
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
           text-align: center;
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
<body>

    <div class="container">

        <h1 style="align: center;">Toyota Commuter Customers Records</h1>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Car Name</th>
        <th>First Name</th>

        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Date Start</th>
        <th>Date End</th>
        <th>Num Days</th>
        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($query->num_rows > 0) {

                while($row=mysqli_fetch_array($query)) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['car_model']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>

                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['addr']; ?></td>
                    <td><?php echo $row['date_start']; ?></td>
                    <td><?php echo $row['date_end']; ?></td>
                    <td><?php echo $row['numDays']; ?></td>
                    

                    <td><a class="btn btn-info" href="commuterForm_update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="commuterForm_delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>