<?php
require('inc/essentials.php');
  
session_start();
  
  require('inc/header.php');

//   session_regenerate_id(true);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL -Settings</title>
    <?php
        require('inc/links.php');
  
    ?>

</head>

<body class="bg-light">



<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">

        </div>
    </div>
</div>
<?php require('inc/script.php');?>   
</body>
</html>