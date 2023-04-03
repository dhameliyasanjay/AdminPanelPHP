<?php
include 'config.php';

if (!isset($_SESSION['id'])) {
     header("Location: index.php");
 }


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $is_active = $_POST['is_active'];

    $sql = "INSERT INTO product_category(name,is_active) 
		VALUES ('{$name}','{$is_active}')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Successfully Registration!";
         header('location:product_category_index.php');
    } else {
        $_SESSION['message'] = "Error!";
    }

    mysqli_close($conn);
}


?>
<!DOCTYPE html>
<html lang="en">
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
                            <span>Product Category</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <div class="tab-pane" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Product Category
                            </div>

                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="product_category" method="post" class="form-horizontal">
                                <div class="form-body">
                                    <h3 class="form-section">Product Category</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Product Category Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="name" placeholder="Product Category Name">
                                                    <span class="help-block"> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Product Category Name :</label>
                                                <div class="col-md-9 margin-top-10">
                                                    <label class="margin-right-10">
                                                        <input type="radio" name="is_active" value="Y"> Active
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="is_active" value="N"> Deactivate
                                                    </label>
                                                    <span class="help-block"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" name="submit" value="submit" class="btn green">Submit</button>
                                                    <button type="button" class="btn default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
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

