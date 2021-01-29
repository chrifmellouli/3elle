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
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-search pr-1" type="submit">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input class="form-control" placeholder="Search ..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <!-- End Navbar -->
    </div>
    <!-- End Navbar Header -->
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img alt="..." class="avatar-img rounded-circle" src="../../assets/img/profile.jpg">
                    </div>
                    <div class="info">
                        <a aria-expanded="true" data-toggle="collapse" href="#collapseExample">
								<span>
									<?php echo $_SESSION[ 'user_name' ]; ?>
									<span class="user-level"><?php echo $_SESSION[ 'position' ]; ?></span>
								</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                </ul>
            </div>
        </div>
    </div>
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