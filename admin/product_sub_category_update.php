<?php
include 'config.php';

//if (!isset($_SESSION['id'])) {
//    header("Location: index.php");
//}

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $sub_category_name = $_POST['sub_category_name'];
    $is_active = $_POST['is_active'];
    $is_deleted = $_POST['is_deleted'];

    $sql = "UPDATE product_sub_category SET id = '{$id}', category_id ='{$category_id}', sub_category_name ='{$sub_category_name}', is_deleted ='{$is_deleted}', is_active = '{$is_active}' WHERE id = '{$id}'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Successfully Upadte!";
        header('location:product_sub_category_index.php');
    } else {
        $_SESSION['message'] = "Error!";
    }
    mysqli_close($conn);
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM product_sub_category WHERE id = '{$id}'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

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
                            <span>Product Sub Categoty</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <div class="tab-pane" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Product Sub Categoty
                            </div>

                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="unit" method="post" class="form-horizontal">
                                <div class="form-body">
                                    <h3 class="form-section">Product Sub Categoty</h3>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Categoty Name :</label>
                                                <div class="col-md-9">
                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                    <select class="form-control" name="category_id">
                                                        <option>Select Category</option>
                                                        <?php
                                                        $sqlc= "select * from product_category";
                                                        $resultc = mysqli_query($conn, $sqlc);
                                                        while ($rowc = mysqli_fetch_assoc($resultc)){
                                                            ?>
                                                            <option value="<?php echo $rowc['id'];?>"<?= $rowc['id'] == $row['category_id'] ? 'selected = "selected"' : ''?>><?php echo $rowc['name'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sub Categoty Name :</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="sub_category_name" value="<?php echo $row['sub_category_name'];?>">
                                                    <span class="help-block"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Product Sub Categoty :</label>
                                                <div class="col-md-9 margin-top-10">
                                                    <label class="margin-right-10">
                                                        <input type="radio" name="is_active" value="Y" <?php if ($row['is_active'] == "Y") {
                                                            echo "checked"; }?> > Active
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="is_active" value="N" <?php if ($row['is_active'] == "N") {
                                                            echo "checked"; }?> > Deactivate
                                                    </label>
                                                    <span class="help-block"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sub Categoty Deleted :</label>
                                                <div class="col-md-9 margin-top-10">
                                                    <label class="margin-right-10">
                                                        <input type="radio" name="is_deleted" value="Y" <?php if ($row['is_deleted'] == "Y") { echo "checked"; } ?> > Active
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="is_deleted" value="N" <?php if ($row['is_deleted'] == "N") {
                                                            echo "checked"; } ?> > Deactivate
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
        Login.unit()
    });
</script>
</body>

</html>

