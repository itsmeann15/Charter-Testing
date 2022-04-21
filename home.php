<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
            background: rgb(255, 254, 254);
        }
        .navbar{
            background-color: rgb(58, 44, 46);
            color: white;
        }

        .navbar-brand{
           font-family: 'Abril-fatface';
           font-size: 40px;
         
        }
        .carousel-inner{
            align-items: center;
            width: fit-content;
            height: fit-content;
        }
        
        .container:hover {
            border: 1px solid #777;
        }

        h1{
          color: rgb(165, 23, 23);
          font-family: 'Amiri';
          text-align: center;
          font-size: 40px;
        }

        .text-break{
            text-align: justify;
            text-indent: 10%;
            
        }

        h2{
          text-align: center;
          font-family: 'Amiri';
          font-size: 35px;
          color: rgb(14, 102, 58);
          text-decoration: underline;
        }

        .admin-panel{
          margin-left: 150%;
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
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reservation.php">Bookings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <div class="admin-panel" > 
                <a class="nav-link" href="sign-up.php">Admin</a>
                </div>
                
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class ="container-fluid mt-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="allcars.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="sale.jpg" class="d-block w-100" alt="...">
              </div>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div>

          
          <div class="row mx-2">
            <div class="col-lg-8 col-sm-12 mt-5">
              <h1>NOTICE TO THE PUBLIC!</h1>
              
              <p class="text-break">During the COVID-19 pandemic, unemployment reached historic heights with more than 40 million unemployment benefit claims filed even exceeding the unemployment levels. We at Leo Rent a Car would like to assist our dear drivers by temporarily closing our self-drive so that they can continue working for us, and we apologize for any inconvenience this has caused. We hope that you greatly understand the situation, stay safe and God bless.</p>
            
              <h2>No self-drive until further notice.</h2>
            
            </div>

            <div class="col-lg-4 col-sm-12 mt-5">
              <h1 style="color: rgb(202, 131, 39);">Frequently Ask Questions (FAQs) </h1>
            <div class="faqs">
              <p style="color: rgb(15, 102, 41);"> <b> 1. Where is your location? </b></p>
              <p class="text-break">We’re located at Zamboanga International Airport- Exit Road.</p>
            </div>

            <div class="faqs">
              <p style="color: rgb(15, 102, 41);"> <b> 2. Do you offer Self drive(rent only the unit)? </b></p>
              <p class="text-break">NO. We only offer our units with our own driver.</p>
            </div>

            <div class="faqs">
              <p style="color: rgb(15, 102, 41);"> <b> 3. Do you travel outside of Zamboanga City? </b></p>
              <p class="text-break">Yes, but we strictly follow all the medical and travel protocol/ requirements.</p>
            </div>

            <div class="faqs">
              <p style="color: rgb(15, 102, 41);"> <b> 4. What is your rates? </b></p>
              <p class="text-break">We have fixed rate of P3,500 within city proper and it includes a driver and fuel 8 hrs.</p>
            </div>
            </div>

          </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>