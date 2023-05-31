<?php
session_start();
if(!isset($_SESSION['admin_name'])){         //if we dont use this we can directly access dashboard even without logging in.
    header('location:index.php');
}



  require('inc/essentials.php');
  require('inc/header.php');
//   adminLogin();
//   session_regenerate_id(true);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL -Dashboard</title>
    <?php
        require('inc/links.php');
  
    ?>

</head>


<body class="bg-light">



<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae blanditiis cum exercitationem mollitia facere! Natus, praesentium hic. Doloremque rem sint excepturi dicta vero dolore sed asperiores animi numquam qui quo dolores, iusto, tenetur natus nulla. Consequuntur doloribus unde ratione assumenda nisi aliquam porro. Repudiandae illum optio accusamus reprehenderit aliquam, possimus eligendi praesentium aspernatur, fuga maxime, ullam autem sed cum illo et quidem nobis molestias reiciendis expedita incidunt fugit? Fuga ratione optio asperiores, perferendis adipisci amet vero non. Modi voluptate itaque recusandae nihil veritatis, aut animi assumenda quo cumque totam dicta ipsam magnam qui doloremque laboriosam? Quod ea, dicta accusamus culpa ipsum dolorem nulla eum tempora ab laudantium recusandae iure voluptatem. Repudiandae aperiam itaque consectetur impedit placeat unde nobis temporibus cumque, necessitatibus iure vero sapiente exercitationem autem doloribus esse iusto accusantium culpa nemo iste, cum commodi. Velit ullam at, nam repellendus nisi, quia aliquid recusandae voluptatibus voluptatum dolor cumque fugiat sit blanditiis atque corrupti eum neque qui, praesentium totam explicabo? Distinctio molestiae, accusantium suscipit harum accusamus modi dolores necessitatibus, eveniet a dignissimos illo blanditiis provident id hic iste esse delectus perferendis. Magni dolore quas facilis nisi doloremque eaque molestiae, adipisci cum accusantium voluptatem dignissimos explicabo esse blanditiis? Consequatur quam eos nam.

        </div>
    </div>
</div>
<?php require('inc/script.php');?>   
</body>
</html>