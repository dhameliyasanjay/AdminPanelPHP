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
                            <span>Product Sub Category</span>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"> Product Sub Category
                    <small>Product Sub Category Samples</small>
                </h1>
                <!-- END PAGE TITLE-->
                <div class="tab-pane" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Product Sub Category
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
                                                            <a href="product_sub_category.php " id="sample_editable_1_new"
                                                               class="btn sbold green"> Add Product Sub Category
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
                                                    <th> Sub Category Name</th>
                                                    <th> Active</th>
                                                    <th> Deleted</th>
                                                    <th> Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                $sql ="SELECT ps.id,pc.name,ps.sub_category_name, ps.is_active, ps.is_deleted
                                            FROM product_sub_category ps INNER JOIN product_category pc
                                            ON ps.category_id = pc.id";

                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_array($result)) {

                                                        ?>

                                                        <tr>
                                                            <td> <?php echo $row['id'] ?></td>
                                                            <td> <?php echo $row['name'] ?> </td>
                                                            <td> <?php echo $row['sub_category_name'] ?> </td>
                                                            <td>
                                                                <?php if (($row['is_active']) == 'N') {
                                                                    echo '<button class="button-11" role="button">Dective</button>';
                                                                } else {
                                                                    echo '<button class="button-10" role="button">Active</button>';
                                                                } ?>
                                                            </td>

                                                            <td>
                                                                <?php if (($row['is_deleted']) == 'Y') {
                                                                    echo '<button class="button-10" role="button"> Active</button>';
                                                                } else {
                                                                    echo '<button class="button-11" role="button">Dective</button>';
                                                                } ?>
                                                            </td>
                                                            <td>

                                                                <?php //echo $row['id'];
                                                                ?><!--" class="margin-right-10 " title="View Record" ><span class="fa fa-eye"></span></a>-->
                                                                <a href="product_sub_category_update.php?id=<?php echo $row['id']; ?>"
                                                                   class="margin-right-10" title="Update Record"><span
                                                                            class="fa fa-pencil"></span></a>
                                                                <a href="product_sub_category_deleted.php?id=<?php echo $row['id']; ?>"
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


