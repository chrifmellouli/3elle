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
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a aria-controls="search-nav" aria-expanded="false" class="nav-link" data-toggle="collapse"
                   href="#search-nav" role="button">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                   data-toggle="dropdown"
                   href="#" id="notifDropdown" role="button">
                    <i class="fa fa-bell"></i>
                    <span class="notification">4</span>
                </a>
                <ul aria-labelledby="notifDropdown" class="dropdown-menu notif-box animated fadeIn">
                    <li>
                        <div class="dropdown-title">You have 4 new notification</div>
                    </li>
                    <li>
                        <div class="notif-center">
                            <a href="#">
                                <div class="notif-icon notif-primary"><i class="fa fa-user-plus"></i></div>
                                <div class="notif-content">
												<span class="block">
													New user registered
												</span>
                                    <span class="time">5 minutes ago</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="notif-icon notif-success"><i class="fa fa-comment"></i></div>
                                <div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
                                    <span class="time">12 minutes ago</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="notif-img">
                                    <img alt="Img Profile" src="../../assets/img/profile2.jpg">
                                </div>
                                <div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
                                    <span class="time">12 minutes ago</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="notif-icon notif-danger"><i class="fa fa-heart"></i></div>
                                <div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
                                    <span class="time">17 minutes ago</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="see-all" href="javascript:void(0);">See all notifications<i
                                    class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a aria-expanded="false" class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-layer-group"></i>
                </a>
                <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                    <div class="quick-actions-header">
                        <span class="title mb-1">Actions Rapides</span>
                        <span class="subtitle op-8">Raccourcis</span>
                    </div>
                    <div class="quick-actions-scroll scrollbar-outer">
                        <div class="quick-actions-items">
                            <div class="row m-0">
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-file-1"></i>
                                        <span class="text">Consulter Produits</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-database"></i>
                                        <span class="text">Consulter Promotions</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-pen"></i>
                                        <span class="text">Consulter Clients</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-interface-1"></i>
                                        <span class="text">Consulter Commandes</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-list"></i>
                                        <span class="text">Consulter Fournisseurs</span>
                                    </div>
                                </a>
                                <a class="col-6 col-md-4 p-0" href="#">
                                    <div class="quick-actions-item">
                                        <i class="flaticon-file"></i>
                                        <span class="text">Consulter Historiques</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a aria-expanded="false" class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    <div class="avatar-sm">
                        <img alt="..." class="avatar-img rounded-circle" src="../../assets/img/profile.jpg">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg"><img alt="image profile"
                                                            class="avatar-img rounded"
                                                            src="../../assets/img/profile.jpg">
                                </div>
                                <div class="u-text">
                                    <h4><?php echo $_SESSION[ 'user_name' ] ?></h4>
                                    <p class="text-muted"><?php echo $_SESSION[ 'position' ] ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                               href="../../controllers/user.controller.php?action=logout&id=<?php echo $_SESSION[ 'id' ] ?>">Logout</a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
