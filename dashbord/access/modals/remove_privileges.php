<div aria-hidden="true" class="modal fade" id="removePrivilegeRowModal<?php echo $p->getId(); ?>" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold"> Supprimer le privilège</span>
                    <span class="fw-light"><?php echo $p->getDesignation(); ?></span>
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal"
                        type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">Voulez vous supprimer le privillège</p>
            </div>
            <div class="modal-footer no-bd">
                <form action="../../controllers/authorization.controller.php?action=delete" method="post">
                    <input type="hidden" name="id_privilege" id="id_privilege" value="<?php echo $p->getId(); ?>">
                    <input type="hidden" name="id_user" id_privilege="id_user" value="<?php echo $a[ 'id_user' ]; ?>">
                    <button class="btn btn-primary" id="removePrivilegeRowModal<?php echo $p->getId(); ?>" type="submit">
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
