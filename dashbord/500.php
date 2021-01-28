<?php
if ( !isset( $_SESSION ) ) {
session_start ();
}
include "includes/verification.php";
?>
<!DOCTYPE html>
<html lang="en">
<!--   Head   -->
<?php
include "includes/head.php";
?>
<!--   End Head   -->
<body>
<!-- Page-container -->
<div class="wrapper">
    <!-- Navbar Header -->
    <div class="main-header">
        <!-- Logo Header -->
        <?php
        include "includes/logo_head.php";
        ?>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <?php
        include "includes/navba_head.php";
        ?>
        <!-- End Navbar -->
    </div>
    <!-- End Navbar Header -->
    <!-- Sidebar -->
    <?php
    include "includes/side_bar.php";
    ?>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <h1>ERROR</h1>
                </div>
            </div>
            <div class="page-inner mt--5">
            </div>
        </div>
        <!-- Footer -->
        <?php
        include "includes/footer.php"
        ?>
        <!-- End Footer -->
    </div>
</div>
<!-- End Page-container -->
<!--   Core JS Files   -->
<?php
include "includes/script.php";
?>
<!--   End Core JS Files   -->
</body>
</html>