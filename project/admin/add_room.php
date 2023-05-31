<!DOCTYPE html>
<html>
<head>
    <title>Add Room</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Room</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="room_name">Room Name:</label>
                <input type="text" name="room_name" id="room_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="room_image">Room Image:</label>
                <input type="file" name="room_image" id="room_image" class="form-control-file" >
            </div>

            <div class="form-group">
                <label for="room_features">Features:</label>
                <input type="text" name="room_features" id="room_features" class="form-control" required>
                <small class="form-text text-muted">Please enter the room features separated by commas (e.g., 2 Rooms, 1 Bathroom, 1 Balcony).</small>
            </div>

            <div class="form-group">
                <label for="room_facilities">Facilities:</label>
                <input type="text" name="room_facilities" id="room_facilities" class="form-control" required>
                <small class="form-text text-muted">Please enter the room facilities separated by commas (e.g., Wi-Fi, Air Conditioner, Television).</small>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="guests_adults">Number of Adults:</label>
                    <input type="number" name="guests_adults" id="guests_adults" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="guests_children">Number of Children:</label>
                    <input type="number" name="guests_children" id="guests_children" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="room_price">Room Price:</label>
                <input type="number" name="room_price" id="room_price" class="form-control" required>
            </div>

            <input type="submit" name="addroom" value="Add Room" class="btn btn-primary">
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['addroom'])){
    $con=mysqli_connect('localhost','root','','hbwebsite');
    if(!$con){
        die("Error");
    }

    $room_name = $_POST['room_name'];
    $room_image = $_FILES['room_image']['name'];
    $room_features = $_POST['room_features'];
    $room_facilities = $_POST['room_facilities'];
    $guests_adults = $_POST['guests_adults'];
    $guests_children = $_POST['guests_children'];
    $room_price = $_POST['room_price'];

    
            $qry = "INSERT INTO rooms (room_name, room_image, room_features, room_facilities, guests_adults, guests_children, room_price)
                    VALUES ('$room_name', '$room_image', '$room_features', '$room_facilities', '$guests_adults', '$guests_children', '$room_price')";

            if(mysqli_query($con, $qry)){
                echo "Room Added Successfully";
                header('location:displayroom.php');
            } else{
                echo "Error adding room: " . mysqli_error($con);
            }
        } 

?>
