<!DOCTYPE html>
<html>
<head>
    <title>Edit Room</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    if (isset($_POST['update_room'])) {
        $room_id = $_POST['room_id'];
        $room_name = $_POST['room_name'];
        $room_features = $_POST['room_features'];
        $room_facilities = $_POST['room_facilities'];
        $guests_adults = $_POST['guests_adults'];
        $guests_children = $_POST['guests_children'];
        $room_price = $_POST['room_price'];

        $con = mysqli_connect('localhost', 'root', '', 'hbwebsite');
        if (!$con) {
            die("Error");
        }

        $qry = "UPDATE rooms SET room_name='$room_name', room_features='$room_features', room_facilities='$room_facilities', guests_adults='$guests_adults', guests_children='$guests_children', room_price='$room_price' WHERE id = $room_id";

        if (mysqli_query($con, $qry)) {
            echo "Room Updated Successfully";
           
             header('location: displayroom.php');
        } else {
            echo "Error updating room: " . mysqli_error($con);
        }
    } else {
        $room_id = $_GET['id'];
        $con = mysqli_connect('localhost', 'root', '', 'hbwebsite');
        if (!$con) {
            die("Error");
        }
        $qry = "SELECT * FROM rooms WHERE id = $room_id";
        $result = mysqli_query($con, $qry);
        $data = mysqli_fetch_assoc($result);
        ?>

        <div class="container">
            <h1>Edit Room</h1>

            <form action="" method="POST">
                <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">

                <div class="form-group">
                    <label for="room_name">Room Name:</label>
                    <input type="text" name="room_name" id="room_name" class="form-control" value="<?php echo $data['room_name']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="room_features">Features:</label>
                    <input type="text" name="room_features" id="room_features" class="form-control" value="<?php echo $data['room_features']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="room_facilities">Facilities:</label>
                    <input type="text" name="room_facilities" id="room_facilities" class="form-control" value="<?php echo $data['room_facilities']; ?>" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="guests_adults">Number of Adults:</label>
                        <input type="number" name="guests_adults" id="guests_adults" class="form-control" value="<?php echo $data['guests_adults']; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="guests_children">Number of Children:</label>
                        <input type="number" name="guests_children" id="guests_children" class="form-control" value="<?php echo $data['guests_children']; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="room_price">Room Price:</label>
                    <input type="number" name="room_price" id="room_price" class="form-control" value="<?php echo $data['room_price']; ?>" required>
                </div>

                <div class="form-group">
                    <button type="submit" name="update_room" class="btn btn-primary">Update Room</button>
                </div>
            </form>
        </div>

    <?php } ?>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
