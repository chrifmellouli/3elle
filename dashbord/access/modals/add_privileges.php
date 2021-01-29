<div aria-hidden="true" class="modal fade" id="addPrivilegeRowModal<?php echo $p -> getId (); ?>" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">Attribuer a un utilisteur le privilèges</span>
                    <span class="fw-light">Gestion <?php echo $p->getDesignation(); ?></span>
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../controllers/authorization.controller.php?action=ajout" method="post">
                <input type="hidden" name="id_privilege" id_privilege="id" value="<?php echo $p -> getId (); ?>">
                <div class="modal-body">
                    <p class="small">Selectioner l'utilisateur et y attribuer les permissions requises pour ce
                        pivilèges.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="id_user">Utilisateur</label>
                                <select class="form-control" id="id_user" name="id_user">
                                    <?php
                                    foreach ($users as $user) {
                                        ?>
                                        <option value="<?php echo $user -> getId (); ?>">
                                            <?php echo $user -> getUserName (); ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label>Active ?</label><br>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="permission" value="1"
                                           checked="">
                                    <span class="form-radio-sign">Consulter</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="permission" value="2">
                                    <span class="form-radio-sign">Consulter - Ajouter - Modifier</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="permission" value="3">
                                    <span class="form-radio-sign">Consulter - Ajouter - Modifier - Supprimer</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button class="btn btn-primary" id="addPrivilegeRowModal<?php echo $p -> getId (); ?>"
                            type="submit">
                        Ajouter
                    </button>
                    <button class="btn btn-danger" data-dismiss="modal"
                            type="button">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
