<div aria-hidden="true" class="modal fade" id="editUserRowModal<?php echo $user->getId(); ?>" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">Modifier l'utilisateur</span>
                    <span class="fw-light"><?php echo $user->getUserName(); ?></span>
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../controllers/user.controller.php?action=edit" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $user->getId(); ?>">
                <input type="hidden" name="is_connected" id="is_connected" value="<?php echo $user->isIsConnected(); ?>">
                <div class="modal-body">
                    <p class="small">Modifier les informations de l'utilisateur sachant que tous les champs sont
                        obligatoires.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label for="user_name">Identifiant</label>
                                <input class="form-control" id="user_name" required
                                       name="user_name" placeholder="Identifiant"
                                       type="text" value="<?php echo $user->getUserName(); ?>">
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label for="name">Prénom</label>
                                <input class="form-control" id="name" required
                                       name="name" placeholder="Prénom"
                                       type="text" value="<?php echo $user->getName(); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label for="last_name">Nom</label>
                                <input class="form-control" id="last_name" required
                                       name="last_name" placeholder="Nom"
                                       type="text" value="<?php echo $user->getLastName(); ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 pr-0">
                            <div class="form-group form-group-default">
                                <label for="position">Position</label>
                                <input class="form-control" id="position" required
                                       name="position" placeholder="Mot de passe"
                                       type="text" value="<?php echo $user->getPosition(); ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label>Active ?</label><br>
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="enable" value="1"
                                        <?php if ( $user->isEnabled() == 'Oui' ) {
                                            echo "checked=''";
                                        } ?>>
                                    <span class="form-radio-sign">Oui</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="enable"
                                           value="0" <?php if ( $user->isEnabled() != 'Oui' ) {
                                        echo "checked=''";
                                    } ?>>
                                    <span class="form-radio-sign">Non</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button class="btn btn-primary" id="editUserRowModal<?php echo $user->getId(); ?>" type="submit">
                        Modifier
                    </button>
                    <button class="btn btn-danger" data-dismiss="modal"
                            type="button">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
