<?php
if ( !isset( $_SESSION ) ) {
    session_start ();
}
include "../dashbord/includes/verification/verification.php";
$show_submenue_item_access = true;
$show_submenue_authorization=true;
?>
<!DOCTYPE html>
<html lang="en">
<!--   Head   -->
<?php
include "../dashbord/includes/head/head.php";
?>
<!--   End Head   -->
<body>
<!-- Page-container -->
<div class="wrapper">
    <!-- Navbar Header -->
    <div class="main-header">
        <!-- Logo Header -->
        <?php
        include "../dashbord/includes/logo_head.php";
        ?>
        <!-- End Logo Header -->
        <!-- Navbar Header -->
        <?php
        include "../dashbord/includes/navba_head.php";
        ?>
        <!-- End Navbar Header -->
    </div>
    <!-- End Navbar Header -->
    <!-- Sidebar -->
    <?php
    include "../dashbord/includes/side_bar.php";
    ?>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <!-- Page-header -->
                <?php
                include "../dashbord/access/pages_headers/privileges.php";
                ?>
                <!-- End Page-header -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="card">
                                <!-- Card-header -->
                                <!-- End Card-header -->
                                <div class="card-body">
                                    <!-- Responsive Table -->
                                    <?php
                                    include "../dashbord/access/tables/privileges.php";
                                    ?>
                                    <!-- End Responsive Table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php
            include "../dashbord/includes/footer.php"
            ?>
            <!-- End Footer -->
        </div>
    </div>
</div>
<!-- End Page-container -->
<!--   Core JS Files   -->
<?php
include "../dashbord/includes/script/script.php";
?>
<!--   End Core JS Files   -->
</body>
</html>