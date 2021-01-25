<?php
if ( isset( $_REQUEST[ 'users' ] ) ) {
    $serialised_users = $_REQUEST[ 'users' ];
    $safe_object = str_replace ( "~~~~", "\0", $serialised_users );
    $users = (array)unserialize ( $safe_object );
} else {
    $users = [];
}
?>
<div class="table-responsive">
    <table class="display table table-striped table-hover"
           id="multi-filter-select">
        <thead>
        <tr>
            <th>Identifiant</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Position</th>
            <th>Active</th>
            <th>Connecté</th>
            <th style="width: 10%;">Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Identifiant</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Position</th>
            <th>Active</th>
            <th>Connecté</th>
            <th>Action</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($users as $user) {
            include "modals/edit_users.php";
            include "modals/remove_users.php";
            $counter = 0;
            $id=0;
            ?>
            <tr>
                <?php foreach ($user as $u) {
                    if ( ($counter != 0) && ($counter != 1) && ($counter != 3) && ($counter < 7) ) {
                        ?>
                        <td><?php echo $u; ?></td>
                        <?php
                    } else if ( ($counter != 0) && ($counter != 1) && ($counter != 3) && ($counter >= 7) ) {
                        $boolean_var = ($u) ? 'Oui' : 'Non';
                        echo "<td class='" . $boolean_var . "'>" . $boolean_var . "</td>";
                    }
                    $counter++;
                } ?>
                <td>
                    <div class="form-button-action">
                        <button type="button" title=""
                                class="btn btn-link btn-primary btn-lg"
                                data-original-title="Edit Task" data-target="#editUserRowModal"
                                data-toggle="modal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" title=""
                                class="btn btn-link btn-danger"
                                data-original-title="Remove" data-target="#removeUserRowModal"
                                data-toggle="modal">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
