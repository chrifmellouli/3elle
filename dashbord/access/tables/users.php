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
            <th>Action</th>
        </tr>
        </tfoot>
        <tbody>
        <?php
        $array_users = (array)$users;
        foreach ($array_users as $user) {
            $enable = ($user -> isEnabled ()) ? 'Oui' : 'Non';
            $is_connected = ($user -> isIsConnected ()) ? 'Oui' : 'Non';
            ?>
            <tr>
                <?php
                echo "<td>" . $user -> getUserName () . "</td>";
                echo "<td>" . $user -> getLastName () . "</td>";
                echo "<td>" . $user -> getName () . "</td>";
                echo "<td>" . $user -> getPosition () . "</td>";
                echo "<td class='" . $enable . "'>" . $enable . "</td>";
                ?>
                <td>
                    <div class="form-button-action">
                        <button type="button" title=""
                                class="btn btn-link btn-primary btn-lg"
                                data-original-title="Edit Task"
                                data-target="#editUserRowModal<?php echo $user->getId(); ?>"
                                data-toggle="modal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" title=""
                                class="btn btn-link btn-danger"
                                data-original-title="Remove"
                                data-target="#removeUserRowModal<?php echo $user->getId(); ?>"
                                data-toggle="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        <button type="button" title=""
                                class="btn btn-link btn-warning"
                                data-original-title="Remove"
                                data-target="#pwdUserRowModal<?php echo $user->getId(); ?>"
                                data-toggle="modal">
                            <i class="fa fa-key"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <?php
            include "../dashbord/access/modals/edit_users.php";
            include "../dashbord/access/modals/remove_users.php";
            include "../dashbord/access/modals/pwd_users.php";
        }
        ?>
        </tbody>
    </table>
</div>
