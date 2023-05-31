<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .fc{
        height: 100%;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hamro Hotel -Contact</title>

   
<?php require('include/links.php')?>    
</head>
<body class="bgc">
<?php require('include/header.php'); ?>
<?php
 $con=mysqli_connect('localhost','root','','hbwebsite');
$qry="SELECT * FROM rooms";
$result=mysqli_query($con,$qry);



?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
   

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 px-0 fc">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filter</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse flex-column align align-items-stretch mt-2" id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                        
                                        <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                                        
                                        <label  class="form-label" style="font-weight:500">Check-In</label>
                                        <input type="date" class="form-control shadow-none mb-3">
                                        
                                        <label  class="form-label" style="font-weight:500">Check-Out</label>
                                        <input type="date" class="form-control shadow-none">
                                </div>

                                <div class="border bg-light p-3 rounded mb-3">
                                        
                                        <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>

                                        <div class="mb-2">
                                            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                            <label  class="form-check-label" for="f1">Facility one</label>
                                        </div>

                                        <div class="mb-2">
                                            <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                            <label  class="form-check-label" for="f2">Facility two</label>
                                        </div> 

                                        <div class="mb-2">
                                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                            <label  class="form-check-label" for="f3">Facility two</label>
                                        </div>
                                       
                                        
                                       
                                </div>


                                <div class="border bg-light p-3 rounded mb-3">
                                        
                                        <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <label class="form-check-label">Adults</label>
                                                <input type="number" class="form-control shadow-none">
                                            </div>
                                            <div>
                                                <label class="form-check-label">Children</label>
                                                <input type="number" class="form-control shadow-none">
                                            </div>

                                        </div>
                                </div>
                               
                            </div>
                    </div>
                </nav>
        </div>
          
        <div class="col-lg-9 col-md-12">
                    <div class="card mb-4 border-0 shadow">
                    <?php
                while($data=mysqli_fetch_assoc($result)){

                        ?>   
                <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 px-lg-0 me-3 px-md-2 px-0 mb-2">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-4 mb-lg-0 mb-md-0 mb-3">
                                <h5 class="mb-3"><?php echo $data['room_name']?></h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge bg-light text-dark text-wrap">
                                        2 Rooms
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge bg-light text-dark text-wrap">
                                        1 Balcony
                                    </span>
                                </div>

                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Facilities</h6>
                                        <span class="badge bg-info text-dark text-wrap">
                                            Wi-Fi
                                        </span>
                                        <span class="badge bg-info text-dark text-wrap">
                                            Air Conditioner
                                        </span>
                                        <span class="badge bg-info text-dark text-wrap">
                                            Television
                                        </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                        <span class="badge bg-info text-dark text-wrap">
                                        <?php echo $data['guests_adults']?> Adults
                                        </span>
                                        <span class="badge bg-info text-dark text-wrap">
                                        <?php echo $data['guests_children']?> Children
                                        </span>
                                </div>
                               

                            </div>
                                <div class="col-md-2 mt-lg-0 mt-4 text-center">
                                    <h6 class="mb-4">Rs.  <?php echo $data['room_price']?>per night</h6>
                                    <a href="#" class="btn btn-success btn-sm shadow-none w-100 mb-2">Book Now</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
                                </div>
                           
                </div>
                <?php
            }
            ?>
           
            </div>

          


           


            
        </div>


        
    </div>
</div>
<?php require('include/footer.php');?> 
</body>
</html>



