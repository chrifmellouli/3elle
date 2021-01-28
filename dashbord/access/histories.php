<?php
if ( !isset( $_SESSION ) ) {
    session_start ();
}
include "../includes/verification/verification.php";
$show_submenue_item_access = true;
?>
<!DOCTYPE html>
<html lang="en">
<!--   Head   -->
<?php
include "../includes/head/head.php";
?>
<!--   End Head   -->
<body>
<!-- Page-container -->
<div class="wrapper">
    <!-- Navbar Header -->
    <div class="main-header">
        <!-- Logo Header -->
        <?php
        include "../includes/logo_head.php";
        ?>
        <!-- End Logo Header -->
        <!-- Navbar Header -->
        <?php
        include "../includes/navba_head.php";
        ?>
        <!-- End Navbar Header -->
    </div>
    <!-- End Navbar Header -->
    <!-- Sidebar -->
    <?php
    include "../includes/side_bar.php";
    ?>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <!-- Page-header -->
                <?php
                include "pages_headers/histories.php";
                ?>
                <!-- End Page-header -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="card">
                                <!-- Card-header -->
                                <?php
                                include "add_buttons/histories.php";
                                ?>
                                <!-- End Card-header -->
                                <div class="card-body">
                                    <!-- Modal -->
                                    <?php
                                    include "modals/add_histories.php";
                                    ?>
                                    <!-- End Modal -->
                                    <!-- Responsive Table -->
                                    <?php
                                    include "tables/histories.php";
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
            include "../includes/footer.php"
            ?>
            <!-- End Footer -->
        </div>
    </div>
</div>
<!-- End Page-container -->
<!--   Core JS Files   -->
<?php
include "../includes/script/script.php";
?>
<!--   End Core JS Files   -->
</body>
</html>