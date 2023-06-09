<?php
include 'config.php';
include 'common.php';

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<link href="assets/customcss/style.css" rel="stylesheet" type="text/css"/>
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
                            <a href="#">Tables</a>
                            <i class="fa fa-circle"></i>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> Product Category
                    <small>Product Category Samples</small>
                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="tab-pane" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Product Category
                            </div>
                        </div>

                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light bordered">
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="btn-group pull-right">
                                                            <a href="product_category.php " id="sample_editable_1_new"
                                                               class="btn sbold green"> Add Product Category
                                                                <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
<!--                                                    <div class="col-md-6">-->
<!--                                                        <div class="btn-group pull-right">-->
<!--                                                            <button class="btn green  btn-outline dropdown-toggle"-->
<!--                                                                    data-toggle="dropdown">Tools-->
<!--                                                                <i class="fa fa-angle-down"></i>-->
<!--                                                            </button>-->
<!--                                                            <ul class="dropdown-menu pull-right">-->
<!--                                                                <li>-->
<!--                                                                    <a href="javascript:;">-->
<!--                                                                        <i class="fa fa-print"></i> Print </a>-->
<!--                                                                </li>-->
<!--                                                                <li>-->
<!--                                                                    <a href="javascript:;">-->
<!--                                                                        <i class="fa fa-file-pdf-o"></i> Save as PDF-->
<!--                                                                    </a>-->
<!--                                                                </li>-->
<!--                                                                <li>-->
<!--                                                                    <a href="javascript:;">-->
<!--                                                                        <i class="fa fa-file-excel-o"></i> Export to-->
<!--                                                                        Excel </a>-->
<!--                                                                </li>-->
<!--                                                            </ul>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                            <table class="table table-striped table-bordered table-hover table-checkable order-column"
                                                   id="sample_1">
                                                <thead>
                                                <tr>
                                                    <th> Id</th>
                                                    <th> Category Name</th>
                                                    <th> Status</th>
                                                    <th> Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sql = "SELECT * FROM product_category";
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <tr class="odd gradeX">
                                                            <td> <?php echo $row['id'] ?> </td>
                                                            <td>
                                                                 <?php echo $row['name'] ?>
                                                            </td>
                                                            <td>
                                                                <?php if (($row['is_active']) == 'N') {
                                                                    echo '<button class="button-11" role="button">Dective</button>';

                                                                } else {
                                                                    echo '<button class="button-10" role="button">Active</button>';
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php //echo $row['id'];
                                                                ?><!--" class="margin-right-10 " title="View Record" ><span class="fa fa-eye"></span></a>-->
                                                                <a href="product_category_update.php?id=<?php echo $row['id']; ?>"
                                                                   class="margin-right-10" title="Update Record"><span
                                                                            class="fa fa-pencil"></span></a>
                                                                <a href="product_category_deleted.php?id=<?php echo $row['id']; ?>"
                                                                   title="Delete Record" ">
                                                                <span class="fa fa-trash"></span></a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                else{ ?>
                                                    <tr><td colspan="5">No Product Category Found......</td></tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>
                            <!-- END FORM-->
                        </div>
                    </div>
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


