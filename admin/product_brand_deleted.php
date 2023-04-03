<?php

include "config.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM product_brand WHERE id='{$id}'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        $_SESSION['message'] = "Record deleted successfully.!";
        header('location:product_brand_index.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}

?>