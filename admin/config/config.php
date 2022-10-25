<?php 
    $conn = mysqli_connect('localhost','root', '', 'shopthoitrang') or die ('Không thể kết nối tới database'. mysqli_connect_error());
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)!=0){
        echo 'connect thành công';
    }

?>