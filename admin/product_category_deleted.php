<?php

include "config.php";

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM product_category WHERE id='{$user_id}'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        $_SESSION['message'] = "Record deleted successfully.!";
        header('location:product_category_index.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}

?>