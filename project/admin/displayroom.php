<!DOCTYPE html>
<html>
<head>
    <title>Display Rooms</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
            white-space: nowrap;
        }

        tbody tr:hover {
            background-color: #f8f9fa;
        }

        .btn-sm {
            padding: 0.3rem 0.6rem;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rooms List</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Features</th>
                        <th>Facilities</th>
                        <th>Guests</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'hbwebsite');
                    if (!$con) {
                        die("Error");
                    }
                    $qry = "SELECT * FROM rooms";
                    $result = mysqli_query($con, $qry);
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $data['room_name']; ?></td>
                            <td><?php echo $data['room_features']; ?></td>
                            <td><?php echo $data['room_facilities']; ?></td>
                            <td><?php echo $data['guests_adults']; ?> Adults, <?php echo $data['guests_children']; ?> Children</td>
                            <td><?php echo $data['room_price']; ?></td>
                            <td>
                            <a href="deleteroom.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            <a href="editroom.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm">Edit</a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
