<!Doctype html>
<html>
    <head>
        <title> Hotel Booking App </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="device-width", initial-scale="1.0">
        <meta http-equiv="X-UA-compatible" content="IE-edge"> 
        <!--Bootstrap Link-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <!--font awesome cdn -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
          <!--CSS -->
       <link rel="stylesheet" href="hotel.css">  
          <!--Google font-->      
       <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

 
    </head>  

    <body>

        <!--navbar-->

         <nav class="navbar navbar-expand-lg" id="nav">
             <div class="container">
                <a class="navbar-brand" href="hotel.html" id="logo"><span>B</span>OOKING</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                  <span><i class="fa-solid">></i></span>
                </button>
               <div class="collapse navbar-collapse" id="mynavbar">
                  <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#book">Book</a>
                    </li>
                 </ul>
                 <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="enter Book">
                   <a href="#book" class="btn btn-primary" type="button" id="Search">GO</a>
                  </form>
                </div>
            </div>
         </nav>

         <!--Section home-->
        <div class="home" id="home">
               <div class="content">
                   <h5>Welcome</h5>
                       <h1>Visit <span class="change"></span></h1>
                       <p>162 Rosmead Av, 0670596814</p>
                       <a href="#book">Book place</a>
                </div>
        </div>

         <!--Section book-->
        <div class="book" id="book">
            <div class="container">
                   <div class="main">
                      <h1><span>B</span>ook</h1>
                    </div>
                   <div class="row">
                       <div class="col-md-6 py-3 py-md-0">
                            <div class="card">
                               <img src="room.jpg" alt="room" class="room">
                            </div>
                       </div>

                       <div class="col-md-6 py-3 py-md-0">

                          <?php
                              // define variables
                                $nameErr = $emailErr = $numberOfDayErr = "";
                                $name = $email =  $numberOfDay = "";

                              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (empty($_POST["name"])) {
                                        $nameErr = " Name is required";
                                    } else {
                                       $name = detail_input($_POST["name"]);
                                       // name must contain letters and whitespace
                                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                                          $nameErr = "Only letters and white space allowed";
                                    }
                                 }
  
                                 if (empty($_POST["email"])) {
                                     $emailErr = "Email is required";
                                    } else {
                                      $email = detail_input($_POST["email"]);
                                      // e-mail address must be well-formed
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                      $emailErr = "Invalid email format";
                                    }
                                 }

                                  if (empty($_POST["number"])) {
                                        $numberOfDayErr = " Number of Days is required";
                                        } else {
                                           $numberOfDay = detail_input($_POST["number"]);
                                              // number of days must contain letters and whitespace
                                         if (!preg_match("/^[a-zA-Z-' ]*$/",$numberOfDay)) {
                                           $numberOfDayErr = "Only letters and white space allowed";
                                         }
                                   }

                               }

                               function detail_input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                 }
                            ?>

                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                                <input type="text" class="form-control" name="name" placeholder="enter your name" value="<?php echo $name;?>">
                                <span class="error">* <?php echo $nameErr;?></span>
                                <br><br>
                                <input type="text" class="form-control" name="email" placeholder="Your email address" value="<?php echo $email;?>">
                                <span class="error">* <?php echo $emailErr;?></span>
                                 <br><br>
                                <input type="text" class="form-control" name="number" placeholder="Number of days. example: one" value="<?php echo $numberOfDay;?>">
                                <span class="error"><?php echo $numberOfDayErr;?></span>
                                 <br><br>
                                 Arrivals: <input type="date" class="form-control" required>
                                <br>
                                 Leaving: <input type="date" class="form-control" required>
                                <br>
                                <input type="submit" name="submit" class="submit"  value="Book now">  
                              </form>

                        </div>  
                  </div>
            </div>
         </div>



        <!--Section Services-->

        <div class="services" id="services">
                 <div class="container">
                        <div class="main">
                            <h1><span>S</span>ervices</h1>
                        </div>
                        <div class="row" style="margin-top:30px;">
                            <div class="col-md-4 py-3 py-md-0">
                                   <div class="card">
                                          <img src="marriott_hotel.png" alt="marriott hotel">
                                          <div class="body">
                                              <h3>Marriott hotel</h3>
                                              <p>VinySKTECH, 0670596814</p>
                                              <div class="star">
                                                  <li class="fa-solid fa-star checked"></li>
                                                  <li class="fa-solid fa-star checked"></li>
                                                  <li class="fa-solid fa-star checked"></li>
                                                  <li class="fa-solid fa-star checked"></li>
                                                  <li class="fa-solid fa-star checked"></li>
                                              </div>
                                              <h6>Price: <strong> R30000</strong></h6>
                                              <a href="#book" class="ServiceLink">Book now</a>
                                           </div>
                                     </div>
                            </div>

                               <div class="col-md-4 py-3 py-md-0">
                                      <div class="card">
                                         <img src="rosewood_hotel_resorts_logo.jpg" alt="Rosewood">
                                          <div class="body">
                                              <h3>Rosewood hotel</h3>
                                              <p>VinySKTECH, 0670596814</p>
                                                  <div class="star">
                                                       <li class="fa-solid fa-star checked"></li>
                                                       <li class="fa-solid fa-star checked"></li>
                                                       <li class="fa-solid fa-star checked"></li>
                                                       <li class="fa-solid fa-star checked"></li>
                                                       <li class="fa-solid fa-star checked"></li>
                                                   </div>
                                                  <h6>Price: <strong> R25000</strong></h6>
                                                   <a href="#book" class="ServiceLink">Book now</a>
                                            </div>
                                       </div>
                                 </div>

                                  <div class="col-md-4 py-3 py-md-0">
                                       <div class="card">
                                           <img src="logo-vineardhotel.jpg" alt="vineyard hotel">
                                           <div class="body">
                                                <h3>Vineyard hotel</h3>
                                                <p>VinySKTECH, 0670596814</p>
                                                <div class="star">
                                                     <li class="fa-solid fa-star checked"></li>
                                                     <li class="fa-solid fa-star checked"></li>
                                                     <li class="fa-solid fa-star checked"></li>
                                                      <li class="fa-solid fa-star checked"></li>
                                                      <li class="fa-solid fa-star checked"></li>
          
                                                 </div>
                                                 <h6>Price: <strong> R40000</strong></h6>
                                                  <a href="#book" class="ServiceLink">Book now</a>
                                            </div>
                                        </div>
                                    </div>

                          </div>
                      </div>

                </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
