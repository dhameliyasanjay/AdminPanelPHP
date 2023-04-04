<?php

include "config.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id='{$id}'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        $_SESSION['message'] = "Record deleted successfully.!";
        header('location:dashboard.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}

?>