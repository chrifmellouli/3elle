<div aria-hidden="true" class="modal fade" id="pwdUserRowModal<?php echo $user -> getId (); ?>" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Changer le mot de passe l'utilisateur</span>
                    <span class="fw-light"><?php echo $user -> getUserName (); ?></span>
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../controllers/user.controller.php?action=edit_pwd" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="<?php echo $user -> getId (); ?>">
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label for="password">Mot de passe</label>
                            <input class="form-control" id="password" required
                                   name="password" placeholder="******************"
                                   type="password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button class="btn btn-primary" id="pwdUserRowModal<?php echo $user -> getId (); ?>" type="submit">
                        Changer
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
