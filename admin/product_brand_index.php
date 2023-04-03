<?php
include 'config.php';
include 'common.php';

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<link href="../assets/customcss/style.css" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<!-- BEGIN HEAD -->
<?php include 'includes/header.php'; ?>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">

    <?php include 'includes/body_header.php'; ?>

    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php include 'includes/sidebar.php'; ?>
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->

                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="dashboard.php">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Product Brand</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <div class="col-md-12">
                    <!-- BEGIN BORDERED TABLE PORTLET-->
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bubble font-dark"></i>
                                <span class="caption-subject font-dark bold uppercase">Product Brand</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn dark btn-outline btn-circle btn-sm" href="product_brand.php">
                                        Product Brand create
                                    </a>
                                </div>
                            </div>

                            <?php
                            if (isset($_SESSION['status'])) {
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Hey !</strong> <?= $_SESSION['message']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                                <?php
                                unset($_SESSION['message']);
                            }

                            ?>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                    <thead style="background-color: #3f3f3f; color: white; border: 1px solid black">
                                    <tr>
                                        <th> Id</th>
                                        <th> Brand</th>
                                        <th> Brand Active</th>
                                        <th> Brand Deleted</th>
                                        <th> Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $sql = "SELECT * FROM product_brand";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {

                                            ?>

                                            <tr>
                                                <td> <?php echo $row['id'] ?></td>
                                                <td> <?php echo $row['brand'] ?> </td>
                                                <td>
                                                    <?php if (($row['is_active']) == 'Y') {
                                                        echo '<button class="button-33" role="button">Active</button>';
                                                    } else {
                                                        echo '<button class="button-34" role="button">Dective</button>';
                                                    } ?>
                                                </td>

                                                <td>
                                                    <?php if (($row['is_deleted']) == 'N') {
                                                        echo '<button class="button-34" role="button">Dective</button>';
                                                    } else {
                                                        echo '<button class="button-33" role="button"> Active</button>';
                                                    } ?>
                                                </td>
                                                <td>

                                                    <?php //echo $row['id'];
                                                    ?><!--" class="margin-right-10 " title="View Record" ><span class="fa fa-eye"></span></a>-->
                                                    <a href="product_brand_update.php?id=<?php echo $row['id']; ?>"
                                                       class="margin-right-10" title="Update Record"><span
                                                            class="fa fa-pencil"></span></a>
                                                    <a href="product_brand_deleted.php?id=<?php echo $row['id']; ?>"
                                                       title="Delete Record" "><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    //                                            ?>
                                    <!--                                            <div class="text-center margin-top-40">-->
                                    <!--                                                <span class="alert alert-info"> Record Not Found </span>-->
                                    <!--                                            </div>-->
                                    <!--                                            --><?php
                                    //                                            }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE PORTLET-->
                </div>

            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <?php include 'includes/body_footer.php'; ?>
</div>
<?php include 'includes/footer.php'; ?>

<script>
    jQuery(document).ready(function () {
        Login.product_category()
    });
</script>
</body>

</html>


