<div aria-hidden="true" class="modal fade" id="removeUserRowModal<?php echo $user->getId(); ?>" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Supprimer l'utilisateur</span>
                    <span class="fw-light"><?php echo $user->getUserName(); ?></span>
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">Voulez vous supprimer l'utilisateur</p>
            </div>
            <div class="modal-footer no-bd">
                <form action="../../controllers/user.controller.php?action=delete" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo $user->getId(); ?>">
                    <button class="btn btn-primary" id="removeUserRowModal<?php echo $user->getId(); ?>" type="submit">
                        Supprimer
                    </button>
                    <button class="btn btn-danger" data-dismiss="modal"
                            type="button">
                        Annuler
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
