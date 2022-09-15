<?php

if(isset($_POST['submit_data'])){
    require_once('config/db_connect.php');
    $title = mysqli_real_escape_string($con, $_POST['Article_title']);
    $content = mysqli_real_escape_string($con, $_POST['Article_content']);

    if(!empty($title) || !empty($content)){

        $sql = "INSERT INTO blog(Article_title,Article_content) VALUES('$title','$content');";
        $excute = mysqli_query($con,$sql);

        if(!$excute){
            echo "Failed to submit the data";
            exit();
        }else{
            header('refresh:5; url=dashboard.php');
            echo "Article Published succesfully";
            exit();
        }


    }else{
        header('Location: dashboard.php?emptyField');
        exit();
    }

}else{
    header('Location: dashboard.php?invalidRequest');
    exit();
}



?>