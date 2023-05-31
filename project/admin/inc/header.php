      
        <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0">HB website</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-light me-2">Admin Panel</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align align-items-stretch mt-2" id="adminDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">-Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="roomsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-Rooms</a>
                        <ul class="dropdown-menu" aria-labelledby="roomsDropdown">
                            <li><a class="dropdown-item" href="add_room.php">Add Room</a></li>
                            <!-- <li><a class="dropdown-item" href="update_room.php">Update Room</a></li> -->
                            <li><a class="dropdown-item" href="displayroom.php">Display Room</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_info.php">-Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">-Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


