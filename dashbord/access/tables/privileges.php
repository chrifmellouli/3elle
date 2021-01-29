<div class="table-responsive">
    <table class="display table table-striped table-hover"
           id="multi-filter-select">
        <thead>
        <tr>
            <th>Privilèges</th>
            <th>Utilisateur</th>
            <th>Permission</th>
            <th style="width: 10%;">Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th></th>
            <th>Utilisateur</th>
            <th>Permission</th>
            <th>Action</th>
        </tr>
        </tfoot>
        <tbody>
        <?php
        foreach ($privileges as $p) {
            include "../dashbord/access/modals/add_privileges.php";
            ?>
            <tr class="bg-transparent">
                <td>
                    <h5 class="text-primary">Gestion <?php echo $p -> getDesignation (); ?></h5>
                </td>
                <td></td>
                <td></td>
                <td>
                    <div class="form-button-action">
                        <button type="button" title=""
                                class="btn btn-link btn-success"
                                data-original-title="Edit Task"
                                data-target="#addPrivilegeRowModal<?php echo $p -> getId (); ?>"
                                data-toggle="modal">
                            <i class="fa fa-edit"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <?php
            foreach ($authorizations as $a) {
                if ( ($a[ 'designation' ] == $p -> getDesignation ()) && ($a[ 'permission' ]) > 0 ) {
                    ?>
                    <tr>
                        <td>Gestion <?php echo $p -> getDesignation (); ?></td>
                        <td><?php echo $a[ 'user_name' ]; ?></td>
                        <td><?php echo $a[ 'permission' ]; ?></td>
                        <td>
                            <div class="form-button-action">
                                <button type="button" title=""
                                        class="btn btn-link btn-danger"
                                        data-original-title="Remove"
                                        data-target="#removePrivilegeRowModal<?php echo $p -> getId (); ?>"
                                        data-toggle="modal">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php
                    include "../dashbord/access/modals/remove_privileges.php";
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
