<?php
    $conn=mysqli_connect("localhost","root","","blog");
    
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn,$sql);
    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $sql = "INSERT INTO data(title,content) VALUES('$title', '$content')";
        mysqli_query($conn,$sql); 
        header("Location: index.php?info=added");
        exit(); 
    }
    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];
        $sql="SELECT *  FROM data WHERE id=$id";
        $query=mysqli_query($conn,$sql);
    }

?>