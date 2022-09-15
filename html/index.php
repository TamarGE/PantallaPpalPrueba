<?php
    require_once('config/db_connect.php');
    $sql = "SELECT * FROM blog ORDER BY id DESC;";
    $excute = mysqli_query($con,$sql);
    $Postdata = mysqli_num_rows($excute);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container"> 
    <?php
    if($Postdata > 0){
        while($row = mysqli_fetch_array($excute)){  
            $timestamp = $row['Date_published'];
            $date = date('d M Y', strtotime($timestamp));
            $time = date('h: i A', strtotime($timestamp));
            ?>
        <h1>
            <a href="details.php?id=<?php echo $row['id'];?>">
            <?php echo $row['Article_title'];?></a>
        </h1>
        <span>
            Publihed on: <?php echo $date; ?> At: <?php echo $time; ?>
        </span>
        <?php
        }
    }
    ?>
</div>
</body>
</html>