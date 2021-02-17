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
                            <li <?php if ( isset( $show_submenue_user ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/user.controller.php?action=listAll">
                                    <span class="sub-item">Utilisateurs</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_authorization ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/authorization.controller.php?action=listAll">
                                    <span class="sub-item">Permissions</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_history ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/history.controller.php?action=listAll">
                                    <span class="sub-item">Historiques</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item active submenu">
                    <a data-toggle="collapse" href="#settings">
                        <i class="fas fa-table"></i>
                        <p>Gestion des paramètres</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?php if ( isset( $show_submenue_item_settings ) ) {
                        echo 'show';
                    } ?>" id="settings">
                        <ul class="nav nav-collapse">
                            <li <?php if ( isset( $show_submenue_delivery ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/delivery.controller.php?action=listAll">
                                    <span class="sub-item">Livraison</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_state ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/state.controller.php?action=listAll">
                                    <span class="sub-item">Etats des commandes</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_blackList ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/blackList.controller.php?action=listAll">
                                    <span class="sub-item">Liste noire</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item active submenu">
                    <a data-toggle="collapse" href="#product">
                        <i class="fas fa-table"></i>
                        <p>Gestion des produits</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?php if ( isset( $show_submenue_item_product ) ) {
                        echo 'show';
                    } ?>" id="product">
                        <ul class="nav nav-collapse">
                            <li <?php if ( isset( $show_submenue_category ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/category.controller.php?action=listAll">
                                    <span class="sub-item">Catégories</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_option ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/option.controller.php?action=listAll">
                                    <span class="sub-item">Options</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_product ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/product.controller.php?action=listAll">
                                    <span class="sub-item">Produits</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item active submenu">
                    <a data-toggle="collapse" href="#promotion">
                        <i class="fas fa-table"></i>
                        <p>Gestion des promotions</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?php if ( isset( $show_submenue_item_promotions ) ) {
                        echo 'show';
                    } ?>" id="promotion">
                        <ul class="nav nav-collapse">
                            <li <?php if ( isset( $show_submenue_promotion ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/promotion.controller.php?action=listAll">
                                    <span class="sub-item">Promotions</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_product_promotion ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/productPromoted.controller.php?action=listAll">
                                    <span class="sub-item">Produits en promotion</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_product_gifted ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/promotedGift.controller.php?action=listAll">
                                    <span class="sub-item">Produits cadeaux</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_gift_on_product ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/giftOnProduct.controller.php?action=listAll">
                                    <span class="sub-item">Cadeaux sur produit</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_gift_on_order ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/giftOnOrder.controller.php?action=listAll">
                                    <span class="sub-item">Cadeaux sur commande</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_discount_on_product ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/discountOnProduct.controller.php?action=listAll">
                                    <span class="sub-item">Remise sur produit</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_discount_on_order ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/discountOnOrder.controller.php?action=listAll">
                                    <span class="sub-item">Remise sur commande</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_free_del_on_product ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/freeDeliveryOnProduct.controller.php?action=listAll">
                                    <span class="sub-item">Livraison gratuite sur produit</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_free_del_on_order ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/freeDeliveryOnOrder.controller.php?action=listAll">
                                    <span class="sub-item">Livraison gratuite sur commande</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item active submenu">
                    <a data-toggle="collapse" href="#order">
                        <i class="fas fa-table"></i>
                        <p>Gestion des commandes</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?php if ( isset( $show_submenue_item_order ) ) {
                        echo 'show';
                    } ?>" id="order">
                        <ul class="nav nav-collapse">
                            <li <?php if ( isset( $show_submenue_customer ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/customer.controller.php?action=listAll">
                                    <span class="sub-item">Clients</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_order ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/order.controller.php?action=listAll">
                                    <span class="sub-item">Commandes</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item active submenu">
                    <a data-toggle="collapse" href="#supplier">
                        <i class="fas fa-table"></i>
                        <p>Gestion des fournisseurs</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?php if ( isset( $show_submenue_item_supplier ) ) {
                        echo 'show';
                    } ?>" id="supplier">
                        <ul class="nav nav-collapse">
                            <li <?php if ( isset( $show_submenue_supplier ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/supplier.controller.php?action=listAll">
                                    <span class="sub-item">Fournisseurs</span>
                                </a>
                            </li>
                            <li <?php if ( isset( $show_submenue_supply ) ) {
                                echo "class='active'";
                            } ?>>
                                <a href="../../controllers/supply.controller.php?action=listAll">
                                    <span class="sub-item">Fournitures</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
