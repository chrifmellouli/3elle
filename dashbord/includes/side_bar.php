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
                <li class="nav-item">
                    <a aria-expanded="false" class="collapsed" data-toggle="collapse" href="#dashboard">
                        <i class="fas fa-home"></i>
                        <p>Tableau de bord</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/dashbord/index.php">
                                    <span class="sub-item">Acceuil</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Statistiques</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                    <h4 class="text-section">Gestion des modules</h4>
                </li>
                <li class="nav-item active submenu">
                    <a data-toggle="collapse" href="#acess">
                        <i class="fas fa-table"></i>
                        <p>Gestion des accèes</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?php if ( isset( $show_submenue_item_access ) ) {
                        echo 'show';
                    } ?>" id="acess">
                        <ul class="nav nav-collapse">
                            <li class="active">
                                <a href="../../controllers/user.controller.php?action=listAll">
                                    <span class="sub-item">Utilisateurs</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../controllers/authorization.controller.php?action=listAll">
                                    <span class="sub-item">Permissions</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashbord/access/histories.php">
                                    <span class="sub-item">Historiques</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
